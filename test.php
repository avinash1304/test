<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BootStrap Avinash</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
</head>
<style>
body{
padding-top:40px;
}
</style>

<body data-spy="scroll" data-target="#my-navbar">

<nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar">
<div class="container">
	<div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
        	<span class="icon-bar"></span>
            <span class="icon-bar"></span>
           	<span class="icon-bar"></span>
        </button>
        
        <a href="" class="navbar-brand">Abhi K</a>
    </div><!--navbar-header-->
    
    <div class="collapse navbar-collpase" id="navbar-collapse">
    
    <a href="" class="btn btn-warning navbar-btn navbar-right">Download Now</a>
    
    	<ul class="nav navbar-nav">
        	<li><a href="#page1">Page1</a></li>
            <li><a href="#page2">Page2</a></li>
            <li><a href="#page3">Page3</a></li>
            <li><a href="#page4">Page4</a></li>
            <li><a href="#page5">Page5</a></li>
        </ul><!--End undifined list-->
    </div><!--nav collapse-->
</div><!--End Container-->
</nav><!--End nav-->

<!-- jumbotron-->
<div class="jumbotron">
	<div class="container text-center">
    	<h1>Abhi App</h1>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor libero mauris. Duis sem mauris, imperdiet sit amet dui et, ultrices luctus lorem.
            </p>
            
            <div class="btn-group">
            	<a href="" class="btn btn-lg btn-warning">Download App</a>
                <a href="" class="btn btn-lg btn-default">Visit Store</a>
                <a href="" class="btn btn-lg btn-warning">Spread The Word</a>
            </div>
    </div><!--End Container-->
</div>
<!--End Jumbotron-->

<div class="container">
	<section>
    	<div  class="page-header" id="page1">
			<h2>Page1<small>Lorem ipsum dolor sit amet.</small></h2>
        </div>
        
        <div class="row">
        	<div class="col-md-4">
            	<blockquote>
                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor libero mauris. Duis sem mauris, imperdiet sit amet dui et, ultrices luctus lorem.</p>				                    <footer>AVI</footer>
                </blockquote>
            </div>
        	<div class="col-md-4">
            	<blockquote>
                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor libero mauris. Duis sem mauris, imperdiet sit amet dui et, ultrices luctus lorem.</p>				                    <footer>AVI</footer>
                </blockquote>
            </div>
            <div class="col-md-4">
            	<blockquote>
                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor libero mauris. Duis sem mauris, imperdiet sit amet dui et, ultrices luctus lorem.</p>				                    <footer>AVI</footer>
                </blockquote>
            </div>
        </div><!--ENd Row-->
    </section>
</div><!-- End Container-->

<!-- call to action-->
<section>
	<div class="well">
    	<div class="container text-center">
        	<h3>Subscribe for more free stuff</h3>
            <p>Please enter your name and email.</p>
            
            <form action="" class="form-inline">
            	<div class="form-group">
            		<label for="subscription">Subscribe</label>
                    <input type="text" class="form-control" id="subscription" placeholder="You Name" />
            	</div>	
                <div class="form-group">
            		<label for="email">Email Address</label>
                    <input type="text" class="form-control" id="email" placeholder="You Mail ID" />
            	</div>
                <button type="submit" class="btn btn-default">Subscribe</button>
                <hr />
            </form><!-- End Form-->
        </div><!-- End Container-->       
    </div><!--End Well-->
</section><!--end call to action-->

