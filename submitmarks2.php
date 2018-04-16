<?php
require 'connect.php';

$sem=$_POST['sem'];
session_start();
$fid=$_SESSION['fid'];
$s_detail="SELECT `name` FROM `studentinfo`, `facultyinfo` WHERE facultyinfo.fid='$fid' AND studentinfo.sem='$sem' AND studentinfo.branch=facultyinfo.fbranch ";
if($check=mysqli_query($con,$s_detail))
{     


echo '<html>
<head>
 <title>Submit Student Marks</title>
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
             

    </style>

    


</head>
<body>
<div class="heading"><img src="logo.jpg" alt="LOGO" width="150px;" height="150px;" ><strong><h1 style="float:right;">RUSTAMJI INSTITUTE OF TECHNOLOGY</br>(An Institute Of Border Security Force)</h1</strong></div>
        <div class="patti">
	   
        <pre style="margin:0px;">
        
        
        
        </pre>
        </div>
	<div> 
	<form action="example.php" method="post" style="margin-left:15%;margin-top:5%;">
	SELECT Subject :<select name="sname" style="size:80px;">';
	while($list=mysqli_fetch_assoc($check))
		{echo '
					
					<option value="'.$list['name'].'" >'.$list['name'].'</option>';}
			
		
		
		
		echo '<br>
		<br><input type="number" name="sem" value="'.$sem.'" readonly >
		<br>
		<input type="submit" value="Select">';
		
echo '</select></form>

  </div>


</body>
</html>';

		
		
}


?>
