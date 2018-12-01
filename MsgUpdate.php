<?php
session_start();
$user_check = $_SESSION['login_user']; 
include 'Configuration.php';
$user=$user_check;
$sql = "Update Messages set Status='Yes' where User='$user_check'";
    $res=mysqli_query($conn,$sql);
    if($res)
        {
        header("Location:UserProfile.php"); 
        }
 else {
     header("Location:index.html"); 
 }
    
?>
