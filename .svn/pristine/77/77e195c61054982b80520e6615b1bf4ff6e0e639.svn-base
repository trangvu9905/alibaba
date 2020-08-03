-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2020 at 08:06 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alibaba`
--

-- --------------------------------------------------------

--
-- Table structure for table `bangdiem`
--

CREATE TABLE `bangdiem` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idhocsinh` int(11) DEFAULT NULL,
  `idlophoc` int(11) DEFAULT NULL,
  `diem` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bangdiem_cat`
--

CREATE TABLE `bangdiem_cat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  `tenhocki` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bangdiem_column`
--

CREATE TABLE `bangdiem_column` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idcat` int(11) DEFAULT NULL,
  `header` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stt` int(11) DEFAULT NULL,
  `namecolumn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  `congthuc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `autorun` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bangdiem_log`
--

CREATE TABLE `bangdiem_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `updatetime` timestamp NULL DEFAULT NULL,
  `idcat` int(11) DEFAULT NULL,
  `idlop` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bangdiem_value`
--

CREATE TABLE `bangdiem_value` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idbangdiem` int(11) DEFAULT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idhv` int(11) DEFAULT NULL,
  `iddk` int(11) DEFAULT NULL,
  `idlop` int(11) DEFAULT NULL,
  `codecol` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chatgroup`
--

CREATE TABLE `chatgroup` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updatetime` timestamp NULL DEFAULT NULL,
  `typegroup` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chatgroup_text`
--

CREATE TABLE `chatgroup_text` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idgroup` int(11) DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `readed` int(11) DEFAULT NULL,
  `updatetime` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chatgroup_user`
--

CREATE TABLE `chatgroup_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idgroup` int(11) DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  `typeview` int(11) DEFAULT NULL,
  `updatetime` timestamp NULL DEFAULT NULL,
  `idinvite` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chinhanh`
--

CREATE TABLE `chinhanh` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `machinhanh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diengiai` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updatetime` timestamp NULL DEFAULT NULL,
  `enable` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chinhanh`
--

INSERT INTO `chinhanh` (`id`, `iduser`, `logo`, `machinhanh`, `ten`, `diengiai`, `updatetime`, `enable`, `created_at`, `updated_at`) VALUES
(74, NULL, '1_60984845006u.jpg', 'TH TG 01', 'Alibaba Trụ sở chính, Tĩnh Gia', NULL, NULL, NULL, '2020-02-27 01:06:18', '2020-03-05 00:15:38'),
(75, NULL, '1_60984845006u.jpg', 'ALI TNPT', 'Alibaba Tam Nông Phú Thọ', NULL, NULL, NULL, '2020-02-27 01:06:37', '2020-02-27 01:06:37'),
(76, NULL, '240_4342336003n.png', 'Olympia PN', 'Olympia Phố Nối', '<p>thin</p>', NULL, NULL, '2020-02-27 01:06:57', '2020-02-28 00:52:52');

-- --------------------------------------------------------

--
-- Table structure for table `chuongtrinh`
--

CREATE TABLE `chuongtrinh` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `idchinhanh` int(10) DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stt` int(11) DEFAULT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable` int(11) DEFAULT NULL,
  `MACT` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `style_diemdanh` int(11) DEFAULT NULL,
  `style_diem` int(11) DEFAULT NULL,
  `testdauvao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `baigioithieu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chuongtrinh`
--

INSERT INTO `chuongtrinh` (`id`, `iduser`, `idchinhanh`, `logo`, `ten`, `stt`, `mota`, `enable`, `MACT`, `style_diemdanh`, `style_diem`, `testdauvao`, `baigioithieu`, `updatetime`, `created_at`, `updated_at`) VALUES
(60, NULL, NULL, NULL, 'doanthinFDHfsadsa', NULL, NULL, NULL, 'test', NULL, NULL, NULL, NULL, '2020-03-05 00:00:00', '2020-03-02 19:25:21', '2020-03-05 00:10:09'),
(61, NULL, NULL, NULL, 'test', NULL, NULL, NULL, 'eqw', NULL, NULL, NULL, NULL, '2020-03-05 00:00:00', '2020-03-02 19:25:32', '2020-03-04 21:02:26'),
(64, NULL, NULL, ' ', 'sadsa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-05 00:09:59', '2020-03-05 00:09:59');

-- --------------------------------------------------------

--
-- Table structure for table `chuongtrinh_chinhanh`
--

CREATE TABLE `chuongtrinh_chinhanh` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `idchinhanh` int(11) DEFAULT NULL,
  `idchuongtrinh` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chuongtrinh_chinhanh`
--

