<!DOCTYPE html>
<html>
<head>
    <head>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta charset="utf-8">
    </head>
</head>
<body>
<?php
$event ="Elfstedentocht";
$eventfries ="Alvestêdetocht";
$lenthkm ="200";
$info ="schaatstocht";
$icetype ="natuurijs";
$organisation ="Koninklijke Vereniging De Friese Elf Steden";
$city ="Leeuwarden";
$place ="Friesland";
$timesdone ="15";
$firstride ="1909";
$doneperyear ="1";

$verhaal = "De  $event  (Fries: $eventfries)
 is een  $lenthkm kilometer lange  $info  
 over  $icetype  die wordt georganiseerd door de  $organisation.
 $city , de hoofdstad van  $place , is start- en aankomstplaats.
 De  $event  is inmiddels  $timesdone  maal verreden en
 werd voor het eerst in  $firstride  gereden en wordt maximaal  $doneperyear 
 keer per winter gehouden. ";

echo "<p>$verhaal</p>"
?>
</body>
</html>
