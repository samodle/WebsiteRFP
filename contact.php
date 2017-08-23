<?php

$EmailFrom = $_REQUEST['email']; 
$EmailTo = "website@refinedplastics.mailclark.ai"; // Your email address here
$Subject = "Contact form";
$Name = Trim(stripslashes($_POST['name'])); 
$Email = Trim(stripslashes($_POST['email'])); 
$Message = Trim(stripslashes($_POST['message'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  echo "Error";
  exit;
}

// prepare email body text
$Body = "refinedplastics.com - ";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= "\n";
$Body .= "\n";
$Body .= $Message;
$Body .= "\n";

if(strlen($EmailFrom) > 5 and strlen($Message) > 5  and strlen($Name) > 1)
{
// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  echo "Email has been sent! ";
}
else{
  echo "Error sending message. Please email website-contact@refinedplastics.mailclark.ai directly!";
}
}
	else{
	 echo "Please make sure you've filled out all the fields and try again. If you see this page again, please email website-contact@refinedplastics.mailclark.ai directly";
			}
?>