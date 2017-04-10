<?php require_once("resources/config.php"); ?>

<?php 
	
	$pagetitle = 'About us';		

	include(TEMPLATE_FRONT . DS . "header.php"); 

?>

<!-- Aboutrwrap -->
    <div id="aboutwrap">
    	<div class="container">
			<div class="row">
				<h1><br/> <b>Einfach Solutions</b> is a family<br/> of digital thinkers &amp; makers.</h1>
			</div>
    	</div>
    </div>
    <!-- /aboutrwrap -->
	
	
	<!-- Intro Section -->
	<div class="container sinfo">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<p align="justify"><strong>Einfach</strong> means "Simple" and that is exactly what we do. We simplify your issues and provide solutions that rightly term us as a next generation solution provider. We are not just another Business Process Outsources. Our aim is to provide our clients with solutions that will help them gain control and efficiencies in the ever changing service industry.</p><br>
				<p align="justify">We are a bunch extremely passionate about business with over 35 years of combined experience in setting up new businesses, transition and Business process improvements.</p>

				<p align="justify">Our fully integrated platform has been designed for clients who are seeking a strategic partner to deliver measurable outcomes. It has been architected to provide all of the capabilities that an organization needs to create a differentiated customer experience across all channels and all phases of the customer life cycle. It balances the latest innovations in technology with the empathy of human contact which allows our clients to focus on their core competencies while we focus on ours - delivering awesome customer experiences.</p>
				<p align="justify">We understand the uniqueness of every transaction and give it the attention it deserves. This approach has helped us and our clients to complete transactions seamlessly. We offer customized solutions based on our client’s requirements.</p>
				<p align="justify">With an overall 35 years of real estate, outsourcing, technology and consulting experience, our team has seen the ups and downs of the outsourcing business, our market understanding and approach to solution design is state of the art.</p>

			</div>
		</div><!-- /row -->
	
	</div><!-- /container -->
	
	
	<!-- Leaders Section -->
	
	
	<!-- Charts Section -->
	<div class="container sinfo">
		<div class="row centered">
			<h3>Our Capabilities</h3>
			<br>
			
			<!-- First Chart -->
			<div class="col-lg-4">
				<canvas id="canvas" height="130" width="130"></canvas>
				<br>
				<script>
					var doughnutData = [
							{
								value: 90,
								color:"#1abc9c"
							},
							{
								value : 10,
								color : "#ecf0f1"
							}
						];
						var myDoughnut = new Chart(document.getElementById("canvas").getContext("2d")).Doughnut(doughnutData);
				</script>
				<p><b>Outsourcing </b></p>
				
			</div><!-- /col-lg-3 -->

			<!-- Second Chart -->
			<div class="col-lg-4">
				<canvas id="canvas2" height="130" width="130"></canvas>
				<br>
				<script>
					var doughnutData = [
							{
								value: 65,
								color:"#1abc9c"
							},
							{
								value : 35,
								color : "#ecf0f1"
							}
						];
						var myDoughnut = new Chart(document.getElementById("canvas2").getContext("2d")).Doughnut(doughnutData);
				</script>
				<p><b>Marketing &amp; Advertising </b></p>
				
			</div><!-- /col-lg-3 -->
			
			<!-- Third Chart -->
			<div class="col-lg-3">
				<canvas id="canvas3" height="130" width="130"></canvas>
				<br>
				<script>
					var doughnutData = [
							{
								value: 75,
								color:"#1abc9c"
							},
							{
								value : 25,
								color : "#ecf0f1"
							}
						];
						var myDoughnut = new Chart(document.getElementById("canvas3").getContext("2d")).Doughnut(doughnutData);
				</script>
				<p><b>Web Development</b></p>
				
			</div><!-- /col-lg-3 -->
			
			
		</div><!-- /row -->
	</div><!-- /container -->


<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>