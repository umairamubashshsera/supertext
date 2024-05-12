<?php
// Check for empty fields
if(empty($_POST['full_name']) ||
   empty($_POST['email']) ||
   empty($_POST['phone']) ||
   empty($_POST['message']) ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
echo "No arguments Provided!";
return false;
   }

$fname = $_POST['full_name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$msg = $_POST['message'];


$to = 'umairahamidi09@gmail.com'; // Add your email address 
$email_subject = "Email Received for I want to hear more:  $fname";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nFull Name: $fname\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$msg\n\n";
$headers = "From: noreply@supertext.com\n";
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
header("Location: thanks.php");
//return true;
?>