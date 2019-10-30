<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="jumbotron">
    <h1>Liste des étudiants DSI22 ISET Bizerte 2019</h1>
    </div>
        <button type="submit" class="btn btn-info" >
            <a href="create.php" style="color:black">Nouvel étudiant</a> </button><br><br>
             <table class="table table-striped">
             <thead>                
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>opérations</th>
             </thead>

                <?php
                include 'dbconnexion.php';
                while ($data=$rep ->fetch()){
                    echo '<tr>';
                    echo '<td>'.$data['id'].'</td>';
                    echo '<td>'.$data['firstname'].'</td>';
                    echo '<td>'.$data['lastname'].'</td>';
                    echo '<td>'.$data['email'].'</td>';
                    echo '<td>'.$data['Phone'].'</td>';
                    echo '<td><a href="edit.php"class="btn btn-outline-secondary">Editer</a></td>';
                    echo '<td><a href="delete.php" class="btn btn-outline-secondary">Supprimer</a></td>';
                    
                    echo '</tr>';
                }
                ?>
             </table>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>