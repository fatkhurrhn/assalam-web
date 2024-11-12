<?php 
include('koneksi.php');
$no_hp = $_POST['no_hp'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tanggal_lahir = $_POST['tanggal_lahir'];

$cek = mysqli_query($con, "select * from tabel_user where no_hp = '$no_hp'");
$cek = mysqli_num_rows($cek);

if ($cek == 0) {
    mysqli_query($con, "INSERT INTO tabel_user (`username`, `password`, `nama`, `no_hp`, `jenis_kelamin`, 
    `tanggal_lahir`, `level`) VALUES ('$username', '$password', '$nama', '$no_hp', '$jenis_kelamin', 
    '$tanggal_lahir', 'user')");
    echo json_encode(array("response" => "User berhasil terdaftar"));
}
else {
    echo json_encode(array("response" => "Sudah terdapat user dengan no. hp yang ingin didaftarkan"));
}

 ?>