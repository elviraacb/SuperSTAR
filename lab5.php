<?php
//echo "<body background='LightBlue'> </body>";
date_default_timezone_set("Europe/Bucharest");
echo "<h3>" . date("l d F") . " anului " . date("Y") . " ora " . date("h") . " și " . date("i") . " de minute și " . date("s") . " secunde" . "</h3>";


$d=strtotime($_POST['inDate']);
//echo "Data din formular: ".date("Y-m-d", $d);

$day = date("d", $d);
$month = date("m", $d);
$sunny = date("l", $d);
$zodiac = "";
$magazin = "";

function ZODIA($day, $month){
	if(($month == 1 && $day <= 20) || ($month == 12 && $day >=22)) {
    return $zodiac = "Ești zidia Capricorn";
  } else if(($month == 1 && $day >= 21) || ($month == 2 && $day <= 18)) {
    return $zodiac = "Ești zidia Vărsător";
  } else if(($month == 2 && $day >= 19) || ($month == 3 && $day <= 20)) {
    return $zodiac = "Ești zidia Pești";
  } else if(($month == 3 && $day >= 21) || ($month == 4 && $day <= 20)) {
    return $zodiac = "Ești zidia Berbec";
  } else if(($month == 4 && $day >= 21) || ($month == 5 && $day <= 20)) {
    return $zodiac = "Ești zidia Taur";
  } else if(($month == 5 && $day >= 21) || ($month == 6 && $day <= 20)) {
    return $zodiac = "Ești zidia Gemeni";
  } else if(($month == 6 && $day >= 22) || ($month == 7 && $day <= 22)) {
    return $zodiac = "Ești zidia Rac"; 
  } else if(($month == 7 && $day >= 23) || ($month == 8 && $day <= 23)) {
    return $zodiac = "Ești zidia Leu";
  } else if(($month == 8 && $day >= 24) || ($month == 9 && $day <= 23)) {
    return $zodiac = "Ești zidia Fecioară";
  } else if(($month == 9 && $day >= 24) || ($month == 10 && $day <= 23)) {
    return $zodiac = "Ești zidia Balanță"; 
  } else if(($month == 10 && $day >= 24) || ($month == 11 && $day <= 22)) {
    return $zodiac = "Ești zidia Scorpion";
  } else if(($month == 11 && $day >= 23) || ($month == 12 && $day <= 21)) {
    return $zodiac = "Ești zidia Săgetător";
  }
}
echo ZODIA($day, $month);

echo "<br><br>";

function MAGAZIN($day, $sunny){
	if($day % 2 == 0 && (($sunny !== "Saturday") && ($sunny !== "Sunday"))) {
    return $magazin = "Magazinul lucrează de la ora 9:00 - 22:00";
  } else if($day % 2 !== 0 && (($sunny !== "Saturday") && ($sunny !== "Sunday"))) {
    return $magazin = "Magazinul lucrează de la ora 8:00 - 21:00";
  } else if($sunny == "Saturday") {
    return $magazin = "Magazinul lucrează de la ora 9:00 - 16:00";
  } else if($sunny == "Sunday") {
    return $magazin = "Magazinul nu lucrează";
  }
}
echo "<b>" . MAGAZIN($day, $sunny) . "</b>";
?>