<?php
 include_once 'connect.php';
 session_start();
$roll=$_SESSION['roll'];
$name=$_POST['name'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$dob=$_POST['dob'];

$branch=$_POST['branch'];
$sem=$_POST['sem'];

$sql="UPDATE `studentinfo` SET `name`='$name',`contact`='$contact',`email`='$email',`dob`='$dob',`branch`='$branch',`sem`='$sem' WHERE `roll`='$roll'";



if($check=mysqli_query($con,$sql))
{ 
  
  echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
  header('Refresh: 1; URL=adminmain.php');
  //header("location:adminmain.php");
  }
  
else
 {
 echo "NOT DONE<script type='text/javascript'>alert('failed!')</script>";
 
 }


 
 



?>