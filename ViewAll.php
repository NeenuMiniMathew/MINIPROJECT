
<?php
include '../Configuration.php';


    $sqlf = "SELECT * FROM UserReg ";		
    $queryf = mysqli_query($conn, $sqlf);

?>

<html lang="en">
    <head>
    <meta charset="utf-8" />
    <title>Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320">
    <!--srart theme style -->
    <link href="../Contents2/css/main.css" rel="stylesheet" type="text/css" />
    <!-- end theme style -->
    <!-- favicon links -->
    <link rel="shortcut icon" type="image/png" href="../Contents2/images/favicon.png" />
</head>

<body class="woocommerce">
    
    <div class="mj_header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="mj_logo">
                        <h5>TechSpot.com</h5>
                        <h3>Welcome Admin</h3>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mj_menu" aria-expanded="false">
                            <span class="sr-only">MENU</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="collapse navbar-collapse mj_navmenu" id="mj_menu">
                        <ul class="nav navbar-nav">
                            <li><a href="AdminHome.php">home</a>
                            </li>
                            <li><a href="LogoutAdmin.php">Log Out</a>
                            </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
                   
                        
                        
                        
                        <!----Message----->
                        <br><br><br><br><br><br><br>  
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mj_bottompadder50" id="AddTest">
                    <center><h3>Registered User</h3></center><br>
                    <div class="woo-cart-table mj_carttable">
                        
                        <form name="test" action="Notifications.php" method="POST">
                        
                            <table id="Question" class="table">
                            <tr>
                            <td>Name</td>
                            <td>Qualification</td>
                            <td>Email</td>
                            </tr>
                            <?php   
                            
                              while ($rows = mysqli_fetch_array($queryf))
                                {                                  
                                  echo '                           
                                
                            <tr>                               
                                <td>
                                    <input type="text" name="TxtMsg" class="form-control" placeholder="Notification" value='.$rows['Name'].'>
                                </td>     
                                <td>
                                    <input type="text" name="TxtMsf" class="form-control" placeholder="Notification" value='.$rows['Education'].'>
                                </td> 
                                <td>
                                    <input type="text" name="TxtMsf" class="form-control" placeholder="Notification" value='.$rows['Email'].'>
                                </td> 
                                    
                            </tr>';
                                        }
                                        ?>
                            
                           
                        </table>
               
                        
                        </form>
                    </div>
                    
                </div>
                        
                        
                        <!---END TEST--->
                        
          
    <div class="mj_footer mj_toppadder80 mj_bottompadder80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-0 col-xs-offset-0">
                 
                    <div class="mj_weight mj_bottompadder20">
                        <div class="mj_sociallink">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-behance"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mj_copyright">
                        <p>&copy; techSpot@2018 <a href="#"><span class="mj_yellow_text">jobs</span></a> Inc.
                        </p>
                        <span class="glyphicon glyphicon-option-horizontal" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="totop">
                    <div class="gototop">
                        <a href="#">
                            <i class="fa fa-angle-up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Script Start -->
    <script src="../Contents2/js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="../Contents2/js/bootstrap.js" type="text/javascript"></script>
    <script src="../Contents2/js/modernizr.custom.js" type="text/javascript"></script>
    <script type="text/javascript" src="../Contents2/js/plugins/rsslider/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="../Contents2/js/plugins/rsslider/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="../Contents2/js/plugins/rsslider/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="../Contents2/js/plugins/rsslider/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="../Contents2/js/plugins/rsslider/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="../Contents2/js/plugins/rsslider/revolution.extension.slideanims.min.js"></script>
    <script src="../Contents2/js/plugins/countto/jquery.countTo.js" type="text/javascript"></script>
    <script src="../Contents2/js/plugins/owl/owl.carousel.js" type="text/javascript"></script>
    <script src="../Contents2/js/plugins/bootstrap-slider/bootstrap-slider.js" type="text/javascript"></script>
    <script src="../Contents2/js/plugins/fancybox/jquery.fancybox.js" type="text/javascript"></script>
    <script src="../Contents2/js/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
    <script src="../Contents2/js/jquery.mixitup.js" type="text/javascript"></script>
    <script src="../Contents2/js/plugins/jquery-ui/jquery-ui.js"></script>
    <script src="../Contents2/js/plugins/isotop/isotope.pkgd.js"></script>
    <script src="../Contents2/js/plugins/ckeditor/ckeditor.js"></script>
    <script src="../Contents2/js/plugins/ckeditor/adapters/jquery.js"></script>
    <script src="../Contents2/js/custom.js" type="text/javascript"></script>
    <!-- Script End -->
</body>
</html>