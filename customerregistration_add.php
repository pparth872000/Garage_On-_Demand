<?php
	include 'db_connection.php';
	if(isset($_POST['add']))
	{
	

		
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$emailid=$_POST['emailid'];
		$password=$_POST['upass'];
		$birthdate=$_POST['bdate'];
		$address=$_POST['address'];
		

	    			
		mysqli_query($con, "INSERT INTO `customer_registration`(`First_Name`,`Last_Name`,`Email_Id`,`Password`,`Birth_Date`,`Address`)
		 VALUES ('".$fname."','".$lname."','".$emailid."','".$password."','".$birthdate."','".$address."')");
		header("location:customerregistration.php");
	}
?>





