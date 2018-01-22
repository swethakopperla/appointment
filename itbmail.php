<?php
$to = "yugandhar@itblabs.com";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$from = "swetha.k@itblabs.com";
$headers = "From: $from";
mail($to,$subject,$message,$headersi,"-f".$from);
echo "Mail Sent.";
?>
