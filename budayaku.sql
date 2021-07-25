-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 10.4.18-MariaDB - mariadb.org binary distribution
-- OS Server:                    Win64
-- HeidiSQL Versi:               11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Membuang struktur basisdata untuk budayaku
CREATE DATABASE IF NOT EXISTS `budayaku` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `budayaku`;

-- membuang struktur untuk table budayaku.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel budayaku.admin: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- membuang struktur untuk table budayaku.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel budayaku.failed_jobs: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- membuang struktur untuk table budayaku.karya
CREATE TABLE IF NOT EXISTS `karya` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `gambar_karya` varchar(255) DEFAULT NULL,
  `judul_karya` varchar(255) DEFAULT NULL,
  `link_youtube` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(1000) DEFAULT NULL,
  `berkas_pendaftaran` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `peserta_id` bigint(20) DEFAULT NULL,
  `kompetisi_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_9ea0f21f-4654-4148-abb0-0ae3a62d749f` (`peserta_id`),
  KEY `FK_49fda317-65e3-4388-9b1c-4ddd203768af` (`kompetisi_id`),
  CONSTRAINT `FK_49fda317-65e3-4388-9b1c-4ddd203768af` FOREIGN KEY (`kompetisi_id`) REFERENCES `kompetisi` (`id`),
  CONSTRAINT `FK_9ea0f21f-4654-4148-abb0-0ae3a62d749f` FOREIGN KEY (`peserta_id`) REFERENCES `peserta` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel budayaku.karya: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `karya` DISABLE KEYS */;
INSERT INTO `karya` (`id`, `gambar_karya`, `judul_karya`, `link_youtube`, `deskripsi`, `berkas_pendaftaran`, `status`, `peserta_id`, `kompetisi_id`, `created_at`, `updated_at`) VALUES
	(1, 'F:\\xampp\\tmp\\phpDC27.tmp', 'tes', 'tes', 'tesesdaaaaaaaaaaaaaaaaaa', '1627171767_link.txt', NULL, 6, NULL, '2021-07-25 00:09:27', '2021-07-25 00:09:27');
/*!40000 ALTER TABLE `karya` ENABLE KEYS */;

-- membuang struktur untuk table budayaku.kompetisi
CREATE TABLE IF NOT EXISTS `kompetisi` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `judul_kompetisi` varchar(255) DEFAULT NULL,
  `deskirpsi_kompetisi` varchar(1000) DEFAULT NULL,
  `hadiah` int(11) DEFAULT NULL,
  `biaya_pendaftaran` int(11) DEFAULT NULL,
  `persyaratan_peserta` varchar(255) DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_akhir` date DEFAULT NULL,
  `surat_pernyataan` varchar(255) DEFAULT NULL,
  `poster` varchar(255) DEFAULT NULL,
  `panduan` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `penyelenggara_id` int(11) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_c013cfb8-a9e6-49ee-b4de-0c0f4d73cfcc` (`penyelenggara_id`),
  KEY `FK_c7f78645-f0c2-4a07-8d00-487aef8ec20f` (`admin_id`),
  CONSTRAINT `FK_c013cfb8-a9e6-49ee-b4de-0c0f4d73cfcc` FOREIGN KEY (`penyelenggara_id`) REFERENCES `penyelenggara` (`id`),
  CONSTRAINT `FK_c7f78645-f0c2-4a07-8d00-487aef8ec20f` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel budayaku.kompetisi: ~2 rows (lebih kurang)
