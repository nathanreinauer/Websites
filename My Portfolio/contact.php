<?php
	if(isset($_POST['submit'])) 
	{
		
		$message=
		'Full Name:	'.$_POST['fullname'].'<br />
		Subject:	'.$_POST['subject'].'<br />
		Phone:	'.$_POST['phone'].'<br />
		Email:	'.$_POST['emailid'].'<br />
		Comments:	'.$_POST['comments'].'
		';
		require "phpmailer/class.phpmailer.php"; //include phpmailer class
		
		// Instantiate Class  
		$mail = new PHPMailer();  
		
		// Set up SMTP  
		$mail->IsSMTP();                  
		$mail->SMTPAuth = true;                   
		$mail->Host = "box894.bluehost.com";  
		$mail->Port = 26;
		$mail->Encoding = '7bit';
		
		// Authentication  
		$mail->Username   = "contact@nathanreinauer.com"; // 
		$mail->Password   = "Plunkers1!!"; // 
		
		// Compose
		$mail->SetFrom($_POST['emailid'], $_POST['fullname']);
		$mail->AddReplyTo($_POST['emailid'], $_POST['fullname']);
		$mail->Subject = "New Contact Form Enquiry";      // Subject (which isn't required)  
		$mail->MsgHTML($message);
		
		// Send To  
		$mail->AddAddress("contact@nathanreinauer.com", "Contact"); // Where to send it - Recipient
		$result = $mail->Send();		// Send!  
		$message = $result ? 'Successfully Sent!' : 'Sending Failed! Email me directly at nathanreinauer@gmail.com.';      
		unset($mail);
		
	}
?>
<!DOCTYPE html>
<html class="contactPage" lang="en">
	<head>
		<meta charset="utf-8">
		
		<title>Hi I'm Nathan</title>
		<meta name="description" content="Portfolio Website for Nathan Reinauer">
		<meta name="author" content="Nathan Reinauer">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="stylesheet" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Heebo" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">
		<script type="text/javascript" src="prefixfree.min.js"></script>		
		
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	
	<body>
		
		<div class="header">
			<div class="logo">
				<a style="width: 90%" href="index.html">
					<img class="hvr-buzz-out" style="opacity: 1.0;" src="images/logo.png">
				</a>
			</div>
			
			<div class="home">
				<ul>
					<li>
						<a class="homeW" href="writer.html">Writings</a>
					</li>
					<li>
						<a class="homeH" href="developer.html">Home</a>
					</li>
					<li>
						<a class="homeM" href="musician.html">Music</a>
					</li>
				</ul>
			</div>
			
			<div class="menu">
				<div class="skills">
					<p class="contentClass">
						<a class="skillsS" style="text-decoration: none;" href="skills.html"></a>
					</p>
				</div>
				
				<div class="links">
					<ul>
						<li>
							<a class="linksG" href="http://github.com/nathanreinauer">Github</a>
						</li>
						<li class="contentClass">
							<a class="linksL" style="text-decoration: none;" href="https://www.linkedin.com/in/nathanreinauer"></a>
						</li>
						<li>
							<a class="linksS" href="http://stackoverflow.com/users/6218074/nathan-r">S/Overflow</a>
						</li>
					</ul>
				</div>
				
				<div class="contact">
					<ul>
						<li>
							<a class="contactF" href="https://www.facebook.com/natethegr8est">Facebook</a>
						</li>
						<li>
							<a class="contactC" href="contact.php">Contact</a>
						</li>
						<li>
							<a class="contactT" href="https://twitter.com/sweetdiss">Twitter</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="contactForm">
			<p style="font-family: 'Karla'; font-size: 30px; margin-bottom: 10px;">
			Send me an email:</p>
			<form name="form1" id="form1" action="" method="post">
				<fieldset>
					<input type="text" name="fullname" placeholder="Name" value=""><br>
					<input type="text" name="emailid" placeholder="Email" value=""><br>
					<input type="text" name="subject" placeholder="Subject" value=""><br>
					<textarea name="comments" rows="10" cols="50"></textarea><br>
					<input type="submit" name="submit" value="SEND" />	
					
					<p style="font-family: 'heebo'; font-size: 14px;"><?php if(!empty($message)) echo $message; ?></p>
				</fieldset>		
			</form>
		</div>
		
	</body>
</html>			