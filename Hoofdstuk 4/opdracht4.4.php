<?php
/**
 * User: Diego Roza
 * Date: 30-03-2020
 * Time: 16:22
 * File: opdracht4.4.php
 */

$opdracht = "Opdracht 4.4";
/*Ophalen en schrijven van header en script*/
include '../includes/header.php'; ?>

<body>
<h1>
    Week kalender komende week:
</h1>

<!--Aankomende week tonen met vandaag als start datum-->
<?php
$dagNamen = array("zondag","maandag","dinsdag","woensdag","donderdag","vrijdag","zaterdag", "zondag");
for ($day = 0; $day <8 ; $day++)
{
    $datumAlsGetal = strtotime("+$day days");
    echo "<br>";
    echo "Dag ";
    $dw = date('w', $datumAlsGetal);
    echo "$dw is ";
    echo "$dagNamen[$dw] ";
    echo date('d-m-Y', $datumAlsGetal);
}
?>

<br> <br>

<!--Extra opdracht waarin de week getoont word met vandaag als start datum met strings uit de array over etc. morgen-->
<?php
$DagNaam = array("Vandaag","Morgen","Over-Morgen","Over-Over-Morgen","Over-Over-Over-Morgen","Over-Over-Over-Over-Morgen",
    "Over-Over-Over-Over-Over-Morgen", "Over-Over-Over-Over-Over-Over-Morgen");
$dagNamen = array("zondag","maandag","dinsdag","woensdag","donderdag","vrijdag","zaterdag", "zondag");
for ($day = 0; $day <8 ; $day++)
{
    $datumAlsGetal = strtotime("+$day days");
    echo "<br>";
    echo "$DagNaam[$day] ";
    $dw = date('w', $datumAlsGetal);
    echo "$dw is ";
    echo "$dagNamen[$dw] ";
    echo date('d-m-Y', $datumAlsGetal);
}

?>
<br>
<br>
<br>
<!--Ophalen en schrijven van footer-->
<a href="../index.php">Terug</a>
<?php include '../Includes/footer.php'; ?>
</body>
</html>