<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Admin Panel</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
</head>
<body class="login-page">
    <div class="login-box">
        <div class="logo" align="center"><h1 style="color:lightblue"; style=" font-size: 40px;">Admin Login</h1></div>
        <div class="card">
            <div class="body">
			<?php
				if(isset($_REQUEST['login'])=="failed") {
			?>
				<div class="msg" style="color:#FF0000;">Username or Password Incorrect</div>
			<?php
				} else {
			?>
				<div class="msg">Sign in to start your Session</div>
			<?php } ?>
                <form action="radminlogin.php" method="POST">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <input type="submit" class="btn btn-block bg-green waves-effect" name="logup" value="SIGN IN" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.js"></script>
    <script src="plugins/node-waves/waves.js"></script>
    <script src="plugins/jquery-validation/jquery.validate.js"></script>
    <script src="js/admin.js"></script>
    <script src="js/pages/examples/sign-in.js"></script>
</body>
</html>