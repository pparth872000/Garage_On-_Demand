<?php
	include 'db_connection.php';
	if(isset($_POST['add']))
	{
	

		
		$jbno=$_POST['txtjobcardno'];
		$indate=$_POST['txtindate'];
		$outdate=$_POST['txtoutdate'];
		$cname=$_POST['txtcustomername'];
		$address=$_POST['txtAddress'];
		$mnumber=$_POST['txtmobileno'];
		$make=$_POST['txtmake'];
		$model=$_POST['txtmodel'];
		$kmdriven=$_POST['txtkmdriven'];
		$oblist=$_POST['txtobservationlist'];
		$mname=$_POST['txtmechanicname'];
		$chasisno=$_POST['txtchasisno'];
		$regno=$_POST['txtregistrationnumber'];
		$billdate=$_POST['txtbilldate'];
		$lcharge=$_POST['txtlcharge'];
		$ldisc=$_POST['txtldiscount'];
		$gstno=$_POST['txtnetlabour'];

	    			
		mysqli_query($con, "INSERT INTO `job_card`(`Jobcard_Number`,`In_Date`,`Out_Date`,`Customer_Name`,`Address`,`Mobile_No`,`Make`,`Model`,`Kilometer_Driven`,`Observation_List`,`Mechanic_Name`,`Chasis_Number`,`Registration_Number`,`Bill_Date`,`Labour_Charge`,`Labour_Discount`,`Net_Labour`)
		 VALUES ('".$jbno."','".$indate."','".$outdate."','".$cname."','".$address."','".$mnumber."','".$make."','".$model."','".$kmdriven."','".$oblist."','".$mname."','".$chasisno."','".$regno."','".$billdate."','".$lcharge."','".$ldisc."','".$gstno."')");
		header("location:jobcard.php");
	}
?>





