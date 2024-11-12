<?php
    include('koneksi.php');

    $id_group = $_GET['id_group'];

    $sql = mysqli_query($con, "select * from tabel_group
    where id_group = '$id_group'");
    $group = mysqli_fetch_array($sql);

    echo json_encode(array("id_group" => $group['id_group'], 
    "nama" => $group['nama'], 
    "gambar" => $group['gambar']));
?>