<?php
 
try {
    $dbh = new PDO('mysql:host=localhost;dbname=assessment', 'root', '');
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection Error!: " . $e->getMessage();
    die();
}
 
// GET THE RECORDS
try {
    $sql = "SELECT * FROM teacher_details";
    //echo $sql;
    $statement = $dbh->prepare($sql);
    $statement->execute();
 
} catch (PDOException $e) {
    echo "<hr>";
    echo "Query Error!: " . $e->getMessage();
    echo "<hr><pre>";
    print_r($e);
    die();
}
 
// LOOP OVER THE RECORDS
?>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
<style>
body
	{
	padding: 20px 30px 20px 30px;
	padding-left:20%;
	background-image: url('/assessment/imgs/tcbackground.jpg');
	background-repeat: no-repeat;
	background-attachment: fixed;
	}
row 
	{
	padding-bottom:5px;
	}
.buttons
	{
	padding-left:5%;
	}
</style>
<table class="pure-table">
 <div class="buttons">
    <a href="newspage.php" class="pure-button">Home</a>
		 </div>
		 <br>
<div class="buttons">		 
	<a href="form2.php" class="pure-button pure-button-primary">Submit a post</a>
		 <br>
         </div>
       
      </div>
<thead>
<br>
    <tr>
		<th>Cipher</th>
        <th>First Name</th>
        <th>Last Name</th>
		<th>Department</th>
        <th>Email</th>
    </tr>
</thead>   
<?php while ($row = $statement->fetch(PDO::FETCH_ASSOC)): ?>
<tbody>
    <tr>
        <td><?php echo $row['Cipher']; ?></td>
		<td><?php echo $row['First_Name']; ?></td>
        <td><?php echo $row['Surname']; ?></td> 
        <td><?php echo $row['Department']; ?></td>
        <td><?php echo $row['Work_Email']; ?></td>
		
    </tr>
<tbody>

<?php endwhile; ?>
</table>
<?php
 
