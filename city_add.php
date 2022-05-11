<?php
	include 'db_connection.php';
	if(isset($_POST['add']))
	{
	

		
		$cityid=$_POST['txtcityid'];
		$name=$_POST['txtcityname'];
		$pincode=$_POST['txtpincode'];

	    			
		mysqli_query($con, "INSERT INTO `city`(`City_Id`,`City_Name`,`Pincode`)
		 VALUES ('".$cityid."','".$name."','".$pincode."')");
		header("location:city.php");
	}
?>





