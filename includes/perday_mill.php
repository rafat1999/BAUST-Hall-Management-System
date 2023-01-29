<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
        $date=$_POST['date'];
        $breakfast=$_POST['breakfast'];
        $lunch=$_POST['lunch'];
        $dinner=$_POST['dinner'];
        
        

     $servername="localhost";
     $username="root";
     $password="rafat";
     $database="hall1";
     $conn=mysqli_connect($servername,$username,$password,$database);
     if(!$conn){
         die("Sorry we failed to connect: ".mysqli_connect_error());

     }
     else{
         $sql="INSERT INTO `bill` (`date`,`breakfast`,`lunch`,`dinner`) VALUES ( '$date','$breakfast','$lunch','$dinner')";
         
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
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
	<style type="text/css">
		th, td {
			border: 1px solid black;
			border-radius: 10px;
			padding: 10px;
		}
	</style>
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
		<main><br><br>
			<center><h2>Perday Hall cost Calculation</h2></center><br><br>
			<form action="" method="POST" name="myfrom" onsubmit="return validateForm()">
			<center>

				<table align="center">
				<thead>
					<tr>
						<th scope="col">Date</th>
						<th scope="col">Breakfast</th>
						<th scope="col">Lunch</th>
						<th scope="col">Dinner</th>
						
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><input type="date" name="date"></td>
						<td><input type="number" name="breakfast" id="breakfast"></td>
						<td><input type="number" name="lunch" id="lunch"></td>
						<td><input type="number" name="dinner" id="dinner"></td>
					</tr>
					
				
			</table><button type="submit" class="btn btn-primary">Submit</button>
			</center>

			</form>
			
			
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
	<script type="text/javascript">
    function validate()
    {
        var date= document.forms["myfrom"]["date"].value;
        var breakfast= document.forms["myfrom"]["breakfast"].value;
        var lunch= document.forms["myfrom"]["lunch"].value;
        var dinner= document.forms["myfrom"]["dinner"].value;

       //Name Validation
        if (dinner == "") 
        {
            alert("PLEASE FILL DATE BOX");
            return false;
        }
        //Phone No. Validation

        if (breakfast == "") 
        {
            alert("PLEASE FILL THE BREAKFAST");
            return false;
        } 
        if (isNaN(breakfast)) 
        {
            alert("Only insert number");
            return false;
        }
        if (lunch == "") 
        {
            alert("PLEASE FILL THE LUNCH");
            return false;
        } 
        if (isNaN(lunch)) 
        {
            alert("Only insert number");
            return false;
        }
        if (dinner == "") 
        {
            alert("PLEASE FILL THE DINNER");
            return false;
        } 
        if (isNaN(dinner)) 
        {
            alert("Only insert number");
            return false;
        }
    }
</script>
</body>
</html>