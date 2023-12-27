<?php
$username="root";
$password="";
$server="localhost";
$db="crude";

$con=mysqli_connect($server,$username,$password,$db);
if (isset($_POST['submit'])) 
{
	$a=$_POST["name"];
	$b=$_POST["dob"];
	$c=$_POST["phone_number"];
	$d=$_POST["city"];
	$e=$_POST["address"];
	$f=$_POST["hobby"];
	 

	echo $a;
	echo $b;
	echo $c;
	echo $d;
	echo $e;
	echo $f;
	

	$insertquery = "insert into student(name,dob,phone_number,city,address,hobby)values('$a','$b','$c','$d','$e','$f')";
	mysqli_query($con,$insertquery);
}
?>






















<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form method="post">
	<table>
		<tr>
			<td>
			<div>name:</td><td><input type="text" name="name"></div></td>
		</tr>
		<tr>
			<td>
				<div>dob:</td><td><input type="date" id="birthday" name="dob"></div></td></tr>

				<tr>
				<td>
				<div>phone_number:</td><td><input type="number" id="number" name="phone_number"></div></td></tr>
				<tr>
					<td>
					<div>city:</td><td><select name="city" >
						<option value="rajkot" name="city" selected>rajkot</option>
						<option value="morbi" name="city" selected>morbi</option> </td></tr>
						<tr>
							<td>
								<div>address:</td><td><textarea rows="5" cols="50" name="address"></textarea></td></div></tr>
								<tr>
									<td>
										<div>hobby</td><td><input type="checkbox" name="hobby" value="games">games
											<input type="checkbox" name="hobby" value="music">music</td></div></tr>

                












										<tr><td>
											<div><input type="submit" name="submit"></div></td></tr>





					
</select>
	</table>
</form>
</body>
</html>