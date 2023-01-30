<?php
if (isset($_POST['email'])) {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = "recipient@email.com"; // Change to your email address
  $subject = "New Contact Form Submission";
  $body = "From: $name\nEmail: $email\nMessage:\n$message";

  mail($to, $subject, $body);

  echo "Thanks for contacting us! We'll be in touch soon.";
}
?>
