<?php

$servername='localhost';
$username='root';
$password='';
$dbname='php_auth';

$conn= new mysqli($servername,$username,$password,$dbname);

if($conn){

    // echo"Connection Succesfull";
}

else{
    echo"not connected";
}
?>