<!--page2-->
<div class="container">
 <section>
 	<div class="page-header" id="page2">
    	<h2>Page2<small>Lorem ipsum dolor sit amet.</small></h2>
    </div> 
    
    <div class="carousel slide" id="screenshot-carousel" data-ride="carousel">
    	<ol class="carousel-indicators">
        	<li data-target="#screenshot-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#screenshot-carousel" data-slide-to="1"></li>
            <li data-target="#screenshot-carousel" data-slide-to="2"></li>
            <li data-target="#screenshot-carousel" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
        	<div class="item active">
            	<img src="images/slide1.jpg" alt="slide1" title="slide1" />
                <div class="carousel-caption">
                	<h3>Slide One</h3>
                    <p>This is caption.</p>
                </div>
            </div>
            <div class="item">
            	<img src="images/slide2.jpg" alt="slide2" title="slide2" />
                <div class="carousel-caption">
                	<h3>Slide Two</h3>
                    <p>This is caption.</p>
                </div>
            </div>
            <div class="item">
            	<img src="images/slide3.jpg" alt="slide3" title="slide3" />
                <div class="carousel-caption">
                	<h3>Slide Three</h3>
                    <p>This is caption.</p>
                </div>
            </div>
            <div class="item">
            	<img src="images/slide4.jpg" alt="slide4" title="slide4" />
                <div class="carousel-caption">
                	<h3>Slide Fourth</h3>
                    <p>This is caption.</p>
                </div>
            </div>
        </div><!--end carousel inner-->
        <a href="#screenshot-carousel" class="left carousel-control" data-slide="prev">
        	<span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a href="#screenshot-carousel" class="right carousel-control" data-slide="next">
        	<span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div><!--End Carousel-->   
 </section><!--end section-->
</div>

<!--page3-->
<div class="container">
	<section>
		<div class="page-header" id="page3">
    	<h2>Page3<small>Lorem ipsum dolor sit amet.</small></h2>
    	</div><!--End Page-header-->
        <div class="row">
        	<div class="col-sm-8">
            	<h3>This is heading</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor libero mauris. Duis sem mauris, imperdiet sit amet dui et, ultrices luctus lorem.</p>
            </div>
            <div class="col-sm-4">
            	<img src="images/logo1.png" class="img-responsive" alt="Einfach Solution" />
            </div> 
        </div><!--End Row-->
        <div class="row">
        	<div class="col-sm-8">
            	<h3>This is heading</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor libero mauris. Duis sem mauris, imperdiet sit amet dui et, ultrices luctus lorem.</p>
            </div>
            <div class="col-sm-4">
            	<img src="images/logo1.png" class="img-responsive" alt="Einfach Solution" />
            </div> 
        </div><!--End Row-->
        <div class="row">
        	<div class="col-sm-8">
            	<h3>This is a heading</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor libero mauris. Duis sem mauris, imperdiet sit amet dui et, ultrices luctus lorem.</p>
            </div>
            <div class="col-sm-4">
            	<img src="images/logo1.png" class="img-responsive" alt="Einfach Solution" />
            </div> 
        </div><!--End Row-->
        
        <hr />
        
        <div class="row">
        	<div class="col-sm-4">
            	<div class="panel panel-default text-center">
                	<div class="panel-body">
                    	<span class="glyphicon glyphicon-ok-sign"></span>
                  		<h4>This is a heading</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor libero mauris. Duis sem mauris, imperdiet sit amet dui et, ultrices luctus lorem.</p> 
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
            	<div class="panel panel-default text-center">
                	<div class="panel-body">
                    	<span class="glyphicon glyphicon-question-sign"></span>
                  		<h4>This is a heading</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor libero mauris. Duis sem mauris, imperdiet sit amet dui et, ultrices luctus lorem.</p> 
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
            	<div class="panel panel-default text-center">
                	<div class="panel-body">
                    	<span class="glyphicon glyphicon-info-sign"></span>
                  		<h4>This is a heading</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor libero mauris. Duis sem mauris, imperdiet sit amet dui et, ultrices luctus lorem.</p> 
                    </div>
                </div>
            </div>
        </div><!--End row-->
        
	</section><!--End Section-->
</div><!--End Container-->

