<?php
	include 'db_connection.php';
	if(isset($_POST['add']))
	{
	

		
		$gname=$_POST['txtgaragename'];
		$fname=$_POST['txtfirstname'];
		$lname=$_POST['txtlastname'];
		$emailid=$_POST['txtemailid'];
		$password=$_POST['txtpassword'];
		$address=$_POST['txtAddress'];
		$location=$_POST['txtmlocation'];

	    			
		mysqli_query($con, "INSERT INTO `garage_registration`(`Garage_Name`,`First_Name`,`Last_Name`,`Email_Id`,`Password`,`Address`,`Map_Location`)
		 VALUES ('".$gname."','".$fname."','".$lname."','".$emailid."','".$password."','".$address."','".$location."')");
		header("location:garageregistration.php");
	}
?>





