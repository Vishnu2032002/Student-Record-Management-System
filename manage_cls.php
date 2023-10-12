<?php	
	include("dashboard.php");
	include("mysql_connection.php");
	$last=mysqli_query($con,"select * from add_cls1");
	$num=mysqli_num_rows($last);
	
		
	
	if($num>0)
	{
		echo '<body style="background-color:#6495ed">';
		
		echo '<link rel="stylesheet" href="manage_cls_ref.css">';
		
			
		echo '<div class="addstud1">';
		echo '<h3 align="center" style="color:red">Manage Class</h3><br>';
		echo '<h3>Class Details:</h3><br><br>';
		echo '<table align="center" border="1" style="width:550px"; line-height:40px;">';
		echo '<tr>';
			echo '<th colspan="5"><h2 style="color:white">Class Record</h2></th>';
		echo '</tr>';
		echo '<b>';
		echo '<t>';
			echo '<th style="color:red">S_No</th>';
			echo '<th style="color:red">Class Name</th>';
			echo '<th style="color:red">Created_date</th>';
			echo '<th style="color:red">Delete class</th>';
		
		echo '</t>';
		echo '</b>';
	
			
							
				while($row=mysqli_fetch_array($last))
				{
					$id=$row["S_NO"];
		
						
						echo '<tr>';
						echo '<td align="center"><b>'.$row["S_NO"].'</td>';
						echo '<td align="center"><b>'. $row["Class_name"].'</td>';
						echo '<td align="center"><b>'.$row["Created_date"].'</td>';
						echo '<td align="center"><b>
						<a href="delete_manage.php?id='.$id.'" style="color:yellow">
						<i class="fa fa-trash" aria-hidden="true">
						  </a></td>';
						
						echo '</tr>';
						
						
		
				}
				
			
		
		
		echo '</table>';
		
	echo '</div>';
	echo '</body>';
	}
	
	?>