INSERT INTO `chuongtrinh_chinhanh` (`id`, `iduser`, `idchinhanh`, `idchuongtrinh`, `updatetime`, `created_at`, `updated_at`) VALUES
(42, NULL, 75, 61, NULL, '2020-03-04 21:02:26', '2020-03-04 21:02:26'),
(43, NULL, 76, 61, NULL, '2020-03-04 21:02:26', '2020-03-04 21:02:26'),
(50, NULL, 75, 64, NULL, '2020-03-05 00:09:59', '2020-03-05 00:09:59'),
(51, NULL, 76, 64, NULL, '2020-03-05 00:09:59', '2020-03-05 00:09:59'),
(52, NULL, 74, 60, NULL, '2020-03-05 00:10:09', '2020-03-05 00:10:09'),
(53, NULL, 75, 60, NULL, '2020-03-05 00:10:09', '2020-03-05 00:10:09'),
(54, NULL, 76, 60, NULL, '2020-03-05 00:10:09', '2020-03-05 00:10:09');

-- --------------------------------------------------------

--
-- Table structure for table `config_data_text`
--

CREATE TABLE `config_data_text` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  `orders` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dangki`
--

CREATE TABLE `dangki` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `MADK` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idchinhanh` int(10) DEFAULT NULL,
  `idchuongtrinh` int(10) DEFAULT NULL,
  `idhocsinh` int(11) DEFAULT NULL,
  `tenhocvien` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idkhoahoc` int(11) DEFAULT NULL,
  `idkhuyenmai` int(11) DEFAULT NULL,
  `idlop` int(11) DEFAULT NULL,
  `hocthu` int(11) DEFAULT NULL,
  `giam` int(11) DEFAULT NULL,
  `hocphi` int(11) DEFAULT NULL,
  `phitailieu` int(11) DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  `Tonghocphi` int(11) DEFAULT NULL,
  `updatetime` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timethem` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HTTT` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable` int(11) DEFAULT NULL,
  `idkhuyenmai_pass` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dangki`
--

INSERT INTO `dangki` (`id`, `MADK`, `idchinhanh`, `idchuongtrinh`, `idhocsinh`, `tenhocvien`, `idkhoahoc`, `idkhuyenmai`, `idlop`, `hocthu`, `giam`, `hocphi`, `phitailieu`, `iduser`, `Tonghocphi`, `updatetime`, `timethem`, `HTTT`, `ghichu`, `enable`, `idkhuyenmai_pass`, `status`, `created_at`, `updated_at`) VALUES
(11, NULL, 4, 2, 120, 'Vũ Lâm Thạch', 2, 5, 0, 0, 500000, 10000000, NULL, NULL, 9500000, '24-02-2020', '24-02-2020', NULL, NULL, NULL, NULL, NULL, '2020-02-24 02:44:57', '2020-02-24 02:44:57'),
(12, NULL, 3, 1, 121, 'Đoàn Văn Thìn', 1, 0, 0, 0, 0, 5000000, NULL, NULL, 5000000, NULL, '08-03-2020', NULL, NULL, NULL, NULL, NULL, '2020-02-24 02:45:27', '2020-02-24 02:45:27'),
(13, NULL, 3, 1, 120, 'Vũ Lâm Thạch', 1, 5, 1, 0, 250000, 5000000, NULL, NULL, 4750000, NULL, '24-02-2020', NULL, NULL, NULL, NULL, NULL, '2020-03-24 02:47:05', '2020-02-24 02:47:05'),
(14, NULL, 4, 2, 121, 'Đoàn Văn Thìn', 2, 0, 0, 0, 0, 10000000, NULL, NULL, 10000000, NULL, '24-02-2020', NULL, NULL, NULL, NULL, NULL, '2020-02-24 02:55:41', '2020-02-24 02:55:41');

-- --------------------------------------------------------

--
-- Table structure for table `dangki_group`
--

CREATE TABLE `dangki_group` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `MADK` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idhocsinh` int(11) DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `tongtien` int(11) DEFAULT NULL,
  `idchinhanh` int(11) DEFAULT NULL,
  `updatetime` timestamp NULL DEFAULT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dangki_kho_default`
--

CREATE TABLE `dangki_kho_default` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idchinhanh` int(11) DEFAULT NULL,
  `idtaisan` int(11) DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `updatetime` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `diemdanh_style1`
--

CREATE TABLE `diemdanh_style1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `giaovien` int(11) DEFAULT NULL,
  `hocsinh` int(11) DEFAULT NULL,
  `iddangki` int(11) DEFAULT NULL,
  `idlop` int(11) DEFAULT NULL,
  `checked` int(11) DEFAULT NULL,
  `enable` int(11) DEFAULT NULL,
  `giogiac` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homework` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `diemdanh_style2`
--

CREATE TABLE `diemdanh_style2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `giaovien` int(11) DEFAULT NULL,
  `hocsinh` int(11) DEFAULT NULL,
  `iddangki` int(11) DEFAULT NULL,
  `idlop` int(11) DEFAULT NULL,
  `checked` int(11) DEFAULT NULL,
  `enable` int(11) DEFAULT NULL,
  `giogiac` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homework` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `email_cat`
--

CREATE TABLE `email_cat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` int(11) DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updatetime` timestamp NULL DEFAULT NULL,
  `cat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `email_send`
--

CREATE TABLE `email_send` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idcat` int(11) DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  `idhocvien` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `namehv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updatetime` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feed_news`
--

CREATE TABLE `feed_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `updatetime` timestamp NULL DEFAULT NULL,
  `idchinhanh` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feed_news_users`
