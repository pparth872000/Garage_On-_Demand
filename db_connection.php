<?php
	$server_name="localhost";
	$user_name="root";
	$password="";
	$db_name="garage_on_demand";
	
	$con=mysqli_connect($server_name,$user_name,$password,$db_name);
	
	
	if($con)
	{
	
			
	}
	else
	{
	
		echo"connectionis faild";
	
	}
?>
