<?php
$to = 'alex@phpacademy.org';
$subject = 'This is an email.';
$body = 'This is a test email'."\n\n".'Hope you got it.';
$headers = 'From : Ares <ayushkumar23798@gmail.com>';

if(mail($to, $subject, $body, $headers)) {
  echo 'mail sent to:'.$to;
} else {
  echo 'error senting email.';
}
?>