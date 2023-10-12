<?php
	include("mysql_connection.php");
	$n1=$_POST['name2'];
	$p1=$_POST['pass2'];
	$c1=$_POST['pass3'];
	$n2="VishnuM";
			
	if($n1==$n2)
	{
		if($p1==$c1)
		{
			echo '<script>alert("Password update successfully");</script>';
		
			$sq="update pro1 set password='$c1' where emp_name='$n2'";
		
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