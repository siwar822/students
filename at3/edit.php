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
    <?php
    include 'dbconnexion.php';
    $data =$rep->fetch();
    ?>
    <div>
        <fieldset class="container">
            <h2>Editer etudient</h2>
            <form action="update.php" method="post">
            
            <div class="form-group">
            <label for="id">id</label>
            <input type="text"  class="form-control" name="id" value="<?php echo $data['id'] ?>"> <!-- id  -->
            </div>
            <div class="form-group">
            <label for="firstname">first name</label>
            <input type="text"  class="form-control" name="firstname" value="<?php echo $data['firstname'] ?>">
            </div>
            <div class="form-group">
            <label for="lasttname">last name</label>
            <input type="text"  class="form-control" name="lastname" value="<?php echo $data['lastname'] ?>">
            </div>
            <div class="form-group">
            <label for="email">Email</label>
            <input type="text"  class="form-control" name="email" value="<?php echo $data['email'] ?>">
            </div>
            <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text"  class="form-control" name="phone" value="<?php echo $data['Phone'] ?>">
            </div>
            <button class="btn btn-success">valider</button>
            <button class="btn btn-success"  type="reset"  >annuler</button>
        </form>
        </fieldset>
    </div>
</body>
</html>