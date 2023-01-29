<?php
session_start();
     include_once '../connection/conn2.php';

     

	SELECT id, lunch SUM(lunch)
	FROM student
	GROUP BY id, room as l_total;
	
	SELECT id, dinner SUM(dinner)
	FROM student
	GROUP BY id, room as d_total;

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
	table, th, td {
  border: 2.5px solid black;
 
}
th, td {
  padding: 10px;
}
</style>
<style type="text/css">
		.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;

}
.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 

	</style>
</head>
<body>

	<button class="button button2" ><a href="hall_bill.php? " class="text-light">Update</a></button>
	<form>
		<center>
			<table>
				<tr>
					<td>ID</td>
					<td>Name</td>
					<td>Room</td>
					<td>Total Breakfast</td>
					<td>Total lunch</td>
					<td>Total Dinner</td>
				</tr>
				<?php

				include "../connection/conn2.php"; // Using database connection file here

				$records = mysqli_query($conn,"select * from student ORDER BY room ASC"); // fetch data from database

				while($data = mysqli_fetch_array($records))
				{
				?>
				  <tr>
				    <td><center><font face="Time New Romans"><?php echo $data['id']; ?></font></center></td>
				    <td><center><font face="Time New Romans"><?php echo $data['name']; ?></font></center></td>
				    <td><center><font face="Time New Romans"><?php echo $data['std_id'];?></font></center></td>
				    <td><center><font face="Time New Romans"><?php echo $data['b_total'];?></font></center></td>
				    <td><center><font face="Time New Romans"><?php echo $data['l_total'];?></font></center></td>
				    <td><center><font face="Time New Romans"><?php echo $data['d_total'];?></font></center></td>
				    <td><center><input type="number" name="seat_bill" value="2200"></center></td>
				    <td><center><input type="number" name="monthly_amount"></center></td>
				  </tr>	
				<?php
				}
				?>
			</table>
		</center>
	</form>
</body>
</html>
