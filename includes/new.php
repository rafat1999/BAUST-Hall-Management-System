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
	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
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
    </style>

	<style>
		body{

			.button {
	                  background-color: black;
	                  border: none;
	                  color: white;
	                  padding: 15px 32px;
	                  text-align: center;
	                  text-decoration: none;
	                  display: inline-block;
	                  font-size: 20px;
	                  margin: 4px 2px;
	                  cursor: pointer;
	                }

	        #back
	        {
	            float: right ;
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
				<a href="#">
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
			<button class="button" class="text-light"><a href="std_add_payment.php">Add Student</a></button>
			<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Student Id:</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Id</th>
                                    <th>Room No</th>
                                    <th>Department</th>
                                    <th>Batch No</th> 
                                     
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $con = mysqli_connect("localhost","root","rafat","hall");
                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM student_payment WHERE CONCAT(name,std_id,room,department,batch) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $data)
                                            {
                                     ?>
                                    
                                         <tr>
                                                <td><?= $data['name']; ?></td>
                                                <td><?= $data['std_id']; ?></td>
                                                <td><?= $data['room']; ?></td>
                                                <td><?= $data['department']; ?></td>
                                                <td><?= $data['batch']; ?></td>
                                                <td>
                           							 <button class="btn btn-primary"><a href="std_payment_profile.php? id=<?php echo $data['std_id']; ?>" class="text-light">Profile</a></button>
                        						</td>
                                             </tr>
                                     <?php
                                            }
                                        }
                                        else
                                        {
                                       ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                    <?php
                                        }
                                    }
                                
                                	?>
                                	
                            </tbody>
                                            
						</form>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
		
			
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>