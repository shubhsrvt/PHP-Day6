<?php 
 if(isset($_POST['contact_name'])&& isset($_POST['contact_email'])&& isset($_POST[contact_text])) {
  $contact_name = $_POST['contact_name'];
  $contact_email = $_POST['contact_email'];
  $contact_text = $_POST['contact_text']; 
  
  if(!empty($contact_name) && !empty($contact_email) && !empty(contact_text)) {
    $to = 'ayushkumar23798@gmail.com';
    $subject = 'contact submitted';
    $body = $contact_name."\n".$contact_text;
    $headers = 'From: ' .$contact_email;

   if(mail($to, $subject, $body, $headers)) {
     echo 'Thanks for contacting us';
   } else {
     echo 'Sorry, an error occured.';
     } 
     }else {
    echo 'All fields are required.';
  }
 }

?>
<form action=".php" method="POST">
      Name:<br><input type="text" name="contact_name" maxlength="25"><br><br>
      Email address:<br><input type="text" name="contact_email" maxlength="50"><br><br>
      Message:<br>
      <textarea name="contact_text" rows="6" cols=""30" maxlength="300"></textarea><br><br>
      <input type="submit" value="send">
      </form>