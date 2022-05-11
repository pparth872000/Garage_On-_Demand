<?php
	include 'db_connection.php';

	

		
		$chname=$_POST['cardname'];
		$cnumber=$_POST['cardnumber'];
		$emonth=$_POST['expmonth'];
		$eyear=$_POST['expyear'];
		$cvv=$_POST['cvv'];
		

	    			
		mysqli_query($con, "INSERT INTO `payment`(`Cardholder_Name`,`Card_Number`,`Expiry_Month`,`Expiry_Year`,`CVV`)
		 VALUES ('".$chname."','".$cnumber."','".$emonth."','".$eyear."','".$cvv."')");
		header("location:booking.php");
		if(isset($_POST['add']))
		{
	}
?>







