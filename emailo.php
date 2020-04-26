<?php
$nikname= $_POST['nikname'];
$phone= $_POST['phone'];
$pasta= $_POST['pasta'];
$mail= $_POST['kurer'];
$msg= $_POST['msg'];
$emailTo = 'ily30014001@gmail.com';
$body = "$nikname \n\n$phone \n\n$pasta \n\n$mail \n\n$msg";
$headers = "Content-Type: text/plain; charset=utf-8\r\n".'From: MySite <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $emailTo;

$emailSent = mail($emailTo, $nikname, $body, $headers);