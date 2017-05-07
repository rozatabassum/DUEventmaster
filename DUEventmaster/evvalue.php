<?php

require "database.php";
require "PHPMailerAutoload.php";
require "create_event.php";
require "class.smtp.php";
require "class.phpmailer.php";
global $data;
if($_POST['choose']=="all" ){
    $subject=$_POST['evname'];
    $description=$_POST['arr']."<br>".$_POST['descrip'];
    $q = "SELECT Email FROM info_user";
    $result = mysqli_query($data,"SELECT Email FROM info_user");
   if (!$result) {
        echo 'MySQL Error: ' . mysqli_error($data);
        exit;
    }
   $res = $result->fetch_assoc();
  // echo $res;
  // echo $res;
    
    $mail = new PHPMailer;

    $mail->isSMTP();                                   // Set mailer to use SMTP
    $mail->Host = 'tls://smtp.gmail.com:587';                    // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                            // Enable SMTP authentication
    $mail->Username = 'youremail@gmail.com';          // SMTP username
    $mail->Password = 'your password'; // SMTP password
    $mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 25;                                 // TCP port to connect to

                    
    $mail->setFrom('noreply@dueventmaster.com', 'DUEventmaster',0);
    $mail->addReplyTo('noreply@dueventmaster.com', 'DUEventmaster');
                     // Add a recipient
                    //$mail->addCC('cc@example.com');
                    //$mail->addBCC('bcc@example.com');

    $mail->isHTML(true);  // Set email format to HTML

                   
                        
                        

    $mail->Subject = $subject;
    $mail->Body    = $description;
    //ini_set('sendmail_from', 'ratri3395@gmail.com');
    $mail->SMTPDebug = 4;
    foreach($res as $opt){
         //echo $opt;*/
         $mail->addAddress($opt); 
         if(!$mail->Send()) {
                        echo 'Message could not be sent.';
                        echo 'Mailer Error: ' . $mail->ErrorInfo;
                    } else {
                       echo "Mail sent";
           }
         
    }
}

else if($_POST['choose']=="dept"){
    
    $subject = $_POST['evname'];
    $dept=mysqli_escape_string($data,$_POST['arr']);
    //$from = 'office@cse.du.ac.bd';
    $description = "Arranged by: "."<br>".$dept."<br>".$_POST['descrip'];
    //mysqli_select_db($data);
    //$q = "SELECT Email FROM info_user WHERE Department='$dept'";
    //$headers = "From: office@cse.du.ac.bd" . "\r\n".
    
   $result = mysqli_query($data,"SELECT Email FROM info_user WHERE Department='$dept' and Name='Roza Tabassum Ratri'");
   if (!$result) {
        echo 'MySQL Error: ' . mysqli_error($data);
        exit;
    }
   $res = $result->fetch_assoc();
  // echo $res;
    
    $mail = new PHPMailer();

    $mail->isSMTP();                                   // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                            // Enable SMTP authentication
    $mail->Username = 'yourmail@gmail.com';          // SMTP username
    $mail->Password = 'your password'; // SMTP password
    $mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                 // TCP port to connect to

              ini_set('sendmail_from', 'noreply@dueventmaster.com');      
    $mail->setFrom('noreply@dueventmaster.com', 'DUEventmaster',0);
    $mail->addReplyTo('noreply@dueventmaster.com', 'DUEventmaster');
                     // Add a recipient
                    //$mail->addCC('cc@example.com');
                    //$mail->addBCC('bcc@example.com');

    $mail->isHTML(true);  // Set email format to HTML

                   
                        
                        

    $mail->Subject = $subject;
    $mail->Body    = $description;
    //ini_set('sendmail_from', 'noreply@dueventmaster.com');

    foreach($res as $opt){
         //echo $opt;*/
         $mail->addAddress($opt); 
         if(!$mail->Send()) {
                        echo 'Message could not be sent.';
                        echo 'Mailer Error: ' . $mail->ErrorInfo;
                    } else {
                       echo "Mail sent";
           }
         
    }
}

 else{
    $subject = $_POST['evname'];
    $owner=$_POST['arr'];
    $desription = $_POST['arr']."<br>".$_POST['descrip'];
    echo $descrip;
    $q = "SELECT Email FROM 'info_user' WHERE Department='$owner'";
    $res = mysqli_query($data,$q);
    $result = mysqli_fetch_array($res);
    foreach($result as $sendmail){
        mail($sendmail,$subject,$description);
        }   
    }
 
?>