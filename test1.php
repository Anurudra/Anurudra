<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='12345';


if(!$con=@mysqli_connect($mysql_host,$mysql_user,$mysql_password))
{
die('Can Not Connect to database');
}

else
{
if(mysqli_select_db($con, 'midsem'))
{
echo 'connected';
}
else
{
die('Can Not Connect to database');
}

}
//$query ="SELECT 'roll','password' FROM 'studentinfo' WHERE 'roll'='$username' AND 'password'='$password'";




?>
