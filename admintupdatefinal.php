<?php
 include_once 'connect.php';
 session_start();
$fid=$_SESSION['fid'];
$fname=$_POST['fname'];
$fcontact=$_POST['fcontact'];
$femail=$_POST['femail'];
$fdob=$_POST['fdob'];

$fbranch=$_POST['fbranch'];

$sql="UPDATE `facultyinfo` SET `fname`='$fname',`fcontact`='$fcontact',`femail`='$femail',`fdob`='$fdob',`fbranch`='$fbranch' WHERE `fid`='$fid'";



if($check=mysqli_query($con,$sql))
{ 
  
  echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
  header('Refresh: 0; URL=adminmain.php');
  //header("location:adminmain.php");
  }
  
else
 {
 echo "<script type='text/javascript'>alert('failed!')</script>";
 
 }


 
 



?>