<?php
session_start();
/*$conn=new mysqli('localhost','root','');
if($conn->connect_error){
	die("Connection Failed : ".$conn->connect_error);
}

//echo "connected successfully";
//$conn->close();//to close the connection

$sql="CREATE DATABASE myDBnew1";

if($conn->query($sql)===TRUE){
	echo "DATABASE SUCCESSFULLY CREATED";
}

else{
	echo "ERROR WHILE CREATING DATABASE";
}

$conn->close();*/



//php set session variables

$_SESSION["favcolor"]="white";
$_SESSION["favanimal"]="cat";

//echo "session variables are set";

print_r($_SESSION);//This function gives the values of all the session variables in the script "as array".

 
?>