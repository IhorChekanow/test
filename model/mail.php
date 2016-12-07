<?php



$name=$_POST['client_name'];
$email=$_POST['client_email'];
$client_aim=$_POST['buy'];
$client_message=$_POST['client_message'];

//val=buy
//val=partner

/* email */

$to = "mr.playthegame@gmail.com";
if ($client_aim=='buy') {
	$subject = "potencial_client";
							}

if ($client_aim=='partner')
$subject = "potencial_partner";
 
$message = "<html><head></head><body></body><p>test</p></body></html>";
$headers = "Content Type: text/html; charset=UTF-8\r\n";
$headers = "From: ???internet-vitrina???";

mail ($to, $subject, $message, $headers);
exit();
?>