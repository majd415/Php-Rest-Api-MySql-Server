<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "../connect.php";
$email=filterRequest("email");
$verifycode=filterRequest("verifycode");


$stmt=$con->prepare("SELECT * FROM users WHERE users_email = '$email' AND users_verifycode = '$verifycode' ");

$stmt->execute();
$count=$stmt->rowCount();
result($count);


?>