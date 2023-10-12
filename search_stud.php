<?php
	include("dashboard.php");
	include("mysql_connection.php")
?>
<html>	
	
	<body style="background-color:#6495ed">
	<link rel="stylesheet" href="search_stud_ref.css">

	<center>
	<form method="post">
	<div class="searchcls1">
	<h3 style="color:red">Search Student Data</h3><br><br>
	<b>Student Id</b><input type="text"  name="name123" place="classname" required/><br><br>
	<input type="submit" value="    Submit    " name="click4"/><br><br><br><br>

	

	
<?php
		$v=$_POST['name123'];
		$c2=$v;
		$sq="select * from add_stud where Student_ID='$c2'";
		$r=mysqli_query($con,$sq);
		$n=mysqli_num_rows($r);
		if($n>0)
		{
			echo '<script>alert("Student details gathered Successfully")</script>';
		}
			
?>

			
	
		<table align="center" border="2" style="width:480px";"color:white">
		<tr>
			<th colspan="5"><h2 style="color:white">Student Record</h2></th>
		</tr>
		<b>
		<t>
			<th style="color:red">Student ID</th>
			<th style="color:red">Student Name</th>
			<th style="color:red">Student Class</th>
			<th style="color:red">Gender</th>
			<th style="color:red">DOB</th>
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
						
						</tr>
		<?php
				}
					
		?>
		
		</table>
		
	</div>
	</form>
	</body>
</html>
		
		
