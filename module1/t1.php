<?php
$username="root";
$password="";
$server="localhost";
$db="priyank";
$con=mysqli_connect($server,$username,$password,$db);
if (isset($_POST["s"]))
 {
	$a=$_POST["t1"];
	$b=$_POST["t2"];
	echo "$a";
	echo "$b";
	$insertquery="insert into abc(username,password) values('$a','$b')";
	mysqli_query($con,$insertquery);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form method="post">
	<div>username
<input type="text" name="t1">
	</div>
	<div>password
		<input type="password" name="t2">
	</div>
<div>
	<input type="submit" name="s">
</div>
</form>
</body>
</html>