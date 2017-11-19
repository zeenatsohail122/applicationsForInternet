<?php
session_start();

//create a connection to database
$conn = mysqli_connect("localhost", "root", "root", "loginSystem");

//error handler
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}