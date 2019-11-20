<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Edit </title>

</head>
<body>
    <div class="container">
<fieldset>
<h2>Editer etudient</h2>
<?php
    include 'dbconnection.php';
    $id = $_GET['id'];
    $rep = $connection->query("SELECT * FROM students WHERE Id='$id'");
    $data = $rep->fetch();
?>
    <form action="update.php?id=<?= $id ?>" method="post">

        <div class="form-group">
            <!-- <label for="id">id</label> -->
            <input type="hidden"  class="form-control" name="id" value="<?=$data['Id']?> ?>"> <!-- id  -->
        </div>
        <div class="form-group">
            <label for="firstname">First name</label>
            <input class="form-control" type="text" placeholder="Firstname" name="firstname" value="<?= $data['firstname'] ?>">
        </div>
        <div class="form-group">
            <label for="lastname">Last name</label>
            <input class="form-control" type="text" placeholder="Lastname" name="lastname" value="<?= $data['lastname'] ?>">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="text" placeholder="Email" name="email" value="<?= $data['email'] ?>">
        </div>
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input class="form-control" type="text" placeholder="Phone" name="phone" value="<?= $data['phone'] ?>">
        </div>
        <button type="submit" class="btn btn-info">Editer</button>
        <a href="index.php"><button type="text" class="btn btn-dark">Anuler</button></a>
    </form>
</fieldset>
    </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>




