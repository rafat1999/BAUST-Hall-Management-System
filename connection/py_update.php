<?php
session_start();
     $servername="localhost";
     $username="root";
     $password="rafat";
     $database="hall";
     $conn=mysqli_connect($servername,$username,$password,$database);
     if(count($_POST)>0) {
        mysqli_query($conn,"UPDATE student_payment set amount='" . $_POST['amount'] . "' WHERE std_id='" . $_POST['std_id'] . "'");
        header("location: ../index.php");
    }

    $result = mysqli_query($conn,"SELECT * FROM student_payment WHERE id= '" . $_GET['std_id'] . "'");
    $row= mysqli_fetch_array($result);
?>
