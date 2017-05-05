<html>
    <head>
        <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="s.css" >
        
        
    </head>   
    <body>
<?php


session_unset();
$_SESSION['loggedin']=false;
$_SESSION['Email']="";
session_destroy();
header("Location: index.php");
exit;
?>
    </body>
</html>