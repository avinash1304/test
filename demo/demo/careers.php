<?php require_once("resources/config.php"); ?>

<?php 
	
	$pagetitle = 'Careers';		

	include(TEMPLATE_FRONT . DS . "header.php"); 

?>

<?php $base_url = BASE_URL; ?>

<!-- Retrieve all job posted to show on careers page -->
<?php 

	// If no query string is passed then by default show all jobs openings...
	$jobs_query = $conn->query("SELECT j.*,u.name AS PostedBy,c.name AS CatName FROM jobs AS j INNER JOIN categories AS c ON j.category=c.id INNER JOIN users AS u ON j.posted_by=u.id AND j.status=1 ORDER BY j.posted_date DESC ");


?>
<!-- Careerwrap -->
    <div id="faqwrap">
    	<div class="container">
			<div class="row">
				<h1>Now <b>Hiring</b></h1>

				<h4 style="color:#fff;"><b>Be a part of our big idea.</b></h4>
			</div>
    	</div>
    </div>
<!-- /careerwrap -->

<!-- JObs PAGE -->
	
	<div class="container">

		<div class="row">

			<?php if($_SESSION['flash_message']!=''): ?>
			<br>
			<div class="success_msg">
				<div class="alert alert-success alert-msg"><strong>Congrats! </strong><?php echo $_SESSION['flash_message']; ?>
				</div>
			</div>
			<?php unset($_SESSION['flash_message']); endif; ?>

			<!-- Sidebar Section -->
			

			<!-- Content Section -->
			<div class="col-lg-10 col-lg-offset-1 sinfo">
			  <?php if($jobs_query->num_rows == 0): ?>
					<h5 class='centerd'>In a fast paced work environment, we are always looking for people to be a part of our winning team. Should you be interested in being a part of the Einfach family, send in your profile to <a href="mailto:careers@einfachltd.com">careers@einfachltd.com</a></h5>
			  <?php else: ?>	
				<?php while($jobs = $jobs_query->fetch_object()): ?>
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
						<a href="<?php echo BASE_URL.'jobs.php?jid='.md5($jobs->id); ?>" class="btn btn-primary btn-wide job_apply_btn" >Apply</a>
					</div>
					<br>
					<hr>
					<br>
			<?php endwhile; ?>
		<?php endif; ?>	
			
			</div><!-- col-lg-8 / Content Section -->
	
	
		</div><!-- /row -->
	</div><!-- /container -->	

<!-- Job Application Form Modal -->

<!-- <div class="modal fade" id="job_apply_modal" tabindex="-1" role="form" aria-hidden="true">
      <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header centered">Job Application Form</div> 
                <div class="modal-body">
                	
                </div>                    
                                        
           </div>  
    </div>
</div> -->
	
<!-- Job Application Form Modal -->

<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>
