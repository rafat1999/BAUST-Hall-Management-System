<?php   
session_start();
$con=mysqli_connect('localhost','root','rafat');
 if($con)
 {
 	//echo"connection succcess";
 }
else
{
	echo"connection failed";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hall Management System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="CSS/style1.css">
	<?php  include 'Bootstrap.php'?>
	</head>
<body>
<header>
    <br><br><br><br><br><br><br>
    <!-- <h3><center><font face="Time New Romans">Admin Pannel</font></center></h3> -->
	<div class ="container center-div shadow">
		<div class="heading text-center mb-5 text-uppercase text-white">admin login page</div>
		<div class="container row d-flex flex-row justify-content-center mb-5">
			<div class=" admin-form shadow p-2">
				<form  action="logincheak.php" method="POST">
					<div class ="form-group">
						<label>Username</label>
						<input type="text" name="user" value="" class="form-control" autocomplete="off">
					</div>
					<div class ="form-group">
						<label >Password</label>
						<input type="password" name="pass" value="" class="form-control" autocomplete="off">
					</div>
					<input type="submit" class="btn btn-success" name="submit">
				</form>
			</div>
		</div>
	</div>
</header>
</body>
</html>