/*!40000 ALTER TABLE `kompetisi` DISABLE KEYS */;
INSERT INTO `kompetisi` (`id`, `judul_kompetisi`, `deskirpsi_kompetisi`, `hadiah`, `biaya_pendaftaran`, `persyaratan_peserta`, `tgl_mulai`, `tgl_akhir`, `surat_pernyataan`, `poster`, `panduan`, `status`, `penyelenggara_id`, `admin_id`, `created_at`, `updated_at`) VALUES
	(22, 'Kompetisi Tari Jaipong Tingkat Nasional', 'Per consequat adolescens ex, cu nibh commune temporibus vim, ad sumo viris eloquentiam sed. Mea appareat omittantur eloquentiam ad, nam ei quas oportere democritum. Prima causae admodum id est, ei timeam inimicus sed. Sit an meis aliquam, cetero inermis vel ut. An sit illum euismod facilisis, tamquam vulputate pertinacia eum at. Cum et probo menandri. Officiis consulatu pro et, ne sea sale invidunt, sed ut sint blandit efficiendi. Atomorum explicari eu qui, est enim quaerendum te. Quo harum viris id. Per ne quando dolore evertitur, pro ad cibo commune.', 50000000, 25000, 'Per consequat adolescens ex, cu nibh commune temporibus vim, ad sumo viris eloquentiam sed. Mea appareat omittantur eloquentiam ad, nam ei quas oportere democritum. Prima causae admodum id est, ei timeam inimicus sed. Sit an meis aliquam, cetero inermis v', '2021-07-13', '2021-08-30', '1626133008_Andrian Setia Nugroho_Resume.docx', '1626133008_blog-img.jpg', '1626133008_21_Surat_Pernyataan_Tidak_Bekerja_FGA_DTS2021.docx', NULL, 1, NULL, '2021-07-12 23:36:49', '2021-07-12 23:36:49'),
	(23, 'Kompetisi Tari Saman Tingkat Nasional', 'Per consequat adolescens ex, cu nibh commune temporibus vim, ad sumo viris eloquentiam sed. Mea appareat omittantur eloquentiam ad, nam ei quas oportere democritum. Prima causae admodum id est, ei timeam inimicus sed. Sit an meis aliquam, cetero inermis vel ut. An sit illum euismod facilisis, tamquam vulputate pertinacia eum at. Cum et probo menandri. Officiis consulatu pro et, ne sea sale invidunt, sed ut sint blandit efficiendi. Atomorum explicari eu qui, est enim quaerendum te. Quo harum viris id. Per ne quando dolore evertitur, pro ad cibo commune.', 50000000, 25000, 'Per consequat adolescens ex, cu nibh commune temporibus vim, ad sumo viris eloquentiam sed. Mea appareat omittantur eloquentiam ad, nam ei quas oportere democritum. Prima causae admodum id est, ei timeam inimicus sed. Sit an meis aliquam, cetero inermis v', '2021-07-13', '2021-07-30', '1626139421_Fitur Lengkap.docx', '1626139421_2607892.jpg', '1626139421_UTS_3011810006.pdf', NULL, 1, NULL, '2021-07-13 01:23:41', '2021-07-13 01:23:41');
/*!40000 ALTER TABLE `kompetisi` ENABLE KEYS */;

