
<?php
    require 'connect.php';
$name=$_POST['sname'];
$sem=$_POST['sem'];

$sql="SELECT subject.subcode,subject.subname,marks.marks FROM `studentinfo`, `subject`,`marks` WHERE studentinfo.name='$name' AND subject.sem='$sem' AND subject.subcode=marks.subcode";
$sqlnew="SELECT * FROM `studentinfo`, `subject` WHERE studentinfo.name='$name' AND subject.sem='$sem'";

         
           
if($check=mysqli_query($con,$sql))
{ $checknew=mysqli_query($con,$sqlnew);
$submitnew=mysqli_fetch_assoc($checknew);

session_start();
$_SESSION['sroll']=$submitnew['roll'];
$_SESSION['sname']=$submitnew['name'];

            $result=mysqli_query($con,$sql);
           
if($check=mysqli_query($con,$sql))
{  if(mysqli_num_rows($result) == 0){echo '<script type="text/javascript">alert("No MARKS TO UPDATE .......PLEASE FILL THE MARKS FIRST!!!")</script>"';header('Refresh: 0; URL=update1.php');
																		
          }
                else
                {



				  echo'<html>
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
        </div>
	<div style="margin-left:30px"> 
	<br><br><br><br>
						<body> <form action="update_insert.php" method="post" >
					ROLL: &emsp;<input type="text" name="roll" value="'.$submitnew['roll'].'" disabled>
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				NAME:&emsp; <input type="text" name="name" value="'.$submitnew['name'].'">
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<br><br><br>
				EMAIL:&emsp; <input type="text" name="email" value="'.$submitnew['email'].'">
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				CONTACT:&emsp;<input type="text" name="contact" value="'.$submitnew['contact'].'"><br><br><br><br>
	';



				echo "<table width='850' border='0'>
                 <tr style='font-size: 16px; font-weight: bold; color: rgb(0, 153, 204); background: none repeat scroll 0% 0% aquamarine;'>
                  
                  <td width='200'>Subject code</td>
                  <td width='400'>Subject Name</td>
                
                  <td width='150'><div align='center'>Mid Term</div></td>
                  
                  <td width='150'><div align='center'>New Mid Term</div></td>
                  
                  </tr>";
                  
                  
                    $num=1;
					$bot;
					
					
                        while($rows=mysqli_fetch_array($result)){
                        $num++;
                        //$skizzy = $rows['roll']; 
                        if(($num%2)!=0){
                        $bg="#FFFF99";
                        }else{
                        $bg="#FFFFFF";
                        }
                      
                echo '<tr>
                  <td> '. $rows['subcode'].'</td>
				  
					<td>'.$rows['subname'].'</td>
					<td>'.$rows['marks'].'</td>
                  
                    <td><div align="center"><input type="text" name="bot1" value="'.$rows['marks'].'" size="10" /></div></td>
                 
                  </div>
              </tr>  ';
                 break;
                  
				   }
				   
				     while($rows=mysqli_fetch_array($result)){
					 
                        $num++;
                        //$skizzy = $rows['roll']; 
                        if(($num%2)!=0){
                        $bg="#FFFF99";
                        }else{
                        $bg="#FFFFFF";
                        }
                      
                echo '<tr>
                  <td> '. $rows['subcode'].'</td>
				  
					<td>'.$rows['subname'].'</td>
					<td>'.$rows['marks'].'</td>
                  
                    <td><div align="center"><input type="text" name="bot2" value="'.$rows['marks'].'" size="10" /></div></td>
                 
                  </div>
              </tr>  ';
                 break;
                   
				   }
				     while($rows=mysqli_fetch_array($result)){
                        $num++;
                        //$skizzy = $rows['roll']; 
                        if(($num%2)!=0){
                        $bg="#FFFF99";
                        }else{
                        $bg="#FFFFFF";
                        }
                      
                echo '<tr>
                  <td> '. $rows['subcode'].'</td>
				  
					<td>'.$rows['subname'].'</td>
					<td>'.$rows['marks'].'</td>
                  
                    <td><div align="center"><input type="text" name="bot3" value="'.$rows['marks'].'" size="10" /></div></td>
                 
                  </div>
              </tr>  ';
                 break;
                   
				   }
				     while($rows=mysqli_fetch_array($result)){
                        $num++;
                        //$skizzy = $rows['roll']; 
                        if(($num%2)!=0){
                        $bg="#FFFF99";
                        }else{
                        $bg="#FFFFFF";
                        }
                      
                echo '<tr>
                  <td> '. $rows['subcode'].'</td>
				  
					<td>'.$rows['subname'].'</td>
					<td>'.$rows['marks'].'</td>
                  
                    <td><div align="center"><input type="text" name="bot4" value="'.$rows['marks'].'" size="10" /></div></td>
                 
                  </div>
              </tr>  ';
                 break;
                   
				   }
				     while($rows=mysqli_fetch_array($result)){
                        $num++;
                        
                      //$skizzy = $rows['roll']; 
                        if(($num%2)!=0){
                        $bg="#FFFF99";
                        }else{
                        $bg="#FFFFFF";
                        }
                echo '<tr>
                  <td> '. $rows['subcode'].'</td>
				  
					<td>'.$rows['subname'].'</td>
					<td>'.$rows['marks'].'</td>
                  
                    <td><div align="center"><input type="text" name="bot5" value="'.$rows['marks'].'" size="10" /></div></td>
                 
                  </div>
              </tr>  ';
                 break;
                   
				   }
				    
				   
				   
				   }
				   
				   
					
                
                       echo '
                          
                 
                  
              
              </table>
			  <div align="center"><br><input type="submit" name="submit"  value="Submit"/><input type="hidden" name="add_marks" value="1" /></div>
			  </form></body>
</html>';
			  }
			  }
			  ?>
			  