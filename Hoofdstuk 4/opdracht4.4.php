<?php
/**
 * User: Diego Roza
 * Date: 30-03-2020
 * Time: 16:22
 * File: opdracht4.4.php
 */

$opdracht = "Opdracht 4.4";
include '../includes/header.php'; ?>

<body>
<h1>
    Week kalender komende week:
</h1>

<?php
$dagNamen = array("zondag","maandag","dinsdag","woensdag","donderdag","vrijdag","zaterdag", "zondag");
for ($day = 0; $day <8 ; $day++)
{
    $datumAlsGetal = strtotime("+$day days");
    echo "<br>";
    echo "Dag ";
    echo date('w', $datumAlsGetal);
    echo " is ";
    echo "$dagNamen[$day] ";
    echo date('d-m-Y', $datumAlsGetal);
}
?>

<br> <br>

<?php
$DagNaam = array("Vandaag","Morgen","Over-Morgen","Over-Over-Morgen","Over-Over-Over-Morgen","Over-Over-Over-Over-Morgen",
    "Over-Over-Over-Over-Over-Morgen", "Over-Over-Over-Over-Over-Over-Morgen");
$dagNamen = array("zondag","maandag","dinsdag","woensdag","donderdag","vrijdag","zaterdag", "zondag");
for ($day = 0; $day <8 ; $day++)
{
    $datumAlsGetal = strtotime("+$day days");
    echo "<br>";
    echo "$DagNaam[$day] ";
    echo " is ";
    echo "$dagNamen[$day] ";
    echo date('d-m-Y', $datumAlsGetal);
}

?>
<br>
<br>
<br>
<a href="../index.php">Terug</a>
<?php include '../Includes/footer.php'; ?>
</body>
</html>