<?php
include 'dbconnection.php';
$id = $_GET['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$rep = $connection->prepare('UPDATE students SET 
                            firstname=:param_fn,
                            lastname=:param_ln,
                            email=:param_email,
                            phone=:param_tel 
                        WHERE Id=:param_id'); 

$rep->bindParam(':param_fn',$firstname);
$rep->bindParam(':param_ln',$lastname);
$rep->bindParam(':param_email',$email);
$rep->bindParam(':param_tel',$phone);
$rep->bindParam(':param_id',$id);
$rep->execute();
if($rep){
    header( 'Location: index.php?update=Success');
}else{
    header( 'Location: index.php?update=Success');
}
?>