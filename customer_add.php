<?php
	include 'db_connection.php';
	if(isset($_POST['add']))
	{
	

		
		$srno=$_POST['txtserialno'];
		$cname=$_POST['txtcustomername'];
		$bdate=$_POST['txtbirthdate'];
		$gender=$_POST['txtgender'];
		$address=$_POST['txtAddress'];
		$mnumber=$_POST['txtmobileno'];
		$emailid=$_POST['txtemailid'];
		$servicedetails=$_POST['txtservicedetails'];
		$gstno=$_POST['txtgstno'];

	    			
		mysqli_query($con, "INSERT INTO `customer`(`Sr_No`,`Customer_Name`,`Date_Of_Birth`,`Gender`,`Address`,`Mobile_No`,`Email_Id`,`Service_Details`,`GST_No`)
		 VALUES ('".$srno."','".$cname."','".$bdate."','".$gender."','".$address."','".$mnumber."','".$emailid."','".$servicedetails."','".$gstno."')");
		header("location:customer.php");
	}
?>





