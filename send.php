<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $to = 'rohanahuja4@gmail.com'
  $subject = 'New Message from Portfolio Website';
  $body = "Name: $name\nEmail: $email\nMessage: $message";
  if (mail($to, $subject, $body)) {
    echo 'Message sent successfully';
  } else {
    echo 'Message could not be sent';
  }
?>