<?php
/**
 * User: Diego Roza
 * Excersise: Opdracht 6.1
 * File: Opdracht61.php
 * Date: 06-05-2020
 */
?>
<?php include 'includes/header.php'; ?>
    <body>
    <!--Inlogpagina-->
    <form action="checklogin.php" method="post">
        <label>Username</label>
        <br />
        <input type="text" name="username">
         <br />
        <label>Password</label>
        <br />
        <input type="password" name="password">
        <br />
        <br />
        <input type="submit" name="submit">
    </form>
<br />
    </body>
<?php include 'includes/footer.php'; ?>