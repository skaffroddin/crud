<?php
include('config.php');
$upid = $_REQUEST['id'];
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$gender=$_REQUEST['gender'];
$country=$_REQUEST['country'];
$languages=implode(",",$_REQUEST['languages']);
$filename=$_FILES['image']['name'];
$tempname=$_FILES['image']['tmp_name'];
$folder='uploads/' .$filename;
move_uploaded_file($tempname,$folder);//important
$sql="update `user` set name='$name', email='$email',phone='$phone',gender='$gender',country='$country',languages='$languages', image='$folder' where id= '$upid'";


$data=$conn->query($sql);

if($data){
    echo'<script>alert("Data updated")</script>';
    echo '<script>window.location = "index.php";</script>';;

}

else{

    echo"Data not updated";
}




?>