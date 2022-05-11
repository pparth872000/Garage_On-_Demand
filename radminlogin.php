


<?php
	session_start();
	include 'db_connection.php';
	if(isset($_POST['logup']))
	{
		$name=$_POST['username'];
		$psw=$_POST['password'];
		
		$login=mysqli_query($con, "select * from admin_master where password='".$psw."' and user='".$name."'") or die(mysqli_error($con));
		if(mysqli_num_rows($login)!=0)
		{
			$log=mysqli_fetch_array($login);
			//$_SESSION['session']=$log['admin_id'];
			header("location:admincustomerdetail.php");
		}
		else
		{
			header("location:admin_login.php?login=failed");
		}
	}
	else
	{
		header("location:admin_login.php?login=failed");
	}
?>