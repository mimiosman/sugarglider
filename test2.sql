-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.17 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5278
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for test2
CREATE DATABASE IF NOT EXISTS `test2` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `test2`;

-- Dumping structure for table test2.diagnosis
CREATE TABLE IF NOT EXISTS `diagnosis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) DEFAULT NULL,
  `simptomid` int(11) DEFAULT NULL,
  `answer` tinyint(1) DEFAULT NULL,
  `counts` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

-- Dumping data for table test2.diagnosis: 60 rows
/*!40000 ALTER TABLE `diagnosis` DISABLE KEYS */;
INSERT INTO `diagnosis` (`id`, `userid`, `simptomid`, `answer`, `counts`) VALUES
	(1, 9, 2, 1, 1),
	(2, 9, 3, 0, 1),
	(3, 9, 4, 1, 1),
	(4, 9, 5, 1, 1),
	(5, 9, 6, 0, 1),
	(6, 9, 15, 1, 1),
	(7, 9, 8, 0, 1),
	(8, 9, 18, 1, 1),
	(9, 9, 14, 0, 1),
	(10, 9, 16, 1, 1),
	(11, 9, 17, 0, 1),
	(12, 9, 20, 1, 1),
	(13, 9, 21, 0, 1),
	(14, 9, 22, 1, 1),
	(15, 9, 23, 0, 1),
	(16, 9, 24, 0, 1),
	(17, 9, 25, 1, 1),
	(18, 9, 26, 0, 1),
	(19, 9, 27, 1, 1),
	(20, 9, 28, 0, 1),
	(21, 12, 2, 1, 1),
	(22, 12, 3, 0, 1),
	(23, 12, 4, 1, 1),
	(24, 12, 5, 0, 1),
	(25, 12, 6, 1, 1),
	(26, 12, 15, 1, 1),
	(27, 12, 8, 0, 1),
	(28, 12, 18, 1, 1),
	(29, 12, 14, 0, 1),
	(30, 12, 16, 1, 1),
	(31, 12, 17, 0, 1),
	(32, 12, 20, 1, 1),
	(33, 12, 21, 0, 1),
	(34, 12, 22, 1, 1),
	(35, 12, 23, 0, 1),
	(36, 12, 24, 0, 1),
	(37, 12, 25, 1, 1),
	(38, 12, 26, 0, 1),
	(39, 12, 27, 1, 1),
	(40, 12, 28, 0, 1),
	(41, 9, 2, 1, 2),
	(42, 9, 3, 0, 2),
	(43, 9, 4, 1, 2),
	(44, 9, 5, 0, 2),
	(45, 9, 6, 1, 2),
	(46, 9, 15, 0, 2),
	(47, 9, 8, 1, 2),
	(48, 9, 18, 0, 2),
	(49, 9, 14, 1, 2),
	(50, 9, 16, 0, 2),
	(51, 9, 17, 1, 2),
	(52, 9, 20, 0, 2),
	(53, 9, 21, 1, 2),
	(54, 9, 22, 0, 2),
	(55, 9, 23, 1, 2),
	(56, 9, 24, 0, 2),
	(57, 9, 25, 1, 2),
	(58, 9, 26, 0, 2),
	(59, 9, 27, 1, 2),
	(60, 9, 28, 0, 2);
/*!40000 ALTER TABLE `diagnosis` ENABLE KEYS */;

-- Dumping structure for table test2.link
CREATE TABLE IF NOT EXISTS `link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_penyakit` int(11) NOT NULL,
  `id_simptom` int(11) DEFAULT NULL,
  `id_rawatan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=104 DEFAULT CHARSET=latin1;

