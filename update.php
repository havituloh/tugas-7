<?php
include('connection.php');

$id = $_POST['id'];
$tittle = $_POST['tittle'];
$content = $_POST['content'];
$author = $_POST['author'];
$picture = $_POST['picture'];
$d_entry = $_POST['d_entry'];
$d_update = $_POST['d_update'];

$update = mysqli_query($connect, 
"UPDATE t_article SET tittle = '$tittle', content = '$content', author = '$author', picture = '$picture', d_entry = '$d_entry', d_update = '$d_update' WHERE id = '$id'");

if($update)
 header('Location: list.php');
else 
 echo 'Update data gagal'; 

?>
