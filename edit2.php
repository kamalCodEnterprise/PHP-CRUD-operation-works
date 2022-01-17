<?php
$id=$_GET['id']; 

$con=mysqli_connect("localhost","root","","phpprac");
if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $class=$_POST['class'];
    mysqli_query($con,"update students set name='$name', class='$class' where id='$id'");
header('location:index.php');
die();

}
$res=mysqli_query($con,"select * from students where id='$id'");
$row=mysqli_fetch_assoc($res);
$name=$row['name'];
$class=$row['class'];
?>

<form method="post">

<tr>
    <td>name</td>
    <td><input type="text" name="name" value="<?php echo $name  ?>"/></td>
</tr>
<tr>
    <td>class</td>
    <td><input type="text" name="class" value="<?php echo $class  ?>"/></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="submit"/></td>

</tr>
</form>