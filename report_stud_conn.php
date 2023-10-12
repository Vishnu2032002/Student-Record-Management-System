<?php
	
	include("mysql_connection.php");
	include("dashboard.php");
	
	
	$g=$_POST['names'];
	$h=$_POST['names1'];
	$last=mysqli_query($con,"select Student_Id,Student_class,Student_name,Gender,
		DOB from add_stud where Created_date between '$g' and '$h'");
	$num=mysqli_num_rows($last);
	
	
	if($num>0)
	{	

	echo '<body style="background-color:#6495ed">';
	echo '<link rel="stylesheet" href="details_stud_ref.css">';
			
	echo '<div class="details_ref">';
	echo '<b><h1 align="center",tyle="color:red">Student Report</h1><br>';
		echo '<table align="center" border="1" style="width:1200px";>';
		echo '<tr>';
			echo '<th colspan="9"><h2 style="color:white">Reporting Details</h2></th>';
		echo '</tr>';
		echo '<b>';
		echo '<t>';
			echo '<th style="color:red">Student Id</th>';
			echo '<th style="color:red">Student Name</th>';
			echo '<th style="color:red">Student Class</th>';
			echo '<th style="color:red">Gender</th>';
			echo '<th style="color:red">DOB</th>';
		
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

						
						
						
						echo '</tr>';
						
						
		
				}
				
			
			
		echo '</table>';
		
	echo '</div>';
	
	echo '</body>';
	}
?>