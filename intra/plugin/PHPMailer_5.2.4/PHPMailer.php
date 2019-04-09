<?php
require 'class.phpmailer.php';
function sendMail($EMAIL, $NAME, $SUBJECT, $CONTENT, $mailto, $mailtoName){

	$mail             = new PHPMailer();
	$body			  = $CONTENT;

	$mail->IsSMTP(); // telling the class to use SMTP
//	$mail->Host       = "www.coolio.so"; // SMTP server
//	$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
	                                           // 1 = errors and messages
	                                           // 2 = messages only
    $mail->CharSet    = "utf-8";
	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
	$mail->Host       = "dsmtp.naver.com";      // sets GMAIL as the SMTP server
	$mail->Port       = 587;                   // set the SMTP port for the GMAIL server
	$mail->Username   = "info@wellcobiz.com";  // GMAIL username
	$mail->Password   = "wellcobiz40";            // GMAIL password

	$mail->SetFrom($EMAIL, $NAME);

	$mail->AddReplyTo($EMAIL, $NAME);

	$mail->Subject    = $SUBJECT;

	$mail->MsgHTML($body);

    $address = array();
    $addressName = array();
    if(!is_array($mailto)) $address[] = $mailto;
    else $address = $mailto;
    if(!is_array($mailtoName)) $addressName[] = $mailtoName;
    else $addressName = $mailtoName;

    foreach($address as $key => $val){
    	$mail->AddAddress($val, $addressName[$key]);
    }

	if(!$mail->Send()) {
	  return array('result' => false , 'msg' => "Mailer Error: " . $mail->ErrorInfo);
	} else {
      return array('result' => true , 'msg' => "Message sent!");
	}
}
?>