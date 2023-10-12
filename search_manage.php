<?php 
	include('mysql_connection.php');
	
		$v=$_POST['name31'];
		$c2=$v;
		$sq="select * from add_stud where Student_ID='$c2'";
		if($r=mysqli_query($con,$sq))
		{
			echo '<script>alert("Student details gathered Successfully")</script>';
		}
		else
		{
			echo '<script>alert("Student Details not found")</script>';
	
		}
			
?>
<html>
	<body>
	<html>
	<body style="background-color:#6495ed">
	<link rel="stylesheet" href="search_stud_ref.css">
			
	<div class="searchcls">
	<h3>Student Details:</h3><br><br>
		<table align="center" border="1" style="width:550px"; line-height:40px;">
		<tr>
			<th colspan="4"><h2 style="color:white">Student Record</h2></th>
		</tr>
		<b>
		<t>
			<th style="color:red">Student ID</th>
			<th style="color:red">Student Name</th>
			<th style="color:red">Student Class</th>
			<th style="color:red">Gender</th>
		</t>
		</b>
		<?php
			
							
				while($r1=$r->fetch_assoc())
				{
		?>
						
						<tr>
						<td align="center"><b><?php echo $r1['Student_ID'];?></td>
						<td align="center"><b><?php echo $r1['Student_name'];?></td>
						<td align="center"><b><?php echo $r1['Student_class'];?></td>
						<td align="center"><b><?php echo $r1['Gender'];?></td>
						
						</tr>
						
						
		<?php
				}
				
			
		?>
		
		</table>
		
	</div>
	</body>
</html>
		
		