<?php
include("config.php");
if(isset($_POST["submit"]))
{
$id=$_POST['name'];

$pass=$_POST['pass'];


$result = "SELECT * FROM user_details";
//$sql = $conn->query($result);
$ss = mysqli_query($conn, $result);
//mysqli_multi_query($conn, $result);



while ($row = mysqli_fetch_array($ss))
if($row['name']==$id && $row['pass']==$pass)
 {
   echo "<script type='text/javascript'>alert('CenterId Or Password match!')</script>";
  
   $name=$row['name'];
   $id = $row['Id'];
   header("location: info.php?name=$name && id=$id");
        
 }
 else
 {
    echo "<script type='text/javascript'>alert('CenterId Or Password does not match!')</script>";
 

 }

}
?>