<!DOCTYPE html>
<html>
<head>membership query!
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="topnav">
  <a class="active" href="/php/form.php">Home</a>

  <a href="#contact">membership form</a>
  
</div>
<?php   

    $host='localhost';
 $user='root';
 $pass='';
 $db='elite video';
 
$conn =  new mysqli($host,$user,$pass,$db);


if($conn->connect_error){
 echo "Connected was not successfully ";

}
else{
echo "Connection success!";
}
// mysqli_select_db($db);

?>

<?php

include ('C:\xampp\htdocs\php/connect.php');
error_reporting(0);
$member=$_POST['Mem_Num'];
$memberName=$_POST['Mem_Fname'];
$memberLast=$_POST['Mem_Lname'];
$memberStreet=$_POST['Mem_Street'];
$memberCity=$_POST['Mem_City'];
$memberState=$_POST['Mem_State'];
$memberZip=$_POST['Mem_Zip'];
$memberBalance=$_POST['Mem_Balance'];


$sql="SELECT Mem_Num,Mem_Fname,Mem_Lname,Mem_Street,Mem_City,Mem_State,Mem_Zip,Mem_Balance FROM membership WHERE (Mem_Num LIKE '%$Mem_Num%' OR Mem_Num = '') AND (Mem_Fname LIKE '%$Mem_Fname%' OR Mem_Fname = '') AND
                                                                                           (Mem_Lname LIKE '%$Mem_Lname%' OR Mem_Lname = '') AND
                                                                                           (Mem_Street LIKE '%$Mem_Street%' OR Mem_Street = '') AND
                                                                                           (Mem_City LIKE '%$Mem_City%' OR Mem_City = '') AND
                                                                                           (Mem_State LIKE '%$Mem_State%' OR Mem_State = '') AND
                                                                                           (Mem_Zip LIKE '%$Mem_Zip%' OR Mem_Zip = '') AND
                                                                                           (Mem_Balance LIKE '%$Mem_Balance%' OR Mem_Balance = '')";
 	mysqli_set_charset($conn,"utf8");

     $result = mysqli_query($conn, $sql);

     $affected = mysqli_affected_rows($conn);                                                                                          

?>







<div class="main">
			<h2>Query result</h2>
			<?php echo " <p>Number of result: {$affected}</p>"; ?>
			<!-- Start table -->
			<table>
				<tr>
					<th>Mem_Num</th>
					<th>Mem_Fname</th>
					<th>Mem_Lname</th>
					<th>Mem_Street</th>
					<th>Mem_City</th>
					<th>Mem_State</th>
					<th>Mem_Zip</th>
					<th>Mem_Balance</th>
					
				</tr>

				<?php
				while($row = mysqli_fetch_array($result)):
				?>

				<tr>
					<td><?php echo $row['Mem_Num']; ?></td>
					<td><?php echo $row['Mem_Fname']; ?></td>
					<td><?php echo $row['Mem_Lname']; ?></td>
					<td><?php echo $row['Mem_Street']; ?></td>
					<td><?php echo $row['Mem_City']; ?></td>
					<td><?php echo $row['Mem_State']; ?></td>
					<td><?php echo $row['Mem_Zip']; ?></td>
					<td><?php echo $row['Mem_Balance']; ?></td>
			
					<form action='../membership/edit.php' method="post">
		        			<input type="hidden" name="Mem_Num" value="<?php echo $row['Mem_Num']; ?>">
		        			<input type="submit" name="submit" value="Edit">
		    			</form>
					</td>
					<td class="delete">
		    			<form action='delete.php' method="post">
		        			<input type="hidden" name="Mem_Num" value="<?php echo $row['Mem_Num']; ?>">
		        			<input type="submit" name="submit" value="Delete">
		    			</form>
					</td>

				</tr>

			<?php endwhile; ?>
			</table>
		</div>



























        <?php $conn-> close(); ?>

</body>
<footer><form action="connect.php" method="POST" style="border:1px solid #ccc">
        <div class="container">
          <h1>Insert Data</h1>
          <p>Please fill in this form to insert data</p>
          <hr>
      
          <label for="Mem_Num"><b>member Number</b></label>
          <input type="number" placeholder="member number" name="Mem_Num" id="Mem_Num"><br>
      
          <label for="Mem_Fname"><b>member name</b></label>
          <input type="text" placeholder="member name" name="Mem_Fname" id="Mem_Fname"><br>
      
          <label for="Mem_Lname"><b>last name</b></label>
          <input type="text" placeholder="last name" name="Mem_Lname" id="Mem_Lname"><br>
      
          <label for="Mem_Street"><b>street</b></label>
          <input type="text" placeholder="street" name="Mem_Street"  id="Mem_Street"><br>
      
          <label for="Mem_City"><b>city</b></label>
          <input type="text" placeholder="city" name="Mem_City"  id="Mem_City"><br>

          <label for="Mem_State"><b>state</b></label>
          <input type="text" placeholder="state" name="Mem_State" id="Mem_State"><br>

          <label for="Mem_Zip"><b>zip</b></label>
          <input type="number" placeholder="zip" name="Mem_Zip" id="Mem_Zip"><br>

          <label for="Mem_Balance"><b>balance</b></label>
          <input type="number" placeholder="balance" name="Mem_Balance" id="Mem_Balance"><br>

          
      
          <div class="clearfix">
            <button type="button" class="cancelbtn">Cancel</button>
            <button type="submit" class="signupbtn" value="Create">insert</button>
          </div>
        </div>
      </form></footer>


</html>