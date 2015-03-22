<?php

$name = $_POST["name"]; 
$email = $_POST["email"];
$message = $_POST["comment"];
$phone = $_POST["phone"];
$subject = $_POST["subject"];
$math = $_POST["math"];

$to = "example@email.com";
$subject = "$subject";
$details = "You have a new submission \r\nName: $name \r\nEmail: $email \r\nPhone: $phone \r\nMessage: $message";
$body = $details;

if ($math == "8") {

mail ($to, $subject, $body, "From: " .$name);
				echo "Your message has been sent and thank you for the message.";
 
	} else {
	
				echo "Message can not be sent because your answer 5+3 is wrong. Try Again.";
	}

?>



<?php /* ==============  SCRIPT BY RIYAD PRITOM || facebook.com/riyadpritom ============== */ ?>
