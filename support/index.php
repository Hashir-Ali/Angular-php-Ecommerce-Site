
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>XHSIOW's Ecommerce site - The Most Complete & Trusted dropshiping site ever.</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="assets/plugins/css-chart/css-chart.css" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <!-- Vector CSS -->
    <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
        <!-- Bootstrap responsive table CSS -->
    <link href="assets/plugins/tablesaw-master/dist/tablesaw.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

    <style>
        .card{
            padding: 10px 30px;
        }
        .card-top{
            margin-top: 20px;
        }
        .card-bottom{
            padding: 0px 20px;
        }

        .card-bottom > h4 {font-weight: 700; text-align: center;}
        .card-buttons:nth-child(1){

        }
        .card-buttons > .btn-outline{
            display: inline-block; float: left; width: 100%;
            background: orange; padding-left: 15px; padding-right: 15px; background: transparent; color:#f66c43; border-color:#f66c43; font-weight: bold;
        }

        .site-label{
            float: right; color: #f66c43;
            font-weight: bold;
        }

        .cart-btn-small{
            display: none;
            background: white; border: 1px solid gray; border-radius: 4px; width: 25%; height: 55px; float: right;
        }
    </style>
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        
        <?php require_once('assets/includes/header.php'); ?>
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php require_once('assets/includes/side_header.php') ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-12 col-12 align-self-center">
                        
                        <div style="display: inline-block; margin-top: 1%; margin-left: 10%; float: right; width: 100%;"> 
                            
                        </div>
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->




                 <!-- ============================================================== -->
                <!-- Start User Search Result content -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- End user Search Results content-->
                <!-- ============================================================== -->
                    <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-7 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="d-flex flex-wrap">
                                    <div>
                                        <h3 class="card-title">Queries Statistics</h3>
                                        <h6 class="card-subtitle">Overview of Top up queries</h6>
                                    </div> 
                                    <div class="ml-auto align-self-center">
                                        
                                    </div>

                                </div>
                                <div class="campaign ct-charts"></div>
                                
                           
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-5 col-xlg-3 col-md-5">
                        <div class="card" style="padding-left: 0px !important; padding-right: 0px !important;">
                            <div class="card-body" style="">
                            <h4 class="card-title">User Contacts</h4>
                            <div class="message-box">
                                <div class="message-widget message-scroll">
                                    <!-- Message -->
                                    <a href="#">
                                        <div class="user-img"> 
                                         <span class="round">H</span> 
                                         
                                        </div>
                                        <div class="mail-contnet">
                                            <h5>Hashir Shah</h5> 
                                            <span class="mail-desc">hashishah00@gmail.com</span> 
                                            <span class="time">+923119219602</span> </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="#">
                                        <div class="user-img">  
                                            <span class="round">S</span> 
                                        </div>
                                        <div class="mail-contnet">
                                            <h5>Shahzad-ul-Hassan</h5> 
                                            <span class="mail-desc">mshahzadulhassan00@gmail.com</span> 
                                            <span class="time">+923119219602</span> </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="#">
                                        <div class="user-img">  
                                            <span class="round">A</span> 
                                            
                                        </div>
                                        <div class="mail-contnet">
                                            <h5>M. Arif Khan</h5> 
                                            <span class="mail-desc">arifkhan00@gmail.com</span> 
                                            <span class="time">+923119219602</span> </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="#">
                                        <div class="user-img">  
                                            <span class="round">A</span> 
                                            
                                        </div>
                                        <div class="mail-contnet">
                                            <h5>M. Arif Khan</h5> 
                                            <span class="mail-desc">arifkhan00@gmail.com</span> 
                                            <span class="time">+923119219602</span> </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="#">
                                        <div class="user-img">  
                                            <span class="round">A</span> 
                                            
                                        </div>
                                        <div class="mail-contnet">
                                            <h5>M. Arif Khan</h5> 
                                            <span class="mail-desc">arifkhan00@gmail.com</span> 
                                            <span class="time">+923119219602</span> </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="#">
                                        <div class="user-img">  
                                            <span class="round">A</span> 
                                            
                                        </div>
                                        <div class="mail-contnet">
                                            <h5>M. Arif Khan</h5> 
                                            <span class="mail-desc">arifkhan00@gmail.com</span> 
                                            <span class="time">+923119219602</span> </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="#">
                                        <div class="user-img">  
                                            <span class="round">A</span> 
                                            
                                        </div>
                                        <div class="mail-contnet">
                                            <h5>M. Arif Khan</h5> 
                                            <span class="mail-desc">arifkhan00@gmail.com</span> 
                                            <span class="time">+923119219602</span> </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- Column -->
                    
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End Page Content-->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card" style="padding-left: 0px !important; padding-right: 0px !important;">
                            <div class="card-body" style="">
                            <h4 class="card-title">User Contacts</h4>
                            <table class="tablesaw table-striped table-hover table-bordered table" data-tablesaw-mode="columntoggle">
                                    <thead>
                                        <tr>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Name</th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="3">Topup Amount</th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Transaction ID</th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                <abbr title="User uploaded image as proof of payment.">Check Proof</abbr>
                                            </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="title"><a href="javascript:void(0)">Avatar</a></td>
                                            <td>$2.7B</td>
                                            <td># 2001231323</td>
                                            <td><a href="#">click here</a></td>
                                            
                                        </tr>
                                        <tr>
                                            <td class="title"><a href="javascript:void(0)">Titanic</a></td>
                                            <td>2</td>
                                            <td>1997</td>
                                            <td><a href="#">click here</a></td>
                                            
                                        </tr>
                                        <tr>
                                            <td class="title"><a href="javascript:void(0)">The Avengers</a></td>
                                            <td>3</td>
                                            <td>2012</td>
                                            <td><a href="#">click here</a></td>
                                            
                                        </tr>
                                        <tr>
                                            <td class="title"><a href="javascript:void(0)">Harry Potter and the Deathly Hallows—Part 2</a></td>
                                            <td>4</td>
                                            <td>2011</td>
                                            <td><a href="#">click here</a></td>
                                           
                                        </tr>
                                        <tr>
                                            <td class="title"><a href="javascript:void(0)">Frozen</a></td>
                                            <td>5</td>
                                            <td>2013</td>
                                            <td><a href="#">click here</a></td>
                                            
                                        </tr>
                                        <tr>
                                            <td class="title"><a href="javascript:void(0)">Iron Man 3</a></td>
                                            <td>6</td>
                                            <td>2013</td>
                                            <td><a href="#">click here</a></td>
                                            
                                        </tr>
                                        <tr>
                                            <td class="title"><a href="javascript:void(0)">Transformers: Dark of the Moon</a></td>
                                            <td>7</td>
                                            <td>2011</td>
                                            <td><a href="#">click here</a></td>
                                            
                                        </tr>
                                        <tr>
                                            <td class="title"><a href="javascript:void(0)">The Lord of the Rings: The Return of the King</a></td>
                                            <td>8</td>
                                            <td>2003</td>
                                            <td><a href="#">click here</a></td>
                                            
                                        </tr>
                                        <tr>
                                            <td class="title"><a href="javascript:void(0)">Skyfall</a></td>
                                            <td>9</td>
                                            <td>2012</td>
                                            <td><a href="#">click here</a></td>
                                            
                                        </tr>
                                        <tr>
                                            <td class="title"><a href="javascript:void(0)">Transformers: Age of Extinction</a></td>
                                            <td>10</td>
                                            <td>2014</td>
                                            <td><a href="#">click here</a></td>
                                           
                                        </tr>
                                    </tbody>
                                </table>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer" style="padding-left: 3%; padding-right: 3%;">
                XHSIOW's Ecommerce Site &copy; 2020. <span style="float: right; ">Designed & Developed by <a target="_blank" href="https://fiverr.com/hashi_shah" style="color: #f66c43;">Hashir Shah</a></span>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--stickey kit -->
    <script src="assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="assets/plugins/d3/d3.min.js"></script>
    <script src="assets/plugins/c3-master/c3.min.js"></script>
    <!-- Vector map JavaScript -->
    <script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js"></script>
    <script src="js/dashboard2.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

        <!-- jQuery peity -->
    <script src="assets/plugins/tablesaw-master/dist/tablesaw.js"></script>
    <script src="assets/plugins/tablesaw-master/dist/tablesaw-init.js"></script>
</body>

</html>