-- Dumping data for table test2.link: 74 rows
/*!40000 ALTER TABLE `link` DISABLE KEYS */;
INSERT INTO `link` (`id`, `id_penyakit`, `id_simptom`, `id_rawatan`) VALUES
	(22, 4, NULL, 3),
	(44, 4, 14, NULL),
	(21, 4, NULL, 2),
	(23, 5, 9, NULL),
	(24, 5, 12, NULL),
	(25, 5, NULL, 3),
	(26, 5, NULL, 2),
	(27, 6, 2, NULL),
	(28, 6, 3, NULL),
	(29, 6, 5, NULL),
	(30, 6, 8, NULL),
	(31, 6, 16, NULL),
	(32, 6, NULL, 6),
	(33, 6, NULL, 14),
	(34, 6, NULL, 21),
	(35, 6, NULL, 18),
	(36, 4, NULL, 10),
	(37, 4, NULL, 12),
	(38, 4, NULL, 11),
	(39, 4, NULL, 13),
	(40, 4, 6, NULL),
	(41, 4, 4, NULL),
	(42, 4, 18, NULL),
	(43, 4, 8, NULL),
	(45, 8, 3, NULL),
	(46, 8, 2, NULL),
	(47, 8, 8, NULL),
	(48, 8, 5, NULL),
	(49, 8, NULL, 14),
	(50, 8, NULL, 22),
	(51, 8, NULL, 23),
	(52, 9, 2, NULL),
	(53, 9, 3, NULL),
	(54, 9, 8, NULL),
	(55, 9, 5, NULL),
	(56, 9, NULL, 14),
	(57, 9, NULL, 24),
	(58, 9, NULL, 25),
	(59, 9, NULL, 26),
	(60, 9, NULL, 27),
	(61, 9, NULL, 23),
	(62, 10, 3, NULL),
	(63, 10, 2, NULL),
	(64, 10, 8, NULL),
	(65, 10, 5, NULL),
	(66, 10, 16, NULL),
	(67, 10, 17, NULL),
	(68, 10, NULL, 17),
	(69, 10, NULL, 18),
	(70, 10, NULL, 19),
	(71, 10, NULL, 20),
	(72, 10, NULL, 14),
	(73, 11, NULL, 14),
	(75, 11, NULL, 15),
	(76, 11, NULL, 16),
	(77, 11, NULL, 10),
	(86, 11, 2, NULL),
	(79, 11, 3, NULL),
	(80, 11, 8, NULL),
	(81, 11, 18, NULL),
	(82, 11, 4, NULL),
	(83, 11, 6, NULL),
	(84, 11, 15, NULL),
	(85, 11, 14, NULL),
	(87, 10, 20, NULL),
	(88, 10, 21, NULL),
	(89, 10, 22, NULL),
	(90, 9, 23, NULL),
	(91, 9, 24, NULL),
	(92, 9, 25, NULL),
	(93, 8, 23, NULL),
	(94, 8, 26, NULL),
	(95, 8, 27, NULL),
	(96, 8, 28, NULL);
/*!40000 ALTER TABLE `link` ENABLE KEYS */;

-- Dumping structure for table test2.login
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Dumping data for table test2.login: ~6 rows (approximately)
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` (`id`, `name`, `email`, `username`, `password`) VALUES
	(7, 'Admin', 'admin@sugarglider.com', 'admin@sugarglider.com', '81dc9bdb52d04dc20036dbd8313ed055'),
	(8, 'Admin2', 'admin2@sugarglider.com', 'admin2@sugarglider.com', '81dc9bdb52d04dc20036dbd8313ed055'),
	(9, 'Mimi osman', 'mimiiosman93@gmail.com', 'mimiiosman93@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
	(10, 'Mira', 'mimiiosman1209@gmail.com', 'mimiiosman1209@gmail.com', '47c10887fa0f361324edc24d6cc399fb'),
	(11, 'Rumaizah', 'rumaizahmohamadkamal@gmail.com', 'rumaizahmohamadkamal@gmail.com', '128f129917a30607a957b46841402739'),
	(12, 'hafiz', 'hafiz@gmail.com', 'hafiz@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;

-- Dumping structure for table test2.pakar
CREATE TABLE IF NOT EXISTS `pakar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) NOT NULL,
  `Soalan` text NOT NULL,
  `Jawapan` text,
  `Status` tinyint(1) NOT NULL DEFAULT '0',
  `Asker` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- Dumping data for table test2.pakar: 13 rows
/*!40000 ALTER TABLE `pakar` DISABLE KEYS */;
INSERT INTO `pakar` (`id`, `Title`, `Soalan`, `Jawapan`, `Status`, `Asker`) VALUES
	(7, 'Muntah', 'Adakah kekerapan haiwan saya muntah adalah berapa tahap bahaya?', '', 0, 7),
	(8, 'cirit', 'Adakah kekerapan haiwan saya mengeluarkan najis itu adalah bahaya?', '', 0, 7),
	(10, 'Dehidrasi', 'Mengapakah haiwan saya selalu kelihatan lemah-lemah walaupun telah diberi makanan dan minuman yang secukupnya?', '', 0, 7),
	(14, 'Bulu Gugur', 'Kenapa haiwan saya bulu gugur di atas kepalanya?', '', 0, 1),
	(12, 'Kuku kotor', 'Adakah kuku haiwan saya kotor boleh menyebabkan haiwan saya akan jatuh sakit?', '', 0, 10),
	(13, 'Garang', 'Kenapa garang', 'kurang mendapat perhatian', 1, 11),
	(15, 'Bulu gugur', 'Kenapa haiwan saya bulu gugur di atas kepalanya?', NULL, 1, 9),
	(17, 'sosial', 'sugar glider x bertegur sapa', NULL, 1, 12),
	(18, 'test', 'test 1', NULL, 1, 9),
	(19, 'tets 1', 'kdjflkjshadf', NULL, 1, 9),
	(20, 'test 222', 'edfswqdef', NULL, 1, 9),
	(21, 'werwqer', 'qwerqwer', NULL, 1, 9),
	(22, 'ewrqwerqweeryrtuy', 'ytuityuiytui', NULL, 0, 9);
