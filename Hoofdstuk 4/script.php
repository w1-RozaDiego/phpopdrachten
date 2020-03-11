<!DOCTYPE html>
<html>
<head>
    <title>Opdracht 3.3 Header</title>
    <?php include 'includes/header.php'; ?>
</head>
<body>
<!--
ASP Gijsbrechts
PHP Saebu
Javascript Evers
Burgerschap Visser
Modelleren Bijnen
Computertekenen Berg
Nederlands Ende
DigitaleVaardigheden Pielage
Engels Mitrovic-Vejzovic
Begeleiding Visser
SQL Wetering
Rekenen Wetering
-->

<?php
$courseName = "Nederlands";
$teacherName = "";

switch ($courseName)
{
    case ASP:
        $teacherName = "Gijsbrechts";
        break;
    case PHP:
        $teacherName = "Saebu";
        break;
    case Javascript:
        $teacherName = "Evers";
        break;
    case Burgerschap:
        $teacherName = "Visser";
        break;
    case Modelleren:
        $teacherName = "Bijnen";
        break;
    case Computertekenen:
        $teacherName = "Berg";
        break;
    case Nederlands:
        $teacherName = "Ende";
        break;
    case DigitaleVaardigheden:
        $teacherName = "Pielage";
        break;
    case Engels:
        $teacherName = "Mitrovic-Vejzovic";
        break;
    case Begeleiding:
        $teacherName = "Visser";
        break;
    case SQL:
        $teacherName = "Wetering";
        break;
    case Rekenen:
        $teacherName = "Wetering";
        break;
}
?>



<a href="../index.php">Terug</a>
</body>
</html>
