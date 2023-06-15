-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2023 at 02:16 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `breeze`
--

-- --------------------------------------------------------

--
-- Table structure for table `bahans`
--

CREATE TABLE `bahans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_bahan` varchar(255) NOT NULL,
  `kode_bahan` varchar(255) NOT NULL,
  `dekripsi_bahan` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bahans`
--

INSERT INTO `bahans` (`id`, `nama_bahan`, `kode_bahan`, `dekripsi_bahan`, `foto`, `created_at`, `updated_at`) VALUES
(4, 'Dryfit', 'D-FIT', 'MTIIS terbuat dari benang breeze yang memiliki daya serap air yang tinggi sehingga mudah kering dan terasa segar', 'foto-bahan/Si4ASnmlfNdPaCvV1E3xeWWBnxPqS0rQJJyhD15o.png', '2023-06-08 01:50:53', '2023-06-10 22:39:26'),
(7, 'Baby Canvas', 'B-CVS', 'Kain baby canvas sesuai namanya merupakan kain canvas yang dimodifikasi sehingga memiliki sirkulasi dan kelembutan yang cukup baik. Dan juga ketebalan dari kain ini menjadikannya tahan lama serta nyaman.', 'foto-bahan/ttYEBd0cwcGQnP27drodzZCFvmxqQdee19ddNyIJ.png', '2023-06-10 22:32:46', '2023-06-13 01:02:10'),
(8, 'Baby Terry', 'B-TRY', 'Kain Babyterry memiliki kelembutan yang tinggi, sehingga memiliki kemampuan yang baik menjaga kulit tetap kering. Oleh karena itu kain ini cocok digunakan oleh bayi.', 'foto-bahan/ncz7W9Tqgb6PAal2sDquL5of0Mexvus5pwQ3X90h.png', '2023-06-10 22:39:10', '2023-06-13 01:02:25'),
(9, 'Canvas', 'CVS', 'Kain canvas memiliki ketahanan yang tinggi oleh Paparan sinar UV matahari dari kelunturan, tidak langsung menyerap air, dan memiliki tampilan yang estetik (kaku & kasar) sehingga kain ini memerlukan puring jika ingin digunakan sebagai pakaian.', 'foto-bahan/xP9EjNkScsHFkc4R0wr6dFEQGI8M1pAFxgKQzmm8.png', '2023-06-10 22:40:04', '2023-06-13 01:02:39'),
(10, 'Chambray', 'C-BRY', 'Kain Chambray, sekilas sangat mirip dengan kain denim, namun kain ini memiliki tekstur yang lebih halus dan lebih ringan sehingga memberikan kesan yang kasual dan santai ketika digunakan.', 'foto-bahan/Pat6m5ZP83LDOpGSR2HuRX9SdtpFtwWr6Djywo7L.png', '2023-06-10 22:40:45', '2023-06-13 01:03:28'),
(11, 'Cotton Bamboo', 'C-BBO', 'Cotton Bambu merupakan perpaduan dari serat katun dan serat bambu, mempu menyerap kelembapan yang cukup tinggi. Kain yang satu ini akan terasa lembut dan halus ketika digunakan.', 'foto-bahan/DpIQWCBJLubTx6icGdzYzoHrSJODnkLG6Rm3EEbe.png', '2023-06-10 22:41:22', '2023-06-13 01:03:45'),
(12, 'Cotton Carded', 'C-CDD', 'Cotton carded terbuat dari serat kapas yang cukup kasar yang menjadikan kain ini tahan terhadap pengerutan, daya serap yang tinggi, namun memiliki kekuatan dan tekstur yang kurang nyaman. Maka dari itu, harga dari kain ini relatif cukup terjangkau.', 'foto-bahan/uCd4S5VsLwLBLF4SAnmWxCJzogfFZcfCrztLCiy1.png', '2023-06-10 22:41:50', '2023-06-13 01:03:58'),
(13, 'Cotton  Combed', 'C-CBD', 'Cotton Combed dirancang dengan teknologi khusus untuk memperoses serat kapas yang halus sehingga kain ini memiliki daya serap air dan ketahanan yang tinggi.', 'foto-bahan/oifqAEgbW5uxwT1w96hPi9aoM2t3u13yXmkiHIp4.png', '2023-06-10 22:42:46', '2023-06-13 01:04:20'),
(14, 'CVCTwotone', 'CVCT', 'CVC Two Tone merupakan perpaduan dari serat cotton dan polyester, yang menjadikan kain ini memiliki ciri khas yaitu warna dasar yang dominan dan memiliki beberapa strip aksen pada kain.', 'foto-bahan/W6itJNyKorz5nFkdWuQduOSNJ2BPMZNDN203pcYs.png', '2023-06-10 22:45:11', '2023-06-13 03:30:12'),
(15, 'Denim', 'DNM', 'Kain Denim merupakan bahan yang sangat umum dan tidak asing, kain ini terbuat dari serat kapas yang tebal dan padat sehingga menjadikan kain yang satu ini tahan terhadap tarikan dan tekanan.', 'foto-bahan/kh76SJDXI1g5efN37N9kvud3xoi30WCVUCO01XOy.png', '2023-06-11 00:39:16', '2023-06-13 01:04:32'),
(16, 'Despo', 'DSP', 'Kain Despo terbuat dari campuran antara parasut dan cotton, menjadikan kain ini nyaman digunakan namun tetap memiliki sifat mengkilap serta eksklusif dikarenakan komposisi parasutnya.', 'foto-bahan/QgKnEKNU0vAer1Wtg5KmJch6B4ENg3BHi6zt7ucs.png', '2023-06-11 00:39:31', '2023-06-13 03:30:37'),
(17, 'Drill', 'DIL', 'Kain Drill merupakan bahan yang terbuat dari serat yang rapat dan padat. sehingga menjadikan bahan yang satu ini tahan terhadap kerusakan, noda, dan panas. Hal ini juga yang menjadikan kain drill memiliki perawatan yang relatif lebih mudah.', 'foto-bahan/i0WTMyeFePiPYV06o7LVAWQ3oZh79HNvGUpqwf7g.png', '2023-06-11 00:39:59', '2023-06-13 03:30:55'),
(18, 'Flanel', 'FNL', 'Kain flanel, yang identik dengan bahan kemeja berpola kotak, merupakan bahan yang memiliki kerapatan dan ketebalan yang relatif tinggi sehingga menjadikan kain ini memiliki kemampuan isolasi termal dan menyerap kelembapan tinggi.', 'foto-bahan/nFjCKjM2A9lCn282o66F5e9GWtOEJuuNeMfkd4ML.png', '2023-06-11 00:40:25', '2023-06-13 03:31:15'),
(19, 'Fleece', 'FEE', 'Kain Fleece merupakan kain yang cukup ringan namun memiliki kemampuan untuk menjaga kehangatan dikarenakan serat nya yang halus dan berbulu.', 'foto-bahan/Lh3pUtzuPdEGl4I04mBhMEGuejj7oJdfCdBnbD3p.png', '2023-06-11 00:40:46', '2023-06-13 03:31:31'),
(20, 'Lacoste', 'LOE', 'Kain Lacoste memiliki sirkulasi udara yang cukup baik, pola anyaman yang diterapkan menciptakan ruang untuk sirkulasi udara. dan kain ini pula memiliki ketahanan yang cukup tinggi dikarenakan konstruksi bahan yang diterapkan.', 'foto-bahan/Vpl0pgXPVnfvGq0y09yZ226KkNSImRa99nQAGK6P.png', '2023-06-11 00:41:06', '2023-06-13 03:31:44'),
(21, 'Linen', 'LNN', 'Kain linen terbuat dari serat alami yang menjadikan kain ini memiliki sirkulasi udara yang baik sehingga lebih nyaman ketika digunakan dan bebas dari regangan.', 'foto-bahan/bNh0q75Ns45N8vmuq90HOSoxi70tB0HbcG696SBa.png', '2023-06-11 00:41:21', '2023-06-13 03:32:06'),
(22, 'Mayer', 'MYR', 'Kain Mayer merupakan kain parasut yang relatif lembut dan mengkilap dengan ketebalan medium. Memberikan kesan mewah dan eksklusif di setiap sentuhannya.', 'foto-bahan/mJLruHrwNF34L3wka96MAz8dQ6mD9FXpHCNpHgIn.png', '2023-06-11 00:41:37', '2023-06-13 03:32:18'),
(23, 'Oxford', 'OFD', 'Kain Oxford terbuat dari kain yang memiliki pola konstruksi anyaman yang kuat. Sehingga menjadikan kain yang satu ini memiliki perawatan yang relatif lebih mudah, tahan kusut, dan memiliki sirkulasi udara yang baik.', 'foto-bahan/JoAf0P9qdOmFHvnX5gRywEyna8HdYE8URM1FsVrh.png', '2023-06-11 00:42:10', '2023-06-13 03:32:40'),
(24, 'Parasut', 'PAT', 'Kain parasut merupakan komnbinasi dari nylon yang menjadikan kain ini tahan air, fleksibel, mudah kering, dan tahan terhadap berbagai suhu ekstrim.', 'foto-bahan/luoY3jvZo0gsEeq2Udja6N8MqhqxwlGBZ09rkCDW.png', '2023-06-11 00:42:37', '2023-06-13 03:32:53'),
(25, 'Polyester', 'PER', 'Kain Polyester merupakan kain yang mudah dirawat, tahan terhadap kerut, tampak lebih licin, cepat kering, dan tahan terhadap luntur. Namun sayangnya bahan yang satu ini cukup panas dan tidak nyaman ketika digunakan di musim panas.', 'foto-bahan/8AUQDJLQzzysJqUsv3WVf11CZghwSIhgVnb2XMEC.png', '2023-06-11 00:42:54', '2023-06-13 03:33:13'),
(26, 'Ripstop', 'RSP', 'Kain Ripstop merupakan kain yang memiliki ketahanan tinggi dari robekan dikarenakan teknologi konstruksi yang melibatkan serat tambahan berpola kotak/jala kecil sehingga menjadikan kain ini kuat, namun tetap ringan.', 'foto-bahan/rGmngofaPpPVaGM53VPB7BcGjWX8ahlSoxIGlPpv.png', '2023-06-11 00:43:25', '2023-06-13 03:33:40'),
(27, 'Serena', 'SRA', 'jenis bahan hyget yang memiliki kualitas terbaik dibandingkan jenis bahan hyget lainnya. Tekstur kain dari bahan hyget serena cenderung lebih padat dan lebih lentur. Selain itu, bahan hyget ini juga jauh lebih tebal dan tidak terasa panas saat digunakan.', 'foto-bahan/CYPXQRhtHIPd5cR137OCP1QTcSDEHyUfOEOUMgth.png', '2023-06-11 00:44:18', '2023-06-13 03:39:12'),
(28, 'Spandex', 'SNX', 'Kain spandex merupakan bahan yang memiliki elastisitas yang sangat tinggi dan juga tahan terhadap deformasi serta perubahan bentuk. Hal itu menjadikan kain ini memiliki karakteristik yang nyaman dan lentur.', 'foto-bahan/HybnsogYl3Sb3vqlIQdx1gKdxiS5Emf18O92qjK8.png', '2023-06-11 00:44:41', '2023-06-13 03:34:40'),
(29, 'Taslan', 'TLN', 'Kain Taslan sangat baik digunakan ketika berolahraga maupun pada cuaca dingin. Hal ini dikarenakan karakteristik kain taslan yang bersifat anti air.', 'foto-bahan/ARXhayMAEHGNsZ1SqAZjJvP2OkTL902o127ifa0Y.png', '2023-06-11 00:45:03', '2023-06-13 03:35:02'),
(30, 'Wol', 'WOL', 'Kain wool sangat baik dalam menjaga suhu tubuh. Serat-serat wool memberikan isolasi yang efisien, sehingga kain ini memberikan kehangatan yang lebih baik daripada banyak jenis kain lainnya.', 'foto-bahan/j1fIwbs8Zee3gjU3YAzvhyZoJgLuvkaGlT5wsfRM.png', '2023-06-11 00:45:28', '2023-06-13 03:34:19');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `dekripsi_kategori` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama_kategori`, `dekripsi_kategori`, `foto`, `created_at`, `updated_at`) VALUES
(2, 'Kaos', 'ini adalah kategori kaos aman taunya kalo update', 'foto-kategori/0vGpxG0lus7SOt5Q65ccgkjUcFeitrQtT9APESMR.png', '2023-05-23 23:34:05', '2023-06-11 07:06:52'),
(3, 'Jaket', 'jaket banyak tipe', 'foto-kategori/4YxHJCw7GIx09xHBBRjILpsHuwxyX3bzHw90ZaCQ.png', '2023-05-30 01:27:58', '2023-06-12 06:14:22'),
(4, 'Jersey', 'Jersey aja', 'foto-kategori/9Fjh78MimXcm1aP0eAbN3apzbPCOpOPrvH1XMHvO.jpg', '2023-06-02 21:46:02', '2023-06-08 01:19:58'),
(5, 'Kemeja', 'kemeja banyak tipe', 'foto-kategori/xyWQZ99Ey2YrJWbYzbGDlJeODFbJ2C5V3JIug2tJ.png', '2023-06-02 21:46:22', '2023-06-11 07:07:19'),
(6, 'Outer', 'Outer banyak tipe dan design', 'foto-kategori/IsWn4C1lTCwV5OpHlbZIXZqRn7956Rs0ZRsC5ppm.png', '2023-06-02 21:46:31', '2023-06-12 06:14:44'),
(7, 'Topi', 'Topi kali yaa', 'foto-kategori/CrDUJeIaKIysiz4unD492PSnp655RoYlEQjNYlpc.png', '2023-06-02 21:46:45', '2023-06-12 06:15:04'),
(14, 'Celana', 'ini celana', 'foto-kategori/SsoqKZutx1BqrYNrWr84xTT6yWciG3FESYXMalpi.png', '2023-06-12 20:42:45', '2023-06-12 20:42:45');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(39, '2014_10_12_000000_create_users_table', 1),
(40, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(41, '2019_08_19_000000_create_failed_jobs_table', 1),
(42, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(43, '2023_05_02_131524_create_kategoris_table', 1),
(44, '2023_05_11_101508_create_bahans_table', 1),
(45, '2023_05_24_054342_create_produks_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('daffiaffan@student.telkomuniversity.ac.id', '$2y$10$7MTrf4dtH.Wcm77LN3qJ6.phZK64z1vFzOJw08zbQObZHDJudOwcK', '2023-06-10 04:20:32');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produks`
--

CREATE TABLE `produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `dekripsi_produk` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produks`
--

INSERT INTO `produks` (`id`, `nama_produk`, `id_kategori`, `dekripsi_produk`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Kaos Oversize', 2, 'kaos over size nyaman digunakan', 'foto-produk/0yp8HW2jM53T34gVpz2VzALvic1UsPnCjKOokxaR.png', '2023-06-11 07:11:54', '2023-06-11 07:11:54'),
(2, 'Kaos lengan panjang', 2, 'Kaos lengan panjang', 'foto-produk/yHcDuO6THnt7cY6YXroF3cRj1wzvCEhbcTYRX8nk.png', '2023-06-11 07:12:26', '2023-06-11 07:12:26'),
(3, 'Kaos Lengan Pendek', 2, 'Kaos lengan pendek nyaman digunakan', 'foto-produk/esZOOOX1F5apXXzsCLDips79lXGrnx0315EAokTX.png', '2023-06-11 07:13:35', '2023-06-11 07:13:58'),
(4, 'Kaos Polo', 2, 'Kaos polo nyaman digunakan', 'foto-produk/OMrtcBHsWNn6QrsnOzbh96dRWvCrrU8u99CWprCp.png', '2023-06-11 07:14:31', '2023-06-11 07:14:31'),
(5, 'Kaos Turtleneck', 2, 'Kaos turtleneck nyaman digunakan', 'foto-produk/ADTMODhD1f4sakpzS7TIPPZL9hkuHMZznaSiaQCV.png', '2023-06-11 07:15:18', '2023-06-11 07:15:18'),
(6, 'Kemeja Denim', 5, 'Kemeja berbahan denim', 'foto-produk/okhRvJToXnAbRbkl8m7xPFdWLa497R0WEhrkru4s.png', '2023-06-11 07:19:45', '2023-06-11 07:19:45'),
(7, 'Kemeja Flanel', 5, 'Kemeja berbahan Flanel', 'foto-produk/N7D5YutG7p0XFS8su7FWOSh3hfnd2vEbvnd7DIK2.png', '2023-06-11 07:20:44', '2023-06-11 07:21:54'),
(8, 'Kemeja Formal', 5, 'Kemeja untuk keperluan Formal', 'foto-produk/bm97qGGeNeLLyNQWy7rRRmDUKiPg592gXTw4f3nm.png', '2023-06-11 07:22:49', '2023-06-11 07:22:49'),
(9, 'Kemeja NonColar', 5, 'Kemeja NonColar', 'foto-produk/YvVEUraCpNJs0vssUz3dpvKFHmSgx7KJADMk6tfF.png', '2023-06-11 08:03:49', '2023-06-11 08:03:49'),
(10, 'Kemeja Oxford', 5, 'Kemeja oxford', 'foto-produk/WI1maBFHjVOd2kxFXXlY68792bjnMhKXJmMOzLHx.png', '2023-06-11 08:12:20', '2023-06-11 08:12:20'),
(11, 'Kemeja Twill', 5, 'Kemeja Twill', 'foto-produk/QEmHdJKVUZAKWJbT1ERAmpY845KDLa3ZEBJLdvTh.png', '2023-06-11 08:20:02', '2023-06-11 08:20:02'),
(12, 'Crewneck', 6, 'Crewneck dengan bahan yang nyaman untuk digunakan', 'foto-produk/5caOirXZFM8MxKe6Pmnp3T8vBw95PKrTdzomNxk0.png', '2023-06-11 08:21:53', '2023-06-11 08:21:53'),
(13, 'Hoodie', 6, 'Hoodie dengan bahan yang nyaman untuk digunakan', 'foto-produk/XAegdqfInxszuH0Ly9Yjbs9cHmnAb0bW3GN3N0ws.png', '2023-06-11 08:22:20', '2023-06-11 08:22:20'),
(14, 'Jumper', 6, 'Jumper dengan bahan yang nyaman untuk digunakan', 'foto-produk/IphuHG5MUubdRfM5r5FIUXFRAr2RNcD8rKhZPpsL.png', '2023-06-11 08:22:40', '2023-06-11 08:22:40'),
(15, 'Knitware', 6, 'Knitware dengan bahan yang nyaman untuk digunakan', 'foto-produk/hEZaqQvm35BZSaybaQZ5v5Rb4tVKyCqyikUua81O.png', '2023-06-11 08:23:08', '2023-06-11 08:23:08'),
(16, 'Sweatshirt', 6, 'sweatshirt', 'foto-produk/ZHN1vufXiI2jLgvONw2xPV7g6PKSNdQwnMpFJXcY.png', '2023-06-11 08:23:34', '2023-06-11 08:23:34'),
(17, 'Vest', 6, 'Vest dengan bahan yang nyaman untuk digunakan', 'foto-produk/4bGyEvKWjlA1NGT8OiqBbzBxqga0BPTJcTrKqKVm.png', '2023-06-11 08:23:53', '2023-06-11 08:23:53'),
(18, 'Topi Basekball', 7, 'Topi model basekball', 'foto-produk/UqOGknxyNRVOJBQ6WejyKFGpwVSgkAbeRlUdK6Yx.png', '2023-06-12 06:17:48', '2023-06-12 06:17:48'),
(19, 'Beanie', 7, 'Topi model beanie', 'foto-produk/Ats1bKGPnvLrkzyImqioWGbFbPFWqZpvq1Vpcu4T.png', '2023-06-12 06:18:26', '2023-06-12 06:18:26'),
(20, 'BucketHat', 7, 'Topi model buckethat', 'foto-produk/UHizqhY8arE6AgG6e2Gdsh2pLJ8h1fGUvyfOeaxA.png', '2023-06-12 06:19:02', '2023-06-12 06:19:02'),
(21, 'Topi DadHat', 7, 'Topi model dathat', 'foto-produk/wY7WfZyPaw2hyWIA3sRWkNEeTCamksmbbs95LGbW.png', '2023-06-12 06:19:32', '2023-06-12 07:41:30'),
(22, 'Topi Snapback', 7, 'Topi model snapback', 'foto-produk/W7KhhPb04cZm1j44wTWqh1fgtK12KMDJRsQXy1Y3.png', '2023-06-12 06:20:00', '2023-06-12 07:41:03'),
(23, 'Topi SunVisor', 7, 'Topi model sunvisor', 'foto-produk/Nx3IhTIHHpB7bQ3PoQHyNExw6qQCi7cRqvNBaS6W.png', '2023-06-12 06:20:36', '2023-06-12 06:20:36'),
(24, 'Topi Trucker', 7, 'Topi model Tucker', 'foto-produk/xV0AXCHSD77JnOEWRncyIxN64f0LnAwHVN2ortP6.png', '2023-06-12 06:20:58', '2023-06-12 06:20:58'),
(25, 'Jaket Bomber', 3, 'Jaket  model bomber', 'foto-produk/MlOtzmVDGoN4ME1B2E0Axd7YSA5HcF9VdYSbzdOU.png', '2023-06-12 06:22:17', '2023-06-12 06:22:17'),
(26, 'Jaket  Parka', 3, 'Jaket  model parka', 'foto-produk/le08isNiUAc06k6dKtVGjAPRcHf3J9ZXsrYV32bB.png', '2023-06-12 06:22:38', '2023-06-12 06:22:38'),
(27, 'Jaket Track', 3, 'Jaket model track', 'foto-produk/Vhvy7sWS5vCwhtRjwAioQ58XzlVGyMMvni3WG3xa.png', '2023-06-12 06:22:57', '2023-06-12 06:22:57'),
(28, 'Jaket Trucker', 3, 'Jaket  model trucker', 'foto-produk/VJvzDnlCm92yrVXgL1ldz1r9dINGChi8LUCuoWht.png', '2023-06-12 06:23:35', '2023-06-12 06:23:35'),
(29, 'Jaket Windbreaker', 3, 'Jaket model windbreaker', 'foto-produk/KOAK4x3EJo6W3dqlzC5AyL2s5hh2DTmSI2Us3VCo.png', '2023-06-12 06:24:07', '2023-06-12 06:24:07'),
(30, 'Jaket Denim', 3, 'Jaket model denim', 'foto-produk/775b8G6ULhGbOTqhRYW79aZk8Ej5tVH6eQeAL37p.png', '2023-06-12 06:24:39', '2023-06-12 06:24:39'),
(31, 'Jaket Varsity', 3, 'Jaket model Varsity', 'foto-produk/gg7cAcrhlP0a1VNGsitExr0CNQYYWr9GB8ggGN6C.png', '2023-06-12 06:25:01', '2023-06-12 06:25:01'),
(32, 'Celana Chino', 14, 'Celana model chino', 'foto-produk/NdngEGMzPcKAelYoRLFEjM1me1sTL0nO6hq8w6H2.png', '2023-06-12 20:43:26', '2023-06-12 20:43:26'),
(33, 'Celana Trousers', 14, 'Celana model trousers', 'foto-produk/FyqtINWBI1ArAH3W3dMN8reCwLPfdiNyS3WVkVuo.png', '2023-06-12 20:43:53', '2023-06-12 20:43:53'),
(34, 'Celana Ankle Pants', 14, 'Celana model ankle pants', 'foto-produk/ixDUtL6DHsJGZi9DO35U6W5uZ8mX0oK1Q3d1kmQI.png', '2023-06-12 20:45:53', '2023-06-12 20:45:53'),
(35, 'Celana Jeans', 14, 'Celana model jeans', 'foto-produk/sxQSZTbyyCbp9Cl8p1XtUkTszZdvpPNtxSh9H5E2.png', '2023-06-12 20:46:19', '2023-06-12 20:46:19'),
(36, 'Celana Training', 14, 'Celana model training', 'foto-produk/MFqyQM7CUe9MbKym5afdMhDi5HzhrPIYD8qey5XW.png', '2023-06-12 20:46:50', '2023-06-12 20:46:50'),
(37, 'Celana Cargo', 14, 'Celana model cargo', 'foto-produk/UtiJ78JTj9gtn7MeiklWdRbnLVW7UxbfQg1ZlusG.png', '2023-06-12 20:47:17', '2023-06-12 20:47:17'),
(38, 'faesfef', 4, 'fsafse', 'foto-produk/Z1NYchOPx2XB6OO5tCZiPH2AvcSwSlhlg5GDou2h.png', '2023-06-13 00:38:43', '2023-06-13 00:38:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'daffi affan', 'admin@gmail.com', NULL, '$2y$10$DZW/OYrssMHtl2uhBFEGluEoR8zesdeQh0Gvrme2StIeDbd/9AWIG', 'aDI98fhrmEZhbv5fYMqTX8KN8FKQZdOaDxWddj3yAP5G7325XrFb8l6vUJJN', '2023-05-23 23:02:58', '2023-06-10 04:26:26'),
(2, 'daffi', 'daffi@gmail.com', NULL, '$2y$10$dxLNkCwkstKVIzREyis3V.aJ4T3gHUe7Fo6XOeeGVwWydW0sv54Yq', NULL, '2023-06-02 04:51:09', '2023-06-02 04:51:09'),
(3, 'dafoisje', 'nefoasifjse@gmail.com', NULL, '$2y$10$c6zD0dOSKRxkKSVFWAyW7.dCC1pqXKflgP.ERpPu/h9SQ4kasrtc6', NULL, '2023-06-09 23:00:01', '2023-06-09 23:00:01'),
(4, 'daffi affan', 'daffiaffan@student.telkomuniversity.ac.id', NULL, '$2y$10$pGzcVLxGj7APzXtGC4IVpOqfmSZpeoe5IU6FzRM3i4m3SP2Qg5IIq', NULL, '2023-06-10 04:19:46', '2023-06-10 04:19:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahans`
--
ALTER TABLE `bahans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kategoris_nama_kategori_unique` (`nama_kategori`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produks_id_kategori_foreign` (`id_kategori`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bahans`
--
ALTER TABLE `bahans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produks`
--
ALTER TABLE `produks`
  ADD CONSTRAINT `produks_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategoris` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
