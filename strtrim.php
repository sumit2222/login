<?php
/*
<?php

$a=array('A','B','C','C','A');
$c=count($a);
$in=-1;
$el;
//echo $c;
for($i=0;$i<$c;$i++){
	
	for($k=$i+1;$k<$c;$k++){
	if($a[$i]==$a[$k]){
		$el=$a[$k];
		$in=$k;
		break;
	}	
	}
	if($in!=-1){
		break;
	}
}

if($in!=-1){
	echo $el;
}

else{
	echo "There is no repeating element";
}

?>


*/


//test_input($_POST["email"]);
/*$email = "sk35463@gmail.com"; 
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format"; 
  echo $emailErr;
}
else{
	echo "Format is right";
*/

$str="s";
if(preg_match('/^[A-Za-z0-9_~\-!@#\$%\^&*\(\)]+$/',$str)){
	echo "valid characters";
}

else{
	echo "invalid";
}


?>