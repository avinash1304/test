<?php require_once '../../resources/config.php'; ?>
<!DOCTYPE html>
    <!--[if IE 9 ]><html class="ie9"><![endif]-->
 
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Einfach Solutions</title>
        
        <!-- Vendor CSS -->
        <link href="vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
        <link href="vendors/bower_components/google-material-color/dist/palette.css" rel="stylesheet">
        <link href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
            
        <!-- CSS -->
        <link href="css/app.min.1.css" rel="stylesheet">
        <link href="css/app.min.2.css" rel="stylesheet">
    </head>
    
    <body>
       
        <div class="login" data-lbg="teal">

                
                
            <!-- Login -->
            <div class="l-block toggled" id="l-login">
                 <span class="error_div"></span>
                <div class="lb-header palette-Teal bg">
                     <span style="font-size:24px; padding:60px;">Einfach cPanel</span>
                    <i class="zmdi zmdi-group-work text-left" style="margin-top:-40px;"></i>
                    
                    
                </div>

                <div class="lb-body">

                  <form action="" method="post" id="login-form">
                    <div class="form-group fg-float">
                        <div class="fg-line">
                            <input type="text" name="username" id="username" class="input-sm form-control fg-input">
                            <label class="fg-label">Username</label>
                        </div>
                    </div>

                    <div class="form-group fg-float">
                        <div class="fg-line">
                            <input type="password" name="password" id="password" class="input-sm form-control fg-input">
                            <label class="fg-label">Password</label>
                        </div>
                    </div>

                    <button type="submit" class="btn palette-Teal bg">Sign in</button>

                    <div class="m-t-20">
                      
                        <a data-block="#l-forget-password" data-bg="purple" href="#" class="palette-Teal text">Forgot password?</a>
                    </div>

                   </form> 
             </div>
         </div>

           
            <!-- Forgot Password -->
            <div class="l-block" id="l-forget-password">
                <div class="lb-header palette-Purple bg">
                    <i class="zmdi zmdi-account-circle"></i>
                    Forgot Password?
                </div>

                <div class="lb-body">
                    <p class="m-b-30">Lorem ipsum dolor fringilla enim feugiat commodo sed ac lacus.</p>

                    <div class="form-group fg-float">
                        <div class="fg-line">
                            <input type="text" class="input-sm form-control fg-input">
                            <label class="fg-label">Enter Username</label>
                        </div>
                    </div>

                    <button class="btn palette-Purple bg" id="recover_btn">Recover Password</button>

                    <div class="m-t-30">
                        <a data-block="#l-login" data-bg="teal" class="palette-Purple text d-block m-b-5" href="#">Already have an account?</a>
                       
                    </div>
                </div>
            </div>
        </div>

        <!-- Older IE warning message -->
        <!--[if lt IE 9]>
            <div class="ie-warning">
                <h1 class="c-white">Warning!!</h1>
                <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
                <div class="iew-container">
                    <ul class="iew-download">
                        <li>
                            <a href="http://www.google.com/chrome/">
                                <img src="img/browsers/chrome.png" alt="">
                                <div>Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.mozilla.org/en-US/firefox/new/">
                                <img src="img/browsers/firefox.png" alt="">
                                <div>Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.opera.com">
                                <img src="img/browsers/opera.png" alt="">
                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.apple.com/safari/">
                                <img src="img/browsers/safari.png" alt="">
                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                                <img src="img/browsers/ie.png" alt="">
                                <div>IE (New)</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>Sorry for the inconvenience!</p>
            </div>
        <![endif]-->
    <script>
        var cpanel_url = 'http://localhost/einfachltd/public/cpanel/';
        var ajax_url = 'http://localhost/einfachltd/resources/ajax/';
    </script>
        <!-- Javascript Libraries -->
        <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="vendors/bower_components/Waves/dist/waves.min.js"></script>

        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->

        <script src="js/functions.js"></script>
         <script src="js/user.js"></script>
        
    </body>
</html>