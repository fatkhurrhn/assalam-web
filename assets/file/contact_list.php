<?php
    include('koneksi.php');
    $no_hp_sendiri = $_POST['no_hp'];
    $list_no_hp = $_POST['list_no_hp'];
    $list_no_hp = json_decode($list_no_hp, true);

    $data = array();

    foreach($list_no_hp as $no_hp) {
        if ($no_hp == $no_hp_sendiri) continue;

        $sql = "select * from tabel_user 
        where no_hp = '$no_hp'";
        $cek = mysqli_query($con, $sql);

        if (mysqli_num_rows($cek) == 0) {
        }
        else {
            $cek = mysqli_fetch_array($cek);

            $data[] = array("id_user" => $cek['id_user'], 
            "username" => $cek['username'], 
            "nama" => $cek['nama'], 
            "no_hp" => $cek['no_hp'], 
            "jenis_kelamin" => $cek['jenis_kelamin'], 
            "tanggal_lahir" => $cek['tanggal_lahir'],
            "gambar" => $cek['gambar']);
        }
    }

    echo json_encode($data);
?>