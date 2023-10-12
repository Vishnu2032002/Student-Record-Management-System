<?php	
	include("dashboard.php");
	include("mysql_connection.php");
	$sq="select Class_name from add_cls1";
	$last=$con->query($sq);
?>
<html>
	<body style="background-color:#6495ed";"background-image:url("hello.webp")">
	<link rel="stylesheet" href="add_stud1_ref.css">
		
			
	<form method="post" action="add_stud_ins.php">
	<center>
		
	<div class="addstud">
	<marquee direction="left"><h3 align="center" style="color:red">Admin Welcome Dashboard</h3></marquee><br>
	<h3>Add Student</h3></<br>
	
		
		<b>Student Name:<input type="text" name="name4" placeholder="Student_name"/><br><br>
		
		
		
		Student Class:
		<select name="hel">
		<?php
			
			if($last->num_rows>0)
			{
				
				while($row=$last->fetch_assoc())
				{
						
			?>
				<option><?php 
					echo $row['Class_name'];
					?>
				</option>
						
		<?php
		}
				
	}
	else
	{
		return 0;
	}
			
	?>
	</select>
	<br><br>

		Gender:<select name="name5">
		<option value="">---Select Gender---</option>
		<option value="male">MALE</option>
		<option value="female">FEMALE</option>
		</select><br>

		Date of Birth:<input type="date" name="name6"/><br><br>&nbsp&nbsp&nbsp
		Student ID:<input type="number" name="name7"/><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<h3>Parents/Guardian Details:</h3><br>
					
		Father Name:<input type="text" name="name8" placeholder="Father_name"/><br><br>
		Contact No:<input type="number" name="name9"/><br><br>
		Alternative Contact No:<input type="number" name="name10"/><br>
		Address:<input type="text" name="name11" placeholder="Address..."/><br><br>
		<h3>Login Details</h3>
		Username:<input type="text" name="name12" placeholder="username"/><br>
		Password:<input type="password" name="name13" placeholder="password"/><br></b>
		<input type="submit" value="Submit" name="click5"/>
		<div class="pass12">
			<b><a href="recover_stud.php" style="color:red">Forget password</a></b>
		</div>
		
				
	</center>	
	</form>
	</div>
	</body>
</html>