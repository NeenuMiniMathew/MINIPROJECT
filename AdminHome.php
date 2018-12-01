
<?php
include '../Configuration.php';

            //-----------POST JOB
if(isset($_POST['BtnSubmit']))
{
    $Org=$_POST['TxtDesig'];
    $Desig=$_POST['TxtLocation'];
    $Loc=$_POST['TxtSeats'];
    $Qual=$_POST['TxtQuali'];
    $Sal=$_POST['TxtSal'];
    
    $sql = "INSERT INTO Jobs (Designation,Place,Number,Qualification,Salary,status) VALUES('$Org','$Desig','$Loc','$Qual','$Sal','No')";
    $res=mysqli_query($conn,$sql);
    if($res)
        {
          echo"<script type=text/javascript>alert('Sucessfully Posted')</script>";
          
        }
    else { 
          echo"<script type=text/javascript>alert('Unable Post!')</script>";
         }
}   
                 //-----------END POST JOB

                 //-----------ADD TEST

if(isset($_POST['BtnAddQues']))
{
    $Question=$_POST['TxtQuestion'];
    $Op1=$_POST['TxtOp1'];
    $Op2=$_POST['TxtOp2'];
    $Op3=$_POST['TxtOp3'];
    $Op4=$_POST['TxtOp4'];
    $sqlQ = "INSERT INTO Tests (Question,Option1,Option2,Option3,Option4) VALUES('$Question','$Op1','$Op2','$Op3','$Op4')";
    $resQ=mysqli_query($conn,$sqlQ);
    if($resQ)
        {
          echo"<script type=text/javascript>alert('Sucessfully Added')</script>";
          
        }
    else { 
          echo"<script type=text/javascript>alert('Unable Add!')</script>";
         }
}               
                             //----------- END ADD TEST
?>



<!DOCTYPE html>
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
                            <li><a href="#postJob">Post a Job</a>
                            </li>
                            <li><a href="#AddTest">Add Test</a>
                            </li>
                            <li class="active"><a href="../Contents2/#">Post a Resume</a>
                                <ul class="sub_menu">
                                    <li><a href="../Contents2/post_resume.html">Post a Resume</a>
                                    </li>
                                    <li><a href="../Contents2/resume_preview.html">Resume Preview</a>
                                    </li>
                                    <li><a href="../Contents2/choose_package.html">choose package</a>
                                    </li>
                                    <li><a href="../Contents2/cart.html">Cart Page</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="ViewAll.php">Candidates</a>
                                
                            </li>
                            <li><a class="mj_notification" href="Notifications.php"><i class="fa fa-bell"></i><sup>2</sup></a>
                            </li>
                            <li><a href="../index.html">Log Out</a>
                            </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
                        <!---POST JOB-->
    
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mj_bottompadder50" id="postJob">
                    <center><h3>Post A Job</h3></center><br>
                    <div class="woo-cart-table mj_carttable">
                        
                        <form action="AdminHome.php" method="POST">
                        
                        <table class="table">
                            <tr>
                                <th>Designation</th>
                                <th>Location</th>
                                <th>Vaccancy</th>
                                <th>Qualification</th>
                            </tr>
                            <tr>
                               
                                <td>
                                    <input type="text" name="TxtDesig" class="form-control" placeholder="Hiring Desigation" />
                                </td>
                                <td>
                                    <input type="text" name="TxtLocation" class="form-control" placeholder="Location" />
                                </td>
                                <td> 
                                    <input type="text" name="TxtSeats" class="form-control" placeholder="Vaccencies" />
                                </td>
                                <td> 
                                    <input type="text" name="TxtQuali" class="form-control" placeholder="Qualification" />
                                </td>
                                 <td> 
                                    <input type="text" name="TxtSal" class="form-control" placeholder="Salary" />
                                </td>
                            </tr>
                           
                        </table>
               
                        <div class="mj_offerdiv">
                          <!--  <div class="woo_product-code">
                                <form class="form-inline">
                                    <div class="form-group">
                                        <input type="text" name="code" class="form-control" value="" placeholder="Coupon Code...">
                                    </div>
                                    <button class="mj_apply_coupenbtn">Apply Coupon</button>
                                </form>
                            </div>-->
                            <div class="mj_updatecart">
                                <input type="submit" value="Post Job" name="BtnSubmit" class="mj_mainbtn mj_btnyellow" />
                            </div>
                        </div>
                        </form>
                    </div>                    
                </div>
                        
                        
                        
                        
                        <!----NEW TEST----->
                        <br><br><br><br><br><br><br>  
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mj_bottompadder50" id="AddTest">
                    <center><h3>New Test</h3></center><br>
                    <div class="woo-cart-table mj_carttable">
                        
                        <form name="test" action="AdminHome.php" method="POST">
                        
                            <table id="Question" class="table">
                            <tr>
                                <th>Question</th>
                                <th>Option 1</th>
                                <th>Option 2</th>
                                <th>Option 3</th>
                                <th>Option 4</th>
                            </tr>
                            <tr>                               
                                <td colspan="5">
                                    <input type="text" name="TxtQuestion" class="form-control" placeholder="New Question" />
                                </td>                              
                                    
                            </tr>
                            <tr>
                                <td >
                                    <input type="text" name="TxtOp1" class="form-control" placeholder="option-1" />
                                </td> 
                                <td>
                                    <input type="text" name="TxtOp2" class="form-control" placeholder="option-2" />
                                </td> 
                                <td>
                                    <input type="text" name="TxtOp3" class="form-control" placeholder="option-3" />
                                </td> 
                                <td>
                                    <input type="text" name="TxtOp4" class="form-control" placeholder="option-4" />
                                </td> 
                            </tr>
                           
                        </table>
               
                        <div class="mj_offerdiv">
                            <div class="mj_updatecart">
                                <input type="submit" value="Add Question" name="BtnAddQues" class="mj_mainbtn mj_btnyellow" />
                            </div>
                        </div>
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
                        <p>&copy; techSpot@2018 <a href="../Contents2/#"><span class="mj_yellow_text">jobs</span></a> Inc.
                        </p>
                        <span class="glyphicon glyphicon-option-horizontal" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="totop">
                    <div class="gototop">
                        <a href="../Contents2/#">
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