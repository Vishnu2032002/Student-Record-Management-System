<?php 
	session_start();
	include('mysql_connection.php');
	
	if(isset($_POST['click5']))
	{
		$a1=$_POST['name4'];
		
		$b1=$_POST['hel'];
		$c1=$_POST['name5'];
		$d1=$_POST['name6'];
		$e1=$_POST['name7'];
		$f1=$_POST['name8'];
		$g1=$_POST['name9'];
		$h1=$_POST['name10'];
		$i1=$_POST['name11'];
		$j1=$_POST['name12'];
		$k1=$_POST['name13'];
		
		$sq="insert into add_stud(Student_name,Student_class,Gender,DOB,Student_Id,Father_name,Contact_no,Alter_contant_no,Address,Username,Password,Created_date)
		values('$a1','$b1','$c1','$d1','$e1','$f1','$g1','$h1','$i1','$j1','$k1',now())";
			
		if($r=mysqli_query($con,$sq))
		{
			echo '<script>alert("Student Details Added Successfully")</script>';
		}
		else
		{
			echo '<script>("Student Detaiils not Added ")</script>';
	
		}
		
	}
			
?>
		