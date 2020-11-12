-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Nov 2020 pada 04.45
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_counseling`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_article`
--

CREATE TABLE `ms_article` (
  `id` int(15) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL,
  `author` varchar(40) NOT NULL,
  `thumbs` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ms_article`
--

INSERT INTO `ms_article` (`id`, `title`, `content`, `date`, `author`, `thumbs`, `status`) VALUES
(43, 'RANCANG BANGUN DAN PEMANFAATAN TURBIN AIR KAKI ANGSA UNTUK DESA SUMBERDEM', '<p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(82, 82, 82); font-family: Merriweather, serif; font-size: 16px;\">Ketersediaan energi listrik sudah merupakan keharusan bagi keberlanjutan pembangunan setiap negara. Energi listrik merupakan kebutuhan primer dan telah hampir menyamai tingkat kebutuhan terhadap sandang, pangan dan papan. Karenanya setiap negara berlomba untuk membangun pembangkit tenaga listrik yang bersesuaian dengan kondisi geografis dan sumber daya alam yang tersedia.</p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(82, 82, 82); font-family: Merriweather, serif; font-size: 16px;\">Indonesia sebagai negara yang berada pada garis khatulistiwa yang beriklim tropis memiliki cadangan hutan yang berlimpah yang menyediakan mata air/sumber air yang membentuk danau, dan sungai yang mengalirkan air sepanjang tahun. Air yang mengalir tersebut merupakan sumber energi yang salah satu manfaatnya untuk memutar&nbsp;<a href=\"https://www.kompasiana.com/tag/turbin-air\" style=\"color: rgb(51, 122, 183); transition: all 0.2s ease-out 0s;\">turbin air</a>&nbsp;untuk menghasilkan tenaga listrik.</p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(82, 82, 82); font-family: Merriweather, serif; font-size: 16px;\">Beberapa keunggulan pembangkit listrik tenaga air (PLTA) adalah terjaminnya ketersediaan listrik tanpa batasan waktu selama intensitas aliran air dapat dipertahankan sesuai kebutuhan turbin/pembangkit, tidak menimbulkan polusi sehingga aman bagi&nbsp;<a href=\"https://www.kompasiana.com/tag/lingkungan\" style=\"color: rgb(51, 122, 183); transition: all 0.2s ease-out 0s;\">lingkungan</a>&nbsp;dan juga pengaturan air dari fasilitas pembangkit dapat digunakan sebagai sumber pengairan bagi lahan pertanian.</p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(82, 82, 82); font-family: Merriweather, serif; font-size: 16px;\"></p><div id=\"teads_outstream\" style=\"color: rgb(82, 82, 82); font-family: Merriweather, serif; font-size: 16px;\"></div><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(82, 82, 82); font-family: Merriweather, serif; font-size: 16px;\"></p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(82, 82, 82); font-family: Merriweather, serif; font-size: 16px;\">Energi listrik adalah kebutuhan pokok yang harus dipenuhi karna tanpa ada nya energi listrik setiap aktivitas manusia akan sulit untuk dikerjakan, karna semua aktivitas rata-rata memakai energi listrik. Kekurangan sumber listrik mengakibatkan terhambatnya aktivitas yang menggunakan tenaga listrik.</p>', '2020-11-11 09:00:57', '1234', '460f56051ce66f036e93d6a4d30b9149.jpg', '1'),
(44, 'Mengenal Apa Itu Chassis Dynamometer', '<p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(82, 82, 82); font-family: Merriweather, serif; font-size: 16px;\">Untuk mengetahui daya dan torsi maksimal yang dihasilkan oleh kendaraan maka digunakanlah dynamometer. Selain mengetahui daya dan torsi, emisi gas buang serta perbandingan bahan bakar dan udara dari kendaraan juga dapat diketahui. Berdasarkan cara kerjanya, dynamometer terbagi atas beberapa jenis, diantaranya;</p><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px 30px; color: rgb(82, 82, 82); font-family: Merriweather, serif; font-size: 16px;\"><li>Engine dynamometer, cara pengujiannya dilakukan dengan menghubungkan alat uji dengan flywheel dynamometer (hanya untuk engine saja/ engine stand). Jadi informasi output yang ditampilkan merupakan hasil aktual dari mesin tanpa beban.</li><li>Transmisi dynamometer, pengujiannya dilakukan dengan menghubungkan alat uji dengan transmisi guna mengetahui torsi yang mempunyai kaitan dengan putaran lentur poros atau torque khusus.</li><li><a href=\"https://www.kompasiana.com/tag/chassis-dynamometer\" style=\"color: rgb(51, 122, 183); transition: all 0.2s ease-out 0s;\">Chassis dynamometer</a>, pengujian yang dilakukan untuk melakukan pengukuran kecepatan konstan , beban jalan, dan kekuatan dari sebuah kendaraan. Dalam artian chassis dynamometer dilakukan dengan seluruh komponen mobil terpasang utuh semuanya.</li></ul><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(82, 82, 82); font-family: Merriweather, serif; font-size: 16px;\"></p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(82, 82, 82); font-family: Merriweather, serif; font-size: 16px;\">Chassis dynamometer sering digunakan untuk pengujian kendaraan baik kendaraan dengan spesifikasi standar maupun modifikasi. Chassis dynamometer terdiri atas dua yaitu axle dynamometer dan on wheel dynamometer. Penggunaannya tergantung kebutuhan yang diperlukan. Namun kebanyakan orang sering menggunakan tipe on wheel dynamometer.</p><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px 30px; color: rgb(82, 82, 82); font-family: Merriweather, serif; font-size: 16px;\"><li>Chassis dynamometer terdiri atas 2 macam ;</li><li>Axle Dynamometer, merupakan pengujian chassis dynamometer dengan cara menghubungkan alat uji ke masing-masing as roda kendaraan.</li><li>On Wheel Dynamometer, pengujian chassis dynamometer yang dilakukan dengan cara meletakkan ban kendaraan diatas roller dynamometer atau ban bertumpu pada roller dynamometer tersebut.</li></ul><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(82, 82, 82); font-family: Merriweather, serif; font-size: 16px;\"></p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(82, 82, 82); font-family: Merriweather, serif; font-size: 16px;\"></p><div id=\"teads_outstream\" style=\"color: rgb(82, 82, 82); font-family: Merriweather, serif; font-size: 16px;\"></div><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(82, 82, 82); font-family: Merriweather, serif; font-size: 16px;\"></p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(82, 82, 82); font-family: Merriweather, serif; font-size: 16px;\">Prinsip kerja chassis dynamometer untuk on wheel dynamometer yaitu saat ban kendaraan bertumpu pada roller dynamometer, kemudian kendaraan dijalankan, maka putaran dari ban kendaraan yang bergesekan pada roller akan menampilkan hasil output putaran pada display monitor beserta informasi lainnya seperti daya, torsi, emisi gas buang, serta AFR Ratio dari kendaraan tersebut.</p>', '2020-11-11 09:44:38', '1234', '6182bc11d12568f316db16e1fe0a81da.jpg', '1'),
(45, 'Kendaraan Listrik menjadi Alternatif Pengganti BBM', '<p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(82, 82, 82); font-family: Merriweather, serif; font-size: 16px;\">&nbsp;Kendaraan bahan bakar alternatif adalah kendaraan yang dapat beroperasi menggunakan bahan bakar selain bahan bakar minyak. dan juga merujuk untuk segala macam&nbsp;<a href=\"https://www.kompasiana.com/tag/teknologi\" style=\"color: rgb(51, 122, 183); transition: all 0.2s ease-out 0s;\">teknologi</a>&nbsp;mesin kendaraan yang tidak beroperasi dengan bensin, contohnya mobil elektrik, kendaraan elektrik hibrida atau kendaraan energi surya. Karena kombinasi beberapa faktor, misalnya kepedulian lingkungan, tingginya harga minyak, adapnya pengembangan bahan bakar alternatif yang lebih ramah lingkungan, maka pengembangan kendaraan bahan bakar alternatif telah menjadi prioritas utama bagi pemerintah dan produsen otomotif di banyak negara di dunia.</p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(82, 82, 82); font-family: Merriweather, serif; font-size: 16px;\">&nbsp; &nbsp; Kenapa harus berganti ke listrik? Karena Bahan bakar fosil seperti minyak bumi, batu bara dan lain sebagainya semakin hari semakin berkurang dan perlahan-lahan akan habis.&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(82, 82, 82); font-family: Merriweather, serif; font-size: 16px;\">Kendaraan listrik dipercaya mempunyai berbagai kelebihan dibandingkan mobil pada umumnya yang berbahan bakar fosil. Apa saja kelebihannya?&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(82, 82, 82); font-family: Merriweather, serif; font-size: 16px;\">Hadirnya kendaraan listrik tentunya akan dapat membantu menurunkan emisi gas rumah kaca yang sudah membludak di bumi ini. Seperti yang telah disinggung sebelumnya,kendaraan listrik tidak berknalpot ini dipercaya lebih \'bersih\' dibandingkan kendaraan berbahan bakar minyak.&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(82, 82, 82); font-family: Merriweather, serif; font-size: 16px;\"><span style=\"font-weight: 700; line-height: 30px;\">kepentingan energi</span></p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(82, 82, 82); font-family: Merriweather, serif; font-size: 16px;\">Dengan adanya kendaraan listrik itu artinya impor bahan bakar minyak bisa ditekan.</p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(82, 82, 82); font-family: Merriweather, serif; font-size: 16px;\"><span style=\"font-weight: 700; line-height: 30px;\">Harga operasional lebih murah&nbsp;</span></p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(82, 82, 82); font-family: Merriweather, serif; font-size: 16px;\">Seperti yang kita ketahui harga BBM tidaklah murah. Dan juga BBM terlalu banyak digunakan mungkin dimasa depan harga BBM akan sangat mahal karen bahan bakar fosil akan semakin habis.</p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(82, 82, 82); font-family: Merriweather, serif; font-size: 16px;\">Jadi listrik merupakan salah satu energi alternatif yang akan di gunakan untuk masa depan karena lebih ramah lingkungan .</p>', '2020-11-11 09:46:26', '1234', '882ed6a46eb19750a9dd8f881aec3d6a.jpg', '1'),
(46, 'Emisi Karbon dan Lockdown Covid-19', '<p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(82, 82, 82); font-family: Merriweather, serif; font-size: 16px;\">Udara yang bersih merupakan kebutuhan maupun faktor penting bagi setiap makhluk hidup yang ada di muka bumi ini. ketika&nbsp;<a href=\"https://www.kompasiana.com/tag/udara-bersih\" style=\"color: rgb(51, 122, 183); transition: all 0.2s ease-out 0s;\">udara bersih</a>&nbsp;yang kita terima dan dapatkan adalah sumber kesehatan bagi tubuh manusia maupun hewan dan tumbuhan.&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(82, 82, 82); font-family: Merriweather, serif; font-size: 16px;\">Saat ini di Indonesia cukup kesulitan mendapatkan udara bersih tanpa polusi, dari tahun-ketahun indonesia membutuhkan energi gas maupun fosil untuk memenuhi kebutuhan industri dan transportasi darat maupun udara dan laut.&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(82, 82, 82); font-family: Merriweather, serif; font-size: 16px;\">Polusi dan limbah yang disebabkan dari energi transportasi memberikan dampak yang buruk terhadap udara di negara Indonesia, bukan hanya satu daerah maupun provinsi saja yang tercemar polusi udara melainkan semua daerah yang di negara indonesia.</p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(82, 82, 82); font-family: Merriweather, serif; font-size: 16px;\"></p><div id=\"teads_outstream\" style=\"color: rgb(82, 82, 82); font-family: Merriweather, serif; font-size: 16px;\"></div><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(82, 82, 82); font-family: Merriweather, serif; font-size: 16px;\"></p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(82, 82, 82); font-family: Merriweather, serif; font-size: 16px;\">Perubahan udara yang semakin tidak sehat bagi makhluk hidup, serta perubahan salah satu komposisi dari udara dari keadaan normal menjadi tidak normal, yang berdampak pada masuknya zat pencemar dalam bentuk gas-gas yang sulit dihilangkan dalam jangka waktu yang lama. Ketika gas-gas atau partikel ini&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(82, 82, 82); font-family: Merriweather, serif; font-size: 16px;\">Jumlah penduduk yang semakin meningkat juga memiliki peran dalam peningkatan kebutuhan energi gas ataupun fosil. Banyak masyarakat di Indonesia memiliki aktivitas yang berbeda-beda dari individu dengan individu lainnya sehingga banyak jumlah energi untuk transportasi dan industri yang digunakan, tipe transportasi yang digunakan terdiri dari kendaraan sepeda motor, mobil, kereta Api, bus, dan alat transportasi untuk industri seperti truk dan lainnya.</p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(82, 82, 82); font-family: Merriweather, serif; font-size: 16px;\">Gas yang dikeluarkan dari sisa proses bahan bakar dalam mesin kendaraan yang menghasilkan asap yang sering kita lihat gas-gas yang dikeluarkan berwarna hitam ialah polusi dari kendaraan transportasi yang digunakan terus menerus. Hal itulah yang menyebabkan terjadi pencemaran udara di lingkungan, biasanya pencemaran udara paling banyak pada kota-kota besar yang memiliki jumlah penduduk yang sangat banyak dari perdesaan.</p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(82, 82, 82); font-family: Merriweather, serif; font-size: 16px;\">Menurut data terakhir dari Korps lalu Lintas kepolisian RI ( Korlantas Polri), bahwa jumlah kendaraan yang beroperasi di seluruh negara Indonesia pada rentang tahun 2013 mencapai 104,211 juta unit, kemudian meningkat menjadi 12 % dari tahun 2012 sebanyak 94,299 juta unit, dari hasil peningkatkan jumlah tersebut maka populasi terbanyak didapatkan dari kendaraan sepeda motor dengan rata-rata sebanyak 73 %. Dari data peningkatan transportasi menggunakan kendaraan sepeda motor di Indonesia, berakibat pada pertumbuhan terjadinya peningkatan polusi.</p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(82, 82, 82); font-family: Merriweather, serif; font-size: 16px;\">Emisi Karbon Dan Gas Rumah Kaca</p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(82, 82, 82); font-family: Merriweather, serif; font-size: 16px;\">Pada setiap tahunnya peningkatan emisi di Indonesia semakin meningkat terus-menerus dari data yang ada di (Fakta Nasional 2018), mengemukakan bahwa dari tahun 2017 sehingga tahun yang akan datang 2030 akan menjadi peningkatan yang sangat besar terhadap emisi karbon di negara Indonesia. Peningkatan tersebut merupakan faktor yang harus kita hentikan, karena berdampak terhadap keberlangsungan kehidupan makhluk hidup dibumi.</p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(82, 82, 82); font-family: Merriweather, serif; font-size: 16px;\">Saat ini pemerintah maupun pengusaha generasi muda di Indonesia sedang berusaha untuk menurunkan jumlah emisi karbon maupun gas rumah kaca untuk tahun-tahun kedepan, ini merupakan salah satu usaha atau solusi untuk tidak terjadinya peningkatan pada tahun 2030 yang telah di sampai oleh (jurnal fakta nasional 2018) tersebut.</p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(82, 82, 82); font-family: Merriweather, serif; font-size: 16px;\">Sebagai generasi muda, peran dalam mengambil serta untuk ikut terlibat adalah salah satu upaya yang harus dilakukan. Mengapa generasi muda harus ikut mengambil bagian untuk menurunkan jumlah emisi karbon yang berdampak buruk bagi kesehatan makhluk hidup dan menurunkan negara Indonesia bukan urutan 4 dunia dalam menghasilkan emisi karbon dan gas rumah kaca tertinggi.&nbsp;</p>', '2020-11-11 09:50:54', '1234', '22c5df5b64b5f02af8f66ace66c6cf8a.jpg', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_auth`
--

CREATE TABLE `ms_auth` (
  `id` int(15) NOT NULL,
  `no_unique` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ms_auth`
--

INSERT INTO `ms_auth` (`id`, `no_unique`, `username`, `password`, `role`) VALUES
(102, '1234', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'ADM'),
(111, '1', '1', '356a192b7913b04c54574d18c28d46e6395428ab', 'KTA'),
(112, '2', '2', 'da4b9237bacccdf19c0760cab7aec4a8359010b0', 'DSN'),
(113, '3', '3', '77de68daecd823babbb58edb1c8e14d7106e83bb', 'DSN'),
(114, '4', '4', '1b6453892473a467d07372d45eb05abc2031647a', 'DSN'),
(115, '5', '5', 'ac3478d69a3c81fa62e60f5c3696165a4e5e6ac4', 'DSN'),
(116, '6', '6', 'c1dfd96eea8cc2b62785275bca38ac261256e278', 'DSN'),
(117, '7', '7', '902ba3cda1883801594b6e1b452790cc53948fda', 'DSN'),
(118, '8', '8', 'fe5dbbcea5ce7e2988b8c69bcfdfde8904aabc1f', 'DSN'),
(119, '9', '9', '0ade7c2cf97f75d009975f4d720d1fa6c19f4897', 'DSN'),
(120, '10', '10', 'b1d5781111d84f7b3fe45a0852e59758cd7a87e5', 'DSN'),
(121, '11', '11', '17ba0791499db908433b80f37c5fbc89b870084b', 'DSN'),
(122, '12', '12', '7b52009b64fd0a2a49e6d8a939753077792b0554', 'DSN'),
(123, '13', '13', 'bd307a3ec329e10a2cff8fb87480823da114f8f4', 'BKU'),
(124, '14', '14', 'fa35e192121eabf3dabf9f5ea6abdbcbc107ac3b', 'BKU'),
(4911, '1216001', '1216001', '4483cf4e32e3fd3554ff6f286c448a4c3f9dbc3c', 'MHS'),
(4912, '1216002', '1216002', 'e099050a99313af36543c1626ce37ac53a8542db', 'MHS'),
(4913, '1216003', '1216003', 'ada9dcba5d4e8fe731442611749622a8fd8e4092', 'MHS'),
(4914, '1216004', '1216004', '6ea49789f8f1d9a8a5f6bb9df0f783e134edc93e', 'MHS'),
(4915, '1216005', '1216005', '7d1a72b742a8a5dbe0e3932424ab231fe2a2925c', 'MHS'),
(4916, '1216006', '1216006', 'e9732affb1d1519419c12c2a93a8c18dd72608e2', 'MHS'),
(4917, '1216007', '1216007', '07c411c6d7925298f5b877ca5e58bc8eef4dcff5', 'MHS'),
(4918, '1216008', '1216008', 'b0999ce39fbf3b965eec9dbfeabb139e7325e9d5', 'MHS'),
(4919, '1216009', '1216009', 'df4aa6996a7ffd30309c1f9e20a98000fc208712', 'MHS'),
(4920, '1216010', '1216010', '3f02cd25a4f5c3843bf28bc54b4fecd7b9496b93', 'MHS'),
(4921, '1216011', '1216011', '1fb9edeedd2edefc866994404ec8ba59657d45a3', 'MHS'),
(4922, '1216012', '1216012', '7379959f472ebbf088f71b55b411c4d4dd454450', 'MHS'),
(4923, '1216013', '1216013', '313e4588bb8752495e02d27477e46a845c795fa1', 'MHS'),
(4924, '1216014', '1216014', '6c9dda01ee9d0b885d20d126bd4a1701df7b49bb', 'MHS'),
(4925, '1216015', '1216015', '7f1a744b6b2d8b521e9e99b9e9b84d9142f30ebf', 'MHS'),
(4926, '1216016', '1216016', '8075e4756e26956095cae01aa92cf8a90ed5bc2f', 'MHS'),
(4927, '1216017', '1216017', 'ae76401fa8f9f5d686a5335d77e89b885771b8fc', 'MHS'),
(4928, '1216018', '1216018', '580df6439529a0f96871e4e287ed5d82e66317e2', 'MHS'),
(4929, '1216019', '1216019', '9da4d0e20414024b13ebd20ca0786bfae53ad374', 'MHS'),
(4930, '1216020', '1216020', '7eea6ba762bca0ec90129926e4cb2832da0c7aa7', 'MHS'),
(4931, '1216023', '1216023', '7cc9ab290db05975dbd48bd48cbef88458ad8569', 'MHS'),
(4932, '1216024', '1216024', '2d33b0a19e34bf40c2cf769e4314629fbd121d1c', 'MHS'),
(4933, '1216027', '1216027', 'f9b50e943ee10929615c632298c8e3ed5e0a102c', 'MHS'),
(4934, '1216031', '1216031', 'aa1d50ee97cca44ebb53f82510da2ef042ec8a3d', 'MHS'),
(4935, '1216036', '1216036', 'c5af9774aa836bb6b13e4679890d465bf20565ce', 'MHS'),
(4936, '1216039', '1216039', 'bcc4f9be69743b859fde6936a811e780df40e2d9', 'MHS'),
(4937, '1216042', '1216042', 'f4eb5f73101bffb7b0f628ac4cd3c869283c2cf9', 'MHS'),
(4938, '1216045', '1216045', '43e5cb2a69954fd68d468471e70c01f5e10328e1', 'MHS'),
(4939, '1216050', '1216050', 'c4eee68fff24fe83826fb12fd973cfae61296ab3', 'MHS'),
(4940, '1216054', '1216054', '75a93c2ca4d8f740340c171878a6c52bd863adf2', 'MHS'),
(4941, '1216058', '1216058', 'e8c55c36172d3efa9eb9a5d5f63f16eb2de1970f', 'MHS'),
(4942, '1216061', '1216061', 'c5e96049c14cf3575ac65c7e05deedc9e9d4a592', 'MHS'),
(4943, '1216065', '1216065', '62e6ce87218cbcbc014927c20d79794377106dc5', 'MHS'),
(4944, '1216069', '1216069', '3fea962878b03bc33e7cf39a78442925e45a7a1e', 'MHS'),
(4945, '1216073', '1216073', '485c37182882bfd2c4f69ab363f3fa8dcd8d22d3', 'MHS'),
(4946, '1216601', '1216601', 'f43b8907e974bc18e991144cd46c32c51b85767c', 'MHS'),
(4947, '1216602', '1216602', 'ad58ec4091180d9cf7aa72c6e4f2520d1feefbde', 'MHS'),
(4948, '1216603', '1216603', 'ce03a9b2648795144aeaa05641732dae12951bcf', 'MHS'),
(4949, '1216604', '1216604', '13683cc74a429b658d1446a8c16998c566103f5f', 'MHS'),
(4950, '3215057', '3215057', 'e0f8d164704b30468eca028df14c8fbf4cad9611', 'MHS'),
(4951, '3216001', '3216001', '2f8e20c4045c2aa76083c38c44bb1a914969f065', 'MHS'),
(4952, '3216002', '3216002', '5a6d4d73249b5b3d7d10c9cd9d600e762eca9894', 'MHS'),
(4953, '3216003', '3216003', 'abd23989e68958bb039bf05fd97a19b991e3f33f', 'MHS'),
(4954, '3216004', '3216004', 'cd0f61dfe9aa0698bfd081d320a7156b8abca774', 'MHS'),
(4955, '3216005', '3216005', '4944a06714b16c3bd82794bd3547c8659dfbf1b4', 'MHS'),
(4956, '3216006', '3216006', '0018dacca0928581c026f819e02552f2747e458f', 'MHS'),
(4957, '3216007', '3216007', 'e99081bab739a239c0c9901a5726faa573dddcea', 'MHS'),
(4958, '3216008', '3216008', 'e24c52ca022b351de6fd8fab11f63a3190511db9', 'MHS'),
(4959, '3216009', '3216009', 'bc6db829e8875236d0732d76bfe33f56a4e2b358', 'MHS'),
(4960, '3216010', '3216010', '0aaccf00280f41cd7ea65d452d85930eedc847b1', 'MHS'),
(4961, '3216011', '3216011', 'bc37e1a74a985c4ba9c2e8746959668fcf0d8ebe', 'MHS'),
(4962, '3216012', '3216012', '833db8ae5895e68d1f924ea670430866a81b5c66', 'MHS'),
(4963, '3216013', '3216013', 'a2f350e4e83228dd892eb6753c7a39124d115b23', 'MHS'),
(4964, '3216014', '3216014', '0c2abafa591280319a211a803be7dd48d5d161f3', 'MHS'),
(4965, '3216015', '3216015', 'ca79d5e53f561cbadca62514b57f70ccedf07447', 'MHS'),
(4966, '3216016', '3216016', '882ef3a40a5a083f192d95bba81cd92eaae9ccd1', 'MHS'),
(4967, '3216017', '3216017', 'af932d777c2e527f2d145d68a2c4ef6c714d25a0', 'MHS'),
(4968, '3216018', '3216018', '5a2cd36223f6beec2fbe21568dbe81d26754fae5', 'MHS'),
(4969, '3216019', '3216019', '0cfae2b5c15b26e9c53102c26785d623a130e36e', 'MHS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_consult`
--

CREATE TABLE `ms_consult` (
  `id` int(15) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nidn` varchar(20) NOT NULL,
  `kode_selection` varchar(25) NOT NULL,
  `title` text NOT NULL,
  `date` datetime NOT NULL,
  `id_consult_status` int(15) NOT NULL,
  `catatan` text NOT NULL,
  `readed` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ms_consult`
--

INSERT INTO `ms_consult` (`id`, `nim`, `nidn`, `kode_selection`, `title`, `date`, `id_consult_status`, `catatan`, `readed`) VALUES
(275, '1216017', '3', 'SL001', 'aaa', '2020-11-11 05:20:39', 5, '', 0),
(276, '1216017', '9', 'SL002', 'aaa', '2020-11-11 05:20:46', 5, '', 0),
(277, '1216017', '9', 'SL003', 'dawda', '2020-11-11 05:20:54', 5, '', 0),
(278, '1216017', '14', 'SL008', 'dawda', '2020-11-11 05:21:01', 5, '', 0),
(279, '1216017', '10', 'SL001', 'dawda', '2020-11-11 05:21:10', 5, '', 0),
(280, '1216017', '7', 'SL005', 'dawda', '2020-11-11 05:21:19', 5, '', 0),
(281, '1216017', '9', 'SL007', 'dawda', '2020-11-11 05:21:30', 5, '', 0),
(282, '1216017', '11', 'SL002', 'dawdwa', '2020-11-11 05:21:39', 5, '', 0),
(283, '1216017', '10', 'SL001', 'dawdwad', '2020-11-11 05:21:50', 5, '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_consult_chat`
--

CREATE TABLE `ms_consult_chat` (
  `id` int(15) NOT NULL,
  `id_consult` int(15) NOT NULL,
  `id_user` varchar(40) NOT NULL,
  `message` text NOT NULL,
  `datesend` datetime NOT NULL,
  `readed` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_consult_file`
--

CREATE TABLE `ms_consult_file` (
  `id` int(15) NOT NULL,
  `id_consult` int(15) NOT NULL,
  `id_user` varchar(40) NOT NULL,
  `file` text NOT NULL,
  `datesend` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ms_consult_file`
--

INSERT INTO `ms_consult_file` (`id`, `id_consult`, `id_user`, `file`, `datesend`) VALUES
(26, 270, '1212', 'Xtreme_admin_Template_-_The_Ultimate_Multipurpose_admin_template_(1).pdf', '2020-11-02 16:13:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_consult_selection`
--

CREATE TABLE `ms_consult_selection` (
  `id` int(15) NOT NULL,
  `kode_selection` varchar(15) NOT NULL,
  `selection` varchar(40) NOT NULL,
  `kode_role` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ms_consult_selection`
--

INSERT INTO `ms_consult_selection` (`id`, `kode_selection`, `selection`, `kode_role`) VALUES
(1, 'SL001', 'Perkuliahan', 'DSN'),
(2, 'SL002', 'Kartu Rencana Studi (KRS)', 'DSN'),
(3, 'SL003', 'Pra-rencana Studi (PRS)', 'DSN'),
(4, 'SL004', 'Permasalahan Nilai', 'DSN'),
(5, 'SL005', 'SKRIPSI', 'DSN'),
(6, 'SL006', 'Kerja Praktek (KP)', 'DSN'),
(7, 'SL007', 'Permasalahan Personal', 'DSN'),
(8, 'SL008', 'Keuangan', 'BKU'),
(9, 'SL009', 'Lainnya', 'DSN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_consult_status`
--

CREATE TABLE `ms_consult_status` (
  `id` int(15) NOT NULL,
  `status_consult` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ms_consult_status`
--

INSERT INTO `ms_consult_status` (`id`, `status_consult`) VALUES
(1, 'Diterima'),
(2, 'Sedang Berjalan'),
(3, 'Selesai'),
(4, 'Ditolak'),
(5, 'Pending');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_consult_type`
--

CREATE TABLE `ms_consult_type` (
  `id` int(15) NOT NULL,
  `type_consult` varchar(50) NOT NULL,
  `desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_prodi`
--

CREATE TABLE `ms_prodi` (
  `id` int(15) NOT NULL,
  `prodi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ms_prodi`
--

INSERT INTO `ms_prodi` (`id`, `prodi`) VALUES
(12, 'Teknik Informatika'),
(32, 'Sistem Informasi'),
(99, 'Non Prodi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_role`
--

CREATE TABLE `ms_role` (
  `id` varchar(15) NOT NULL,
  `kode_role` varchar(15) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ms_role`
--

INSERT INTO `ms_role` (`id`, `kode_role`, `role`) VALUES
('1', 'ADM', 'ADMIN'),
('2', 'KTA', 'KETUA'),
('4', 'DSN', 'DOSEN WALI'),
('5', 'BKU', 'BAGIAN KEUANGAN'),
('6', 'MHS', 'MAHASISWA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_users_college`
--

CREATE TABLE `ms_users_college` (
  `id` int(15) NOT NULL,
  `nim` varchar(25) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `kode_role` varchar(15) NOT NULL,
  `id_prodi` varchar(15) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `generation` varchar(15) NOT NULL,
  `id_users_status` varchar(15) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `id_wali` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ms_users_college`
--

INSERT INTO `ms_users_college` (`id`, `nim`, `name`, `email`, `kode_role`, `id_prodi`, `no_telp`, `gender`, `generation`, `id_users_status`, `photo`, `id_wali`) VALUES
(4849, '1216001', 'DINAR AZIZ GINANJAR', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '6'),
(4850, '1216002', 'ELVAN RIZKY MAULANA', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '10'),
(4851, '1216003', 'RIZKY IRMAWAN RAHAYU', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '11'),
(4852, '1216004', 'ILHAM BAGJA PRATAMA', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '11'),
(4853, '1216005', 'YOHANES A. DEO PANGUL', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '10'),
(4854, '1216006', 'YOSUA OKTOVIAN', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '10'),
(4855, '1216007', 'AGUNG NAZARIO', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '6'),
(4856, '1216008', 'ANDESSYA JULIAN PRADINDA', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '6'),
(4857, '1216009', 'RIZKY SAPARULY', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '5'),
(4858, '1216010', 'ILHAM DONI WALUYA', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '5'),
(4859, '1216011', 'SINTA BELLA MAISARI', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '4'),
(4860, '1216012', 'JOSE CARLOS DOUTEL XIMENES', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '4'),
(4861, '1216013', 'NALDYN FAUZAN ACHMAD', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '4'),
(4862, '1216014', 'IRFAN FAISAL', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '10'),
(4863, '1216015', 'FIRMAN HERLIANSYAH', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '11'),
(4864, '1216016', 'RANDO AGUSTIAN', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '11'),
(4865, '1216017', 'MUHAMAD LUTHFIRRAHMAN', 'luthfirrahman696@gmail.com', 'MHS', '12', '08131256611', 'Laki-Laki', '2016', '1', 'assets/user_profile/ed23abd1bfbd242d2eb1aa25b0617829.jpg', '11'),
(4866, '1216018', 'ANJAR AHMAD NURJAMAN', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '10'),
(4867, '1216019', 'DESTYANI ADELLA FIRDAYANTI', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '10'),
(4868, '1216020', 'FAHMI MIFTAH FARID', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '6'),
(4869, '1216023', 'ADI KURNIAWAN', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '6'),
(4870, '1216024', 'RYAN ILHAM CAHYADI', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '6'),
(4871, '1216027', 'AEF SAEPULLAH', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '5'),
(4872, '1216031', 'AHMAD ROZI', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '5'),
(4873, '1216036', 'AYU LESTARI', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '5'),
(4874, '1216039', 'CECEP RIDWAN', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '4'),
(4875, '1216042', 'EKO BUDI PRAYOGO', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '4'),
(4876, '1216045', 'MARWIYAH', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '10'),
(4877, '1216050', 'OKVIANA PRATIWI', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '10'),
(4878, '1216054', 'SAEPUDIN', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '11'),
(4879, '1216058', 'FIKRI AGUNG BUDI HARTONO', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '6'),
(4880, '1216061', 'SITI IDA FARIDAH', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '5'),
(4881, '1216065', 'SITI MASPUPAH', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '5'),
(4882, '1216069', 'SUHADI', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '11'),
(4883, '1216073', 'UJANG RIFA\'I', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '11'),
(4884, '1216601', 'FAJAR NOVIYANA', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '6'),
(4885, '1216602', 'MUHAMAD RIFKY RAMADAN', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '6'),
(4886, '1216603', 'MUHAMMAD SALMAN AL-FARISI', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '11'),
(4887, '1216604', 'SITI ADAWIAH', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '5'),
(4888, '3215057', 'DARHUDIN', '', 'MHS', '32', '', '', '2015', '1', 'assets/assets/images/logo/d1.jpg', '12'),
(4889, '3216001', 'JOSAFAT SITEPU', '', 'MHS', '32', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '12'),
(4890, '3216002', 'IDHAR REFIN GUSTININGTIYAS', '', 'MHS', '32', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '9'),
(4891, '3216003', 'FIKRI HUSNI MUBAROQ', '', 'MHS', '32', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '9'),
(4892, '3216004', 'FAJAR MUHARAM HIDAYATUL MUTAQIEN', '', 'MHS', '32', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '8'),
(4893, '3216005', 'RIZKY', '', 'MHS', '32', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '8'),
(4894, '3216006', 'TIA PURNAMASITA', '', 'MHS', '32', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '7'),
(4895, '3216007', 'YANYAN APRIYANA', '', 'MHS', '32', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '7'),
(4896, '3216008', 'MIA NURHALIMAH', '', 'MHS', '32', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '3'),
(4897, '3216009', 'KEUIS RABIATUL ADAWIAH', '', 'MHS', '32', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '3'),
(4898, '3216010', 'NASYARUDIN ALFAJRI', '', 'MHS', '32', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '3'),
(4899, '3216011', 'DONALD MARBUN', '', 'MHS', '32', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '12'),
(4900, '3216012', 'WARIS NUGRAHA', '', 'MHS', '32', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '12'),
(4901, '3216013', 'ASEP HADROMI', '', 'MHS', '32', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '9'),
(4902, '3216014', 'MOCHAMAD KHAERUL ANWAR', '', 'MHS', '32', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '9'),
(4903, '3216015', 'PUADAH', '', 'MHS', '32', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '8'),
(4904, '3216016', 'DEVIN KHOLIQ CAHYA DININGRAT', '', 'MHS', '32', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '8'),
(4905, '3216017', 'GOVINDA AKHMAD NUGRAHA', '', 'MHS', '32', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '7'),
(4906, '3216018', 'YAYAT SUPRIATNA', '', 'MHS', '32', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '3'),
(4907, '3216019', 'AI FITRI NURHASANAH', '', 'MHS', '32', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_users_staff`
--

CREATE TABLE `ms_users_staff` (
  `id` int(15) NOT NULL,
  `nidn` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `id_prodi` varchar(40) NOT NULL,
  `no_telp` varchar(18) NOT NULL,
  `gender` varchar(16) NOT NULL,
  `id_users_status` varchar(15) NOT NULL,
  `kode_role` varchar(20) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ms_users_staff`
--

INSERT INTO `ms_users_staff` (`id`, `nidn`, `name`, `email`, `id_prodi`, `no_telp`, `gender`, `id_users_status`, `kode_role`, `photo`) VALUES
(55, '1234', 'Admin', 'admin@admin.com', '99', '0813124455', 'Laki-Laki', '1', 'ADM', 'assets/user_profile/3e6e2e8e3eed2a184b25e16e5c72aa1f.jpg'),
(60, '1', 'Dr. Abdurrahman', '', '99', '', 'Laki-Laki', '1', 'KTA', 'assets/assets/images/logo/d2.jpg'),
(61, '2', 'Yus Jayusman, MT', '', '99', '', 'Laki-Laki', '1', 'DSN', 'assets/assets/images/logo/d2.jpg'),
(62, '3', 'Rini Nuraini S, MT', '', '32', '', 'Perempuan', '1', 'DSN', 'assets/assets/images/logo/d2.jpg'),
(63, '4', 'Mina Ismu Rahayu, MT', '', '12', '', 'Perempuan', '1', 'DSN', 'assets/assets/images/logo/d2.jpg'),
(64, '5', 'Indra Maulana YK, M.Kom', '', '12', '', 'Laki-Laki', '1', 'DSN', 'assets/assets/images/logo/d2.jpg'),
(65, '6', 'Linda Apriyanti, MT', '', '12', '', 'Perempuan', '1', 'DSN', 'assets/assets/images/logo/d2.jpg'),
(66, '7', 'Siti Yuliyanti, M.Kom', '', '32', '', 'Perempuan', '1', 'DSN', 'assets/assets/images/logo/d2.jpg'),
(67, '8', 'Uro Abdulrohim, MT', '', '32', '', 'Laki-Laki', '1', 'DSN', 'assets/assets/images/logo/d2.jpg'),
(68, '9', 'Dedy Apriadi, M.Si', '', '32', '', 'Laki-Laki', '1', 'DSN', 'assets/assets/images/logo/d2.jpg'),
(69, '10', 'Dani Pradana, MT', '', '12', '', 'Laki-Laki', '1', 'DSN', 'assets/assets/images/logo/d2.jpg'),
(70, '11', 'Herna Gunawan,ST., MM', '', '12', '', 'Laki-Laki', '1', 'DSN', 'assets/assets/images/logo/d2.jpg'),
(71, '12', 'Haris Irnawan, ST., MM', '', '32', '', 'Laki-Laki', '1', 'DSN', 'assets/assets/images/logo/d2.jpg'),
(72, '13', 'Linda Apriyantio, S.Kom., MT', '', '99', '', 'Perempuan', '1', 'BKU', 'assets/assets/images/logo/d2.jpg'),
(73, '14', 'Siti Fatimah, Amd., S.Kom', '', '99', '', 'Perempuan', '1', 'BKU', 'assets/assets/images/logo/d2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_users_status`
--

CREATE TABLE `ms_users_status` (
  `id` int(15) NOT NULL,
  `status_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ms_users_status`
--

INSERT INTO `ms_users_status` (`id`, `status_user`) VALUES
(1, 'Aktif'),
(3, 'Di Blokir');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ms_article`
--
ALTER TABLE `ms_article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`author`);

--
-- Indeks untuk tabel `ms_auth`
--
ALTER TABLE `ms_auth`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_unique` (`no_unique`);

--
-- Indeks untuk tabel `ms_consult`
--
ALTER TABLE `ms_consult`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no_user_consult` (`nim`),
  ADD KEY `no_user_moderator` (`nidn`),
  ADD KEY `id_status` (`id_consult_status`),
  ADD KEY `id_consult_status` (`id_consult_status`),
  ADD KEY `id_consult_selection` (`kode_selection`),
  ADD KEY `id_consult_selection_2` (`kode_selection`);

--
-- Indeks untuk tabel `ms_consult_chat`
--
ALTER TABLE `ms_consult_chat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_consult` (`id_consult`);

--
-- Indeks untuk tabel `ms_consult_file`
--
ALTER TABLE `ms_consult_file`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_consult` (`id_consult`);

--
-- Indeks untuk tabel `ms_consult_selection`
--
ALTER TABLE `ms_consult_selection`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ms_consult_status`
--
ALTER TABLE `ms_consult_status`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ms_consult_type`
--
ALTER TABLE `ms_consult_type`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ms_prodi`
--
ALTER TABLE `ms_prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ms_role`
--
ALTER TABLE `ms_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ms_users_college`
--
ALTER TABLE `ms_users_college`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim` (`nim`),
  ADD KEY `id_role` (`kode_role`),
  ADD KEY `id_identity` (`id_prodi`),
  ADD KEY `id_users_status` (`id_users_status`);

--
-- Indeks untuk tabel `ms_users_staff`
--
ALTER TABLE `ms_users_staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nidn` (`nidn`);

--
-- Indeks untuk tabel `ms_users_status`
--
ALTER TABLE `ms_users_status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ms_article`
--
ALTER TABLE `ms_article`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `ms_auth`
--
ALTER TABLE `ms_auth`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5089;

--
-- AUTO_INCREMENT untuk tabel `ms_consult`
--
ALTER TABLE `ms_consult`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=284;

--
-- AUTO_INCREMENT untuk tabel `ms_consult_chat`
--
ALTER TABLE `ms_consult_chat`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=207;

--
-- AUTO_INCREMENT untuk tabel `ms_consult_file`
--
ALTER TABLE `ms_consult_file`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `ms_consult_selection`
--
ALTER TABLE `ms_consult_selection`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `ms_consult_status`
--
ALTER TABLE `ms_consult_status`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `ms_consult_type`
--
ALTER TABLE `ms_consult_type`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ms_users_college`
--
ALTER TABLE `ms_users_college`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5026;

--
-- AUTO_INCREMENT untuk tabel `ms_users_staff`
--
ALTER TABLE `ms_users_staff`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT untuk tabel `ms_users_status`
--
ALTER TABLE `ms_users_status`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
