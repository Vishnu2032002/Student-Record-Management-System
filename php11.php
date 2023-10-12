<?php
		include('mysql_connection.php');

				$n=$_POST['name1'];
				$p=$_POST['pass1'];
			
				$sq="select * from pro1 where emp_name='$n' and password='$p'";
				$r=mysqli_query($con,$sq);
				$count=mysqli_num_rows($r);
			
			if($count>0)
			{
				header("Location:dashboard.php");
				
			}	
			else		

				echo '<script>alert("Invalid user details")</script>';
?>