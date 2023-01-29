<?php
$url='localhost';
$username='root';
$password='rafat';
$conn=mysqli_connect($url,$username,$password,"hall1");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
?>