<?php
function validate($str)
{
  $str = trim($str);
  $str = stripslashes($str);
  $str = htmlspecialchars($str);

  return $str;
}

$name = $surname = $nick = $phone = $email = $teamname =
  $c1 = $nck1 = $c2 = $nck2 = $c3 = $nck3 = $c4 = $nck4 = 
  $r1 = $rnck1 = $r2 = $rnck2 = $coach = "";

$name = validate($_POST["name"]);
$surname = validate($_POST["surname"]);
$nick = validate($_POST["nick"]);
$phone = validate($_POST["phone"]);
$email = validate($_POST["email"]);
$teamname = validate($_POST["teamname"]);
$c1 = validate($_POST["c1"]);
$nck1 = validate($_POST["nck1"]);
$c2 = validate($_POST["c1"]);
$nck2 = validate($_POST["nck2"]);
$c3 = validate($_POST["c3"]);
$nck3 = validate($_POST["nck3"]);
$c4 = validate($_POST["c4"]);
$nck4 = validate($_POST["nck4"]);

if (!empty($_POST["r1"]) ) {
  $r1 = validate($_POST["r1"]);
}
if (!empty($_POST["rnck1"]) ) {
  $rnck1 = validate($_POST["rnck1"]);
}
if (!empty($_POST["r2"]) ){
  $r2 = validate($_POST["r2"]);
}
if (!empty($_POST["rnck2"]) ) {
  $rnck2 = validate($_POST["rnck2"]);
}
if (!empty($_POST["coach"]) ) {
  $coach = validate($_POST["coach"]);
}
?>
