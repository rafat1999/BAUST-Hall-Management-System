<?php
session_start();

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name=$_POST['name'];
        $cellNo=$_POST['cellNo'];
        $empType=$_POST['empType'];
        $designation=$_POST['designation'];
        $gender=$_POST['gender'];
        $dob=$_POST['dob'];
        $doj=$_POST['doj'];
        $blockNo=$_POST['blockNo'];
        $salary=$_POST['salary'];
        $presentAddress=$_POST['presentAddress'];
        

     $servername="localhost";
     $username="root";
     $password="";
     $database="hall";
     $conn=mysqli_connect($servername,$username,$password,$database);
     if(!$conn){
         die("Sorry we failed to connect: ".mysqli_connect_error());

     }
     else{
         $sql= "INSERT INTO `emp_add` (`name`,`cellNo`,`empType`,`designation`,`gender`, `dob`,`doj`,`blockNo`,`salary`,`presentAddress`) VALUES ( '$name','$cellNo','$empType','$designation','$gender','$dob','$doj','$blockNo','$salary','$presentAddress')";
         
         $result=mysqli_query($conn,$sql);
         if($result){
             echo'<script>
                    alert("Registration successfull!");
                    window.location = "add_emp.php";
                </script>';

         }
         else{
             echo"Go to a error:".mysqli_errno($conn);
         }
        }
    }
?>