<div id="f"  style="padding-bottom:0px;">
		<div class="container">
			<div class="row">
				
				<br>
				
				<div class="col-lg-4">
		            <p class="text-left"><img src="assets/images/ESWHITE.png" width="140px" height="90px"  alt="Einfach Solutions"></p>
					<p style="color:#fff;"><small>
						764/1, 3rd &amp; 4th Floor,
						Vishal Towers 19th Main,<br>
						Sector 2, HSR Layout, 
						Bangalore - 560102 <br>
                        Phone - +91 806 555 5868 <br>
                        Email – Info@einfachltd.com
					</small></p> 
				</div>

				<div class="col-lg-4 col-lg-offset-2">
					
				<!-- 	<p><small>
						764/1, 3rd &amp; 4th Floor,<br>
						Vishal Towers 19th Main,<br>
						Sector 2, HSR Layout, <br>
						Bangalore - 560102 <br>
                        Phone - +91 806 555 5868 <br>
                        Email – Info@einfachltd.com
					</small></p> -->
				</div>
				<div class="col-lg-2">
					<div class="text-center"><a href="https://www.facebook.com/pages/Einfach-Solutions/680324415328122" class="social-btn" target="_blank"><i class="fa fa-facebook-square fa-2x fa-fw" aria-hidden="true"></i></a>&nbsp;&nbsp;<a href="https://twitter.com/EinfachSolution" target="_blank" class="social-btn"><i class="fa fa-twitter-square fa-2x fa-fw" aria-hidden="true"></i></a>&nbsp;&nbsp;<a href="https://www.linkedin.com/company/einfach-solutions" target="_blank" class="social-btn"><i class="fa fa-linkedin-square fa-2x fa-fw" aria-hidden="true"></i></a></div>
					<div class="text-center"><a href="#" class="btn top_btn btn-inverse btn-block">Back To Top <span class="fa fa-angle-up fa-lg"></span></a></div>
				</div><br>
				
			</div><!-- /row -->
			<p class="centered" style="position:relative; bottom:0px;color:#fff;"><small>Copyright &copy; 2016 <a href="<?php echo BASE_URL.'index.php'; ?>" target="_blank" >Einfach Solutions</a></small></p>
		</div><!-- /container -->
	</div><!-- /Footer -->
	
<?php $conn->close(); ?>
    <!-- Define path variable for javascript redirection -->
    <script>
    	var base_url = 'http://hrm.einfachsolutions.com/demo/';
    	
    </script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
   <script src='https://www.google.com/recaptcha/api.js'></script>

	<script src="assets/js/jquery.themepunch.revolution.min.js"></script>
	<script src="assets/js/jquery.themepunch.plugins.min.js"></script>
	<script src="https://use.fontawesome.com/1c19f24d61.js"></script>

	 <script src="assets/js/careers.js"></script>
	<script>

$(document).ready(function() {

// Automatically disappears notifications dialog after 3 secs.  
  window.setTimeout(function() {
    $(".alert-msg").fadeTo(500, 0).slideUp(500, function(){
 		   $(this).remove(); 
      });
    
    }, 3000);

// Tab pane in about us page logic
  $('#myTab a').click(function (e) {
    
    e.preventDefault()
    $(this).tab('show')
  
  });

// Initialize carasouel on services page
$('.carousel').carousel();	

// Scroll page to top smoothly...
$('.top_btn').click(function(){

	var body = $("html, body");
	body.animate({scrollTop:0}, '500');
});

$('.job_apply_btn').click(function(){
	$('#job_apply_modal').modal('show');
});
// ################  Slideshow ##############
	$('.banner').revolution({
	delay:9000,
	startwidth:1040,
	startheight:463,
	onHoverStop:"off",						// Stop Banner Timet at Hover on Slide on/off
	
	thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
	thumbHeight:50,
	thumbAmount:3,
	
	hideThumbs:0,
	navigationType:"bullet",				// bullet, thumb, none
	navigationArrows:"none",				// nexttobullets, solo (old name verticalcentered), none
	
	navigationStyle:"round-old",			// round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom
	
	
	navigationHAlign:"center",				// Vertical Align top,center,bottom
	navigationVAlign:"bottom",				// Horizontal Align left,center,right
	navigationHOffset:-419,
	navigationVOffset:72,
	
	touchenabled:"on",						// Enable Swipe Function : on/off
	
	stopAtSlide:-1,							// Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
	stopAfterLoops:-1,						// Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic
	
	hideCaptionAtLimit:0,					// It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
	hideAllCaptionAtLilmit:0,				// Hide all The Captions if Width of Browser is less then this value
	hideSliderAtLimit:0,					// Hide the whole slider, and stop also functions if Width of Browser is less than this value
	
	
	fullWidth:"on",
	
	shadow:0								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)
	})



});
</script>
      

</body>

</html>
