
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]==true)
{
    ob_start();
    header("Location: homepage.php");
    ob_end_flush();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="s.css" >
        
        
        
        <title>Eventmaster</title>
    </head>
    <body>
        
        <div class="flex-container">
 
 
     <!--<li class="dropdown">
         <a href="javascript:void(0)" class="dropbtn">Contents</a>
    <div class="dropdown-content">
      <a href="#about">About</a>
      <a href="#services">Services</a>
      
    </div>-->
     <ul>
         <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        
     
</ul>
         
        <h1>Eventmaster</h1>
        
        <h2>Organizing events has never been easier</h2>
        </div>>   
        <br>
        <a href="signup.php" class="button">REGISTER</a>
        <br>
        <br> 
        
        &ensp;OR
        <br>
        <br>
        <a href="login.php" class="button">LOG IN</a>
        
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
        <h2>About Eventmaster</h2><br>
      <h4>Searching for a reliable platform for organizing events? You're at the right place! </h4>
      <p>Eventmaster intends to build a platfrom where you can arrange events not only as an individual but also as 
      an institution or a faculty or a department; even as an organization.</p>
      
    </div>
  </div>
    
    


  
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="button-badge"></span>
      <h4>Reliability</h4>
    </div>
    <div class="col-sm-4">
      <span class="button-badge"></span>
      <h4>Time saving application</h4>
     <!-- <p>Lorem ipsum dolor sit amet..</p>-->
    </div>
  </div>
  <br><br>
  </div>
</div>
        <!--<br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>-->
        <footer>Copyright &copy; Eventmaster.com</footer>
        
    </body>
    
</html>
