<?php
 include_once 'connect.php';
$roll=$_POST['roll'];
$name=$_POST['name'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$dob=$_POST['dob'];

$branch=$_POST['branch'];
$sem=$_POST['sem'];
$sql="INSERT INTO `studentinfo`(`roll`, `name`, `contact`, `email`, `dob`, `branch`, `sem`) VALUES ('$roll','$name','$contact','$email','$dob','$branch','$sem')";



if($check=mysqli_query($con,$sql))
{ 
  
  echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
  header('Refresh: 1; URL=adminmain.php');
  //header("location:adminmain.php");
  }
  
else
 {
 echo "<script type='text/javascript'>alert('failed!')</script>";
 
 }


 
 



?>