<?php

// Show login.php or not
$show = true;



// This code is to check if the user filled in both fields //


// Empty variable used for echo
$empty = "";
$message = "";

// Retrieving the value of username and password from login.php
$username = $_POST['username'];
$password = $_POST['password'];

// Checking if either / both username and password are empty, if so the $empty will echo a message
if(empty($username) || empty($password))
{
    $empty = "Vul A.U.B. beide velden in..";
}





// This code is to check if the user filled in the proper information in both fields //


// Array that contains the values of each username and each password
$login = array("option1" => "Kees",
    "option2" => "Jan",
    "option3" => "Piet",
    "option4" => "Henk",
    "option5" => "Hendrik",
    "option6" => "Keessen",
    "option7" => "Janssen",
    "option8" => "Pietersen",
    "option9" => "Henkie",
    "option10" => "Hendriksen");

// Checks if user clicked on submit, if so a foreach code will run to validate input values
if(isset($_POST['submit']))
{
    foreach ($login as $key => $value) {
        // Checking if both username and password are equal to option values
        if ($username == $key && $password == $value) {
            // Sets variable show as false so the login screen won't load in again
            $show = false;
            ?>
            <div style="text-align: center">
            <h1>Bergheen</h1>
            <h4>Welkom</h4>
            <table style="padding-left: 45%; padding-right: 45%;">
                <tr>
                    <td>
                        Openingstijden
                    </td>
                    <td>
                        Adresgegevens
                    </td>
                </tr>
                <tr>
                    <td>
                        Do: 22:00
                    </td>
                    <td>
                        Am Wriezener Bahnhof
                    </td>
                </tr>
                <tr>
                    <td>
                        Vr: All day
                    </td>
                    <td>
                        10243 Berlin
                    </td>
                </tr>
                <tr>
                    <td>
                        Za: All day
                    </td>
                    <td>
                        Duitsland
                    </td>
                </tr>
                <tr>
                    <td>
                        Zo: 12:00
                    </td>
                </tr>
            </table>
            <p>
                Deze gegevens dien je ten alle tijden geheim te houden!
            </p>
            </div>
            <?php
            // Returns content
            return;
        }
        // If the filled in content is not correct a message will appear through a echo
        elseif($username != $key && $password != $value) {
            $message = "Foutieve gebruikersnaam en / of wachtwoord";
        }
    }
}
?>