<?php
session_start();
include 'dbhandler.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

$result = mysqli_query($conn, $sql);


if(!$row = mysqli_fetch_assoc($result)){
	echo "Incorrect Username or Password! TRY AGAIN!";
}else{
	//to keep you logged in("you are logged in")
	$_SESSION['id'] = $row['id'];
	$_SESSION['username'] = $row['username'];
}

header("Location: loginForm.php");