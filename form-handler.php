<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$Message = $_POST['Message'];

$$email_form = 'info@yourwebiste.com';

$email_subect = 'New Form Submission';

$email_boby = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "User Message: $Message.\n";

$to ='avinash652@gmail.com';

$headers = "Form: $email_form \r\n";

$headers .="Reply-To: $visitor_email \r\n";

mail($to,$email_subect,$email_boby,$headers);

header("Location: Content.html");

?>