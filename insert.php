<!DOCTYPE>
<html>


<head><body>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="styles.css">
<div class="topnav">
  <a class="active" href="/php/form.php">Home</a>

  <a href="#contact">membership form</a>
  <a href="#about">About</a>
</div></head>

<body>

<?php   

    $host='localhost';
 $user='root';
 $pass='';
 $db='elite video';
 
$conn =  new mysqli($host,$user,$pass,$db);


if(!$conn){
    die("Conection failed: ". mysqli_connect_error);

}
$member=$_POST['Mem_Num'];
$memberName=$_POST['Mem_Fname'];
$memberLast=$_POST['Mem_Lname'];
$memberStreet=$_POST['Mem_Street'];
$memberCity=$_POST['Mem_City'];
$memberState=$_POST['Mem_State'];
$memberZip=$_POST['Mem_Zip'];
$memberBalance=$_POST['Mem_Balance'];



$sql="INSERT INTO membership(Mem_Num,Mem_Fname,Mem_Lname,Mem_Street,Mem_City,Mem_State,Mem_Zip,Mem_Balance)
values('$member','$memberName','$memberLast','$memberStreet','$memberCity','$memberState','$memberZip','$memberBalance')";



mysqli_set_charset($conn,"utf8");

		$result = mysqli_query($conn, $sql);

		if (mysqli_affected_rows($conn)==1)
			$message = "Insert Successfully";
		else
            $message = "Insert Failed";
            echo "<script type='text/javascript'>alert('$message'); window.location.href='../membership.php';</script>";
?>
<?php $conn-> close(); ?>
</body>
</html>
