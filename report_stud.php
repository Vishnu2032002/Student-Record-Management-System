<?php
	include("dashboard.php");
	include("mysql_connection.php")
?>
<html>	
	
	<body style="background-color:#6495ed">
	<link rel="stylesheet" href="report_ref.css">

	<center>
	<form method="post">
	<div class="rep"><br><br>
	<h3 style="color:red">Report Students Data</h3><br><br>
	<b>Starting date:</b><input type="text"  name="name11" placeholder="From date"/><br><br>
	<b>Ending date:</b><input type="text"  name="names12" placeholder="To date"/><br><br>
	
	<input type="submit" value="    Submit    " name="click15"/><br><br><br><br>

	</div>

	
<?php
		$v=$_POST['name11'];
		$d1=$v;
		$v1=$_POST['names12'];
		$d2=$v1;
		$sq="select Student_ID,Student_name,Student_class,
		Gender,DOB,Created_date from add_stud where Created_date between '$d1' and '$d2'";
		if($r=mysqli_query($con,$sq))
		{
			echo '<script>alert("Stud
			ent details gathered Successfully")</script>';
		}
		else
		{
			echo '<script>alert("Student Details not found")</script>';
	
		}
			
?>

			
		<div class="rep1">
		<table align="center" border="2" style="width:700px";"color:white">
		<tr>
			<th colspan="7"><h2 style="color:white">Student Record</h2></th>
		</tr>
		<b>
		<t>
			<th style="color:red">Student ID</th>
			<th style="color:red">Student Name</th>
			<th style="color:red">Student Class</th>
			<th style="color:red">Gender</th>
			<th style="color:red">DOB</th>
			<th style="color:red">Created_date</th>
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
						<td align="center"><b><?php echo $r1['DOB'];?></td>
						<td align="center"><b><?php echo $r1['Created_date'];?></td>
						
						</tr>
		<?php
				}
					
		?>
		
		</table>
		
	</div>
	</form>
	</body>
</html>
		
		
