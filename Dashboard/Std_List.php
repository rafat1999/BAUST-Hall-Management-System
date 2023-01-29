<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">

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
                <a href="../includes/dashboard.php">
                    <i class='bx bxs-dashboard' ></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="Std_addmition.php">
                    <i class='bx bxs-circle bx-burst' ></i>
                    <span class="text">Student Admission</span>
                </a>
            </li>
            <li>
                <a href="Std_List.php">
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
                <a href="/Student/Notice/insert.php">
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
            <a href="about.txt" class="nav-link">About BAUST 3 Hall</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
            <a href="#" class="notification">Notice
                <i class='bx bxs-bell' ></i>
                <span class="num">1</span>
            </a>
            <a href="" class="profile">
                <img src="img/people.jpeg">
            </a>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
                        <li>
                            <a class="active" href="../includes/dashboard.php">Home</a>
                        </li>
                    </ul>
                </div>
  


            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Student List</h3>
                        <i class='bx bx-filter' ></i>
                    </div>

        <main>
            <center>
        <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Search Student Information</h4>
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
        <main>
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered" width="105%" border="solid" height="40px">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Student Id</th>
                                    <th>Phone No</th>
                                    <th>Hall Name</th>
                                    <th>Department</th>
                                    <th>Batch No</th>
                                    <th>National Id(Student)</th>
                                    <th>Guardian Name</th>
                                    <th>Guardian Phone No</th>  
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $con = mysqli_connect("localhost","root","rafat","hall");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM std_add WHERE CONCAT(name,stdId,cellNo,nameOfInst,program,batchNo,nationalId,fatherName,fatherCellNo) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                     ?>
                                    
                                         <tr>
                                                <td><?= $items['name']; ?></td>
                                                <td><?= $items['stdId']; ?></td>
                                                <td><?= $items['cellNo']; ?></td>
                                                <td><?= $items['nameOfInst']; ?></td>
                                                <td><?= $items['program']; ?></td>
                                                <td><?= $items['batchNo']; ?></td>
                                                <td><?= $items['nationalId']; ?></td>
                                                <td><?= $items['fatherName']; ?></td>
                                                <td><?= $items['fatherCellNo']; ?></td>
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
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

        </main>
    </div>
</body>
</html>