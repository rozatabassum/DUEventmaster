<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
      session_start();
      if(!(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)){
       echo "<h2>You are already logged in! Go to homepage</h2>";
       echo $_SESSION['loggedin'];
       echo '<a href = "homepage.php" class="button">Go to homepage</a>';
      }
      else{
          echo "<h2>Log in,please!</h2>";
      }
      ?>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="s.css" >
        
        
        
        <title>Log in</title>
    </head>
    <body>
        
        <h1>Eventmaster</h1>
         <br>
        <br>
       
        <br>
        <form action="inf.php" method="post">
        <input type="text" name="Email" required placeholder=Email>
        <br>
        <br>
        <input type="password" name="Password" required placeholder="Password">
        <!--<input type="submit" value="Search">-->
        <br>
        <br>
        <input type="submit" name="Enter" value="Submit"> 
        </form>
        <br>
        <br>
        
        
    </body>
</html>
