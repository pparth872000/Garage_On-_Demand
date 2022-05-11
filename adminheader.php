<?php
	//session_start();
	//if(!isset($_SESSION['session']))
	//{header("location:index");}
	//else
	{include 'db_connection.php';}
	//$date=date("d-m-Y");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Admin Panel</title>
	<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    
	<link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
	<link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
	<link href="plugins/sweetalert/sweetalert.css" rel="stylesheet" />
	<link href="plugins/light-gallery/css/lightgallery.css" rel="stylesheet">
	<link href="plugins/waitme/waitMe.css" rel="stylesheet" />
	<link href="plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
	<link href="plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
	<link href="plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">
	<link href="plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script language="javascript" type="text/javascript">
		var timeout = setInterval(reloadChat, 10000);    
		function reloadChat () {
			$('#navbar-collapse').load("test.php");
		}
	</script>
</head>

<body class="theme-blue">
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <div class="overlay"></div>
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="dashboard" style="font-size:38px; color:#000000;"><strong style="text-transform:uppercase;">Garage On Demand</strong></a>
            </div>
			<div class="collapse navbar-collapse" id="navbar-collapse">
				
            </div>
        </div>
    </nav>
 
    <section>
        <aside id="leftsidebar" class="sidebar">
            <div class="user-info">
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:18px; color:#000000;">Welcome</div>
                    <div class="name" style="font-size:18px; color:#000000;"><strong></strong></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"></i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="logout.php"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    
                    <li><a href="garageregistration.php"><i class="material-icons"></i><span>GARAGE REGISTRATION</span></a></li>
                    <li><a href="admingaragedetail.php"><i class="material-icons"></i><span>GARAGE DETAILS</span></a></li>
                       <li><a href="admincustomerdetail.php"><i class="material-icons"></i><span>CUSTOMER DETAILS</span></a></li>
                          <li><a href="adminvehicledetail.php"><i class="material-icons"></i><span>VEHICLE DETAILS</span></a></li>

                    <li><a href="adminjobcarddetail.php"><i class="material-icons"></i><span>JOBCARD DETAILS</span></a></li>
                    
                
                   </ul>
            </div>
            
            </div>
        </aside>
    </section>