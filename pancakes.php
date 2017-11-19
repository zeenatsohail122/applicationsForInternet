<?php
  session_start();
  date_default_timezone_set('Europe/Stockholm');
  include 'pancakesComments.php';
  include 'dbhPancakes.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
   
<meta charset="utf-8">
    
<title> Pancakes </title>
    
   
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
              <a href="http://localhost:8888/meatballs.php">MeatBalls Recipe</a>
        </div>
    </div>
    <div class="dropDown">
         <button class="Button">Login</button>
         <div class="dropDown-content" >
              <a href="http://localhost:8888/loginForm.php">Login Form</a>
        </div>
    </div>
    </div>

    
    <h2> American pancakes </h2>
    
    <p style="text-align:center;"><img src="pan.jpg" alt="BakingToGoFor" style="width:1100px;height:510px;"></p>
    
    <h3> Ingredients: </h3>
  
    <ul style="list-style-type:disc">
  <li>3 large eggs</li>
  <li>115g plain flour</li>
  <li>1 heaped teaspoon baking powder</li>
  <li>140ml mil</li>
  <li>Pinch of salt</li>
  <li>Knob of butter </li>
    </ul>
    
    <h3> Directions: </h3>
    
    <p> 1. Separate the eggs between two large bowls.Add the flour, baking powder and
        milk to the yolks and mix to form smooth, thick batter.
        <p> 2. In a clean dry bowl, whisk the whites with the salt until soft peaks form and fold into the batter with a metal spoon. </p>
        <p> 3. Heat a non-stick frying pan over a medium heat and melt the knob of butter.Pour a heaped tablespoon of batter into the pan - you can probably fit three heaped tablespoons at a time. Fry for 2 minutes until air bubbles rise to the surface, then flip over. The pancakes are ready when they're golden and firm on both sides.Keep the cooked pancakes warm in the oven, and repeat the process until you've used up all the batter. </p>
        <p> 4. The pancakes on a plate and serve with a knob of butter, berries and maple syrup.
    </p>
    
    <h3> To Serve: </h3>
    
    <ul style="list-style-type:disc">
  <li>knob of butter</li>
  <li>mixed berries</li>
  <li>maple syrup</li>
    </ul>

    <h3> Nutritional Facts: </h3>
    
    <p> One serving which consist of almost 3-4 pancakes has following nutritional value: </p>
    
    
    <ul style="list-style-type:disc">
  <li>320 Calories.</li>
  <li>103mg Cholesterol.</li>
  <li>13g Protein.</li>
  <li>7% Vitamin A</li>
  <li>16% Calcium.</li>
  <li>19% Iron. </li>
    </ul>
    
    <h6>Comments</h6>
    
<?php
  if($_SESSION['username']){
    echo "<form class='commentSection' method='POST' action='".setComments($conn)."'>
    <input type = 'hidden' name='username' value='".$_SESSION['username']."'>
    <input type = 'hidden' name='date' value='".date('Y-m-d H:i:s')."'>
    <textarea name='message' class='textarea'></textarea><br>
    <button type='submit' name='commentSubmit'>Submit</button>
    </form>";
   }
   else{
   echo "<h6>". "please login first to write a comment" . "</h6>" . "<p>"."</p>";
   }


  getComments($conn);
?>
        

    
</body>
</html>