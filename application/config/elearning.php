<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config["user_level"] = array("admin" => "admin",
								"guru" => "guru",
								"non guru" => "non guru",
								"siswa" => "siswa"
							);
$config["upload_path"] = "./assets/upload/";
$config["doc_status_draft"] = "draft";
$config["doc_status_publish"] = "publish";
$config["doc_status_submit"] = "submit";
$config["doc_status_koreksi"] = "koreksi";
$config["doc_status_join"] = "join";
$config["doc_status_done"] = "done";
$config["pilihan_abjad"] = "a b c d e f g h i j k l m n o p q r s t u v w x y z";
$config["ujian_countdown"] = 60;
$config["ujian_tipe"] = array("p" => "Pilihan Ganda", "e" => "Essay");
$config["server_key"] = "123456";