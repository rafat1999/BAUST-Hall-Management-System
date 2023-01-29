<?php
session_start();
     include_once '../connection/conn.php';
    
  
    $result = mysqli_query($conn,"SELECT * FROM student_payment WHERE std_id= '" . $_GET['id'] . "'");
    $row= mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="style.css">

	<title>Hall Management System</title>
	<style type="text/css">
		.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;

}
.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 

	</style>
	<style type="text/css">
	table, th, td {
  border: 1px solid black;

  
 
}
th, td {
  padding: 10px;
  border-radius: 10px;
}
</style>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='fas fa-school'></i>
			<span class="text">BAUST Hall Management System</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="table_format.php">
					<i class='bx bxs-circle bx-burst' ></i>
					<span class="text">Student Admission</span>
				</a>
			</li>
			<li>
				<a href="Std_addmition.php">
					<i class='bx bxs-circle bx-burst' ></i>
					<span class="text">Student List</span>
				</a>
			</li>
			<li>
				<a href="new.php">
					<i class='bx bxs-doughnut-chart bx-burst' ></i>
					<span class="text">Student payment</span>
				</a>
			</li>
			<li>
				<a href="attendence test.php">
					<i class='bx bxs-group bx-burst' ></i>
					<span class="text">Student Attendence</span>
				</a>
			</li>
			<li>
				<a href="chk_attendance.php">
					<i class='bx bxs-group bx-burst' ></i>
					<span class="text">Check Attendence</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-shopping-bag bx-burst' ></i>
					<span class="text">Meal Management</span>

				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-group bx-burst' ></i>
					<span class="text">Employee Management</span>
					
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-shopping-bag bx-burst' ></i>
					<span class="text">Bill Management</span>
					
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="insert.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Notice Board</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="About hall.html" class="nav-link">About BAUST Hall</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="Mess bill.pdf" class="notification">Notice
				<i class='bx bxs-bell' ></i>
				<span class="num">1</span>
			</a>
			<a href="BAUST web.html" class="profile">
				<img src="img/people.jpeg">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<button class="button button2" ><a href="payment_update.php? id=<?php echo $row['std_id']; ?>" class="text-light">Payment</a></button>
			<button class="button button3" ><a href="history.php? id=<?php echo $row['std_id']; ?>" class="text-light">History</a></button>
			<br><br><br>
			<center><b><h2><font face="Times New Roman">Details of The Students</font></h2></b></center><br><br>
			<form name="frmuser" method="POST" action="">
				<div><?php if(isset($message)) { echo $message; } ?>
				</div> 
				<center>
					<table align="center" height="150px" width="90%">
						
						<tr>
							<td><b>Name:</b></td>
							<td><center><font face="Times New Roman"><?php echo $row['name'];?></font></center></td>
							<td><b>Student ID:</b></td>
							<td><center><font face="Times New Roman"><?php echo $row['std_id'];?></font></center></td>
							
						</tr>
						<tr>
							<td><b>Room No:</b></td>
							<td><center><font face="Times New Roman"><?php echo $row['room'];?></font></center></td>
							<td><b>Department Name:</b></td>
							<td><center><font face="Times New Roman"><?php echo $row['department'];?></font></center></td>
							
							
						</tr>
						<tr>
							<td><b>Batch:</b></td>
							<td><center><font face="Times New Roman"><?php echo $row['batch'];?></font></center></td>
							<td><b>Mobile No:</b></td>
							<td><center><font face="Times New Roman"><?php echo $row['mobile'];?></font></center></td>
						</tr>
						<tr>
							<td><b>Student NID:</b></td>
							<td><center><font face="Times New Roman"><?php echo $row['nid'];?></font></center></td>
							<td><b>Guardian Name:</b></td>
							<td><center><font face="Times New Roman"><?php echo $row['g_name'];?></font></center></td>
						</tr>
						<tr>
							
							<td><b>Guardian Mobile No: </b></td>
							<td><center><font face="Times New Roman"><?php echo $row['g_mobile'];?></font></center></td>
							<td><b>Guardian Relation With Student</b></td>
							<td><center><font face="Times New Roman"><?php echo $row['relation'];?></font></center></td>
						</tr>
						<tr>
							<td><b>Address:</b></td>
							<td><center><font face="Times New Roman"><?php echo $row['address'];?></font></center></td>
							<td><b>Hall Name: </b></td>
							<td><center><font face="Times New Roman"><?php echo $row['hall_name']?></font></center></td>
						</tr>

						<tr>

				</table>
				
			</form>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>