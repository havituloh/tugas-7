<?php 
include('connection.php');
$id = $_GET['id'];

$delete = mysqli_query($connect, "UPDATE t_article SET deleted = 1 WHERE id = '$id'");
 
if($delete)
 header('Location: list.php');
else 
 echo 'delete data gagal'; 

?>