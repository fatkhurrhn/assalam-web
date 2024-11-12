<?php
    include('koneksi.php');

    $id_user = $_GET['id_user'];

    $sql = mysqli_query($con, "select * from tabel_user
    where id_user = '$id_user'");
    $user = mysqli_fetch_array($sql);

    echo json_encode(array("id_user" => $user['id_user'], 
    "username" => $user['username'], 
    "nama" => $user['nama'], 
    "no_hp" => $user['no_hp'], 
    "jenis_kelamin" => $user['jenis_kelamin'], 
    "tanggal_lahir" => $user['tanggal_lahir'],
    "status_taaruf" => $user['status_taaruf'], 
    "gambar" => $user['gambar']));
?>