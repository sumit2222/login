<?php


/*
if(!file_exists("hell.txt")){
	die("File not Found..");
} 

else{
	$file=fopen("hell.txt","r");
}*/


//custom error handler

//echo readfile("hello.txt");

$name=$_POST['name'];
$course=$_POST['course'];
$roll=$_POST['roll'];
$mobile=$_POST['mob'];


$con=mysqli_connect('localhost','root','','example1');

$query="INSERT INTO `student`(`Name`, `Course`, `RollNo`, `MobileNo`) VALUES ('$name','$course','$roll','$mobile')";

$run=mysqli_query($con,$query);
if($run==true){
	echo "Data Inserted successfully";
}

else{
	echo "data not inserted";
}

?>
