


<?php


	session_start();
	include 'db_connection.php';
	if(isset($_POST['logup']))
	{
		$name=$_POST['Email_Id'];
		$psw=$_POST['Password'];
		
		$login=mysqli_query($con, "select * from garage_registration where Password='".$psw."' and Email_Id='".$name."'") or die(mysqli_error($con));
		if(mysqli_num_rows($login)!=0)
		{
			$log=mysqli_fetch_array($login);
			//$_SESSION['session']=$log['admin_id'];
			header("location:jobcard.php");
		}
		else
		{
			header("location:garage_login.php?login=failed");
		}
	}
	else
	{
		header("location:garage_login.php?login=failed");
	}
?>