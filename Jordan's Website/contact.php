<?php
	if(isset($_POST['submit'])) 
	{
		
		$message=
		'Full Name:	'.$_POST['fullname'].'<br />
		Subject:	'.$_POST['subject'].'<br />
		Email:	'.$_POST['emailid'].'<br />
		Comments:	'.$_POST['comments'].'
		';
		require "phpmailer/class.phpmailer.php"; //include phpmailer class
		
		// Instantiate Class  
		$mail = new PHPMailer();  
		
		// Set up SMTP  
		$mail->IsSMTP();   
		$mail->SMTPDebug =1;
		$mail->SMTPAuth = true; 
		$mail->SMTPSecure = "tls";
		$mail->Host = "a2plcpnl0445.prod.iad2.secureserver.net";  
		$mail->Port = 587;
		$mail->Encoding = '7bit';
		
		// Authentication  
		$mail->Username   = "jordankline";  
		$mail->Password   = "urhKXWZ@w0xoUB"; 
		
		// Compose
		$mail->SetFrom($_POST['emailid'], $_POST['fullname']);
		$mail->AddReplyTo($_POST['emailid'], $_POST['fullname']);
		$mail->Subject = "New Contact Form Enquiry";      // Subject (which isn't required)  
		$mail->MsgHTML($message);
		
		// Send To  
		$mail->AddAddress("contact@jordankline.design", "Contact"); // Where to send it - Recipient
		$result = $mail->Send();		// Send!  
		$message = $result ? 'Successfully Sent!' : 'Sending Failed! Email me directly at contact@jordankline.design.';      
		unset($mail);
		
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		
		<title>JK | Contact</title>
		<meta name="description" content="JK | CONTACT">
		<meta name="author" content="Jordan Kline">
		
		<link rel="stylesheet" href="style.css">
		
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	
	<body>
		
		
		<div class="header">
			<div class="topLine">
				<a href="index.html">
					<img src="images/Logo_Large.png" alt="logo"/>
				</a>
				<a href="index.html">
					<h1>
						JORDAN KLINE
					</h1>
				</a>
			</div>
			<div class="menuBar">
				<div class="cl-effect-3">
					<a href="index.html">
						HOME
					</a>
					<a href="designs.html">
						DESIGNS
					</a>
					<a href="about.html">
						ABOUT
					</a>
					<a href="contact.php">
						CONTACT
					</a><!--style="padding-right:0"-->
				</div></div>
		</div>
		
		<br><br><br><br><br>
		
		<div class="contact">
			<p style="font-family: MinionPro; letter-spacing: 3px; font-size: 15px; margin-bottom: 10px;">
			I'D LOVE TO HEAR FROM YOU!</p>
			<form name="form1" id="form1" action="" method="post">
				<fieldset>
				NAME (REQUIRED)<br>
				<input type="text" name="fullname" value=""><br><br>
				EMAIL ADDRESS (REQUIRED)<br>
				<input type="text" name="emailid" value=""><br><br>
				SUBJECT<br>
				<input type="text" name="subject" value=""><br><br>
				MESSAGE<br>
				<textarea name="comments" rows="10" cols="50"></textarea><br><br>
				<input type="submit" name="submit" value="SUBMIT" />	

				<p style="font-family: 'MinionPro'; font-size: 14px;"><?php if(!empty($message)) echo $message; ?></p>
				</fieldset>		
				</form>
				</div>
		
		
		
		
		
		
		
		
		
		<script src="js/scripts.js"></script>
	</body>
</html>