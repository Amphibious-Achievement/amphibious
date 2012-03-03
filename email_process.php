<?php
	// Set the reciever and the subject
	$reciever = "aa-exec@mit.edu";
	$subject = $_POST["subject"];
	if($_POST["purpose"] == "yes") {
		$reciever = "t_bohlen@mit.edu";
		$subject = "AMPHIBIOUS TECHNICAL ".$subject;
	}
	
	// Create the content of the message so that it is clear it is coming from a web form
	$message = "Message sent from the Amphibious Achievement webform\n\nSent by:\n".$_POST["theirname"]."\n\nMessage:\n".$_POST["message"];
	
	// Set the from and reply-to headers to appear as if this came from the user
	$headers ="From: ".$_POST["email"]."\r\n"."Reply-To: ".$_POST["email"]."\r\n X-Mailer: PHP/".phpversion();
	
	// Send the mail and display a message telling the user if the message was sent correctly or not
	$sent = mail($reciever, $subject, $message, $headers);
	if($sent == true) {
		include("emailsent.php");	
	}
	else {
		include("emailnotsent.php");
	}
	
	exit();
?>