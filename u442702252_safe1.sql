-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 10 Okt 2018 pada 09.15
-- Versi server: 10.2.17-MariaDB
-- Versi PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u442702252_safe1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_apd`
--

CREATE TABLE `tb_apd` (
  `id_apd` int(10) NOT NULL,
  `ket_apd1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_apd1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_apd1` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `desk_apd1` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_apd2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_apd2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_apd2` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `desk_apd2` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_apd3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_apd3` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_apd3` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `desk_apd3` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `date_apd` date NOT NULL,
  `time_apd` time NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bk`
--

CREATE TABLE `tb_bk` (
  `id_bk` int(10) NOT NULL,
  `ket_bk1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_bk1` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_bk1` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `desk_bk1` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_bk2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_bk2` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_bk2` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `desk_bk2` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_bk3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_bk3` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_bk3` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `desk_bk3` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_bk4` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_bk4` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_bk4` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `desk_bk4` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_bk5` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_bk5` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_bk5` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `desk_bk5` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `date_bk` date NOT NULL,
  `time_bk` time NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bos`
--

CREATE TABLE `tb_bos` (
  `id_bos` int(10) NOT NULL,
  `ket_bos1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_bos1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_bos1` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `desk_bos1` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_bos2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_bos2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_bos2` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `desk_bos2` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_bos3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_bos3` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_bos3` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `desk_bos3` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_bos4` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_bos4` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_bos4` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `desk_bos4` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_bos5` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_bos5` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_bos5` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `desk_bos5` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_bos6` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_bos6` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_bos6` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `desk_bos6` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_bos7` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_bos7` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_bos7` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `desk_bos7` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_bos8` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_bos8` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_bos8` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `desk_bos8` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_bos9` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_bos9` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_bos9` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `desk_bos9` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_bos10` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_bos10` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_bos10` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `desk_bos10` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_bos11` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_bos11` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_bos11` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `desk_bos11` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_bos12` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_bos12` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_bos12` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `desk_bos12` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_bos13` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_bos13` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_bos13` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `desk_bos13` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_bos14` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_bos14` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_bos14` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `desk_bos14` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_bos15` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_bos15` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_bos15` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `desk_bos15` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_bos16` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_bos16` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_bos16` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `desk_bos16` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_bos17` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_bos17` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_bos17` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `desk_bos17` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_bos18` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_bos18` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_bos18` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `desk_bos18` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_bos19` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_bos19` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_bos19` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `desk_bos19` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_bos20` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_bos20` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_bos20` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `desk_bos20` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `date_bos` date NOT NULL,
  `time_bos` time NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_handbook`
--

