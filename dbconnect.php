<?php
$username = "root";
$password = "";
$hostname = "localhost";
$dbname = "assessment";
 
$con = mysqli_connect($hostname, $username, $password, $dbname);
 
// check connection 
if (mysqli_connect_errno()) 
{
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
 
$sql="INSERT INTO news (Cipher, Date_published, Title, Notice, Department, Status)
VALUES
('$_POST[Cipher]','$_POST[Date_published]','$_POST[Title]','$_POST[Notice]','$_POST[Department]','$_POST[Status]')";
 
if (!mysqli_query($con,$sql))
 {
 die('ERROR: ' . mysqli_error($con)); 
 }
header("Location: newspage.php");

//redirect back to homepage on successful submit
				
 
mysqli_close($con);
?>
