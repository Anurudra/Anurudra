<?php
require 'connect.php';
$name=$_POST['sname'];
$sem=$_POST['sem'];
$sql="SELECT `subcode`,`subname` FROM `studentinfo`, `subject` WHERE studentinfo.name='$name' AND subject.sem='$sem'";
$sqlnew="SELECT * FROM `studentinfo`, `subject` WHERE studentinfo.name='$name' AND subject.sem='$sem'";

            $result=mysqli_query($con,$sql);
           
if($check=mysqli_query($con,$sql))
{ $checknew=mysqli_query($con,$sqlnew);
$submitnew=mysqli_fetch_assoc($checknew);

session_start();
$_SESSION['sroll']=$submitnew['roll'];


	 if(mysqli_num_rows($result) == 0){ echo "<font color='red' size='3'>No Registered Students yet</font>&nbsp;&nbsp;<a href='teacher_home.php?page=new_student&Id=$sch_id'>Add Student"; 
            }
                else
				
                { echo'
						<body> <form action="insertmarks.php" method="post" >
	ROLL: &emsp;<input type="text" name="roll" value="'.$submitnew['roll'].'" disabled>
	&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
	NAME:&emsp; <input type="text" name="name" value="'.$submitnew['name'].'">
	&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<br><br><br>
	EMAIL:&emsp; <input type="text" name="email" value="'.$submitnew['email'].'">
	&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
	CONTACT:&emsp;<input type="text" name="contact" value="'.$submitnew['contact'].'"><br><br><br><br>
	';



				echo "<table width='850' border='0'>
                <tr style='font-size: 12px; font-weight: bold; color: rgb(0, 153, 204); background: none repeat scroll 0% 0% rgb(230, 249, 217);'>
                  
                  <td width='200'>subject code</td>
                  <td width='400'>Subject Name</td>
                
                  <td width='150'><div align='center'>Mid Term</div></td>
                  
                  </tr>";
                  
                    $num=1;
                        while($rows=mysqli_fetch_array($result)){
                        $num++;
                        //$skizzy = $rows['roll']; 
                        if(($num%2)!=0){
                        $bg="#FFFF99";
                        }else{
                        $bg="#FFFFFF";
                        }
                        ?>
						
                <tr bgcolor="<?php echo $bg; ?>">
                  <td><?php  echo $rows['subcode'];  ?></td>

					<td><?php  echo $rows['subname'];  ?></td>
                  
                    <td><div align="center"><input type="text" name="bot" size="10" /></div></td>
                 <!-- <td><div align="center"><input type="text" name="mt" size="10" /></div></td>
                  <td><div align="center"><input type="text" name="eot" size="10" />-->
                  </div></td>
              </tr>
                  <?php
                        }
                }
				
                       
                         echo ' <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                    <td><div align="center"><input type="submit" name="submit"  value="Submit"   />&nbsp;&nbsp;<input type="hidden" name="add_marks" value="1" /></div></td>
                  <td><div align="center">&nbsp;</div></td>
                  <td><div align="center">&nbsp;
                  </div></td>
              </tr>
              </table>
			  </form><html>
						<body>';
	?>

