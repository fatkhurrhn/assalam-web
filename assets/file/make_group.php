<?php
include('koneksi.php');
$nama = $_POST['nama'];
$gambar = $_POST['gambar'];
$id_user = $_POST['id_user'];
$list_id_user = json_decode($_POST['list_id_user']);

$gambar = base64_decode($gambar);
$nama_gambar = uniqid();
file_put_contents('../panel/images/' . $nama_gambar . '.png', $gambar);
$gambar = $nama_gambar . '.png';

mysqli_query($con, "insert into tabel_group (nama, gambar) values ('$nama', '$gambar')");
$id_group = mysqli_insert_id($con);
mysqli_query($con, "insert into tabel_group_admin (id_group, id_user) values ('$id_group', '$id_user')");

mysqli_query($con, "insert into tabel_group_member (id_group, id_user) values ('$id_group', '$id_user')");
foreach($list_id_user as $user) {
    mysqli_query($con, "insert into tabel_group_member (id_group, id_user) values ('$id_group', '$user')");
}

$current_date = date('Y-m-d H:i');

echo json_encode(array("id_group" => $id_group, "nama" => $nama, "gambar" => $gambar, "tanggal" => $current_date));
?>