


<!DOCTYPE html>
<html>
<?php

include ('connect.php');
error_reporting(0);
$member=$_POST['Mem_Num'];
$memberName=$_POST['Mem_Fname'];
$memberLast=$_POST['Mem_Lname'];
$memberStreet=$_POST['Mem_Street'];
$memberCity=$_POST['Mem_City'];
$memberState=$_POST['Mem_State'];
$memberZip=$_POST['Mem_Zip'];
$memberBalance=$_POST['Mem_Balance'];




if(!$_POST['submit']){
  echo "all feilds are required";
}
else {
  $sql="INSERT into membership (Mem_Num,Mem_Fname,Mem_Lname,Mem_Street,Mem_City,Mem_State,Mem_Zip,Mem_Balance)
  values('$member','$memberName','$memberLast','$memberStreet','$memberCity','$memberState','$memberZip','$memberBalance')";
SQL;
if (mysqli_query($conn,$sql)){
  echo"success";
}
else{
  echo"somthing in incorrect";
}
}

?>
    <body>
        <head>
            <link rel="stylesheet" href="styles.css">
            <div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="\php\membership/query.php">membership form</a>
  
</div>
        </head>


        <h1>Welcome to our website!!</h1>
<table>
  <tr>
    <th>Name</th>
    <th>Id</th>

  </tr>
  <tr>
    <td>Hashem el Biali</td>
    <td>20089930</td>
    
  </tr>
  <tr>
    <td>Karim Fadl</td>
    <td>20105560</td>

  </tr>
  <tr>
    <td>Khaled shawer</td>
    <td>20116099</td>
   
  </tr>

</table>

<h2>In this website our group linked the database "elite video"<br> from the database we implemented in the last couple of weeks<br>we linked the "membership table using php!."<br>Our group added a update,select,delete button to better manage the dataebase</h2>
<h2>We used html css javascript to design and implement the website</h2>
<h2>The image below showes the table we linked in this website</h2>
<img src="img.jpg" alt="Girl in a jacket">

   
    </body>
</html>