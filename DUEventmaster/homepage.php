<?php 
      session_start();
     /* if(!(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]==true && $_SESSION["Email"]==$email)){
       //echo "<h2>You are already logged in! Go to homepage</h2>";
       //echo '<a href ="homepage.php" class="button">Go to homepage</a>';  
          header("Location:login.php");
      }
      /*else{
          header("Location:.php");  
      }*/
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="home.css" >   
        <link rel="stylesheet" href="topnav.css" >   
        <title>Homepage</title>
    </head>
    <body>
        
    <div class="topnav" id="myTopnav">
    <a href="logout.php">Log out</a>
    <!--<a href="#">Notifications</a>-->
    <a href="create_event.php">Create new event</a>
    <a href="account.php">Account</a>
 
  
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    </div>
        
    <script>
    function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
    }
    </script>
   </body>
</html>
