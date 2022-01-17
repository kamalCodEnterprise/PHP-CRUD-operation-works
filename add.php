
<?php
include ('db.php');
if(!isset($_SESSION['IS_LOGIN'])){
    header('location:login.php');
    die();

}

if(isset($_POST['submit'])){
$name=$_POST['name'];
$city=$_POST['city'];
mysqli_query($con,"insert into students(name,city) values('$name','$city')");
header("location:index.php");
die();

}

?>
<a href="logout.php">logout</a>
<form method="post">

<tr>

<td>name</td>
<td><input type="textbox" name="name"/></td>
</tr>
<tr>

<td>City</td>
<td><input type="textbox" name="city"/></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="submit"/></td>

</tr>

</form>
