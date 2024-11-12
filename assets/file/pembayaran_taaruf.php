<?php
include('koneksi.php');
$gambar = $_POST['gambar'];
$id_user = $_POST['id_user'];

$gambar = base64_decode($gambar);
$nama_gambar = uniqid();
file_put_contents('../panel/images/' . $nama_gambar . '.png', $gambar);
$gambar = $nama_gambar . '.png';

mysqli_query($con, "insert into tabel_pembayaran_taaruf (id_user, gambar) values ('$id_user', '$gambar')");

echo json_encode(array("status" => "ok"));
?>