<?php
include('config.php');
$upid = $_REQUEST['eid'];
$sql="delete from `user` where id='$upid'";
$data=$conn->query($sql);
if($data){
echo'<script>alert("Data deleted")</script>';
echo '<script>window.location = "index.php"</script>';

}
else{

    echo'Data not delete';
}

?>