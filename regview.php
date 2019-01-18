<html>
<head>
<script language="javascript">


setTimeout(function(){
   window.location.reload();
}, 30000);



</script>
</head>

<?php

session_start();
$con=mysqli_connect('localhost','root','','registration');
if(!isset($_SESSION['uid'])){
	header("Location: loginreg.php");
	exit();
}

else{
$now=time();
if($now>$_SESSION['expire']){
	session_destroy();
            echo "Your session has expired! <a href='loginreg.php'>Login here</a>";
        }
	
	
else{

$id = $_SESSION['uid'];

$query="SELECT * FROM `regtable` where ID = $id";

$run=mysqli_query($con,$query);

$n=0;
if($run==true){
	?><body bgcolor="pink"><table border="2" align="center" style="margin-top:40px;"><?php
	while($data=mysqli_fetch_assoc($run)){
		
			 ?>
			<tr><td align ="center" colspan="2"><h2>USER DETAILS</h2></td></tr>
			<tr><td>USERNAME </td><td><?php echo $data['USERNAME'] ?></td></tr>
			<tr><td>NAME </td><td><?php echo $data['NAME'] ?></td></tr>
			<tr><td>EMAIL </td><td><?php echo $data['EMAIL'] ?></td></tr>
			<tr><td>MOBILE NO </td><td><?php echo $data['MOBILE_NO'] ?></td></tr>
			<tr><td>ADDRESS </td><td><?php echo $data['ADDRESS'] ?></td></tr>
    			<form method="post" action="reglogout.php"><tr><td colspan="2" align="center"><input type="submit" value="LOGOUT"></td></tr></form>
			</table></body>
			
			<?php
			/* echo "<pre>";
			 print_r($data); */
	$n=$n+1;
	
	}
	} 
}
}
	?>
	
	
	
</html>