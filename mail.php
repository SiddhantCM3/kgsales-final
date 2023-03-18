<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["submit"])){
  $mail = new PHPMailer(true);
  
  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'digital.cmq@gmail.com'; //gmail id
  $mail->Password = 'quxkjdfjloeoydfq'; //gmail app password
  $mail->SMTPSecure = 'ssl';
  $mail->Port = 465;


  // $mail->setFrom('digital.cmq@gmail.com');

  $mail->addAddress('digital.cmq@gmail.com');

  $mail->isHTML(true);

  $mail->Subject = $_POST["sub"];
  $mail->Body = '<html> 
                  <head> 
                      <title></title> 
                  </head> 
                  <body> 
                      <h1>New Enquiry!</h1> 
                      <table> 
                          <tr> 
                              <th>Name:</th><td>'.$_POST["yourname"].'</td> 
                          </tr> 
                          <tr> 
                              <th>Phone:</th><td>'.$_POST["phonenumber"].'</td> 
                         </tr>
                          <tr> 
                              <th>Email:</th><td>'.$_POST["youremail"].'</td> 
                          </tr> 
                          <tr> 
                              <th>Subject:</th><td>'.$_POST["yourSubject"].'</td> 
                          </tr> 
                          <tr> 
                              <th>Message:</th><td>'.$_POST["message"].'</td> 
                          </tr> 
                      </table> 
                  </body> 
                </html>'; 

  $mail->send();

  echo
  "
  <script>
  document.location.href = 'contact.php';
  </script>
  ";

  
}


?>

<?php include("connection.php"); ?>