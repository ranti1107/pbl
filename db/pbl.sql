-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2022 at 09:10 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pbl`
--

-- --------------------------------------------------------

--
-- Table structure for table `akreditasi`
--

CREATE TABLE `akreditasi` (
  `id` int(10) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akreditasi`
--

INSERT INTO `akreditasi` (`id`, `user_id`, `keterangan`, `level`, `file`, `tahun`, `created_at`, `updated_at`) VALUES
(521, NULL, 'Sertifikat Akreditasi Prodi Teknik Pertambangan', 'Jurusan', 'app/file/-1649824307-AMAzQ.pdf', NULL, '2022-04-12 21:31:47', '2022-04-30 13:43:22'),
(522, NULL, 'SK PROGRAM STUDI TEKNIK PERTAMBANGAN 2018-2023', 'Kampus', 'app/file/-1649924829-WVwF3.pdf', NULL, '2022-04-14 01:27:09', '2022-04-30 13:43:31'),
(523, NULL, 'Sertifikat Akreditasi Prodi Teknik Mesin', 'Jurusan', 'app/file/-1649924890-55ZYB.pdf', NULL, '2022-04-14 01:28:10', '2022-04-30 13:43:39'),
(524, NULL, 'SK PROGRAM STUDI TEKNIK MESIN 2018-2023', 'Kampus', 'app/file/-1649924917-QPOei.pdf', NULL, '2022-04-14 01:28:37', '2022-04-30 13:44:09'),
(525, NULL, 'Sertifikat Akreditasi Prodi Teknik Informatika', 'Jurusan', 'app/file/-1649924961-1nZmE.pdf', NULL, '2022-04-14 01:29:21', '2022-04-30 13:43:46'),
(526, NULL, 'SK PROGRAM STUDI TEKNIK INFORMATIKA 2018-2023', 'Kampus', 'app/file/-1649924996-TGgC1.pdf', NULL, '2022-04-14 01:29:56', '2022-04-30 13:44:38'),
(527, NULL, 'Sertifikat Akreditasi Prodi Teknik Elektro', 'Jurusan', 'app/file/-1649925052-GlRrq.pdf', NULL, '2022-04-14 01:30:52', '2022-04-30 13:43:52'),
(528, NULL, 'SK PROGRAM STUDI TEKNIK ELEKTRO 2018-2023', 'Kampus', 'app/file/-1649925114-aD2Ge.pdf', NULL, '2022-04-14 01:31:54', '2022-04-30 13:44:13'),
(529, NULL, 'Sertifikat Akreditasi Prodi Teknik Sipil', 'Jurusan', 'app/file/-1649925151-8rhSo.pdf', NULL, '2022-04-14 01:32:31', '2022-04-30 13:43:56'),
(530, NULL, 'SK PROGRAM STUDI TEKNIK SIPIL 2018-2023', 'Kampus', 'app/file/-1649925182-lKZzX.pdf', NULL, '2022-04-14 01:33:02', '2022-04-30 13:44:20'),
(531, NULL, 'Sertifikat Akreditasi Prodi Teknik Agroindustri', 'Jurusan', 'app/file/-1649925237-Jl6sX.pdf', NULL, '2022-04-14 01:33:57', '2022-04-30 13:44:04'),
(532, NULL, 'SK PROGRAM STUDI TEKNIK AGROINDUSTRI 2018-2023', 'Kampus', 'app/file/-1649925262-YWAnz.pdf', NULL, '2022-04-14 01:34:22', '2022-04-30 13:44:29');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(10) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `user_id`, `judul`, `isi`, `foto`, `created_at`, `updated_at`) VALUES
(4, 4, 'Pembukaan Audit Mutu Internal Politap Dilakukan Secara Virtual', 'Direktur Politeknik Negeri Ketapang Endang Kusmana, membuka secara resmi pelaksanaan Audit Mutu Internal (AMI) semester Genap TA 2019/2020 pada Hari Kamis tanggal 13 Agustus 2020 secara virtual. Kepala P4MP Sy. Indra Septiansyah menyatakan bahwa kegiatan AMI ini merupakan amanat Undang-undang No 12 tahun 2012 tentang Pendidikan Tinggi yang mencantumkan pentingnya pelaksanaan penjaminan mutu pendidikan tinggi. Adapun tujuan utama AMI adalah untuk memperoleh rekomendasi peningkatan mutu serta menjamin akuntabilitas dengan cara melakukan identifikasi temuan atau ketidaksesuaian antara penyelenggaran pendidikan tinggi di tingkat Prodi dengan standar yang telah ditetapkan dalam SPMI Politeknik Negeri Ketapang (Politap).', 'app/foto/4-1658408490-0W620.jpg', '2022-06-24 05:34:26', '2022-07-21 06:01:30'),
(6, 11, 'Kerjasama antara mahasiswa Teknologi Informasi dan Tim P4MP POLITAP dalam pembangunan website SIAMI', 'Pertemuan ini dilakukan di Gedung Rektorat.', 'app/foto/-1658465970-xVAZ6.jpg', '2022-07-21 21:59:30', '2022-07-21 21:59:30');

