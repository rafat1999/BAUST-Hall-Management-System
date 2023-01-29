<?php
session_start();
	 include_once '../connection/conn.php';
     //include_once '../connection/conn2.php';
    //  if(count($_POST)>0) {
    //  mysqli_query($conn,"UPDATE student SET breakfast='" . $_POST['breakfast'] . "', lunch='" . $_POST['lunch'] . "', dinner='" . $_POST['dinner'] . "' WHERE id='" . $_POST['id'] . "'");
    //     header("location: meal_manage.php");
    // }

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
       	for ($i=1; $i <=15  ; $i++) 
       	{ 
       		$sql="INSERT INTO `student` (`name`,`id`,`room`,`date`,`breakfast`, `lunch`,`dinner`) VALUES ( '$name','$id','$room','$i','$breakfast','$lunch','$dinner')";
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
			<button class="button button2" ><a href="meal_update.php? id=<?php echo $row['std_id']; ?>" class="text-light">Update</a></button>
					<button class="button button3" ><a href="meal_after_15.php? id=<?php echo $row['std_id']; ?>" class="text-light">After 15</a></button><br><br><br>
           <form method="POST" action="">
            <center>
                
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
	                        <td><center>Date</center></td>
	                        <td>Breakfast</td>
	                        <td>Lunch</td>
							<td>Dinner</td>
	                    </tr>
	                    <tr>
	                    	<td><input type="number" name="date" value="1"></td>
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
	                    	<td><input type="number" name="date" value="2"></td>
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
	                    	<td><input type="number" name="date"value="3"></td>
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
	                    	<td><input type="number" name="date" value="4"></td>
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
	                    	<td><input type="number" name="date" value="5"></td>
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
	                    	<td><input type="number" name="date" value="6"></td>
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
	                    	<td><input type="number" name="date" value="7"></td>
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
	                    	<td><input type="number" name="date" value="8"></td>
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
	                    	<td><input type="number" name="date" value="9"></td>
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
	                    	<td><input type="number" name="date" value="10"></td>
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
	                    	<td><input type="number" name="date" value="11"></td>
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
	                    	<td><input type="number" name="date" value="12"></td>
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
	                    	<td><input type="number" name="date" value="13"></td>
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
	                    	<td><input type="number" name="date" value="14"></td>
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
	                    	<td><input type="number" name="date" value="15"></td>
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
						
	                </table>
	               
        <input type="submit" name="submit" value="Save" class="buttom">
    </form>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>