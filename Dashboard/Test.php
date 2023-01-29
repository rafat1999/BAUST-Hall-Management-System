<?php
    if(isset($_POST["btnsubmit"]))
    {
        
           $servername="localhost";
     $username="root";
     $password="rafat";
     $database="hall";
     $conn=mysqli_connect($servername,$username,$password,$database);
     if(!$conn){
         die("Sorry we failed to connect: ".mysqli_connect_error());

     }      
    
        
        $date = $_POST["cyear"]."-".$_POST["cmonth"]."-".$_POST["cdate"];
        $name=$_POST['name']; 
        $present=$_POST['present'];
        $stdId=$_POST['stdId']; 

        $query = "select *from `std_add` ";
        $result = mysqli_query($conn,$query)or die("select error");
        while($rec = mysqli_fetch_array($result))
        {
            $mno = $rec["stdId"];

           
            if(isset($_POST[$mno]))
            {
                $query1 = "INSERT INTO  `hall_attendence` (`stdId`,`name`,`present`,`program`,`date`) VALUES('$mno','$name','1','program','$date')";
            }
            else
            {
                $query1 = "INSERT INTO  `hall_attendence`(`stdId` ,  `date` ,  `present`) VALUES('$program','$date','1')";
            }
            mysqli_query($conn,$query1)or die("insert error".$mno);
            print "<script>";
            print "alert('Attendance get successfully....');";
            print "self.location='attendence test.php';";
            print "</script>";
        }
        
        
            
        
    }
    else
    {
        //header("Location:attendence.php");
    }
?>
