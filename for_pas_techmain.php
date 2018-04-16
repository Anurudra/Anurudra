<?php
 include_once 'connect.php';
$fid=$_POST['fid'];
$password=$_POST['fpassword'];
$ans=$_POST['fans'];

$sql="UPDATE `facultyinfo` SET `fpassword`='$password' WHERE fid='$fid' AND fans='$ans' ";


//header("location:newuser.html?signup=success");
//exit();
if($check=mysqli_query($con,$sql))
{ 
  
 echo "<script type='text/javascript'>alert('Paswword Updated Successfully!!!')</script>";
  header('Refresh: 0; URL=faculty.html');
  
  }
  
else
 {
echo "<script type='text/javascript'>alert('Updation FAILED!!!')</script>";
  header('Refresh: 15; URL=for_pas_tech.php');
 }


 
 



?>