<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'example1');
$query="SELECT * FROM `student`";
$run=mysqli_query($con,$query);
$nam="3";
$n=0;
if($run==true){
	while($data=mysqli_fetch_assoc($run)){
		
		 if($data['RollNo']==$nam){
			 echo "<pre>";
			 print_r($data);
			 $n=$n+1;
		 }
	}
	if($n==0){
		echo "No record Found";
	}
}

?>