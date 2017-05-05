<html>
    <head>
    <body>
    <?php
       require "database.php";
       $name = mysqli_real_escape_string($data,$_REQUEST['Name']);
       $email = mysqli_real_escape_string($data,$_REQUEST['Email']);
       $dept = mysqli_real_escape_string($data,$_REQUEST['Department']);
       $reg = mysqli_real_escape_string($data,$_REQUEST['Registration']);
       $pass = mysqli_real_escape_string($data,$_REQUEST['Password']);
       $pass= sha1($pass);
       $s= "INSERT INTO info_user(Name,Email,Department,Registration,Password) VALUES ('$name','$email','$dept','$reg','$pass')";
       if(mysqli_query($data,$s)){
        header("Location: homepage.php");;
       } 
      else{
        echo "ERROR: Could not able to execute $s. " . mysqli_error($data);
      }
      mysqli_close($data);
      
?>
    </body>
    </head>
    </html>