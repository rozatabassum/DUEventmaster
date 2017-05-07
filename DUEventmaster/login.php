
<?php 
      session_start();
      if(!empty($_SESSION['loggedin']) && $_SESSION['loggedin']==true && $_SESSION['Email']==$email){
       header("location: login.php");  
      }
      else{
          echo "<h2>You are already logged in! Go to homepage</h2>";
          echo '<a href = "homepage.php" class="button">Go to homepage</a>'; 
      }
?>
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
         $_SESSION["loggedin"] = true;
         $_SESSION["Email"] = $email;
         header("Location: homepage.php");
            
        }
        else{
          
         // echo "<h2>$rows</h2>";
          header("Location: try.php");
           
        }
       
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
        <form action="" method="post">
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
