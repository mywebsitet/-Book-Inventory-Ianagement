<?php 
include "config.php";

if(isset($_POST['submit']))
{
	

	$title = $_POST['title'];
	
	$author = $_POST['author'];
	$Publisher = $_POST['Publisher'];
	$Category = $_POST['Category'];
	$Quenty = $_POST['Quenty'];
	
	{
		 

		$query="INSERT INTO `books_details`( `title`, `author`, `publisher`, `Category`, `stock`) VALUES ('$title','$author','$Publisher','$Category','$Quenty')";

		mysqli_multi_query($conn, $query);

		echo " successful";
	    }
	    header("location:info.php");
	}
	?>

