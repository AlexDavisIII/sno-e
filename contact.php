<!--Built from scratch using HTML5 and the VIM (vi improved) text editor-->
<!--Site Author: Alex Davis III-->
<?php
	$labels = array('name:', 'email:','message:', 'subject:');
?>
<?php include 'formvalidator.php'?>

<doctype html>
<html>
<head>
<title>Contact Us</title>
<link type="text/css" rel="stylesheet" href="css/style.css"/>
</head>
<body>
<section>
	<form id="contactForm" method="post">
		<!--Creates label and input for Name-->
		<label for="textID"><?php echo $labels[0];?></label>
		<input id="textID" name="name" type="text" placeholder="Enter Your Name"/>

		<!--Creates label and input for Email-->
		<label for="emailID"><?php echo $labels[1];?></label>
		<input id="emailID" name="email" type="email" placeholder="Enter your email"/>
		<!--Creates label and input for Subject-->
		<label for="subject"><?php echo $labels[3];?><label>
		<input id="subject" type="text" name="subject" placeholder="Add the subject of the message"/>
		<!--Creates label and input for the Message-->
		<label for="messageID"><?php echo $labels[2];?></label>
		<textarea id="messageID" name="message" placeholder="What's Your Message?"></textarea>
		<!--Submit button once everything has been filled out-->
		<input type="submit" name="submit" id="submitter"/>Submit!
	</form>
	<!--Mails everything off after submit button has been clicked-->

</section>
<section>
				<ul>
								<li>
									Call Sno-E Joes: <!--Provide Phone Contact-->
								</li>		
								<li>
									Email Us Feedback: <!--Provide email address-->
								</li>
								<li>
									<?php echo $output;?>
								</li>
				</ul>
</section>
</body>
</html>
