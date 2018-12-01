<?php 
    if (isset($_POST['BtnLogin']))
    {
        include 'Configuration.php';
        //echo $servername;
        session_start();        
        $username =$_POST['TxtUsername'];
        $password =$_POST['TxtPass'];       
        $sql = "SELECT * FROM Login where UserName='$username' AND Password='$password'";		
        $query = mysqli_query($conn, $sql);
        $ress= mysqli_num_rows($query);
        if($ress>0)
        {
        while ($row = mysqli_fetch_array($query))
        {
            $state=$row['Status'];
        }
        
        if($state=='Admin'AND $ress)
        {
          $_SESSION['login_user'] = $username;  
          header("Location:Admin/AdminHome.php");  
        }
        elseif (($ress)) 
        {
          // session_register("username");
            $_SESSION['login_user'] = $username;
            header("Location:UserProfile.php"); 
        } 
        }
        else {
             echo '<center>Invalid UserName OR Password !!</center><br>';
             }
             
    }
?>﻿
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="Contents/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Contents/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Contents/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Contents/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Contents/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Contents/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Contents/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Contents/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Contents/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Contents/css/util.css">
	<link rel="stylesheet" type="text/css" href="Contents/css/main.css">
<!--===============================================================================================-->
</head>
<body>	
	
	<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
                    <form method="POST" action="Login.php" class="login100-form validate-form">
				<span class="login100-form-title p-b-37">
					Sign In
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
					<input class="input100" type="text" name="TxtUsername" placeholder="username or email">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="TxtPass" placeholder="password">
					<span class="focus-input100"></span>
				</div>
                                <br><br>
				<div class="container-login100-form-btn">
                                    <input type="submit" value="Sign In" name="BtnLogin" class="login100-form-btn">
				
				</div>

			<div class="text-center p-t-57 p-b-20">
					<a href="Registration.php">
						<u><b>New User</b></u>
					</a>
				</div>
			</form>			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="Contents/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Contents/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="Contents/vendor/bootstrap/js/popper.js"></script>
	<script src="Contents/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Contents/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Contents/vendor/daterangepicker/moment.min.js"></script>
	<script src="Contents/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="Contents/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="Contents/js/main.js"></script>

</body>
</html>