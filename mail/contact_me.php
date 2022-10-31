<?php
include_once('../portifolio/PHPMailer-master/src/PHPMailer.php');
 include_once('../portifolio/PHPMailer-master/src/SMTP.php');
 include_once('../portifolio/PHPMailer-master/src/Exception.php');

 $mail = new PHPMailer\PHPMailer\PHPMailer();
 $mail->isSMTP();
 $mail->SMTPAuth = true;
 $mail->SetFrom('noreply@{domain}.com','User');

 Check for empty fields
  if(empty($_POST['name']) ||
    empty($_POST['email']) ||
    empty($_POST['phone']) |
    empty($_POST['message']) ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
<<<<<<< HEAD
 {
 echo "No arguments Provided!";
 return false;
 }

 Create the email and send the message
 $host = "mail.{domain}.com";
 $port = "587";/
 $username = "noreply@{domain}.com";
 $password = "{password}";

 $to = 'joseferson7@outlook.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
 $name = strip_tags(htmlspecialchars($_POST['name']));
 $email_address = strip_tags(htmlspecialchars($_POST['email']));
 $phone = strip_tags(htmlspecialchars($_POST['phone']));
 $message = strip_tags(htmlspecialchars($_POST['message']));
 $email_subject = "Website Contact Form from: $name";
 $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
 $headers = "From: noreply@{domain}.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
 mail($to,$email_subject,$email_body,$headers,'-fnoreply@{domain}.com');
 return true;

=======
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Create the email and send the message
$to = 'joseferson7@gmail.com'; // Add your email address inbetween the '' replacing joseferson7@gmail.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage: $message\n";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
>>>>>>> b51469743a0ae89a5971a302b2fc929f36c472bd
?>