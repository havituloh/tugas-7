<?php 
include('connection.php');
$id = $_GET['id'];

$query = mysqli_query($connect, "SELECT * FROM t_article WHERE id=$id LIMIT 1");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
// print_r($result); exit();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit Data Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <form action="update.php" method="post" name="form1">
        <hr>
        <table class="table table-borderless">
            <tr>
                <td></td>            
                <td><input type="hidden" name="id" value="<?php echo $result[0]['id'] ?>" required></td>
            </tr>
            <tr>
                <td>Judul</td>
                <td><input type="text" name="tittle" value="<?php echo $result[0]['tittle'] ?>" required></td>
            </tr>
            <tr>
                <td>Content</td>
                <td><textarea name="content" id="content" cols="90" rows="25"><?php echo $result[0]['content'] ?></textarea></td>                
            </tr>
            <tr>
                <td>Author</td>
                <td><input type="text" name="author" value="<?php echo $result[0]['author'] ?>"></td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td><input type="text" name="picture" value="<?php echo $result[0]['picture'] ?>"></td>
            </tr>
            <tr>
                <td>Tanggal Entry</td>
                <td><input type="text" name="d_entry" value="<?php echo $result[0]['d_entry'] ?>"></td>
            </tr>
            <tr>
                <td>Tanggal Update</td>
                <td><input type="text" name="d_update" value="<?php echo $result[0]['d_update'] ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="update" value="Update" class="btn btn-success"></td>
            </tr>
            <tr>
                <td></td>
                <td><a href="list.php">Kembali</a></td>
            </tr>
        </table>
    </form>
 </div>
</body>
</html>