
<?php 
      session_start();
      if(!(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)){
       header("Location: login.php");  
      }
      else{
          echo "<h2>You are already logged in! Go to homepage</h2>";
       echo '<a href = "homepage.php" class="button">Go to homepage</a>'; 
      }
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <style>
            body {
   background-image: url("congruent_pentagon.png");
   
   
}

h1 {
    color: white;
    font-family: verdana;
    font-size: 80px;
}
h2 {
    color: white;
    font-family: verdana;
    font-size: 30px;
}

h3 {
    color: white;
    font-family: verdana;
    font-size: 20px;
}



            
        </style>     
        <title>Log in information matching</title>
    </head>
    <body>
        <?php
        require 'database.php';  
          
       if (isset($_REQUEST['Email'])){
        //if(!(empty($_POST['Email']||empty($_POST['Password'])))){
	$email = stripslashes($_REQUEST['Email']);
        
	$email = mysqli_real_escape_string($data,$email);
	$pass = stripslashes($_REQUEST['Password']);
	$pass = mysqli_real_escape_string($data,$pass);
        $pass = sha1($pass);
      
        $query = "SELECT * FROM `info_user` WHERE Email='$email' and Password='$pass'";
	$result = mysqli_query($data,$query)or die(mysqli_error($data));
	$rows = mysqli_num_rows($result);
        
       // $rows_value = mysqli_fetch_array($result);
        if($rows==1){
         session_start();
         $_SESSION['loggedin'] = true;
         $_SESSION['Email'] = $email;
         header("Location: homepage.php");
            
        }
        else{
          
         // echo "<h2>$rows</h2>";
          header("Location: try.php");
           
        }
       
       }
       
        ?>
        
    </body>
</html>


