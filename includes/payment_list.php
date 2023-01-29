<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Deshboard</title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body>
	<div class="sidebar">
		<div class="sidebar-brand">
			<h3><span class="las la-home"></span> Hall Management System </h3>
		</div>
		<div class="sidebar-menu">
			<ul>
				<li>
					<a href="" class="active"><span class="las la-igloo"></span><span>&nbsp;&nbsp;Dashboard</span></a>
				</li>
				<li>
					<a href=""><span class="las la-users"></span><span>&nbsp;&nbsp;Student Management</span></a>
				</li>
				<li>
					<a href="new.php"><span class="las la-money-check"></span><span>&nbsp;&nbsp;Student payment</span></a>
				</li>
				<li>
					<a href=""><span class="las la-address-book"></span><span>&nbsp;&nbsp;Attendence</span></a>
				</li>
				<li>
					<a href=""><span class="las la-cookie-bite"></span><span>&nbsp;&nbsp;Meal Management</span></a>
				</li>
				<li>
					<a href=""><span class="las la-money-check-alt"></span><span>&nbsp;&nbsp;Cost Management</span></a>
				</li>
				<li>
					<a href=""><span class="las la-user-tie"></span><span>&nbsp;&nbsp;Employee Management</span></a>
				</li>
				<li>
					<a href=""><span class="las la-money-bill"></span><span>&nbsp;&nbsp;Bill Management</span></a>
				</li>
				<li>
					<a href=""><span class="las la-flag"></span><span>&nbsp;&nbsp;Notice Board</span></a>
				</li>
				<li>
					<a href=""><span class="las la-tools"></span><span>&nbsp;&nbsp;Setup All Setup</span></a>
				</li>
			</ul>
		</div>
	</div>
	<div class="main-content">
		<header>
			<h3>
				<label for="">
					<span class="las la-bars"></span>
				</label>
				Dashboard
			</h3>
			<div class="search-warpper">
				<span class="las la-search"></span>
				<input type="search" placeholder="Search Here" />
			</div>
			<div class="user-wrapper">
				<img src="../img/1.jpg" width="60px" height="60px" alt="">
				<div>
					<h4>S.H.Rafat</h4>
					<small>Super Admin</small>
				</div>
			</div>
		</header>
		<main>
			<h4><center><font face="Time New Romans"><b><h1><u><i>Student Payment List</i></u></h1></b></font></center></h4><br><br>
			<center>

			<table border="solid" align="center" width="90%" height="250px">
			  <tr>
			    <td><font face="Time New Romans"><center><b>Name</b></center></font></td>
			    <td><font face="Time New Romans"><center><b>Student Id</b></center></font></td>
			    <td><font face="Time New Romans"><center><b>Room No</b></center></font></td>
			    <td><font face="Time New Romans"><center><b>Deparment</b></center></font> </td>
			    <td><font face="Time New Romans"><center><b>Batch No</b></center></font></td>
			    <td><font face="Time New Romans"><center><b>Hall Name</b></center></font></td>
			    <td><font face="Time New Romans"><center><b>Payment Method</b></center></font></td>
			    <td><font face="Time New Romans"><center><b>Perpose</b></center></font></td>
			    <td><font face="Time New Romans"><center><b>TXN Id</b></center></font></td>
			    <td><font face="Time New Romans"><center><b>Amount</b></center></font></td>
			  </tr>

			<?php

			include "../connection/conn.php"; // Using database connection file here

			$records = mysqli_query($conn,"select * from student_payment ORDER BY room ASC"); // fetch data from database

			while($data = mysqli_fetch_array($records))
			{
			?>
			  <tr>
			    <td><center><font face="Time New Romans"><b><?php echo $data['name']; ?></b></font></center></td>
			    <td><center><font face="Time New Romans"><b><?php echo $data['std_id']; ?></b></font></center></td>
			    <td><center><font face="Time New Romans"><b><?php echo $data['room']; ?></b></font></center></td>
			    <td><center><font face="Time New Romans"><b><?php echo $data['department']; ?></b></font></center></td>
			    <td><center><font face="Time New Romans"><b><?php echo $data['batch']; ?></b></font></center></td>
			    <td><center><font face="Time New Romans"><b><?php echo $data['hall_name']; ?></b></font></center></td>
			    <td><center><font face="Time New Romans"><b><?php echo $data['payment_method']; ?></b></font></center></td>
			    <td><center><font face="Time New Romans"><b><?php echo $data['perpose']; ?></b></font></center></td>
			    <td><center><font face="Time New Romans"><b><?php echo $data['txn_id']; ?></b></font></center></td>
			    <td><center><font face="Time New Romans"><b><?php echo $data['amount']; ?></b></font></center></td>
			  </tr>	
			<?php
			}
			?>
			</table>
			</center>

			<?php mysqli_close($conn); // Close connection ?>

		</main>