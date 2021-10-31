<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Create the email and send the message
$to = 'dongjiang19@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "DJ Website Contact Message from $name";
$email_body = "You have received a new message from dongjiang.ca.\n\n"."Here are the details:\n\nName: $name\nEmail: $email_address\nPhone: $phone\nMessage:\n$message";
$headers = "From: DongJiang_NoReply@dongjiang.ca\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
mail('nickjiang119@hotmail.com',$email_subject,$email_body,$headers);
mail('jian7750@mylaurier.ca',$email_subject,$email_body,$headers);
return true;         
?>