--

CREATE TABLE `feed_news_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idchinhanh` int(11) DEFAULT NULL,
  `idfeed` int(11) DEFAULT NULL,
  `updatetime` timestamp NULL DEFAULT NULL,
  `readed` int(11) DEFAULT NULL,
  `idlevel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `folder`
--

CREATE TABLE `folder` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  `updatetime` timestamp NULL DEFAULT NULL,
  `enable` int(11) DEFAULT NULL,
  `share` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `folder_fiise`
--

CREATE TABLE `folder_fiise` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idfolder` int(11) DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filesize` int(11) DEFAULT NULL,
  `typefile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updatetime` timestamp NULL DEFAULT NULL,
  `store` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `folder_users`
--

CREATE TABLE `folder_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idfolder` int(11) DEFAULT NULL,
  `idchinhanh` int(11) DEFAULT NULL,
  `updatetime` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `giao_vien`
--

CREATE TABLE `giao_vien` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `makhachhang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hoten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Mst` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dienthoai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghichu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KH_canhan` int(11) DEFAULT NULL,
  `KH_congty` int(11) DEFAULT NULL,
  `KH_nhanvien` int(11) DEFAULT NULL,
  `enable` int(11) DEFAULT NULL,
  `updatetime` timestamp NULL DEFAULT NULL,
  `congno` int(11) DEFAULT NULL,
  `danhdau` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hocphi`
--

CREATE TABLE `hocphi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iddangkygroup` int(11) DEFAULT NULL,
  `ngaythu` datetime DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  `MAHP` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `thucthu` int(11) DEFAULT NULL,
  `thanhtoan` int(11) DEFAULT NULL,
  `thanhtoan_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hocsinh`
--

CREATE TABLE `hocsinh` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `enable` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imageupload` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MAHS` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `matkhau` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nguon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lop` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `truong` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tuoi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dienthoai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tuoi2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PHHS_ten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PHHS_facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `type2` int(11) DEFAULT NULL,
  `pass_test` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngaysinh` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `block21` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PHHS_dienthoai2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PHHS_facebook2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `xacnhanhocvien` int(10) DEFAULT NULL COMMENT '0:hvtn 1 hv chính thức',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hocsinh`
--

