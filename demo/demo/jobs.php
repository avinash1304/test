<?php require_once("resources/config.php"); ?>

<!-- Retrieve particular job for which someone applied -->
<?php 
if(!empty($_GET['jid'])) {

	$jid = $_GET['jid'];
	$jobs_query = $conn->query("SELECT j.*, u.name AS PostedBy FROM jobs AS j INNER JOIN users AS u ON j.posted_by=u.id AND MD5(j.id)='$jid' LIMIT 1 ");

$jobs = $jobs_query->fetch_object();
} else {
  
  header('Location:'.BASE_URL.'404.php');	
  
}
 

?>

<?php 
	
	$pagetitle = $jobs->title;		

	include(TEMPLATE_FRONT . DS . "header.php"); 

?>

<!-- JObs PAGE -->
	
	<div class="container">
		<div class="row">

			<!-- Content Section -->
			<div class="col-lg-10 sinfo">
			  <div class="blogcontent">
						<!-- Second Post -->
						
						<h6><?php echo $jobs->title; ?></h6>
						<small><span class="fui-user"></span> <?php echo $jobs->PostedBy; ?> | <span class="fui-calendar"></span> <?php echo date('d M Y',strtotime($jobs->posted_date)); ?> 
						<?php if($jobs->experience_required!=''): ?>
							| <span class="fui-chat"></span> <?php echo $jobs->experience_required; ?>+ years Exp.
						<?php endif; ?>
						</small>
						
						<p><?php echo html_entity_decode($jobs->description); ?></p>
						<?php 
						   if($jobs->skills !='' || $jobs->skills !=null){
						   	// Getting all required skills if any into an array...
							  $skills_arr = explode(',', $jobs->skills);

							  echo '<div class="skills"><p>Skills Required : ';

							  foreach ($skills_arr as $skill) {

							  	echo '<label class="label" style="padding:4px;font-size:12px;background-color:#2C3E50; ">'.$skill.'</label>&nbsp;&nbsp;';
							  }

							  echo '</p></div>';
						   }
						

						 ?>
					
					</div>
					<br>
					<p>To submit your application please complete the form below. Fields marked with a red asterisk <span class="text-danger"><b>*</b></span> are required. When you have finished click Submit at the bottom of this form.</p>
					<hr>
					<br>
					<div class="msg" style="display:none;"></div>
					
					<!-- Application form starts from here -->
					<div class="row">

					<form action="" method="post" enctype="multipart/form-data" id="job-apply-form">
						<div class="col-md-6">

							<div class="form-group row">
								<label for="name" class="control-label col-sm-4">Name* </label>
								<div class="col-sm-8">
									<input type="hidden" name="job_id" value="<?php echo $jobs->id; ?>">
									<input type="hidden" name="job_title" value="<?php echo $jobs->title; ?>">
									<input type="text" class="form-control" placeholder="Enter your name" name="name" id="name">
									<div class="help-block nameerr"></div>
								</div>
							</div><br>
							
							<div class="form-group row">
								<label for="name" class="control-label col-sm-4">Experience (in Yrs)* </label>
								<div class="col-sm-8">
									<input type="number" class="form-control" placeholder="Mention your experience" step="0.1" min="0" max="40" name="experience" id="experience">
									<div class="help-block experienceerr"></div>
								</div>
							</div><br>
							
		
							<div class="form-group row">
								<label for="name" class="control-label col-sm-4">Current Salary* </label>
								<div class="col-sm-8">
									<input type="number" class="form-control" placeholder="Mention current salary in lpa" step="0.1" min="0" max="100" name="current_salary" id="current_salary">
									<div class="help-block current_salaryerr"></div>
								</div>
							</div><br>
						
					    </div>
						<div class="col-md-6">

							<div class="form-group row">
								<label for="name" class="control-label col-sm-4">Email* </label>
								<div class="col-sm-8">
									<input type="email" class="form-control" placeholder="Enter Email address" name="email" id="email">
									<div class="help-block emailerr"></div>
								</div>
							</div><br>

							<div class="form-group row">
								<label for="name" class="control-label col-sm-4">Notice Period* </label>
								<div class="col-sm-8">
									<input type="number" min="0" step="1" max="100" class="form-control" placeholder="Enter Number of months" name="notice_period" id="notice_period">
									<div class="help-block current_salaryerr"></div>
								</div>
							</div><br>

							<div class="form-group row">
								<label for="name" class="control-label col-sm-4">Expected Salary* </label>
								<div class="col-sm-8">
									<input type="number" class="form-control" placeholder="Mention Expected Salary in lpa" step="0.1" min="0" max="100" name="expected_salary" id="expected_salary">
									<div class="help-block expected_salaryerr"></div>
								</div>
							</div><br>

						</div>
						
					</div>
					<div class="row">
							<label for="resume" class="control-label col-sm-4">Attach Resume* </label>
							<div class="col-sm-8">
									<input type="file" class="form-control" name="resume" id="resume">
									<div class="help-block resumeerr"></div>
							</div>
					</div>
					 <div class="row">
						<div class="col-lg-12">
							<div class="text-center">
									<div class="g-recaptcha" data-sitekey="6Lc0wQkUAAAAAMHSyXpAS72CaqsjS1EB-TnktzS1"></div>
								    <div class="help-block g-recaptcha_err"></div>
							</div>
						</div>	 			
					</div>

					<div class="row">
								
								<div class="col-sm-2 col-sm-offset-5">
									<button type="submit" class="btn btn-wide btn-primary " id="job_submit_btn">Submit</button>
									
								</div>
						</div><br>

						</form>	

					<!-- Application form starts from here -->
			</div><!-- col-lg-8 / Content Section -->
	
	
		</div><!-- /row -->
	</div><!-- /container -->	



<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>