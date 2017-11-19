<?php

$conn = mysqli_connect("localhost", "root", "root", "comments");

//error handler
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}