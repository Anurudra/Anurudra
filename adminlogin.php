<?php
require 'connect.php';
session_start();
$_SESSION['ausername']=$_POST['username'];
$_SESSION['apassword']=$_POST['password'];
if(isset($_SESSION['ausername'])&&isset($_SESSION['apassword']))
{ 
$username=$_SESSION['ausername'];
$password=$_SESSION['apassword'];


if(!empty($username)&& !empty($password))
{
//echo $username;
$query ="SELECT `aid`,`aname`,`apassword` FROM `admininfo` WHERE `aid`='$username' ";
if($check=mysqli_query($con,$query))
{ 

$query_execute=mysqli_fetch_assoc($check);

$_SESSION['aname']=$query_execute['aname'];
$_SESSION['aid']=$query_execute['aid'];

if ($query_execute['apassword']==$password && $query_execute['aid']==$username )
{

//echo 'WELCOME:'.$query_execute['name'].'<br><a href="mailslogin.php?id='.$query_execute['name'].'"></a>';

  
header("Location:adminmain.php");
exit();
}
else if($query_execute['apassword']!=$password && $query_execute['aid']==$username )
{
echo "<script type='text/javascript'>alert('Password Incorrect!!!')</script>";
header('Refresh: 0; URL=adminlogin.html');
}
else if($query_execute['apassword']==$password && $query_execute['aid']!=$username )
{
echo "<script type='text/javascript'>alert('Username Incorrect!!!! ')</script>";
header('Refresh: 0; URL=adminlogin.html');
}
else if(empty(($query_execute['apassword'])))
{
echo "<script type='text/javascript'>alert('NO DATA FOUND!!!')</script>";
header('Refresh: 0; URL=adminlogin.html');
}



}
else{echo "<script type='text/javascript'>alert('Not Logged IN')</script>";}
header('Refresh: 0; URL=adminlogin.html');
}


}


?>


