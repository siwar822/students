<?php
    include 'dbconnection.php';
    $id = $_GET["id"];
    $rep = $connection->prepare('DELETE FROM students WHERE Id=:param_id');
    $rep->bindParam(':param_id',$id);
    $rep->execute();
    if($rep){
    header( 'Location: index.php?delete=success');
    }
?> 