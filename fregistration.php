<?php
 include_once 'connect.php';
$fid=$_POST['fid'];
$password=$_POST['fpassword'];
$ques=$_POST['fques'];
$ans=$_POST['fans'];
$sql="UPDATE `facultyinfo` SET `fpassword`='$password',`fques`='$ques',`fans`='$ans' WHERE fid='$fid'";


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