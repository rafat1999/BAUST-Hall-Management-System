<?php
session_start();
	 include_once '../connection/conn.php';
     if($_SERVER['REQUEST_METHOD']=='POST'){
     $name=$_POST['name'];
     $id=$_POST['id'];
     $room=$_POST['room'];
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
       	for ($i=16; $i <= 31; $i++) 
       	{ 
       		$sql="INSERT INTO `after_15` (`name`,`id`,`room`,`date`,`breakfast`, `lunch`,`dinner`) VALUES ( '$name','$id','$room','$i','$breakfast','$lunch','$dinner')";
       		$result=mysqli_query($conn,$sql);
       	}       		
         if($result){
             echo'<script>
                    alert("Mill Added successfull!");
                    window.location = "../includes/meal_manage.php";
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

	<title>Hall Management System</title>
	<style type="text/css">
	table, th, td {
  border: 2.5px solid black;
 
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
				<a href="dashboard.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="../Dashboard/Std_addmition.php">
					<i class='bx bxs-circle bx-burst' ></i>
					<span class="text">Student Admission</span>
				</a>
			</li>
			<li>
				<a href="../Dashboard/Std_List.php">
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
				<a href="meal_manage.php">
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
			<center>
				<h2>Mill After 15 Days</h2><br>
			<form action="" method="POST">
				<table align="center" height="50px" width="78%" border="3" >

                    
                    <tr>
                    	<td>Student ID:</td>
                    	<td><input type="number" name="id" value="<?php echo $row['std_id'];?>"></td>
                    	<td>Student Name:</td>
                    	<td><input type="text" name="name" value="<?php echo $row['name'];?>"></td>
                    	<td>Room No:</td>
                    	<td><input type="text" name="room" value="<?php echo $row['room'];?>"></td>

                    </tr>
                </table>
                <br><br><br>
				<table>
					<tr>
	                    	<td><input type="number" name="date" value="16"></td>
	                    	<td><select name="breakfast">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
	                        <td><select name="lunch">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
							<td><select name="dinner">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
	                    </tr>
	                    <tr>
	                    	<td><input type="number" name="date" value="17"></td>
	                    	<td><select name="breakfast">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
	                        <td><select name="lunch">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
							<td><select name="dinner">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
	                    </tr>
	                    <tr>
	                    	<td><input type="number" name="date" value="18"></td>
	                    	<td><select name="breakfast">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
	                        <td><select name="lunch">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
							<td><select name="dinner">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
	                    </tr>
	                    <tr>
	                    	<td><input type="number" name="date" value="19"></td>
	                    	<td><select name="breakfast">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
	                        <td><select name="lunch">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
							<td><select name="dinner">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
	                    </tr>
	                    <tr>
	                    	<td><input type="number" name="date" value="20"></td>
	                    	<td><select name="breakfast">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
	                        <td><select name="lunch">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
							<td><select name="dinner">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
	                    </tr>
	                    <tr>
	                    	<td><input type="number" name="date" value="21"></td>
	                    	<td><select name="breakfast">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
	                        <td><select name="lunch">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
							<td><select name="dinner">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
	                    </tr>
	                    <tr>
	                    	<td><input type="number" name="date" value="22"></td>
	                    	<td><select name="breakfast">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
	                        <td><select name="lunch">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
							<td><select name="dinner">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
	                    </tr>
	                    <tr>
	                    	<td><input type="number" name="date" value="23"></td>
	                    	<td><select name="breakfast">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
	                        <td><select name="lunch">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
							<td><select name="dinner">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
	                    </tr>
	                    <tr>
	                    	<td><input type="number" name="date" value="24"></td>
	                    	<td><select name="breakfast">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
	                        <td><select name="lunch">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
							<td><select name="dinner">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
	                    </tr>
	                    <tr>
	                    	<td><input type="number" name="date" value="25"></td>
	                    	<td><select name="breakfast">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
	                        <td><select name="lunch">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
							<td><select name="dinner">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
	                    </tr>
	                    <tr>
	                    	<td><input type="number" name="date" value="26"></td>
	                    	<td><select name="breakfast">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
	                        <td><select name="lunch">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
							<td><select name="dinner">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
	                    </tr>
	                    <tr>
	                    	<td><input type="number" name="date" value="27"></td>
	                    	<td><select name="breakfast">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
	                        <td><select name="lunch">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
							<td><select name="dinner">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
	                    </tr>
	                    <tr>
	                    	<td><input type="number" name="date" value="28"></td>
	                    	<td><select name="breakfast">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
	                        <td><select name="lunch">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
							<td><select name="dinner">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
	                    </tr>
	                    <tr>
	                    	<td><input type="number" name="date" value="29"></td>
	                    	<td><select name="breakfast">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
	                        <td><select name="lunch">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
							<td><select name="dinner">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
	                    </tr>
	                    <tr>
	                    	<td><input type="number" name="date" value="30"></td>
	                    	<td><select name="breakfast">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
	                        <td><select name="lunch">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
							<td><select name="dinner">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
	                    </tr>
	                    <tr>
	                    	<td><input type="number" name="date" value="31"></td>
	                    	<td><select name="breakfast">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
	                        <td><select name="lunch">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
							<td><select name="dinner">
	                            <option value="1">1</option>
	                            <option value="0">0</option>
	                        </select></td>
	                    </tr>


	                    
				</table><br><br>
				<input type="submit" name="submit" value="Save" class="buttom">
			</form>
		</center>

		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>