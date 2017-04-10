<?php require_once '../../resources/config.php'; ?>

<?php include_once(TEMPLATE_BACK.DS.'auth.php'); ?>

<?php include_once(TEMPLATE_BACK.DS.'header.php'); ?>

<?php include_once(TEMPLATE_BACK.DS.'side_navbar.php'); ?>

  <section id="content">
                <div class="container">
                    <div class="c-header">
                   		 <h2>Dashboard</h2>
                    </div>

                   <div class="card">
                        <div class="card-header">
                            <h2>Visitor Statistics <small>Vestibulum purus quam scelerisque, mollis nonummy metus</small></h2>

                            <ul class="actions">
                                <li>
                                    <a href="#">
                                        <i class="zmdi zmdi-check-all"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="zmdi zmdi-trending-up"></i>
                                    </a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown">
                                        <i class="zmdi zmdi-more-vert"></i>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li>
                                            <a href="#">Change Date Range</a>
                                        </li>
                                        <li>
                                            <a href="#">Change Graph Type</a>
                                        </li>
                                        <li>
                                            <a href="#">Other Settings</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <div class="chart-edge">
                                <div id="curved-line-chart" class="flot-chart "></div>
                            </div>
                        </div>
                   </div>
                   <!-- Visitors Statistics ends -->


                    <div id="c-grid" class="clearfix" data-columns>
                        <div class="card c-dark palette-Light-Blue bg">
                            <div class="card-header">
                                <h2>Website Impressions <small>Consectetur Ultricies Porta Fringilla</small></h2>

                                 <ul class="actions a-alt">
                                    <li class="dropdown">
                                        <a href="#" data-toggle="dropdown">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="#">Change Date Range</a>
                                            </li>
                                            <li>
                                                <a href="#">Change Graph Type</a>
                                            </li>
                                            <li>
                                                <a href="#">Other Settings</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body card-padding">
                                <h2 class="m-t-0 m-b-15 c-white">
                                    <i class="zmdi zmdi-caret-up-circle m-r-5"></i>
                                    987,453
                                </h2>

                                <div class="sparkline-1 text-center"></div>
                            </div>
                        </div>

                        <div class="card c-dark palette-Green-A700 bg">
                            <div class="card-header">
                                <h2>Website Traffics <small>Nullam Adipiscing Pellentesque</small></h2>

                                <ul class="actions a-alt">
                                    <li class="dropdown">
                                        <a href="#" data-toggle="dropdown">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="#">Change Date Range</a>
                                            </li>
                                            <li>
                                                <a href="#">Change Graph Type</a>
                                            </li>
                                            <li>
                                                <a href="#">Other Settings</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body card-padding">
                                <h2 class="m-t-0 m-b-15 c-white">
                                    <i class="zmdi zmdi-caret-up-circle m-r-5"></i>
                                    356,785K
                                </h2>
                                <div class="sparkline-2 text-center"></div>
                            </div>
                        </div>

                     
                        

            </div>
 </section>


<?php include_once(TEMPLATE_BACK.DS.'footer.php'); ?>