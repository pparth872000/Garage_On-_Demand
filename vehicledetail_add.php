<?php
	include 'db_connection.php';
	if(isset($_POST['add']))
	{
	

		
		$rnumber=$_POST['txtregistrationnumber'];
		$cnumber=$_POST['txtchasisnumber'];
		$enumber=$_POST['txtenginenumber'];
		$ftype=$_POST['txtfueltype'];
		$make=$_POST['txtmake'];
		$model=$_POST['txtmodel'];
		$vtype=$_POST['txtvehicletype'];
		$year=$_POST['txtyear'];

	    			
		mysqli_query($con, "INSERT INTO `vehicle_details`(`Registration_Number`,`Chasis_Number`,`Engine_Number`,`Fuel_Type`,`Make`,`Model`,`Vehicle_Type`,`Year`)
		 VALUES ('".$rnumber."','".$cnumber."','".$enumber."','".$ftype."','".$make."','".$model."','".$vtype."','".$year."')");
		header("location:vehicledetail.php");
	}
?>





