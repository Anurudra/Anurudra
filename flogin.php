<?php
require 'connect.php';
session_start();
$_SESSION['username']=$_POST['username'];
$_SESSION['password']=$_POST['password'];
if(isset($_SESSION['username'])&&isset($_SESSION['password']))
{ 
$username=$_SESSION['username'];
$password=$_SESSION['password'];
$querynew ="SELECT `fid`,`fname`,`fpassword` FROM `facultyinfo` WHERE `fid`='$username' ";
$checknew=mysqli_query($con,$querynew);
$execute=mysqli_fetch_assoc($checknew);

$_SESSION['fname']=$execute['fname'];
$_SESSION['fid']=$execute['fid'];

if(!empty($username)&& !empty($password))
{
//echo $username;
$query ="SELECT `fid`,`fname`,`fpassword` FROM `facultyinfo` WHERE `fid`='$username' ";
if($check=mysqli_query($con,$query))
{ 

while($query_execute=mysqli_fetch_assoc($check))
{
if ($query_execute['fpassword']==$password && $query_execute['fid']==$username )
{

//echo 'WELCOME:'.$query_execute['name'].'<br><a href="mailslogin.php?id='.$query_execute['name'].'"></a>';
session_start();
  $_SESSION[$query_execute['fname']];
  
header("Location:tlogin.php");
exit();
}
else if($query_execute['fpassword']!=$password && $query_execute['fid']==$username )
{
echo "<script type='text/javascript'>alert('Password Incorrect!!!')</script>";
header('Refresh: 0; URL=faculty.html');
}
else if($query_execute['fpassword']==$password && $query_execute['fid']!=$username )
{
echo "<script type='text/javascript'>alert('Username Incorrect!!!! ')</script>";
header('Refresh: 0; URL=faculty.html');
}
else if(empty(($query_execute['fpassword'])))
{
echo "<script type='text/javascript'>alert('NO DATA FOUND!!!')</script>";
header('Refresh: 0; URL=faculty.html');
}

}

}
else{echo "<script type='text/javascript'>alert('Not Logged IN')</script>";
header('Refresh: 0; URL=faculty.html');}
}


}


?>


