<?php
  $name = $_POST['name'];
  $visitors_email = $_POST['email'];
  $message = $_POST['message'];

  $email_from = 'neetesh010798@gmail.com';
  $email_from = 'New Form Submission';
  $email_body = "User Name: $name.\n";
                  "User Email: $visitors_email,\n";
                  "User Message: $message.\n";

 $to = "neetesh010798@gmail.com";
 $headers = "from: $email_from \r\n";
 $headers = "Reply-To: $visitors_email \r\n";
 mail($to,$email_subject,$email_body,$headers);
 header("location: index.html");




?>