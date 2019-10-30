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
        <form action="store.php" method="post">
            <h2>Nouvel etudient</h2>
            <div class="form-group">
                <!-- <label for="id">Id</label>
                <input type="id" id="id" name="id" class="form-control" ><br> -->

                <label for="firstname">First Name</label>
                <input type="firstname" id="firstname" name="firstname" class="form-control" ><br>
                
                <label for="lastname">Last Name</label>
                <input type="text" name="lastname" class="form-control"> <br>

                <label for="email"> Email</label>
                <input type="text" name="email" class="form-control"><br>

                <label for="phone"> Phone</label>
                <input type="phone"name="phone" class="form-control"><br>
            </div>
            <button class="btn btn-info">Enregistrer</button>
            <button class="btn btn-dark">Annuler</button>
        </form>
    </div>
</body>
</html>