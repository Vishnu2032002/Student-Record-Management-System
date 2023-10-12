<?php
	$a="localhost";
	$b="root";
	$c="12345";
	$d="project";

	$con=mysqli_connect($a,$b,$c,$d);
	 
	if(mysqli_connect_errno())
	{
		die("Failed to connect with Mysql:".mysql_connect_error());
	}
?>