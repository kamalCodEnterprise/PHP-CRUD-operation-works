<?php

include ('db.php');
$id=mysqli_real_escape_string($con,$_GET['id']);
 if($id==''){
    header("location:index.php");
    die();
}
 mysqli_query($con,"delete from students where id='$id'");
header('location:index.php');
die();
?>
