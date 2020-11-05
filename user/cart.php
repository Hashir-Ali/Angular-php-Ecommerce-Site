
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
    <!--This page css - Morris CSS -->
    <link href="assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <!-- Vector CSS -->
    <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
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
                        
                        <div style="display: inline-block; margin-top: 1.5%; margin-left: 10%; float: right; width: 100%;"> 
                            <h3 class="" style="display: inline-block; font-weight: 700; color: black;">Search Products</h3>
                            <form class="" style="float: right;">
                              <div class="form-group mx-sm-3 mb-2" style="float: left; margin-right: 0px !important;">
                                <label for="inputPassword2" class="sr-only">Click here to Search Products</label>
                                <input type="search" class="form-control" id="inputPassword2" placeholder="Search Here..." style="border-radius: none !important; height: 56px; width: 45vw;">
                              </div>
                              <button type="submit" class="btn btn-lg btn-primary mb-2" style="border-radius: 0px 4px 4px 0px; background:#f66c43; border-color:#f66c43;">Search</button>
                            </form>
                        </div>
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                   <div class="row">
                    <div class="col-md-12">
                        <div class="card card-body printableArea">
                            <h3><b>User Cart: </b> <span class="pull-right"></span></h3>
                            <hr>
                            <div class="row">
                                
                                <div class="col-md-12">
                                    <p class="m-t-30 pull-right"><b>Date :</b> <i class="fa fa-calendar"></i> 23rd Jan 2020</p><br><br>
                                    <div class="table-responsive m-t-40" style="clear: both;">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Description</th>
                                                    <th class="text-right">Quantity</th>
                                                    <th class="text-right">Unit Cost</th>
                                                    <th class="text-right">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>Milk Powder</td>
                                                    <td class="text-right">
                                                        <input type="number" name="product_qty" value="5" style="width: 14%;">
                                                    </td>
                                                    <td class="text-right"> $24 </td>
                                                    <td class="text-right"> $48 </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td>Air Conditioner</td>
                                                    <td class="text-right"> <input type="number" name="product_qty" style="width: 14%;" value="1"></td>
                                                    <td class="text-right"> $500 </td>
                                                    <td class="text-right"> $1500 </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">3</td>
                                                    <td>RC Cars</td>
                                                    <td class="text-right"><input type="number" name="product_qty" value="2" style="width: 14%;" > </td>
                                                    <td class="text-right"> %600 </td>
                                                    <td class="text-right"> $12000 </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">4</td>
                                                    <td>Down Coat</td>
                                                    <td class="text-right"> <input type="number" name="product_qty" value="10" style="width: 14%;"> </td>
                                                    <td class="text-right">$5 </td>
                                                    <td class="text-right"> $300 </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="pull-right m-t-30 text-right">
                                        <p>Sub - Total amount: $13,848</p>
                                        <p>Fee/Tax (10%) : $138 </p>
                                        <hr>
                                        <h3><b>Total :</b> $13,986</h3>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="text-right">
                                        <button class="btn btn-danger" type="submit"> Proceed to payment </button>
                                        <button id="print" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Page Content-->
                <!-- ============================================================== -->
                
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
</body>

</html>