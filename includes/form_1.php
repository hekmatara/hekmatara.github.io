<?php	
	if(empty($_POST['name']) && strlen($_POST['name']) == 0 || empty($_POST['message']) && strlen($_POST['message']) == 0)
	{
		return false;
	}
	
	$name = $_POST['name'];
	$input_61 = $_POST['input_61'];
	$message = $_POST['message'];
	$optin = $_POST['optin'];
	
	$to = 'kourosh@hekmatara.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name: $name \nInput_61: $input_61 \nMessage: $message \nOptin: $optin \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: kourosh@hekmatara.com\n";
	$headers .= "Reply-To: DoNotReply@yoursite.com";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>