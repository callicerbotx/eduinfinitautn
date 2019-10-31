<?php 

//Conectar a la base de datos


    session_start();


$con = mysqli_connect('localhost','root');
	if($con){
		echo"connection";
	}

	mysqli_select_db($con,'quiz_new');


	$username = $_POST['username'];

$q = " select * from mst_user where username = '$username'  ";

$result = mysqli_query($con,$q);

$row = mysqli_num_rows($result);

if($row == 1){
	$_SESSION['username'] = $username;

	$userquery = " insert into user(username) values ('$username')";
	$userresult = mysqli_query($con,$userquery) ;

	header('location:../evaluacionAlumnos.php');	
}else{
	header('location:../index.php');
}


?>