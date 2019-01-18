<?php

$username=trim($_POST['uname']);
$name=trim($_POST['name']);
$email=trim($_POST['email']);
$password=trim($_POST['pass']);
$mob=trim($_POST['mob']);
$address=trim($_POST['add']);
$n=0;

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$emailErr = "Invalid email format"; 
  echo $emailErr;
  exit();
}

if(strlen($username)>0 && strlen($name)>0 && strlen($password)>0 && strlen($mob)>0 && strlen($address)>0){
	
	$con=mysqli_connect('localhost','root','','registration');

$query="SELECT * FROM `regtable`";


$run=mysqli_query($con,$query);


while($data=mysqli_fetch_assoc($run)){
	
	if($data['USERNAME']==$username){
	echo "User already exist"."<a href='registration.php'>submit another response</a>";
	$n=$n+1;	
	}
	
	elseif($data['EMAIL']==$email){
	echo "Email ID already exist"."<a href='registration.php'>submit another response</a>";
	$n=$n+1;	
	}
}

if($n==0){
		$query1="INSERT INTO `regtable`( `USERNAME`, `NAME`, `EMAIL`, `PASSWORD`, `MOBILE_NO`, `ADDRESS`) VALUES ('$username','$name','$email','$password','$mob','$address')";
		$run1=mysqli_query($con,$query1);
		echo "data inserted successfully "."<a href='registration.php'>submit another response</a>";
	}
}


else{
	echo "ERROR";
}

?>