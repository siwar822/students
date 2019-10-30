<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="container">
    <?php
    include 'dbconnexion.php';
    //$id= $_POST['id'];//88
    $firstname= $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $cnx->exec("INSERT INTO students (firstname,lastname,email,phone) VALUES ('$firstname','$lastname','$email','$phone')");
    echo "<h2 style='margin-top:50px'> Ajout effectuée avec succées !! </h2> <br>" ;
    echo' <button type="submit" class="btn btn-success" ><a href="index.php" class="btn btn-success">Revenir à la liste des étudiants</a></button>';
    ?>
<!-- <div style="margin-top:50px"></div> -->
</body>
</html>