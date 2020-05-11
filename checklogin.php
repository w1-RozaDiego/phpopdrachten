<?php
/**
 * User: Diego Roza
 * Excersise: Opdracht 6.1
 * File: Opdracht61.php
 * Date: 06-05-2020
 */
?>

<?php
// Array waarin values worden aangegeven (naam en wachtwoord)
$authusers = array(
    "Abu" => "bekend",
    "Nordin" => "onbekend",
    "BasZ" => "654321",
    "Rosalie" => "bloemblaadjes");

$username = $_POST["username"];
$password = $_POST["password"];


if(isset($_POST['submit']))
{
// Foreach loop die kijkt naar de username en wachtwoord, deze verwijst dan door naar een webpagina via include
foreach ($authusers as $key => $value)
    {

if ($username == $key && $password == $value)
        {
            session_start();
            $_SESSION['username'] = $_POST['username'];
            header('location: Welkom.php');
            include "Welkom.php";
            return;
        }
        elseif($username != $key && $password != $value)
        {
            include "opdracht61.php";
        }
    }
}
?>







