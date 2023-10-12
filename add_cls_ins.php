<?php 
	include('mysql_connection.php');
	
		$m=$_POST['name3'];
		$f=$_POST['name33'];
		$cc=$m.$f;
		$sq="insert into add_cls1(Class_name,Created_date) values('$cc',now())";
		if($r=mysqli_query($con,$sq))
		{
			echo '<script>alert("Class Added Successfully")</script>';
		}
		else
		{
			echo '<script>alert("Class not Added ")</script>';
	
		}
			
?>
		
		