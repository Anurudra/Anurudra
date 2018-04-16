<?php
 include_once 'connect.php';
 session_start();
$aid=$_SESSION['aid'];
$password=$_POST['apassword'];

$sql="UPDATE `admininfo` SET `apassword`='$password' WHERE aid='$aid'";


//header("location:newuser.html?signup=success");
//exit();
if($check=mysqli_query($con,$sql))
{ 
  
  echo 'YOUR PASSWORD UPDATED SUCCESSFULLY';
  
  }
  
else
 {
 echo "NOT UPDATED";
 }


 
 



?>