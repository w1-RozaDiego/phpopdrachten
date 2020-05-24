<?php

/**
 * User: Diego Roza
 * Excersise: Opdracht 7.1
 * File: Opdracht71.php
 * Date: 18-05-2020
 */

// Open de database connectie en ODBC driver
try
{
    $pdo = new PDO("odbc:odbc2sqlserver");
}

catch (PDOException $e)
{
    echo "<h1>Database error:</h1>";
    echo $e->getMessage();
    die();
}

echo "database connectie gelukt";

// Uitvoeren van een SQL query

try
{
// Query schrijven
    $sql = 'SELECT *FROM joke';

    // Query uitvoeren
    $result = $pdo->query($sql);
}
catch (PDOException $e)
{
    echo 'Er is een probleem met ophalen van jokes: ' . $e->getMessage();
    exit();
}

// Lege Array aanmaken voor de results
$aJokes = array();

// Door de results heen loopen via een whil
while ($row = $result->fetch(PDO::FETCH_ASSOC))
{
    // Result wegschrijven in de $aJokes array
    $aJokes[] = $row;
}

echo "<br />";
// Aanmaken table met headers
echo "<table>
<tr>
<th>ID</th>
<th>Joketext</th>
<th>Jokeclou</th>
<th>Jokedate</th>
</tr>";

// aJokes wegschrijven als grap en voor elke grap de content bekijken
foreach($aJokes as $grap)
{
    // Tonen inhoud van de grappen in de tabel
    echo "<tr>
<td>".$grap['id']."</td>
<td>".$grap['joketext']."</td>
<td>".$grap['jokeclou']."</td>
<td>".$grap['jokedate']."</td>
</tr>";
}

// Afsluiten table
echo "</table>";

// Tonen van de inhoud van aJokes
echo "<pre>";
var_dump($aJokes);
echo "</pre>";
?>