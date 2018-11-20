<?php 
include ('connection.php');

$query = mysqli_query($connect, "SELECT id, tittle, content, author, picture, cast(d_entry as date) as d_entry, cast(d_update as date) as d_update, deleted FROM t_article WHERE deleted = 0 ORDER BY 1");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);
// print_r($results); exit();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
 <div class="container-fluid">
    <hr>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
     <!-- <a class="navbar-brand" href="list.php">CRUD</a> -->
        <form class="form-inline" action="search.php">
            <input class="form-control mr-sm-2" name="keyword"  type="text" placeholder="Search Judul...">
            <button class="btn btn-success" type="submit">Search</button>
        </form>
    </nav>
    <br>
    <div class="text-right">
        <a href="add.php" method="get" class="btn btn-success">Tambah Data Blog</a><br>
    </div>    
    <h3 class="text-center">ahaTech Blog</h3>
    
    <table class="table table-bordered">
        <thead class="thead-dark text-center">
            <tr>
                <!-- <th>ID</th> -->
                <th>Judul</th>
                <th>Content</th>
                <th>Author</th>
                <th>Gambar</th>
                <th>Tanggal Entry</th>
                <th>Tanggal Update</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody class="text-white text-center">
                <?php  foreach ($results as $result) : ?>
                        <tr style="background: red">
                            <!-- <td><?php echo $result['id'] ?></td> -->
                            <td><?php echo $result['tittle'] ?></td>
                            <td><?php echo $result['content'] ?></td>
                            <td><?php echo $result['author'] ?></td>
                            <td><?php echo $result['picture'] ?></td>
                            <td><?php echo $result['d_entry'] ?></td>
                            <td><?php echo $result['d_update'] ?></td>
                            <td><a href='edit.php?id=<?php echo $result['id'] ?> '>Edit</a>  <a href='delete.php?id=<?php echo $result['id'] ?> 
                            'onclick = 'return confirm(".'"'." Are you sure you want to delete this item?".'"'.");'>Delete</a></td>
                        </tr>                    
                <?php endforeach; ?>
        </tbody>
    </table>
    <div class="text-right">
        <a href="list.php" class="btn btn-primary">Home</a>
    </div>
 </div>
</body>
</html>