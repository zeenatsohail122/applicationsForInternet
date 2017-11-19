<!DOCTYPE html>
<html>
<head>
    
<meta charset="utf-8">
    
<title> Calender </title>
    
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


    <h2> Recipe Calendar</h2>
<div id="table-font" >
  <header>
    
    <h5>September 2017</h5>
   
      <!--Calendar table with linked images  -->
  </header>
<table>
  <tr>
    <td>S</td>
    <td>M</td>
    <td>T</td>
    <td>W</td>
    <td>Th</td>
    <td>F</td>
    <td>S</td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>1</td>
    <td>2</td>
    <td>3</td>
      
  </tr>
  <tr>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
    <td>8</td>
    <td>9</td>
    <td>10</td>
    
  </tr>
  <tr>
    <td>11</td>
    <td>12</td>
    <td>13</td>
    <td>14</td>
    <td>15</td>
    <td>16</td>
    <td class="selected"><a id="box-link" href="http://localhost:8888/pancakes.php"></a>17</td>
    
  </tr>
  <tr>
    <td>18</td>
    <td>19</td>
    <td>20</td>
    <td>21</td>
    <td>22</td>
    <td>23</td>
    <td>24</td>
    
  </tr>
  <tr>
    <td>25</td>
    <td>26</td>
    <td class="selecteda"><a id="box-linka" href="http://localhost:8888/meatBalls.php"></a>27</td>
    <td>28</td>
    <td>29</td>
    <td>30</td>
    <td></td>
  </tr>
</table>
</div>

</body>
</html>