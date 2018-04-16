<?php
 include_once 'connect.php';
$fid=$_POST['fid'];
$fname=$_POST['fname'];
$fcontact=$_POST['fcontact'];
$femail=$_POST['femail'];
$fdob=$_POST['fdob'];

$fbranch=$_POST['fbranch'];

$sql="INSERT INTO `facultyinfo`(`fid`, `fname`, `fcontact`, `femail`, `fdob`, `fbranch`) VALUES ('$fid','$fname','$fcontact','$femail','$fdob','$fbranch')";



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