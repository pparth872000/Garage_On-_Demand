<?php
	include 'db_connection.php';
	if(isset($_POST['add']))
	{
	

		
		$cname=$_POST['txtcustomername'];
		$date=$_POST['txtbookingdate'];
		$vname=$_POST['txtvehiclename'];
		$vnumber=$_POST['txtvehiclenumber'];
		$address=$_POST['txtAddress'];
		$mnumber=$_POST['txtmnumber'];
		$emailid=$_POST['txtemailid'];

	    			
		mysqli_query($con, "INSERT INTO `booking_detail`(`Customer_Name`,`Booking_Date`,`Vehicle_Name`,`Vehicle_Number`,`Address`,`Mobile_No`,`Email_Id`)
		 VALUES ('".$cname."','".$date."','".$vname."','".$vnumber."','".$address."','".$mnumber."','".$emailid."')");
		header("location:booking.php");
	}
?>







