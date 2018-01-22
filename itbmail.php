<?php
$to = "swetha.k@itblabs.com";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$from = "swetha.k@itblabs.com";
$headers = "From: $from";
mail($to,$subject,$message,$headers);
echo "Mail Sent.";
?>
