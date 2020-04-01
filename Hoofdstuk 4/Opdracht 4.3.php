<?php
/**
 * User: Diego Roza
 * Date: 30-3-2020
 * Time: 16:13
 * File: Opdracht 4.3.php
 */

$opdracht = "Opdracht 4.3";
/*Ophalen en schrijven van header en script*/
include '../includes/header.php'; ?>
<?php include 'script43.php'; ?>
<body>
<!--Ophalen en schrijven van echo's-->
<h1>
    <?php echo $task2 ?>
</h1>
<h1>
    <?php echo $task3 ?>
</h1>
<?php echo $task4; echo $task5; echo $task6; echo $task7; ?>
<br>
<!--Ophalen en schrijven van footer-->
<a href="../index.php">Terug</a>
<?php include '../includes/footer.php'; ?>
</body>
</html>

