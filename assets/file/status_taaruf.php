<?php
    include('koneksi.php');

    $id_user = $_GET['id_user'];

    $sql = mysqli_query($con, "select * from tabel_user
    where id_user = '$id_user'");
    $user = mysqli_fetch_array($sql);

    echo json_encode(array("status_taaruf" => $user['status_taaruf']));
?>