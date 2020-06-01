<?php
     $name = _POST['name'];
     $visitor_email = _POST['email'];
     $country = _POST['country'];
     $media_name = _POST['media-name'];
     $media_username = _POST['media-username'];
     $date_time = _POST['time'];
     $lyrics = _POST['message'];

     $subject = 'New Appointment';

     $email_body = "User Name: $name.\n ".
                   "User Email: $visitor_email.\n ".
                   "User country: $country.\n ".
                   "User media: $media_name.\n ".
                   "User media-username: $media_username.\n ".
                   "User date_time: $date_time.\n ".
                   "User Lyrics: $lyrics.\n ".

    $to = 'nzubefootballer@gmail.com';

    $header = "headers: $email \r\n";

    $headers . = "reply-to: $visitor_email \r\n";

    mail($to, $subject, $email_body, $headers "from: ". $name);
    echo "your message has ben sent";

    header("location: index.html");  

?>