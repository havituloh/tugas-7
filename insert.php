<?php 
include('connection.php');

// $id = $_POST['id'];
$tittle = $_POST['tittle'];
$content = $_POST['content'];
$author = $_POST['author'];
$picture = $_POST['picture'];
$d_entry = $_POST['d_entry'];
$d_update = $_POST['d_update'];

// $insert = mysqli_query($connect, "INSERT INTO customers (id, name,age, address, salary) VALUES ('$id','$name','$age','$address','$salary')");
$insert = mysqli_query($connect, "INSERT INTO t_article (tittle,content, author, picture, d_entry, d_update) VALUES ('$tittle','$content','$author', '$picture', '$d_entry', '$d_update')");

if($insert)
 header('Location: list.php');
else 
 echo 'input data gagal'; 

?>