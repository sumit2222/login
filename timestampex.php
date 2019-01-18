<?php
date_default_timezone_set('Asia/Kolkata');
$conn=new mysqli('localhost','root','','timestam');

if($conn->connect_error){
	die("connection unsuccessfull".$conn->connect_error);
}
$name="sumit k";
$dt=date("Y-m-d");
$dt1=date("Y-m-d H:i:s a");

$query1="INSERT INTO `check1`(`DATE&TIME`, `NAME`) VALUES ('$dt1','$name')";

if($conn->query($query1)===true){
	echo "Data Inserted Successfully";
}

else{
	echo "Error";
}

?>