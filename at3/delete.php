<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Store</title>
</head>
<body class='container'>
    <?php
    include 'dbconnexion.php';
    $id='id';
    $firstname= 'firstname';
    $lastname ='lastname';
    $email= 'email';
    $phone= 'phone';
    
    $cnx->exec("DELETE FROM students WHERE id='$id");
    //$sql = "DELETE FROM students WHERE id=$id";


     echo "<h2 style='margin-top:50px'> Suppression effectuée avec succées !! </h2> <br>" ;
     echo' <button type="submit" class="btn btn-success" ><a href="index.php" class="btn btn-success">Revenir à la liste des étudiants</a></button>';
     
    ?>
    
</body>
</html>