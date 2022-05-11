<?php
	include 'db_connection.php';
	if(isset($_POST['add']))
	{
	

		
		$jcnumber=$_POST['txtjobcardsnumber'];
		$date=$_POST['txtdate'];
		$cname=$_POST['txtcustomername'];
		$address=$_POST['txtaddress'];
		$paymentmode=$_POST['txtpaymentmode'];
		$chequenumber=$_POST['txtchequenumber'];
		$chequedate=$_POST['txtchequedate'];

	    			
		mysqli_query($con, "INSERT INTO `invoice`(`Jobcard_Number`,`Date`,`Customer_Name`,`Address`,`Payment_Mode`,`Cheque_Number`,`Cheque_Date`)
		 VALUES ('".$jcnumber."','".$date."','".$cname."','".$address."','".$paymentmode."','".$chequenumber."','".$chequedate."')");
		header("location:invoice.php");
	}
?>





