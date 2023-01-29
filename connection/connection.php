<?php
session_start();

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name=$_POST['name'];
        $std_id=$_POST['std_id'];
        $department=$_POST['department'];
        $batch=$_POST['batch'];
        $mobile=$_POST['mobile'];
        $nid=$_POST['nid'];
        $g_name=$_POST['g_name'];
        $g_mobile=$_POST['g_mobile'];
        $relation=$_POST['relation'];
        $g_nid=$_POST['g_nid'];
        $address=$_POST['address'];
        $date=$_POST['date'];
        $room=$_POST['room'];
        $hall_name=$_POST['hall_name'];
        $payment_method=$_POST['payment_method'];
        $perpose=$_POST['perpose'];
        $txn_id=$_POST['txn_id'];
        $amount=$_POST['amount'];
        

     $servername="localhost";
     $username="root";
     $password="rafat";
     $database="hall";
     $conn=mysqli_connect($servername,$username,$password,$database);
     if(!$conn){
         die("Sorry we failed to connect: ".mysqli_connect_error());

     }
     else{
         $sql="INSERT INTO `student_payment` (`name`,`std_id`,`department`,`batch`,`mobile`, `nid`,`g_name`,`g_mobile`,`relation`,`g_nid`,`address`,`date`,`room`,`hall_name`,`payment_method`,`perpose`,`txn_id`,`amount`) VALUES ( '$name','$std_id','$department','$batch','$mobile','$nid','$g_name','$g_mobile','$relation','$g_nid','$address','$date','$room','$hall_name','$payment_method','$perpose','$txn_id','$amount')";
         
         $result=mysqli_query($conn,$sql);
         if($result){
             echo'<script>
                    alert("Allowcation successfull!");
                    window.location = "../includes/std_add_payment.php";
                </script>';

         }
         else{
             echo"Go to a error:".mysqli_errno($conn);
         }
        }
    }
?>