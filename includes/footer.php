<?php
/**
 * User: Diego Roza
 * Excersise: Opdracht 6.1
 * File: Opdracht61.php
 * Date: 06-05-2020
 */
?>

<?php

include 'includes/variabele.php';
session_start();
if (isset($_SESSION['username']))
{
    $bezoeker = $_SESSION['username']. "&nbsp;<a href= /loguit.php ><br>Loguit</a>";
}
else
{
    $bezoeker = "onbekende bezoeker". "&nbsp;<a href= /opdracht61.php ><br>Login</a>";
}
$year = date("Y");
$hour = date("H");

if ($hour >= 0 && $hour <= 5)
{
    echo "goedennacht!";
}
elseif ($hour >= 5 && $hour <= 12)
{
    echo "goedenochtend!";
}
if ($hour >= 12 && $hour <= 17)
{
    echo "goedenmiddag!";
}


echo "
<footer><br> <span>  © $year  $bezoeker </span>
</footer>
</body>
</html>";
 ?>
