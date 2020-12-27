-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Des 2020 pada 13.07
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
(47, 'Perubahan Psikologis Mahasiswa Baru Ketika Pandemi dan Apa yang Sebaiknya Dilakukan Kampus', '<p style=\"margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline;\"><b style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bold; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">SERPONG, ULTIMAGZ.com –&nbsp;</b><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Tidak sulit memperkirakan masa transisi siswa menjadi mahasiswa baru pada tahun ajaran ini akan menjadi lebih menantang secara psikologis. Hal ini dikarenakan tanpa situasi pandemi COVID-19 pun, mahasiswa baru sebenarnya perlu waktu untuk beradaptasi dengan proses pendidikan kuliah yang berbeda dari SMA.</span></p><p style=\"margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Dengan situasi pandemi yang baru dan asing, mahasiswa baru menjadi lebih terbebani secara psikologis. Tak hanya itu, para mahasiswa baru ini diperkirakan mengalami kesulitan berlebih dalam beradaptasi karena mereka adalah generasi pertama yang mengalami awal masa perkuliahan secara d</span><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">aring ketika pandemi masih berlangsung.</span></p><p style=\"margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Oleh karena itu, sesungguhnya mahasiswa baru membutuhkan perhatian lebih secara psikologis. Pasalnya, mahasiswa senior saja mengalami gangguan psikologis akibat pandemi COVID-19. Misalnya,&nbsp;<a href=\"https://europepmc.org/article/med/32229390\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 600; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: rgb(230, 73, 70);\">penelitian dari&nbsp;</a></span><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Cina</span><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">&nbsp;menunjukkan dari 7.143 mahasiswa responden, hampir seperempatnya (24,9%) mengalami&nbsp;</span><i style=\"margin: 0px; padding: 0px; border: 0px; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">anxiety</i><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">&nbsp;atau kecemasan, yaitu 0,9% mengalami kecemasan berat, 2,7% mengalami kecemasan moderat, dan 21,3% mengalami kecemasan ringan.&nbsp;</span></p><p style=\"margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Hasil penelitian tersebut menemukan beberapa faktor yang memengaruhi kecemasan mahasiswa. Faktor yang menambah kecemasan adalah tekanan ekonomi, dampak pada kehidupan sehari-hari, dan pendidikan yang tertunda. Selain itu, jarak yang jauh dalam jangka panjang di antara tiap-tiap orang juga diketahui menyebabkan kecemasan karena kurangnya hubungan interpersonal. Sebaliknya, faktor yang mengurangi kecemasan adalah&nbsp;</span><i style=\"margin: 0px; padding: 0px; border: 0px; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">social support</i><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">&nbsp;atau dukungan sosial. Maka dari itu, penelitian ini menyarankan bahwa sebaiknya ada perhatian khusus terhadap kesehatan mental para mahasiswa selama COVID-19 masih menyebar.</span></p><p style=\"margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline;\"><b style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bold; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Tekanan Masa Adaptasi dan Pandemi</b></p><p style=\"margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Psikolog sekaligus dosen dari Universitas Atmajaya Jakarta, Weny Savitry, menerangkan bahwa masa transisi dari siswa menjadi mahasiswa baru itu saja memerlukan waktu adaptasi yang tidak singkat.</span></p><p style=\"margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\"></span></p><p style=\"margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">“Bahkan mahasiswa itu dalam situasi normal saja, bukan pandemi, adaptasinya itu bisa satu tahun pertama, bahkan ada yang lebih lama lagi, yaitu dua tahun,” kata Weny melalui wawancara lewat Zoom (12/08/2020).&nbsp;</span></p><p style=\"margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Menurut psikolog pendidikan tersebut, terdapat beberapa faktor yang memengaruhi masa transisi siswa menjadi mahasiswa baru secara psikologis. Faktor pertama adalah jenjang perpindahan pendidikan dari SMA ke kuliah. Secara umum, tidak sedikit siswa yang kurang mempersiapkan diri sebelum masa transisi menjadi mahasiswa baru. Hal ini mengakibatkan mahasiswa bisa lalai dalam berkuliah, seperti gagal memahami istilah-istilah perkuliahan (contoh: SKS), mengatur waktu dengan baik karena mengira jadwal perkuliahan jauh lebih santai, tidak tahu bahwa dosen lebih sering membiarkan mahasiswa mandiri dan tidak mengejar-ngejar mahasiswa untuk mengerjakan tugas, dan lain-lain. Belum lagi, masalah sosial. Di SMA para siswa awalnya hanya menemui siswa lain dengan latar belakang yang sama, tapi mahasiswa baru akan menemui mahasiswa lain yang berasal dari agama, etnis, dan suku yang berbeda.</span></p><p style=\"margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Weny menekankan bahwa tahun ini masalah jenjang perpindahan pendidikan dari SMA ke kuliah akan menjadi semakin berat karena waktu awal mulanya perhatian pada COVID-19 cenderung bersamaan dengan waktu siswa kelas 12 sudah lulus atau hanya perlu melakukan ujian. Ia mengatakan tidak sebaiknya berekspektasi mahasiswa baru akan sudah terbiasa dengan sistem belajar jarak jauh. Ekspektasi tersebut sebaiknya diletakkan pada siswa kelas 10 dan kelas 11 yang akan lebih terbiasa dengan sistem belajar jarak jauh pada saat mereka kuliah jika pandemi masih berlangsung.</span></p><p style=\"margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Faktor kedua adalah situasi pandemi yang ujung kelangsungannya tidak pasti. Situasi yang tidak pasti membuat mahasiswa baru bertanya-tanya apakah mereka akan selamat atau tidak selama pandemi. Faktor ketiga adalah masalah psikososial, seperti calon mahasiswa baru yang mengalami masalah finansial karena orangtuanya kesulitan mencari penghasilan selama pandemi.</span></p><p style=\"margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">“Mungkin dari kampus memang perlu mengupayakan sekali agar mahasiswa yang kuliah itu bisa melalui fase penyesuaian dengan baik dan akhirnya mereka bisa kuliah dengan nyaman dan akhirnya mencapai prestasi yang baik,” tutur Weny.</span></p><p style=\"margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Meskipun dalam masa pandemi, Weny menjelaskan bahwa sesungguhnya kampus bisa membantu fase penyesuaian mahasiswa walaupun perkuliahan akan dilakukan secara daring. Hal ini penting karena dapat&nbsp; mengurangi kecemasan mahasiswa dan memberikan kesan bahwa perkuliahan bisa dilakukan secara maksimal walaupun dilakukan dengan keterbatasan.</span></p><p style=\"margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline;\"><b style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bold; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Upaya yang Bisa Dilakukan Kampus</b></p><p style=\"margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Kampus harus siap menghadapi perubahan psikologis mahasiswa baru. Dalam hal ini, kampus bisa memakai hasil psikotes mahasiswa baru dan sejak awal memperhatikan mereka yang berpotensi rentan berdasarkan hasil tes tersebut. Kemudian, kampus bisa menetapkan kebijakan yang merawat hubungan interpersonal mahasiswa. Hal ini penting karena fokus remaja adalah membentuk pertemanan, sesuatu yang interpersonal.</span></p><p style=\"margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Kebijakan&nbsp;merawat hubungan interpersonal mahasiswa ini pun bervariasi. Misalnya, kampus bisa menetapkan program mentoring yaitu program agar kakak kelas mendampingi mahasiswa baru terkait kehidupan di kampus pada masa awal perkuliahan. Dengan ini, kakak kelas bisa membantu kampus dalam membantu fase penyesuaian diri para mahasiswa baru dan efektif dalam jangka waktu beberapa bulan.&nbsp;</span></p><p style=\"margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Alternatif lain adalah dosen diimbau untuk memberikan tugas yang memungkinkan mahasiswa baru bisa saling berinteraksi dan tidak individualis. Cara ini selain menambahkan hubungan interpersonal, juga memecahkan salah satu masalah ketika siswa bertransisi menjadi mahasiswa baru, yaitu kurangnya interaksi dengan mereka yang memiliki latar belakang yang berbeda, seperti etnis, agama, dan suku.&nbsp;</span></p><p style=\"margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Selanjutnya, aktivitas Unit Kegiatan Mahasiswa (UKM) bisa dimulai lagi secara daring. UKM bisa membicarakan mengenai kegiatan perkumpulan mereka kepada para mahasiswa baru.</span></p><p style=\"margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">“Secara maksimal, mereka tetap bisa berinteraksi dan pertemuan itu sendiri sebenarnya masih bisa dilakukan secara&nbsp;<em style=\"margin: 0px; padding: 0px; border: 0px; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">online</em>,” kata Weny. “Walaupun tidak sempurna menyelesaikan masalah, tapi paling tidak memberikan hubungan interpersonal.”</span></p><p style=\"margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Di pihak lain, Psikolog Student Support Universitas Multimedia Nusantara (UMN), Hadyan Dhiozandi juga menyatakan bahwa masalah para mahasiswa baru adalah fase penyesuaian. Masalah ini semakin besar dengan ketidaksiapan belajar melalui daring yang menyebabkan penurunan motivasi belajar mahasiswa. Maka dari itu, pihak Student Support akan melakukan berbagai upaya untuk membantu mahasiswa menjaga kesehatan mental.&nbsp;</span></p><p style=\"margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">“Selama masa pandemi, Student Support tetap aktif menyediakan layanan konseling mahasiswa. Mahasiswa dapat secara terbuka bercerita kendala-kendala yang mereka alami,” tanggap Dhiozandi melalui surat elektronik (10/08/2020). Dikatakan olehnya bahwa mahasiswa dapat menceritakan kendala mereka kepada psikolog student support melalui bentuk penyelesaian yang paling sesuai.</span></p><p style=\"margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">“Konseling dapat berlangsung lewat media apa pun,” terusnya.</span></p><p style=\"margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Tak hanya itu, Dhiozandi menekankan bahwa nantinya akan ada beberapa seminar daring terkait kesehatan mental dalam perkuliahan yang dapat diakses para mahasiswa. Seminar ini akan berbentuk webinar atau melalui siaran langsung Instagram.</span></p><p style=\"margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\"></span></p><p style=\"margin-right: 0px; margin-bottom: 1.25rem; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">“Hal ini akan sangat membantu mahasiswa untuk berlatih dan menjalin komunikasi tentang topik yang diminati, sehingga secara tidak langsung menambah koneksi dalam hubungan interpersonal.”</span></p>', '2020-11-28 23:46:43', '1234', '268023f6c7b274cd28d47ce6c3a8040e.jpg', '1'),
(48, 'Unesa Beri Konseling Psikologi ke Mahasiswa Terlibat Ospek', '<p><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma;\">Jakarta, CNN Indonesia --&nbsp;</span></p><p style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; margin-bottom: 20px; display: inline; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma;\">Universitas Negeri Surabaya (<span style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(255, 0, 0);\"><span style=\"font-family: CNNSansW04-Medium; -webkit-font-smoothing: antialiased; backface-visibility: hidden;\"><a href=\"https://www.cnnindonesia.com/tag/unesa\" target=\"_blank\" style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; transition: all 200ms linear 0s; -webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(68, 68, 68);\">Unesa</a></span></span>) bakal memberikan layanan konseling psikologi bagi mahasiswa yang terlibat kegiatan ospek yang belakangan viral di media sosial. Ospek&nbsp;di&nbsp;Unisa diduga mengandung kekerasan verbal dan&nbsp;<em style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden;\"><span style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(255, 0, 0);\"><span style=\"font-family: CNNSansW04-Medium; -webkit-font-smoothing: antialiased; backface-visibility: hidden;\"><a href=\"https://www.cnnindonesia.com/tag/bullying\" target=\"_blank\" style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; transition: all 200ms linear 0s; -webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(68, 68, 68);\"><span style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(255, 0, 0);\">bullying</span></a></span></span></em>&nbsp;atau perundungan.</p><p style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; margin-top: 16px; margin-bottom: 20px; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma;\">Layanan konseling diberikan untuk mahasiswa baru dan mahasiswa yang menjadi panitia ospek. Kepala Humas Unesa Vinda Maya Setyaningrum mengatakan panitia ospek banyak mendapat tekanan dari publik.</p><p style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; margin-top: 16px; margin-bottom: 20px; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma;\">\"Mereka mengalami tekanan yang luar biasa hebat di media sosial maupun langsung di nomor pribadi, sehingga kami ambil langkah cepat untuk memberikan layanan terapi kognitif yang biasa diberikan untuk penderita tekanan mental,\" katanya melalui keterangan pers yang diterima&nbsp;<em style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden;\">CNNIndonesia.com</em>, Selasa (15/9).</p><p style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; margin-bottom: 20px; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma;\">Ia menjelaskan, layanan konseling diberikan oleh tim crisis center dari program studi psikologi Unesa. Pihaknya bakal memulai konseling hari ini dengan mahasiswa secara daring dan tatap muka.</p><p style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; margin-bottom: 20px; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma;\">Lebih lanjut, Vinda mengatakan pihak dari Fakultas Ilmu Pendidikan Desa dan panitia Perkenalan Kehidupan Kampus untuk Mahasiswa Baru (PKKMB) akan berkunjung ke rumah mahasiswa baru yang menjadi korban kekerasan verbal pada kegiatan ospek tersebut.</p><p style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; margin-bottom: 20px; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma;\">\"Hasil rapat siang ini, kami berkomitmen menyelesaikan masalah ini secara kekeluargaan dan memberikan konseling langsung pada malam hari ini. Kami juga akan melakukan silaturahmi kepada keluarga mahasiswa baru,\" tambahnya.</p><p style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; margin-bottom: 20px; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma;\">Kegiatan ospek Unesa ramai diperbincangkan di jejaring sosial. Dalam&nbsp;unggahan video kegiatan itu,&nbsp;terekam mahasiswa baru dimarah-marahi seniornya.</p><p style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; margin-bottom: 20px; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma;\">Ia menjelaskan, layanan konseling diberikan oleh tim crisis center dari program studi psikologi Unesa. Pihaknya bakal memulai konseling hari ini dengan mahasiswa secara daring dan tatap muka.</p><p style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; margin-bottom: 20px; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma;\">Lebih lanjut, Vinda mengatakan pihak dari Fakultas Ilmu Pendidikan Desa dan panitia Perkenalan Kehidupan Kampus untuk Mahasiswa Baru (PKKMB) akan berkunjung ke rumah mahasiswa baru yang menjadi korban kekerasan verbal pada kegiatan ospek tersebut.</p><p style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; margin-bottom: 20px; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma;\">\"Hasil rapat siang ini, kami berkomitmen menyelesaikan masalah ini secara kekeluargaan dan memberikan konseling langsung pada malam hari ini. Kami juga akan melakukan silaturahmi kepada keluarga mahasiswa baru,\" tambahnya.</p><p style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; margin-bottom: 20px; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma;\">Kegiatan ospek Unesa ramai diperbincangkan di jejaring sosial. Dalam&nbsp;unggahan video kegiatan itu,&nbsp;terekam mahasiswa baru dimarah-marahi seniornya.</p><p style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; margin-bottom: 20px; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma;\">Rektor Unesa Nurhasan&nbsp; pun mengakui ada kesalahan yang dilakukan pihaknya dalam koordinasi pelaksanaan PKKMB di kampusnya. Ia menyayangkan kejadian di masa orientasi mahasiswa baru tahun ini.</p><p style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; margin-bottom: 20px; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma;\">\"Saat ini kami bersama pimpinan kemahasiswaan dari Fakultas terkait telah memberikan evaluasi sekaligus bimbingan kepada mahasiswa yang bersangkutan dan seluruh masalah yang ada akan diselesaikan dengan cara kekeluargaan,\" ungkap Rektor Unesa Nurhasan melalui pernyataan tertulis yang diterima&nbsp;<em style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden;\">CNNIndonesia.com</em>.</p>', '2020-11-28 23:48:53', '1234', '062795241b131d80efaae4902bd15479.jpeg', '1'),
(49, 'Psychological Stigma', '<p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; border: 0px; font-family: &quot;Open Sans&quot;, sans-serif; padding: 0px; vertical-align: baseline; color: rgb(73, 73, 73); letter-spacing: 0.25px;\">Tulisan ini akan menjelaskan mengenai stigma orang-orang terhadap psikologi. Sebelum menjelaskan fenomena yang terjadi, tulisan ini akan menjelaskan mengenai apa itu psikologi secara umum dan menurut pandangan salah satu tokoh psikologi. Psikologi secara umum merupakan suatu disiplin ilmu yang berfokus kepada tingkah laku, proses mental dan berbagai masalah kejiwaan manusia yang dikaji secara luas dan mendalam. Sedangkan psikologi menurut Geoge A. Miller (1974:4) adalah ilmu yang mencoba menjelaskan, memprediksi, dan mengontrol mental dan tingkah laku. Terkait dengan pengertian diatas, terdapat beberapa fenomena yang akan kita bahas di artikel ini.</p><p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; border: 0px; font-family: &quot;Open Sans&quot;, sans-serif; padding: 0px; vertical-align: baseline; color: rgb(73, 73, 73); letter-spacing: 0.25px;\">Fenomena pertama yaitu stigma masyarakat terhadap psikologi. Bahwa mahasiswa psikologi dan psikolog dianggap memiliki kemampuan untuk meramal dan membaca pikiran orang lain. Hal ini dapat terlihat dari sikap masyarakat awam yang sering kali melontarkan kalimat “Kamu bisa meramal dan membaca pikiranku ya?” “ Coba lihat aku orangnya kaya gimana?”. Kalimat tersebut merupakan salah satu contoh dari stigma psikologi. Menurut pandangan kami sebagai mahasiswa psikologi hal itu tidak sesuai dengan apa yang kami pelajari karena hal tersebut tidak semudah yang mereka pikirkan. Sebelum mendiagnosa, kami harus mengetahui faktor &nbsp;penyebab dari perilaku yang melekat pada diri seseorang tersebut.</p><p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; border: 0px; font-family: &quot;Open Sans&quot;, sans-serif; padding: 0px; vertical-align: baseline; color: rgb(73, 73, 73); letter-spacing: 0.25px;\">Fenomena kedua yaitu masyarakat memiliki pemahaman yang salah terhadap psikologi. Salah satu contohnya adalah pemahaman keliru masyarakat terhadap ekstrovert dan introvert. Masyarakat menganggap bahwa seorang introvert adalah orang yang sulit diajak kerja sama, tidak bisa diandalkan, tidak pandai&nbsp;<em style=\"border: 0px; font-family: inherit; font-weight: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">public speaking</em>&nbsp;dan pribadi yang membosankan. Sedangkan seorang ekstrovert dianggap masyarakat sebagai orang yang &nbsp;hebat karena dapat bersosialisasi dengan baik. Selain itu, masyarakat memandang bahwa introvert dan ekstrovert merupakan gangguan yang dapat timbul secara tiba-tiba.</p><p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; border: 0px; font-family: &quot;Open Sans&quot;, sans-serif; padding: 0px; vertical-align: baseline; color: rgb(73, 73, 73); letter-spacing: 0.25px;\">Pada kenyataannya, menurut teori psikologi hal tersebut tidak tepat. Teori tersebut dikemukakan oleh Carl Gustav Jung. Carl Gustav Jung (Alwisol, 2009) menyatakan bahwa sikap introvert mengarahkan pribadi ke pengalaman&nbsp;<em style=\"border: 0px; font-family: inherit; font-weight: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">subjektif</em>, memusatkan diri pada dunia dalam dan privat di mana realita hadir dalam bentuk hasil amatan, cenderung menyendiri, pendiam/tidak ramah, bahkan antisosial pada taraf yang ekstrim. Umumnya, orang introvertif itu senang introspektif dan sibuk dengan kehidupan internal mereka sendiri. Tentu saja mereka mengamati dunia luar, tetapi mereka melakukannya secara selektif dan memakai pandangan subjektif mereka sendiri. Sedangkan sikap ekstrovert mengarahkan pribadi ke pengalaman&nbsp;<em style=\"border: 0px; font-family: inherit; font-weight: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">obyektif</em>, memusatkan perhatiannya ke dunia luar alih-alih berfikir mengenai persepsinya, cenderung berinteraksi dengan orang disekitarnya, aktif dan ramah.</p><p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; border: 0px; font-family: &quot;Open Sans&quot;, sans-serif; padding: 0px; vertical-align: baseline; color: rgb(73, 73, 73); letter-spacing: 0.25px;\">Dari pernyataan diatas, dapat disimpulkan bahwa tidak semua orang introvert merupakan orang yang sulit diajak kerja sama, tidak bisa diandalkan, tidak pandai public speaking dan orang yang membosankan. Setiap individu yang memiliki sikap introvert memiliki pandangan yang berbeda-beda sesuai dengan pandangan subjektif mereka sendiri. Sedangkan tidak semua orang yang memiliki sikap ekstrovert merupakan orang yang hebat karena mereka sama seperti seseorang introvert yaitu memiliki pandangan sendiri. Perbedaannya seorang ekstrovert memiliki pandangan yang objektif. Sehingga setiap individu yang memiliki sikap introvert maupun ekstrovert memiliki cara pandang mereka sendiri. Maka dari itu, pandangan masyarakat salah karena hal tersebut tidak benar. Sikap &nbsp;individu introvert maupun ekstrovert berbeda-beda sesuai dengan cara pandang dan karakterisik mereka.</p><p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; border: 0px; font-family: &quot;Open Sans&quot;, sans-serif; padding: 0px; vertical-align: baseline; color: rgb(73, 73, 73); letter-spacing: 0.25px;\">Fenomena ketiga adalah orang yang memiliki gangguan mental masih takut dan ragu untuk datang menemui psikolog, karena umumnya masyarakat menganggap bahwa seseorang yang menemui psikolog adalah orang dengan gangguan jiwa. Padahal sebaiknya seseorang yang merasa memiliki kecenderungan mental tidak perlu ragu dan malu untuk menemui psikolog. Karena pada dasarnya orang yang menemui psikolog bukan hanya orang yang ingin mengobati permasalahan psikisnya, tetapi juga mencegah gangguan tersebut semakin parah.</p><p style=\"margin-right: 0px; margin-bottom: 1.6em; margin-left: 0px; border: 0px; font-family: &quot;Open Sans&quot;, sans-serif; padding: 0px; vertical-align: baseline; color: rgb(73, 73, 73); letter-spacing: 0.25px;\">Kesimpulan &nbsp;pada beberapa fenomena diatas adalah stigma masyarakat terhadap psikologi sulit untuk diubah, sehingga kita sebagai orang yang memahami ilmu psikologi harus berusaha mengubah stigma tersebut dengan mengedukasi masyarakat salah satunya adalah sosoalisasi secara personal dan juga dapat melalui acara- acara besar seperti seminar dan workshop agar masyarakat memahami dengan benar pandangan psikologi yang sebenarnya dan terhindar dari stigma terhadap psikologi.<br></p>', '2020-11-28 23:54:36', '1234', '2d33b473a9a02770cafd9d8902096e16.jpg', '1'),
(50, '4 Tipe Kepribadian Manusia Menurut Psikologi, Kalian yang Mana?', '<p><span style=\"color: rgb(255, 51, 0); font-family: AcuminPro, arial, helvetica, sans-serif;\">Liputan6.com, Jakarta</span><span style=\"color: rgb(68, 68, 68); font-family: AcuminPro, arial, helvetica, sans-serif; font-size: 15px;\">&nbsp;Setiap orang tentu memiliki karakter atau kepribadian yang berbeda-beda. Ada baiknya kita mengetahui karakter diri masing-masing serta orang lain. Adapun tujuan untuk tipe kepribadian atau karakter diri adalah untuk mengoptimalkan perubahan diri ke arah yang lebih baik dan positif</span></p><p style=\"color: rgb(68, 68, 68); font-family: AcuminPro, arial, helvetica, sans-serif; font-size: 15px;\">Sementara dengan kita mengetahui kepribadian seseorang bisa membantu memahami lawan bicara pada interaksi sosial dengan orang- orang sekitar. Menurut ilmu Psikologi, terdapat 4 kepribadian yang dimiliki manusia. Berikut ulasannya:</p><p style=\"color: rgb(68, 68, 68); font-family: AcuminPro, arial, helvetica, sans-serif; font-size: 15px;\"><span style=\"font-weight: 700;\">1. Koleris</span></p><p style=\"color: rgb(68, 68, 68); font-family: AcuminPro, arial, helvetica, sans-serif; font-size: 15px;\">Koleris dikenal sebagai tipe kepribadian yang memiliki semangat dan selalu optimis. Orang dengan kepribadian Koleris juga dikatakan keras kepala dan mudah marah. Mereka juga kerap kali tidak sabaran dan menyukai keributan hingga pertengkaran yang berujung perkelahian.</p><p style=\"color: rgb(68, 68, 68); font-family: AcuminPro, arial, helvetica, sans-serif; font-size: 15px;\"><span style=\"font-weight: 700;\">2. Melankolis</span></p><p style=\"color: rgb(68, 68, 68); font-family: AcuminPro, arial, helvetica, sans-serif; font-size: 15px;\">Orang dengan kepribadian Melankolis sering merasa khawatir dan mudah menyerah. Namun kelebihan Melankolis adalah seseorang yang analitis dan sangat kreatif. Walaupun begitu, si Melankolis kadang sering meremehkan diri mereka sendiri yang pada kenyataannya diri mereka tidak seburuk itu.</p><p style=\"color: rgb(68, 68, 68); font-family: AcuminPro, arial, helvetica, sans-serif; font-size: 15px;\"><span style=\"font-weight: 700;\">3. Plegmatis</span></p><p style=\"color: rgb(68, 68, 68); font-family: AcuminPro, arial, helvetica, sans-serif; font-size: 15px;\">Tak suka kekerasan dan selalu cinta damai adalah karakter khas dari seorang Plegmatis. Plegmatis juga seorang yang sering menyebarkan kebahagiaan lewat humor-humornya yang jenaka hingga membuat orang lain turut bahagia dibuatnya.</p><p style=\"color: rgb(68, 68, 68); font-family: AcuminPro, arial, helvetica, sans-serif; font-size: 15px;\"><span style=\"font-weight: 700;\">4. Sanguinis</span></p><p style=\"color: rgb(68, 68, 68); font-family: AcuminPro, arial, helvetica, sans-serif; font-size: 15px;\">Yang terakhir ialah Sanguinis. Selalu mendahulukan perasaan daripada pemikiran adalah karakter khas tipe Sanguinis. Selalu bersemangat dan hangat kepada setiap orang yang ia temui membuat dirinya dicintai banyak orang akibat keramahannya tersebut.</p><p><br></p>', '2020-11-28 23:57:29', '1234', 'd760106628ac475d5eb177cddc889b90.jpg', '1');

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
(111, '1000000001', '1000000001', '92d37878395aa7340628f137ae4ee688e4270bb9', 'KTA'),
(112, '0410087711', '0410087711', 'ebe40419bf696e1bb1f17e0ab43edf30922e3613', 'DSN'),
(113, '20087901', '20087901', '551f877f322ea4285f9d3c945dc467f29b9ca47d', 'DSN'),
(114, '0826098201', '0826098201', '0e1a46c70ade7c4decf98edf8cd1f85b99c28731', 'DSN'),
(115, '10241184001', '10241184001', 'cd4ff88375aff993a7ee40bf5b1b34439e29a3b7', 'DSN'),
(116, '1000000002', '1000000002', '4b1b6a7a25487540a9c12f412b19cffe50617e89', 'DSN'),
(117, '1017078801', '1017078801', '008c0e1f5e456402c94784828cbf4b3af7c0c2fe', 'DSN'),
(118, '0403027304', '0403027304', '443fa33f7f09ebfd4ffcee495d4a0de936e9e25b', 'DSN'),
(119, '1000000008', '1000000008', 'fe866bb9865c334df59b4b18d704afcb50eca94c', 'DSN'),
(120, '1000000003', '1000000003', '32409da5b40406c83d5b5f2a619fb8e78124e76c', 'DSN'),
(121, '1000000005', '1000000005', '0a4a789919930ce341d6bc0c60e2f9e72be7ebf8', 'DSN'),
(122, '1000000012', '1000000012', 'ecdd943dac119edcad46e0c01adb821715859b71', 'DSN'),
(123, '1000000004', '1000000004', 'a4c9b2095ad1793b7e8f3a73942cfb175ab10229', 'BKU'),
(124, '1000000013', '1000000013', '1492084d0f87028c5d8ee86c9b6ec32242c9121f', 'BKU'),
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
(284, '1216001', '0826098201', 'SL002', 'Pemilihan KRS untuk semester 8', '2020-11-17 11:01:24', 5, '', 1),
(285, '1216001', '1017078801', 'SL005', 'Ajuan judul lelangan', '2020-11-17 11:02:11', 5, '', 0),
(286, '1216001', '1000000013', 'SL008', 'pengajuan cicilan untuk pembayaran skripsi\r\n', '2020-11-17 11:03:43', 1, '', 0),
(287, '1216002', '0826098201', 'SL007', 'saya mengalami permasalahan dalam rumah yang mengganggu kepada aktifitas perkuliahan', '2020-11-17 13:46:56', 2, '', 1),
(288, '1216002', '1000000013', 'SL008', 'Masalah pembayaran semester 8 termin ke 1', '2020-11-17 13:47:59', 5, '', 0),
(289, '1216002', '0826098201', 'SL005', 'Revisi Bab 4', '2020-11-17 13:50:04', 3, 'terimakasih', 0),
(290, '1216004', '0826098201', 'SL003', 'Saya Kurang 6 sks untuk semester 7 ', '2020-11-17 13:52:07', 2, '', 1),
(291, '1216004', '1000000013', 'SL008', 'Pembayaran untuk Mengikuti SP', '2020-11-17 13:52:38', 2, '', 0),
(292, '1216004', '1017078801', 'SL009', 'Ada masalh pada parkiran di stmik', '2020-11-17 13:54:06', 4, '', 0),
(293, '1216004', '1017078801', 'SL006', 'Revisi BAB 2', '2020-11-17 13:55:29', 2, '', 0),
(294, '1216003', '0826098201', 'SL001', 'Matkul Sistem Basis data tidak bisa saya ikuti', '2020-11-17 13:58:14', 3, 'Jangan lupa memberi surat kepada dosen yang bersangkutan', 1),
(295, '1216003', '1000000013', 'SL008', 'masalah pembayaran SP termin 1\r\n', '2020-11-17 14:21:09', 2, '', 0),
(296, '1216003', '0826098201', 'SL002', 'pengajuan matakuliah untuk semster 8', '2020-11-17 14:28:04', 1, '', 0),
(297, '3216003', '1017078801', 'SL003', 'sks saya kurang untuk mengambil semester atas', '2020-11-17 16:35:02', 1, '', 0),
(298, '3216003', '1000000013', 'SL008', 'Pembayaran termin 2 untuk semester  8', '2020-11-17 16:36:09', 2, '', 0),
(299, '3216004', '1017078801', 'SL004', 'Permasalah nilai E pada matakuliah fisika', '2020-11-17 17:15:55', 3, 'Selesai', 0),
(300, '3216004', '0826098201', 'SL006', 'pengajuan judul untuk KP', '2020-11-17 17:17:30', 5, '', 0),
(301, '3216004', '0826098201', 'SL001', 'Permasalah dengan matakuliah metodologi ', '2020-11-17 17:26:31', 4, '', 0),
(302, '3216004', '1000000013', 'SL008', 'Pembayaran termin 1 semester 8', '2020-11-17 17:28:19', 2, '', 0),
(303, '3216003', '0826098201', 'SL005', 'Revisi untuk bab 5', '2020-11-17 17:34:36', 1, '', 0),
(304, '3216003', '0826098201', 'SL007', 'Saya gangguan kecemasan bila ingin presentasi', '2020-11-17 17:35:09', 4, '', 0),
(305, '1216002', '20087901', 'SL002', 'Mulai krs', '2020-11-27 10:19:41', 5, '', 0),
(306, '1216002', '0826098201', 'SL002', 'Mulai krs\r\n', '2020-11-27 10:20:07', 3, 'selesai', 1),
(307, '1216002', '1000000003', 'SL001', ' vx', '2020-12-16 02:39:52', 5, '', 0);

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

