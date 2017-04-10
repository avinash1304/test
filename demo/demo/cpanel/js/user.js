$(document).ready(function(){

	$('#login-form').on('submit', function (e){
		e.preventDefault();
		var username = $('#username').val();
		var password = $('#password').val();
		var status = true;
		
		$('.error_div').html('');
		
		if(username=='' || username==null) {
			$('#username').closest('.form-group').addClass('has-warning');
			status = false;
		} else {
			$('#username').closest('.form-group').removeClass('has-warning');
		}


		if(password=='' || password==null) {
			$('#password').closest('.form-group').addClass('has-warning');
			status = false;
		} else {
			$('#password').closest('.form-group').removeClass('has-warning');
		}

     if(status==true) {

     	$.post(ajax_url+'user_login.php',{username:username,password:password},function (data){
	    	if(data=='Invalid') {
	    		$('.error_div').html('<span class="alert alert-warning"><strong>Sorry!</strong> Either Username or Password is Wrong.</span>');
	    	} else {
	    		window.location.replace(cpanel_url+'dashboard.php');
	    	}
	    });

     }
	    
	});
});