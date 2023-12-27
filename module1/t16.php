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
    if(isset($_GET['del']))
{
    $connection_deletquery=mysqli_query($con,"delete from`student` where `id`='".$_GET['del']."'");
    if(isset($_GET['edit']))
{
    $a=$_GET['edit'];;
    $res=mysqli_query($con,"select*from student where id=$a");
    $rec=mysqli_fetch_array($res);

}
  } 
}
?>
<html>
<table border="1" width="100%">
    <tr>
        <td> <b>name</b></td>
        <td><b>dob</b></td>
        <td><b>phone_number</b></td>
        <td><b>city</b></td>
        <td><b>address</b></td>
        <td><b>hobby</b></td>
        <td><b>delete</b></td>
        <td><b>edit</b></td>
    </tr>
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
<td>
    <a href="t14.php?del=<?php echo $result['id'];?>">delete</a>
</td>

<td>
    <a href="t15.php?edit=<?php echo $result['id'];?>">edit</a>
</td>

</tr><?php 

        }
        ?>























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