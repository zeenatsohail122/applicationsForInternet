<?php
  session_start();
  date_default_timezone_set('Europe/Stockholm');
  include 'meatballsComments.php';
  include 'dbhandler.inc.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
   
<meta charset="utf-8">
    
<title> Meatballs </title>
    
    <link href="resets.css" type="text/css" rel="stylesheet">
    <link href="style.css" type="text/css" rel="stylesheet">
   
</head>
    
<body>
    
    <h1> Tasty Recipes </h1>

    <!--dropdown menu button  -->
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


    <h2> Swedish Meatballs</h2>
    
    <p style="text-align:center;"><img src="meat.jpg" alt="BakingToGoFor" style="width:1100px;height:510px;"></p>
    
    <h3> Ingredients: </h3>
    
     <ul style="list-style-type:disc">
  <li>2 tablespoons olive oil, divided</li>
  <li>1 onion, diced</li>
  <li>1 pound ground beef</li>
  <li>1 pound ground pork</li>
  <li>1/2 cup Panko*</li>
  <li>Kosher salt and freshly ground black pepper, to taste</li>
     </ul>
    
    <h4> For Gravy </h4>
    
    <ul style="list-style-type:disc">
  <li>1/4 cup unsalted butter</li>
  <li>1/3 cup all-purpose flour</li>
  <li>4 cups beef broth</li>
  <li>3/4 cup sour cream</li>
  <li>Kosher salt and freshly ground black pepper, to taste</li>
  <li>2 tablespoons chopped fresh parsley leaves</li>
    </ul>
    
    <h3> Directions: </h3>
    
    <p> 1. Heat 1 tablespoon olive oil in a large skillet over medium heat. Add onion, and cook, stirring frequently, until onions have become translucent, about 2-3 minutes.</p>
    <p> 2. In a large bowl, combine ground beef, ground pork, Panko, egg yolks, allspice, nutmeg and cooked onion; season with salt and pepper, to taste. Using a wooden spoon or clean hands, stir until well combined. Roll the mixture into 1 1/4-to-1 1/2-inch meatballs, forming about 24 meatballs.</p>
    <p> 3.Add remaining 1 tablespoon olive oil to the skillet. Add meatballs, in batches, and cook until all sides are browned, about 4-5 minutes. Transfer to a paper towel-lined plate.</p>
    <p> 4. To make the gravy, melt butter in the skillet. Whisk in flour until lightly browned, about 1 minute. Gradually whisk in beef broth and cook, whisking constantly, until slightly thickened, about 1-2 minutes. Stir in sour cream; season with salt and pepper, to taste.</p>
    <p> 5. Stir in meatballs and cook, stirring occasionally, until heated through and thickened, about 8-10 minutes.</p>
    <p> 6. Serve immediately, garnished with parsley, if desired.</p>
    
    <h3> Nutritional Facts: </h3>
    
    <p> One serving of meatballs has following nutritional value: </p>
    
    
    <ul style="list-style-type:disc">
  <li>Total fat 18g.</li>
  <li>60mg Cholesterol.</li>
  <li>15g Protein.</li>
  <li>0% Vitamin A</li>
  <li>6% Calcium.</li>
  <li>6% Iron. </li>
    </ul>
    

    <h6>Comments</h6>

    <?php
  if($_SESSION['username']){
    echo "<form class='commentSection' method='POST' action='".setComments($conn)."'>
    <input type = 'hidden' name='username' value='".$_SESSION['username']."'>
    <input type = 'hidden' name='date' value='".date('Y-m-d H:i:s')."'>
    <textarea name='message' class='textarea'></textarea><br>
    <button type='submit' name='commentSubmit' >Submit</button>
    </form>";
   }
   else{
   echo "<h6>". "please login first to write a comment" . "</h6>" . "<p>"."</p>";
   }


  getComments($conn);
?>
        

</body>
</html>