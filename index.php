<?php
// login as root
$username = "root";
$password = "";
$hostname = "localhost";
 
//connect
$con = mysqli_connect($hostname, $username, $password, 'assessment');
 
// check connection 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
 
//mysql_select_db("news", $con);
 
$sql = <<<EOS
  SELECT * FROM news
  WHERE Status = 1
  ORDER BY Date_published
  LIMIT 3
EOS;

$result = mysqli_query($con, $sql);

 
?>
<!doctype html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TC News homepage</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
	<style>
	body
	{
	padding: 20px 30px 20px 30px;
	padding-left:25%;
	background-image: url('/assessment/imgs/tcbackground.jpg');
	background-repeat: no-repeat;
	background-attachment: fixed;
	}
	</style>
    </head>
  <div class="row">
             
         <a href="#" class="pure-button">Home</a>
		 </div>
		 <br>
		 <a href="form2.php" class="pure-button pure-button-primary">Submit a post</a>
         </div>
       
      </div>
      <h1><small>This is the TC News database.</small></h1>
	  <a href="/assessment/results.php"><h3><small>Teacher Details</h3></small></a>
      
    </div>
  </div>
 </header>
 
  <!-- End Nav -->
  <?php

 
 while($row = mysqli_fetch_array($result)) {
   print "<h3>" . $row['Title'] . " </h3>";
   echo "<img src='imgs/".$row['Image']."'?>"; 
   print "<h6> Written by " . $row['Cipher'] . "  </h6>" ; 
   print "<p>" . $row['Notice'] . " </p>";
   print "<p>" . $row['Date_published'] . "</p> ";
   
   // php convert date/time
   // resize img  height="96px" width="72px"
   
   }
?>:
 
</body>
</html>
 
 