INSERT INTO `hocsinh` (`id`, `iduser`, `enable`, `updatetime`, `sex`, `imageupload`, `MAHS`, `matkhau`, `ten`, `nguon`, `lop`, `truong`, `tuoi`, `dienthoai`, `diachi`, `tuoi2`, `PHHS_ten`, `email`, `PHHS_facebook`, `type`, `type2`, `pass_test`, `ngaysinh`, `block21`, `job`, `PHHS_dienthoai2`, `email2`, `PHHS_facebook2`, `ghichu`, `xacnhanhocvien`, `created_at`, `updated_at`) VALUES
(120, NULL, NULL, NULL, '2', NULL, NULL, NULL, 'Vũ lâm thạch', NULL, NULL, NULL, '10', '0906216933', 'Hà Nội', NULL, NULL, 'thachvl@gmail.com', NULL, 3, 1, NULL, '11-03-2010', NULL, 'giáo viên', NULL, NULL, NULL, NULL, 0, '2020-02-27 01:34:52', '2020-03-05 02:39:25'),
(121, NULL, NULL, NULL, '1', NULL, NULL, NULL, 'Đoàn Văn Thìn', NULL, NULL, 'Học viện công nghệ bưu chính viễn thông', '20', '0906216933', 'Hà nội', NULL, NULL, 'thin2kpro@gmail.com', NULL, 2, 1, NULL, '2000-03-02', NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-02-27 01:46:31', '2020-02-27 01:46:31');

-- --------------------------------------------------------

--
-- Table structure for table `hocsinh_log`
--

CREATE TABLE `hocsinh_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idhocsinh` int(11) DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `datelog` datetime DEFAULT NULL,
  `checked` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hocsinh_test_dauvao`
--

CREATE TABLE `hocsinh_test_dauvao` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idhocvien` int(11) DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  `idbangdiem` int(11) DEFAULT NULL,
  `idbangdiem_cat` int(11) DEFAULT NULL,
  `ghichu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hocsinh_voucher`
--

CREATE TABLE `hocsinh_voucher` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idhocsinh` int(11) DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  `voucher` int(11) DEFAULT NULL,
  `mota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ketqua_style1`
--

CREATE TABLE `ketqua_style1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `emailsend` int(11) DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  `idgiaovien` int(11) DEFAULT NULL,
  `idhocsinh` int(11) DEFAULT NULL,
  `iddangky` int(11) DEFAULT NULL,
  `idlop` int(11) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bloclk1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thaidohoc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homework` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bloclk11` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nghe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `viet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tuvung` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nguphap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tienbotrongky` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nhanxetkhac` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ketqua_style2`
--

CREATE TABLE `ketqua_style2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `emailsend` int(11) DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  `idgiaovien` int(11) DEFAULT NULL,
  `idhocsinh` int(11) DEFAULT NULL,
  `iddangky` int(11) DEFAULT NULL,
  `idlop` int(11) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bloclk1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thaidohoc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homework` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bloclk11` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nghe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `viet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tuvung` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nguphap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tienbotrongky` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nhanxetkhac` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khoahoc`
--

CREATE TABLE `khoahoc` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idchuongtrinh` int(11) DEFAULT NULL,
  `idchinhanh` int(11) DEFAULT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `makh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stt` int(11) DEFAULT NULL,
  `capdo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sogio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HP_full` int(11) DEFAULT NULL,
  `thoiluong` int(11) DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `hocphi` int(10) DEFAULT NULL,
  `ghichu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maubangdiem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trangthai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `giaotrinh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updatetime` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khoahoc`
--

INSERT INTO `khoahoc` (`id`, `idchuongtrinh`, `idchinhanh`, `ten`, `makh`, `stt`, `capdo`, `sogio`, `HP_full`, `thoiluong`, `iduser`, `status`, `hocphi`, `ghichu`, `maubangdiem`, `trangthai`, `giaotrinh`, `updatetime`, `created_at`, `updated_at`) VALUES
(1, 61, NULL, 'SASA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-05', '2020-03-04 20:16:39', '2020-03-05 00:10:27'),
(2, 61, NULL, 'DGS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-04 20:17:16', '2020-03-04 20:17:16');

-- --------------------------------------------------------

--
-- Table structure for table `khoahoc_kho`
--

CREATE TABLE `khoahoc_kho` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `idchinhanh` int(11) DEFAULT NULL,
  `idtaisan` int(11) DEFAULT NULL,
  `idkhoahoc` int(11) DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `makm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngaybatdau` datetime DEFAULT NULL,
  `ngayketthuc` datetime DEFAULT NULL,
  `giatri` int(11) DEFAULT NULL,
  `enable` int(11) DEFAULT NULL,
  `idtaisan` int(11) DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khuyenmai`
--

INSERT INTO `khuyenmai` (`id`, `makm`, `note`, `ngaybatdau`, `ngayketthuc`, `giatri`, `enable`, `idtaisan`, `soluong`, `created_at`, `updated_at`) VALUES
(1, 'ck_01', NULL, NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(2, 'Anh em sinh đôi', NULL, NULL, NULL, 10, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `logs` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thoigian` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logs_print`
--

CREATE TABLE `logs_print` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `contain` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lophoc`
--

CREATE TABLE `lophoc` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idchuongtrinh` int(11) DEFAULT NULL,
  `idkhoahoc` int(11) DEFAULT NULL,
  `Malop` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngaybatdau` datetime DEFAULT NULL,
  `ngayketthuc` datetime DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  `enable` int(11) DEFAULT NULL,
  `idchinhanh` int(11) DEFAULT NULL,
  `buoihoc` int(11) DEFAULT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lophoc`
--

INSERT INTO `lophoc` (`id`, `idchuongtrinh`, `idkhoahoc`, `Malop`, `ten`, `ngaybatdau`, `ngayketthuc`, `iduser`, `enable`, `idchinhanh`, `buoihoc`, `mota`, `updatetime`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'LOP_01', 'Ali Kids S1 New ( 7-9  ) ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lophoc_baihoc`
--

CREATE TABLE `lophoc_baihoc` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idlop` int(11) DEFAULT NULL,
  `ngay` datetime DEFAULT NULL,
  `baihoc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `baitap` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thongbao` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lophoc_diemdanh`
--

CREATE TABLE `lophoc_diemdanh` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idlop` int(11) DEFAULT NULL,
  `idjoint` int(11) DEFAULT NULL,
  `idhocvien` int(11) DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  `enable` int(11) DEFAULT NULL,
  `ngay` datetime DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `checked` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lophoc_join`
--

CREATE TABLE `lophoc_join` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idhocvien` int(11) DEFAULT NULL,
  `iddangky` int(11) DEFAULT NULL,
  `idlop` int(11) DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  `idkhoahoc` int(11) DEFAULT NULL,
  `fromdate` datetime DEFAULT NULL,
  `todate` datetime DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lophoc_log`
--

CREATE TABLE `lophoc_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `idlop` int(11) DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  `id_tkb` int(11) DEFAULT NULL,
  `fromdate` datetime DEFAULT NULL,
  `todate` datetime DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lop_tkb`
--

CREATE TABLE `lop_tkb` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idweek` int(11) DEFAULT NULL,
  `idlop` int(11) DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  `fromdate` datetime DEFAULT NULL,
  `todate` datetime DEFAULT NULL,
  `idgiaovien` int(11) DEFAULT NULL,
  `idphonghoc` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mail_ibox`
--

CREATE TABLE `mail_ibox` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fromuser` int(11) DEFAULT NULL,
  `touser` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `start` int(11) DEFAULT NULL,
  `label` int(11) DEFAULT NULL,
  `idhocsinh` int(11) DEFAULT NULL,
  `readed` int(11) DEFAULT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receipt_del` int(11) DEFAULT NULL,
  `send_del` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mail_sendbox`
--

CREATE TABLE `mail_sendbox` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idinbox` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  `touser` int(11) DEFAULT NULL,
  `touser_str` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_02_13_021225_create_bangdiem_table', 1),
(5, '2020_02_13_021534_create_bangdiem_cat_table', 1),
(6, '2020_02_13_021635_create_bangdiem_column_table', 1),
(7, '2020_02_13_021715_create_bangdiem_log_table', 1),
(8, '2020_02_13_021751_create_bangdiem_value_table', 1),
(9, '2020_02_13_021831_create_chatgroup_table', 1),
(10, '2020_02_13_021916_create_chatgroup_text_table', 1),
(11, '2020_02_13_022008_create_chatgroup_user_table', 1),
(12, '2020_02_13_022105_create_chinhanh_table', 1),
(13, '2020_02_13_022256_create_config_data_text_table', 1),
(14, '2020_02_13_022325_create_dangki_table', 1),
(15, '2020_02_13_022401_create_dangki_group_table', 1),
(16, '2020_02_13_022555_create_dangki_kho_default_table', 1),
(17, '2020_02_13_022749_create_diemdanh_style1_table', 1),
(18, '2020_02_13_022804_create_diemdanh_style2_table', 1),
(19, '2020_02_13_022923_create_email_cat_table', 1),
(20, '2020_02_13_022946_create_email_send_table', 1),
(21, '2020_02_13_023043_create_feed_news_table', 1),
(22, '2020_02_13_023106_create_feed_news_users_table', 1),
(23, '2020_02_13_023208_create_folder_table', 1),
(24, '2020_02_13_023241_create_folder_fiise_table', 1),
(25, '2020_02_13_023302_create_folder_users_table', 1),
(26, '2020_02_13_023350_create_giao_vien_table', 1),
(27, '2020_02_13_023417_create_hocphi_table', 1),
(28, '2020_02_13_023434_create_hocsinh_table', 1),
(29, '2020_02_13_023521_create_hocsinh_log_table', 1),
(30, '2020_02_13_023546_create_hocsinh_voucher_table', 1),
(31, '2020_02_13_023616_create_hocsinh_test_dauvao_table', 1),
(32, '2020_02_13_023848_create_ketqua_style1_table', 1),
(33, '2020_02_13_023858_create_ketqua_style2_table', 1),
(34, '2020_02_13_023925_create_khoahoc_table', 1),
(35, '2020_02_13_023959_create_khoahoc_chinhanh_table', 1),
(36, '2020_02_13_024017_create_khoahoc_kho_table', 1),
(37, '2020_02_13_024049_create_khuyenmai_table', 1),
(38, '2020_02_13_024114_create_logs_table', 1),
(39, '2020_02_13_024136_create_logs_print_table', 1),
(40, '2020_02_13_024232_create_lop__t_k_b_table', 1),
(41, '2020_02_13_024248_create_lophoc_table', 1),
(42, '2020_02_13_024309_create_lophoc_baihoc_table', 1),
(43, '2020_02_13_024335_create_lophoc_diemdanh_table', 1),
(44, '2020_02_13_024422_create_lophoc_join_table', 1),
(45, '2020_02_13_024438_create_lophoc_log_table', 1),
(46, '2020_02_13_024525_create_mail_ibox_table', 1),
(47, '2020_02_13_024548_create_mail_sendbox_table', 1),
(48, '2020_02_13_024608_create_nhan_su_table', 1),
(49, '2020_02_13_024623_create_nhan_su_lop_table', 1),
(50, '2020_02_13_024645_create_nhan_su_chamcong_table', 1),
(51, '2020_02_13_024704_create_nhan_su_ghichu_table', 1),
(52, '2020_02_13_024850_create_permission_group_set_table', 1),
(53, '2020_02_13_024919_create_permission_join_table', 1),
(54, '2020_02_13_024936_create_permission_mod_table', 1),
(55, '2020_02_13_025048_create_permission_mod_cat_table', 1),
(56, '2020_02_13_025117_create_permission_template_table', 1),
(57, '2020_02_13_025142_create_phonghoc_table', 1),
(58, '2020_02_13_025205_create_setup_table_table', 1),
(59, '2020_02_13_025434_create_style_format_table', 1),
(60, '2020_02_13_025542_create_taisan_table', 1),
(61, '2020_02_13_025558_create_taisan_cat_table', 1),
(62, '2020_02_13_025640_create_taisan_nhapxuat_table', 1),
(63, '2020_02_13_025850_create_task_table', 1),
(64, '2020_02_13_025934_create_test_auto_table', 1),
(65, '2020_02_13_030005_create_thu_chi_table', 1),
(66, '2020_02_13_030050_create__t_k_b_log_table', 1),
(67, '2020_02_13_030137_create_tkb_risk_table', 1),
(68, '2020_02_13_030318_create_user_permision_table', 1),
(69, '2020_02_13_030347_create_user_config_table', 1),
(70, '2020_02_13_030413_create_user_module_table', 1),
(71, '2020_02_13_030800_create_chuongtrinh_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nhan_su`
--

CREATE TABLE `nhan_su` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gioitinh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idchinhanh` int(11) DEFAULT NULL,
  `hinhanh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Mans` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hoten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dienthoai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trinhdo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nghiepvu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soCMNN` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vitri` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tinhtrang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chuyennganh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chucvu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  `enable` int(11) DEFAULT NULL,
  `ngaysinh` date DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `tentaikhoan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `matkhau` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hansudung` datetime DEFAULT NULL,
  `ngaythamgia` datetime DEFAULT NULL,
  `ngaynghiphep` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nhan_su`
--

INSERT INTO `nhan_su` (`id`, `gioitinh`, `idchinhanh`, `hinhanh`, `Mans`, `hoten`, `diachi`, `dienthoai`, `facebook`, `email`, `trinhdo`, `nghiepvu`, `soCMNN`, `vitri`, `tinhtrang`, `chuyennganh`, `chucvu`, `ghichu`, `iduser`, `enable`, `ngaysinh`, `updatetime`, `tentaikhoan`, `matkhau`, `hansudung`, `ngaythamgia`, `ngaynghiphep`, `created_at`, `updated_at`) VALUES
(1, '1', 76, 'websiteQRCode_noFrame.png', NULL, 'doanthinsda', 'hà nội', '0906216933', NULL, 'thin21kpdsaro@gmail.com', 'Đại học', 'Không', NULL, '1', NULL, NULL, NULL, 'đoàn văn thìn', NULL, NULL, '2000-02-02', '2020-03-05 00:00:00', NULL, NULL, NULL, NULL, NULL, '2020-03-02 21:12:36', '2020-03-05 00:18:45'),
(2, '1', 75, '84241059_189132118950875_4138507100605120512_n.jpg', NULL, 'doanthin', 'hà nội', '0906216933', 'https://www.facebook.com/thinat012000', 'thin2kpro@gmail.com', 'Trung cấp', 'Có', NULL, '3', NULL, NULL, NULL, 'gg', NULL, NULL, '2000-03-03', '2020-03-03 00:00:00', NULL, NULL, NULL, NULL, NULL, '2020-03-03 00:07:41', '2020-03-03 01:05:16');

-- --------------------------------------------------------

--
-- Table structure for table `nhan_su_chamcong`
--

CREATE TABLE `nhan_su_chamcong` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `idnhansu` int(11) DEFAULT NULL,
  `ngay` datetime DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `diem` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nhan_su_ghichu`
--

CREATE TABLE `nhan_su_ghichu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idnhansu` int(11) DEFAULT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngay` datetime DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nhan_su_lop`
--

CREATE TABLE `nhan_su_lop` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idgiaovien` int(11) DEFAULT NULL,
  `idlop` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `permission_group_set`
--

CREATE TABLE `permission_group_set` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngay` datetime DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_join`
--

CREATE TABLE `permission_join` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `idmode` int(11) DEFAULT NULL,
  `idtemplate` int(11) DEFAULT NULL,
  `lever` int(11) DEFAULT NULL,
  `permission` int(11) DEFAULT NULL,
  `per_r` int(11) DEFAULT NULL,
  `per_a` int(11) DEFAULT NULL,
  `per_e` int(11) DEFAULT NULL,
  `per_w` int(11) DEFAULT NULL,
  `idcreate` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_mod`
--

CREATE TABLE `permission_mod` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Ma` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idcat` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  `enable` int(11) DEFAULT NULL,
  `R_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `W_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_mod_cat`
--

CREATE TABLE `permission_mod_cat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stt` int(11) DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  `Ma` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_template`
--

CREATE TABLE `permission_template` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idmod` int(11) DEFAULT NULL,
  `per_r` int(11) DEFAULT NULL,
  `per_w` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phonghoc`
--

CREATE TABLE `phonghoc` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idchinhanh` int(11) DEFAULT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trangthietbi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  `enable` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `setup_table`
--

CREATE TABLE `setup_table` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `style_format`
--

CREATE TABLE `style_format` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `module` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `taisan`
--

CREATE TABLE `taisan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idcat` int(11) DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  `Masanpham` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diengiai` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gia` int(11) DEFAULT NULL,
  `donvi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable` int(11) DEFAULT NULL,
  `idchinhanh` int(11) DEFAULT NULL,
  `dongia` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `taisan_cat`
--

CREATE TABLE `taisan_cat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `Maloai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diengiai` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable` int(11) DEFAULT NULL,
  `idchinhanh` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `taisan_nhapxuat`
--

CREATE TABLE `taisan_nhapxuat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idchinhanh` int(11) DEFAULT NULL,
  `iddangkygroup` int(11) DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  `ngay` datetime DEFAULT NULL,
  `idtaisan` int(11) DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `dongia` int(11) DEFAULT NULL,
  `tongtien` int(11) DEFAULT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `grouptype` int(11) DEFAULT NULL,
  `id_khuyenmai` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `CK` int(11) DEFAULT NULL,
  `idhocvien` int(11) DEFAULT NULL,
  `follow_khoahoc` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` int(11) DEFAULT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngay` datetime DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  `enable` int(11) DEFAULT NULL,
  `idhocvien` int(11) DEFAULT NULL,
  `idrelation` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `test_auto`
--

CREATE TABLE `test_auto` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `textbox` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selectoption` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkbox` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `radiobox` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SL2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `groupblock` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hidden` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thu_chi`
--

CREATE TABLE `thu_chi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `idchinhanh` int(11) DEFAULT NULL,
  `MAPT` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datecreate` datetime DEFAULT NULL,
  `ngay` datetime DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `nguoinoptien` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lydo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tongtien` int(11) DEFAULT NULL,
  `bangthu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sochungtu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tkb_log`
--

CREATE TABLE `tkb_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idRelative` int(11) DEFAULT NULL,
  `fromdate` int(11) DEFAULT NULL,
  `todate` int(11) DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tkb_risk`
--

CREATE TABLE `tkb_risk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `idchinhanh` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `fromdate` datetime DEFAULT NULL,
  `todate` datetime DEFAULT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idnhansu` int(11) DEFAULT NULL,
  `idchinhanh` int(11) DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(10) DEFAULT NULL COMMENT '0: admin 1 nv 2 hs',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `idnhansu`, `idchinhanh`, `logo`, `ghichu`, `email`, `email_verified_at`, `password`, `remember_token`, `type`, `created_at`, `updated_at`) VALUES
(1, '48', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$TBlJQxjcBpPUxxfnlic5c.UCeVp0oJOHXVW0zWOtO1umoRAxwxfSq', NULL, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_config`
--

CREATE TABLE `user_config` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `module` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_module`
--

CREATE TABLE `user_module` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_permision`
--

CREATE TABLE `user_permision` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `idmodule` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bangdiem`
--
ALTER TABLE `bangdiem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bangdiem_cat`
--
ALTER TABLE `bangdiem_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bangdiem_column`
--
ALTER TABLE `bangdiem_column`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bangdiem_log`
--
ALTER TABLE `bangdiem_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bangdiem_value`
--
ALTER TABLE `bangdiem_value`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chatgroup`
--
ALTER TABLE `chatgroup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chatgroup_text`
--
ALTER TABLE `chatgroup_text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chatgroup_user`
--
ALTER TABLE `chatgroup_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chinhanh`
--
ALTER TABLE `chinhanh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chuongtrinh`
--
ALTER TABLE `chuongtrinh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chuongtrinh_chinhanh`
--
ALTER TABLE `chuongtrinh_chinhanh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `config_data_text`
--
ALTER TABLE `config_data_text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dangki`
--
ALTER TABLE `dangki`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dangki_group`
--
ALTER TABLE `dangki_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dangki_kho_default`
--
ALTER TABLE `dangki_kho_default`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diemdanh_style1`
--
ALTER TABLE `diemdanh_style1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diemdanh_style2`
--
ALTER TABLE `diemdanh_style2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_cat`
--
ALTER TABLE `email_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_send`
--
ALTER TABLE `email_send`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feed_news`
--
ALTER TABLE `feed_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feed_news_users`
--
ALTER TABLE `feed_news_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `folder`
--
ALTER TABLE `folder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `folder_fiise`
--
ALTER TABLE `folder_fiise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `folder_users`
--
ALTER TABLE `folder_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `giao_vien`
--
ALTER TABLE `giao_vien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hocphi`
--
ALTER TABLE `hocphi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hocsinh`
--
ALTER TABLE `hocsinh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hocsinh_log`
--
ALTER TABLE `hocsinh_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hocsinh_test_dauvao`
--
ALTER TABLE `hocsinh_test_dauvao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hocsinh_voucher`
--
ALTER TABLE `hocsinh_voucher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ketqua_style1`
--
ALTER TABLE `ketqua_style1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ketqua_style2`
--
ALTER TABLE `ketqua_style2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khoahoc`
--
ALTER TABLE `khoahoc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khoahoc_kho`
--
ALTER TABLE `khoahoc_kho`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs_print`
--
ALTER TABLE `logs_print`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lophoc`
--
ALTER TABLE `lophoc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lophoc_baihoc`
--
ALTER TABLE `lophoc_baihoc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lophoc_diemdanh`
--
ALTER TABLE `lophoc_diemdanh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lophoc_join`
--
ALTER TABLE `lophoc_join`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lophoc_log`
--
ALTER TABLE `lophoc_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lop_tkb`
--
ALTER TABLE `lop_tkb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail_ibox`
--
ALTER TABLE `mail_ibox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail_sendbox`
--
ALTER TABLE `mail_sendbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nhan_su`
--
ALTER TABLE `nhan_su`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nhan_su_chamcong`
--
ALTER TABLE `nhan_su_chamcong`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nhan_su_ghichu`
--
ALTER TABLE `nhan_su_ghichu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nhan_su_lop`
--
ALTER TABLE `nhan_su_lop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permission_group_set`
--
ALTER TABLE `permission_group_set`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_join`
--
ALTER TABLE `permission_join`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_mod`
--
ALTER TABLE `permission_mod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_mod_cat`
--
ALTER TABLE `permission_mod_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_template`
--
ALTER TABLE `permission_template`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phonghoc`
--
ALTER TABLE `phonghoc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setup_table`
--
ALTER TABLE `setup_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `style_format`
--
ALTER TABLE `style_format`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taisan`
--
ALTER TABLE `taisan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taisan_cat`
--
ALTER TABLE `taisan_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taisan_nhapxuat`
--
ALTER TABLE `taisan_nhapxuat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_auto`
--
ALTER TABLE `test_auto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thu_chi`
--
ALTER TABLE `thu_chi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tkb_log`
--
ALTER TABLE `tkb_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tkb_risk`
--
ALTER TABLE `tkb_risk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_config`
--
ALTER TABLE `user_config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_module`
--
ALTER TABLE `user_module`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_permision`
--
ALTER TABLE `user_permision`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bangdiem`
--
ALTER TABLE `bangdiem`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bangdiem_cat`
--
ALTER TABLE `bangdiem_cat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bangdiem_column`
--
ALTER TABLE `bangdiem_column`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bangdiem_log`
--
ALTER TABLE `bangdiem_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bangdiem_value`
--
ALTER TABLE `bangdiem_value`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chatgroup`
--
ALTER TABLE `chatgroup`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chatgroup_text`
--
ALTER TABLE `chatgroup_text`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chatgroup_user`
--
ALTER TABLE `chatgroup_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chinhanh`
--
ALTER TABLE `chinhanh`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `chuongtrinh`
--
ALTER TABLE `chuongtrinh`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `chuongtrinh_chinhanh`
--
ALTER TABLE `chuongtrinh_chinhanh`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `config_data_text`
--
ALTER TABLE `config_data_text`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dangki`
--
ALTER TABLE `dangki`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `dangki_group`
--
ALTER TABLE `dangki_group`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dangki_kho_default`
--
ALTER TABLE `dangki_kho_default`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `diemdanh_style1`
--
ALTER TABLE `diemdanh_style1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `diemdanh_style2`
--
ALTER TABLE `diemdanh_style2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `email_cat`
--
ALTER TABLE `email_cat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `email_send`
--
ALTER TABLE `email_send`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feed_news`
--
ALTER TABLE `feed_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feed_news_users`
--
ALTER TABLE `feed_news_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `folder`
--
ALTER TABLE `folder`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `folder_fiise`
--
ALTER TABLE `folder_fiise`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `folder_users`
--
ALTER TABLE `folder_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `giao_vien`
--
ALTER TABLE `giao_vien`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hocphi`
--
ALTER TABLE `hocphi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hocsinh`
--
ALTER TABLE `hocsinh`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `hocsinh_log`
--
ALTER TABLE `hocsinh_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hocsinh_test_dauvao`
--
ALTER TABLE `hocsinh_test_dauvao`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hocsinh_voucher`
--
ALTER TABLE `hocsinh_voucher`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ketqua_style1`
--
ALTER TABLE `ketqua_style1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ketqua_style2`
--
ALTER TABLE `ketqua_style2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `khoahoc`
--
ALTER TABLE `khoahoc`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `khoahoc_kho`
--
ALTER TABLE `khoahoc_kho`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logs_print`
--
ALTER TABLE `logs_print`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lophoc`
--
ALTER TABLE `lophoc`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lophoc_baihoc`
--
ALTER TABLE `lophoc_baihoc`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lophoc_diemdanh`
--
ALTER TABLE `lophoc_diemdanh`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lophoc_join`
--
ALTER TABLE `lophoc_join`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lophoc_log`
--
ALTER TABLE `lophoc_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lop_tkb`
--
ALTER TABLE `lop_tkb`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mail_ibox`
--
ALTER TABLE `mail_ibox`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mail_sendbox`
--
ALTER TABLE `mail_sendbox`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `nhan_su`
--
ALTER TABLE `nhan_su`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nhan_su_chamcong`
--
ALTER TABLE `nhan_su_chamcong`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nhan_su_ghichu`
--
ALTER TABLE `nhan_su_ghichu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nhan_su_lop`
--
ALTER TABLE `nhan_su_lop`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permission_group_set`
--
ALTER TABLE `permission_group_set`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permission_join`
--
ALTER TABLE `permission_join`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permission_mod`
--
ALTER TABLE `permission_mod`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permission_mod_cat`
--
ALTER TABLE `permission_mod_cat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permission_template`
--
ALTER TABLE `permission_template`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phonghoc`
--
ALTER TABLE `phonghoc`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setup_table`
--
ALTER TABLE `setup_table`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `style_format`
--
ALTER TABLE `style_format`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `taisan`
--
ALTER TABLE `taisan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `taisan_cat`
--
ALTER TABLE `taisan_cat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `taisan_nhapxuat`
--
ALTER TABLE `taisan_nhapxuat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test_auto`
--
ALTER TABLE `test_auto`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thu_chi`
--
ALTER TABLE `thu_chi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tkb_log`
--
ALTER TABLE `tkb_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tkb_risk`
--
ALTER TABLE `tkb_risk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_config`
--
ALTER TABLE `user_config`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_module`
--
ALTER TABLE `user_module`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_permision`
--
ALTER TABLE `user_permision`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
