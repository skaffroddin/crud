<?php
include('config.php');
include('header.php');
$sql="select * from `user`";
$data= $conn->query($sql);
?>

<html>
    <head>

    <link rel="stylesheet" href="style.css">
</head>
    <body>

<table border="1px">
<thead>

<tr>
    <td>Name</td>
    <td>Email</td>
    <td>Phone</td>
    <td>Gender</td>
    <td>Country</td>
    <td>Languages</td>
    <td>Image</td>
    <td>Action</td>

</tr>
</thead>


<?php while($result= $data->fetch_assoc()){
?>
<tr>
<td> <?php echo $result ['name'];?></td>
<td> <?php echo $result ['email'];?></td>
<td> <?php echo $result ['phone'];?></td>
<td> <?php echo $result ['gender'];?></td>
<td> <?php echo $result ['country'];?></td>
<td> <?php echo $result ['languages'];?></td>

<td><img src="<?php echo $result ['image'];?>" height="20px" width="20px"> </td>

<td><a href="update.php?eid=<?php echo $result['id'];?>">Edit</a>| <a href="delete.php?eid=<?php echo $result['id'];?>">Delete</a></td>

</tr>

<?php
}
?>


</table>

</body>

</html>
