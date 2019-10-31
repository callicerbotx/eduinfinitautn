<?php 

//Conectar a la base de datos

session_start();



$con = mysqli_connect('localhost','u893848924_root','scorpion963.');

mysqli_select_db($con,'u893848924_eduinfinita');


$username = $_POST['username'];
$password = $_POST['password'];
$q = " select * from mst_user where username = '$username' AND password = '$password'  ";

$result = mysqli_query($con,$q);

$row = mysqli_num_rows($result);

if($row == 1){
$_SESSION['username'] = $username;

$userquery = " insert into user(username) values ('$username')";
$userresult = mysqli_query($con,$userquery) ;

header('location:../panelEvaluacion.php');	
}else{
header('location:../index.php');
}


?>