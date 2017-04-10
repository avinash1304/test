<?php
require_once '../resources/config.php';
require_once '../swiftmailer/lib/swift_required.php';

$job_id = $_POST['job_id'];
$job_title = $_POST['job_title'];

$name = $conn->real_escape_string($_POST['name']);
$name = ucwords($name);
$email =$conn->real_escape_string($_POST['email']);
$email = trim($email);

$experience = $_POST['experience'];
$current_salary = $_POST['current_salary'];
$expected_salary = $_POST['expected_salary'];
$notice_period = $_POST['notice_period'];

$resume = $_FILES['resume']['tmp_name'];
$file_name = $_FILES['resume']['name'];
$file_type = $_FILES['resume']['type'];
$file_size = $_FILES['resume']['size'];

$captcha = $_POST['g-recaptcha-response'];

$msg='';
$status = true;

date_default_timezone_set('Asia/Kolkata');

$cur_time = date('Y-m-d h:i:s');


$emailsignature = '<p align="left"><b>Thanks and Regards</b>,<br>

<b><i><font color="blue">Einfach Solutions</font></i></b><br> <br>

<a href="http://www.einfachltd.com" title="Visit Einfach Solutions Website"><b>Einfach Solutions</b></a><br><br>

+91 80 6555 5868 (Office)<br>

<address>764/1,3rd Floor, Vishal Towers
9th Main, 2nd Sector,<br> HSR Layout. 
Bangalore - 560102</address>
</p><br><br>
<p align="justify">
The information contained in this transmission is privileged and confidential. It is intended only for the use of the individual or entity named above. If the reader of this message is not the intended recipient, you are hereby notified that any dissemination, distribution or copy of this communication is strictly prohibited. If you have received this communication in error, please notify us immediately by telephone or by email to avinash@einfachltd.com or by replying to this email and delete all copies of this message and all attachments.</p>'; 
$email_template = '';
                        
                        $email_template .= '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"

                                            "http://www.w3.org/TR/html4/loose.dtd">

                                            <html lang="en">

                                            <head>

                                                <meta http-equiv="content-type" content="text/html; charset=utf-8">

                                                <title>Einfach Solutions | Contacts</title>

                                            </head>

                                            <body>

                                            <p align="justify"><b>Dear HR,<b></p><br/><p>'.$name.' applied for the Job titled "'.$job_title.'"</p>
											<p>Below is their basic details regarding job application:<br><br>
											 Experience      : '.$experience.' years<br><br>
											 Current Salary  : '.$current_salary.' lpa<br><br>
											 Expected Salary : '.$expected_salary.' lpa<br><br>
											 Notice Period   : '.$notice_period.' months<br><br>	
											</p>
                                            <br><p>Kindly download his resume from below attached file.</p>';

                        $email_template .= $emailsignature;
                        $email_template .= '</body></html>';


// Checking whether applicant already applied for job or not
$is_applied = $conn->query("SELECT j.applicant_id FROM job_applied AS j INNER JOIN applicants AS a ON j.applicant_id=a.id AND a.email='$email' AND j.job_id=$job_id LIMIT 1 ");
$mimes_array = array('application/msword','application/pdf','application/vnd.openxmlformats-officedocument.wordprocessingml.document');
if ($is_applied->num_rows>0) {
	
	$msg = 'already-applied';
	$status = false;

} else if(!in_array($file_type,$mimes_array)) {

 $msg = 'invalid-type';
 $status = false;

} else if ($file_size > 3145728) {
  
  $msg = 'invalid-size';
  $status = false;

}

if ($status==true) { 

  	
   // Set filename and destination path...	
	$file_name = $name.'_'.$file_name;
	$path = UPLOAD_DIRECTORY.$file_name;
  
   // Validate Captcha Response
    $response=json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Lc0wQkUAAAAAHbBDOUqjQX2Sv8jm3oaTHI7W49z&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
	  
	  if($response['success'] == false) {

	          $msg = 'captcha-error';
	  
	  } else {

     // Sending mail to HR Department containing applicant resume & details...
		 $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 587,'tls')
								  ->setUsername('noreply.einfachsolutionshrm@gmail.com')
								  ->setPassword('Welcome$1');

	     $mailer = Swift_Mailer::newInstance($transport);

	     $message = Swift_Message::newInstance('Job Application from '.$name)
								  ->setFrom(array($email => $name))
								  ->setTo(array('careers@einfachltd.com'=>'Einfach Solutions'))
								  
								  ->setBody($email_template,'text/html');

		$message->attach(Swift_Attachment::fromPath($resume)->setFilename($file_name));						  
		
		$numSent = $mailer->send($message);


			// Insert applicant details into applicants table
			$check = $conn->query("SELECT id FROM applicants WHERE email='$email' LIMIT 1 ");
			if($check->num_rows==0) {
										
			 // For New Applicant who applies for first time...	
				$insert_applicant = $conn->query("INSERT INTO applicants(name,email,experience,current_salary,expected_salary,notice_period,resume,created_date,status) VALUES('$name','$email',$experience,$current_salary,$expected_salary,$notice_period,'$file_name','$cur_time',1) ");
				
					  if($insert_applicant) {
					    	
			    	$applicant_id = $conn->insert_id;
			    	
			    	// Insert applicant id along with job id in job_applied table....
			    	$job_applied = $conn->query("INSERT INTO job_applied(job_id,applicant_id) VALUES($job_id,$applicant_id) ");
			    	
			    	if($job_applied) {

			    		move_uploaded_file($resume,$path);
			    		$_SESSION['flash_message']='You have successfully applied';
			    		echo 'applied';

			    	} else {
			    		echo 'error';
			    	}
			    
		     } else {
			    	echo 'error';
			    }

	} else {
		
      // For existing Applicants...
		$existing_applicant = $check->fetch_object();
        $applicant_id = $existing_applicant->id;

            // Insert applicant id along with job id in job_applied table....
			    	$japplied = $conn->query("INSERT INTO job_applied(job_id,applicant_id) VALUES($job_id,$applicant_id) ");
			    	
			    	if($japplied) {

			    		
			    		$_SESSION['flash_message']='You have successfully applied';
			    		echo 'applied';

			    	} else {
			    		echo 'error';
			    	}
	} 
	
   
   }

} else {

	echo $msg;
}


 ?>