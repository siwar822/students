<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>index </title>
</head>
<body>
<div class="container">
    <div class="jumbotron">
    <h1 class="text-center">Liste des étudiants DSI22</h1>
    </div>

    <button type="submit" class="btn btn-info" >
            <a href="create.php" style="color:black">Nouvel étudiant</a> </button><br><br>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>opérations</th>
        </tr>
    </thead>
        <?php
        include 'dbconnection.php';
        $rep = $connection->prepare("SELECT * FROM students");
        $rep->execute();
        while($data = $rep->fetch()){
            echo '<tr>';
            echo '<td>'.$data['Id'].'</td>' ;
            echo '<td>'.$data['firstname'].'</td>' ;
            echo '<td>'.$data['lastname'].'</td>' ;
            echo '<td>'.$data['email'].'</td>' ;
            echo '<td>'.$data['phone'].'</td>' ;
            echo '<td><a href="edit.php?id='.$data['Id'].'" class="btn btn-outline-secondary">Editer</a></td>';
            echo '<td><a href="delete.php?id='.$data['Id'].'" class="btn btn-outline-secondary">Supprimer</a></td>';
            echo '</tr>';
        }
        ?>
    </table>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>