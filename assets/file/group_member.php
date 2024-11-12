<?php
    include('koneksi.php');

    $id_group = $_GET['id_group'];

    $sql = mysqli_query($con, "select * from tabel_group_member where id_group = '$id_group'");

    $id = array();

    while ($row = mysqli_fetch_array($sql)) {
        $id[] = array("id_user" => $row['id_user']);
    }

    echo json_encode($id);
?>