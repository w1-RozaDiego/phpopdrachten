<!DOCTYPE html>
<html>
<head>
    <title>Opdracht 5.2 Header</title>
    <?php include 'includes/header.php'; ?>
</head>
<body>
<h3>Uitschrijf formulier KW1C: </h3>
<div>
    <form action="formdata52.php" method="get">
        <label>Voor en achternaam: </label><br />
        <input name="fullname" type="text"> <br />
        <label>Leerlingnummer: </label><br />
        <input name="studentnumber" type="text"><br />

        <label>Reden van uitschrijving: </label><br />
        <select name="reason2quit">
            <option value="slechte leraren">Slechte leraren</option>
            <option value="yonis is weg">Yonis is weg</option>
            <option value="opleiding is kut">Opleiding is kut</option>
            <option value="php sucks">php sucks</option>
        </select><br /><br />
        <label>Leerjaar:</label><br />
        <input type="radio" name="year" value="1">1 <br />
        <input type="radio" name="year" value="1">2 <br />
        <input type="radio" name="year" value="1">3 <br />
        <br />
        <input type="submit" name="verzend" value="verzend"><br />
    </form>
</div>

<a href="../index.php">Terug
</a><?php include 'includes/footer.php'; ?>

</body>
</html>
