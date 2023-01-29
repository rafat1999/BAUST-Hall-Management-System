<!DOCTYPE html>
<?php 
include_once'format.php' ?>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
    <style type="text/css">
        tr,td {
            border: 1px solid black;
            border-radius: 10px;
        }
    </style>
</head>

<body style="background-color:grey;">
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>New Student Addmition</h3>
                        <i class='bx bx-filter' ></i>
                    </div>

    <main>
        <center> <div class="card-header">
                        
                    </div></center>
        <a href="../includes/dashboard.php" class="button" id="back">Back</a>
            <center>
                <form action="connection.php" method="POST" align="center" name="reg_form" onsubmit="return validate()">
                    
                  <br><br>
                  
                  <center>
                       <table width="40%" height="250px">
                        

                            <tr>
                                <td><font face=""><i>Student Name: <i></font></td>
                                <td><input type="text" name="name"></td>
                            </tr>
                            <tr>
                                <td>Student Id: </td>
                                <td><input type="number" name="stdId"></td>
                            </tr>
                            <tr>
                                <td>Phone No:</td>
                                <td><input type="number" name="cellNo">
                                </td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td>
                                    <input type="text" name="email">
                                </td>
                            </tr>
                            <tr>
                                <td>Hall Name:</td>
                                <td>
                                        <select id="nameOfInst" name="nameOfInst">
                                        <option value="">Select Hall Name</option>
                                        <option value="Abbas Uddin">Abbas Uddin Ahmed Hall</option>
                                        <option value="Taramon Bibi">Birprotik Taramon Bibi Hall</option>
                                        <option value="New Hall">New Hall</option>
                                </td>
                            </tr>
                            <tr>
                                <td>Department</td>
                                <td><input type="text" name="program"></td>
                            </tr>
                            
                            <tr>
                                <td>Batch No:</td>
                                <td>
                                    <select id="batch" name="batchNo">
                                        <option value="1">Select Batch No</option>
                                        <option value="8">8th</option>
                                        <option value="9">9th</option>
                                        <option value="10">10th</option>
                                        <option value="11">11th</option>
                                        <option value="12">12th</option>
                                        <option value="13">13th</option>
                                        <option value="14">14th</option>
                                        <option value="15">15th</option>
                                        <option value="16">16th</option>
                                    </select>
                                </td>
                            </tr>
                             <tr>
                                <td>Gender</td>
                                <td>
                                    <select id="gender" name="gender">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td> Date of Birth: </td>
                                <td>
                                    <label><input type="date" name="dob"></label>
                                </td>
                            </tr>
                            <tr>
                                <td>Blood Group:</td>
                                <td>
                                    <select id="bloodGroup" name="bloodGroup">
                                        <option value="A+">A+(ve)</option>
                                        <option value="A-">A-(ve)</option>
                                        <option value="B+">B+(ve)</option>
                                        <option value="B-">B-(ve)</option>
                                        <option value="AB+">AB+(ve)</option>
                                        <option value="AB-">AB-(ve)</option>
                                        <option value="O+">O+(ve)</option>
                                        <option value="O-">O-(ve)</option>
                                        
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Nationality:</td>
                                <td>
                                    <input type="text" name="nationality">
                                </td>
                            </tr>
                            <tr>
                                <td>National Id:</td>
                                <td>
                                    <input type="number" name="nationalId">
                                </td>
                            </tr>
                            <tr>
                                <td>Pasport No:</td>
                                <td>
                                    <input type="text" name="passportNo">
                                </td>
                            </tr>
                            <tr>
                                <td>Father Name</td>
                                <td>
                                    <input type="text" name="fatherName">
                                </td>
                            </tr>
                            <tr>
                                <td>Father phone No:</td>
                                <td>
                                    <input type="number" name="fatherCellNo">
                                </td>
                            </tr>
                            <tr>
                                <td>Mother Name</td>
                                <td>
                                    <input type="text" name="motherName">
                                </td>
                            </tr>
                            <tr>
                                <td>Mother phone No:</td>
                                <td>
                                    <input type="number" name="motherCellNo">
                                </td>
                            </tr>
                            <tr>
                                <td>Local Guardian Name</td>
                                <td>
                                    <input type="text" name="localGuardian">
                                </td>
                            </tr>
                            <tr>
                                <td>Local Guardian No:</td>
                                <td>
                                    <input type="number" name="localGuardianCell">
                                </td>
                            </tr>
                            <tr>
                                <td>Present Address</td>
                                <td>
                                    <input type="commentbox" name="presentAddress">
                                </td>
                            </tr>
                            <tr>
                                <td>Parmanent Address</td>
                                <td>
                                    <input type="commentbox" name="parmanentAddress">
                                </td>
                            </tr>
                        </table>
                    </center><br><br>
                  <button type="submit" class="btn btn-primary">Submit</button> 
                </form>

            </center>
    </main>
   