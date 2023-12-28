<?php
//koneksi
require 'functions.php';
//cek button
if(isset($_POST["submit"])){

    //cek data berhasil atau tidak
    if(tambah($_POST)>0){
        echo "<script>
    alert('data berhasil dihapus');
    document.location.href = 'admin.php';
</script>";


    }else{
        echo "data gagal ditambahkan";
    }

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="npm">NPM: </label>
                <input type="text" name="npm" id="npm" required>
            </li>
            <li>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="email">Email: </label>
                <input type="email" name="email" id="email" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>