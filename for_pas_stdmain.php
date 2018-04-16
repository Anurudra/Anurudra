<?php
 include_once 'connect.php';
$roll=$_POST['roll'];
$password=$_POST['password'];
$ans=$_POST['ans'];

$sql="UPDATE `studentinfo` SET `password`='$password' WHERE roll='$roll' AND ans=$ans ";


//header("location:newuser.html?signup=success");
//exit();
if($check=mysqli_query($con,$sql))
{ 
  
  echo "<script type='text/javascript'>alert('Paswword Updated Successfully!!!')</script>";
  header('Refresh: 0; URL=student.html');
  
  }
  
else
 {
 echo "<script type='text/javascript'>alert('Updation FAILED!!!')</script>";
  header('Refresh: 0; URL=student.html');
 }


 
 



?>