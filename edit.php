
<?php
include ('db.php');
if(!isset($_SESSION['IS_LOGIN'])){
    header('location:login.php');
    die();

}
$id=mysqli_real_escape_string($con,$_GET['id']);


if(isset($_POST['submit'])){
$name=mysqli_real_escape_string($con,$_POST['name']);
$city=mysqli_real_escape_string($con,$_POST['city']);
mysqli_query($con,"update students set name='$name', city='$city' where id='$id'");
header("location:index.php");
die();

}
$res=mysqli_query($con,"select * from students where id='$id' ");
if(mysqli_num_rows($res)==0){
    header("location:index.php");
    die();
}
$row=mysqli_fetch_assoc($res);
$name=$row['name'];
$city=$row['city'];
?>
<a href="logout.php">logout</a>
<form method="post">

<tr>

<td>Name</td>
<td><input type="textbox" name="name" value="<?php echo $name ?>"/></td>
</tr>
<tr>

<td>City</td>
<td><input type="textbox" name="city" value="<?php echo $city ?>"/></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="submit"/></td>

</tr>

</form>
