<?php
if (isset($_POST['submit']))
 {
	$a=$_POST['$b'];
	for ($i=5; $i <=$a ; $i++) { 
		echo "$i";
	}
}?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form method="post">
	<input type="text" name="$b">
	<input type="submit" name="submit">
</form>
</body>
</html>