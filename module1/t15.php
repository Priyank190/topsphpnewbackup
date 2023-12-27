<?php
$username="root";
$password="";
$server="localhost";
$db="crude";

$con=mysqli_connect($server,$username,$password,$db);
if(isset($_GET['edit']))
{
	$a=$_GET['edit'];;
	$res=mysqli_query($con,"select*from student where id=$a");
	$rec=mysqli_fetch_array($res);

}
if (isset($_POST['submit']))
 {
	$a1=$_POST["name"];
	$b=$_POST["dob"];
	$c=$_POST["phone_number"];
	$d=$_POST["city"];
	$e=$_POST["address"];
	$f=$_POST["hobby"];
	$ins="update student set `name`='$a1',`dob`='$b',`phone_number`='$c',`city`='$d',`address`='$e',`hobby`='$f' where id='$a'";
	echo $ins;
	$exe=mysqli_query($con,$ins);
	if($exe)
	{
	?><script>

	window.onload=function()
	{
	alert("update sucessfully");
	window location="t11,php";
}
</script><?php
}
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
	<table width="100%">

<tr>
			<td>
			name:</td></tr><tr><td><input type="text" name="name" id="name" value="<?php echo $rec['name'];?>"></td>
		</tr>
		<br>

<tr>
			<td>
				dob:</td></tr><tr><td><input type="date" id="birthday" name="dob" id="dob" value="<?php echo $rec['dob'];?>"></td></tr>

				<tr>
				<td>
				phone_number:</td></tr><tr><td><input type="number" id="number" name="phone_number" id="phone_number" value="<?php echo $rec['phone_number'];?>"></td></tr><br>


<tr>
					<td>
					city:</td></tr><tr><td><select name="city" >
						<option value="rajkot" name="city" selected>rajkot</option>
						<option value="morbi" name="city" selected>morbi</option> </td></tr><br>



						<tr>
							<td>
								address:</td></tr><tr><td><textarea rows="5" cols="50" name="address" id="address" value="<?php echo $rec['address'];?>"></textarea></td></tr><br>


<tr>
									<td>
										hobby</td></tr><tr><td><input type="checkbox" name="hobby" value="games">games
											<input type="checkbox" name="hobby" value="music">music</td></tr>
										<tr><br>
											<td><input type="submit" name="submit"></td></tr>





















</select>
</table>	
</form>
</body>
</html>
