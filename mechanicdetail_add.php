<?php
	include 'db_connection.php';
	if(isset($_POST['add']))
	{
	

		
		$fname=$_POST['txtfirstname'];
		$lname=$_POST['txtlastname'];
		$gender=$_POST['txtgender'];
		$bdate=$_POST['txtbirthdate'];
		$emailid=$_POST['txtemailid'];
		$password=$_POST['txtpassword'];	
		$mnumber=$_POST['txtmobileno'];
		$address=$_POST['txtAddress'];
		
		

	    			
		mysqli_query($con, "INSERT INTO `mechanic_detail`(`First_Name`,`Last_Name`,`Gender`,`Date_Of_Birth`,`Email_Id`,`Password`,`Mobile_No`,`Address`)
		 VALUES ('".$fname."','".$lname."','".$gender."','".$bdate."','".$emailid."','".$password."','".$mnumber."','".$address."')");
		header("location:mechanicdetail.php");
	}
?>





