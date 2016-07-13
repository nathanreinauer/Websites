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
    $mail->AddAddress("contact@nathanreinauer.com", "Recipient Name"); // Where to send it - Recipient
    $result = $mail->Send();		// Send!  
	$message = $result ? 'Successfully Sent!' : 'Sending Failed!';      
	unset($mail);

}
?>
<html class="contactPage" lang="en">
	<head>
		<meta charset="utf-8">
		
		<title>Hi I'm Nathan</title>
		<meta name="description" content="Portfolio Website for Nathan Reinauer">
		<meta name="author" content="Nathan Reinauer">
		
		<link rel="stylesheet" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Heebo" rel="stylesheet">
		<script src="prefixfree.min.js"></script>		
		
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
						<a class="homeH" href="index.html">Home</a>
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
							<a class="contactC" href="contact.html">Contact</a>
						</li>
						<li>
							<a class="contactT" href="https://twitter.com/sweetdiss">Twitter</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
					
		<div style="margin: 100px auto 0;width: 300px;">
			<h3>Contact Form</h3>
			<form name="form1" id="form1" action="" method="post">
					<fieldset>
					  <input type="text" name="fullname" placeholder="Full Name" />
					  <br />
					  <input type="text" name="subject" placeholder="Subject" />
					  <br />
					  <input type="text" name="phone" placeholder="Phone" />
					  <br />
					  <input type="text" name="emailid" placeholder="Email" />
					  <br />
					  <textarea rows="4" cols="20" name="comments" placeholder="Comments"></textarea>
					  <br />
					  <input type="submit" name="submit" value="Send" />
					</fieldset>
			</form>
			<p><?php if(!empty($message)) echo $message; ?></p>
		</div>
					
</body>
</html>