<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
   
<meta charset="utf-8">
    
<title> Login Form </title>
    
   <link href="resets.css" type="text/css" rel="stylesheet">
   <link href="style.css" type="text/css" rel="stylesheet">
    
</head>
    
<body>

    <h1> Tasty Recipes </h1>

     <div >
    <!--dropdown menu button  -->
    <div class="dropDown">
         <button class="Button">Menu</button>
         <div class="dropDown-content" >
              <a href="http://localhost:8888/index.php">Home</a>
              <a href="http://localhost:8888/Calender.php">Recipe Calendar</a>
              <a href="http://localhost:8888/pancakes.php">Pancakes Recipe</a>
              <a href="http://localhost:8888/meatBalls.php">MeatBalls Recipe</a>
        </div>
    </div>
    <div class="dropDown">
         <button class="Button">Login</button>
         <div class="dropDown-content" >
              <a href="http://localhost:8888/loginForm.php">Login Form</a>
        </div>
    </div>
    </div>
     
     <p></p> 
 
    <div id="container">
<form method="post"  action="loginTastyRecipe.php">
    <label for="username">Username:</label>
<input type="text" id="username" name="username" /><br /><br />
    <label for="password">Password:</label>
<input type="password" name="password" /><br /><br /> 

<input type="submit" name="login_button" value="Log In"/> 
<input type="submit"  value="Cancel"/>


</form>  
 <form action="logout.php" method="POST">
    <input type="submit"  value="logout"/>
   </form>

 
<br><br>



<?php
  if (isset($_SESSION['id'])){

    echo "<br><br>";
    echo $_SESSION['username']; 
    echo ", you are LOGGED IN";
  
  }
?>
 
</div>
    
</body>
</html>