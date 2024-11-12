<?php
    include('koneksi.php');

    $username = $_GET['username'];

    $sql = mysqli_query($con, "select * from tabel_user
    where username like %$username% and status_taaruf='1'");
    $list = mysqli_fetch_array($sql);

    $arr = [];

    while ($user = mysqli_fetch_array($list, MYSQLI_ASSOC))
    {
        $arr[] = array("id_user" => $user['id_user'], 
        "username" => $user['username'], 
        "nama" => $user['nama'], 
        "no_hp" => $user['no_hp'], 
        "jenis_kelamin" => $user['jenis_kelamin'], 
        "tanggal_lahir" => $user['tanggal_lahir'],
        "status_taaruf" => $user['status_taaruf'], 
        "gambar" => $user['gambar']);
    }

    echo json_encode($arr);
?>