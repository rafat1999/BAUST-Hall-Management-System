<?php
session_start();

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name=$_POST['name'];
        $stdId=$_POST['stdId'];
        $cellNo=$_POST['cellNo'];
        $email=$_POST['email'];
        $nameOfInst=$_POST['nameOfInst'];
        $program=$_POST['program'];
        $batchNo=$_POST['batchNo'];
        $gender=$_POST['gender'];
        $dob=$_POST['dob'];
        $bloodGroup=$_POST['bloodGroup'];
        $nationality=$_POST['nationality'];
        $nationalId=$_POST['nationalId'];
        $passportNo=$_POST['passportNo'];
        $fatherName=$_POST['fatherName'];
        $fatherCellNo=$_POST['fatherCellNo'];
        $motherName=$_POST['motherName'];
        $motherCellNo=$_POST['motherCellNo'];
        $localGuardian=$_POST['localGuardian'];
        $localGuardianCell=$_POST['localGuardianCell'];
        $presentAddress=$_POST['presentAddress'];
        $parmanentAddress=$_POST['parmanentAddress'];
       
        

     $servername="localhost";
     $username="root";
     $password="rafat";
     $database="hall";
     $conn=mysqli_connect($servername,$username,$password,$database);
     if(!$conn){
         die("Sorry we failed to connect: ".mysqli_connect_error());

     }
     else{
         $sql= "INSERT INTO `std_add` (`name`,`stdId`,`cellNo`,`email`,`nameOfInst`,`program`,`batchNo`,`gender`, `dob`,`bloodGroup`,`nationality`,`nationalId`,`passportNo`,`fatherName`,`fatherCellNo`,`motherName`,`motherCellNo`,`localGuardian`,`localGuardiancell`,`presentAddress`,`parmanentAddress`) VALUES ( '$name','$stdId','$cellNo','$email','$nameOfInst','$program','$batchNo','$gender','$dob','$bloodGroup','$nationality','$nationalId','$passportNo','$fatherName','$fatherCellNo','$motherName','$motherCellNo','$localGuardian','$localGuardianCell','$presentAddress','$parmanentAddress')";
         
         $result=mysqli_query($conn,$sql);
         if($result){
             echo'<script>
                    alert("Registration successfull!");
                    window.location = "Std_addmition.php";
                </script>';

         }
         else{
             echo"Go to a error:".mysqli_errno($conn);
         }
        }
    }
?>