<?php
// the message
//$msg = "First line of text Second line of text";

// use wordwrap() if lines are longer than 70 characters
//$msg = wordwrap($msg,70);

$to      = 'vishesh.jindal01@yahoo.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: jindalvibha@yahoo.com' . "\r\n" .
    'Reply-To: vishesh.jindal01@yahoo.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
 echo 'sent';
// send email
//mail("jindalvibha@yahoo.com","My subject",$msg);
?>