/* Trigger structure for table `asc_api_session` */

DROP TRIGGER IF EXISTS `asc_api_session_before_insert`END;
CREATE TRIGGER `asc_api_session_before_insert` BEFORE INSERT ON `asc_api_session` FOR EACH ROW BEGIN

	set new.expired = now();

END;

/* Trigger structure for table `asc_grup_siswa` */

DROP TRIGGER IF EXISTS `asc_grup_siswa_before_insert`END;
CREATE TRIGGER `asc_grup_siswa_before_insert` BEFORE INSERT ON `asc_grup_siswa` FOR EACH ROW BEGIN

	set new.created = now();

	set new.updated = now();

END;

/* Trigger structure for table `asc_grup_siswa` */

DROP TRIGGER IF EXISTS `asc_grup_siswa_before_update`END;
CREATE TRIGGER `asc_grup_siswa_before_update` BEFORE UPDATE ON `asc_grup_siswa` FOR EACH ROW BEGIN

	set new.updated = now();

END;

/* Trigger structure for table `asc_grup_siswa_detail` */

DROP TRIGGER IF EXISTS `asc_grup_siswa_detail_before_insert`END;
CREATE TRIGGER `asc_grup_siswa_detail_before_insert` BEFORE INSERT ON `asc_grup_siswa_detail` FOR EACH ROW BEGIN

set new.created = now();

	set new.updated = now();

END;

/* Trigger structure for table `asc_grup_siswa_detail` */

DROP TRIGGER IF EXISTS `asc_grup_siswa_detail_before_update`END;
CREATE TRIGGER `asc_grup_siswa_detail_before_update` BEFORE UPDATE ON `asc_grup_siswa_detail` FOR EACH ROW BEGIN

	set new.updated = now();

END;

/* Trigger structure for table `asc_jadwal_ujian` */

DROP TRIGGER IF EXISTS `asc_jadwal_ujian_before_insert`END;
CREATE TRIGGER `asc_jadwal_ujian_before_insert` BEFORE INSERT ON `asc_jadwal_ujian` FOR EACH ROW BEGIN

set new.created = now();

	set new.updated = now();

END;

/* Trigger structure for table `asc_jadwal_ujian` */

DROP TRIGGER IF EXISTS `asc_jadwal_ujian_before_update`END;
CREATE TRIGGER `asc_jadwal_ujian_before_update` BEFORE UPDATE ON `asc_jadwal_ujian` FOR EACH ROW BEGIN

	set new.updated = now();

END;

/* Trigger structure for table `asc_materi` */

DROP TRIGGER IF EXISTS `asc_materi_before_insert`END;
CREATE TRIGGER `asc_materi_before_insert` BEFORE INSERT ON `asc_materi` FOR EACH ROW BEGIN

set new.created = now();

	set new.updated = now();

END;

/* Trigger structure for table `asc_materi` */

DROP TRIGGER IF EXISTS `asc_materi_before_update`END;
CREATE TRIGGER `asc_materi_before_update` BEFORE UPDATE ON `asc_materi` FOR EACH ROW BEGIN

	set new.updated = now();

END;

/* Trigger structure for table `asc_materi_penerima` */

DROP TRIGGER IF EXISTS `asc_materi_penerima_before_insert`END;
CREATE TRIGGER `asc_materi_penerima_before_insert` BEFORE INSERT ON `asc_materi_penerima` FOR EACH ROW BEGIN

set new.created = now();

	set new.updated = now();

END;

/* Trigger structure for table `asc_materi_penerima` */

DROP TRIGGER IF EXISTS `asc_materi_penerima_before_update`END;
CREATE TRIGGER `asc_materi_penerima_before_update` BEFORE UPDATE ON `asc_materi_penerima` FOR EACH ROW BEGIN

	set new.updated = now();

END;

/* Trigger structure for table `asc_pertanyaan` */

DROP TRIGGER IF EXISTS `asc_pertanyaan_before_insert`END;
CREATE TRIGGER `asc_pertanyaan_before_insert` BEFORE INSERT ON `asc_pertanyaan` FOR EACH ROW BEGIN

set new.created = now();

	set new.updated = now();

END;

/* Trigger structure for table `asc_pertanyaan` */

DROP TRIGGER IF EXISTS `asc_pertanyaan_before_update`END;
CREATE TRIGGER `asc_pertanyaan_before_update` BEFORE UPDATE ON `asc_pertanyaan` FOR EACH ROW BEGIN

	set new.updated = now();

END;

/* Trigger structure for table `asc_peserta_ujian` */

DROP TRIGGER IF EXISTS `asc_peserta_ujian_before_insert`END;
CREATE TRIGGER `asc_peserta_ujian_before_insert` BEFORE INSERT ON `asc_peserta_ujian` FOR EACH ROW BEGIN

set new.created = now();

	set new.updated = now();

	set new.waktu_join = now();

	set new.waktu_submit = now();

END;

/* Trigger structure for table `asc_peserta_ujian` */

DROP TRIGGER IF EXISTS `asc_peserta_ujian_before_update`END;
CREATE TRIGGER `asc_peserta_ujian_before_update` BEFORE UPDATE ON `asc_peserta_ujian` FOR EACH ROW BEGIN

	set new.updated = now();

END;

/* Trigger structure for table `asc_pilihan` */

DROP TRIGGER IF EXISTS `asc_pilihan_before_insert`END;
CREATE TRIGGER `asc_pilihan_before_insert` BEFORE INSERT ON `asc_pilihan` FOR EACH ROW BEGIN

set new.created = now();

	set new.updated = now();

END;

/* Trigger structure for table `asc_pilihan` */

DROP TRIGGER IF EXISTS `asc_pilihan_before_update`END;
CREATE TRIGGER `asc_pilihan_before_update` BEFORE UPDATE ON `asc_pilihan` FOR EACH ROW BEGIN

	set new.updated = now();

END;

/* Trigger structure for table `asc_submission` */

DROP TRIGGER IF EXISTS `asc_submission_before_insert`END;
CREATE TRIGGER `asc_submission_before_insert` BEFORE INSERT ON `asc_submission` FOR EACH ROW BEGIN

set new.created = now();

	set new.updated = now();

END;

/* Trigger structure for table `asc_submission` */

DROP TRIGGER IF EXISTS `asc_submission_before_update`END;
CREATE TRIGGER `asc_submission_before_update` BEFORE UPDATE ON `asc_submission` FOR EACH ROW BEGIN

	set new.updated = now();

END;

/* Trigger structure for table `asc_ujian` */

DROP TRIGGER IF EXISTS `asc_ujian_before_insert`END;
CREATE TRIGGER `asc_ujian_before_insert` BEFORE INSERT ON `asc_ujian` FOR EACH ROW BEGIN

set new.created = now();

	set new.updated = now();

END;

/* Trigger structure for table `asc_ujian` */

DROP TRIGGER IF EXISTS `asc_ujian_before_update`END;
CREATE TRIGGER `asc_ujian_before_update` BEFORE UPDATE ON `asc_ujian` FOR EACH ROW BEGIN

	set new.updated = now();

END;
