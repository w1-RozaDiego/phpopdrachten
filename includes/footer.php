<?php


if ($hour >= 0 && $hour < 5)
{
    $groet = "Goedenacht";
}
if ($hour >= 5 && $hour < 12)
{
    $groet =  "Goedeochtend";
}
if ($hour >= 12 && $hour < 17)
{
    $groet =  "Goedemiddag";
}
if ($hour >= 17 && $hour <= 24)
{
    $groet = "Goedeavond";
}

echo "<footer>&copy; $year Copyrighted by $name $groet</footer>";
?>
</body>
</html>