-- membuang struktur untuk table budayaku.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel budayaku.migrations: ~2 rows (lebih kurang)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2019_08_19_000000_create_failed_jobs_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- membuang struktur untuk table budayaku.penyelenggara
CREATE TABLE IF NOT EXISTS `penyelenggara` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telepon` int(11) DEFAULT NULL,
  `asal_instansi` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel budayaku.penyelenggara: ~5 rows (lebih kurang)
/*!40000 ALTER TABLE `penyelenggara` DISABLE KEYS */;
INSERT INTO `penyelenggara` (`id`, `nama_lengkap`, `email`, `email_verified_at`, `password`, `remember_token`, `no_telepon`, `asal_instansi`, `alamat`, `created_at`, `updated_at`) VALUES
	(1, 'Tes', 'tes@gmail.com', '2021-06-30 11:36:13', '$2y$10$N/YcwTVeCiC7wtAGTlNHjOq9jrSLz9Vm2cjCE/WCiFLsiRo6x8wiu', NULL, NULL, NULL, NULL, '2021-06-30 11:36:13', '2021-06-30 11:36:13'),
	(2, 'Ahmad Nurul Laiq', 'laiq@gmail.com', '2021-07-01 13:27:39', '$2y$10$tfJaOnbHe/2dLdrACyuuqe0DcYUcs2K7EJHTywlvJjDmZ9E52.yoG', NULL, NULL, NULL, NULL, '2021-07-01 13:27:39', '2021-07-01 13:27:39'),
	(3, 'Tes1', 'tes1@gmail.com', '2021-07-03 08:53:11', '$2y$10$Ify0O8vybZcOo3pJQm9AdunumBSMX9Gpm1koF7YhLGzGhpq86SNPG', NULL, NULL, NULL, NULL, '2021-07-03 08:53:11', '2021-07-03 08:53:11'),
	(4, 'Null', 'mulaidarinull@gmail.com', '2021-07-08 08:45:25', '$2y$10$qaDlwY80FqpY5ENMYsPHruLpe/VLUgpAbjZCbQnh98RoCTYhDCQ0S', NULL, NULL, NULL, NULL, '2021-07-08 08:45:25', '2021-07-08 08:45:25'),
	(5, 'Null', 'mulaidarinull@gmail.com', '2021-07-08 09:03:46', '$2y$10$1SYN4zLPBYOmr2bSIKk4UOUQACNJF4Usy1UjibftvmAUpwjDPsp5m', NULL, NULL, NULL, NULL, '2021-07-08 09:03:46', '2021-07-08 09:03:46'),
	(6, 'Dikti', 'dikti@gmail.com', '2021-07-08 09:21:53', '$2y$10$rKz6iapH72W71DeEwZ8CpeRBP6UmoXWr.VsYhEVMKWHNiT7VKGou2', NULL, NULL, NULL, NULL, '2021-07-08 09:21:53', '2021-07-08 09:21:53'),
	(7, 'Ahmad Rudi', 'ahmadrudi@gmail.com', '2021-07-09 13:48:41', '$2y$10$JM.bVWiT6VqtipWFrwyfmeEqoAWnZ8bPaGgJDr8jCy4YN6VlUQoiK', NULL, NULL, NULL, NULL, '2021-07-09 13:48:41', '2021-07-09 13:48:41'),
	(8, 'Putri', 'putri@gmail.com', '2021-07-11 13:09:05', '$2y$10$YDRY.5S.2pLmq/XjMdkXKe9VsJfcsxD2WWlhCQ8TNtkfWvcXTlD3e', NULL, NULL, NULL, NULL, '2021-07-11 13:09:05', '2021-07-11 13:09:05');
/*!40000 ALTER TABLE `penyelenggara` ENABLE KEYS */;

-- membuang struktur untuk table budayaku.peserta
CREATE TABLE IF NOT EXISTS `peserta` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telepon` int(11) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel budayaku.peserta: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `peserta` DISABLE KEYS */;
INSERT INTO `peserta` (`id`, `nama_lengkap`, `email`, `email_verified_at`, `password`, `remember_token`, `no_telepon`, `alamat`, `created_at`, `updated_at`) VALUES
	(6, 'Aziz', 'aziz@gmail.com', '2021-07-09 13:53:44', '$2y$10$gjd0QsB2VkAu8IQ3Sm/Ade9aCw1FQGKjoUzEAIx3p/aijBztR.HOO', NULL, NULL, NULL, '2021-07-09 13:53:44', '2021-07-09 13:53:44');
/*!40000 ALTER TABLE `peserta` ENABLE KEYS */;

-- membuang struktur untuk table budayaku.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel budayaku.users: ~1 rows (lebih kurang)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(5, 'Yosi', 'yos@gmail.com', '2021-07-08 03:18:57', '$2y$10$QQUkUMRAmJbx2UomT2Uwa.xScFhLfIv3mg/5Aa77ixEvk280THZB2', NULL, '2021-07-08 03:18:57', '2021-07-08 03:18:57');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
