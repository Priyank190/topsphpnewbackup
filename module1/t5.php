<?php
$username="root";
$password="";
$server="localhost";
$db="priyank";
$con=mysqli_connect($server,$username,$password,$db);
if (isset($_GET['edit']))
 {
	$a=$_GET['edit'];
	$res=mysqli_query($con,"select*from abc where id=$a");
	$rec=mysqli_fetch_array($res);

}
if (isset($_POST['s']))
 {
	$a1=$_POST['t1'];
	$b=$_POST['t2'];
	$ins="update abc set `username`='$a1',`password`='$b'where id='$a'";
	echo "$ins";
	$exe=mysqli_query($con,$ins);
	if ($exe)
	 {
	?>
	<script>
		window.onload=function()
		{
			alert("update successfully");
			window.location="t4.php"
		}
	</script>
	<?php
	}
}
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form method="post">
	<table width="100%">
		<tr>
			<td>
				username
			</td>
			<td>
				<input type="text" name="t1" id="username" value="<?php echo $rec['username'];?>"></td></tr>

<tr>
	<td>password</td>
	<td><input type="password" name="t2" id="password" value="<?php echo $rec['password'];?>"></td></tr>
	<tr>
		<td>
			<input type="submit" name="s"></td></tr>



	</table>
</body>
</html>