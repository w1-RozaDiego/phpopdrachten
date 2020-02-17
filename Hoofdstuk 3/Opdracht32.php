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

?>
</body>
</html>
