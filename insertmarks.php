<?php
require 'connect.php';
session_start();
$roll=$_SESSION['sroll'];
if($_POST['add_marks'] ==1)
{	$query="SELECT `subcode` FROM `studentinfo`,`subject` WHERE studentinfo.roll='$roll' AND studentinfo.sem=subject.sem";
	if($check=mysqli_query($con,$query))
{		$list=array();


$bots = array($_POST['bot1'],$_POST['bot2'],$_POST['bot3'],$_POST['bot4'],$_POST['bot5']);
$final=array();
			$i=0;
		while($list=mysqli_fetch_assoc($check))
		{  //echo $list['subcode'];
		$final[$i]=$list['subcode'];
		$i++;
}

		
		
		
		$k=0;
	$count=count($final);
	for($j=0;$j<$count;$j++)
	{
		$sql="INSERT INTO `marks`(`roll`, `subcode`, `marks`) VALUES ($roll,$final[$j],$bots[$j])";
		$complete=mysqli_query($con,$sql);
		$k++;
		}
		
		if($k!==0)
		{
	echo "<script type='text/javascript'>alert('Submitted Successfully!!!')</script>";
header('Refresh: 0; URL=submitmarks.php');
	
	}
	
		else {echo "<script type='text/javascript'>alert('Submitted FAILED!!!')</script>";
	header('Refresh: 0; URL=example.php');
	}
	
	}
	

	
	
	}
    



?>