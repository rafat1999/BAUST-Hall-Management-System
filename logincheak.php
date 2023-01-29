<?php   
session_start();
$con=mysqli_connect('localhost','root','rafat');
 if($con)
 {
 	//echo"connection succcess";
 }
else
{
	echo"connection failed";
}
$db=mysqli_select_db($con,'hall');
if(isset($_POST['submit']))
{
	$username=$_POST['user'];
	$password=$_POST['pass'];

	$sql= " select * from admin where user='$username' and pass='$password' ";
	$query=mysqli_query($con,$sql);

	$row=mysqli_num_rows($query);
	
      if($row == 1)
      {
      	echo '<script>
                window.location = "includes/dashboard.php";
            </script>';
      }
      else
      {
      	echo '<script>
                alert("Invalid credentials!");
                window.location = "index.php";
            </script>';
      }
	
}
?>