<!--Page4-->
<div class="container">
	<section>
    	<div class="page-header" id="page4">
    	<h2>Page4<small>Lorem ipsum dolor sit amet.</small></h2>
    	</div><!--End Page-header-->
        
        <div class="panel-group" id="accordion">
        	<div class="panel panel-default">
            	<div class="panel-heading">
                	<div class="panel-title">
                    	<a href="#collapse1" data-toggle="collapse" data-parent="#accordion">
                        QUE 1?
                        </a>
                    </div><!--End panel Title-->
                    <div id="collapse1" class="panel-collapse collapse in">
                    	<div class="panel-body">
                        	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor libero mauris. Duis sem mauris, imperdiet sit amet dui et, ultrices luctus lorem.
                        </div><!--End Body-->
                    </div><!--End panel collapse-->
                </div>
            </div>
            
            <div class="panel panel-default">
            	<div class="panel-heading">
                	<div class="panel-title">
                    	<a href="#collapse2" data-toggle="collapse" data-parent="#accordion">
                        QUE 2?
                        </a>
                    </div><!--End panel Title-->
                    <div id="collapse2" class="panel-collapse collapse">
                    	<div class="panel-body">
                        	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor libero mauris. Duis sem mauris, imperdiet sit amet dui et, ultrices luctus lorem.
                        </div><!--End Body-->
                    </div><!--End panel collapse-->
                </div>
            </div>
            
                        <div class="panel panel-default">
            	<div class="panel-heading">
                	<div class="panel-title">
                    	<a href="#collapse3" data-toggle="collapse" data-parent="#accordion">
                        QUE 3?
                        </a>
                    </div><!--End panel Title-->
                    <div id="collapse3" class="panel-collapse collapse">
                    	<div class="panel-body">
                        	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor libero mauris. Duis sem mauris, imperdiet sit amet dui et, ultrices luctus lorem.
                        </div><!--End Body-->
                    </div><!--End panel collapse-->
                </div>
            </div>
        </div><!--End panel Group-->        
    </section><!--End Section-->
</div><!--End Container-->

<!--page5-->
<div class="container">
	<section>
    	<div class="page-header" id="page5">
    	<h2>Page5<small>Lorem ipsum dolor sit amet.</small></h2>
    	</div><!--End Page-header-->
        
        <div class="row">
        	<div class="col-lg-4">
            	<p>Send us the message or contact us from the address below</p>
                
                <address>
                	<strong>
                    	einfach Solutions<br/>
                    </strong>
                    123456 mjadfbl<br/>
                     Bangalore 560029
                </address>
            </div>
            <div class="col-lg-8">
            	<form action="" class="form-horizontal">
                	<div class="form-group">
                    	<label for="user-name" class="col-lg-2 control-label">Name</label>
                        <div class="col-lg-10">
                        	<input type="text" class="form-control" id="user-name" placeholder="Enter Your Name" />
                        </div>
                    </div><!--End form group-->
                    
                    <div class="form-group">
                    	<label for="user-email" class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10">
                        	<input type="text" class="form-control" id="user-email" placeholder="Enter Your Email" />
                        </div>
                    </div><!--End form group-->
                    
                    <div class="form-group">
                    	<label for="user-message" class="col-lg-2 control-label">Message</label>
                        <div class="col-lg-10">
                        	<textarea class="form-control" id="user-message" name="user-message" cols="20" rows="10" placeholder="Enter Your Message"></textarea>
                        </div>
                    </div><!--End form group-->
                    
                    <div class="form-group">
                    	<label for="user-name" class="col-lg-2 control-label">Name</label>
                        <div class="col-lg-10">
                        	<input type="text" class="form-control" id="user-name" placeholder="Enter Your Name" />
                        </div>
                    </div><!--End form group-->
                    
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                        	<button type="submit" class="btn btn-primary">SEND</button>
                        </div>
                    </div><!--End form group-->
                </form>
            </div>
        </div><!--End Row-->
        
    </section><!--End Section-->
</div><!--End Continer-->

<!--Footer-->
<footer>
	<div class="container">
    	<hr />
    	    <div class="container text-center">
        	<h3>Subscribe for more free stuff</h3>
            <p>Please enter your name and email.</p>
            
            <form action="" class="form-inline">
            	<div class="form-group">
            		<label for="subscription">Subscribe</label>
                    <input type="text" class="form-control" id="subscription" placeholder="You Name" />
            	</div>	
                <div class="form-group">
            		<label for="email">Email Address</label>
                    <input type="text" class="form-control" id="email" placeholder="You Mail ID" />
            	</div>
                <button type="submit" class="btn btn-default">Subscribe</button>
                <hr />
            </form><!-- End Form-->
            
          	<ul class="list-inline">
            	<li><a href="">Twitter</a></li>
                <li><a href="">Facebook</a></li>
                <li><a href="">Linked-in</a></li>
            </ul>
            
            <p>&copy; Copyright @ 2015 </p>
            
        </div><!-- End Container--> 
    </div><!--End Container-->
</footer><!--End footer-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>
