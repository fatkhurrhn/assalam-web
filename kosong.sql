-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2019 at 05:15 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbs_absence`
--

-- --------------------------------------------------------

--
-- Table structure for table `asc_api_session`
--

CREATE TABLE `asc_api_session` (
  `id_asc_api_session` int(11) NOT NULL,
  `id_user` int(5) NOT NULL DEFAULT '0',
  `level` varchar(50) NOT NULL DEFAULT '0',
  `token` varchar(50) NOT NULL DEFAULT '0',
  `expired` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `asc_grup_siswa`
--

CREATE TABLE `asc_grup_siswa` (
  `id_grup_siswa` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL DEFAULT '0',
  `id_guru` int(5) DEFAULT '0',
  `id_kelas` int(5) DEFAULT '0',
  `doc_status` varchar(20) NOT NULL DEFAULT 'DRAFT',
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `asc_grup_siswa_detail`
--

CREATE TABLE `asc_grup_siswa_detail` (
  `id_grup_siswa_detail` int(11) NOT NULL,
  `id_grup_siswa` int(11) NOT NULL DEFAULT '0',
  `id_siswa` int(15) NOT NULL DEFAULT '0',
  `doc_status` varchar(20) NOT NULL DEFAULT 'DRAFT',
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `asc_jadwal_ujian`
--

CREATE TABLE `asc_jadwal_ujian` (
  `id_jadwal_ujian` int(5) NOT NULL,
  `id_guru` int(5) DEFAULT NULL,
  `id_ujian` int(5) DEFAULT NULL,
  `id_kelas` int(5) DEFAULT NULL,
  `waktu_mulai` timestamp NULL DEFAULT NULL,
  `waktu_selesai` timestamp NULL DEFAULT NULL,
  `durasi` int(11) NOT NULL DEFAULT '0',
  `total_peserta` int(3) DEFAULT '0',
  `countdown` int(5) DEFAULT '60',
  `is_manual_stop` char(1) NOT NULL DEFAULT 'N',
  `tampilkan_jawaban` char(1) NOT NULL DEFAULT 'Y',
  `doc_status` varchar(20) NOT NULL DEFAULT 'draft',
  `created` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asc_jadwal_ujian`
--


-- --------------------------------------------------------

--
-- Table structure for table `asc_jadwal_ujian_reserve`
--