/*!40000 ALTER TABLE `pakar` ENABLE KEYS */;

-- Dumping structure for table test2.penjagaan
CREATE TABLE IF NOT EXISTS `penjagaan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `description` text,
  `Image` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

-- Dumping data for table test2.penjagaan: 2 rows
/*!40000 ALTER TABLE `penjagaan` DISABLE KEYS */;
INSERT INTO `penjagaan` (`id`, `title`, `description`, `Image`) VALUES
	(2, 'Sangkar', 'Sangkar sugar gliders adalah salah satu komponen penting dalam memastikan mereka dapat rasa selesa dalam persekitaran baru mereka.\r\n\r\nSugar gliders anda akan meluangkan majoriti masa mereka pada waktu malam di dalam sangkar mereka dan dengan memastikan bahawa sugars anda selesa, selamat dan bebas bersenam dengan sesuka hati mereka.', 'cagesugarglider.png'),
	(4, 'Makanan', 'Sugar glider boleh dihidangkan dengan makanan seperti buah-buahan yang berlainan khasiat buatnya.\r\n\r\nKeaktifan Sugar glider menyebabkan sugar glider sangat memerlukan protein dalam jumlah tinggi untuk memenuhi keperluan tenaga mereka. Protein dan kalsium sangat diperlukan untuk meningkatkan metabolisme seekor Sugar glider. Kekurangan protein dapat menyebabkan pertumbuhan Sugar Glider terbantut dan kelihat kurus, sementara kekurangan kalsium dapat menyebabkan masalah yang lebih serius seperti Hind Leg Paralysis (HLP).', 'sugar_glider3.png');
/*!40000 ALTER TABLE `penjagaan` ENABLE KEYS */;

-- Dumping structure for table test2.penyakit
CREATE TABLE IF NOT EXISTS `penyakit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Dumping data for table test2.penyakit: 6 rows
/*!40000 ALTER TABLE `penyakit` DISABLE KEYS */;
INSERT INTO `penyakit` (`id`, `name`, `detail`) VALUES
	(10, 'Dental Disorder', 'laaaaa'),
	(6, 'Bacterial Disease', 'Disebabkan oleh:\r\n1. Dehidrasi\r\n2. Cirit-Birit\r\n3. Kurang berat badan\r\n4. Kurang selera makan\r\n5. Lemah'),
	(8, 'Stress-related disorders', 'laaaaaaa'),
	(9, 'Gastrointestinal disorder', 'laaaaa'),
	(4, 'Nutriotional Osteodystrophy', 'Haiwan Sugar Glider dikekalkan pada diet buah terutama dengan beberapa serangga yang dimakan usus atau sumber protein lain yang sangat terdedah kepada osteodystrophy pemakanan (hyperparathyroidism sekunder nutrisi).'),
	(11, 'Malnutrition (Calcium deficiency)', 'laaaaa');
/*!40000 ALTER TABLE `penyakit` ENABLE KEYS */;

