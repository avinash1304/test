$(document).ready(function(){
	

	$('#job-apply-form').on('submit', function (e) {

       e.preventDefault();
      var formData = new FormData(this);
        
      var name = $('#name').val();
      var email = $('#email').val();
      var current_salary = $('#current_salary').val();
      var expected_salary = $('#expected_salary').val();
      var notice_period = $('#notice_period').val();
      var experience = $('#experience').val();
      var resume = $('#resume').val();
      var captcha_response = grecaptcha.getResponse();

      var redirected_to = base_url+'careers.php';
      var status = true;

      $('.msg').html('').hide();
     
      if(name=='' || name==null) {
      	$('#name').closest('.form-group').addClass('has-warning');
      	$('.nameerr').text('Name is required');
      	status = false;
      } else {

      	$('#name').closest('.form-group').removeClass('has-warning');
      	$('.nameerr').text('');
      }

       if(email=='' || email==null) {
      	$('#email').closest('.form-group').addClass('has-warning');
      	$('.emailerr').text('Email Address is required');
      	status = false;

      } else {

      	$('#email').closest('.form-group').removeClass('has-warning');
      	$('.emailerr').text('');
      }

      if(experience=='' || experience==null) {
      	$('#experience').closest('.form-group').addClass('has-warning');
      	$('.experienceerr').text('Experience is required');
      	status = false;
      } else {

      	$('#experience').closest('.form-group').removeClass('has-warning');
      	$('.experienceerr').text('');
      }


       if(current_salary=='' || current_salary==null) {
      	$('#current_salary').closest('.form-group').addClass('has-warning');
      	$('.current_salaryerr').text('Mention current salary');
      	status = false;
      } else {

      	$('#current_salary').closest('.form-group').removeClass('has-warning');
      	$('.current_salaryerr').text('');
      }

       if(expected_salary=='' || expected_salary==null) {
      	$('#expected_salary').closest('.form-group').addClass('has-warning');
      	$('.expected_salaryerr').text('Mention expected salary');
      	status = false;
      } else {

      	$('#expected_salary').closest('.form-group').removeClass('has-warning');
      	$('.expected_salaryerr').text('');
      }

       if(notice_period=='' || notice_period==null) {
      	$('#notice_period').closest('.form-group').addClass('has-warning');
      	$('.notice_perioderr').text('Mention your notice period');
      	status = false;
      } else {

      	$('#notice_period').closest('.form-group').removeClass('has-warning');
      	$('.notice_perioderr').text('');
      }


       if(resume=='' || resume==null) {
      	$('#resume').closest('.form-group').addClass('has-warning');
      	$('.resumeerr').text('Please attach copy of your recent resume');
      	status = false;
      } else {

      	$('#resume').closest('.form-group').removeClass('has-warning');
      	$('.resumeerr').text('');
      }

      if(captcha_response.length ==0) {

        $('.g-recaptcha_err').html('<small class="text-warning">Please check captch</small>');
        status = false;
      }else {
            $('.g-recaptcha_err').html('');
      }


      if(status==true) {

            $('#job_submit_btn').text('Submitting');
            $('#job_submit_btn').prop('disabled',true);
      	
			      $.ajax({
			            type:'POST',
			            url:base_url+'includes/ajax_apply_job.php',
			            data:formData,
			            cache:false,
			            contentType: false,
			            processData: false,
			            success:function(data){

                                $('#job_submit_btn').text('Submit');
                                $('#job_submit_btn').prop('disabled',false);

			                if(data=="applied") { 
                                    
                                     $('#job_submit_btn').text('Submitted');
                                     $('#job_submit_btn').prop('disabled',true);

			                      window.location.replace(redirected_to);
			                }

			                if(data=='already-applied') {
			                	 $('.msg').html("<div class='alert alert-warning'><strong>Sorry! </strong>You have already applied for this Job.</div>").show();
					              
			                } 

                                 if (data=='captcha-error') {
                                     
                                     $('.msg').html("<div class='alert alert-warning'><strong>Dude! You are spammer ! Get the @$%K out.</strong>.</div>").show();
                                            
                                  }

			                if(data=="invalid-type") {

			                    $('#resume').closest('.form-group').addClass('has-warning');
			                    $('.resumeerr').text("Only PDF file is allowed");

			                } else if(data=='invalid-size') {

			                	$('#resume').closest('.form-group').addClass('has-warning');
			                    $('.resumeerr').text("File size must not exceeds 3 MB");	
			                   
			                } else {

			                	 $('#resume').closest('.form-group').removeClass('has-warning');
			                     $('.resumeerr').text("");
			                }

			                if(data=='error') {

			                	$('.msg').html('<div class="alert alert-danger"><strong>Oops! </strong>Something went wrong. please try again...</div>').show();
			                }
			            },
			            error: function(data){
			                console.log("error");
			                console.log(data);
			            }
			        });

        }

     
   
	});
});