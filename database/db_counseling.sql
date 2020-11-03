-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Nov 2020 pada 02.19
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
  `date` date NOT NULL,
  `time` time NOT NULL,
  `created_by` varchar(40) NOT NULL,
  `thumbs` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(102, '1234', 'admin', 'admin', 'ADM'),
(103, '3232', '3232', 'a3d63c0b0479ac50cd199d14a2725dadf1e1e95a', 'DSN'),
(104, '1212', '1212', '618dcdfb0cd9ae4481164961c4796dd8e3930c8d', 'DSN'),
(105, '1111', '1111', '011c945f30ce2cbafc452f39840f025693339c42', 'KTA'),
(106, '2222', '2222', 'fea7f657f56a2a448da7d4b535ee5e279caf3d9a', 'BKU'),
(107, '1216001', '1216001', '4483cf4e32e3fd3554ff6f286c448a4c3f9dbc3c', 'MHS'),
(108, '1216017', '1216017', 'ae76401fa8f9f5d686a5335d77e89b885771b8fc', 'MHS'),
(109, '3216001', '3216001', '2f8e20c4045c2aa76083c38c44bb1a914969f065', 'MHS'),
(110, '3216002', '3216002', '5a6d4d73249b5b3d7d10c9cd9d600e762eca9894', 'MHS');

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
(270, '1216001', '1212', 'SL001', 'Saya ingin mempertanyakan tentang jam kuliah yang bentrok\r\n', '2020-11-02 14:03:24', 3, 'tes', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_consult_chat`
--

CREATE TABLE `ms_consult_chat` (
  `id` int(15) NOT NULL,
  `id_consult` int(15) NOT NULL,
  `id_user` varchar(40) NOT NULL,
  `message` text NOT NULL,
  `datesend` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ms_consult_chat`
--

INSERT INTO `ms_consult_chat` (`id`, `id_consult`, `id_user`, `message`, `datesend`) VALUES
(204, 270, '1212', 'rwarwa', '2020-11-02 16:13:17');

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
  `photo` varchar(50) NOT NULL,
  `id_wali` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ms_users_college`
--

INSERT INTO `ms_users_college` (`id`, `nim`, `name`, `email`, `kode_role`, `id_prodi`, `no_telp`, `gender`, `generation`, `id_users_status`, `photo`, `id_wali`) VALUES
(60, '1216001', 'Rizky Irmawan', '', 'MHS', '12', '', 'Laki-Laki', '2016', '1', 'assets/assets/images/logo/d1.jpg', '1212'),
(61, '1216017', 'M Luthfirrahman', '', 'MHS', '12', '', 'Laki-Laki', '2016', '1', 'assets/assets/images/logo/d1.jpg', '1212'),
(62, '3216001', 'Fahmi Miftah Farid', '', 'MHS', '32', '', 'Laki-Laki', '2016', '1', 'assets/assets/images/logo/d1.jpg', '3232'),
(63, '3216002', 'Yanyan Apriyana', '', 'MHS', '32', '', 'Laki-Laki', '2016', '1', 'assets/assets/images/logo/d1.jpg', '3232');

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
(55, '1234', 'Admin', 'admin@admin.com', '99', '0813124455', 'Laki-Laki', '1', 'ADM', 'assets/user_profile/53580456e66485d6f7cc4faf53345934.jpg'),
(56, '3232', 'Siti yulianti', 'sitiyuli@gmail.com', '32', '0813244244', 'Perempuan', '1', 'DSN', 'assets/assets/images/logo/d2.jpg'),
(57, '1212', 'Mina ismu Rahayu', 'minaismu@gmail.com', '12', '0813244244', 'Perempuan', '1', 'DSN', 'assets/assets/images/logo/d2.jpg'),
(58, '1111', 'Luis Frederik', 'luisfrederik@gmail.com', '99', '0813244244', 'Laki-Laki', '1', 'KTA', 'assets/assets/images/logo/d2.jpg'),
(59, '2222', 'Siti Damayanti', 'sitidamayanti@gmail.com', '99', '0813124455', 'Perempuan', '1', 'BKU', 'assets/assets/images/logo/d2.jpg');

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
  ADD KEY `created_by` (`created_by`);

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
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ms_auth`
--
ALTER TABLE `ms_auth`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT untuk tabel `ms_consult`
--
ALTER TABLE `ms_consult`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=271;

--
-- AUTO_INCREMENT untuk tabel `ms_consult_chat`
--
ALTER TABLE `ms_consult_chat`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;

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
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT untuk tabel `ms_users_staff`
--
ALTER TABLE `ms_users_staff`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT untuk tabel `ms_users_status`
--
ALTER TABLE `ms_users_status`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
