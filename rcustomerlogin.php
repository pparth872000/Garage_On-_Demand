


<?php
	session_start();
	include 'db_connection.php';
	if(isset($_POST['add']))
	{
		$name=$_POST['uemail'];
		$psw=$_POST['upass'];
		
		$login=mysqli_query($con, "select * from customer_registration where Password='".$psw."' and Email_Id='".$name."'") or die(mysqli_error($con));
		if(mysqli_num_rows($login)!=0)
		{
			$log=mysqli_fetch_array($login);
			//$_SESSION['session']=$log['admin_id'];
			header("location:booking.php");
		}
		else
		{
			header("location:index.php?login=failed");
		}
	}
	else
	{
		header("location:index.php?login=failed");
	}
?>