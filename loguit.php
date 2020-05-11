<?php
/**
 * User: Diego Roza
 * Excersise: Opdracht 6.1
 * File: Opdracht61.php
 * Date: 06-05-2020
 */
?>
<?php include '../header.php'; ?>
<?php

session_start();
session_destroy();

header('location: opdracht61.php');

?>
<?php include '../footer.php'; ?>