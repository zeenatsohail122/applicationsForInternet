<?php

$conn = mysqli_connect("localhost", "root", "root", "pancakesComments");

//error handler
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}