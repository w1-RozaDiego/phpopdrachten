<!DOCTYPE html>
<html>
<head>
    <head>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="stylesheet32.css">
    </head>
</head>
<body>
<?php

$trafficLightColor = ("green");
$ambulanceComing = false;
$driveOn = true;

if ($trafficLightColor = ("green") and ! $ambulanceComing and $driveOn)
{
    echo "<h2 id='green'>U mag doorrijden.</h2>";

}

else
{
    echo "<h2 id='redorange'>U moet stoppen.</h2>";
}




$countryName = "";
$currentAge = 19;

if ($countryName == "Zweden" && $currentAge >= 20 ||
    $countryName == "Nederland" && $currentAge >= 18 ||
    $countryName == "Cyprus" && $currentAge >= 17 ||
    $countryName == "Bulgarije" && $currentAge >= 18 ||
    $countryName == "België" && $currentAge >= 18)
{
    echo "Je woont in ".$countryName." en bent ".$currentAge." jaar oud <br> <br>";
    echo "Je mag hier sterke alcohol drinken";
}
else if ($countryName == "Zweden" && $currentAge >= 18 ||
    $countryName == "Nederland" && $currentAge >= 18 ||
    $countryName == "Cyprus" && $currentAge >= 17 ||
    $countryName == "Bulgarije" && $currentAge >= 18 ||
    $countryName == "België" && $currentAge >= 16)
{
    echo "Je woont in ".$countryName." en bent ".$currentAge." jaar oud <br> <br>";
    echo "Je mag hier zwakke alcohol drinken";
}
?>
</body>
</html>
