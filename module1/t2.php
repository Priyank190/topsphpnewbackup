<?php
$username="root";
$password="";
$server="localhost";
$db="priyank";
$con=mysqli_connect($server,$username,$password,$db);
?>
<html>
<body>
	<table border="1" width="100%">
		<tr>
			<td>username</td>
			<td>password</td>
			
			<td>delete</td>
			<td>edite</td>
		</tr>
		<?php
		$select_query='SELECT * FROM abc';
		$connection_selectquery=mysqli_query($con,$select_query);
		while ($result=mysqli_fetch_array($connection_selectquery))
		 {
			?>
			<tr>
				<td><?php echo $result ['username'];?></td>
				<td><?php echo $result ['password'];?></td>
			</tr>
			<?php
		}
		?>
	</table>
</body>
</html>