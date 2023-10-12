<?php
		include("mysql_connection.php");
	
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
	
		$sq="delete from add_stud where Student_ID='$id'";
	
		$delete=mysqli_query($con,$sq);
		if($delete)
		{
			echo '<script>alert("Data deleted Successfully");</script>';
		}
		else
		{
			echo '<script>alert("Data not Deleted");</script>';

		}
	}
	else
	{
		echo '<script>alert("Values not comes");</script>';
	
		
	}
	?>