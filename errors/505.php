<?php
session_start();
$title = '505 HTTP Version Not Supported!';
include_once('../../include/a-header.php');
?>

	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">
				<!-- Error wrapper -->
				<div class="container-fluid text-center">
					<h1 class="error-title">505</h1>
					<h6 class="text-semibold content-group">Oops, an error has occurred. HTTP Version Not Supported!</h6>

					<div class="row">
						<div class="col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3">
							<form action="#" class="main-search">
								<div class="input-group content-group">
									<input type="text" class="form-control input-lg" placeholder="Search">

									<div class="input-group-btn">
										<button type="submit" class="btn bg-slate-600 btn-icon btn-lg"><i class="icon-search4"></i></button>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-6">
										<a href="<?php echo $path;?>content/dashboard.php" class="btn btn-primary btn-block content-group"><i class="icon-circle-left2 position-left"></i> Go to dashboard</a>
									</div>

									<div class="col-sm-6">
										<a href="<?php echo $path;?>logout.php" class="btn btn-primary btn-block content-group"> Go to Home <i class="icon-circle-right2 position-right"></i> </a>
									</div>
                                    &copy; <?php echo date('Y');?> | All Rights Reserved by <a href="http://www.washburnlawpllc.com/" target="_blank">Washburn Law PLLC</a> |  <a href="http://www.washburnlawpllc.com/disclaimers.php"  target="_blank"> Disclaimer </a>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- /error wrapper -->
			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>

</html>
<?php $conn->close(); ?>
