<?php
session_start();
$user_check = $_SESSION['login_user']; 
include 'Configuration.php';

$msg='Congrats...'. $user_check.'You are successfully cleared the Exam';

$user=$user_check;
$sql = "INSERT INTO Messages (Message,User,Status) VALUES('$msg','$user','No')";
    $res=mysqli_query($conn,$sql);
    if($res)
        {
        header("Location:UserProfile.php"); 
        }
 else {
     header("Location:index.html"); 
 }
    
?>
