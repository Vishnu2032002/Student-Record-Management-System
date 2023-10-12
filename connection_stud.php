<?php
	include("mysql_connection.php");
	$u=$_POST['namee'];
	$v=$_POST['passs'];
	
	$sq="select * from add_stud where Username='$u' and Password='$v'";
		$r=mysqli_query($con,$sq);
		$count=mysqli_num_rows($r);
			
			if($count>0)
			{
				echo '<script>alert("Login Successfully")</script>';
				
			}	
			else		

				echo '<script>alert("Invalid user details")</script>';
			
	
	
	$t=$_POST['namee'];
	$sq=mysqli_query($con,"select Student_Id,Student_name,
	Student_class,Gender,DOB,Father_name,Contact_no,Address from add_stud where Username='$t'");
	$num=mysqli_num_rows($sq);
	
	if($num>0)
	{	

	echo '<body style="background-color:#6495ed">';
	echo '<link rel="stylesheet" href="details_stud_ref.css">';
			
	echo '<div class="details_ref">';
	echo '<h3 align="center" style="color:red">Student Record</h3><br>';
	echo '<h3>Student Details:</h3><br><br>';
		echo '<table align="center" border="1" style="width:1200px";>';
		echo '<tr>';
			echo '<th colspan="9"><h2 style="color:white">Student Details</h2></th>';
		echo '</tr>';
		echo '<b>';
		echo '<t>';
			echo '<th style="color:red">Student Id</th>';
			echo '<th style="color:red">Student Name</th>';
			echo '<th style="color:red">Student Class</th>';
			echo '<th style="color:red">Gender</th>';
			echo '<th style="color:red">DOB</th>';
			echo '<th style="color:red">Father name</th>';
			echo '<th style="color:red">Contact no</th>';
			echo '<th style="color:red">Address</th>';
		
		echo '</t>';
		echo '</b>';
		
			
							
				while($row=mysqli_fetch_array($sq))
				{
		
				

						
						echo '<tr>';
						echo '<td align="center"><b>'.$row['Student_Id'].'</td>';
						echo '<td align="center"><b>'.$row['Student_name'].'</td>';
						echo '<td align="center"><b>'.$row['Student_class'].'</td>';
						echo '<td align="center"><b>'.$row['Gender'].'</td>';
						echo '<td align="center"><b>'.$row['DOB'].'</td>';
						echo '<td align="center"><b>'.$row['Father_name'].'</td>';
						echo '<td align="center"><b>'.$row['Contact_no'].'</td>';
						echo '<td align="center"><b>'.$row['Address'].'</td>';
						
						
						
						echo '</tr>';
						
						
		
				}
				
			
			
		echo '</table>';
		
	echo '</div>';
	
	echo '</body>';
	}
?>