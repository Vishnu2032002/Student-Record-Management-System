<?php
	include("mysql_connection.php");
	$n2=$_POST['namee'];
	$p2=$_POST['passs'];
	$c2=$_POST['passss'];
			
	if($n2==$n2)
	{
		if($p2==$c2)
		{
			echo '<script>alert("Password update successfully");</script>';
		
			$sq="update pro1 set pass='$c2' where st_name='$n2' ";
			echo '<b>Sign_in to Home page:</b>';
			echo '<a href="add_student.php">Sign in</a>';
		
		}	
		else
		{
			echo '<script>alert("New password and Confirm password are differ");</script>';
		}
	}
	else
	{
		echo '<script>alert("Invalid Username");</script>';
	}
		
	$r=mysqli_query($con,$sq);
					
								
?>