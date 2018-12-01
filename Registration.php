<?php
include './Configuration.php';
if(isset($_POST['BtnSubmit']))
{
$name=$_POST['TxtName'];
$dob=$_POST['TxtDob'];
$email=$_POST['TxtEmail'];
$phone=$_POST['TxtPhone'];
$gender=$_POST['RbGender'];
$address=$_POST['TxtAddress'];
$education=$_POST['DDEduaction'];
$score=$_POST['TxtScore'];
$username=$_POST['TxtUsername'];
$password=$_POST['TxtPass'];
$sql = "INSERT INTO UserReg (Name,Dob,Email,Phone,Gender,Address,Education,Score,UserName,Password) VALUES('$name','$dob','$email','$phone','$gender','$address','$education','$score','$username','$password')";
$sqlLog = "INSERT INTO Login (UserName,Password,Status) VALUES('$username','$password','Yes')";
       
$res=mysqli_query($conn,$sql);
$resL=mysqli_query($conn,$sqlLog);
if($res and $resL){
          echo"<script type=text/javascript>alert('Sucessfully Registered')</script>";  }
 else { 
          echo"<script type=text/javascript>alert('Unable Register!')</script>";}
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8" />
    <title>Regster@Techspot</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320">
    <!--srart theme style -->
    <link href="Contents2/css/main.css" rel="stylesheet" type="text/css" />
    <!-- end theme style -->
    <!-- favicon links -->
     <link rel="shortcut icon" type="image/png" href="Contents2/images/favicon.png" />
</head>

<body style="font-family: Calibri ">
    <script type="text/javascript">
    function check()
    {
   
    a=document.getElementById("t1").value;
    b=document.getElementById("t2").value;  
    if(a===b)
    {
     
    }
    else
    {
        alert("Password Missmatching!");
    }
    }
    </script>
   
    <div class="mj_header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="mj_logo">
                        <h4>TechSpot.com </h4>
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
                            <li><a href="index.html">home</a>
                            </li>
                            <li><a href="Login.php">Login</a>                                
                            </li>
                            <li><a href="contact.html">Contact</a>
                            </li>
                            <li class="active"><a href="about.html">About us</a>
                            </li>
                            
                        </ul>                       
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <!--REGISTRATION FORM--->
    
    <div class="mj_lightgraytbg mj_toppadder80 mj_bottompadder80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-0 col-xs-offset-0">
                    <div class="mj_mainheading mj_toppadder50 mj_bottompadder50">
                        <h1>R<span>egister</span> N<span>ow</span></h1>
                        <p class="mj_bottompadder20">You can sign up with as <strong class="mj_black_text">techSpot</strong>
                        </p>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mj_postdiv mj_shadow_blue mj_postpage mj_toppadder50 mj_bottompadder50">
                        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1">
                            <form method="POST" action="Registration.php">
                                <h3>Personal Details</h3><br>
                                <div class="form-group">
                                    <label>Your Name</label>
                                    <input type="text" class="form-control" placeholder="full Name" name="TxtName">
                                </div>
                                <div class="form-group">
                                    <label>DOB</label>  
                                    <!--<input class="form-control hasDatepicker" id="datepicker" type="text" placeholder="dd/" name="TxtDob">
                                   --> <input type="date" class="form-control" placeholder="dd/mm/yyyy" name="TxtDob">
                                </div>
                                <div class="form-group">
                                    <label>Your Email Address</label>
                                    <input type="email" class="form-control" placeholder="Email Id" name="TxtEmail">
                                </div>
                                <div class="form-group">
                                    <label>Phone No:</label>
                                    <input type="tel" class="form-control" placeholder="Mobile No:" name="TxtPhone">
                                </div>
                                <div class="form-group">
                                    <label>Gender</label>
                                    <input type="radio" name="RbGender" value="Male" checked="checked" />Male
                                    <input type="radio" name="RbGender" value="Female" />Female
                                    <input type="radio" name="RbGender" value="Others" />Others
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea name="TxtAddress" class="form-control" rows="4" cols="50"></textarea>
                                </div>    
                                
                                <br><br>
                               
                                <h3>Educational Details</h3><br>
                                
                                <div class="form-group">
                                    <label>Highest qualification</label>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="mj_education">
                                                <select class="form-control" name="DDEduaction">
                                                    <option>Select qualification</option>
                                                    <option>MCA</option>
                                                    <option>MBA</option>
                                                    <option>MSC</option>
                                                    <option>BCA</option>
                                                    <option>BBA</option>
                                                    <option>BSC</option>
                                                    <option>BA</option>
                                                    <option>others...</option>
                                                    
                                                    <option>others</option>
                                                </select>
                                                <input type="text" class="form-control" placeholder="Percentage/CGPA)" name="TxtScore">
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                                <br>
                                <h3><u>Login Details</u></h3><br>
                                <div class="form-group">
                                    <label>UserName</label>
                                    <input type="text" class="form-control" placeholder="UserName" name="TxtUsername">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>                                    
                                    <input type="password" class="form-control" placeholder="password"  id="t1" name="TxtPass"  >
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control" placeholder="confirm password" id="t2" name="TxtCpass" onchange="check()">
                                </div>
                                <br>
                                 
                        </div>
                    </div> 
                    <div class="mj_showmore ">  <input type="submit" value="Submit" name="BtnSubmit" class="mj_showmorebtn mj_bigbtn mj_bluebtn />
                      </form>  
                    </div>
                </div>
            </div>
        </div>
    </div>    
    
    <!-----END REGISTRAION----->
    
    </div>

    <!-- Script Start -->
    <script src="Contents2/js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="Contents2/js/bootstrap.js" type="text/javascript"></script>
    <script src="Contents2/js/modernizr.custom.js" type="text/javascript"></script>
    <script type="text/javascript" src="Contents2/js/plugins/rsslider/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="Contents2/js/plugins/rsslider/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="Contents2/js/plugins/rsslider/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="Contents2/js/plugins/rsslider/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="Contents2/js/plugins/rsslider/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="Contents2/js/plugins/rsslider/revolution.extension.slideanims.min.js"></script>
    <script src="Contents2/js/plugins/countto/jquery.countTo.js" type="text/javascript"></script>
    <script src="Contents2/js/plugins/owl/owl.carousel.js" type="text/javascript"></script>
    <script src="Contents2/js/plugins/bootstrap-slider/bootstrap-slider.js" type="text/javascript"></script>
    <script src="Contents2/js/plugins/fancybox/jquery.fancybox.js" type="text/javascript"></script>
    <script src="Contents2/js/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
    <script src="Contents2/js/jquery.mixitup.js" type="text/javascript"></script>
    <script src="Contents2/js/plugins/jquery-ui/jquery-ui.js"></script>
    <script src="Contents2/js/plugins/isotop/isotope.pkgd.js"></script>
    <script src="Contents2/js/plugins/ckeditor/ckeditor.js"></script>
    <script src="Contents2/js/plugins/ckeditor/adapters/jquery.js"></script>
    <script src="Contents2/js/custom.js" type="text/javascript"></script>
    <!-- Script End -->
</body>
</html>