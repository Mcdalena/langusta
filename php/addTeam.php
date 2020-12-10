<script>
$(function() {
    $('html, body').animate({
        scrollTop: $("#join").offset().top
    }, 800);
 });
</script>
<?php
function addMember($mysqli, $name_surname, $nick) 
{
  if (strlen($name_surname) <= 0
    ||  strlen($nick) <= 0) return "null";

  $result = $mysqli->query("INSERT INTO Members (Name_surname, Nick) VALUES (\"".$name_surname."\",\"".$nick."\")");
  if (!$result)
  {
    echo "Błąd zgłoszenia. Sprawdź dane.<br>";
    return "null";
  }
  $ret = $mysqli->insert_id;
  return $ret;
}

$mysqli = new mysqli('127.0.0.1', 'langustaaa', 'hasloDB!1', 'langusta');

if ($mysqli->connect_errno) 
{
  echo "Przepraszamy, wystąpił błąd połączenia. Spróbuj ponownie za kilka minut.";
} else
{
  $mysqli->query("SET NAMES utf8;");

  $q1 = "INSERT INTO Leaders (Name, Surname, Nick, Phone, Email) VALUES(\"".$name."\", \"".$surname."\",\"".$nick."\",\"".$phone."\",\"".$email."\");";
  $result1 = $mysqli->query($q1);
  if (!$result1)
  {
    echo "Błąd zgłoszenia. Sprawdź dane leadera.<br>";
  }
  $leader_id = $mysqli->insert_id;


  $c1_id = addMember($mysqli, $c1, $nck1);
  $c2_id = addMember($mysqli, $c2, $nck2);
  $c3_id = addMember($mysqli, $c3, $nck3);
  $c4_id = addMember($mysqli, $c4, $nck4);
  $c5_id = addMember($mysqli, $r1, $rnck1);
  $c6_id = addMember($mysqli, $r2, $rnck2);  

  $q2 = "INSERT INTO Teams (Name, Leader_id, Member1_id, Member2_id, Member3_id, Member4_id, Member5_id, Member6_id, Coach_name) VALUES (\"".$teamname."\",".$leader_id.", ".$c1_id.", ".$c2_id.", ".$c3_id.", ".$c4_id.", ".$c5_id.", ".$c6_id.", \"".$coach."\");";   
  $result2 = $mysqli->query($q2);
  if (!$result2)
  {
	  echo "Błąd zgłoszenia. Sprawdź dane drużyny.<br>".$mysqli->error;
  }        
  else
  {
    echo "Zgłoszenie zostało wysłane pomyślnie.<br>";
  }

  $mysqli->close();
}
?>
