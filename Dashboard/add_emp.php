<!DOCTYPE html>
<?php 
include_once'format.php'
 ?>
<head>
    <style type="text/css">
        tr, td {
            border: 2px solid black;
            border-radius: 10px;
        }
    </style>
</head>
<div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>New Employee Added</h3>
                        <i class='bx bx-filter' ></i>
                    </div>

    <main>
        <center> <div class="card-header">
                        
                    </div></center>
        <a href="index.php" class="button" id="back">Back</a>
            <center>
                <form action="emp_add.php" method="POST" align="center" name="reg_form" onsubmit="return validate()">
                    
                  <br><br>
                  
                  <center>
                
                <form action="emp_add.php" method="POST" align="center" name="reg_form" onsubmit="return validate()">
                    
                  <br><br>
                  
                  <center>
                       <table border="solid" width="40%" height="250px">
                            <tr>
                                <td><font face=""><i>Employee Name: <i></font></td>
                                <td><input type="text" name="name"></td>
                            </tr>
                            <tr>
                                <td>Phone No:</td>
                                <td><input type="number" name="cellNo">
                                </td>
                            </tr>
                            <tr>
                                <td>Employee Type </td>
                                <td><input type="text" name="empType"></td>
                            </tr>
                            
                            <tr>
                                <td>Designation</td>
                                <td><input type="text" name="designation"></td>
                            </tr>
                            
                            <tr>
                                <td>Gender</td>
                                <td>
                                    <select id="gender" name="gender">                                        
                                       <option value="Male">Male</option>
                                        <option value="Female">Female</option>
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
                                <td>Joining Date</td>
                                <td><label><input type="date" name="doj"></label></td>
                            </tr>
                             <tr>
                                <td>Block No</td>
                                <td><input type="text" name="blockNo"></td>
                            </tr>
                            <tr>
                                <td>Salary</td>
                                <td><input type="text" name="salary"></td>
                            </tr>
                            <tr>
                                <td>Present Address</td>
                                <td><input type="text" name="presentAddress"></td>
                            </tr>
                        </table>
                    </center><br><br>
                    <div class="form-group ">
                     <button type="submit" class="btn btn-success" name="btnSave" ><i class="fa fa-2x fa-check"></i>Submit</button> 
                </form>

            </center>
    </main>

