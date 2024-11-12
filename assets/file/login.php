<?php 
include('koneksi.php');

$no_hp = $_POST['no_hp'];
$password = md5($_POST['password']);

$cek = mysqli_query($con, "select * from tabel_user where no_hp = '$no_hp'");

if (mysqli_num_rows($cek) == 0) {
	echo json_encode(array("response" => "Tidak ada user dengan no. hp ini"));
}
else {
	$cek = mysqli_query($con, "select * from tabel_user where no_hp = '$no_hp' and password = '$password'");

	if (mysqli_num_rows($cek) == 0) {
		echo json_encode(array("response" => "Password salah"));
	}
	else {
		$cek = mysqli_fetch_array($cek);
		$id_user = $cek['id_user'];
		$username = $cek['username'];
		$nama = $cek['nama'];
		$no_hp = $cek['no_hp'];
		$jenis_kelamin = $cek['jenis_kelamin'];
		$tanggal_lahir = $cek['tanggal_lahir'];
		$status_taaruf = $cek['status_taaruf'];
		$gambar = $cek['gambar'];

		echo json_encode(array("response" => "ok", "username" => $username, "id_user" => $id_user, "nama" => $nama, "no_hp" => $no_hp, 
		"jenis_kelamin" => $jenis_kelamin, "tanggal_lahir" => $tanggal_lahir, "status_taaruf" => $status_taaruf, "gambar" => $gambar));
	}
}

 ?>