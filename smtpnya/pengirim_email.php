<?php
date_default_timezone_set("Asia/Jakarta");
require 'PHPMailerAutoload.php';

$usernamenya = "yodi.yanwar@tazkia.ac.id";
$passwordnya = "psvm(String[]args)";

function kirimemail_dua($subjek,$alamat,$alamatCC,$nama,$pesannya) {
	//Create a new PHPMailer instance
	$mail = new PHPMailer;
	//Tell PHPMailer to use SMTP
	$mail->isSMTP();
	//Enable SMTP debugging
	// 0 = off (for production use)
	// 1 = client messages
	// 2 = client and server messages
	$mail->SMTPDebug = 0;
	//Ask for HTML-friendly debug output
	$mail->Debugoutput = 'html';
	//Set the hostname of the mail server
	$mail->Host = "smtp.gmail.com"; //emailnya yahoo , kalau gmail beda lagi
	//Set the SMTP port number - likely to be 25, 465 or 587
	$mail->Port = 587;
	//Set the encryption system to use - ssl (deprecated) or tls
	$mail->SMTPSecure = 'tls';
	//Whether to use SMTP authentication
	$mail->SMTPAuth = true;
	//Username to use for SMTP authentication
	$mail->Username = $GLOBALS['usernamenya'];
	//Password to use for SMTP authentication
	$mail->Password = $GLOBALS['passwordnya'];
	//Set who the message is to be sent from
	$mail->setFrom($GLOBALS['usernamenya'], 'Hotspot Request Bot');
	//Set an alternative reply-to address
	$mail->addReplyTo($GLOBALS['usernamenya'], 'Hotspot Request Bot');
	//Set who the message is to be sent to
	$mail->addAddress($alamat,$nama);
	$mail->addCC($alamatCC);
	//Set the subject line
	$mail->Subject = $subjek;
	//Read an HTML message body from an external file, convert referenced images to embedded,
	//convert HTML into a basic plain-text alternative body
	$mail->msgHTML($pesannya);
	//Replace the plain text body with one created manually
	$mail->AltBody = 'This is a plain-text message body';
	//Attach an image file
	//$mail->addAttachment('images/phpmailer_mini.png');

	//send the message, check for errors
	if (!$mail->send()) {
		$respon = "Pengiriman Error : " . $mail->ErrorInfo;
		return $respon;
	} else {
		$respon = "Pesan Terkirim!";
		return $respon;
	}
}

function kirimemail_satu($nama,$nim,$email,$angk,$telp) {
	//Create a new PHPMailer instance
	$mail = new PHPMailer;
	//Tell PHPMailer to use SMTP
	$mail->isSMTP();
	//Enable SMTP debugging
	// 0 = off (for production use)
	// 1 = client messages
	// 2 = client and server messages
	$mail->SMTPDebug = 0;
	//Ask for HTML-friendly debug output
	$mail->Debugoutput = 'html';
	//Set the hostname of the mail server
	$mail->Host = "smtp.gmail.com"; //emailnya yahoo , kalau gmail beda lagi
	//Set the SMTP port number - likely to be 25, 465 or 587
	$mail->Port = 587;
	//Set the encryption system to use - ssl (deprecated) or tls
	$mail->SMTPSecure = 'tls';
	//Whether to use SMTP authentication
	$mail->SMTPAuth = true;
	//Username to use for SMTP authentication
	$mail->Username = $GLOBALS['usernamenya'];
	//Password to use for SMTP authentication
	$mail->Password = $GLOBALS['passwordnya'];
	//Set who the message is to be sent from
	$mail->setFrom($GLOBALS['usernamenya'], 'yodi.yanwar@tazkia.ac.id');
	//Set an alternative reply-to address
	$mail->addReplyTo($GLOBALS['usernamenya'], 'yodi.yanwar@tazkia.ac.id');
	//Set who the message is to be sent to
	$mail->addAddress('yodi.yanwar@tazkia.ac.id','yodi.yanwar@tazkia.ac.id');
	//Set the subject line
	$mail->Subject = 'Hotspot Account Request';
	//Read an HTML message body from an external file, convert referenced images to embedded,
	//convert HTML into a basic plain-text alternative body
	$mail->msgHTML($nama." \n ".$nim." \n ".$email." \n ".$angk." \n ".$telp);
	//Replace the plain text body with one created manually
	$mail->AltBody = 'This is a plain-text message body';
	//Attach an image file
	//$mail->addAttachment('images/phpmailer_mini.png');

	//send the message, check for errors
	if (!$mail->send()) {
		$respon = "<span class='badge badge-danger'>Pengiriman Error : " . $mail->ErrorInfo ." </span>";
		return $respon;
	} else {
		$respon = "<span class='badge badge-success'>Pesan Terkirim!</span> \n <span class='badge badge-info'>NB: Username & Password akan dikirim melalui email dan atau WA setelah akun dibuat</span>";
		return $respon;
	}
}
?>