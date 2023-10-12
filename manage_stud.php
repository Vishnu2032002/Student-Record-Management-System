<?php	
	include("dashboard.php");
	include("mysql_connection.php");
	$sq=mysqli_query($con,"select Student_Id,Student_name,Student_class,Gender,Created_date from add_stud order by Student_Id");
	$num=mysqli_num_rows($sq);
	
	if($num>0)
	{	

	echo '<body style="background-color:#6495ed">';
	echo '<link rel="stylesheet" href="manage_stud_ref.css">';
			
	echo '<div class="addmanage1">';
	echo '<h3 align="center" style="color:red">Manage Student</h3><br>';
	echo '<h3>Student Details:</h3><br><br>';
		echo '<table align="center" border="1" style="width:550px"; line-height:40px;">';
		echo '<tr>';
			echo '<th colspan="7"><h2 style="color:white">Student Record</h2></th>';
		echo '</tr>';
		echo '<b>';
		echo '<t>';
			echo '<th style="color:red">Student Id</th>';
			echo '<th style="color:red">Student Name</th>';
			echo '<th style="color:red">Student Class</th>';
			echo '<th style="color:red">Gender</th>';
			echo '<th style="color:red">Delete Details</th>';
		echo '</t>';
		echo '</b>';
		
			
							
				while($row=mysqli_fetch_array($sq))
				{
					$id=$row["Student_Id"];
		
				

						
						echo '<tr>';
						echo '<td align="center"><b>'.$row['Student_Id'].'</td>';
						echo '<td align="center"><b>'.$row['Student_name'].'</td>';
						echo '<td align="center"><b>'.$row['Student_class'].'</td>';
						echo '<td align="center"><b>'.$row['Gender'].'</td>';
						echo '<td align="center"><b><a href="delete_manage_stud.php?id='.$id.'" 
						style="color:yellow">
						<i class="fa fa-trash" aria-hidden="true">';
						
						
						echo '</tr>';
						
						
		
				}
				
			
			
		echo '</table>';
		
	echo '</div>';
	
	echo '</body>';
	}
?>