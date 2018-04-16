
<!DOCTYPE html>
<html>
<!--
  * Please see the included README.md file for license terms and conditions.
  -->
<head>
    <title>Student login RJIT</title>
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
	font-size:12px;
	color: #333333;
	line-height: 1.166;	
	margin: 0px;
	padding: 0px;
	
	/*background-image:url(../images/dept_bg.jpg);*/
	}
        
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:rgba(0,0,130,0.85);
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
}

li a:hover {
    background-color:rgba(0,100,180,0.8);
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
    <div style="background-color:rgba(0,100,255,0.8);color:white; width:100%; height:150px;"><img src="1.jpg" alt="LOGO" width="150px;" height="150px;" ><strong><h1 style="float:right;">RUSTAMJI INSTITUTE OF TECHNOLOGY</br>(An Institute Of Border Security Force)</h1</strong></div>
        
       <ul>
           <li><a href="index.html" >HOME</a></li>
            <li><a href="about.html">ABOUT</a></li>
            <li><a href="department.html">DEPARTMENT</a></li>
            <li><a href="faculty.html">FACULTY & STAFF LOGIN</a></li>
            <li><a href="student.html">STUDENT LOGIN</a></li>
            <li><a href="#">CONTACT US</a></li>
            <li><a href="#">FAQ</a></li>
         </ul>
        <p style="border-left: 6px solid rgba(0,0,130,0.85);background-color:rgba(0,120,255,0.7);font-size:18px; font-family:jokerman; margin-left:20px;">LOGIN</p>
        <div style="background-color:rgba(0,170,255,0.05); align:center;margin:10em; border-left:1px solid rgba(0,0,220,0.4); border-bottom:1px solid rgba(0,0,220,0.4); border-right:1px solid rgba(0,0,220,0.4); width::400px;">
        <p style="background-color:rgba(0,0,130,0.85);color:white; padding:10px; ">Student User Login</p>
            <form style="margin-left:100px;margin-top:20px; width:400px;" action="sample.php" method="POST">
            User Name: <input type="text" name="username" required autofocus placeholder="Enter your Username">
                <br/><br/><br/>      Password     :      <input type="password" name="password" required placeholder="Enter Your Password">
                
                <br/><br/>
                <p style="margin-left:180px"> <input type="submit" value="Login"></p>
               <a href="newuser.html" style="color:blue; margin:-left:200px; width:400px;">--New User? Create Account </a><br/><br/>
                <a href="#" style="color:blue; margin:-left:200px; width:400px;">--Forgot Password ?</a>
                <br/><pre>  
                
                </pre>
            </form>
            
        </div>


        </div>
        
         <div style="background-color:rgba(0,100,255,0.8); width::100%; height:200px;">
        <pre style="color:white; font-size:14px; font-family:verdana;">
                        
        This is the Institute Service Portal of RJIT, Tekanpur, developed with an objective to enable a single window access to 
                             information and services being provided by the various sections of Institute.
        This portal is part of Institution e-Governance initiative. The site is running on Beta Version This portal is managed by   
                                        Centre for Research and Industrial Staff Performance ( CRISP ), Bhopal.
            </pre>
        
        <nav>
            <pre></pre><a href="#">Terms & Conditions</a>||    
            <a href="#"> Privacy Policy</a>||     
            <a href="#"> Refund Policy</a>||    
            <a href="#">  Services and their Pricing</a>||     
            </nav>
        </div>
           
           
        
</body>
</html>
