<?php 
    $connect = mysqli_connect('localhost','root','','blog'); // server, username, pass, db

    // if ($connect) {
    //     echo 'Berhasil Connect';
    // } else {
    //     echo 'Gagal Connect';
    // }

    if (!$connect) {
        exit('Gagal Connect ke Database');
    } 
?>