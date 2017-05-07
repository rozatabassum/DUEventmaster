<html>
    <head>
        <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="s.css" >
        
        
    </head>   
    <body>
<?php


session_start();

session_unset();
// Destroying All Sessions
if(session_destroy())
{
// Redirecting To Home Page
    header("Location: index.php");
}
exit();
?>
    </body>
</html>