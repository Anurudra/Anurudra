<?php

if(isset($_POST['submit']))
{
 include_once 'connect.php';
$name=mysqli_real_escape_string($con,$_POST['name']);
$dob=$_POST['dob'];
$email=mysqli_real_escape_string($con,$_POST['email']);
$contact=$_POST['name'];
$password=mysqli_real_escape_string($con,$_POST['password']);

$sql="ISNERT INTO `studentinfo`(`roll`, `name`, `contact`, `email`, `dob`, `password`) VALUES(`$name`,`$contact`,`$email`,`$dob`,`$password`)";
$result= mysqli_query($con,$sql);
header("location:newuser.html?signup=success");
exit();


 
 }
else {
header("location: newuser.html");
exit();
}





?>