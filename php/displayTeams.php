<?php 
$mysqli = new mysqli('127.0.0.1', 'langustaaa', 'hasloDB!1', 'langusta');

if ($mysqli->connect_errno) 
{
  echo "Wystąpił błąd połączenia z bazą danych. Spróbuj ponownie później.<br>";
  echo mysqli_connect_error();
  exit;
}
$mysqli->query("SET NAMES utf8;");

echo "<div class='logon'>";

if (!isset($_COOKIE["logged"]))
{
  if (isset($_POST["login"]) && isset($_POST["pass"]) )
  {
    $q = "SELECT Password FROM Admins WHERE Login=\"".$_POST["login"]."\";";
    $result = $mysqli->query($q);
    $row = $result->fetch_row();

    $formPass = md5($_POST["pass"]);
    if ($formPass == $row[0])
    {
      echo "<div class='logged'>Zalogowano.</div><br>";
      setcookie("logged", $_POST["login"]);
      header("Refresh:0");
    } else
    {
      echo "Błędne hasło.<br>";
      header("Refresh:1");
    }
  } else
  {
    echo "<form method=POST>";
    echo "<a href='index.php'><img src='image/logo.svg'/></a>";
    echo "<p>Witaj w serwisie Panel-Admin!</p> Zaloguj się, by mieć dostęp do poszczególych funkcji.<br><br><br>";
    echo "<input placeholder=Login type=text name=login></input>";
    echo "<input placeholder=Hasło type=password name=pass></input>";
    echo "<input type=submit value=Zaloguj></input>";
    echo "</form>";
    echo "</div>";
  }
}
else
{
  echo "<div class='teamadm'>Wybierz drużynę, aby wyświetlić dotyczące jej szczegóły.<br><br>";
  echo "Drużyny: <br><ol>";
  $q = "SELECT `Teams`.`Name`, `Teams`.`Coach_name`, `Leaders`.`Name`, `Leaders`.`Surname`, `Leaders`.`Nick`, `Leaders`.`Phone`, `Leaders`.`Email`, m1.`Name_surname`, m1.`Nick`, m2.`Name_surname`, m2.`Nick`, m3.`Name_surname`, m3.`Nick`, m4.`Name_surname`, m4.`Nick`, m5.`Name_surname`, m5.`Nick`, m6.`Name_surname`, m6.`Nick`
        FROM `Teams`
        LEFT JOIN `Members` m1 ON `Teams`.`Member1_id` = m1.`Id` 
        LEFT JOIN `Members` m2 ON `Teams`.`Member3_id` = m2.`Id` 
        LEFT JOIN `Members` m3 ON `Teams`.`Member2_id` = m3.`Id` 
        LEFT JOIN `Members` m4 ON `Teams`.`Member4_id` = m4.`Id` 
        LEFT JOIN `Members` m5 ON `Teams`.`Member5_id` = m5.`Id` 
        LEFT JOIN `Members` m6 ON `Teams`.`Member6_id` = m6.`Id` 
        LEFT JOIN `Leaders` ON `Teams`.`Leader_id` = `Leaders`.`Id`";

  if ($result = $mysqli->query($q))
  {
    while ($row = $result->fetch_row())
    {
      echo "<li class='team-info-toggle' onclick='\$(\"#info-$row[0]\").toggle(200);'>";
      echo $row[0];
      echo "<div class='info-team' id=\"info-$row[0]\">";
      //for ($i = 1; $i < $mysqli->field_count; $i+=1)
      //{
      //  echo $row[$i]." ";
      //}
      echo "<br>Trener: $row[1]<br>";
      echo "Leader: $row[2] $row[3]<br>";
      echo "Nick: $row[4]<br>";
      echo "Telefon: $row[5]<br>";
      echo "Email: $row[6]<br>";
      echo "Czlonek 1: $row[7] ($row[8])<br>";
      echo "Czlonek 2: $row[9] ($row[10])<br>";
      echo "Czlonek 3: $row[11] ($row[12])<br>";
      echo "Czlonek 4: $row[13] ($row[14])<br>";
      echo "Rezerwowy 1: $row[15] ($row[16])<br>";
      echo "Rezerwowy 2: $row[17] ($row[18])<br><br>";
      echo "</div>";
        
      echo "</li>";
    }
    $result->close();
  } else
  {
    echo "Błąd zapytania<br>";
  }

  echo "</ol><br>";
  echo "</div>";
  echo "<div id='cr'><br><br></div>";

  echo "<br>Wprowadź wyniki poszczególnych meczy wegług schematu:<br>";
  echo "<div class='center'>WYGRANA - PORAŻKA</div><br>";
  echo "<ol id='second'>";


  $q = "SELECT m.Id, t1.Name, t2.Name FROM Matches m
    LEFT JOIN Teams t1 ON t1.Id = WinnerTeam_id
    LEFT JOIN Teams t2 ON t2.Id = DefeatTeam_id;";
  if ($result = $mysqli->query($q))
  {
    while ($row = $result->fetch_row())
    {
      echo "<li><br>";
      echo " $row[1] - $row[2]";
      echo "<form method=POST>";
      echo "<input type=hidden name=deleteId value=$row[0]></input>";
      echo "<input type=submit name=delete value=Skasuj></input>";
      echo "</form>";
      echo "</li>";
    }
  } else
  {
    echo "Błąd zapytania<br>";
  }

  if (isset($_POST['add']))
  {
    if (isset($_POST['winner-id']) && isset($_POST['defeat-id']) )
    {
      $q = "INSERT INTO Matches(WinnerTeam_id, DefeatTeam_id) VALUES (".htmlspecialchars($_POST['winner-id']).",".htmlspecialchars($_POST['defeat-id']).");";
      $result = $mysqli->query($q);
      if (!$result) 
      { 
        echo "Błąd dodawania!<br>"; 
      } else
      {
        header("Refresh:0");
      }
    }
  } else
  if (isset($_POST['delete']))
  {
    if (isset($_POST['deleteId']) )
    {
      $q = "DELETE FROM Matches WHERE Id=".htmlspecialchars($_POST['deleteId']).";";
      $result = $mysqli->query($q);
      if (!$result)
      {
        echo "Błąd kasowania!<br>";
      } else
      {
        header("Refresh:0");
      }
    }
  }

  echo "<li><br>";

  $teams = array();
  $q = "SELECT Id, Name FROM Teams;";
  if ($result = $mysqli->query($q))
  {
    while ($row = $result->fetch_row())
    {
      $teams[$row[1]] = $row[0];
    }
  }
  $result->close();

  echo "<form id='addMatch' method='POST'>";
    echo "<div class='select-style1'><select name='winner-id' id='winner-id'>";
      foreach($teams as $name => $id) { echo "<option value=$id>$name</option>"; }
    echo "</select></div>";
    echo "<div class='select-style2'><select name='defeat-id' id='defeat-id'>";
      foreach($teams as $name => $id) { echo "<option value=$id>$name</option>"; }
    echo "</select></div>";
    echo "<input type='submit' name='add' value='Dodaj'></input>";
  echo "</form>";
  echo "</li>";

  echo "</ol><br>";
  echo "</div>";
  echo "<form method=POST><div id='logoutcont'><input type=submit name=logout value=Wyloguj></input></div></form>";
  if (isset($_POST["logout"]))
  {
    setcookie("logged", "", time() - 3600);
    header("Refresh:0");
  }
}

  $mysqli->close();
    
?>