--
-- Dumping data untuk tabel `ms_consult_chat`
--

INSERT INTO `ms_consult_chat` (`id`, `id_consult`, `id_user`, `message`, `datesend`, `readed`) VALUES
(207, 294, '0826098201', 'Assalamualaikum', '2020-11-17 14:39:22', 0),
(208, 294, '1216003', 'Waalaikum salam ibu', '2020-11-17 14:39:40', 0),
(209, 294, '1216003', 'matkul basis data tidak bisa saya ikuti untuk hari ini', '2020-11-17 14:40:17', 0),
(210, 294, '1216003', 'dikarenakan orang tua saya sakit', '2020-11-17 14:40:43', 0),
(211, 294, '0826098201', 'baik nanti kamu bisa kirim surat ke kampus', '2020-11-17 14:41:03', 0),
(212, 294, '0826098201', 'dan temui dosen yang bersangkutan', '2020-11-17 14:41:12', 0),
(213, 294, '1216003', 'baik ibu terimakasih', '2020-11-17 14:48:23', 0),
(214, 294, '0826098201', 'saya akhiri konsultasinya', '2020-11-17 14:48:42', 0),
(215, 289, '1216002', 'assalamualaikum ibu', '2020-11-17 14:55:24', 0),
(216, 289, '0826098201', 'waalaikum salam ervan', '2020-11-17 14:55:33', 0),
(217, 289, '0826098201', 'jadi gimana skripsi nya?', '2020-11-17 14:55:42', 0),
(218, 289, '1216002', 'alhamdulillah ibu lacar', '2020-11-17 14:55:50', 0),
(219, 289, '1216002', 'ini janji kemarin soal bab 4 , sudah saya revisi', '2020-11-17 14:56:16', 0),
(220, 289, '1216002', 'file nya sudah saya upload', '2020-11-17 14:57:34', 0),
(221, 289, '0826098201', 'baik nanti ibu lihat dulu hasilnya', '2020-11-17 14:58:36', 0),
(222, 289, '1216002', 'baik ibu terimakasih', '2020-11-17 14:58:47', 0),
(223, 289, '0826098201', 'iya', '2020-11-17 14:58:52', 0),
(224, 290, '0826098201', 'assalamualaikum', '2020-11-26 14:16:01', 0),
(225, 306, '0826098201', 'assalamualaikum', '2020-11-27 10:21:19', 0),
(226, 287, '0826098201', 'tes', '2020-12-15 22:14:35', 0),
(227, 287, '1216002', 'hello', '2020-12-15 22:17:07', 0),
(228, 287, '0826098201', 'halo amel', '2020-12-16 01:24:26', 0);

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
(27, 289, '1216002', 'BAB_4_rev2.pdf', '2020-11-17 14:58:04'),
(28, 290, '0826098201', 'BAB_5.pdf', '2020-11-26 14:16:40');

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
(4849, '1216001', 'DINAR AZIZ GINANJAR', 'dinaraziz@gmail.com', 'MHS', '12', '081000001', 'Laki-Laki', '2016', '1', 'assets/assets/images/logo/d1.jpg', '0826098201'),
(4850, '1216002', 'ELVAN RIZKY MAULAN', 'elvanriz@gmail.xom', 'MHS', '12', '0810000002', 'Laki-Laki', '2016', '1', 'assets/user_profile/36a1bbc4f9decc792ec219202dc90705.jpg', '0826098201'),
(4851, '1216003', 'RIZKY IRMAWAN RAHAYU', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '0826098201'),
(4852, '1216004', 'ILHAM BAGJA PRATAMA', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '0826098201'),
(4853, '1216005', 'YOHANES A. DEO PANGUL', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '1000000003'),
(4854, '1216006', 'YOSUA OKTOVIAN', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '0826098201'),
(4855, '1216007', 'AGUNG NAZARIO', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '1000000002'),
(4856, '1216008', 'ANDESSYA JULIAN PRADINDA', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '1000000002'),
(4857, '1216009', 'RIZKY SAPARULY', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '10241184001'),
(4858, '1216010', 'ILHAM DONI WALUYA', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '10241184001'),
(4859, '1216011', 'SINTA BELLA MAISARI', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '1000000005'),
(4860, '1216012', 'JOSE CARLOS DOUTEL XIMENES', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '1000000005'),
(4861, '1216013', 'NALDYN FAUZAN ACHMAD', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '1000000003'),
(4862, '1216014', 'IRFAN FAISAL', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '1000000003'),
(4863, '1216015', 'FIRMAN HERLIANSYAH', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '1000000005'),
(4864, '1216016', 'RANDO AGUSTIAN', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '1000000005'),
(4865, '1216017', 'MUHAMAD LUTHFIRRAHMAN', 'luthfirrahman696@gmail.com', 'MHS', '12', '08131256611', 'Laki-Laki', '2016', '1', 'assets/user_profile/ed23abd1bfbd242d2eb1aa25b0617829.jpg', '1000000005'),
(4866, '1216018', 'ANJAR AHMAD NURJAMAN', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '1000000003'),
(4867, '1216019', 'DESTYANI ADELLA FIRDAYANTI', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '1000000003'),
(4868, '1216020', 'FAHMI MIFTAH FARID', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '1000000002'),
(4869, '1216023', 'ADI KURNIAWAN', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '1000000002'),
(4870, '1216024', 'RYAN ILHAM CAHYADI', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '1000000002'),
(4871, '1216027', 'AEF SAEPULLAH', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '10241184001'),
(4872, '1216031', 'AHMAD ROZI', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '10241184001'),
(4873, '1216036', 'AYU LESTARI', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '10241184001'),
(4874, '1216039', 'CECEP RIDWAN', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '1000000003'),
(4875, '1216042', 'EKO BUDI PRAYOGO', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '1000000002'),
(4876, '1216045', 'MARWIYAH', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '1000000003'),
(4877, '1216050', 'OKVIANA PRATIWI', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '1000000003'),
(4878, '1216054', 'SAEPUDIN', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '1000000005'),
(4879, '1216058', 'FIKRI AGUNG BUDI HARTONO', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '1000000002'),
(4880, '1216061', 'SITI IDA FARIDAH', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '10241184001'),
(4881, '1216065', 'SITI MASPUPAH', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '10241184001'),
(4882, '1216069', 'SUHADI', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '1000000005'),
(4883, '1216073', 'UJANG RIFA\'I', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '1000000005'),
(4884, '1216601', 'FAJAR NOVIYANA', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '1000000002'),
(4885, '1216602', 'MUHAMAD RIFKY RAMADAN', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '1000000002'),
(4886, '1216603', 'MUHAMMAD SALMAN AL-FARISI', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '1000000005'),
(4887, '1216604', 'SITI ADAWIAH', '', 'MHS', '12', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '10241184001'),
(4888, '3215057', 'DARHUDIN', '', 'MHS', '32', '', '', '2015', '1', 'assets/assets/images/logo/d1.jpg', '1000000012'),
(4889, '3216001', 'JOSAFAT SITEPU', '', 'MHS', '32', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '1017078801'),
(4890, '3216002', 'IDHAR REFIN GUSTININGTIYAS', '', 'MHS', '32', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '1000000008'),
(4891, '3216003', 'FIKRI HUSNI MUBAROQ', '', 'MHS', '32', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '1017078801'),
(4892, '3216004', 'FAJAR MUHARAM HIDAYATUL MUTAQIEN', '', 'MHS', '32', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '1017078801'),
(4893, '3216005', 'RIZKY', '', 'MHS', '32', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '0403027304'),
(4894, '3216006', 'TIA PURNAMASITA', '', 'MHS', '32', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '1017078801'),
(4895, '3216007', 'YANYAN APRIYANA', '', 'MHS', '32', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '1017078801'),
(4896, '3216008', 'MIA NURHALIMAH', '', 'MHS', '32', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '20087901'),
(4897, '3216009', 'KEUIS RABIATUL ADAWIAH', '', 'MHS', '32', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '20087901'),
(4898, '3216010', 'NASYARUDIN ALFAJRI', '', 'MHS', '32', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '20087901'),
(4899, '3216011', 'DONALD MARBUN', '', 'MHS', '32', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '1000000012'),
(4900, '3216012', 'WARIS NUGRAHA', '', 'MHS', '32', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '1000000012'),
(4901, '3216013', 'ASEP HADROMI', '', 'MHS', '32', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '1000000008'),
(4902, '3216014', 'MOCHAMAD KHAERUL ANWAR', '', 'MHS', '32', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '1000000008'),
(4903, '3216015', 'PUADAH', '', 'MHS', '32', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '0403027304'),
(4904, '3216016', 'DEVIN KHOLIQ CAHYA DININGRAT', '', 'MHS', '32', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '0403027304'),
(4905, '3216017', 'GOVINDA AKHMAD NUGRAHA', '', 'MHS', '32', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '1000000012'),
(4906, '3216018', 'YAYAT SUPRIATNA', '', 'MHS', '32', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '20087901'),
(4907, '3216019', 'AI FITRI NURHASANAH', '', 'MHS', '32', '', '', '2016', '1', 'assets/assets/images/logo/d1.jpg', '20087901');

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
(60, '1000000001', 'Dr. Abdurrahman', 'abdurrahman@gmail.com', '99', '08132111333', 'Laki-Laki', '1', 'KTA', 'assets/assets/images/logo/d2.jpg'),
(61, '0410087711', 'Yus Jayusman, MT', 'yusjayusman@gmail.com', '99', '628156037494', 'Laki-Laki', '1', 'DSN', 'assets/assets/images/logo/d2.jpg'),
(62, '20087901', 'Rini Nuraini S, MT', 'rnurainisukmana@gmail.com', '32', '08882024236', 'Perempuan', '1', 'DSN', 'assets/assets/images/logo/d2.jpg'),
(63, '0826098201', 'Mina Ismu Rahayu, MT', 'ismurahayu@gmail.com', '12', '081321131982', 'Perempuan', '1', 'DSN', 'assets/assets/images/logo/d2.jpg'),
(64, '10241184001', 'Indra Maulana YK, M.Kom', 'indramaulanayk@gmail.com', '12', '085659021234', 'Laki-Laki', '1', 'DSN', 'assets/assets/images/logo/d2.jpg'),
(65, '1000000002', 'Linda Apriyanti, MT', 'lindaapriyanti@gmail.com', '12', '08565902223', 'Perempuan', '1', 'DSN', 'assets/assets/images/logo/d2.jpg'),
(66, '1017078801', 'Siti Yuliyanti, M.Kom', 'sitiyuliyanti@gmail.com', '32', '081785879875', 'Perempuan', '1', 'DSN', 'assets/assets/images/logo/d2.jpg'),
(67, '0403027304', 'Uro Abdulrohim, MT', 'uroabdulrohim@gmail.com', '32', '087822988483', 'Laki-Laki', '1', 'DSN', 'assets/assets/images/logo/d2.jpg'),
(68, '1000000008', 'Dedy Apriadi, M.Si', 'dedyapriadi@gmail.com', '32', '6280000000007', 'Laki-Laki', '1', 'DSN', 'assets/assets/images/logo/d2.jpg'),
(69, '1000000003', 'Dani Pradana, MT', 'danipradana@gmail.com', '12', '628133244525', 'Laki-Laki', '1', 'DSN', 'assets/assets/images/logo/d2.jpg'),
(70, '1000000005', 'Herna Gunawan,ST., MM', 'hernagunawan@gmail.com', '12', '6280000000004', 'Laki-Laki', '1', 'DSN', 'assets/assets/images/logo/d2.jpg'),
(71, '1000000012', 'Haris Irnawan, ST., MM', 'harisirnawan@gmail.com', '32', '6280000000010', 'Laki-Laki', '1', 'DSN', 'assets/assets/images/logo/d2.jpg'),
(72, '1000000004', 'Linda Apriyantio, S.Kom., MT', 'LindaApriyantio@gmail.com', '99', '08100000004', 'Perempuan', '1', 'BKU', 'assets/assets/images/logo/d2.jpg'),
(73, '1000000013', 'Siti Fatimah, Amd., S.Kom', 'sitifatimah@gmail.com', '99', '6280000000011', 'Perempuan', '1', 'BKU', 'assets/assets/images/logo/d2.jpg');

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
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `ms_auth`
--
ALTER TABLE `ms_auth`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5089;

--
-- AUTO_INCREMENT untuk tabel `ms_consult`
--
ALTER TABLE `ms_consult`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=308;

--
-- AUTO_INCREMENT untuk tabel `ms_consult_chat`
--
ALTER TABLE `ms_consult_chat`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=229;

--
-- AUTO_INCREMENT untuk tabel `ms_consult_file`
--
ALTER TABLE `ms_consult_file`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
