<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>tambah data blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
 <div class="container">
    <form action="insert.php" method="post" name="form1">
        <hr>
        <table class="table table-borderless">
            <!-- <tr>
                <td>ID</td>            
                <td><input type="text" name="id" required></td>
            </tr> -->
            <tr>
                <td>Judul</td>
                <td><input type="text" name="tittle" required></td>
            </tr>
            <tr>
                <td>Content</td>
                <td><textarea name="content" id="content" cols="90" rows="25"></textarea></td>                
            </tr>
            <tr>
                <td>Author</td>
                <td><input type="text" name="author"></textarea></td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td><input type="text" name="picture"></textarea></td>
            </tr>
            <tr>
                <td>Tanggal Entry</td>
                <td><input type="text" name="d_entry"></td>
            </tr>
            <tr>
                <td>Tanggal Update</td>
                <td><input type="text" name="d_update"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Submit" class="btn btn-success">
                    <input type="reset" name="reset" value="Reset" class="btn btn-warning"></td>
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