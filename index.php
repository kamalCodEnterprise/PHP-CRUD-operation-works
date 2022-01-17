<?php

include ('db.php');
if(!isset($_SESSION['IS_LOGIN'])){
    header('location:login.php');
    die();

}
//$sql="update students set name='khan' where id=1";
//$sql="select * from students";
$result=mysqli_query($con,"select * from students");
// while($row=mysqli_fetch_assoc($result)){
// echo "<pre>";
// print_r($row);
// }

?>
<a href="add.php">add record</a>
<a href="logout.php">logout</a>
<table border="1">
<tr>
    <td>S.No</td>
    <td>name</td>
    <td>city</td>
    <td></td>
    
</tr>

<?php
$i=1;
while($row=mysqli_fetch_assoc($result)){ ?>
<tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['name'] ?></td>
    <td><?php echo $row['city'] ?></td>
    
    <td>
        <a href="edit.php?id=<?php echo $row['id'] ?>">Edit</a>&nbsp;&nbsp;
        <a href="delete.php?id=<?php echo $row['id'] ?>">Delet</a>
    </td>
</tr>

<?php
$i++;
}?>





</table>