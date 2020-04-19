<!--Including script.php-->
<?php include 'script.php' ?>
<!-- When variable show is true the page will load in otherwise it won't -->
<?php
    if ($show == true)
    {
        ?>
        <!-- HTML Page -->
        <!DOCTYPE html>
        <html>
        <!-- Header -->
        <head>
            <!--Adressing title-->
            <title>Underground Discotheek Bergheen</title>
            <!-- Filling header -->
            <meta name="description" content="eindopdracht">
            <meta name="keywords" content="php, eindopdracht">
            <meta charset="utf-8">
        </head>
        <!-- Body with content -->
        <body>
        <!--Creating form that posts its content-->
        <form action="login.php" method="post">
            <!--generic div for text styling-->
            <div style="text-align: center" id="divLogin">
                <!--Headings-->
                <h1>Bergheen</h1>
                <h2>Login om onze adresgegevens + openingstijden te zien</h2>
                <!--Span for styling, echo value in script.php-->
                <span style="color: #ff0000"><?php echo $message; ?></span><br/>
                <!--Inputs where users can fill in data-->
                Username: <input type="text" name="username"><br/><br/>
                Password: <input type="password" name="password"><br/><br/>
                <!--Span for styling, echo value in script.php-->
                <span style="color: #ff0000"><?php echo $empty; ?></span><br/>
                <!--Input that submits filled in data above-->
                <input type="submit" name="submit" value="Login">
            </div>
        </form>
        </body>
        </html>
        <?php
     }
?>
