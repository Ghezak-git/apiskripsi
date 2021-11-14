-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 20, 2020 at 01:13 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id14483101_skripsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gejala`
--

CREATE TABLE `tbl_gejala` (
  `id_gejala` int(11) NOT NULL,
  `kd_gejala` varchar(10) NOT NULL,
  `nama_gejala` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gejala`
--

INSERT INTO `tbl_gejala` (`id_gejala`, `kd_gejala`, `nama_gejala`) VALUES
(1, 'G001', 'Nyeri teramat sangat pada saat mengunyah'),
(2, 'G002', 'Gusi mengalami pembengkakan'),
(3, 'G003', 'Warna gusi menjadi merah atau keunguan'),
(4, 'G004', 'Ukuran gusi menyusut'),
(5, 'G005', 'Terserang demam'),
(6, 'G006', 'Pembengkakan kelenjar getah bening'),
(7, 'G007', 'Gusi rentan mengalami pendarahan'),
(8, 'G008', 'Gusi terasa lunak saat disentuh'),
(9, 'G009', 'Penumpukan plak dan karang gigi'),
(10, 'G010', 'Keluar nanah pada bagian yang membatasi gigi dan gusi'),
(11, 'G011', 'Perenggangan jarak antar gigi'),
(12, 'G012', 'Gigi copot/tanggal'),
(13, 'G013', 'Pembengkakan pada wajah atau pipi'),
(14, 'G014', 'Nyeri parah pada gigi'),
(15, 'G015', 'Kemerahan pada mulut dan wajah'),
(16, 'G016', 'Terasa gatal dan kesemutan pada area yang terinfeksi'),
(17, 'G017', 'Terdapat luka lepuh atau lenting-lenting kecil pada area bibir dan sekitarnya'),
(20, 'G018', 'Mulut menjadi bau'),
(21, 'G019', 'Banyak terdapat luka terbuka berwarna putih dan kuning'),
(22, 'G020', 'Terjadi peradangan pada lidah'),
(23, 'G021', 'Lidah berwarna merah dan putih'),
(24, 'G022', 'Alergi pasta gigi dan obat kumur'),
(25, 'G023', 'Ujung-ujung gusi yang terletak diantara dua gigi mengalami pengikisan'),
(26, 'G024', 'Selera makan hilang'),
(27, 'G025', 'Sakit dan bercak gatal di kulit trigeminal, resikel unilateral, dan ulser mulut'),
(28, 'G026', 'Perih disekitar luka'),
(29, 'G027', 'Bibir terasa kering'),
(30, 'G028', 'Muncul nanah pada gusi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hasil`
--

CREATE TABLE `tbl_hasil` (
  `id_hasil` int(4) NOT NULL,
  `id_penyakit` int(11) NOT NULL,
  `penyakit` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hasil`
--

INSERT INTO `tbl_hasil` (`id_hasil`, `id_penyakit`, `penyakit`, `id_user`, `created_at`) VALUES
(1, 1, 'Anda menderita penyakit ABSES PERIODONTAL', 1, '2020-03-24'),
(2, 5, 'Anda menderita penyakit ABSES PERIPEKAL', 1, '2020-08-05'),
(3, 2, 'Anda menderita penyakit HERPES ORAL', 1, '2020-08-05'),
(4, 8, 'Anda menderita penyakit TRENCH MOUTH', 1, '2020-08-05'),
(5, 3, 'Anda menderita penyakit GINGIVITIS', 1, '2020-08-05'),
(6, 1, 'Anda menderita penyakit ABSES PERIODONTAL', 1, '2020-08-06'),
(7, 1, 'Anda menderita penyakit ABSES PERIODONTAL', 1, '2020-08-07'),
(8, 1, 'Anda menderita nyeri biasa', 1, '2020-08-14'),
(9, 5, 'Anda menderita penyakit ABSES PERIPEKAL', 3, '2020-08-19'),
(10, 1, 'Anda menderita penyakit ABSES PERIODONTAL', 3, '2020-08-20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengetahuan`
--

CREATE TABLE `tbl_pengetahuan` (
  `ID` int(11) NOT NULL,
  `kd_gejala` varchar(10) NOT NULL,
  `solusi_dan_pertanyaan` text NOT NULL,
  `bila_benar` varchar(10) NOT NULL,
  `bila_salah` varchar(10) NOT NULL,
  `mulai` char(1) NOT NULL,
  `selesai` char(1) NOT NULL,
  `suara` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengetahuan`
--

INSERT INTO `tbl_pengetahuan` (`ID`, `kd_gejala`, `solusi_dan_pertanyaan`, `bila_benar`, `bila_salah`, `mulai`, `selesai`, `suara`) VALUES
(1, 'G001', 'Apakah merasa nyeri teramat sangat pada saat mengunyah?', 'G005', 'G005_2', 'Y', 'N', 'g001.mp3'),
(2, 'G002', 'Apakah gusi mengalami pembengkakan?', 'G003', 'G020', 'N', 'N', 'g002.mp3'),
(3, 'G003', 'Apakah warna gusi menjadi merah atau keunguan?', 'G004', 'K0', 'N', 'N', 'g003.mp3'),
(4, 'G004', 'Apakah ukuran gusi menyusut?', 'G007', 'K0', 'N', 'N', 'g004.mp3'),
(5, 'G007', 'Apakah gusi rentan mengalami pendarahan?', 'M03', 'G008', 'N', 'N', 'g007.mp3'),
(6, 'G008', 'Apakah gusi terasa lunak saat disentuh?', 'G009', 'K0', 'N', 'N', 'g008.mp3'),
(7, 'G009', 'Apakah terdapat penumpukan plak dan karang gigi?', 'G010', 'K0', 'N', 'N', 'g009.mp3'),
(8, 'G010', 'Apakah keluar nanah pada bagian yang membatasi gigi dan gusi?', 'G011', 'K0', 'N', 'N', 'g010.mp3'),
(9, 'G011', 'Apakah terjadi perenggangan jarak antar gigi?', 'G012', 'K0', 'N', 'N', 'g011.mp3'),
(10, 'G012', 'Apakah gigi copot/tanggal?', 'M04', 'K0', 'N', 'N', 'g012.mp3'),
(11, 'G005', 'Apakah terserang demam?', 'G006', 'G002', 'N', 'N', 'g005.mp3'),
(12, 'G006', 'Apakah terjadi pembengkakan kelenjar getah bening?', 'G013', 'K0', 'N', 'N', 'g006.mp3'),
(13, 'G013', 'Apakah mengalami pembengkakan pada wajah atau pipi?', 'G014', 'G016', 'N', 'N', 'g013.mp3'),
(14, 'G014', 'Apakah terasa nyeri parah pada gigi?', 'G015', 'K0', 'N', 'N', 'g014.mp3'),
(15, 'G015', 'Apakah terjadi kemerahan pada mulut dan wajah?', 'G028', 'K0', 'N', 'N', 'g015.mp3'),
(16, 'G016', 'Apakah terasa gatal dan kesemutan pada area yang terinfeksi?', 'G017', 'G018', 'N', 'N', NULL),
(17, 'G017', 'Apakah terjadi luka lepuh atau lenting-lenting kecil pada area bibir dan sekitarnya?', 'M02', 'K0', 'N', 'N', NULL),
(18, 'K0', 'MAAF UNTUK SEMENTARA, SISTEM INI BELUM DAPAT MENDIAGNOSA PENYAKIT YANG DIDERITA', 'K0', 'K0', 'N', 'Y', 'tidak-bisa.mp3'),
(19, 'M01', 'Anda menderita penyakit ABSES PERIODONTAL', 'K0', 'K0', 'N', 'Y', 'Abses-Periodontal.mp3'),
(20, 'M02', 'Anda menderita penyakit HERPES ORAL', 'K0', 'K0', 'N', 'Y', NULL),
(21, 'M03', 'Anda menderita penyakit GINGIVITIS', 'K0', 'K0', 'N', 'Y', NULL),
(22, 'M04', 'Anda menderita penyakit PERIODONTITIS', 'K0', 'K0', 'N', 'Y', NULL),
(23, 'K01', 'Anda menderita nyeri biasa', 'K0', 'K0', 'N', 'Y', NULL),
(26, 'M05', 'Anda menderita penyakit ABSES PERIPEKAL', 'K0', 'K0', 'N', 'Y', NULL),
(27, 'M06', 'Anda menderita penyakit GINGIVOSTOMATITIS', 'K0', 'K0', 'N', 'Y', NULL),
(28, 'M07', 'Anda menderita penyakit GLOSSITIS', 'K0', 'K0', 'N', 'Y', NULL),
(29, 'M08', 'Anda menderita penyakit TRENCH MOUTH', 'K0', 'K0', 'N', 'Y', NULL),
(30, 'M09', 'Anda menderita penyakit HERPES ZOSTER', 'K0', 'K0', 'N', 'Y', NULL),
(31, 'M10', 'Anda menderita penyakit STOMATIS ANGULARIS', 'K0', 'K0', 'N', 'Y', NULL),
(32, 'G028', 'Apakah Muncul nanah pada gusi?', 'M01', 'M05', 'N', 'N', NULL),
(33, 'G005_2', 'Apakah terserang demam?', 'G003_2', 'G016_2', 'N', 'N', NULL),
(34, 'G018', 'Apakah mulut menjadi bau?', 'G023', 'K0', 'N', 'N', NULL),
(35, 'G023', 'Apakah ujung-ujung gusi yang terletak diantara dua gigi mengalami pengikisan?', 'M08', 'K0', 'N', 'N', NULL),
(36, 'G020', 'Apakah lidah mengalami peradangan?', 'G021', 'K0', 'N', 'N', NULL),
(37, 'G021', 'Apakah lidah berwarna merah dan putih', 'G022', 'K0', 'N', 'N', NULL),
(38, 'G022', 'Apakah alergi terhadap pasta gigi dan obat kumur?', 'M07', 'K0', 'N', 'N', NULL),
(39, 'G003_2', 'Apakah warna gusi menjadi merah atau keunguan?', 'G017_2', 'G024', 'N', 'N', NULL),
(40, 'G018_2', 'Apakah mulut menjadi bau?', 'G019', 'K0', 'N', 'N', NULL),
(41, 'G019', 'Apakah banyak terdapat luka terbuka berwarna putih dan kuning?', 'M06', 'K0', 'N', 'N', NULL),
(42, 'G024', 'Apakah selera makan hilang?', 'G025', 'K0', 'N', 'N', NULL),
(43, 'G025', 'Apakah sakit dan bercak gatal di kulit trigeminal, resikel unilateral, dan ulser mulut?', 'M09', 'K0', 'N', 'N', NULL),
(44, 'G016_2', 'Apakah terasa gatal dan kesemutan pada area yang terinfeksi?', 'G027', 'K01', 'N', 'N', NULL),
(45, 'G027', 'Apakah bibir terasa kering?', 'G026', 'K0', 'N', 'N', NULL),
(46, 'G026', 'Apakah perih disekitar luka?', 'M10', 'K0', 'N', 'N', NULL),
(47, 'G017_2', ' Apakah terjadi luka lepuh atau lenting-lenting kecil pada area bibir dan sekitarnya?', 'G018_2', 'K0', 'N', 'N', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penyakit`
--

CREATE TABLE `tbl_penyakit` (
  `id_penyakit` int(11) NOT NULL,
  `nama_penyakit` varchar(30) NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `gejala` text NOT NULL,
  `artikel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penyakit`
--

INSERT INTO `tbl_penyakit` (`id_penyakit`, `nama_penyakit`, `gambar`, `gejala`, `artikel`) VALUES
(1, 'Abses Periodontal', 'abses.jpg', '1. Merasa nyeri teramat sangat pada saat \r\nmengunyah. <br>\r\n2. Demam. <br>\r\n3. Pembengkakan kelenjar getah bening. <br>\r\n4. Pembengkakan pada wajah atau pipi. <br>\r\n5. Terasa nyeri parah pada gigi. <br>\r\n6. Kemerahan pada mulut dan wajah.<br>\r\n7. Muncul nanah pada gusi.', 'Abses periodontal disebabkan infeksi pada jaringan periodontal. Abses merupakan suatu nanah yang terjadi pada gusi (gingiva). Terjadi karena faktor iritasi, seperti plak, kalkulus, invasi bakteri, impaksi makanan atau trauma jaringan. Terkadang pula akibat gigi yang akan tumbuh.'),
(2, 'Herpes Oral', 'herpes.png', '1. Merasa nyeri teramat sangat pada saat \r\nmengunyah. <br>\r\n2. Demam. <br>\r\n3. Pembengkakan kelenjar getah bening. <br>\r\n4. Terasa gatal dan kesemutan pada area yang terinfeksi. <br>\r\n5. Terjadi luka lepuh atau lenting-lenting kecil pada area bibir dan sekitarnya.', 'Herpes di bibir dan mulut dikenal juga sebagai herpes labialis atau herpes oral. Sama seperti herpes genital, kondisi ini disebabkan oleh infeksi virus herpes simpleks tipe 1. Virus ini  dapat menulari siapa saja dengan mudah. Menggunakan alat makan, pelembap bibir atau berciuman dengan penderita herpes, akan berisiko tertular penyakit ini.'),
(3, 'Gingivitis', 'gingivitis.jpg', '1. Merasa nyeri teramat sangat pada saat \r\nmengunyah. <br>\r\n2. Gusi mengalami pembengkakan. <br>\r\n3. Warna gusi menjadi merah atau keunguan. <br>\r\n4. Ukuran gusi menyusut. <br>\r\n5. Gusi rentan mengalami pendarahan.', 'Gingivitis adalah peradangan pada gusi yang ditandai oleh memerahnya gusi di sekitar akar gigi. Gingivitis disebabkan oleh pembentukan plak akibat sisa-sisa makanan yang menempel di permukaan gigi dan bercampur dengan bakteri di mulut. Bila tidak dibersihkan, plak akan mengeras dan membentuk karang gigi.'),
(4, 'Periodontitis', 'periodontitis.jpg', '1. Merasa nyeri teramat sangat pada saat \r\nmengunyah. <br>\r\n2. Gusi mengalami pembengkakan. <br>\r\n3. Warna gusi menjadi merah atau keunguan. <br>\r\n4. Ukuran gusi menyusut. <br>\r\n5. Gusi terasa lunak saat disentuh. <br>\r\n6. Terdapat penumpukan plak dan karang gigi. <br>\r\n7. Keluar nanah pada bagian yang membatasi gigi dan gusi. <br>\r\n8. Terjadi perenggangan jarak antar gigi. <br>\r\n9. Gigi copot/tanggal.', 'Periodontitis adalah infeksi gusi yang merusak jaringan lunak dan tulang penyangga gigi. Kondisi ini perlu segera diobati karena dapat menyebabkan gigi tanggal. Periodontitis banyak diderita pada usia remaja. Saat terjadi periodontitis, bakteri menumpuk sebagai plak pada pangkal gigi, sehingga merusak jaringan di sekitar gigi dan menimbulkan abses gigi, serta berisiko menyebabkan kerusakan tulang.'),
(5, 'Abses Peripekal', 'abses-peripekal.png', '1. Demam. <br>\r\n2. Sakit pada saat mengunyah. <br>\r\n3. Pembengkakan kelenjar getah bening. <br>\r\n4. Nyeri parah pada gigi.<br>\r\n5. Kemerahan pada mulut dan wajah.<br>\r\n6. Pembengkakan wajah.', 'Abses gigi adalah terbentuknya kantung atau benjolan berisi nanah pada gigi yang disebabkan oleh infeksi bakteri. Abses gigi biasanya muncul pada ujung akar gigi (abses periapikal). Infeksi bakteri penyebab abses gigi umumnya terjadi pada orang dengan kebersihan dan kesehatan gigi yang buruk. Nanah yang berkumpul pada benjolan, lambat laun akan terasa bertambah nyeri.'),
(6, 'Gingivostomatitis', 'gingivo.jpg', '1. Bau mulut.<br>\r\n2. Demam.<br>\r\n3. Luka kecil pada lenting-lenting.<br>\r\n4. Gusi berwarna merah atau keunguan.<br>\r\n5. Banyak luka terbuka berwarna putih dan kuning.', 'Gingivostomatitis adalah permasalahan pada mulut yang umum terjadi. Penyakit ini biasanya ditandai dengan pembengkakan dan luka di mulut serta gusi. Gingivostomatitis seringkali disebabkan oleh bakteri dan beberapa jenis virus. Selain itu, penyakit ini lebih sering terjadi pada anak-anak dan juga pada orang yang tidak menjaga kebersihan mulut. Sebagian besar infeksi gingivostomatitis merupakan kasus yang ringan, namun ada juga beberapa kasus berat yang terjadi dan bisa terasa sangat menyakitkan.'),
(7, 'Glossitis', 'Glossitis.jpg', '1. Peradangan pada lidah.<br>\r\n2. Lidah berwarna merah dan putih.<br>\r\n3. Alergi pasta gigi dan obat kumur.<br>\r\n4. Sakit saat mengunyah.', 'Glossitis disebabkan oleh adanya reaksi alergi terhadap obat-obatan, makanan, atau berbagai hal lain yang berpotensi menyebabkan iritasi, termasuk pasta gigi. Pemicu lainnya bisa karena penyakit infeksi yang memengaruhi sistem kekebalan tubuh dimana infeksi menyerang papila dan otot lidah. Contohnya pada penyakit herpes simpleks. Virus ini dapat menyebabkan luka di area mulut dan rasa nyeri di lidah.\r\nSelain itu, kekurangan zat besi, asam folat, dan vitamin B12 juga dapat memicu timbulnya radang lidah. Hal ini umumnya dialami oleh penderita anemia. Faktor lain yang dapat menyebabkan glossitis adalah trauma pada mulut, sehingga memengaruhi kondisi lidah. Misalnya pada pemasangan kawat gigi, bisa terjadi gesekan yang kemudian menimbulkan luka.'),
(8, 'Trench Mouth', 'Trench_Mouth.jpg', '1. Bau mulut.<br>\r\n2. Demam.<br>\r\n3. Pembengkakan kelenjar getah bening.<br>\r\n4. Sakit pada saat mengunyah.<br>\r\n5. Ujung-ujung gusi yang terletak diantara dua gigi mengalami pengikisan.', 'Trench mouth adalah jenis dari gingivitis parah yang menyebabkan rasa sakit, infeksi, dan perdarahan pada gusi. Trench mouth umum terjadi di negara-negara berkembang yang memiliki gizi serta kondisi hidup yang buruk. Kondisi yang juga dikenal juga sebagai necrotizing ulcerative gingivitis (NUG), memiliki nama sebutan â€œtrench mouthâ€ karena kondisi ini banyak terjadi pada tentara yang terjebak di parit selama Perang Dunia I tanpa merawat gigi dengan benar.'),
(9, 'Herpes Zoster', 'Herpes_Zoster.jpg', '1. Kehilangan selera makan.<br>\r\n2. Demam.<br>\r\n3. Sakit dan bercak gatal di kulit trigeminal, vesikel unilateral, dan ulser mulut.', 'Herpes zoster atau cacar ular (cacar api) adalah penyakit yang ditandai dengan timbulnya bintil kulit berisi air pada salah satu sisi tubuh dan terasa nyeri. Penyakit ini disebabkan oleh infeksi virus Varicella Zoster, yang juga menjadi penyebab cacar air.'),
(10, 'Stomatis Angularis', 'stomatitis.jpg', '1. Bibir terasa kering.<br>\r\n2. Perih di sekitar luka.<br>\r\n3. Terasa gatal dan kesemutan pada area yang terinfeksi.', 'Stomatitis adalah peradangan berupa bengkak atau kemerahan yang umumnya dapat ditemukan pada bagian mulut. Peradangan dapat muncul di pipi, gusi, bagian dalam bibir, atau lidah. Penyakit ini biasanya memengaruhi selaput halus yang melapisi mulut dan memproduksi lendir (mukosa). Lendir ini berguna untuk melindungi sistem pencernaan tubuh, mulai dari mulut hingga anus. Stomatitis adalah salah satu jenis mukositis, suatu kondisi di mana peradangan terjadi pada selaput mukosa. Mukositis umumnya merupakan efek samping dari kemoterapi atau radioterapi.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `umur` varchar(5) NOT NULL,
  `tahun_lahir` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `nama_lengkap`, `jenis_kelamin`, `no_telp`, `umur`, `tahun_lahir`) VALUES
(1, 'ghezak', 'ghezak', 'Muhammad Ghezak', 'Laki - Laki', '081775224045', '20', '1998'),
(2, 'rina', 'rina', 'Rina Agustina', 'Wanita', '081761525221', '20', '1999'),
(3, 'nova', 'nova', 'Nova ardiansyah', 'Laki - Laki', '081775224045', '20', '1998');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tbl_gejala`
--
ALTER TABLE `tbl_gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `tbl_hasil`
--
ALTER TABLE `tbl_hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `tbl_pengetahuan`
--
ALTER TABLE `tbl_pengetahuan`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_penyakit`
--
ALTER TABLE `tbl_penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_gejala`
--
ALTER TABLE `tbl_gejala`
  MODIFY `id_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_hasil`
--
ALTER TABLE `tbl_hasil`
  MODIFY `id_hasil` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_pengetahuan`
--
ALTER TABLE `tbl_pengetahuan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tbl_penyakit`
--
ALTER TABLE `tbl_penyakit`
  MODIFY `id_penyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
