<!DOCTYPE html>
<html>
<head>
    <title>Opdracht 4.3</title>
    <?php include 'includes/header.php'; ?>
</head>
<body>
<?php include 'includes/footer.php'; ?>
<?php
$task2 = "Lancering in: ";
$counter = 19;

while ($counter >= 0)
{
    $task2 = $task2.$counter;

    if ($counter > 0)
    {
        $task2 .= ",";
    }
    $counter --;
}

?>

</body>
</html>
