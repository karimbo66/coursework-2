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