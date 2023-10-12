<?php
	include("mysql_connection.php");
	$n1=$_POST['namee'];
	$p1=$_POST['passs'];
	$c1=$_POST['passss'];			
	if($n1==$n1)
	{
		if($p1==$c1)
		{
			echo '<script>alert("Password update successfully");</script>';
		
			$sq="update add_stud set Password='$c1' where Username='$n1' ";
			echo '<body style="color:black"><b>Sign_in to Home page:</b></body>';
			echo '<a href="student_login.php" style="color:red">Sign in</a>';
		
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