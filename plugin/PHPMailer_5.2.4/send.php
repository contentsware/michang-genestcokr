<?php
require 'class.phpmailer.php';
/*

 * $EMAIL : 보내는 사람 메일 주소

 * $NAME : 보내는 사람 이름

 * $SUBJECT : 메일 제목

 * $CONTENT : 메일 내용

 * $mailto : 받는 사람 메일 주소

 * $mailtoName : 받는 사람 이름

 */

sendMail("", $mail_name, $mail_subject, $mail_body, "", "홈페이지상담문의");

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
	$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
	$mail->Host       = "";      // sets GMAIL as the SMTP server
	$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
	$mail->Username   = "";  // GMAIL username
	$mail->Password   = "";            // GMAIL password

	$mail->SetFrom($EMAIL, $NAME);

	$mail->AddReplyTo($EMAIL, $NAME);

	$mail->Subject    = $SUBJECT;

	$mail->MsgHTML($body);

	$address = $mailto;
	$mail->AddAddress($address, $mailtoName);

	if(!$mail->Send()) {
	  echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
	  echo "Message sent!";
	}
}


?>
