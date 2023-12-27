<?php
$username="root";
$password="";
$server="localhost";
$db="crude";

$con=mysqli_connect($server,$username,$password,$db);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<table border="1" width="100%">
	<tr>
		<td> <b>name</b></td>
		<td><b>dob</b></td>
		<td><b>phone_number</b></td>
		<td><b>city</b></td>
		<td><b>address</b></td>
		<td><b>hobby</b></td>
		
		<?php
		$select_query="select*from student";
		$connection_selectquery=mysqli_query($con,$select_query);
		while ($result=mysqli_fetch_array($connection_selectquery))
		 {
			?>
			<tr>
				
<td><?php echo $result['name'];?></td>
<td><?php echo $result['dob'];?></td>
<td><?php echo $result['phone_number'];?></td>
<td><?php echo $result['city'];?></td>
<td><?php echo $result['address'];?></td>
<td><?php echo $result['hobby'];?></td>

</tr><?php 

		}
		?>
</table>
</body>
</html>