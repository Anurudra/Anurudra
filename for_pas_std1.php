<?php
require 'connect.php';
$roll=$_POST['roll'];
echo'
<html>
<!--
  * Please see the included README.md file for license terms and conditions.
  -->
<head>
    <title>NEW USER</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">

    <!-- see http://webdesign.tutsplus.com/tutorials/htmlcss-tutorials/quick-tip-dont-forget-the-viewport-meta-tag -->
    <!-- <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1"> -->
    <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1, user-scalable=no">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes, minimum-scale=1, maximum-scale=2"> -->
    <style>
        /* following two viewport lines are equivalent to meta viewport statement above, and is needed for Windows */
        /* see http://www.quirksmode.org/blog/archives/2014/05/html5_dev_conf.html and http://dev.w3.org/csswg/css-device-adapt/ */
        @-ms-viewport { width: 100vw ; min-zoom: 100% ; zoom: 100% ; }          @viewport { width: 100vw ; min-zoom: 100% zoom: 100% ; }
        @-ms-viewport { user-zoom: fixed ; min-zoom: 100% ; }                   @viewport { user-zoom: fixed ; min-zoom: 100% ; }
        /*@-ms-viewport { user-zoom: zoom ; min-zoom: 100% ; max-zoom: 200% ; }   @viewport { user-zoom: zoom ; min-zoom: 100% ; max-zoom: 200% ; }*/
        body{
font-family:Arial;
	font-size:80%;
	color:blue;
	background-color:rgb(230,230,230);
	line-height: 1.166;	
	margin: 0px;
	padding: 0px;
        }
        
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
	
    
}

        li {
    float: left;
        }
li a {
    display: block;
    color: white;
    text-align: center;
    padding: 16px;
    text-decoration: none;
	background:rgb(45,60,60);
}

li a:hover {
    background:rgb(70,80,90);
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
        
    </style>

    <!-- Uncomment the following scripts if you convert your "Standard HTML5" project into a "Cordova" project. -->
    <!-- <script src="cordova.js"></script> -->          <!-- phantom library, needed for Cordova api calls, added during build -->
    <!-- <script src="js/app.js"></script> -->           <!-- recommended location of your JavaScript code relative to other JS files -->
    <!-- <script src="xdk/init-dev.js"></script> -->     <!-- normalizes device and document ready events, see README for details -->
</head>

<body>
    <div class="heading"><img src="logo.jpg" alt="LOGO" width="150px;" height="150px;" ><strong><h1 style="float:right;">RUSTAMJI INSTITUTE OF TECHNOLOGY</br>(An Institute Of Border Security Force)</h1</strong></div>
        <div class="patti">
       
       <ul>
            <li><a href="index.html" >HOME</a></li>
            <li><a href="about.html">ABOUT</a></li>
            <li><a href="department.html">DEPARTMENT</a></li>
            <li><a href="faculty.html">FACULTY & STAFF LOGIN</a></li>
            <li><a href="student.html">STUDENT LOGIN</a></li>
            <li><a href="#">CONTACT US</a></li>
            <li><a href="#">FAQ</a></li>
         </ul></div>
       <form style="margin:20px;" action="for_pas_stdmain.php" method="POST">
        
            <div>
           <p style="margin:10px;">New User Create Password</p>
                <br/>
                <br/>
                <br/>
				
				
				Enter Your Enrollment No : <br/><input type="text" name="roll" value="'.$roll.'" readonly>
				<br/>
                <br/>';
				$s_detail="SELECT `ques`,`ans` FROM `studentinfo` WHERE roll=$roll";
				if($check=mysqli_query($con,$s_detail))
				{	$run=mysqli_fetch_assoc($check);
				echo 'Security Question : <br/> <p><h3>';  echo $run['ques'].'</h3></p>
				<br/>
                <br/>
				Enter Your Answer      : <br/>   <input type="text" name="ans" >
				<br/>
                <br/>
                Enter your NEW Password      : <br/>   <input type="password" name="password" required>
                <br/>
                <br/>
                
                <input type="submit" name="submit">
                
                <br/><br/>'; }
           echo '</div>
        
        
        
        
        
        
        
        
        
        </form>
         <div class="neeche">
        <pre style="color:white; font-size:14px; font-family:verdana; text-align:center;">
                        
        This is the Institute Service Portal of RJIT, Tekanpur, developed with an objective to enable a single window access to 
                             information and services being provided by the various sections of Institute.
        This portal is part of Institution e-Governance initiative. The site is running on Beta Version This portal is managed by   
                                        Centre for Research and Industrial Staff Performance ( CRISP ), Bhopal.
            </pre>
        
        <nav>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a href="#"style="color:gold;">Terms & Conditions</a>||    
            <a href="#" style="color:gold;"> Privacy Policy</a>||     
            <a href="#"style="color:gold;"> Refund Policy</a>||    
            <a href="#"style="color:gold;">  Services and their Pricing</a>||     
            </nav> 
        </div>
           
           
           
        
</body>
</html>';

?>
