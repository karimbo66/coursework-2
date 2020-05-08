<?php   

    $host='localhost';
 $user='root';
 $pass='';
 $db='elite video';
 
$conn =  new mysqli($host,$user,$pass,$db);


if (!$conn){
    die("Conection failed: ". mysqli_connect_error);
}

$code = $_POST['Mem_Num'];


$sql = "DELETE FROM COUNTRY WHERE Mem_Num = '$code' LIMIT 1";



mysqli_set_charset($conn,"utf8");

$result = mysqli_query($conn, $sql);

if (mysqli_affected_rows($conn)==1)
    $message = "Delete Success";
else
    $message = "Delete success";
echo "<script type='text/javascript'>alert('$message'); window.location.href='../country.php';</script>";


?>