CREATE TABLE `tb_handbook` (
  `id_hb` int(11) NOT NULL,
  `url` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `tb_handbook`
--

INSERT INTO `tb_handbook` (`id_hb`, `url`, `name`) VALUES
(12, 'http://panlisafety.890m.com/android/user/handbook/pdf_file/xjz1dfk0bth43e5pnrqu.pdf', 'Basic Forklift Training'),
(13, 'http://panlisafety.890m.com/android/user/handbook/pdf_file/1iqmq39dptpjf3p12hmg.pdf', 'Basic Tugger Training'),
(14, 'http://panlisafety.890m.com/android/user/handbook/pdf_file/qd16z0phg2xsh9psi9rk.pdf', 'Mandatory Safety Training - Chemical Spill Handling'),
(15, 'http://panlisafety.890m.com/android/user/handbook/pdf_file/sycjzpt04b3a7swh2i55.pdf', 'Mandatory Safety Training - Chemical Safety Handling'),
(16, 'http://panlisafety.890m.com/android/user/handbook/pdf_file/qz7259zq5mbw30f7s2m6.pdf', 'Mandatory Safety Training Modul - Hazardous Waste Management'),
(17, 'http://panlisafety.890m.com/android/user/handbook/pdf_file/asr25z5rsw4esvmyhq8m.pdf', 'Mandatory Safety Training Modul - Hot Work Management'),
(18, 'http://panlisafety.890m.com/android/user/handbook/pdf_file/v8rp6d152jigb5akns9r.pdf', 'Mandatory Safety Training Modul - PPE dan Potential Hazard'),
(19, 'http://panlisafety.890m.com/android/user/handbook/pdf_file/8z11cznfugbpkykrsq65.pdf', 'Mandatory Safety Training Modul - Workat Height - Awareness'),
(20, 'http://panlisafety.890m.com/android/user/handbook/pdf_file/tfneh2615iymtnzcmhvy.pdf', 'Red Light Behaviour SOR3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hp`
--

CREATE TABLE `tb_hp` (
  `id_hp1` int(11) NOT NULL,
  `ket_hp1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_hp1` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_hp1` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `desk_hp1` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ket_hp2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_hp2` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_hp2` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `desk_hp2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ket_hp3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_hp3` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_hp3` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `desk_hp3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ket_hp4` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_hp4` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_hp4` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `desk_hp4` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ket_hp5` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_hp5` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_hp5` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `desk_hp5` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ket_hp6` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_hp6` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_hp6` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `desk_hp6` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ket_hp7` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_hp7` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_hp7` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `desk_hp7` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ket_hp8` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_hp8` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_hp8` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `desk_hp8` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date_hp1` date NOT NULL,
  `time_hp1` time NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `tb_hp`
--

INSERT INTO `tb_hp` (`id_hp1`, `ket_hp1`, `area_hp1`, `hasil_hp1`, `desk_hp1`, `ket_hp2`, `area_hp2`, `hasil_hp2`, `desk_hp2`, `ket_hp3`, `area_hp3`, `hasil_hp3`, `desk_hp3`, `ket_hp4`, `area_hp4`, `hasil_hp4`, `desk_hp4`, `ket_hp5`, `area_hp5`, `hasil_hp5`, `desk_hp5`, `ket_hp6`, `area_hp6`, `hasil_hp6`, `desk_hp6`, `ket_hp7`, `area_hp7`, `hasil_hp7`, `desk_hp7`, `ket_hp8`, `area_hp8`, `hasil_hp8`, `desk_hp8`, `date_hp1`, `time_hp1`, `id_user`) VALUES
(22, 'Area kerja bersih dan rapi', 'BP', 'Yes', 'p', 'Tak ada minyak, gemuk, tumpahan dll. dilantai', 'BP', 'Yes', 'p', 'Restroom/toilet dan area sekitar dalam kondisi yang bersih dan sehat', 'BP', 'Yes', 'pp', 'Sampah/scrap material dibuang dan tidak menumpuk', 'BP', 'Yes', 'p', 'Selang udara /kabel listrik digulung dan digantung', 'BP', 'Yes', 'pp', 'Peralatan/perkakas tidak bergeletakan', 'BP', 'Yes', 'p', 'Area sekitar gudang e.g. parit, area battery-charging bersih dan rapi', 'BP', 'Yes', 'p', 'Semua forklifts dan stackers diparkirkan diarea yang ditentukan', 'BP', 'Yes', 'p', '2018-09-25', '11:10:00', 24);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_incident`
--

CREATE TABLE `tb_incident` (
  `id_inc` int(11) NOT NULL,
  `time_inc` time NOT NULL,
  `date_inc` date NOT NULL,
  `image_inc` text NOT NULL,
  `name_inc` varchar(50) NOT NULL,
  `gender_inc` varchar(15) NOT NULL,
  `age_inc` int(5) NOT NULL,
  `area_inc` varchar(25) NOT NULL,
  `problem_inc` varchar(255) NOT NULL,
  `rootcause_inc` varchar(255) NOT NULL,
  `actionplan_inc` varchar(255) NOT NULL,
  `pic_inc` varchar(255) NOT NULL,
  `status_inc` varchar(25) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lain`
--

CREATE TABLE `tb_lain` (
  `id_lain` int(10) NOT NULL,
  `ket_lain1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_lain1` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_lain1` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `desk_lain1` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_lain2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_lain2` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_lain2` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `desk_lain2` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_lain3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_lain3` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_lain3` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `desk_lain3` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `date_lain` date NOT NULL,
  `time_lain` time NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `tb_lain`
--

INSERT INTO `tb_lain` (`id_lain`, `ket_lain1`, `area_lain1`, `hasil_lain1`, `desk_lain1`, `ket_lain2`, `area_lain2`, `hasil_lain2`, `desk_lain2`, `ket_lain3`, `area_lain3`, `hasil_lain3`, `desk_lain3`, `date_lain`, `time_lain`, `id_user`) VALUES
(3, 'Terdapat pekerja yang melakukan tindakan tak aman', 'BP', 'Yes', 'Rack Rusak Dilaporkan', 'Terdapat kondisi tidak aman', 'BP', 'Yes', 'Sarung tangan bekas dibuang di Sulo Merah', 'Terdapat kerusakan besar dalam bangunan', 'BP', 'No', '-', '2018-09-21', '15:28:00', 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_listrik`
--

CREATE TABLE `tb_listrik` (
  `id_listrik` int(10) NOT NULL,
  `ket_listrik1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_listrik1` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_listrik1` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `desk_listrik1` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_listrik2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_listrik2` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_listrik2` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `desk_listrik2` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_listrik3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_listrik3` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_listrik3` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `desk_listrik3` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_listrik4` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_listrik4` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_listrik4` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `desk_listrik4` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_listrik5` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_listrik5` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_listrik5` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `desk_listrik5` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `date_listrik` date NOT NULL,
  `time_listrik` time NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mp`
--

CREATE TABLE `tb_mp` (
  `id_mp` int(10) NOT NULL,
  `ket_mp1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_mp1` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_mp1` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `desk_mp1` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_mp2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_mp2` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_mp2` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `desk_mp2` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_mp3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_mp3` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_mp3` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `desk_mp3` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_mp4` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_mp4` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_mp4` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `desk_mp4` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_mp5` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_mp5` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_mp5` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `desk_mp5` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_mp6` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_mp6` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_mp6` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `desk_mp6` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `date_mp` date NOT NULL,
  `time_mp` time NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pk`
--

CREATE TABLE `tb_pk` (
  `id_pk` int(10) NOT NULL,
  `ket_pk1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_pk1` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_pk1` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `desk_pk1` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_pk2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_pk2` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_pk2` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `desk_pk2` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_pk3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_pk3` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_pk3` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `desk_pk3` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_pk4` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_pk4` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_pk4` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `desk_pk4` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_pk5` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_pk5` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_pk5` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `desk_pk5` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_pk6` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_pk6` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_pk6` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `desk_pk6` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_pk7` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_pk7` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_pk7` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `desk_pk7` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `date_pk` date NOT NULL,
  `time_pk` time NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pp`
--

CREATE TABLE `tb_pp` (
  `id_pp` int(10) NOT NULL,
  `ket_pp1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_pp1` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_pp1` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `desk_pp1` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_pp2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_pp2` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_pp2` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `desk_pp2` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_pp3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_pp3` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_pp3` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `desk_pp3` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `date_pp` date NOT NULL,
  `time_pp` time NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ppm`
--

CREATE TABLE `tb_ppm` (
  `id_ppm` int(10) NOT NULL,
  `ket_ppm1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_ppm1` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_ppm1` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `desk_ppm1` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_ppm2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_ppm2` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_ppm2` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `desk_ppm2` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_ppm3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_ppm3` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_ppm3` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `desk_ppm3` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_ppm4` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_ppm4` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_ppm4` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `desk_ppm4` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_ppm5` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_ppm5` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_ppm5` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `desk_ppm5` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ket_ppm6` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_ppm6` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hasil_ppm6` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `desk_ppm6` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `date_ppm` date NOT NULL,
  `time_ppm` time NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_unsafecondition`
--

CREATE TABLE `tb_unsafecondition` (
  `id_uc` int(11) NOT NULL,
  `time_uc` time NOT NULL,
  `date_uc` date NOT NULL,
  `image_uc` text NOT NULL,
  `category_uc` varchar(25) NOT NULL,
  `level_danger` varchar(25) NOT NULL,
  `area_uc` varchar(25) NOT NULL,
  `problem_uc` text NOT NULL,
  `due_date` date NOT NULL,
  `status_uc` varchar(25) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_unsafecondition`
--

INSERT INTO `tb_unsafecondition` (`id_uc`, `time_uc`, `date_uc`, `image_uc`, `category_uc`, `level_danger`, `area_uc`, `problem_uc`, `due_date`, `status_uc`, `id_user`) VALUES
(71, '13:11:00', '2018-09-03', 'http://panlisafety.890m.com/android/user/unsafecondition/image/fprjyj7dvtrws5f0i6r4.png', 'Fire / Electrical', 'Normal', 'LOC', 'fire extinguisher need to move and no checklis', '2018-09-07', 'Closed', 17),
(72, '08:51:00', '2018-09-05', 'http://panlisafety.890m.com/android/user/unsafecondition/image/rbbis44fesi20thbjrhz.png', 'Safety', 'Warning', 'LOC', 'barrier gone', '2018-09-06', 'On Progress', 17),
(73, '08:54:00', '2018-09-05', 'http://panlisafety.890m.com/android/user/unsafecondition/image/vajdnhc9v6rr7bi5khew.png', 'Mobile Equipment', 'Danger', 'CMA', 'potential hazard no rubber and fall out. lingyun p/n 23929565', '2018-09-30', 'Open', 17),
(74, '09:08:00', '2018-09-05', 'http://panlisafety.890m.com/android/user/unsafecondition/image/dcngbx409pez7gv58fb7.png', 'Fire / Electrical', 'Warning', 'LOC', 'unpinned fire extinguisher.', '2018-09-05', 'Closed', 17),
(75, '09:10:00', '2018-09-05', 'http://panlisafety.890m.com/android/user/unsafecondition/image/41dy16j4dnennndnn2wg.png', 'Safety', 'Warning', 'LOC', 'bolt unused.', '2018-09-05', 'Closed', 17),
(77, '09:41:00', '2018-09-05', 'http://panlisafety.890m.com/android/user/unsafecondition/image/cs73m3zh7uuenimvkamh.png', 'Safety', 'Normal', 'BP', 'Rack Has no rubber at CMA Body. Potential to unstable position and reform', '2018-09-05', 'On Progress', 20),
(78, '10:07:00', '2018-09-07', 'http://panlisafety.890m.com/android/user/unsafecondition/image/6k9fmskzdcfqpzh3g5ux.png', 'Mobile Equipment', 'Warning', 'LOC', 'Dolly rusak, masih dipakai oleh team linefeed LOC', '2018-09-07', 'Open', 18),
(80, '10:13:00', '2018-09-07', 'http://panlisafety.890m.com/android/user/unsafecondition/image/ug8exvj5e25katyu5s8p.png', 'Safety', 'Normal', 'LOC', 'Beberapa Safety sign \"emergency exit\" posisi nya tertutup dan arahnya salah', '2018-09-07', 'Open', 18),
(84, '10:16:00', '2018-09-07', 'http://panlisafety.890m.com/android/user/unsafecondition/image/x7wwiwszkjr4mxefe6mm.png', 'Safety', 'Warning', 'LOC', 'Case / box kayu terlalu dekat dengan tiang high rack. Berbahaya saat akan memindahkan case box tersebut...', '2018-09-07', 'Open', 18),
(85, '14:17:00', '2018-09-07', 'http://panlisafety.890m.com/android/user/unsafecondition/image/g2cw523wya3565hfgwbw.png', 'Safety', 'Warning', 'LOC', 'Part / case wheel terlalu dekat dengan dinding, sampai menempel. Di area High Racj', '2018-09-07', 'Open', 18),
(88, '14:20:00', '2018-09-07', 'http://panlisafety.890m.com/android/user/unsafecondition/image/6nqmbb9wgxrt4p8ahcrr.png', 'Safety', 'Danger', 'LOC', 'Tidak ada pengaman dikaki high rack, dan terlihat kaki Highrack sedikit dent / penyok. Bisa menyebabkan high rack ambruk.', '2018-09-07', 'Open', 18),
(89, '14:22:00', '2018-09-07', 'http://panlisafety.890m.com/android/user/unsafecondition/image/xd3s9a4rxfe0qqaw7ny8.png', 'WPO / 5R', 'Normal', 'LOC', 'WPO diarea high rack berantakan', '2018-09-07', 'Open', 18),
(91, '13:55:00', '2018-09-10', 'http://panlisafety.890m.com/android/user/unsafecondition/image/ngw91078t00xxsut0x5s.png', 'Safety', 'Warning', 'LOC', 'corner case need to reduce to eye level', '2018-09-14', 'Open', 17),
(92, '13:56:00', '2018-09-10', 'http://panlisafety.890m.com/android/user/unsafecondition/image/tpkpnacfxa3a86sb93a9.png', 'Safety', 'Warning', 'LOC', 'corner case need to reduce to eye leveel', '2018-09-14', 'Open', 17);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `password` varchar(20) NOT NULL,
  `foto` text NOT NULL,
  `level` enum('Pegawai','admin','member') NOT NULL,
  `confirmed` enum('Active','Not Active') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `email`, `nohp`, `alamat`, `username`, `gender`, `password`, `foto`, `level`, `confirmed`) VALUES
(9, 'R Rifa Fauzi Komara', 'rifafauzi6@gmail.com', '081222300420', 'Tasil', 'rifafauzi6', 'Male', 'Fauzi1997', 'http://panlisafety.890m.com/android/user/profile/image/3aresuzesrs7yfxqv9z7.png', 'Pegawai', 'Active'),
(11, 'Ikhsan', 'nurikhsan175@gmail.c', '082168087359', 'Perumahan Taman Sentosa Blok A4 No.27', 'san24', 'Male', 'papipu97', 'http://panlisafety.890m.com/user/profile/', 'Pegawai', 'Active'),
(12, 'krisna s yanuar', 'krisna.yanuar@panli.', '082316392386', 'sor 3', 'krisna', 'Male', 'krisna1', 'http://panlisafety.890m.com/user/profile/', 'Pegawai', 'Active'),
(17, 'beth sela', 'beth.tambunan@panli.co.id', '081382423666', 'depok', 'SELA.HSE', 'Female', 'Beth5544', 'http://panlisafety.890m.com/user/profile/', 'Pegawai', 'Active'),
(18, 'Topfan Adam', 'topfanadam@yahoo.co.id', '085726446611', 'Cikarang', 'engineer11', 'Male', 'Lahiir446611', 'http://panlisafety.890m.com/android/user/profile/image/rh1132heckgqd7m8ma27.png', 'Pegawai', 'Active'),
(19, 'krisna s Yanuar', 'krisna.yanuar@panli.co.id', '082316392386', 'GIIC SOR 3', 'Kriz', 'Male', 'Krisnasu0586', 'http://panlisafety.890m.com/user/profile/', 'Pegawai', 'Active'),
(20, 'Ksyanuar', 'krisna.yanuar@panli.co.id', '082316392386', 'sor 3', 'ksyanuar ', 'Male', '11282004', 'http://panlisafety.890m.com/user/profile/', 'Pegawai', 'Active'),
(23, 'indra', 'indra@gmail.com', '087578484564', 'medan', 'indra', 'Male', 'indra', 'http://panlisafety.890m.com/android/user/profile/image/g7w3udac8nvjvwh82cr5.png', 'Pegawai', 'Active'),
(24, 'p', 'p', '054848484884', 'p', 'p', 'Male', 'p', 'http://panlisafety.890m.com/android/user/profile/image/snngg68j7fx65anq3a1z.png', 'Pegawai', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_apd`
--
ALTER TABLE `tb_apd`
  ADD PRIMARY KEY (`id_apd`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_bk`
--
ALTER TABLE `tb_bk`
  ADD PRIMARY KEY (`id_bk`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_bos`
--
ALTER TABLE `tb_bos`
  ADD PRIMARY KEY (`id_bos`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_handbook`
--
ALTER TABLE `tb_handbook`
  ADD PRIMARY KEY (`id_hb`);

--
-- Indeks untuk tabel `tb_hp`
--
ALTER TABLE `tb_hp`
  ADD PRIMARY KEY (`id_hp1`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_incident`
--
ALTER TABLE `tb_incident`
  ADD PRIMARY KEY (`id_inc`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_lain`
--
ALTER TABLE `tb_lain`
  ADD PRIMARY KEY (`id_lain`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_listrik`
--
ALTER TABLE `tb_listrik`
  ADD PRIMARY KEY (`id_listrik`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_mp`
--
ALTER TABLE `tb_mp`
  ADD PRIMARY KEY (`id_mp`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_pk`
--
ALTER TABLE `tb_pk`
  ADD PRIMARY KEY (`id_pk`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_pp`
--
ALTER TABLE `tb_pp`
  ADD PRIMARY KEY (`id_pp`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_ppm`
--
ALTER TABLE `tb_ppm`
  ADD PRIMARY KEY (`id_ppm`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_unsafecondition`
--
ALTER TABLE `tb_unsafecondition`
  ADD PRIMARY KEY (`id_uc`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_apd`
--
ALTER TABLE `tb_apd`
  MODIFY `id_apd` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_bk`
--
ALTER TABLE `tb_bk`
  MODIFY `id_bk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_bos`
--
ALTER TABLE `tb_bos`
  MODIFY `id_bos` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_handbook`
--
ALTER TABLE `tb_handbook`
  MODIFY `id_hb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tb_hp`
--
ALTER TABLE `tb_hp`
  MODIFY `id_hp1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tb_incident`
--
ALTER TABLE `tb_incident`
  MODIFY `id_inc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tb_lain`
--
ALTER TABLE `tb_lain`
  MODIFY `id_lain` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_listrik`
--
ALTER TABLE `tb_listrik`
  MODIFY `id_listrik` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_mp`
--
ALTER TABLE `tb_mp`
  MODIFY `id_mp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_pk`
--
ALTER TABLE `tb_pk`
  MODIFY `id_pk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_pp`
--
ALTER TABLE `tb_pp`
  MODIFY `id_pp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_ppm`
--
ALTER TABLE `tb_ppm`
  MODIFY `id_ppm` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_unsafecondition`
--
ALTER TABLE `tb_unsafecondition`
  MODIFY `id_uc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_apd`
--
ALTER TABLE `tb_apd`
  ADD CONSTRAINT `tb_apd_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tb_bk`
--
ALTER TABLE `tb_bk`
  ADD CONSTRAINT `tb_bk_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tb_bos`
--
ALTER TABLE `tb_bos`
  ADD CONSTRAINT `tb_bos_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tb_hp`
--
ALTER TABLE `tb_hp`
  ADD CONSTRAINT `tb_hp_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tb_incident`
--
ALTER TABLE `tb_incident`
  ADD CONSTRAINT `tb_incident_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tb_lain`
--
ALTER TABLE `tb_lain`
  ADD CONSTRAINT `tb_lain_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tb_listrik`
--
ALTER TABLE `tb_listrik`
  ADD CONSTRAINT `tb_listrik_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tb_mp`
--
ALTER TABLE `tb_mp`
  ADD CONSTRAINT `tb_mp_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tb_pk`
--
ALTER TABLE `tb_pk`
  ADD CONSTRAINT `tb_pk_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tb_pp`
--
ALTER TABLE `tb_pp`
  ADD CONSTRAINT `tb_pp_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tb_ppm`
--
ALTER TABLE `tb_ppm`
  ADD CONSTRAINT `tb_ppm_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tb_unsafecondition`
--
ALTER TABLE `tb_unsafecondition`
  ADD CONSTRAINT `tb_unsafecondition_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
