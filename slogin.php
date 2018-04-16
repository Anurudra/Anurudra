<?php
require 'connect.php';


if(isset($_POST['username'])&&isset($_POST['password']))
{
$username=$_POST['username'];
$password=$_POST['password'];
//$querynew ="SELECT `roll`,`name`,`password` FROM `studentinfo` WHERE `roll`='$username' ";
//$checknew=mysqli_query($con,$querynew);
//$execute=mysqli_fetch_assoc($checknew);

//echo 'done';

if(!empty($username)&& !empty($password))
{
//echo $username;
$query ="SELECT `roll`,`name`,`password` FROM `studentinfo` WHERE `roll`='$username' ";
if($check=mysqli_query($con,$query))
{ 

$query_execute=mysqli_fetch_assoc($check);
session_start();
$_SESSION['name']=$query_execute['name'];
$_SESSION['roll']=$query_execute['roll'];
if ($query_execute['password']==$password && $query_execute['roll']==$username )
{
  
header("Location:mainslogin.php");
exit();
}
else if($query_execute['password']!=$password && $query_execute['roll']==$username )
{
echo "<script type='text/javascript'>alert('Password Is Not Correct!')</script>";
  header('Refresh: 0; URL=student.html');
}
else if($query_execute['password']==$password && $query_execute['roll']!=$username )
{
echo "<script type='text/javascript'>alert('Username Is Not Correct!')</script>";
  header('Refresh: 0; URL=student.html');

}
else if(empty($query_execute['password']) && $query_execute['roll']==$username )
{
echo "No data found";

}



}
else{echo "not done";}
}


}


?>


