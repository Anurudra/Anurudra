<?php
require 'connect.php';
//require 'slogin.php';
session_start();

?>




<!DOCTYPE html>
<html>

  
  
<head>
    <title>Student login RJIT</title>
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

        
        ul{
            list-style-type:none;
            margin-left:20px;
            padding:0px;
            width: 150px;
            height: 255px;
            float: left;
            
            
            
        }
        
li a {
    display: block;
    color: gold;
    text-align: center;
    padding: 6px;
    text-decoration: none;
    border: 1px solid gold;
    background:linear-gradient(to bottom,rgb(70,80,90)  30%,rgb(45,60,60)  50%);
        }
        
    li a:hover{
        background:linear-gradient(to bottom,lightcyan  15%,rgb(45,60,60)  100%);;
		border:1px solid black;
             color: black;
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
        
		<p>
		&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;WELCOME: <?php 
		
			
			echo $_SESSION['name'];
			
			//unset($_SESSION['name']);

		?>
		
		</p>
        
        <div>
             <img src="login.png" alt="image" style="opacity:0.25; margin-left:300px; width:300px;height:300px;">
        <ul>
            <li><a href="sdetails.php"> Student Details</a></li>
        <br/>
            <li><a href="passchange.php"> Change Password</a></li>
            <br/>
            <li><a href="showmarks.php"> MID-SEM Marks </a></li>
            <br/>
            <li><a href="#"> Reports</a></li>
            <br>
            <li><a href="#"> Internal Marks</a></li>
            <br/>
            <li ><a href="#"> Attendence</a></li>
            
            
            </ul>
        
            
            
        </div>
       </div>
        <a href="student.html" style="margin:90px;float:right;border:2px solid black; background-color:crimson; color:white; padding:3px">Logout</a>
        <pre>
        
        
        
        
        
        
        
</pre>
        
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
</html> 
