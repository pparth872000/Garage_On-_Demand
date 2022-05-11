<?php
	include 'db_connection.php';
	if(isset($_POST['add']))
	{
	

		
		$gpass=$_POST['txtgatepassnumber'];
		$cname=$_POST['txtcustomername'];
		$jcnumber=$_POST['txtjobcardnumber'];
		$vname=$_POST['txtvehiclename'];
		$sdate=$_POST['txtservicedate'];
		$vodate=$_POST['txtvehicleoutdate'];
		

	    			
		mysqli_query($con, "INSERT INTO `gate_pass`(`Gatepass_Number`,`Customer_Name`,`Jobcard_Number`,`vehicle_Name`,`Service_Date`,`Vehicle_Outdate`)
		 VALUES ('".$gpass."','".$cname."','".$jcnumber."','".$vname."','".$sdate."','".$vodate."')");
		header("location:gatepass.php");
	}
?>





