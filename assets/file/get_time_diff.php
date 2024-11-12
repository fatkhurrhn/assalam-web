<?php
    include('koneksi.php');
    $time = strtotime($_GET['time']);
    $current_time = strtotime(date("Y-m-d H:i:s"));

    echo json_encode(array("time_difference"=> $current_time - $time));

?>