-- Dumping structure for table test2.rawatan
CREATE TABLE IF NOT EXISTS `rawatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

-- Dumping data for table test2.rawatan: 18 rows
/*!40000 ALTER TABLE `rawatan` DISABLE KEYS */;
INSERT INTO `rawatan` (`id`, `name`, `detail`) VALUES
	(12, 'Transferring the animal to the proper diet', 'Transferring the animal to the proper diet'),
	(13, 'Anticonvulsion medication for seizures', 'Anticonvulsion medication for seizures'),
	(14, 'Fluid therapy for dehydration', 'Fluid therapy for dehydration'),
	(15, 'UV light / sunbath for calcium metabolism', 'UV light / sunbath for calcium metabolism'),
	(16, 'Antacid for diarrhea', 'Antacid for diarrhea'),
	(17, 'Pain relief (analgesic)', 'Pain relief (analgesic)'),
	(18, 'Antibiotic for bacterial infection', 'Antibiotic for bacterial infection'),
	(19, 'Tooth scaling under anaesthesia', 'Tooth scaling under anaesthesia'),
	(20, 'Tooth (incisor) removal under anaesthesia', 'Tooth (incisor) removal under anaesthesia'),
	(21, 'Force feeding', 'Force feeding'),
	(22, 'Optimizing diet and husbandry practices', 'Optimizing diet and husbandry practices'),
	(10, 'Memberikan makanan tambahan kalsium', 'Memberikan makanan tambahan kalsium'),
	(11, 'Menambahbaik keadaan sangkar', 'Menambahbaik keadaan sangkar'),
	(23, 'Antacid medication for diarrhea', 'Antacid medication for diarrhea'),
	(24, 'Stool softeners and enema for constipation', 'Stool softeners and enema for constipation'),
	(25, 'Antibiotic and/or anthelminthic / antiprotozoal', 'Antibiotic and/or anthelminthic / antiprotozoal'),
	(26, 'Non-surgical or surgical reduction of rectal prolapse', 'Non-surgical or surgical reduction of rectal prolapse'),
	(27, 'Antiinflammatory medication for tissue inflammation ', 'Antiinflammatory medication for tissue inflammation ');
/*!40000 ALTER TABLE `rawatan` ENABLE KEYS */;

-- Dumping structure for table test2.result
CREATE TABLE IF NOT EXISTS `result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sickness` int(11) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `diagnoseCount` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table test2.result: 3 rows
/*!40000 ALTER TABLE `result` DISABLE KEYS */;
INSERT INTO `result` (`id`, `sickness`, `user`, `diagnoseCount`) VALUES
	(1, 10, 9, 1),
	(2, 11, 12, 1),
	(3, 11, 9, 2);
/*!40000 ALTER TABLE `result` ENABLE KEYS */;

-- Dumping structure for table test2.simptom
CREATE TABLE IF NOT EXISTS `simptom` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

-- Dumping data for table test2.simptom: 20 rows
/*!40000 ALTER TABLE `simptom` DISABLE KEYS */;
INSERT INTO `simptom` (`id`, `name`, `detail`) VALUES
	(2, 'Cirit birit', 'Adakah haiwan tersebut mengalami berak yang jenis berair?'),
	(3, 'Dehidrasi', 'Adakah haiwan tersebut dibahagian muka kelihatan nampak pucat?'),
	(4, 'Lumpuh ', 'Adakah haiwan anda kelihatan kelemahan pada kaki bahagian belakang?'),
	(5, 'Kurang nafsu makan', 'Adakah haiwan anda kelihatan seperti tidak mahu makan makanan yang anda beri?'),
	(6, 'Sawan', 'Adakah haiwan anda mengalami gigil yang berpanjangan?'),
	(15, 'Pengsan', 'Adakah haiwan anda kelihatan tidak sedarkan diri?'),
	(8, 'Kurang berat badan', 'Adakah haiwan anda kelihatan kurang mengambil makanan yang anda berikan?'),
	(18, 'Muscle Wasting', 'Adakah haiwan anda seperti "muscle wasting"?'),
	(14, 'Keletihan', 'Adakah haiwan anda kelihatan seperti tidak aktif seperti biasa?'),
	(16, 'Lemah', 'Adakah haiwan anda kelihatan kurang bermaya seperti hari sebelumnya?'),
	(17, 'Air Liur', 'Adakah haiwan anda mengeluarkan air liur yang banyak secara tiba-tiba?'),
	(20, 'Gusi Bengkak', 'Adakah gusi haiwan anda kelihatan bengkak?'),
	(21, 'Tartar', 'Adakah haiwan anda mengalami "tartar"?'),
	(22, 'Gigi Patah', 'Adakah gigi haiwan anda hilang ataupun goyang?'),
	(23, 'Tenesmus', 'Adakah haiwan anda mengalami "tenesmus"?'),
	(24, 'Rectal Prolapse', 'Adakah haiwan anda kelihatan "rectal prolapse"?'),
	(25, 'Sembelit', 'Adakah haiwan anda kelihatan seperti sukar untuk berak?'),
	(26, 'Gangguan Makanan', 'Adakah haiwan anda mengalami gangguan makanan seperti....?'),
	(27, 'Tingkahlaku yang agresif', 'Adakah haiwan anda kelihatan sangat aktif ketika bermain? '),
	(28, 'Pacing', 'Adakah haiwan anda kelihatan "pacing"?');
/*!40000 ALTER TABLE `simptom` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
