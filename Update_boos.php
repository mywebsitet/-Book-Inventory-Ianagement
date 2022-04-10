<?php 
include "config.php";

if(isset($_POST['submit']))
{
	//$id=1;
	$ids=$_POST['id'];
	

	$title = $_POST['title'];
	
	$author = $_POST['author'];
	$Publisher = $_POST['Publisher'];
	$Category = $_POST['Category'];
	$Quenty = $_POST['Quenty'];
	{
		 
		
		//mysql_query
		//$query="UPDATE company_detals SET c_name='$NAME' where email_id='$ids'";


		$query = "UPDATE `books_details` SET title='$title',`author`='$author',`publisher`='$Publisher',`Category`='$Category',`stock`='$Quenty' WHERE Id = $ids";

		
		mysqli_multi_query($conn, $query);

		echo " successful";
	    }
	   header("location:info.php?id=$ids");
	}
	?>

