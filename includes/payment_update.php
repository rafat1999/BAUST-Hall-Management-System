<?php
session_start();
     include_once '../connection/conn.php';
     if($_SERVER['REQUEST_METHOD']=='POST'){
     $name=$_POST['name'];
     $std_id=$_POST['std_id'];
     $perpose=$_POST['perpose'];
     $month=$_POST['month'];
     $date=$_POST['date'];
     $amount=$_POST['amount'];


     $servername="localhost";
     $username="root";
     $password="rafat";
     $database="hall";
     $conn=mysqli_connect($servername,$username,$password,$database);
     if(!$conn){
         die("Sorry we failed to connect: ".mysqli_connect_error());
         }

	// $cheak_duplicate_entry = "SELECT std_id, month FROM student_payment_monthly WHERE std_id ='$std_id'|| month= '$month'";
    
 //     $cheak = mysqli_query($conn, $cheak_duplicate_entry);
 //     $count = mysqli_num_rows($cheak); 

 //     if ($count > 0) {
 //         echo '<script>
 //                    alert("Already Insert !");
 //                    window.location = "../includes/new.php";
 //                </script>';
 //         return false;
 //     }
    else{
         $sql="INSERT INTO `student_payment_monthly` (`name`,`std_id`,`perpose`,`month`,`date`,`amount`) VALUES ( '$name','$std_id','$perpose','$month','$date','$amount')";
         
         $result=mysqli_query($conn,$sql);
         if($result){
             echo'<script>
                    alert("Payment Added successfull!");
                    window.location = "../includes/new.php";
                </script>';

         }
         else{
             echo"Go to a error:".mysqli_errno($conn);
         }
        }
    }


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
	<style type="text/css">
		th,td {
			border: 1.5px solid black;
			border-radius: 10px;
		}

		/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
	</style>

	<title>Hall Management System</title>
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
			<center><b><font face="Times New Roman">Add Monthly Payment</font></b></center><br><br>
			<form name="frmuser" method="POST" action="">
			<div><?php if(isset($message)) { echo $message; } ?>
			</div> 
			<center>
				<table align="center" height="150px" width="78%">
					
					<tr>
						<td><b>Name:</b></td>
						<td><input type="text" name="name" value="<?php echo $row['name'];?>"></td>
						<td><b>Student ID:</b></td>
						<td><input type="number" name="std_id" value="<?php echo $row['std_id'];?>"></td>
					</tr>
					<tr>
						<td><b>Perpose:</b></td>
						<td>
							<select id="perpose" name="perpose">
								<option value="1">Select Perpose</option>
								<option value="Bill Payment">Hall Bill(Monthly)</option>
								<option value="Fee for seat">New Student(Seat & other Charges Bill)</option>
							</select>
						</td>
						<td><b>Month:</b></td>
						<td>
							<select id="month" name="month">
								<option value="1">Select month</option>
								<option value="January">January</option>
								<option value="February">February</option>
								<option value="March">March</option>
								<option value="April">April</option>
								<option value="May">May</option>
								<option value="June">June</option>
								<option value="July">July</option>
								<option value="Auguest">Auguest</option>
								<option value="Septemper">September</option>
								<option value="October">October</option>
								<option value="November">November</option>
								<option value="December">December</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><b>Payment Date:</b></td>
						<td><input type="date" name="date" </td>
						<td><b>Amount:</b></td>
						<td><input type="number" name="amount"></td>
					</tr>
					

		</table>
		<input type="submit" name="submit" value="Save" class="buttom" class="btn-btn primary">
	</form>
		
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>