-- --------------------------------------------------------

--
-- Table structure for table `crud_events`
--

CREATE TABLE `crud_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `crud_events`
--

INSERT INTO `crud_events` (`id`, `title`, `start`, `end`, `created_at`, `updated_at`) VALUES
(1, 'Apa', '2022-06-02', '2022-06-03', '2022-06-20 07:23:52', '2022-06-20 07:23:52'),
(2, 'apa', '2022-06-09', '2022-06-10', '2022-06-20 07:27:32', '2022-06-20 07:27:32'),
(3, 'apaa', '2022-06-22', '2022-06-23', '2022-06-20 07:27:46', '2022-06-20 07:27:46');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(10) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `tahun` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `user_id`, `tahun`, `nama`, `deskripsi`, `foto`, `created_at`, `updated_at`) VALUES
(2, 11, '2021', 'Monitoring Progress SIAMI', 'Monitoring ini dilakukan oleh Manager Proyek untuk memantau perkembangan pembuatan Sistem Informasi P4MP/ SIAMI', 'app/foto/2-1655801664-1Hr2Z.jpg', '2022-03-24 06:44:35', '2022-07-22 04:53:39'),
(5, 11, '2022', 'Audit Mutu Internal Politap 2022', 'Audit Mutu Internal Politap 2022 di Jurusan Teknologi Informasi berlangsung secara tertutup di ruangan Lab. yang dihadiri oleh Kepala Jurusan, Kepala Prodi, serta TIM P4MP Politap.', 'app/foto/-1657987236-cOcuk.jpg', '2022-07-16 09:00:37', '2022-07-21 05:09:42');

-- --------------------------------------------------------

--
-- Table structure for table `klinik_spmi`
--

CREATE TABLE `klinik_spmi` (
  `id` int(10) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `klinik_spmi`
--

INSERT INTO `klinik_spmi` (`id`, `user_id`, `nama`, `level`, `file`, `created_at`, `updated_at`) VALUES
(4, 4, 'Kebijakan SPMI POLITAP', 'Kebijakan', 'app/file/-1649818112-eHN4V.pdf', '2022-04-12 19:48:32', '2022-07-07 08:10:38'),
(5, 4, 'Manual  PPEPP POLITAP', 'ManualPPEPP', 'app/file/-1649818183-kmG34.pdf', '2022-04-12 19:49:43', '2022-07-07 08:11:11'),
(6, 4, 'Standar Pendidikan POLITAP', 'StandarPendidikan', 'app/file/-1649818284-Cdyxc.pdf', '2022-04-12 19:51:24', '2022-07-07 08:11:19'),
(7, 4, 'Standar penelitian POLITAP', 'StandarPenelitian', 'app/file/-1649818335-PEPH9.pdf', '2022-04-12 19:52:15', '2022-07-07 08:11:26'),
(8, 4, 'Standar PKM POLITAP', 'StandarPKM', 'app/file/-1649818421-CZt8u.pdf', '2022-04-12 19:53:41', '2022-07-07 15:11:40'),
(9, 4, 'Standar Melampaui SN Dikti', 'StandarSN', 'app/file/-1649818516-6epvG.pdf', '2022-04-12 19:55:16', '2022-07-07 15:11:47'),
(10, 4, 'SOP SPMI POLITAP', 'SOP', 'app/file/10-1655742520-69ocu.pdf', '2022-04-12 19:56:11', '2022-07-07 15:11:55'),
(11, 4, 'Daftar SOP', 'SOP', 'app/file/-1649818620-UAZ6S.pdf', '2022-04-12 19:57:00', '2022-07-07 15:12:20'),
(12, 4, 'SOP PERENCANAAN Kunjungan Industri', 'SOP', 'app/file/12-1649819270-6Rt2f.pdf', '2022-04-12 20:00:12', '2022-07-07 15:12:28'),
(13, 4, 'SOP Pelaksanaan Kunjungan Industri', 'SOP', 'app/file/13-1649819290-e2wrK.pdf', '2022-04-12 20:01:13', '2022-07-07 15:12:32'),
(14, 4, 'SOP Perencanaan Praktik industri', 'SOP', 'app/file/14-1649819351-tUiCJ.pdf', '2022-04-12 20:04:25', '2022-07-07 15:12:37'),
(15, 4, 'SOP Pelaksanaan Praktik industri', 'SOP', 'app/file/-1649819402-mgFEE.pdf', '2022-04-12 20:10:02', '2022-07-07 15:12:40'),
(16, 4, 'SOP Perencanaan PKL', 'SOP', 'app/file/-1649819433-2Or8I.pdf', '2022-04-12 20:10:33', '2022-07-07 15:12:44'),
(17, NULL, 'SOP Pelaksanaan PKL', 'SOP', 'app/file/-1649819460-5mf3f.pdf', '2022-04-12 20:11:00', '2022-04-23 17:03:43'),
(18, NULL, 'SOP Pelaporan Penilaian PKL', 'SOP', 'app/file/-1649819498-WHLLU.pdf', '2022-04-12 20:11:38', '2022-04-23 17:03:34'),
(19, NULL, 'SOP Penentuan Jadwal Perkuliahan', 'SOP', 'app/file/-1649819557-Anxwl.pdf', '2022-04-12 20:12:37', '2022-04-23 17:03:31'),
(20, NULL, 'SOP Penetapan Kalender Akademik', 'SOP', 'app/file/-1649819592-SpBsc.pdf', '2022-04-12 20:13:12', '2022-04-23 17:03:47'),
(21, NULL, 'SOP Ujian Tengah Semester', 'SOP', 'app/file/-1649819620-ELiwA.pdf', '2022-04-12 20:13:40', '2022-04-23 17:04:03'),
(22, NULL, 'SOP Ujian Akhir Semester', 'SOP', 'app/file/-1649819650-Qs5Yx.pdf', '2022-04-12 20:14:10', '2022-04-23 17:03:55'),
(23, NULL, 'SOP Revisi dan Pembahasan Kurikulum', 'SOP', 'app/file/-1649819690-F7BuI.pdf', '2022-04-12 20:14:50', '2022-04-23 17:03:52'),
(24, NULL, 'SOP Evaluasi Kurikulum', 'SOP', 'app/file/-1649819728-uJKGr.pdf', '2022-04-12 20:15:28', '2022-04-23 17:04:17'),
(25, NULL, 'SOP Kehadiran Dosen', 'SOP', 'app/file/-1649819752-gkOU0.pdf', '2022-04-12 20:15:52', '2022-04-23 17:04:11'),
(26, NULL, 'SOP Kehadiran Mahasiswa', 'SOP', 'app/file/-1649819784-LDe9r.pdf', '2022-04-12 20:16:24', '2022-04-23 17:04:05'),
(27, NULL, 'SOP Pelaksanaan Kompensasi', 'SOP', 'app/file/-1649819862-80kBY.pdf', '2022-04-12 20:17:42', '2022-04-23 17:04:28'),
(28, NULL, 'SOP Pemberian SP', 'SOP', 'app/file/-1649820383-YxIcB.pdf', '2022-04-12 20:26:23', '2022-04-23 17:04:25'),
(29, NULL, 'SOP Pemberian Cuti Akademik', 'SOP', 'app/file/-1649821233-ooxKV.pdf', '2022-04-12 20:40:33', '2022-04-23 17:04:22'),
(30, NULL, 'SOP Pengajuan DO', 'SOP', 'app/file/-1649821258-eZyHa.pdf', '2022-04-12 20:40:58', '2022-04-23 17:04:19'),
(31, NULL, 'SOP Penentuan Tempat Kuliah 1', 'SOP', 'app/file/-1649821307-yPnBw.pdf', '2022-04-12 20:41:47', '2022-04-23 17:04:53'),
(32, NULL, 'SOP Penulisan Bahan Ajar', 'SOP', 'app/file/-1649821352-6dXvd.pdf', '2022-04-12 20:42:32', '2022-04-23 17:04:36'),
(33, NULL, 'SOP Pelaksanaan Tugas AKhir', 'SOP', 'app/file/-1649821405-UYWAy.pdf', '2022-04-12 20:43:25', '2022-04-23 17:04:33'),
(34, NULL, 'SOP Pembimbingan Akademik', 'SOP', 'app/file/-1649821654-09bN8.pdf', '2022-04-12 20:47:34', '2022-04-23 17:04:31'),
(35, NULL, 'SOP Penyerahan Nilai', 'SOP', 'app/file/-1649821693-Bdopy.pdf', '2022-04-12 20:48:13', '2022-04-23 17:05:23'),
(36, NULL, 'SOP Evaluasi Pembelajaran', 'SOP', 'app/file/-1649821745-SlfpN.pdf', '2022-04-12 20:49:05', '2022-04-23 17:05:19'),
(37, NULL, 'SOP Penyusunan RPS Politap', 'SOP', 'app/file/-1649821895-xJ01i.pdf', '2022-04-12 20:51:35', '2022-04-23 17:05:15'),
(38, NULL, 'SOP Perubahan Jadwal Perkuliahan', 'SOP', 'app/file/-1649821997-kL4bN.pdf', '2022-04-12 20:53:17', '2022-04-23 17:05:10'),
(39, NULL, 'SOP Perbaikan Nilai Mahasiswa', 'SOP', 'app/file/-1649822065-TCuAw.pdf', '2022-04-12 20:54:25', '2022-04-23 17:05:04'),
(40, NULL, 'SOP Usul SK Beban Tugas Mengajar', 'SOP', 'app/file/-1649822138-sazOK.pdf', '2022-04-12 20:55:38', '2022-04-23 17:05:01'),
(41, NULL, 'SOP Monitoring dan Evaluasi Proses Pembelajaran', 'SOP', 'app/file/-1649822184-IA78k.pdf', '2022-04-12 20:56:24', '2022-04-23 17:04:59'),
(42, NULL, 'SOP Pengajuan Surat Izin Tidak Masuk Mengajar', 'SOP', 'app/file/-1649822235-ktOdn.pdf', '2022-04-12 20:57:15', '2022-04-23 17:04:56'),
(43, NULL, 'POLITEKNIK DALAM ANGKA', NULL, 'app/file/-1656309973-SqfKd.pdf', '2022-06-26 23:06:13', '2022-06-26 23:06:13');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_06_20_141705_create_crud_events_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` int(10) NOT NULL,
  `level` varchar(255) DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `level`, `user_id`, `nama`, `foto`, `deskripsi`, `created_at`, `updated_at`) VALUES
