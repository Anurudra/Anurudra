<?php
 include_once 'connect.php';
$roll=$_POST['roll'];
$password=$_POST['password'];
$ques=$_POST['ques'];
$ans=$_POST['ans'];
$sql="UPDATE `studentinfo` SET `password`='$password',`ques`='$ques',`ans`='$ans' WHERE roll='$roll'";


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