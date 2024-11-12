/* Trigger structure for table `asc_pertanyaan` */

DROP TRIGGER IF EXISTS `asc_pertanyaan_after_insert`END;
CREATE TRIGGER `asc_pertanyaan_after_insert` AFTER INSERT ON `asc_pertanyaan` FOR EACH ROW BEGIN

	UPDATE `asc_ujian` SET `jumlah_pertanyaan` = (SELECT COUNT(*) FROM `asc_pertanyaan` WHERE `id_ujian`=new.id_ujian) WHERE `id_ujian`=new.id_ujian;

END;

/* Trigger structure for table `asc_pertanyaan` */

DROP TRIGGER IF EXISTS `asc_pertanyaan_after_delete`END;
CREATE TRIGGER `asc_pertanyaan_after_delete` AFTER DELETE ON `asc_pertanyaan` FOR EACH ROW BEGIN

	UPDATE `asc_ujian` SET `jumlah_pertanyaan` = (SELECT COUNT(*) FROM `asc_pertanyaan` WHERE `id_ujian`=old.id_ujian) WHERE `id_ujian`=old.id_ujian;

END;

