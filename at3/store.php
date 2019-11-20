<?php
include 'dbconnection.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$rep = $connection->prepare('INSERT INTO students(firstname,lastname,email,phone) 
                            VALUES (:param_fn,:param_ln,:param_email,:param_tel)');
                        $rep->bindParam(':param_fn',$firstname);
                        $rep->bindParam(':param_ln',$lastname);
                        $rep->bindParam(':param_email',$email);
                        $rep->bindParam(':param_tel',$phone);
$rep->execute();

if($rep){   
    header( 'Location: index.php');
}
?>