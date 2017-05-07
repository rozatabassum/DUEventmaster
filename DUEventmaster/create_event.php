<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="s.css" >
        
        
        
        <title>Create event</title>
    </head>
    <body>
        <form action="evvalue.php" method="post">
        <input type="text" name="evname"  required placeholder="Name of event">
        <br>
        <br>
        <input type="text" name="descrip" required placeholder="Short description">
        <br>
        <br>
        <input type="text" name="arr" required placeholder="Arranged by">
        <br>
        <br>
        <h4>Invitation options</h4>
        <input type="radio"  name="choose" value="all" >All<br>
        <input type="radio" name="choose"  value="dept" >Department only<br>
        <input type="radio" name="choose"  value="users" >Select from friends<br>
        <br>
        <input type="submit" name="Submit" value="Submit"> 
        </form>

</html>