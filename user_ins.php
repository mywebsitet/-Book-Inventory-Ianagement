<?php 
include "config.php";

if(isset($_POST['submit']))
{
	

	$f_name = $_POST['f_name'];
	
	$l_name = $_POST['l_name'];
	$name = $f_name. ' '.$l_name;
	$pass = $_POST['pass'];
	$re_pass = $_POST['re_pass'];
	$Email = $_POST['Email'];
	$p_no = $_POST['p_no'];
	if($pass == $re_pass)
	{
	
	{
		 

		$query="INSERT INTO `user_details`(`name`, `pass`, `email`, `phone_no`) VALUES ('$name','$pass','$Email','$p_no')";

		mysqli_multi_query($conn, $query);

		echo " successful ";
	    }
	    header("location:index.php?");
	}
	else
	{
		 echo "<script type='text/javascript'>alert(' Password does not match!')</script>";
		 header("location:singup.php?");
	}
}
	?>

