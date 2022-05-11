<?php
	include 'db_connection.php';
	if(isset($_POST['add']))
	{
	

		
		$cname=$_POST['txtcustomername'];
		$date=$_POST['txtbookingdate'];
		$vname=$_POST['txtvehiclename'];
		$vnumber=$_POST['txtvehiclenumber'];
		$address=$_POST['txtAddress'];

	    			
		mysqli_query($con, "INSERT INTO `login`(`Type_Of_User`,`Email_Id`,`Password`,)
		 VALUES ('".$cname."','".$date."','".$vname."','".$vnumber."','".$address."')");
		header("location:login.php");
	}
?>





