<html>
<body>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; 

$mail=new PHPMailer(true);
 
try{
 
$mail->SMTPDebug=2;
$mail->isSMTP();
$mail->HOST='server33.hostingraja.in';
$mail->SMTPAuth=true;
$mail->Userame='admin@itblabs.com';
$mail->Password='itblabs@1234';
$mail->SMTPSecure="tls";
$mail->Port='465';


$mail->setForm('swetha.k@itblabs.com','swetha');
$mail->addAddress('swetha.k@itblabs.com','swethak');
$mail->addAddress('umasai.k@itblabs.com');
//$mail->addReplyTO();
//$mail->addCC();
//$mail->addBCC();

//$mail->addAttachment();
//$mail->addAttachment();

$mail->isHTML(true);
$mail->Subject="Here is the subject";
$mail->Body="this id HTML message body <b>in bold!</b>";
$mail->AltBody="this is body in plain text for non-HTML mail clients";
$mail->send();
echo 'message has been send';
}
catch(exception $e){
echo 'message could not be sent';
echo 'mailer error:'.$mail->ErrorInfo;
}
?>
</body>
</html>


