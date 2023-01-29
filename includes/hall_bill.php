<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
        $room=$_POST['room'];
        $name=$_POST['name'];
        $std_id=$_POST['std_id'];
        $seat_bill=$_POST['seat_bill'];
        $monthly_amount=$_POST['monthly_amount'];
        
        

     $servername="localhost";
     $username="root";
     $password="rafat";
     $database="hall1";
     $conn=mysqli_connect($servername,$username,$password,$database);
     if(!$conn){
         die("Sorry we failed to connect: ".mysqli_connect_error());
     }
     else{
         $sql="INSERT INTO `hall_bill` (`room`,`name`,`std_id`,`seat_bill`, `monthly_amount`) VALUES ( '$room','$name','$std_id','$seat_bill' ,'$monthly_amount')";
         
         $result=mysqli_query($conn,$sql);
         if($result){
             echo'<script>
                    alert("successfull Added");
                   
                </script>';

         }
         else{
             echo"Go to a error:".mysqli_errno($conn);
         }
        }
    }
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
	table, th, td {
  border: 2.5px solid black;
 
}

th, td {
  padding: 10px;
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
.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 
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
				<a href="bill_management.php">
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
			<center><br>
				<h2><i><font face="Times New Roman">Student Hall Bill Management</font></i></h2>
				<form action="" method="POST">
					<center><br><br><br>
						<table>
							<tr>
								
								<td><center>Room No</center></td>
								<td><center>Name</center></td>
								<td><center>ID</center></td>
								<td><center>Seat Bill</center></td>
								<td><center>monthly Bill</center></td>
							</tr>
							<?php

				include "../connection/conn.php"; // Using database connection file here

				$records = mysqli_query($conn,"select * from student_payment ORDER BY room ASC"); // fetch data from database

				while($data = mysqli_fetch_array($records))
				{
				?>
				  <tr>
				    <td><center><font face="Time New Romans"><input type="number" name="room" value="<?php echo $data['room']; ?>"></font></center></td>
				    <td><center><font face="Time New Romans"><input type="text" name="name" value="<?php echo $data['name']; ?>"></font></center></td>
				    <td><center><font face="Time New Romans"><input type="number" name="std_id" value="<?php echo $data['std_id'];?>"></font></center></td>
				    <td><center><input type="number" name="seat_bill" value="2200"></center></td>
				    <td><center><input type="number" name="monthly_amount"></center></td>
				  </tr>	
				<?php
				}
				?>
						</table><button type="submit" class="btn btn-primary">Submit</button>

					</center>
					
				</form>
			</center>
		
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>