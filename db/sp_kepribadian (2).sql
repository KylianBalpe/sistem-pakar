-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2023 at 07:03 PM
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
-- Database: `sp_kepribadian`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cfbaru`
--

CREATE TABLE `tbl_cfbaru` (
  `id` int(255) NOT NULL,
  `kode_ciri` varchar(11) NOT NULL,
  `nilai_cf` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_cfbaru`
--

INSERT INTO `tbl_cfbaru` (`id`, `kode_ciri`, `nilai_cf`) VALUES
(517, 'C001', 0.09),
(518, 'C002', 0.08),
(519, 'C003', 0.16),
(520, 'C004', 0.36),
(521, 'C005', 0.48),
(522, 'C006', 0.12),
(523, 'C007', 0.08),
(524, 'C008', 0.14),
(525, 'C009', 0.56),
(526, 'C010', 0.08),
(527, 'C011', 0.3),
(528, 'C012', 0.36),
(529, 'C013', 0.05),
(530, 'C014', 0.06),
(531, 'C015', 0.3),
(532, 'C016', 0.4),
(533, 'C017', 0.14),
(534, 'C018', 0.16),
(535, 'C019', 0.28),
(536, 'C020', 0.54),
(537, 'C021', 0.4),
(538, 'C022', 0.4),
(539, 'C023', 0.16),
(540, 'C024', 0.72),
(541, 'C025', 0.6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ciri`
--

CREATE TABLE `tbl_ciri` (
  `kode` varchar(11) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `cf_pakar` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_ciri`
--

INSERT INTO `tbl_ciri` (`kode`, `nama`, `cf_pakar`) VALUES
('C001', 'Anda seseorang yang mudah berpikir positif', 0.9),
('C002', 'Anda seseorang yang mudah berpikir negatif', 0.8),
('C003', 'Anda seseorang yang banyak bicara daripada mendengarkan', 0.8),
('C004', 'Anda seseorang yang mudah berteman dan mudah berbaur', 0.6),
('C005', 'Anda seseorang yang penuh semangat', 0.6),
('C006', 'Anda seseorang yang menyenangkan dan selalu terlihat ceria', 0.6),
('C007', 'Anda seseorang yang menyukai hiburan dan membuat orang lain terhibur', 0.8),
('C008', 'Anda seorang yang mampu meyakinkan orang lain dengan logika dan fakta', 0.7),
('C009', 'Anda seseorang yang berkemauan tegas dan kuat', 0.7),
('C010', 'Anda seseorang yang sangat memerlukan perubahan', 0.4),
('C011', 'Anda seseorang yang berbakat memimpin', 0.5),
('C012', 'Anda seseorang yang melakukan sesuatu yang berorientasi tujuan', 0.9),
('C013', 'Anda seseorang yang mudah percaya diri dan mandiri', 0.5),
('C014', 'Anda seseorang yang mudah tersinggung dan sensitif', 0.3),
('C015', 'Anda seseorang yang penuh pikiran dan suka menganalisa', 0.3),
('C016', 'Anda seseorang yang suka membuat rencana dan terjadwal', 0.4),
('C017', 'Anda seseorang yang menuntut kesempurnaan (perfeksionis dan idealis)', 0.7),
('C018', 'Anda seseorang yang menyukai detail terhadap hal kecil maupun besar', 0.8),
('C019', 'Anda seseorang yang cerewet dan suka mengkritik', 0.7),
('C020', 'Anda seseorang yang cinta damai serta menghindari segala bentuk kekacauan', 0.9),
('C021', 'Anda seseorang yang rendah hati', 0.5),
('C022', 'Anda seseorang yang penurut dan toleran', 0.5),
('C023', 'Anda seseorang yang pemalu dan pendiam', 0.4),
('C024', 'Anda seorang yang penakut', 0.9),
('C025', 'Anda seorang yang sabar dan ramah', 0.6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_final`
--

CREATE TABLE `tbl_final` (
  `id` int(11) NOT NULL,
  `kode_kepribadian` varchar(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_final`
--

INSERT INTO `tbl_final` (`id`, `kode_kepribadian`, `nilai`) VALUES
(31, 'K004', 28.84);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hasil`
--

CREATE TABLE `tbl_hasil` (
  `id` int(11) NOT NULL,
  `kode_kepribadian` varchar(11) NOT NULL,
  `nilai_cf` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_hasil`
--

INSERT INTO `tbl_hasil` (`id`, `kode_kepribadian`, `nilai_cf`) VALUES
(134, 'K001', 26.29),
(135, 'K002', 22.15),
(136, 'K003', 21.47),
(137, 'K004', 28.84);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kepribadian`
--

CREATE TABLE `tbl_kepribadian` (
  `kode` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `detail` text NOT NULL,
  `saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_kepribadian`
--

INSERT INTO `tbl_kepribadian` (`kode`, `nama`, `detail`, `saran`) VALUES
('K001', 'Sanguinis', 'Kepribadian sanguinis mengacu pada tipe kepribadian yang ditandai oleh ekstrovertnya, keceriaan, dan energi yang tinggi. Individu dengan kepribadian sanguinis cenderung mudah bergaul, antusias, dan penuh semangat. Mereka menikmati interaksi sosial, memiliki kemampuan komunikasi yang baik, dan mudah beradaptasi dengan lingkungan sosial yang berbeda. Namun, mereka juga cenderung memiliki perhatian yang mudah teralihkan dan sulit untuk tetap fokus dalam waktu yang lama. Kepribadian sanguinis menunjukkan kecenderungan kuat untuk menikmati kehidupan sosial, berenergi tinggi, dan memiliki kemampuan interpersonal yang baik.', 'Untuk individu dengan kepribadian sanguinis, disarankan untuk mengelola energi mereka dengan bijak. Penting bagi mereka untuk menemukan keseimbangan antara interaksi sosial yang mereka nikmati dan waktu pribadi yang diperlukan untuk memulihkan diri. Mereka dapat mengembangkan strategi untuk meningkatkan ketahanan mental, seperti latihan fisik, meditasi, atau mengelola waktu secara efektif. Selain itu, penting bagi mereka untuk mengenali kecenderungan mereka untuk terlalu teralihkan dan belajar untuk tetap fokus pada tujuan yang ingin dicapai. Dengan memanfaatkan keceriaan dan keenergikan mereka secara positif, individu dengan kepribadian sanguinis dapat mencapai kehidupan yang seimbang dan memuaskan.'),
('K002', 'Koleris', 'Kepribadian koleris merujuk pada tipe kepribadian yang ditandai oleh sifat-sifat seperti dominan, tegas, penuh semangat, dan berorientasi pada tujuan. Individu dengan kepribadian koleris cenderung memiliki keinginan kuat untuk mengendalikan situasi dan mengambil inisiatif. Mereka memiliki energi yang tinggi, kemauan yang kuat, dan ketekunan yang besar dalam mencapai tujuan yang mereka tetapkan. Meskipun terkadang terlihat keras kepala atau cepat marah, mereka juga memiliki kecenderungan menjadi pemimpin yang efektif dan berorientasi pada solusi. Kepribadian koleris sering kali menunjukkan sikap yang tegas, penuh semangat, dan siap bertindak untuk menghadapi tantangan dengan tekad yang kuat.', 'Untuk individu dengan kepribadian koleris, disarankan untuk mengembangkan keterampilan komunikasi yang efektif. Meskipun memiliki sifat dominan dan tegas, penting bagi mereka untuk belajar mendengarkan dan memahami sudut pandang orang lain. Selain itu, penting bagi mereka untuk mengelola emosi dengan bijak, sehingga mereka dapat menghindari meluapkan kemarahan atau agresi yang tidak perlu. Mengasah kemampuan memimpin dengan membangun kerjasama dan memotivasi orang lain adalah kunci untuk kesuksesan mereka. Dengan menggabungkan energi yang tinggi dan ketekunan mereka dengan kemampuan untuk berkomunikasi dan memimpin dengan baik, individu dengan kepribadian koleris dapat mencapai tujuan mereka secara efektif dan membangun hubungan yang sehat dengan orang lain.'),
('K003', 'Melankolis', 'Kepribadian melankolis mengacu pada tipe kepribadian yang ditandai oleh sifat-sifat seperti analitis, reflektif, dan perfeksionis. Individu dengan kepribadian melankolis cenderung memiliki kepekaan emosional yang tinggi, pemikiran mendalam, dan kecenderungan untuk mempertimbangkan segala aspek dengan seksama sebelum bertindak. Mereka cenderung introspektif dan memiliki standar yang tinggi terhadap diri sendiri dan orang lain. Meskipun mereka cenderung memikirkan hal-hal negatif atau melankolis, mereka juga memiliki kekuatan dalam mengamati dan menghargai keindahan serta mendalami pemahaman yang mendalam terhadap dunia. Kepribadian melankolis menunjukkan kepintaran analitis dan kerelaan untuk mempertimbangkan setiap detail, yang dapat digunakan sebagai kekuatan untuk mencapai kesuksesan dalam bidang yang memerlukan ketelitian dan kecermatan.', 'Untuk individu dengan kepribadian melankolis, disarankan untuk memperhatikan keseimbangan antara pemikiran mendalam dan kecenderungan untuk terlalu kritis terhadap diri sendiri. Penting bagi mereka untuk mengembangkan pola pikir yang lebih positif dan menghargai kelebihan mereka sendiri. Dalam menghadapi tantangan, mereka dapat memanfaatkan kecermatan dan pemikiran analitis mereka untuk merencanakan dengan baik dan mengambil tindakan yang tepat. Namun, mereka juga perlu belajar untuk meredakan kecenderungan overthinking dan menghadapi kegagalan dengan lapang dada. Dengan menghargai kepekaan emosional mereka dan mengembangkan keseimbangan antara refleksi dan tindakan, individu dengan kepribadian melankolis dapat mencapai pencapaian yang signifikan dalam bidang yang mereka tekuni, sambil tetap menjaga kesehatan mental dan kebahagiaan mereka.'),
('K004', 'Plegmatis', 'Kepribadian plegmatis merujuk pada tipe kepribadian yang ditandai oleh sifat-sifat seperti kalem, sabar, dan cenderung stabil emosinya. Individu dengan kepribadian plegmatis cenderung memiliki sikap yang tenang, tidak mudah terpengaruh oleh stres, dan memiliki kemampuan untuk menyesuaikan diri dengan lingkungan dengan baik. Mereka cenderung menghindari konflik dan mencari keseimbangan dalam kehidupan mereka. Meskipun terkadang terlihat lamban dalam mengambil tindakan, mereka memiliki kekuatan dalam menghadapi situasi sulit dengan sikap yang stabil dan kemampuan untuk menjaga ketenangan. Kepribadian plegmatis menunjukkan kestabilan emosional dan kemampuan untuk menghadapi tantangan dengan kepala dingin, yang dapat membantu mereka menciptakan hubungan harmonis dengan orang lain dan menjaga keseimbangan dalam hidup mereka.', 'Untuk individu dengan kepribadian plegmatis, disarankan untuk mengembangkan kepercayaan diri dan keinginan untuk mengambil risiko yang sehat. Meskipun mereka memiliki sikap yang tenang dan cenderung menghindari konflik, penting bagi mereka untuk memperluas batasan mereka dan mencoba hal-hal baru. Mengidentifikasi dan mengejar tujuan yang dapat memotivasi mereka secara pribadi dapat membantu meningkatkan motivasi dan meningkatkan kepuasan hidup. Selain itu, mereka juga perlu belajar untuk memperkuat kemampuan komunikasi mereka agar lebih proaktif dalam menyampaikan pikiran dan keinginan mereka. Dengan mengembangkan kepercayaan diri dan keberanian untuk mengambil langkah-langkah di luar zona nyaman, individu dengan kepribadian plegmatis dapat menghadapi tantangan dengan lebih efektif dan mencapai potensi penuh dalam kehidupan mereka.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pilihan`
--

CREATE TABLE `tbl_pilihan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_pilihan`
--

INSERT INTO `tbl_pilihan` (`id`, `nama`, `nilai`) VALUES
(3, 'Tidak Yakin', 0),
(4, 'Cukup Tidak Yakin', 0.2),
(5, 'Sedikit Tidak Yakin', 0.4),
(6, 'Sedikit Yakin', 0.6),
(7, 'Cukup Yakin', 0.8),
(8, 'Yakin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_riwayat`
--

CREATE TABLE `tbl_riwayat` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `kode_kepribadian` varchar(11) NOT NULL,
  `hasil` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_riwayat`
--

INSERT INTO `tbl_riwayat` (`id`, `tanggal`, `kode_kepribadian`, `hasil`) VALUES
(1, '0000-00-00', 'K002', 59.65),
(2, '0000-00-00', 'K002', 59.65),
(3, '0000-00-00', 'K001', 58.49),
(4, '0000-00-00', 'K001', 58.49),
(5, '0000-00-00', 'K002', 48.3),
(6, '0000-00-00', 'K002', 48.3),
(7, '0000-00-00', 'K002', 48.3),
(8, '0000-00-00', 'K003', 44.05),
(9, '0000-00-00', 'K002', 59.65),
(10, '0000-00-00', 'K002', 59.65),
(11, '0000-00-00', 'K002', 59.65),
(12, '2023-07-03', 'K002', 59.65),
(13, '2023-07-03', 'K002', 59.65),
(14, '2023-07-03', 'K004', 0),
(15, '2023-07-03', 'K004', 33.24),
(16, '2023-07-03', 'K004', 0),
(17, '2023-07-03', 'K004', 0),
(18, '2023-07-03', 'K002', 22.15),
(19, '2023-07-03', 'K003', 58.33),
(20, '2023-07-04', 'K002', 59.09),
(21, '2023-07-04', 'K002', 59.09),
(22, '2023-07-04', 'K004', 39.74),
(23, '2023-07-04', 'K004', 0),
(24, '2023-07-04', 'K004', 0),
(25, '2023-07-07', 'K001', 45.19),
(26, '2023-07-11', 'K001', 29.14),
(27, '2023-07-11', 'K001', 26.29),
(28, '2023-07-11', 'K001', 26.29),
(29, '2023-07-11', 'K004', 28.84),
(30, '2023-07-11', 'K004', 28.84);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rule`
--

CREATE TABLE `tbl_rule` (
  `id` int(11) NOT NULL,
  `rule` varchar(50) NOT NULL,
  `kode_ciri` varchar(11) NOT NULL,
  `kode_kepribadian` varchar(11) NOT NULL,
  `nilai_cf` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_rule`
--

INSERT INTO `tbl_rule` (`id`, `rule`, `kode_ciri`, `kode_kepribadian`, `nilai_cf`) VALUES
(1, 'Rule 01', 'C001', 'K001', 1),
(2, 'Rule 01', 'C007', 'K001', 1),
(3, 'Rule 01', 'C019', 'K001', 1),
(4, 'Rule 01', 'C006', 'K001', 1),
(5, 'Rule 01', 'C022', 'K001', 1),
(6, 'Rule 01', 'C018', 'K001', 1),
(7, 'Rule 01', 'C012', 'K001', 1),
(8, 'Rule 02', 'C001', 'K001', 0.8),
(9, 'Rule 02', 'C007', 'K001', 0.8),
(10, 'Rule 02', 'C019', 'K001', 0.8),
(11, 'Rule 02', 'C006', 'K001', 0.8),
(12, 'Rule 02', 'C022', 'K001', 0.8),
(13, 'Rule 02', 'C018', 'K001', 0.8),
(14, 'Rule 03', 'C001', 'K001', 0.7),
(15, 'Rule 03', 'C007', 'K001', 0.7),
(16, 'Rule 03', 'C019', 'K001', 0.7),
(17, 'Rule 03', 'C006', 'K001', 0.7),
(18, 'Rule 03', 'C022', 'K001', 0.7),
(19, 'Rule 04', 'C001', 'K001', 0.6),
(20, 'Rule 04', 'C007', 'K001', 0.6),
(21, 'Rule 04', 'C019', 'K001', 0.6),
(22, 'Rule 04', 'C006', 'K001', 0.6),
(23, 'Rule 05', 'C001', 'K001', 0.4),
(24, 'Rule 05', 'C007', 'K001', 0.4),
(25, 'Rule 05', 'C019', 'K001', 0.4),
(26, 'Rule 06', 'C001', 'K001', 0.2),
(27, 'Rule 06', 'C007', 'K001', 0.2),
(28, 'Rule 07', 'C012', 'K002', 1),
(29, 'Rule 07', 'C018', 'K002', 1),
(30, 'Rule 07', 'C008', 'K002', 1),
(31, 'Rule 07', 'C005', 'K002', 1),
(32, 'Rule 07', 'C013', 'K002', 1),
(33, 'Rule 07', 'C023', 'K002', 1),
(34, 'Rule 07', 'C015', 'K002', 1),
(35, 'Rule 08', 'C012', 'K002', 0.7),
(36, 'Rule 08', 'C018', 'K002', 0.7),
(37, 'Rule 08', 'C008', 'K002', 0.7),
(38, 'Rule 08', 'C005', 'K002', 0.7),
(39, 'Rule 08', 'C013', 'K002', 0.7),
(40, 'Rule 08', 'C023', 'K002', 0.7),
(41, 'Rule 09', 'C012', 'K002', 0.6),
(42, 'Rule 09', 'C018', 'K002', 0.6),
(43, 'Rule 09', 'C008', 'K002', 0.6),
(44, 'Rule 09', 'C005', 'K002', 0.6),
(45, 'Rule 09', 'C013', 'K002', 0.6),
(46, 'Rule 10', 'C012', 'K002', 0.4),
(47, 'Rule 10', 'C018', 'K002', 0.4),
(48, 'Rule 10', 'C008', 'K002', 0.4),
(49, 'Rule 10', 'C005', 'K002', 0.4),
(50, 'Rule 11', 'C012', 'K002', 0.3),
(51, 'Rule 11', 'C018', 'K002', 0.3),
(52, 'Rule 11', 'C008', 'K002', 0.3),
(53, 'Rule 12', 'C012', 'K002', 0.2),
(54, 'Rule 12', 'C018', 'K002', 0.2),
(55, 'Rule 13', 'C024', 'K003', 1),
(56, 'Rule 13', 'C002', 'K003', 1),
(57, 'Rule 13', 'C009', 'K003', 1),
(58, 'Rule 13', 'C004', 'K003', 1),
(59, 'Rule 13', 'C011', 'K003', 1),
(60, 'Rule 13', 'C016', 'K003', 1),
(61, 'Rule 13', 'C014', 'K003', 1),
(62, 'Rule 14', 'C024', 'K003', 0.7),
(63, 'Rule 14', 'C002', 'K003', 0.7),
(64, 'Rule 14', 'C009', 'K003', 0.7),
(65, 'Rule 14', 'C004', 'K003', 0.7),
(66, 'Rule 14', 'C011', 'K003', 0.7),
(67, 'Rule 14', 'C016', 'K003', 0.7),
(68, 'Rule 15', 'C024', 'K003', 0.6),
(69, 'Rule 15', 'C002', 'K003', 0.6),
(70, 'Rule 15', 'C009', 'K003', 0.6),
(71, 'Rule 15', 'C004', 'K003', 0.6),
(72, 'Rule 15', 'C011', 'K003', 0.6),
(73, 'Rule 16', 'C024', 'K003', 0.4),
(74, 'Rule 16', 'C002', 'K003', 0.4),
(75, 'Rule 16', 'C009', 'K003', 0.4),
(76, 'Rule 16', 'C004', 'K003', 0.4),
(77, 'Rule 17', 'C024', 'K003', 0.3),
(78, 'Rule 17', 'C002', 'K003', 0.3),
(79, 'Rule 17', 'C009', 'K003', 0.3),
(80, 'Rule 18', 'C024', 'K003', 0.2),
(81, 'Rule 18', 'C002', 'K003', 0.2),
(82, 'Rule 19', 'C020', 'K004', 1),
(83, 'Rule 19', 'C003', 'K004', 1),
(84, 'Rule 19', 'C017', 'K004', 1),
(85, 'Rule 19', 'C025', 'K004', 1),
(86, 'Rule 19', 'C021', 'K004', 1),
(87, 'Rule 19', 'C010', 'K004', 1),
(88, 'Rule 19', 'C014', 'K004', 1),
(89, 'Rule 20', 'C020', 'K004', 0.7),
(90, 'Rule 20', 'C003', 'K004', 0.7),
(91, 'Rule 20', 'C017', 'K004', 0.7),
(92, 'Rule 20', 'C025', 'K004', 0.7),
(93, 'Rule 20', 'C021', 'K004', 0.7),
(94, 'Rule 20', 'C010', 'K004', 0.7),
(95, 'Rule 21', 'C020', 'K004', 0.6),
(96, 'Rule 21', 'C003', 'K004', 0.6),
(97, 'Rule 21', 'C017', 'K004', 0.6),
(98, 'Rule 21', 'C025', 'K004', 0.6),
(99, 'Rule 21', 'C021', 'K004', 0.6),
(100, 'Rule 22', 'C020', 'K004', 0.4),
(101, 'Rule 22', 'C003', 'K004', 0.4),
(102, 'Rule 22', 'C017', 'K004', 0.4),
(103, 'Rule 22', 'C025', 'K004', 0.4),
(104, 'Rule 23', 'C020', 'K004', 0.3),
(105, 'Rule 23', 'C003', 'K004', 0.3),
(106, 'Rule 23', 'C017', 'K004', 0.3),
(107, 'Rule 24', 'C020', 'K004', 0.2),
(108, 'Rule 24', 'C003', 'K004', 0.2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cfbaru`
--
ALTER TABLE `tbl_cfbaru`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_ciri` (`kode_ciri`);

--
-- Indexes for table `tbl_ciri`
--
ALTER TABLE `tbl_ciri`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_final`
--
ALTER TABLE `tbl_final`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_kepribadian` (`kode_kepribadian`);

--
-- Indexes for table `tbl_hasil`
--
ALTER TABLE `tbl_hasil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_kepribadian` (`kode_kepribadian`);

--
-- Indexes for table `tbl_kepribadian`
--
ALTER TABLE `tbl_kepribadian`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_pilihan`
--
ALTER TABLE `tbl_pilihan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_riwayat`
--
ALTER TABLE `tbl_riwayat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_kepribadian` (`kode_kepribadian`);

--
-- Indexes for table `tbl_rule`
--
ALTER TABLE `tbl_rule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_ciri` (`kode_ciri`) USING BTREE,
  ADD KEY `kode_kepribadian` (`kode_kepribadian`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_cfbaru`
--
ALTER TABLE `tbl_cfbaru`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=542;

--
-- AUTO_INCREMENT for table `tbl_final`
--
ALTER TABLE `tbl_final`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_hasil`
--
ALTER TABLE `tbl_hasil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `tbl_pilihan`
--
ALTER TABLE `tbl_pilihan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_riwayat`
--
ALTER TABLE `tbl_riwayat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_rule`
--
ALTER TABLE `tbl_rule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_cfbaru`
--
ALTER TABLE `tbl_cfbaru`
  ADD CONSTRAINT `tbl_cfbaru_ibfk_1` FOREIGN KEY (`kode_ciri`) REFERENCES `tbl_ciri` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_final`
--
ALTER TABLE `tbl_final`
  ADD CONSTRAINT `tbl_final_ibfk_1` FOREIGN KEY (`kode_kepribadian`) REFERENCES `tbl_kepribadian` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_hasil`
--
ALTER TABLE `tbl_hasil`
  ADD CONSTRAINT `tbl_hasil_ibfk_1` FOREIGN KEY (`kode_kepribadian`) REFERENCES `tbl_kepribadian` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_riwayat`
--
ALTER TABLE `tbl_riwayat`
  ADD CONSTRAINT `tbl_riwayat_ibfk_1` FOREIGN KEY (`kode_kepribadian`) REFERENCES `tbl_kepribadian` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_rule`
--
ALTER TABLE `tbl_rule`
  ADD CONSTRAINT `tbl_rule_ibfk_1` FOREIGN KEY (`kode_ciri`) REFERENCES `tbl_ciri` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_rule_ibfk_2` FOREIGN KEY (`kode_kepribadian`) REFERENCES `tbl_kepribadian` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
