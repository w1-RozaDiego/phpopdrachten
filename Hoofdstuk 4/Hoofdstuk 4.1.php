<!DOCTYPE html>
<html>
<head>
    <title>Opdracht 4.1</title>
</head>
<body>
<a href="../index.php">Terug</a>
<?php
date_default_timezone_set( " Europe/Amsterdam " ) ;
echo $name;
echo $year;
include 'footer.php';

$hour = date("H");

if ($hour >= 0 && $hour < 5)
{
    echo "Goedenacht";
}
if ($hour >= 5 && $hour < 12)
{
    echo "Goedeochtend";
}
if ($hour >= 12 && $hour < 17)
{
    echo "Goedemiddag";
}
if ($hour >= 17 && $hour <= 24)
{
    echo "Goedeavond";
}
?>
</body>
</html>

