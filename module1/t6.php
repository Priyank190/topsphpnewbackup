<?php
$username="root";
$password="";
$server="localhost";
$db="priyank";
$con=mysqli_connect($server,$username,$password,$db);
if (isset($_GET['del']))
 {
	$connection_deleteuery=mysqli_query($con,"delete from `abc` where `id`='".$_GET['del']."'");

}
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<table border="1" width="100%">
	<tr>
		<td>
		username</td>
		<td>
		password</td>
	</tr>
	<?php
	$select_query="select * from abc";
	$connection_selectquery=mysqli_query($con,$select_query);
	while ($result=mysqli_fetch_array($connection_selectquery))
	 {
		?>
<tr><td><?php echo $result['username'];?></td>
	<td><?php echo $result['password'];?></td>
	<td>
		<a href="t4.php?del=<?php echo $result['id'];?>">delete</a><td>
		<a href="t5.php?edit=<?php echo $result['id'];?>">edit</a></td>
	</td>
</tr>

<?php



	}
	?>
</table>
</body>
</html>