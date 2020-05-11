<?php
// Wat kiest de computer
//Random wordt er een getal tussen de 0 en 2 gekozen
$opties = array("steen","papier","schaar");
$computerkeuzegetal = rand(0,2);
$computerkeuze = $opties[$computerkeuzegetal];
echo "&nbsp;&nbsp;De computer koos: <img src='/{$computerkeuze}.jpg' class='SteenPapierSchaar'> <br><br>";

$spelerKeuze = $_GET['keuze'];

if ($spelerKeuze == $computerkeuze)
{
echo "gelijke keuzes wint niemand <br><br>";
$_SESSION['user2'] += 0;
echo "De score is ". $_SESSION['user1'] . " tegen " . $_SESSION['user2'];
}
else if ($spelerKeuze == "schaar" && $computerkeuze == "papier")
{
$_SESSION['user1'] += 1;
echo "schaar wint van papier <br><br>";
echo "De score is ". $_SESSION['user1'] . " tegen " . $_SESSION['user2'];
}
else if ($spelerKeuze == "schaar" && $computerkeuze == "steen")
{
$_SESSION['user2'] += 1;
echo "schaar verliest van steen <br><br>";
echo "De score is ". $_SESSION['user1'] . " tegen " . $_SESSION['user2'];
}
else if ($spelerKeuze == "steen" && $computerkeuze == "schaar")
{
$_SESSION['user1'] += 1;
echo "steen wint van schaar <br><br>";
echo "De score is ". $_SESSION['user1'] . " tegen " . $_SESSION['user2'];
}
else if ($spelerKeuze == "steen" && $computerkeuze == "papier")
{
$_SESSION['user2'] += 1;
echo "steen verliest van papier <br><br>";
echo "De score is ". $_SESSION['user1'] . " tegen " . $_SESSION['user2'];
}
else if ($spelerKeuze == "papier" && $computerkeuze == "steen")
{
$_SESSION['user1'] += 1;
echo "papier wint van steen <br><br>";
echo "De score is ". $_SESSION['user1'] . " tegen " . $_SESSION['user2'];
}
else if ($spelerKeuze == "papier" && $computerkeuze == "schaar")
{
$_SESSION['user2'] += 1;
echo "papier verliest van schaar <br><br>";
echo "De score is ". $_SESSION['user1'] . " tegen " . $_SESSION['user2'];
}


if ($_SESSION['user1'] == 5)
{
$Winnaar = "<br><br>Jij Wint! <br> Het spel start weer opnieuw als je een nieuwe keuze maakt";
echo $Winnaar;
$_SESSION['user1'] = 0;
$_SESSION['user2'] = 0;
session_destroy();
}
else if ($_SESSION['user2'] == 5)
{
$Winnaar = "<br><br>De Computer wint! <br> Het spel start weer opnieuw als je een nieuwe keuze maakt";
echo $Winnaar;
$_SESSION['user1'] = 0;
$_SESSION['user2'] = 0;
session_destroy();
}


?>
</div>
</form>
<br>
<br>
<a href="../index.php">Terug</a>
<?php include '../Includes/footer.php'; ?>
</body>
</html>