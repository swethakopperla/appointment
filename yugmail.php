<?php

/**
 * Created by Leon on 27, August, 2011
 * http://leons.im
 */

$to = "yugandhar@itblabs.com";
$subject = "test";
$mime_boundary = "----test----".md5(time());
$message = "--$mime_boundaryn";

$message .= "Content-Type: text/html; charset=UTF-8n";
$message .= "Content-Transfer-Encoding: 8bitnn";
$message .= "Hello! Holla!n";
$message .= "--$mime_boundary--nn";

$sender = "swetha.k@itblabs.com";
$headers = "From: test <${sender}>n";
$headers .= "Reply-To: test <${sender}>n";
$headers .= "MIME-Version: 1.0n";
$headers .= "Content-Type: multipart/alternative; boundary="$mime_boundary"n";

echo mail($to, $subject, $message, $headers);
?>
