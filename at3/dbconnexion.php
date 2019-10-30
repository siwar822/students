<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    try {
        $cnx= new PDO('mysql:host=localhost;dbname=dsi22_g2_2019','root','');
        $rep= $cnx->query ('SELECT  * FROM students');
    } catch (expectation $e) {
        echo 'erreur ! '.$e->getmessage().'';
    }
    ?>
</body>
</html>