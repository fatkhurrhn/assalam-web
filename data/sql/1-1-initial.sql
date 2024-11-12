/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE IF NOT EXISTS `asc_api_session` (
  `id_asc_api_session` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(5) NOT NULL DEFAULT '0',
  `level` varchar(50) NOT NULL DEFAULT '0',
  `token` varchar(50) NOT NULL DEFAULT '0',
  `expired` datetime DEFAULT NULL,
  PRIMARY KEY (`id_asc_api_session`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `asc_grup_siswa` (
  `id_grup_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL DEFAULT '0',
  `id_guru` int(5) DEFAULT '0',
  `id_kelas` int(5) DEFAULT '0',
  `doc_status` varchar(20) NOT NULL DEFAULT 'DRAFT',
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id_grup_siswa`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `asc_grup_siswa_detail` (
  `id_grup_siswa_detail` int(11) NOT NULL AUTO_INCREMENT,
  `id_grup_siswa` int(11) NOT NULL DEFAULT '0',
  `id_siswa` int(15) NOT NULL DEFAULT '0',
  `doc_status` varchar(20) NOT NULL DEFAULT 'DRAFT',
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id_grup_siswa_detail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `asc_grup_siswa_detail` DISABLE KEYS */;
/*!40000 ALTER TABLE `asc_grup_siswa_detail` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `asc_jadwal_ujian` (
  `id_jadwal_ujian` int(5) NOT NULL AUTO_INCREMENT,
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
  `updated` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_jadwal_ujian`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `asc_jadwal_ujian_reserve` (
  `id_jadwal_ujian_reserve` int(5) NOT NULL AUTO_INCREMENT,
  `id_ujian` int(5) NOT NULL DEFAULT '0',
  `id_kelas` int(5) DEFAULT '0',
  `id_grup_siswa` int(5) DEFAULT '0',
  `id_siswa` int(5) DEFAULT '0',
  `id_guru` int(5) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id_jadwal_ujian_reserve`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `asc_jadwal_ujian_reserve` DISABLE KEYS */;
/*!40000 ALTER TABLE `asc_jadwal_ujian_reserve` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `asc_materi` (
  `id_materi` int(5) NOT NULL AUTO_INCREMENT,
  `id_guru` int(5) NOT NULL DEFAULT '0',
  `id_mapel` int(5) NOT NULL DEFAULT '0',
  `judul` varchar(255) NOT NULL DEFAULT '0',
  `materi` text,
  `gambar` varchar(255) DEFAULT NULL,
  `suara` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `doc_status` varchar(20) NOT NULL DEFAULT 'draft',
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id_materi`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `asc_materi_penerima` (
  `id_materi_penerima` int(5) NOT NULL AUTO_INCREMENT,
  `id_materi` int(5) NOT NULL DEFAULT '0',
  `id_siswa` int(5) NOT NULL DEFAULT '0',
  `id_guru` int(5) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '0',
  `id_kelas` int(5) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id_materi_penerima`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `asc_pertanyaan` (
  `id_pertanyaan` int(5) NOT NULL AUTO_INCREMENT,
  `id_guru` int(5) NOT NULL DEFAULT '0',
  `id_ujian` int(5) NOT NULL,
  `pertanyaan` text,
  `gambar` varchar(255) DEFAULT NULL,
  `suara` varchar(255) DEFAULT NULL,
  `jawaban` text,
  `no_urut` int(5) NOT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_pertanyaan`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `asc_peserta_ujian` (
  `id_peserta_ujian` int(5) NOT NULL AUTO_INCREMENT,
  `id_jadwal_ujian` int(5) NOT NULL,
  `id_siswa` int(10) DEFAULT NULL,
  `waktu_join` timestamp NULL DEFAULT NULL,
  `waktu_submit` timestamp NULL DEFAULT NULL,
  `nilai` float NOT NULL DEFAULT '0',
  `doc_status` varchar(20) NOT NULL DEFAULT 'draft',
  `created` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_peserta_ujian`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `asc_pilihan` (
  `id_pilihan` int(5) NOT NULL AUTO_INCREMENT,
  `id_pertanyaan` int(5) DEFAULT NULL,
  `text` text,
  `gambar` varchar(255) DEFAULT NULL,
  `suara` varchar(255) DEFAULT NULL,
  `huruf` varchar(2) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_pilihan`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `asc_submission` (
  `id_submission` int(5) NOT NULL AUTO_INCREMENT,
  `id_peserta_ujian` int(5) NOT NULL,
  `id_pertanyaan` int(5) NOT NULL,
  `jawaban` text,
  `gambar` varchar(255) DEFAULT NULL,
  `suara` varchar(255) DEFAULT NULL,
  `koreksi` text,
  `nilai` double NOT NULL DEFAULT '0',
  `doc_status` varchar(20) NOT NULL DEFAULT 'DRAFT',
  `created` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_submission`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `asc_ujian` (
  `id_ujian` int(5) NOT NULL AUTO_INCREMENT,
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
  `updated` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_ujian`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