CREATE TABLE `asc_jadwal_ujian_reserve` (
  `id_jadwal_ujian_reserve` int(5) NOT NULL,
  `id_ujian` int(5) NOT NULL DEFAULT '0',
  `id_kelas` int(5) DEFAULT '0',
  `id_grup_siswa` int(5) DEFAULT '0',
  `id_siswa` int(5) DEFAULT '0',
  `id_guru` int(5) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `asc_materi`
--

CREATE TABLE `asc_materi` (
  `id_materi` int(5) NOT NULL,
  `id_guru` int(5) NOT NULL DEFAULT '0',
  `id_mapel` int(5) NOT NULL DEFAULT '0',
  `judul` varchar(255) NOT NULL DEFAULT '0',
  `materi` text,
  `gambar` varchar(255) DEFAULT NULL,
  `suara` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `doc_status` varchar(20) NOT NULL DEFAULT 'draft',
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `asc_materi_penerima`
--

CREATE TABLE `asc_materi_penerima` (
  `id_materi_penerima` int(5) NOT NULL,
  `id_materi` int(5) NOT NULL DEFAULT '0',
  `id_siswa` int(5) NOT NULL DEFAULT '0',
  `id_guru` int(5) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '0',
  `id_kelas` int(5) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `asc_pertanyaan`
--

CREATE TABLE `asc_pertanyaan` (
  `id_pertanyaan` int(5) NOT NULL,
  `id_guru` int(5) NOT NULL DEFAULT '0',
  `id_ujian` int(5) NOT NULL,
  `pertanyaan` text,
  `gambar` varchar(255) DEFAULT NULL,
  `suara` varchar(255) DEFAULT NULL,
  `jawaban` text,
  `no_urut` int(5) NOT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asc_pertanyaan`
--



-- --------------------------------------------------------

--
-- Table structure for table `asc_peserta_ujian`
--

CREATE TABLE `asc_peserta_ujian` (
  `id_peserta_ujian` int(5) NOT NULL,
  `id_jadwal_ujian` int(5) NOT NULL,
  `id_siswa` int(10) DEFAULT NULL,
  `waktu_join` timestamp NULL DEFAULT NULL,
  `waktu_submit` timestamp NULL DEFAULT NULL,
  `nilai` float NOT NULL DEFAULT '0',
  `doc_status` varchar(20) NOT NULL DEFAULT 'draft',
  `created` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asc_peserta_ujian`
--



-- --------------------------------------------------------

--
-- Table structure for table `asc_pilihan`
--

CREATE TABLE `asc_pilihan` (
  `id_pilihan` int(5) NOT NULL,
  `id_pertanyaan` int(5) DEFAULT NULL,
  `text` text,
  `gambar` varchar(255) DEFAULT NULL,
  `suara` varchar(255) DEFAULT NULL,
  `huruf` varchar(2) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asc_pilihan`
--



-- --------------------------------------------------------

--
-- Table structure for table `asc_submission`
--

CREATE TABLE `asc_submission` (
  `id_submission` int(5) NOT NULL,
  `id_peserta_ujian` int(5) NOT NULL,
  `id_pertanyaan` int(5) NOT NULL,
  `jawaban` text,
  `gambar` varchar(255) DEFAULT NULL,
  `suara` varchar(255) DEFAULT NULL,
  `koreksi` text,
  `nilai` double NOT NULL DEFAULT '0',
  `doc_status` varchar(20) NOT NULL DEFAULT 'DRAFT',
  `created` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `asc_ujian`
--

CREATE TABLE `asc_ujian` (
  `id_ujian` int(5) NOT NULL,
  `id_guru` int(5) NOT NULL,
  `id_mapel` int(3) NOT NULL,
  `kode` varchar(50) DEFAULT NULL,
  `tipe` varchar(50) NOT NULL COMMENT 'E: Essay, PG : Pilihan Ganda',
  `kategori` varchar(2) DEFAULT NULL COMMENT 'U : Ujian, CC : Cerdas Cermat, PR : Pekerjaan Rumah, LKS : lks, Q : Kusioner, DG : Diskusi grup',
  `judul` text NOT NULL,
  `deskripsi` text,
  `jumlah_pilihan` tinyint(4) NOT NULL DEFAULT '0',
  `jumlah_pertanyaan` int(11) DEFAULT '0',
  `doc_status` varchar(20) NOT NULL DEFAULT 'DRAFT',
  `created` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asc_ujian`
--


-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions_ci`
--

CREATE TABLE `ci_sessions_ci` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `daemons`
--

CREATE TABLE `daemons` (
  `Start` text NOT NULL,
  `Info` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gammu`
--

CREATE TABLE `gammu` (
  `Version` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gammu`
--


-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ReceivingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Text` text NOT NULL,
  `SenderNumber` varchar(20) NOT NULL DEFAULT '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text NOT NULL,
  `SMSCNumber` varchar(20) NOT NULL DEFAULT '',
  `Class` int(11) NOT NULL DEFAULT '-1',
  `TextDecoded` text NOT NULL,
  `ID` int(10) UNSIGNED NOT NULL,
  `RecipientID` text NOT NULL,
  `Processed` enum('false','true') NOT NULL DEFAULT 'false'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inbox`
--


-- --------------------------------------------------------

--
-- Table structure for table `outbox`
--

CREATE TABLE `outbox` (
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SendingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Text` text,
  `DestinationNumber` varchar(20) NOT NULL DEFAULT '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text,
  `Class` int(11) DEFAULT '-1',
  `TextDecoded` text NOT NULL,
  `ID` int(10) UNSIGNED NOT NULL,
  `MultiPart` enum('false','true') DEFAULT 'false',
  `RelativeValidity` int(11) DEFAULT '-1',
  `SenderID` varchar(255) DEFAULT NULL,
  `SendingTimeOut` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `DeliveryReport` enum('default','yes','no') DEFAULT 'default',
  `CreatorID` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `outbox`
--


-- --------------------------------------------------------

--
-- Table structure for table `outbox_multipart`
--

CREATE TABLE `outbox_multipart` (
  `Text` text,
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text,
  `Class` int(11) DEFAULT '-1',
  `TextDecoded` text,
  `ID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `SequencePosition` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pbk`
--

CREATE TABLE `pbk` (
  `ID` int(11) NOT NULL,
  `GroupID` int(11) NOT NULL DEFAULT '-1',
  `Name` text NOT NULL,
  `Number` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pbk_groups`
--

CREATE TABLE `pbk_groups` (
  `Name` text NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `phones`
--

CREATE TABLE `phones` (
  `ID` text NOT NULL,
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `TimeOut` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Send` enum('yes','no') NOT NULL DEFAULT 'no',
  `Receive` enum('yes','no') NOT NULL DEFAULT 'no',
  `IMEI` varchar(35) NOT NULL,
  `Client` text NOT NULL,
  `Battery` int(11) NOT NULL DEFAULT '0',
  `Signal` int(11) NOT NULL DEFAULT '0',
  `Sent` int(11) NOT NULL DEFAULT '0',
  `Received` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phones`
--


-- --------------------------------------------------------

--
-- Table structure for table `sentitems`
--

CREATE TABLE `sentitems` (
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SendingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `DeliveryDateTime` timestamp NULL DEFAULT NULL,
  `Text` text NOT NULL,
  `DestinationNumber` varchar(20) NOT NULL DEFAULT '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text NOT NULL,
  `SMSCNumber` varchar(20) NOT NULL DEFAULT '',
  `Class` int(11) NOT NULL DEFAULT '-1',
  `TextDecoded` text NOT NULL,
  `ID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `SenderID` varchar(255) NOT NULL,
  `SequencePosition` int(11) NOT NULL DEFAULT '1',
  `Status` enum('SendingOK','SendingOKNoReport','SendingError','DeliveryOK','DeliveryFailed','DeliveryPending','DeliveryUnknown','Error') NOT NULL DEFAULT 'SendingOK',
  `StatusError` int(11) NOT NULL DEFAULT '-1',
  `TPMR` int(11) NOT NULL DEFAULT '-1',
  `RelativeValidity` int(11) NOT NULL DEFAULT '-1',
  `CreatorID` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sentitems`
--


-- --------------------------------------------------------

--
-- Table structure for table `sms_auto`
--

CREATE TABLE `sms_auto` (
  `id_pesan` int(3) NOT NULL,
  `isi` text,
  `jenis` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms_auto`
--


-- --------------------------------------------------------

--
-- Table structure for table `tabel_absen`
--

CREATE TABLE `tabel_absen` (
  `id_absen` int(10) NOT NULL,
  `id_penempatan` int(10) NOT NULL,
  `tgl` varchar(20) NOT NULL,
  `jam_masuk` varchar(20) NOT NULL,
  `absen_masuk` varchar(20) NOT NULL,
  `valid_masuk` varchar(10) DEFAULT NULL,
  `sms_masuk` varchar(50) DEFAULT NULL,
  `jam_pulang` varchar(20) NOT NULL,
  `absen_pulang` varchar(20) NOT NULL,
  `valid_pulang` varchar(10) DEFAULT NULL,
  `sms_pulang` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_absen`
--


-- --------------------------------------------------------

--
-- Table structure for table `tabel_absen_kehadiran_guru`
--

CREATE TABLE `tabel_absen_kehadiran_guru` (
  `id_absen_kehadiran_guru` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `tgl` varchar(100) DEFAULT NULL,
  `jam` varchar(100) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_absen_kehadiran_guru`
--



-- --------------------------------------------------------

--
-- Table structure for table `tabel_absen_mapel`
--

CREATE TABLE `tabel_absen_mapel` (
  `id_absen_mapel` int(10) NOT NULL,
  `id_penempatan` int(20) DEFAULT NULL,
  `id_jadwal` int(10) DEFAULT NULL,
  `tgl` varchar(30) DEFAULT NULL,
  `jam` varchar(20) DEFAULT NULL,
  `absen` varchar(30) DEFAULT NULL,
  `valid` varchar(30) DEFAULT NULL,
  `rekap` varchar(30) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_absen_mapel`
--


-- --------------------------------------------------------

--
-- Table structure for table `tabel_absen_non_guru`
--

CREATE TABLE `tabel_absen_non_guru` (
  `id_absen_non_guru` int(11) NOT NULL,
  `id_non_guru` int(11) NOT NULL,
  `tgl` varchar(50) NOT NULL,
  `jam` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_absen_non_guru`
--



-- --------------------------------------------------------

--
-- Table structure for table `tabel_cabang`
--

CREATE TABLE `tabel_cabang` (
  `id_cabang` int(5) NOT NULL,
  `cabang` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_guru`
--

CREATE TABLE `tabel_guru` (
  `id_guru` int(5) NOT NULL,
  `id_jenjang` int(5) DEFAULT NULL,
  `nik` varchar(50) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `alias` varchar(30) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` varchar(30) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `no_hp` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `ijazah` varchar(20) DEFAULT NULL,
  `pend_terakhir` varchar(100) DEFAULT NULL,
  `gambar` text,
  `alamat` varchar(255) DEFAULT NULL,
  `unit_kerja` varchar(50) DEFAULT NULL,
  `tmt` varchar(20) DEFAULT NULL,
  `pass_sync` varchar(10) NOT NULL,
  `status_guru_bk` varchar(10) NOT NULL,
  `status_kepsek` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_guru`
--


-- --------------------------------------------------------

--
-- Table structure for table `tabel_jadwal`
--

CREATE TABLE `tabel_jadwal` (
  `id_jadwal` int(10) NOT NULL,
  `id_ta` int(10) DEFAULT NULL,
  `id_jenjang` int(5) DEFAULT NULL,
  `id_kelas` int(5) DEFAULT NULL,
  `id_mapel` int(10) DEFAULT NULL,
  `id_guru` int(10) DEFAULT NULL,
  `hari` varchar(30) DEFAULT NULL,
  `jam_awal` varchar(30) DEFAULT NULL,
  `jam_akhir` varchar(30) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_jadwal`
--



-- --------------------------------------------------------

--
-- Table structure for table `tabel_jam_masuk`
--

CREATE TABLE `tabel_jam_masuk` (
  `id_jam_masuk` int(11) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_jam_masuk`
--



-- --------------------------------------------------------

--
-- Table structure for table `tabel_jenjang`
--

CREATE TABLE `tabel_jenjang` (
  `id_jenjang` int(5) NOT NULL,
  `jenjang` varchar(20) DEFAULT NULL,
  `jam_masuk` varchar(30) NOT NULL,
  `jam_pulang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_jenjang`
--



-- --------------------------------------------------------

--
-- Table structure for table `tabel_kalender`
--

CREATE TABLE `tabel_kalender` (
  `id_kalender` int(5) NOT NULL,
  `tanggal` varchar(100) DEFAULT NULL,
  `agenda` text,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_kalender`
--



-- --------------------------------------------------------

--
-- Table structure for table `tabel_kategori`
--

CREATE TABLE `tabel_kategori` (
  `id_kategori` int(5) NOT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `link` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kat_mapel`
--

CREATE TABLE `tabel_kat_mapel` (
  `id_kat_mapel` int(5) NOT NULL,
  `kategori_mapel` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_kat_mapel`
--



-- --------------------------------------------------------

--
-- Table structure for table `tabel_kelas`
--

CREATE TABLE `tabel_kelas` (
  `id_kelas` int(3) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `id_guru` int(3) DEFAULT NULL,
  `id_jenjang` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_kelas`
--



-- --------------------------------------------------------

--
-- Table structure for table `tabel_kelulusan`
--

CREATE TABLE `tabel_kelulusan` (
  `id_kelulusan` int(5) NOT NULL,
  `id_siswa` varchar(10) DEFAULT NULL,
  `id_ta` int(5) DEFAULT NULL,
  `id_kelas` int(5) DEFAULT NULL,
  `angkatan` varchar(10) DEFAULT NULL,
  `tgl_lulus` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_mapel`
--

CREATE TABLE `tabel_mapel` (
  `id_mapel` int(3) NOT NULL,
  `id_jenjang` int(5) DEFAULT NULL,
  `id_kat_mapel` int(5) DEFAULT NULL,
  `mapel` varchar(50) NOT NULL,
  `kkm` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_mapel`
--


-- --------------------------------------------------------

--
-- Table structure for table `tabel_nilai`
--

CREATE TABLE `tabel_nilai` (
  `semester` varchar(20) NOT NULL,
  `tahun_ajaran` varchar(20) NOT NULL,
  `id_kelas` int(3) NOT NULL,
  `id_siswa` int(3) NOT NULL,
  `id_mapel` int(3) NOT NULL,
  `nilai` double NOT NULL,
  `predikat` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_non_guru`
--

CREATE TABLE `tabel_non_guru` (
  `id_non_guru` int(5) NOT NULL,
  `nip` varchar(50) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `alias` varchar(30) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` varchar(30) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `no_hp` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `ijazah` varchar(20) DEFAULT NULL,
  `pend_terakhir` varchar(100) DEFAULT NULL,
  `gambar` text,
  `alamat` varchar(255) DEFAULT NULL,
  `unit_kerja` varchar(50) DEFAULT NULL,
  `tmt` varchar(20) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `pass_sync` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_non_guru`
--


-- --------------------------------------------------------

--
-- Table structure for table `tabel_pengampu`
--

CREATE TABLE `tabel_pengampu` (
  `id_pengampu` int(5) NOT NULL,
  `nik` varchar(50) DEFAULT NULL,
  `id_mapel` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_pengampu`
--


-- --------------------------------------------------------

--
-- Table structure for table `tabel_schedule`
--

CREATE TABLE `tabel_schedule` (
  `id_schedule` int(5) NOT NULL,
  `tipe_sms` varchar(50) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `aturan` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_schedule`
--



-- --------------------------------------------------------

--
-- Table structure for table `tabel_setting`
--

CREATE TABLE `tabel_setting` (
  `id_setting` int(5) NOT NULL,
  `logo_mini` varchar(100) DEFAULT NULL,
  `logo_gambar` varchar(100) DEFAULT NULL,
  `logo_favicon` varchar(100) NOT NULL,
  `nik` varchar(30) DEFAULT NULL,
  `kartu_gsm` varchar(100) DEFAULT NULL,
  `cek_pulsa` varchar(100) DEFAULT NULL,
  `metode` varchar(30) DEFAULT NULL,
  `kode_aktivasi` varchar(30) DEFAULT NULL,
  `link_tujuan` varchar(100) DEFAULT NULL,
  `logo_besar` varchar(100) DEFAULT NULL,
  `logo_sekolah` varchar(100) DEFAULT NULL,
  `pimpinan` varchar(100) NOT NULL,
  `akun_gmail` varchar(100) NOT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `kop_surat` varchar(100) DEFAULT NULL,
  `ttd` varchar(100) DEFAULT NULL,
  `telat` varchar(100) DEFAULT NULL,
  `toleransi_jam_akhir` varchar(10) NOT NULL,
  `jam_pulang` varchar(10) NOT NULL,
  `radius` varchar(50) NOT NULL,
  `lng` varchar(50) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `status_absen_pulang` varchar(10) NOT NULL,
  `kota` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_setting`
--

INSERT INTO `tabel_setting` (`id_setting`, `logo_mini`, `logo_gambar`, `logo_favicon`, `nik`, `kartu_gsm`, `cek_pulsa`, `metode`, `kode_aktivasi`, `link_tujuan`, `logo_besar`, `logo_sekolah`, `pimpinan`, `akun_gmail`, `alamat`, `website`, `kop_surat`, `ttd`, `telat`, `toleransi_jam_akhir`, `jam_pulang`, `radius`, `lng`, `lat`, `status_absen_pulang`, `kota`) VALUES
(1, '18', 'logosiakad.png', 'backpack-12.png', 'NIP. 197007211998021002', 'Indosat', '*123#', 'Sewa Server', '9387', 'http://absen.my.id/', 'SMP Negeri 18 Makassar', 'SMP_18.png', 'Muhammad Guntur, S.Pd., M.Pd.', 'smpnegeri18makassar@gmail.com', 'Jl. Daeng Tata BTN Hartaco Indah Blok II A', 'http://www.smpnegeri18makassar.sch.id', 'Kop_Surat2.jpg', 'tanda.png', '15', '10', '15:00', '500', '119.461243', '-5.149809', '0', 'Makassar');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_siswa`
--

CREATE TABLE `tabel_siswa` (
  `id_siswa` int(10) NOT NULL,
  `id_jenjang` int(5) DEFAULT NULL,
  `nama_lengkap` text,
  `nisn` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `no_hp` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `ket_asal` varchar(100) NOT NULL,
  `nama_ayah` varchar(50) DEFAULT NULL,
  `nama_ibu` varchar(50) DEFAULT NULL,
  `gambar` text,
  `tgl_daftar` varchar(50) DEFAULT NULL,
  `no_induk_kelas` varchar(50) DEFAULT NULL,
  `telp_ayah` varchar(15) DEFAULT NULL,
  `telp_ibu` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_siswa`
--


-- --------------------------------------------------------

--
-- Table structure for table `tabel_siswakelas`
--

CREATE TABLE `tabel_siswakelas` (
  `id_penempatan` int(11) NOT NULL,
  `id_ta` int(5) NOT NULL,
  `id_kelas` int(3) NOT NULL,
  `id_siswa` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_siswakelas`
--



-- --------------------------------------------------------

--
-- Table structure for table `tabel_siswalulus`
--

CREATE TABLE `tabel_siswalulus` (
  `id_siswalulus` int(11) NOT NULL,
  `id_jenjang` int(11) DEFAULT NULL,
  `nama_lengkap` text,
  `nisn` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` varchar(50) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `no_hp` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `asal_sekolah` varchar(100) DEFAULT NULL,
  `ket_asal` varchar(100) DEFAULT NULL,
  `nama_ayah` varchar(50) DEFAULT NULL,
  `nama_ibu` varchar(50) DEFAULT NULL,
  `gambar` text,
  `tgl_daftar` varchar(50) DEFAULT NULL,
  `no_induk_kelas` varchar(50) DEFAULT NULL,
  `telp_ayah` varchar(15) DEFAULT NULL,
  `telp_ibu` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_tahunajaran`
--

CREATE TABLE `tabel_tahunajaran` (
  `id_ta` int(5) NOT NULL,
  `tahun_ajaran` varchar(20) DEFAULT NULL,
  `tgl_awal` varchar(20) DEFAULT NULL,
  `tgl_akhir` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_tahunajaran`
--



-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  `id_cabang` int(11) NOT NULL,
  `avatar` text,
  `tgl_daftar` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_user`
--

INSERT INTO `tabel_user` (`id_user`, `username`, `password`, `nama`, `level`, `id_cabang`, `avatar`, `tgl_daftar`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Mhawi', 'administrator', 1, 'Mhawi.png', '2016-09-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asc_api_session`
--
ALTER TABLE `asc_api_session`
  ADD PRIMARY KEY (`id_asc_api_session`);

--
-- Indexes for table `asc_grup_siswa`
--
ALTER TABLE `asc_grup_siswa`
  ADD PRIMARY KEY (`id_grup_siswa`);

--
-- Indexes for table `asc_grup_siswa_detail`
--
ALTER TABLE `asc_grup_siswa_detail`
  ADD PRIMARY KEY (`id_grup_siswa_detail`);

--
-- Indexes for table `asc_jadwal_ujian`
--
ALTER TABLE `asc_jadwal_ujian`
  ADD PRIMARY KEY (`id_jadwal_ujian`);

--
-- Indexes for table `asc_jadwal_ujian_reserve`
--
ALTER TABLE `asc_jadwal_ujian_reserve`
  ADD PRIMARY KEY (`id_jadwal_ujian_reserve`);

--
-- Indexes for table `asc_materi`
--
ALTER TABLE `asc_materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `asc_materi_penerima`
--
ALTER TABLE `asc_materi_penerima`
  ADD PRIMARY KEY (`id_materi_penerima`);

--
-- Indexes for table `asc_pertanyaan`
--
ALTER TABLE `asc_pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`);

--
-- Indexes for table `asc_peserta_ujian`
--
ALTER TABLE `asc_peserta_ujian`
  ADD PRIMARY KEY (`id_peserta_ujian`);

--
-- Indexes for table `asc_pilihan`
--
ALTER TABLE `asc_pilihan`
  ADD PRIMARY KEY (`id_pilihan`);

--
-- Indexes for table `asc_submission`
--
ALTER TABLE `asc_submission`
  ADD PRIMARY KEY (`id_submission`);

--
-- Indexes for table `asc_ujian`
--
ALTER TABLE `asc_ujian`
  ADD PRIMARY KEY (`id_ujian`);

--
-- Indexes for table `ci_sessions_ci`
--
ALTER TABLE `ci_sessions_ci`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `outbox`
--
ALTER TABLE `outbox`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `outbox_multipart`
--
ALTER TABLE `outbox_multipart`
  ADD PRIMARY KEY (`ID`,`SequencePosition`);

--
-- Indexes for table `pbk`
--
ALTER TABLE `pbk`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pbk_groups`
--
ALTER TABLE `pbk_groups`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`IMEI`);

--
-- Indexes for table `sentitems`
--
ALTER TABLE `sentitems`
  ADD PRIMARY KEY (`ID`,`SequencePosition`);

--
-- Indexes for table `sms_auto`
--
ALTER TABLE `sms_auto`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `tabel_absen`
--
ALTER TABLE `tabel_absen`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indexes for table `tabel_absen_kehadiran_guru`
--
ALTER TABLE `tabel_absen_kehadiran_guru`
  ADD PRIMARY KEY (`id_absen_kehadiran_guru`);

--
-- Indexes for table `tabel_absen_mapel`
--
ALTER TABLE `tabel_absen_mapel`
  ADD PRIMARY KEY (`id_absen_mapel`);

--
-- Indexes for table `tabel_absen_non_guru`
--
ALTER TABLE `tabel_absen_non_guru`
  ADD PRIMARY KEY (`id_absen_non_guru`);

--
-- Indexes for table `tabel_cabang`
--
ALTER TABLE `tabel_cabang`
  ADD PRIMARY KEY (`id_cabang`);

--
-- Indexes for table `tabel_guru`
--
ALTER TABLE `tabel_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `tabel_jadwal`
--
ALTER TABLE `tabel_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tabel_jam_masuk`
--
ALTER TABLE `tabel_jam_masuk`
  ADD PRIMARY KEY (`id_jam_masuk`);

--
-- Indexes for table `tabel_jenjang`
--
ALTER TABLE `tabel_jenjang`
  ADD PRIMARY KEY (`id_jenjang`);

--
-- Indexes for table `tabel_kalender`
--
ALTER TABLE `tabel_kalender`
  ADD PRIMARY KEY (`id_kalender`);

--
-- Indexes for table `tabel_kategori`
--
ALTER TABLE `tabel_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tabel_kat_mapel`
--
ALTER TABLE `tabel_kat_mapel`
  ADD PRIMARY KEY (`id_kat_mapel`);

--
-- Indexes for table `tabel_kelas`
--
ALTER TABLE `tabel_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tabel_kelulusan`
--
ALTER TABLE `tabel_kelulusan`
  ADD PRIMARY KEY (`id_kelulusan`);

--
-- Indexes for table `tabel_mapel`
--
ALTER TABLE `tabel_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `tabel_nilai`
--


--
-- Indexes for table `tabel_non_guru`
--
ALTER TABLE `tabel_non_guru`
  ADD PRIMARY KEY (`id_non_guru`);

--
-- Indexes for table `tabel_pengampu`
--
ALTER TABLE `tabel_pengampu`
  ADD PRIMARY KEY (`id_pengampu`);

--
-- Indexes for table `tabel_schedule`
--
ALTER TABLE `tabel_schedule`
  ADD PRIMARY KEY (`id_schedule`);

--
-- Indexes for table `tabel_setting`
--
ALTER TABLE `tabel_setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indexes for table `tabel_siswa`
--
ALTER TABLE `tabel_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tabel_siswakelas`
--
ALTER TABLE `tabel_siswakelas`
  ADD PRIMARY KEY (`id_penempatan`);

--
-- Indexes for table `tabel_siswalulus`
--
ALTER TABLE `tabel_siswalulus`
  ADD PRIMARY KEY (`id_siswalulus`);

--
-- Indexes for table `tabel_tahunajaran`
--
ALTER TABLE `tabel_tahunajaran`
  ADD PRIMARY KEY (`id_ta`);

--
-- Indexes for table `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asc_api_session`
--
ALTER TABLE `asc_api_session`
  MODIFY `id_asc_api_session` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `asc_grup_siswa`
--
ALTER TABLE `asc_grup_siswa`
  MODIFY `id_grup_siswa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `asc_grup_siswa_detail`
--
ALTER TABLE `asc_grup_siswa_detail`
  MODIFY `id_grup_siswa_detail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `asc_jadwal_ujian`
--
ALTER TABLE `asc_jadwal_ujian`
  MODIFY `id_jadwal_ujian` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `asc_jadwal_ujian_reserve`
--
ALTER TABLE `asc_jadwal_ujian_reserve`
  MODIFY `id_jadwal_ujian_reserve` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `asc_materi`
--
ALTER TABLE `asc_materi`
  MODIFY `id_materi` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `asc_materi_penerima`
--
ALTER TABLE `asc_materi_penerima`
  MODIFY `id_materi_penerima` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `asc_pertanyaan`
--
ALTER TABLE `asc_pertanyaan`
  MODIFY `id_pertanyaan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `asc_peserta_ujian`
--
ALTER TABLE `asc_peserta_ujian`
  MODIFY `id_peserta_ujian` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `asc_pilihan`
--
ALTER TABLE `asc_pilihan`
  MODIFY `id_pilihan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `asc_submission`
--
ALTER TABLE `asc_submission`
  MODIFY `id_submission` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `asc_ujian`
--
ALTER TABLE `asc_ujian`
  MODIFY `id_ujian` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `outbox`
--
ALTER TABLE `outbox`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1940;

--
-- AUTO_INCREMENT for table `pbk`
--
ALTER TABLE `pbk`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pbk_groups`
--
ALTER TABLE `pbk_groups`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sms_auto`
--
ALTER TABLE `sms_auto`
  MODIFY `id_pesan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tabel_absen`
--
ALTER TABLE `tabel_absen`
  MODIFY `id_absen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=944;

--
-- AUTO_INCREMENT for table `tabel_absen_kehadiran_guru`
--
ALTER TABLE `tabel_absen_kehadiran_guru`
  MODIFY `id_absen_kehadiran_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tabel_absen_mapel`
--
ALTER TABLE `tabel_absen_mapel`
  MODIFY `id_absen_mapel` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95033;

--
-- AUTO_INCREMENT for table `tabel_absen_non_guru`
--
ALTER TABLE `tabel_absen_non_guru`
  MODIFY `id_absen_non_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tabel_cabang`
--
ALTER TABLE `tabel_cabang`
  MODIFY `id_cabang` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabel_guru`
--
ALTER TABLE `tabel_guru`
  MODIFY `id_guru` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `tabel_jadwal`
--
ALTER TABLE `tabel_jadwal`
  MODIFY `id_jadwal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=706;

--
-- AUTO_INCREMENT for table `tabel_jam_masuk`
--
ALTER TABLE `tabel_jam_masuk`
  MODIFY `id_jam_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tabel_jenjang`
--
ALTER TABLE `tabel_jenjang`
  MODIFY `id_jenjang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tabel_kalender`
--
ALTER TABLE `tabel_kalender`
  MODIFY `id_kalender` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tabel_kategori`
--
ALTER TABLE `tabel_kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabel_kat_mapel`
--
ALTER TABLE `tabel_kat_mapel`
  MODIFY `id_kat_mapel` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tabel_kelas`
--
ALTER TABLE `tabel_kelas`
  MODIFY `id_kelas` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `tabel_kelulusan`
--
ALTER TABLE `tabel_kelulusan`
  MODIFY `id_kelulusan` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabel_mapel`
--
ALTER TABLE `tabel_mapel`
  MODIFY `id_mapel` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tabel_non_guru`
--
ALTER TABLE `tabel_non_guru`
  MODIFY `id_non_guru` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tabel_pengampu`
--
ALTER TABLE `tabel_pengampu`
  MODIFY `id_pengampu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `tabel_schedule`
--
ALTER TABLE `tabel_schedule`
  MODIFY `id_schedule` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tabel_setting`
--
ALTER TABLE `tabel_setting`
  MODIFY `id_setting` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tabel_siswakelas`
--
ALTER TABLE `tabel_siswakelas`
  MODIFY `id_penempatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1120;

--
-- AUTO_INCREMENT for table `tabel_tahunajaran`
--
ALTER TABLE `tabel_tahunajaran`
  MODIFY `id_ta` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_nilai`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
