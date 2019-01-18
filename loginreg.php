<?php
session_start();
?>

<html>
<head><title>USER LOGIN</title>
</head>

<body bgcolor="skyblue">
<form action="#" method="post">
<table align="center" border="1" style="margin-top:40px;">
<tr><td>USERNAME OR EMAIL </td><td><input type="text" name="uename" required="required"></td></tr>
<tr><td>PASSWORD </td><td><input type="password" name="pass" required="required"></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="submit" name="sub"></td></tr>
</form>

<?php 
if(isset($_POST['sub'])){
$username=$_POST['uename'];
$password=$_POST['pass'];

$con=mysqli_connect('localhost','root','','registration');

$query="SELECT * FROM `regtable`";

$run=mysqli_query($con,$query);


$n=0;
if($run==true){
	?><body bgcolor="pink"><table border="2" align="center" style="margin-top:40px;"><?php
	while($data=mysqli_fetch_assoc($run)){
		
		 if($data['USERNAME']==$username||$data['EMAIL']==$username && $data['PASSWORD']==$password){
			$_SESSION['uid'] = $data['ID'];
			$_SESSION['start']=time();
			$_SESSION['expire']=$_SESSION['start']+ (1*60);
			header('location:regview.php'); ?>
			
			<?php
			/* echo "<pre>";
			 print_r($data); */
			 $n=$n+1;
		 }
	}
	if($n==0){
		echo "<p align='center'>No record Found</p>";
	}
}
}

?>

</body>
</html>