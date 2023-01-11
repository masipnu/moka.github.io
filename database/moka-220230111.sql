-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for moka
DROP DATABASE IF EXISTS `moka`;
CREATE DATABASE IF NOT EXISTS `moka` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `moka`;

-- Dumping structure for table moka.guru
DROP TABLE IF EXISTS `guru`;
CREATE TABLE IF NOT EXISTS `guru` (
  `id-guru` int(11) NOT NULL,
  `nama-guru` varchar(50) NOT NULL,
  `id-mapel` int(11) NOT NULL,
  `alamaat` varchar(50) NOT NULL DEFAULT '',
  `ttl` varchar(50) NOT NULL DEFAULT '',
  `no-hp` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `foto` varchar(50) NOT NULL DEFAULT '',
  `jk` varchar(50) NOT NULL DEFAULT '',
  `id-role` int(11) NOT NULL DEFAULT '0',
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '',
  KEY `id-guru` (`id-guru`),
  KEY `FK_guru_role` (`id-role`),
  CONSTRAINT `FK_guru_role` FOREIGN KEY (`id-role`) REFERENCES `role` (`id-role`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table moka.guru: ~0 rows (approximately)
DELETE FROM `guru`;
/*!40000 ALTER TABLE `guru` DISABLE KEYS */;
/*!40000 ALTER TABLE `guru` ENABLE KEYS */;

-- Dumping structure for table moka.harga
DROP TABLE IF EXISTS `harga`;
CREATE TABLE IF NOT EXISTS `harga` (
  `harga_per_kilo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table moka.harga: ~0 rows (approximately)
DELETE FROM `harga`;
/*!40000 ALTER TABLE `harga` DISABLE KEYS */;
INSERT INTO `harga` (`harga_per_kilo`) VALUES
	(6000);
/*!40000 ALTER TABLE `harga` ENABLE KEYS */;

-- Dumping structure for table moka.jurusan
DROP TABLE IF EXISTS `jurusan`;
CREATE TABLE IF NOT EXISTS `jurusan` (
  `id-jurusan` int(11) NOT NULL AUTO_INCREMENT,
  `nama-jurusan` varchar(50) NOT NULL,
  KEY `id-jurusan` (`id-jurusan`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table moka.jurusan: ~2 rows (approximately)
DELETE FROM `jurusan`;
/*!40000 ALTER TABLE `jurusan` DISABLE KEYS */;
INSERT INTO `jurusan` (`id-jurusan`, `nama-jurusan`) VALUES
	(1, 'Rekayasa Perangkat Lunak'),
	(2, 'Perbankan Syariah');
/*!40000 ALTER TABLE `jurusan` ENABLE KEYS */;

-- Dumping structure for table moka.kelas
DROP TABLE IF EXISTS `kelas`;
CREATE TABLE IF NOT EXISTS `kelas` (
  `id-kelas` int(11) NOT NULL AUTO_INCREMENT,
  `nama-kelas` varchar(2) NOT NULL,
  `id-jurusan` int(11) NOT NULL,
  KEY `id-kelas` (`id-kelas`),
  KEY `FK_kelas_jurusan` (`id-jurusan`),
  CONSTRAINT `FK_kelas_jurusan` FOREIGN KEY (`id-jurusan`) REFERENCES `jurusan` (`id-jurusan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table moka.kelas: ~1 rows (approximately)
DELETE FROM `kelas`;
/*!40000 ALTER TABLE `kelas` DISABLE KEYS */;
INSERT INTO `kelas` (`id-kelas`, `nama-kelas`, `id-jurusan`) VALUES
	(1, 'X', 1);
/*!40000 ALTER TABLE `kelas` ENABLE KEYS */;

-- Dumping structure for table moka.logs
DROP TABLE IF EXISTS `logs`;
CREATE TABLE IF NOT EXISTS `logs` (
  `id-logs` varchar(50) NOT NULL DEFAULT 'L+((NOW)',
  `tgl` timestamp NOT NULL,
  `id-role` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  KEY `id-logs` (`id-logs`),
  KEY `FK__role` (`id-role`),
  CONSTRAINT `FK__role` FOREIGN KEY (`id-role`) REFERENCES `role` (`id-role`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table moka.logs: ~0 rows (approximately)
DELETE FROM `logs`;
/*!40000 ALTER TABLE `logs` DISABLE KEYS */;
/*!40000 ALTER TABLE `logs` ENABLE KEYS */;

-- Dumping structure for table moka.mapel
DROP TABLE IF EXISTS `mapel`;
CREATE TABLE IF NOT EXISTS `mapel` (
  `id-mapel` int(11) NOT NULL AUTO_INCREMENT,
  `nama-mapel` varchar(50) NOT NULL,
  `id-jurusan` int(11) NOT NULL,
  `id-kelas` int(11) NOT NULL,
  KEY `id-mapel` (`id-mapel`),
  KEY `FK__kelas` (`id-kelas`),
  KEY `FK_mapel_jurusan` (`id-jurusan`),
  CONSTRAINT `FK__kelas` FOREIGN KEY (`id-kelas`) REFERENCES `kelas` (`id-kelas`),
  CONSTRAINT `FK_mapel_jurusan` FOREIGN KEY (`id-jurusan`) REFERENCES `jurusan` (`id-jurusan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table moka.mapel: ~0 rows (approximately)
DELETE FROM `mapel`;
/*!40000 ALTER TABLE `mapel` DISABLE KEYS */;
/*!40000 ALTER TABLE `mapel` ENABLE KEYS */;

-- Dumping structure for table moka.ortu
DROP TABLE IF EXISTS `ortu`;
CREATE TABLE IF NOT EXISTS `ortu` (
  `id-ortu` int(11) NOT NULL AUTO_INCREMENT,
  `nama-ortu` varchar(50) NOT NULL DEFAULT '0',
  `alamat` varchar(50) NOT NULL DEFAULT '0',
  `pekerjaan` varchar(50) NOT NULL DEFAULT '0',
  `penghasilan` varchar(50) NOT NULL DEFAULT '0',
  `foto` varchar(50) NOT NULL DEFAULT '0',
  `no-hp` varchar(50) NOT NULL DEFAULT '0',
  `status-ortu` varchar(50) NOT NULL DEFAULT '0',
  `username` varchar(50) NOT NULL DEFAULT '0',
  `password` varchar(50) NOT NULL DEFAULT '0',
  KEY `id-ortu` (`id-ortu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table moka.ortu: ~0 rows (approximately)
DELETE FROM `ortu`;
/*!40000 ALTER TABLE `ortu` DISABLE KEYS */;
/*!40000 ALTER TABLE `ortu` ENABLE KEYS */;

-- Dumping structure for table moka.pakaian
DROP TABLE IF EXISTS `pakaian`;
CREATE TABLE IF NOT EXISTS `pakaian` (
  `pakaian_id` int(11) NOT NULL AUTO_INCREMENT,
  `pakaian_transaksi` int(11) NOT NULL,
  `pakaian_jenis` varchar(255) NOT NULL,
  `pakaian_jumlah` int(11) NOT NULL,
  PRIMARY KEY (`pakaian_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- Dumping data for table moka.pakaian: ~15 rows (approximately)
DELETE FROM `pakaian`;
/*!40000 ALTER TABLE `pakaian` DISABLE KEYS */;
INSERT INTO `pakaian` (`pakaian_id`, `pakaian_transaksi`, `pakaian_jenis`, `pakaian_jumlah`) VALUES
	(4, 1, 'Celana Jeans', 2),
	(5, 1, 'Baju Kemeja', 1),
	(6, 1, 'Baju Kaos ', 4),
	(7, 1, 'Celana Pendek', 1),
	(8, 2, 'Celana Panjang', 2),
	(9, 2, 'Celana bahan pendek', 1),
	(10, 3, 'Kemeja', 2),
	(11, 3, 'Kaos', 3),
	(12, 4, 'Jilbab', 2),
	(13, 4, 'Baju Gamis', 4),
	(14, 4, 'Roko Merah', 2),
	(15, 4, 'Rok Pendek', 1),
	(16, 4, 'Seragam Sekolah', 2),
	(17, 5, 'Selimut', 2),
	(18, 5, 'Kasur', 1);
/*!40000 ALTER TABLE `pakaian` ENABLE KEYS */;

-- Dumping structure for table moka.pelanggan
DROP TABLE IF EXISTS `pelanggan`;
CREATE TABLE IF NOT EXISTS `pelanggan` (
  `pelanggan_id` int(11) NOT NULL AUTO_INCREMENT,
  `pelanggan_nama` varchar(255) NOT NULL,
  `pelanggan_hp` varchar(20) NOT NULL,
  `pelanggan_alamat` text NOT NULL,
  PRIMARY KEY (`pelanggan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table moka.pelanggan: ~2 rows (approximately)
DELETE FROM `pelanggan`;
/*!40000 ALTER TABLE `pelanggan` DISABLE KEYS */;
INSERT INTO `pelanggan` (`pelanggan_id`, `pelanggan_nama`, `pelanggan_hp`, `pelanggan_alamat`) VALUES
	(1, 'Sumanto', '08123536738', 'jl. cenderawasih no.126 bandung'),
	(2, 'Sri Dayatun', '08736363444', 'jl. tangkuban perahu no.23 Bandung');
/*!40000 ALTER TABLE `pelanggan` ENABLE KEYS */;

-- Dumping structure for table moka.presensi
DROP TABLE IF EXISTS `presensi`;
CREATE TABLE IF NOT EXISTS `presensi` (
  `id-presensi` int(11) NOT NULL AUTO_INCREMENT,
  `nama-presensi` varchar(50) NOT NULL,
  KEY `id-presensi` (`id-presensi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table moka.presensi: ~0 rows (approximately)
DELETE FROM `presensi`;
/*!40000 ALTER TABLE `presensi` DISABLE KEYS */;
/*!40000 ALTER TABLE `presensi` ENABLE KEYS */;

-- Dumping structure for table moka.role
DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id-role` int(11) NOT NULL AUTO_INCREMENT,
  `nama-role` varchar(50) NOT NULL,
  `dashboard` varchar(50) NOT NULL,
  KEY `id-role` (`id-role`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table moka.role: ~0 rows (approximately)
DELETE FROM `role`;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
/*!40000 ALTER TABLE `role` ENABLE KEYS */;

-- Dumping structure for table moka.sekolah
DROP TABLE IF EXISTS `sekolah`;
CREATE TABLE IF NOT EXISTS `sekolah` (
  `npsn` varchar(50) NOT NULL,
  `nama-sekolah` varchar(50) NOT NULL,
  `ks` varchar(50) NOT NULL,
  `alamat-sekolah` varchar(50) NOT NULL,
  `tgl-berdiri` varchar(50) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `no-telp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table moka.sekolah: ~1 rows (approximately)
DELETE FROM `sekolah`;
/*!40000 ALTER TABLE `sekolah` DISABLE KEYS */;
INSERT INTO `sekolah` (`npsn`, `nama-sekolah`, `ks`, `alamat-sekolah`, `tgl-berdiri`, `deskripsi`, `no-telp`, `email`, `website`, `logo`) VALUES
	('69968954', 'SMK BP Subulul Huda', 'Muchtim Humaidi, M.IRKH', 'Rejosari, Kebonsari, Madiun', '03 September 2017', 'SMK', '(0351) 366704', 'smkbpsubululhuda@gmail.com', 'www.smkbpsh.sch.id', 'logo-smkbp.png');
/*!40000 ALTER TABLE `sekolah` ENABLE KEYS */;

-- Dumping structure for table moka.semester
DROP TABLE IF EXISTS `semester`;
CREATE TABLE IF NOT EXISTS `semester` (
  `id-semester` int(11) NOT NULL AUTO_INCREMENT,
  `nama-semester` varchar(50) NOT NULL,
  `id-tapel` int(11) NOT NULL,
  KEY `id-semester` (`id-semester`),
  KEY `FK__tapel` (`id-tapel`),
  CONSTRAINT `FK__tapel` FOREIGN KEY (`id-tapel`) REFERENCES `tapel` (`id-tapel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table moka.semester: ~0 rows (approximately)
DELETE FROM `semester`;
/*!40000 ALTER TABLE `semester` DISABLE KEYS */;
/*!40000 ALTER TABLE `semester` ENABLE KEYS */;

-- Dumping structure for table moka.siswa
DROP TABLE IF EXISTS `siswa`;
CREATE TABLE IF NOT EXISTS `siswa` (
  `id-siswa` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(50) NOT NULL DEFAULT '0',
  `nisn` varchar(50) NOT NULL DEFAULT '0',
  `nama` varchar(50) NOT NULL DEFAULT '0',
  `jk` varchar(50) NOT NULL DEFAULT '0',
  `ttl` varchar(50) NOT NULL DEFAULT '0',
  `alamat` varchar(50) NOT NULL DEFAULT '0',
  `foto` varchar(50) NOT NULL DEFAULT '0',
  `id-kelas` int(11) NOT NULL DEFAULT '0',
  `id-jurusan` int(11) NOT NULL DEFAULT '0',
  `id-ortu` int(11) NOT NULL DEFAULT '0',
  `id-walas` int(11) NOT NULL DEFAULT '0',
  `username` varchar(50) NOT NULL DEFAULT '0',
  `password` varchar(50) NOT NULL DEFAULT '0',
  KEY `id-siswa` (`id-siswa`),
  KEY `FK_siswa_kelas` (`id-kelas`),
  KEY `FK_siswa_walas` (`id-walas`),
  KEY `FK_siswa_ortu` (`id-ortu`),
  KEY `FK_siswa_jurusan` (`id-jurusan`),
  CONSTRAINT `FK_siswa_jurusan` FOREIGN KEY (`id-jurusan`) REFERENCES `jurusan` (`id-jurusan`),
  CONSTRAINT `FK_siswa_kelas` FOREIGN KEY (`id-kelas`) REFERENCES `kelas` (`id-kelas`),
  CONSTRAINT `FK_siswa_ortu` FOREIGN KEY (`id-ortu`) REFERENCES `ortu` (`id-ortu`),
  CONSTRAINT `FK_siswa_walas` FOREIGN KEY (`id-walas`) REFERENCES `walas` (`id-walas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table moka.siswa: ~0 rows (approximately)
DELETE FROM `siswa`;
/*!40000 ALTER TABLE `siswa` DISABLE KEYS */;
/*!40000 ALTER TABLE `siswa` ENABLE KEYS */;

-- Dumping structure for table moka.tapel
DROP TABLE IF EXISTS `tapel`;
CREATE TABLE IF NOT EXISTS `tapel` (
  `id-tapel` int(11) NOT NULL AUTO_INCREMENT,
  `nama-tapel` varchar(50) NOT NULL,
  KEY `id-tapel` (`id-tapel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table moka.tapel: ~0 rows (approximately)
DELETE FROM `tapel`;
/*!40000 ALTER TABLE `tapel` DISABLE KEYS */;
/*!40000 ALTER TABLE `tapel` ENABLE KEYS */;

-- Dumping structure for table moka.transaksi
DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE IF NOT EXISTS `transaksi` (
  `transaksi_id` int(11) NOT NULL AUTO_INCREMENT,
  `transaksi_tgl` date NOT NULL,
  `transaksi_pelanggan` int(11) NOT NULL,
  `transaksi_harga` int(11) NOT NULL,
  `transaksi_berat` int(11) NOT NULL,
  `transaksi_tgl_selesai` date NOT NULL,
  `transaksi_status` int(11) NOT NULL,
  PRIMARY KEY (`transaksi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table moka.transaksi: ~5 rows (approximately)
DELETE FROM `transaksi`;
/*!40000 ALTER TABLE `transaksi` DISABLE KEYS */;
INSERT INTO `transaksi` (`transaksi_id`, `transaksi_tgl`, `transaksi_pelanggan`, `transaksi_harga`, `transaksi_berat`, `transaksi_tgl_selesai`, `transaksi_status`) VALUES
	(1, '2018-04-06', 1, 18000, 3, '2018-04-08', 1),
	(2, '2018-04-15', 1, 6000, 1, '2018-04-16', 0),
	(3, '2018-04-15', 2, 12000, 2, '2018-04-17', 0),
	(4, '2018-04-15', 2, 18000, 3, '2018-04-18', 0),
	(5, '2018-04-15', 2, 36000, 6, '2018-04-21', 0);
/*!40000 ALTER TABLE `transaksi` ENABLE KEYS */;

-- Dumping structure for table moka.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table moka.users: ~6 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
	(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
	(2, 'operator', '21232f297a57a5a743894a0e4a801fc3', 2),
	(3, 'guru', '21232f297a57a5a743894a0e4a801fc3', 3),
	(4, 'siswa', '21232f297a57a5a743894a0e4a801fc3', 4),
	(5, 'ortu', '21232f297a57a5a743894a0e4a801fc3', 5),
	(6, 'ks', '21232f297a57a5a743894a0e4a801fc3', 6);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table moka.walas
DROP TABLE IF EXISTS `walas`;
CREATE TABLE IF NOT EXISTS `walas` (
  `id-walas` int(11) NOT NULL AUTO_INCREMENT,
  `nama-walas` varchar(50) NOT NULL,
  KEY `id-walas` (`id-walas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table moka.walas: ~0 rows (approximately)
DELETE FROM `walas`;
/*!40000 ALTER TABLE `walas` DISABLE KEYS */;
/*!40000 ALTER TABLE `walas` ENABLE KEYS */;

-- Dumping structure for table moka._logs-guru-202301
DROP TABLE IF EXISTS `_logs-guru-202301`;
CREATE TABLE IF NOT EXISTS `_logs-guru-202301` (
  `id-logs` int(11) NOT NULL AUTO_INCREMENT,
  `tgl` date NOT NULL,
  `id-guru` int(11) NOT NULL,
  `j1` char(50) NOT NULL DEFAULT '',
  `j2` char(50) NOT NULL DEFAULT '',
  `j3` char(50) NOT NULL DEFAULT '',
  `j4` char(50) NOT NULL DEFAULT '',
  `j5` char(50) NOT NULL DEFAULT '',
  `j6` char(50) NOT NULL DEFAULT '',
  `j7` char(50) NOT NULL DEFAULT '',
  `j8` char(50) NOT NULL DEFAULT '',
  KEY `id-logs` (`id-logs`),
  KEY `FK__logs-guru-202301_guru` (`id-guru`),
  CONSTRAINT `FK__logs-guru-202301_guru` FOREIGN KEY (`id-guru`) REFERENCES `guru` (`id-guru`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table moka._logs-guru-202301: ~0 rows (approximately)
DELETE FROM `_logs-guru-202301`;
/*!40000 ALTER TABLE `_logs-guru-202301` DISABLE KEYS */;
/*!40000 ALTER TABLE `_logs-guru-202301` ENABLE KEYS */;

-- Dumping structure for table moka._logs-siswa-202301
DROP TABLE IF EXISTS `_logs-siswa-202301`;
CREATE TABLE IF NOT EXISTS `_logs-siswa-202301` (
  `id-logs` int(11) NOT NULL AUTO_INCREMENT,
  `tgl` date NOT NULL,
  `id-siswa` int(11) NOT NULL DEFAULT '0',
  `j1` char(50) NOT NULL DEFAULT '0',
  `j2` char(50) NOT NULL DEFAULT '0',
  `j3` char(50) NOT NULL DEFAULT '0',
  `j4` char(50) NOT NULL DEFAULT '0',
  `j5` char(50) NOT NULL DEFAULT '0',
  `j6` char(50) NOT NULL DEFAULT '0',
  `j7` char(50) NOT NULL DEFAULT '0',
  `j8` char(50) NOT NULL DEFAULT '0',
  KEY `id-logs` (`id-logs`),
  KEY `FK__logs-siswa_siswa` (`id-siswa`),
  CONSTRAINT `FK__logs-siswa_siswa` FOREIGN KEY (`id-siswa`) REFERENCES `siswa` (`id-siswa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table moka._logs-siswa-202301: ~0 rows (approximately)
DELETE FROM `_logs-siswa-202301`;
/*!40000 ALTER TABLE `_logs-siswa-202301` DISABLE KEYS */;
/*!40000 ALTER TABLE `_logs-siswa-202301` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
