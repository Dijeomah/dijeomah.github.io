<?php
$ToEmail = 'success.drame@gmail.com';
$EmailSubject = $_POST["subject"];
$mailheader = "From: ".$_POST["email"]."\r\n";
$mailheader .= "Reply-To: ".$_POST["email"]."\r\n";
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
$MESSAGE_BODY = "Name: ".$_POST["name"]."\n";
$MESSAGE_BODY .= "Email: ".$_POST["email"]."\n";
$MESSAGE_BODY .= "Message: ".nl2br($_POST["text"])."\n";
mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure");
?>