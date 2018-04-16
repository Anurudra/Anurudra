<?php
 include_once 'connect.php';
 session_start();
$roll=$_SESSION['roll'];
$password=$_POST['password'];

$sql="UPDATE `studentinfo` SET `password`='$password' WHERE roll='$roll'";


//header("location:newuser.html?signup=success");
//exit();
if($check=mysqli_query($con,$sql))
{ 
  
  echo "<script type='text/javascript'>alert('Update successfully!')</script>";
  header('Refresh: 0; URL=mainslogin.php');
  
  }
  
else
 {
echo "<script type='text/javascript'>alert('failed!')</script>";
 }


 
 



?>