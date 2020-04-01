<!DOCTYPE html>
<html>
<head>
    <title>Opdracht 3.3 Header</title>
    <?php include 'includes/header.php'; ?>
</head>
<body>
<?php
    /*echo "<pre>";
    print_r( $_GET );
    echo "<pre>";*/
    echo $_GET['studentnumber'];
    echo $_GET['fullname'];
    echo "<br>".$_GET['reason2quit'];

    if (isset($_GET['year']))
    {
        echo "<br> Leerjaar: " . $_GET['year'];
    }
    else
    {
        echo "<br>Leerjaar niet gekozen";
    }
?>


<?php include 'includes/footer.php'; ?>
<a href="../index.php">Terug</a>
</body>
</html>
