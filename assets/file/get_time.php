<?php
    include('koneksi.php');

    $current_date = date('Y-m-d H:i:s');

    echo json_encode(array("tanggal" => $current_date));
?>