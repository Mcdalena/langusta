<?php
$mysqli = new mysqli('127.0.0.1', 'langustaaa', 'hasloDB!1', 'langusta');
if ($mysqli->connect_errno) 
{
  echo "Błąd pobierania wyników.";
} else
{
  $q="select WinnerTeam_id, Teams.Name, count(*) from Matches LEFT JOIN Teams ON WinnerTeam_id=Teams.Id group by WinnerTeam_id ORDER BY count(*) DESC;";
  $result = $mysqli->query($q);
  if (!$result)
  {
    echo "Błąd pobierania wyników!";
  } else
  {
    while ($row = $result->fetch_row())
    {
      echo "<div id='tnw'> $row[1]:</div><div id='lwm'> $row[2]</div><br>";
    }
  }
  $result->close();
  $mysqli->close();
}
  
?>
