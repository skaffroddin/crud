<?php
include('config.php');
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
// echo $name , $email, $phone, $gender, $country, $languages;
$sql="insert into `user` (name, email, phone, gender, country, languages, image) values('$name', '$email', '$phone', '$gender', '$country', '$languages', '$folder')";

$conn->query($sql);
if($conn){

    echo '<script>alert("Data Inserted")</script>';
    echo '<script>window.location = "index.php";</script>';}

else{
    echo"Not inserted";
}




?>