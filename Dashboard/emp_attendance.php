
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
                <a href="#">
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
                <a href="">
                    <i class='bx bxs-group bx-burst' ></i>
                    <span class="text">Student Attendence</span>
                </a>
            </li>
            <li>
                <a href="#">
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
                            <a class="active" href="index.php">Home</a>
                        </li>
                    </ul>
                </div>
  


            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3></h3>
                        <i class='bx bx-filter' ></i>
                    </div>
</style>



<table width="800" border="1" align="center">
      <tr>
        <td><center> <h1>Added Employee Attendence</h1></center></td>
      </tr>
      
      <tr>
        <td>
        <form action="Test.php" method="post">
        <table width="160px" align="left" style="">
              <tr>
                  <td> Select date : <br />
                   <?php 
                $dt = getdate();
              $day = $dt["mday"];
              $month = date("m");
              $year = $dt["year"];
              
              echo "<select name='cdate'>";
              for($a=1;$a<=31;$a++)
              {
                if($day == $a)
                  echo "<option value='$a' selected='selected'>$a</option>";
                else
                  echo "<option value='$a' >$a</option>";
              }
              echo "</select><select name='cmonth'>";
              for($a=1;$a<=12;$a++)
              {
                if($month == $a)
                  echo "<option value='$a' selected='selected'>$a</option>";
                else
                  echo "<option value='$a' >$a</option>";
              }
              echo "</select><select name='cyear'>";
              for($a=2015;$a<=$year;$a++)
              {
                if($year == $a)
                  echo "<option value='$a' selected='selected'>$a</option>";
                else
                  echo "<option value='$a' >$a</option>";
              }
              echo "</select>";
            ?>                    
                    </td>
                </tr>
             </table> 
        
          <table width="400" border="3" align="left" style="margin-left:20px;">
            <tr>
              <td colspan="3" ><div align="center"><strong><span class="style2">Get Attendance</span></strong></div></td>
            </tr>
            <tr bgcolor="#999966">
              <td width="114"><span class="style7">Employee Id</span></td>
              <td width="152"><span class="style7">Name</span></td>
              <td width="110"><span class="style7">Attendence</span></td>
            </tr>
            <?php
          $servername="localhost";
     $username="root";
     $password="rafat";
     $database="hall";
     $conn=mysqli_connect($servername,$username,$password,$database);
     if(!$conn){
         die("Sorry we failed to connect: ".mysqli_connect_error());

     }

        extract($_POST);
        $query = "select *from `emp_add` order by `id`";
        $s = 0;
        $result = mysqli_query($conn,$query)or die("select error");
        while($rec = mysqli_fetch_array($result))
        {
          $s = $s + 1;
          echo ' <tr>

                <td width="114">'.$rec["id"].'</td>
                <td width="152">'.$rec["name"].'</td>
                <td width="110"><input type=checkbox name="present" onclick="getatt(this.checked);"/>
                <input type="hidden" name="name" value='.$rec["name"].' >
                <input type="hidden" name="stdId" value='.$rec["id"].' >

                </td>
              </tr>';
        }
      ?>      
            <tr>
              <td colspan="3"><div align="center">
                <input type="submit" value="Get Attendance" name="btnsubmit"/>
                &nbsp;&nbsp;</div></td>
            </tr>
          </table>
          </form>
         
          <table width="100px" align="right" style="margin-left:35px">
              <tr>
                  <td> Total Absent : <input type="text" id="txtAbsent" value="<?php print $s; ?>" size="10" disabled="disabled"/></td>
                </tr>
                <tr>
                  <td> Total Present : <input type="text" id="txtPresent" value="0" size="10"  disabled="disabled"/></td>
                </tr>
                <tr>
                  <td> Total Employee : <input type="text" id="txtStudent" value="<?php print $s; ?>" size="10" disabled="disabled"/></td>
                </tr>
             </table>
         
         </td>
      </tr>
    </table>

