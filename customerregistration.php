<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="./auth.css">

 <nav class="navbar" style="background-color: deepskyblue">
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
 
<div class="container">
    <h2>Login/Signup</h2>

    <div class="card">
        <div class="form-row">
            <div class="col-md-6">
                <form action="rcustomerlogin.php" method="POST">
                    <div class="alert alert-primary">
                        Login
                    </div>
                    <div class="form-group">
                       
                        <label>Email</label>
                        <input type="email" class="form-control" name="uemail" required>
                        <label>Password</label>
                        <input type="password" class="form-control" name="upass" required><br>
                        <button type="submit"  name="add" class="btn btn-success">Login</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <form method="post" action="customerregistration_add.php">
                    <div class="alert alert-warning">
                        Signup
                    </div>
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="fname" required>
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="lname" required>
                        <label>Email Id</label>
                        <input type="email" class="form-control" name="emailid" required>
                        <label>Password</label>
                        <input type="password" class="form-control" name="upass" required>
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" name="cupass" required>
                        <label>Birth Date</label>
                        <input type="date" class="form-control" name="bdate" required>
                        <label>Address</label>
                       <textarea class="form-control" name="address" required></textarea>
                       
                        <br>
                        <button type="submit" name="add" class="btn btn-primary">Signup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>