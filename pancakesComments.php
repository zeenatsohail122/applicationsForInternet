<?php
session_start();
include 'dbhPancakes.php';

//function to insert data from the comment box into the database
//$conn to create a connection to the database
function setComments($conn){ 
	if (isset($_POST['commentSubmit']))
	{
		$username = $_POST['username'];
		$date = $_POST['date'];
		$message = $_POST['message'];

		$sql = "INSERT INTO panCakescomments (username, date, message) 
		VALUES ('$username', '$date', '$message')";

		$result = mysqli_query($conn, $sql);
	}
}

//function to get comments from the database
function getComments($conn){
	$sql = "SELECT * FROM panCakescomments";
	$result= mysqli_query($conn, $sql);

	while($row = mysqli_fetch_assoc($result)){
		echo "<br>";
		    echo "<div class='comment-box'><p>";
		    echo "<strong>";
		    echo '<font color="green">' . $row['username']. '</font><br>';  
		    echo '<font color="green">' . $row['date']. '</font><br>';  
			echo "</strong>"."<br>";
			echo $row['message'];
			echo "</p>
				<form class='deleteForm' method='POST' action='".deletePancakesComments($conn)."'>
				<input type='hidden' name='cid' value='".$row['cid']."'>
				<button name='commentDelete' type='Submit'>Delete</button>
				</form>
			</div>";	
	}
}

function deletePancakesComments($conn){
	if (isset($_POST['commentDelete']))
	{
		$cid = $_POST['cid'];
		$username = $_POST['username'];

		if($_SESSION['username']){
		$sql = "DELETE FROM panCakescomments WHERE cid = '$cid'";
		$result = mysqli_query($conn, $sql);

	}else{
		echo "you have to login first";
	}
	}
}