(7, 'Misi', 13, 'Misi Tim P4MP Politap', 'app/foto/7-1657611589-kTFJE.pdf', '1. Melaksanakan Sistem Penjaminan Mutu Internal (SPMI Politeknik Negeri Ketapang) secara menyeluruh, bertahap dan berkesinambungan.\r\n2. Meningkatkan kesadaran dan tanggungjawab akan budaya mutu bagi seluruh civitas akademika Politeknik Negeri Ketapang melalui peningkatan kompetensi dan pelatihan.\r\n3. Meningkatkan kinerja secara terus menerus dalam menangani penjaminan mutu terpadu secara professional.\r\n4. Mendorong program studi dan unit-unit pendukung di Politeknik Negeri Ketapang untuk selalu melakukan inovasi dan meningkatkan kreatifitas dalam usahanya meningkatkan mutu secara terus menerus.', '2022-04-23 09:11:49', '2022-07-22 22:44:46'),
(8, 'Tupoksi', NULL, 'Tupoksi P4MP', NULL, '1. Pelaksanaan pengembangan pembelajaran\r\n2. Pelaksanaan pengembangan sistem penjaminan mutu pendidikan\r\n3. Mengkoordinasi kegiatan penjaminan mutu dan pengawasan internal untuk aras Politeknik Negeri Ketapang maupun aras unit kerja, dalam bidang akademik maupun non akademik.\r\n4. Membuat perencanaan, melaksanakan dan mengembangkan kegiatan penjaminan mutu di Politeknik Negeri Ketapang.\r\n5. Melaksanakan kegiatan audit mutu internal secara periodik untuk seluruh lingkup Politeknik Negeri Ketapang.\r\n6. Mempersiapkan dan memfasilitasi pelaksanaan evaluasi eksternal yang dilakukan oleh institusi dari luar Politeknik Negeri Ketapang (Badan Sertifikasi, akreditasi, dll).', '2022-04-23 09:12:49', '2022-04-23 09:12:49'),
(9, 'LatarBelakang', NULL, 'Latar Belakang P4MP', NULL, 'Penjaminan mutu perguruan tinggi adalah proses perencanaan, pemenuhan, pengendalian, dan pengembangan standar pendidikan tinggi secara konsisten dan berkelanjutan, sehingga pemangku kepentingan (stakeholders) internal dan eksternal perguruan tinggi, yaitu mahasiswa, dosen, karyawan, masyarakat, dunia usaha, asosiasi profesi, pemerintah memperoleh kepuasan atas kinerja dan keluaran perguruan tinggi.\r\n\r\nTujuan penjaminan mutu perguruan tinggi adalah terjaminnya mutu penyelenggaraan pendidikan tinggi baik pada masukan, proses, maupun keluaran berdasarkan peraturan perundang-undangan, nilai dasar, visi, dan misi perguruan tinggi. Kegiatan penjaminan mutu ini merupakan perwujudan akuntabilitas dan transparansi perguruan tinggi.\r\n\r\nPERATURAN MENTERI PENDIDIKAN DAN KEBUDAYAAN REPUBLIK INDONESIA NOMOR 15 TAHUN 2014 TENTANG PENDIRIAN, ORGANISASI, DAN TATA KERJA POLITEKNIK NEGERI KETAPANG\r\nPasal 25\r\nPusat terdiri atas:\r\na. Pusat Penelitian dan Pengabdian Kepada Masyarakat; dan\r\nb. Pusat Pengembangan Pembelajaran dan Penjaminan mutu pendidikan\r\n\r\nPasal 29\r\nPusat Pengembangan Pembelajaran dan Penjaminan Mutu Pendidikan sebagaimana dimaksud dalam Pasal 25 huruf b mempunyai tugas melaksanakan, mengoordinasikan, memantau, dan menilai pelaksanaan kegiatan pengembangan pembelajaran dan penjaminan mutu pendidikan.\r\n\r\nPasal 30\r\nDalam melaksanakan tugas sebagaimana dimaksud dalam Pasal 29, Pusat Pengembangan Pembelajaran dan Penjaminan Mutu Pendidikan menyelenggarakan fungsi:\r\na. Penyusunan rencana, program, dan anggaran Pusat;\r\nb. Pelaksanaan pengembangan pembelajaran;\r\nc. Pelaksanaan pengembangan sistem penjaminan mutu pendidikan;\r\nd. Pelaksanaan penjaminan mutu pendidikan;\r\ne. Koordinasi pelaksanaan kegiatan pengembangan pembelajaran dan penjaminan mutu pendidikan;\r\nf. Pemantauan dan penilaian pelaksanaan kegiatan pengembangan pembelajaran dan penjaminan mutu pendidikan; dan\r\ng. Pelaksanaan urusan administrasi Pusat.\r\n\r\nKewajiban perguruan tinggi melaksanakan penjaminan mutu dalam penyelenggaraan pendidikan tinggi, diatur dalam peraturan perundang-undangan yaitu:\r\nUndang-Undang No. 20 tahun 2003 tentang Sistem Pendidikan Nasional. Pasal 51 ayat (2) yang pada dasarnya mengatur bahwa pengelolaan satuan pendidikan tinggi dilaksanakan berdasarkan prinsip otonomi, akuntabilitas, jaminan mutu, dan evaluasi yang transparan;\r\n\r\nPeraturan Pemerintah No. 19 tahun 2005 tentang Standar Nasional Pendidikan. Pasal 91 ayat (1), ayat (2), ayat (3) PP No. 19 tahun 2005 yang mengatur bahwa setiap perguruan tinggi wajib melakukan penjaminan mutu pendidikan sebagai pertanggungjawaban kepada stakeholders, dengan tujuan untuk memenuhi atau melampaui Standar Nasional Pendidikan, yang dilakukan secara bertahap, sistematis, dan terencana dalam suatu program penjaminan mutu yang memiliki target dan kerangka waktu yang jelas.\r\n\r\nPeraturan Pemerintah No. 17 tahun 2010 tentang Pengelolaan dan Penyelenggaraan Pendidikan. Pasal 96 ayat (7) PP No. 17 tahun 2010 yang mengatur bahwa perguruan tinggi melakukan program penjaminan mutu secara internal, sedangkan penjaminan mutu eksternal dilakukan secara berkala oleh Badan Akreditasi Nasional Perguruan Tinggi (BAN PT) atau lembaga mandiri lain yang diberi kewenangan oleh Menteri.\r\n\r\nDari latar belakang diatas, maka terbentuklah Pusat Pengembangan Pembelajaran dan Penjaminan Mutu Pendidikan (P4MP) pada Politeknik Negeri Ketapang.', '2022-04-23 09:13:57', '2022-04-23 09:13:57'),
(10, 'Galeri', NULL, 'Struktur Organisasi P4MP', 'app/foto/-1650730486-ZPuaY.png', NULL, '2022-04-23 09:14:46', '2022-04-23 09:46:30'),
(12, 'Visi', 11, 'Visi P4MP', NULL, 'Menjadi lembaga Pengembangan Pembelajaran dan Penjaminan Mutu Akademik yang mampu mengawal POLITAP menuju Disiplin, Unggul dan Mandiri.', '2022-07-19 05:06:27', '2022-07-19 05:06:27');

