<?php
require 'connect.php';
session_start();
$roll=$_SESSION['roll'];
$sql="SELECT * FROM `marks`, `studentinfo`,`subject` WHERE studentinfo.roll='$roll' AND studentinfo.roll=marks.roll AND marks.subcode=subject.subcode AND studentinfo.sem=subject.sem";
//$sqlnew="SELECT * FROM `studentinfo`, `subject` WHERE studentinfo.name='$name' AND subject.sem='$sem'";
if($check=mysqli_query($con,$sql))
{ //$checknew=mysqli_query($con,$sqlnew);
//$submitnew=mysqli_fetch_assoc($checknew);

echo '<html>
<head>
 <title>Student details RJIT</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">

    
    <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1, user-scalable=no">
   
    <style>
        /* following two viewport lines are equivalent to meta viewport statement above, and is needed for Windows */
        /* see http://www.quirksmode.org/blog/archives/2014/05/html5_dev_conf.html and http://dev.w3.org/csswg/css-device-adapt/ */
        @-ms-viewport { width: 100vw ; min-zoom: 100% ; zoom: 100% ; }          @viewport { width: 100vw ; min-zoom: 100% zoom: 100% ; }
        @-ms-viewport { user-zoom: fixed ; min-zoom: 100% ; }                   @viewport { user-zoom: fixed ; min-zoom: 100% ; }
        /*@-ms-viewport { user-zoom: zoom ; min-zoom: 100% ; max-zoom: 200% ; }   @viewport { user-zoom: zoom ; min-zoom: 100% ; max-zoom: 200% ; }*/
        body{
            
     font-family:Arial;
	font-size:12px;
	color:blue;
	background-color:rgb(230,230,230);
	line-height: 1.166;	
	margin: 0px;
	padding: 0px;
	
	/*background-image:url(../images/dept_bg.jpg);*/
	}
	 input[type=submit]
        {
            
    background-color:rgb(0,0,130);
    border:1px solid rgb(0,100,250) ;
    color: white;
    padding: 5px 10px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
            border-radius: 10px;

        }
		.heading{
	background-color:rgb(50,80,80);
	color:gold; 
	width:100%; 
	height:150px;
	
	
	}
	.patti{background-color:rgb(45,60,60);
	margin:0px}
      .neeche{
	  background-color:rgb(50,80,80); 
	  width::100%;
	  height:200px;
	  border-top:1px solid black;
	  }  
             
	table{
	border:2px solid black;
	padding:2px;
	margin:1px;
	background-color:rgb(245,245,245);
	}
	th,td {
	border:1px solid black;
	padding:2px;
	margin:1px;
}
    </style>

    


</head>
<body>
<div class="heading"><img src="logo.jpg" alt="LOGO" width="150px;" height="150px;" ><strong><h1 style="float:right;">RUSTAMJI INSTITUTE OF TECHNOLOGY</br>(An Institute Of Border Security Force)</h1</strong></div>
        <div class="patti">
	   
        <pre style="margin:0px;">
        
        
        
        </pre>
        </div>';

		 echo '
	<div style="margin:0px">  
	<div style="float:right;margin-right:10%;"><form action="mainslogin.php" method="post"><input type="submit" value="Back"></form></div>
	<table style="margin-left:30px">
	<tr style="font-size: 16px; font-weight: bold; color: rgb(0, 153, 204); background: none repeat scroll 0% 0% aquamarine;"><th>SUBJECT CODE</th><th>SUBJECT NAME</th><th>MARKS</th></tr>';
	
	$k=0;
	while($execute=mysqli_fetch_assoc($check))
{	
	echo '<tr><td>'.$execute['subcode'].'</td><br>
	<td>'.$execute['subname'].'</td>
<td>'.$execute['marks'].'</td></tr>';	
$k++;
	}
	if($k==0)
	{
	echo "<script type='text/javascript'>alert('NO DATA FOUND!!!')</script>";
  header('Refresh: 1; URL=mainslogin.php');
	
	}
	}
	
	
	

	
	
	
	
	
	echo '</table>
	

  </div>


</body>
</html>';













?>