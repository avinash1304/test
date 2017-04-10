<?php require_once("resources/config.php"); ?>
<?php require_once('swiftmailer/lib/swift_required.php'); ?>

<?php 
//Contact Form validation
$name_err = $email_err = $subject_err = $message_err = $captcha_err = '';
$name = $email = $subject = $message = $captcha = '';

if(isset($_POST['submit_contact'])) {
	
	$name = $_POST['name'];
	$name = ucwords($name);
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message_body = $_POST['message'];
	$captcha = $_POST['g-recaptcha-response'];
	$status = true;
	 
	 if($name =='') {
	 	$name_err = 'Name is required';
	 	$status = fasle;
	 }

	 if($email =='') {

	 	$email_err = 'Email is required';
	 	$status = false;
	 }

	 if($subject =='') {

	 	$subject_err = 'Subject is required';
	 	$status = false;
	 }

	 if($message_body =='') {

	 	$message_err = 'Message is required';
	 	$status = false;
	 }

	 
	 if($captcha =='') {

	 	$captcha_err = '<small class="text-danger">Please check the captcha to proceed</small>';
	 	$status = false;
	 }

	if($status==true) {

		$emailsignature = '<p align="left"><b>Thanks and Regards</b></p><br>

		<b><i><font color="blue">'.$name.'</font></i></b><br>

		Email : '.$email.'</p><br><br>'; 

		$email_template1 = '';

		$email_template1 .= '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"

                                            "http://www.w3.org/TR/html4/loose.dtd">

                                            <html lang="en">

                                            <head>

                                                <meta http-equiv="content-type" content="text/html; charset=utf-8">

                                                <title>Einfach Solutions | Contacts</title>

                                            </head>

                                            <body>
											<p><b>Einfach Solutions,</b></p><br/>
											<p align="justify">We received below mentioned enquiry/feedback.</p>
											<p align="justify">Name : '.nl2br($name).'</p>
											<p align="justify">Email : '.nl2br($email).'</p>
                                            <p align="justify">Message : '.nl2br($message_body).'</p><br/>';

                        $email_template1 .= $emailsignature;
                        $email_template1 .= '</body></html>';

		 $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 587,'tls')
								  ->setUsername('noreply.einfachsolutionshrm@gmail.com')
								  ->setPassword('Welcome$1');

	     $mailer = Swift_Mailer::newInstance($transport);

		 $response=json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdzJgoUAAAAANN05SkWTTa6StRQs5nsfnFS94yF&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
	        if($response['success'] == false)
	        {
	          $msg = '<div class="alert alert-danger"><strong>You are spammer ! Get the @$%K out</strong></div>';
	        }
	        else
	        {
	         

			  $message = Swift_Message::newInstance($subject)
								  ->setFrom(array($email => $name))
								  ->setTo(array('info@einfachltd.com'=>'Einfach Solutions'))
								 
								  ->setBody($email_template1,'text/html');

								$numSent = $mailer->send($message);
								 
								 if($numSent) {
	
							          $msg =  '<div class="alert alert-success"><strong>Thanks for contacting us. We will keep in touch with you very soon.</strong></div>';			        
							       	  $_POST['name']=$_POST['email']=$_POST['subject']=$_POST['message']='';	
							       
							        } else {
							        	$msg = 'fail';
							        }
				
	     }
		
	}

}



 ?>

 <?php 
	
	$pagetitle = 'Contact us';		

	include(TEMPLATE_FRONT . DS . "header.php"); 

?>

	<div id="mapwrap">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.9816321320545!2d77.64247331437451!3d12.90890199089707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae149a49f7f951%3A0x31814c7476a59025!2sEinfach+Solutions!5e0!3m2!1sen!2sin!4v1476281701908" width="100%" height="350px" marginheight="0" marginwidth="0"  frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	
	<div class="container">
		<div class="row sinfo">
			<div class="col-lg-4">
				<h4>Our Information</h4>
				<br>
				<div class="cinfo">
					<img src="assets/images/icons/clocks.svg" alt="">
				</div>
				<p>
					24/7
				</p>
				<hr>
				<div class="cinfo">
					<img src="assets/images/icons/rss.svg" alt="">
				</div>
				<p>
					764/1, 3rd &amp; 4th Floor, Vishal Towers <br>19th Main, Sector 2,
					HSR Layout,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bangalore (India)- 560102
					
				</p>
				<hr>
				<div class="cinfo">
					<img src="assets/images/icons/android.svg" alt="">
				</div>
				<p>
					+91 806 555 5868 <br>
                    Info@einfachltd.com
				</p>
				<hr>
			</div><!-- col-lg-4 -->
			
			<div class="col-lg-8">

				<?php if($msg!='') echo $msg; ?>
				
				<h4>Need To Contact Us?</h4>
				<p>We are here to answer any questions you may have about our einfach experience. Reach out to us and we'll respond as soon as we can.</p>
				<br>
				<!-- Form begins -->
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

				<div class="form-group <?php if(!empty($name_err)) echo 'has-warning'; ?>">
					<input type="text" class="form-control" name="name" placeholder="Your Name"  value="<?php echo $_POST['name']; ?>"/>
					<div class="help-block"><?php echo $name_err; ?></div>
				</div>			
				
				<div class="form-group <?php if(!empty($email_err)) echo 'has-warning'; ?>">
					<input type="text" name="email" class="form-control" placeholder="Your Email" value="<?php echo $_POST['email']; ?>"/>
					<div class="help-block emailerr"><?php echo $email_err; ?></div>
				</div>			
				
				<div class="form-group <?php if(!empty($subject_err)) echo 'has-warning'; ?>">
					<input type="text" name="subject" class="form-control" placeholder="Subject" value="<?php echo $_POST['subject']; ?>" />
					<div class="help-block subjecterr"><?php echo $subject_err; ?></div>
				</div>

				<div class="form-group <?php if(!empty($message_err)) echo 'has-warning'; ?>">
					<textarea class="form-control" name="message" rows="5" placeholder="Enter Something here..." /><?php echo $_POST['message']; ?></textarea>
					<div class="help-block messaqgeerr"><?php echo $message_err; ?></div>
				</div>

				<div class="form-group">
					<div class="g-recaptcha" data-sitekey="6LdzJgoUAAAAADh0KYV283SzVMdQ_HZikw97dfCK"></div>
					<div class="help-block"><?php echo $captcha_err; ?></div>
				</div>
				
				<button type="submit" name="submit_contact" class="btn btn-wide btn-primary">Submit</button>
			  </form>
			   	<!-- Form ends here -->
			</div><!-- col-lg-8 -->
		</div><!-- row -->
	</div><!-- container -->



<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>