-- --------------------------------------------------------

--
-- Table structure for table `siami`
--

CREATE TABLE `siami` (
  `id` int(10) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siami`
--

INSERT INTO `siami` (`id`, `user_id`, `nama`, `file`, `level`, `created_at`, `updated_at`) VALUES
(3, NULL, 'Laporan AMI AI 2016', 'app/file/siami/-1650981187-I0BPV.pdf', 'Laporan', '2022-04-26 06:53:07', '2022-04-26 06:53:07'),
(4, NULL, 'Laporan AMI BTP 2016', 'app/file/siami/-1650981218-onJLh.pdf', 'Laporan', '2022-04-26 06:53:39', '2022-04-26 06:53:39'),
(5, NULL, 'Laporan AMI TE 2016', 'app/file/siami/-1650981248-aedCz.pdf', 'Laporan', '2022-04-26 06:54:08', '2022-04-26 06:54:08'),
(6, NULL, 'Laporan AMI TM 2016', 'app/file/siami/-1650981282-9Im9d.pdf', 'Laporan', '2022-04-26 06:54:42', '2022-04-26 06:54:42'),
(7, NULL, 'Laporan AMI TI 2016', 'app/file/siami/-1650981323-pZsjD.pdf', 'Laporan', '2022-04-26 06:55:23', '2022-04-26 06:55:23'),
(8, NULL, 'Laporan AMI TP 2016', 'app/file/siami/-1650981351-BR1in.pdf', 'Laporan', '2022-04-26 06:55:51', '2022-04-26 06:55:51'),
(9, NULL, 'Laporan AMI TPHP 2016', 'app/file/siami/-1650981379-Xb3Bf.pdf', 'Laporan', '2022-04-26 06:56:19', '2022-04-26 06:56:19'),
(10, NULL, 'Laporan AMI TS 2016', 'app/file/siami/-1650981416-VUZ43.pdf', 'Laporan', '2022-04-26 06:56:56', '2022-04-26 06:56:56'),
(11, NULL, 'Laporan AUDIT TM', 'app/file/siami/-1650981470-RsPyd.pdf', 'Laporan', '2022-04-26 06:57:50', '2022-04-26 06:57:50'),
(12, NULL, 'Laporan AUDIT TP', 'app/file/siami/-1650981501-JfEdb.pdf', 'Laporan', '2022-04-26 06:58:21', '2022-04-28 13:13:12'),
(13, NULL, 'Laporan AUDIT TPHP', 'app/file/siami/-1650981557-LzYmq.pdf', 'Laporan', '2022-04-26 06:59:17', '2022-04-26 06:59:17'),
(14, NULL, 'Berita Acara AMI', 'app/file/siami/-1650981647-Ycxvu.pdf', 'Pelaksanaan', '2022-04-26 07:00:47', '2022-04-26 07:00:47'),
(15, NULL, 'Daftar Hadir Pemeriksaan AMI', 'app/file/siami/-1650981694-dX7Bh.pdf', 'Pelaksanaan', '2022-04-26 07:01:34', '2022-06-20 16:34:36'),
(16, NULL, 'Dokumentasi Visitas AMI ke Prodi AI', 'app/file/siami/16-1655743651-s7zoP.pdf', 'Pelaksanaan', '2022-04-26 07:02:23', '2022-06-20 09:47:31'),
(17, NULL, 'SK Auditor AMI 2020', 'app/file/siami/-1651150624-OhYfO.pdf', 'Pelaksanaan', '2022-04-28 05:57:05', '2022-04-28 05:57:05'),
(18, NULL, 'Flayer SIAMI', 'app/file/siami/18-1655743815-jeVrP.pdf', 'Pelaksanaan', '2022-04-28 06:02:48', '2022-06-20 16:50:55'),
(19, NULL, 'Surat tugas auditor AMI', 'app/file/siami/-1651151178-3n631.pdf', 'Laporan', '2022-04-28 06:06:18', '2022-06-20 16:34:49'),
(20, NULL, 'Laporan Hasil Audit 2020', 'app/file/siami/-1651151455-r979u.pdf', 'Laporan', '2022-04-28 06:10:55', '2022-04-28 06:10:55'),
(21, NULL, 'Dokumentasi Rapat Tinjauan Manajemen', 'app/file/siami/21-1655743123-Jd02a.pdf', 'Pelaksanaan', '2022-04-28 06:12:02', '2022-06-20 16:40:45'),
(22, NULL, 'Laporan AMI Prodi BTP', 'app/file/siami/-1651151801-GQTTq.pdf', 'Laporan', '2022-04-28 06:16:41', '2022-04-28 06:16:41'),
(23, NULL, 'Laporan AMI Prodi Teknik Informatika', 'app/file/siami/-1651151841-xTp2S.pdf', 'Laporan', '2022-04-28 06:17:21', '2022-04-28 06:17:21'),
(24, NULL, 'Laporan AMI Prodi PPM', 'app/file/siami/-1651151871-YeaLI.pdf', 'Laporan', '2022-04-28 06:17:51', '2022-04-28 06:17:51'),
(25, NULL, 'Laporan AMI Prodi TPHP', 'app/file/siami/-1651151902-Cx0LH.pdf', 'Laporan', '2022-04-28 06:18:22', '2022-04-28 06:18:22'),
(26, NULL, 'Laporan AMI Prodi Agroindustri', 'app/file/siami/-1651151940-9JE7g.pdf', 'Laporan', '2022-04-28 06:19:00', '2022-04-28 06:19:00'),
(27, NULL, 'Laporan AMI Prodi Teknik Pertambangan', 'app/file/siami/-1651151981-HNfp2.pdf', 'Laporan', '2022-04-28 06:19:41', '2022-04-28 06:19:41'),
(28, NULL, 'Laporan AMI Prodi Teknik Sipil', 'app/file/siami/-1651152021-upOkx.pdf', 'Laporan', '2022-04-28 06:20:21', '2022-04-28 06:20:21'),
(29, NULL, 'Laporan AMI Prodi Teknik Elektro', 'app/file/siami/-1651152069-TXaVe.pdf', 'Laporan', '2022-04-28 06:21:09', '2022-04-28 06:21:09');

-- --------------------------------------------------------

--
-- Table structure for table `tim`
--

CREATE TABLE `tim` (
  `id` int(10) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nip` char(30) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tim`
--

INSERT INTO `tim` (`id`, `user_id`, `nama`, `nip`, `jabatan`, `jenis_kelamin`, `alamat`, `foto`, `instagram`, `created_at`, `updated_at`) VALUES
(1, 11, 'Endang Kusmana', '19610302001121002', 'DIREKTUR POLITEKNIK NEGERI KETAPANG', 'Laki-laki', 'Ketapang', 'app/foto/tim-p4mp/1-1658406992-AYUpU.jpg', 'https://www.instagram.com/endangkusmana68/?hl=id', '2022-06-05 07:30:40', '2022-07-21 05:37:39'),
(3, 11, 'Sy. Indra Septiansyah, S.Si.,M.T', '11111111', 'Kepala TIM P4MP', 'Laki-laki', 'Jl. Gatot Subroto', 'app/foto/tim-p4mp/-1657440686-PEXGX.jpg', 'https://instagram.com/indraqadrie?igshid=YmMyMTA2M2Y=', '2022-07-10 01:11:26', '2022-07-21 05:41:19');

-- --------------------------------------------------------

--
-- Table structure for table `unduhan`
--

CREATE TABLE `unduhan` (
  `id` int(10) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unduhan`
--

INSERT INTO `unduhan` (`id`, `keterangan`, `user_id`, `deskripsi`, `tanggal_masuk`, `file`, `foto`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Kebijakan Nasional SPMI  2017', NULL, 'Dokumen Kebijakan Nasional SPMI', '2022-04-14', 'app/unduhan/file/1-1656310035-GYp7p.pdf', 'app/unduhan/foto/-1648214833-GAB44.jpg', 'Peraturan', '2022-03-25 06:27:13', '2022-06-26 23:07:15'),
(2, 'Standar Nasional Pendidikan Tinggi SN Dikti', NULL, 'Dokumen Standar Nasional Pendidikan Tinggi SN Dikti', '2022-04-14', 'app/unduhan/file/2-1656310080-fqOxS.pdf', NULL, 'Peraturan', '2022-04-14 07:41:55', '2022-06-26 23:08:00'),
(3, 'Penyusunan Dokumen Kebijakan SPMI', NULL, 'Format Penyusunan Dokumen Kebijakan SPMI', '2022-04-14', 'app/unduhan/file/3-1656310124-j2aqc.pdf', NULL, 'Peraturan', '2022-04-14 07:45:12', '2022-06-26 23:08:44'),
(4, 'Buku Pedoman SPMI 2018', NULL, 'Buku Pedoman SPMI 2018', '2022-04-14', 'app/unduhan/file/4-1656310163-DXIEy.pdf', NULL, 'Peraturan', '2022-04-14 07:46:58', '2022-06-26 23:09:23'),
(5, 'Buku Pelatihan SPMI 2016', NULL, 'Buku Pelatihan SPMI 2016', '2022-04-14', 'app/unduhan/file/5-1656310194-Vd3TW.pdf', NULL, 'Peraturan', '2022-04-14 07:47:35', '2022-06-26 23:09:54'),
(6, 'Perumusan Standar', NULL, 'Dokumen Perumusan Standar', '2022-04-14', 'app/unduhan/file/6-1656310260-wl0VC.pdf', NULL, 'Peraturan', '2022-04-14 07:48:12', '2022-06-26 23:11:00'),
(7, 'Dokumen SOTK', NULL, 'DOKUMEN SOTK', '2022-06-27', 'app/unduhan/file/-1656309641-7RnJJ.pdf', NULL, 'SOTK', '2022-06-26 23:00:41', '2022-06-26 23:00:41'),
(8, 'STATUTA POLITAP', NULL, 'Dokumen Statuta', '2022-06-27', 'app/unduhan/file/-1656309827-ZpyOh.pdf', NULL, 'Statuta', '2022-06-26 23:03:47', '2022-06-26 23:03:47'),
(9, 'RENSTRA POLITAP', NULL, 'Dokumen Renstra Politap', '2022-06-27', 'app/unduhan/file/-1656309871-Lra3O.pdf', NULL, 'Renstra', '2022-06-26 23:04:31', '2022-06-26 23:04:31'),
(10, 'Salinan PERMENDIKBUD 3 tahun 2020', NULL, 'Salinan PERMENDIKBUD 3 tahun 2020', '2022-06-27', 'app/unduhan/file/-1656310345-O7Py8.pdf', NULL, 'Peraturan', '2022-06-26 23:12:25', '2022-06-26 23:12:25'),
(11, 'Salinan PERMENDIKBUD 4 tahun 2020', NULL, 'Salinan PERMENDIKBUD 4 tahun 2020', '2022-06-27', 'app/unduhan/file/-1656310401-JWpPU.pdf', NULL, 'Peraturan', '2022-06-26 23:13:21', '2022-06-26 23:13:21'),
(12, 'Salinan PERMENDIKBUD 5 tahun 2020', NULL, 'Salinan PERMENDIKBUD 5 tahun 2020', '2022-06-27', 'app/unduhan/file/-1656310435-FyyqU.pdf', NULL, 'Peraturan', '2022-06-26 23:13:55', '2022-06-26 23:13:55'),
(13, 'Salinan PERMENDIKBUD 6 tahun 2020', NULL, 'Salinan PERMENDIKBUD 6 tahun 2020', '2022-06-27', 'app/unduhan/file/-1656310488-f0zMu.pdf', NULL, 'Peraturan', '2022-06-26 23:14:48', '2022-06-26 23:14:48'),
(14, 'Salinan PERMENDIKBUD 7 tahun 2020', NULL, 'Salinan PERMENDIKBUD 7 tahun 2020', '2022-06-27', 'app/unduhan/file/-1656310521-QNO2M.pdf', NULL, 'Peraturan', '2022-06-26 23:15:21', '2022-06-26 23:15:21'),
(15, 'UU No. 12 2012', NULL, 'UU No. 12 2012', '2022-06-27', 'app/unduhan/file/-1656310598-s1mFH.pdf', NULL, 'Peraturan', '2022-06-26 23:16:38', '2022-06-26 23:16:38'),
(17, 'KUISIONER DARING POLITAP OKE', NULL, NULL, '2022-06-27', 'app/unduhan/file/-1656311873-ETGa0.pdf', NULL, 'Monitoring', '2022-06-26 23:37:54', '2022-06-26 23:37:54'),
(18, 'KUISIONER DARING POLITAP SEMESTER GANJIL', NULL, NULL, '2022-06-27', 'app/unduhan/file/-1656311924-QSypB.pdf', NULL, 'Monitoring', '2022-06-26 23:38:44', '2022-06-26 23:38:44');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `level` int(5) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `level`, `foto`, `nama`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 1, NULL, 'user', 'user', 'user@gmail.com', '$2y$10$K8Zs6u4gn2CMtnOO.Aol4e3M8ZfHpGNOWCoK8OYSQDAT8jp8a6/Ga', NULL, '2022-05-11 07:54:59', '2022-05-11 15:41:45'),
(3, 1, 'app/foto/3-1655746247-OK7DT.jpg', 'Pengunjung', 'pengunjung', 'pengunjung@gmail.com', '$2y$10$mAp7YY7EiG.m8UrCpOBPjuKRYcJcHimx3EkrThAGQ4/g7jHElY5IW', NULL, '2022-05-11 08:44:28', '2022-06-20 10:31:23'),
(4, 0, NULL, 'Sy. Indra Septiansyah', 'indra', 'admin@gmail.com', '$2y$10$2Rzi4JYETlJ6hf4X/ylzc.VxB8Q3d5GGqAoTHsIcyshsDJe8hiQwC', NULL, '2022-06-08 06:10:57', '2022-07-16 08:08:52'),
(11, 0, NULL, 'Sy. Indra Septiansyah, S.Si.,M.T', 'admin', 'syindraseptiansyah@gmail.com', '$2y$10$sqftuR6Z3yUfGKjPeKzlGeWSP45/9eLogTAeoFI0yeaDfw4AqOWKO', NULL, '2022-07-16 08:06:54', '2022-07-21 21:55:55'),
(13, 0, NULL, 'Eka Wahyudi', 'ekawahyudi', 'ekawhyudi@gmail.com', '$2y$10$gLj5O.rIgjLtcNYIva9K3urq9DZG6MDVqjxKc21G2g0/ylM3vb4NG', NULL, '2022-07-22 22:43:35', '2022-07-22 22:52:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akreditasi`
--
ALTER TABLE `akreditasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crud_events`
--
ALTER TABLE `crud_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `klinik_spmi`
--
ALTER TABLE `klinik_spmi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siami`
--
ALTER TABLE `siami`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tim`
--
ALTER TABLE `tim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unduhan`
--
ALTER TABLE `unduhan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akreditasi`
--
ALTER TABLE `akreditasi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=534;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `crud_events`
--
ALTER TABLE `crud_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `klinik_spmi`
--
ALTER TABLE `klinik_spmi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `siami`
--
ALTER TABLE `siami`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tim`
--
ALTER TABLE `tim`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `unduhan`
--
ALTER TABLE `unduhan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
