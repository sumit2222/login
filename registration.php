<html>
<head>
<title>Registration form</title>

<script type="text/javascript">
function CheckForm(form){
if(form.pass.value.length<8){
	alert("Error: password must contain atleast 8 characters");
	form.pass.focus();
	return false;
}	}

</script>


</head>

<body bgcolor="yellow" style="margin-top:100px;">
<p align="right" margin-right:30px;><b><a href="loginreg.php">LOGIN</a></b></p>
<h1 align="center" ">Registration Form</h1> 
<form action="regis.php" method="post" align="center" onsubmit="return CheckForm(this)">
<table align="center" border="1">
<tr><td>USERNAME </td><td><input type="text" name="uname" required="required"></td></tr>
<tr><td>NAME </td><td><input type="text" name="name" required="required"></td></tr>
<tr><td>EMAIL </td><td><input type="email" name="email" required="required"></td></tr>
<tr><td>PASSWORD </td><td><input type="password" name="pass" required="required"></td></tr>
<tr><td>MOBILE NO </td><td><input type="number" name="mob" required="required"></tr>
<tr><td>ADDRESS </td><td><textarea name="add" rows="5" cols="20"></textarea></p></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="submit" ></td></tr>
</table>

</form>


</body>

</html>


