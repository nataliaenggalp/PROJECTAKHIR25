-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Feb 2021 pada 11.20
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lowongankerja`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datacalonpekerja`
--

CREATE TABLE `datacalonpekerja` (
  `calonpekerja_id` int(4) NOT NULL,
  `usernamecalonpekerja` varchar(20) NOT NULL,
  `password` varchar(70) NOT NULL,
  `namacalonpekerja` varchar(300) NOT NULL,
  `kotacalonpekerja` varchar(100) NOT NULL,
  `provinsicalonpekerja` varchar(100) NOT NULL,
  `alamatcalonpekerja` varchar(300) NOT NULL,
  `emailcalonpekerja` varchar(70) NOT NULL,
  `noteleponcalonpekerja` varchar(14) NOT NULL,
  `pendidikanterakhir` varchar(150) NOT NULL,
  `skilldankeahlian` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datacalonpekerja`
--

INSERT INTO `datacalonpekerja` (`calonpekerja_id`, `usernamecalonpekerja`, `password`, `namacalonpekerja`, `kotacalonpekerja`, `provinsicalonpekerja`, `alamatcalonpekerja`, `emailcalonpekerja`, `noteleponcalonpekerja`, `pendidikanterakhir`, `skilldankeahlian`) VALUES
(1, 'natalia', 'natalia', 'Natalia Enggal Pamungkas', 'Boyolali', 'Jawa Tengah', 'Garen Rt02/03 Pandeyan, Ngemplak, Boyolali', 'nataliaenggalp@gmail.com', '089616035919', 'S2', 'Analisis Database'),
(2, 'pamungkas', 'pamungkas', 'Enggal Pamungkas', 'Solo', 'Jawa Tengah', 'Banjarsari', 'enggalp@gmail.com', '088647382907', 'S2', 'Program Sistem , Analisis Database'),
(3, 'piska', 'piska', 'piska jay', 'solo', 'Jawa Tengah', 'Sumber', 'piskajay@gmail.com', '087463728973', 'SMA', 'menguasi excel'),
(4, 'dea', 'dea', 'deyak', 'sukoharjo', 'Jawa Tengah', 'mojolaban', 'dea@gmail.com', '087463728973', 'S3', 'Program Sistem , Analisis Database');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datacurriculumvitae`
--

CREATE TABLE `datacurriculumvitae` (
  `curriculum_id` int(15) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `tempattanggallahir` varchar(100) NOT NULL,
  `jeniskelamin` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `tinggibadan` varchar(50) NOT NULL,
  `beratbadan` varchar(50) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `notelepon` varchar(14) NOT NULL,
  `status` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `smp` varchar(100) NOT NULL,
  `sma` varchar(100) NOT NULL,
  `perguruantinggi1` varchar(300) NOT NULL,
  `perguruantinggi2` varchar(300) NOT NULL,
  `perguruantinggi3` varchar(300) NOT NULL,
  `kemampuan1` varchar(300) NOT NULL,
  `kemampuan2` varchar(300) NOT NULL,
  `kemampuan3` varchar(300) NOT NULL,
  `pengalaman1` varchar(300) NOT NULL,
  `pengalaman2` varchar(300) NOT NULL,
  `pengalaman3` varchar(300) NOT NULL,
  `lowongan_id` int(15) NOT NULL,
  `calonpekerja_id` int(11) NOT NULL,
  `statuslamaran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datacurriculumvitae`
--

INSERT INTO `datacurriculumvitae` (`curriculum_id`, `nama`, `tempattanggallahir`, `jeniskelamin`, `agama`, `tinggibadan`, `beratbadan`, `alamat`, `notelepon`, `status`, `email`, `smp`, `sma`, `perguruantinggi1`, `perguruantinggi2`, `perguruantinggi3`, `kemampuan1`, `kemampuan2`, `kemampuan3`, `pengalaman1`, `pengalaman2`, `pengalaman3`, `lowongan_id`, `calonpekerja_id`, `statuslamaran`) VALUES
(1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, ''),
(2, 'Enggal Pamungkas', 'Solo , 23 November 1998', 'Laki - laki', 'Islam', '178', '69', 'Banjarsari', '088647382907', 'Belum menikah', 'enggalp@gmail.com', 'SMP N 2 Surakarta', 'SMK N 2 Surakarta', 'UNS', '', '', 'Program Sistem', 'Analisis Database', '', 'Magang di suatu perusahaan pembuatan aplikasi di solo', '', '', 2, 2, 'diterima'),
(3, 'piska jay', 'Karanganyar , 12 Juli 1999', 'Laki - laki', 'Islam', '180', '69', 'Sumber', '087463728973', 'Belum menikah', 'piskajay@gmail.com', 'SMP 2 Surakarta', 'SMK N 6 Surakarta', '', '', '', 'menguasai excel', '', '', 'pernah menjadi kasir di pusat perbelanjaan', '', '', 3, 3, ''),
(4, 'deyakkkkkkkkk', 'Solo , 23 November 1998', 'Perempuan', 'Islam', '155', '50', 'mojolaban', '087463728973', 'Menikah', 'dea@gmail.com', 'SMP 2 Surakarta', 'SMA 1 Karanganyar', 'UNS', '', '', 'Desain WEB', 'Analisis Database', '', 'Magang di suatu perusahaan pembuatan aplikasi di solo', '', '', 4, 4, 'diterima');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datalowongan`
--

CREATE TABLE `datalowongan` (
  `lowongan_id` int(15) NOT NULL,
  `namapekerjaan` varchar(100) NOT NULL,
  `deskripsipekerjaan` varchar(300) NOT NULL,
  `syaratpekerjaan` varchar(300) NOT NULL,
  `jenispekerjaan` varchar(100) NOT NULL,
  `jumlahorangyangdiperlukan` varchar(50) NOT NULL,
  `statuslowonganpekerjaan` varchar(100) NOT NULL,
  `perusahaan_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datalowongan`
--

INSERT INTO `datalowongan` (`lowongan_id`, `namapekerjaan`, `deskripsipekerjaan`, `syaratpekerjaan`, `jenispekerjaan`, `jumlahorangyangdiperlukan`, `statuslowonganpekerjaan`, `perusahaan_id`) VALUES
(1, 'Program Aplikasi', 'Membuat Suatu sistem Aplikasi', 'Mampu menguasai berbagai jenis bahasa pemograman', 'Programer', '2', '', 0),
(2, 'Programer', 'Memprogram sistem game', 'Menguasai berbagai bahasa pemograman , bisa mengatasi suatu masalah dalam program ', 'Freelance', '1', 'terisi', 2),
(3, 'kasir tempat perbelanjaan sekolah', 'kasir di tempat perbelanjaan', 'mengusai excel , dan ada pengalaman tentang perkasiran', 'kontrak', '1', 'belum terisi', 4),
(4, 'programer', 'membuat program pada suatu sistem', 'menguasai php dan css', 'kontrak', '1', 'terisi', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dataperusahaan`
--

CREATE TABLE `dataperusahaan` (
  `perusahaan_id` int(15) NOT NULL,
  `usernameperusahaan` varchar(20) NOT NULL,
  `password` varchar(70) NOT NULL,
  `namaperusahaan` varchar(100) NOT NULL,
  `emailperusahaan` varchar(150) NOT NULL,
  `noteleponperusahaan` bigint(14) NOT NULL,
  `alamatperusahaan` varchar(150) NOT NULL,
  `deskripsiperusahaan` varchar(400) NOT NULL,
  `jenispekerjaanyangadadiperusahaan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dataperusahaan`
--

INSERT INTO `dataperusahaan` (`perusahaan_id`, `usernameperusahaan`, `password`, `namaperusahaan`, `emailperusahaan`, `noteleponperusahaan`, `alamatperusahaan`, `deskripsiperusahaan`, `jenispekerjaanyangadadiperusahaan`) VALUES
(1, 'NEP', 'nep', 'NEP Company', 'nep@gmail.com', 89573829475, 'Solo', 'Perusahaan Pembuatan Aplikasi', 'Programer Sistem , Analisis Database , Desain Sistem'),
(2, 'hallo', 'hallo', 'H Company', 'hallo@gmail.com', 89973829103, 'Surabaya', 'Perusahaan Pengembang Video Game', 'Program Sistem Game'),
(3, 'me', 'me', 'ME Studio', 'mes@gmail.com', 86573829647, 'Jogja', 'Perusahaan Software Development', 'Merancang Aplikasi WEB dan Mobile'),
(4, 'viskajaya', 'viskajaya', 'viska company', 'viskacompany@gmail.com', 89935789037, 'Jl.Adi Sucipto No.38, Kerten, Kec. Laweyan, Kota Surakarta , Jawa Tengah', 'sekolah membutuhkan pegawai kasir untuk tempat perbelanjaan di sekolah', 'kasir'),
(5, 'pakbin', '12345', 'pak bin production', 'pakbin@gmail.com', 89737382926, 'mjgd', 'perusahaan web', 'pembuatan web');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posting`
--

CREATE TABLE `posting` (
  `posting_id` int(11) NOT NULL,
  `TglPost` varchar(20) NOT NULL,
  `Judul` varchar(30) NOT NULL,
  `Isi` text NOT NULL,
  `Nav` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `posting`
--

INSERT INTO `posting` (`posting_id`, `TglPost`, `Judul`, `Isi`, `Nav`) VALUES
(1, '', 'Tentang Kami', '<br>\\r\\n<br>Lowongan Pekerjaan kerja adalah tugas Web yang di ampu oleh Bapak Binar Aris\\r\\n<br>\\r\\n<br>lowongan Pekerjaan Kita menawarkan satu set pelayanan perekutan tenaga kerja yang melibatkan perusahaan dan calon pekerja secara aktif.\\r\\n<br>\\r\\n<br>Lowongan Pekerjaan Kita mengelola proses perekrutan mereka melalui aplikasi berbasis web dengan perantaraan Internet.\\r\\n<br>''', 'TentangKami'),
(2, '', 'Lowongan Kerja', 'website ini di buat dengan tujuan untuk menyelesaikan tugas Akhir kelas XII\r\n<p>Nama : Natalia Enggal P</p>\r\n<p>No : 25 </p>\r\n<p>Kelas : XII RPL</p>', 'Home'),
(3, '', 'Kontak', '<h3>Website Lowongan Pekerjaan</h3>		<p>Nama	: Natalia Enggal Pamungkas</p>					<p>Email : nataliaenggalp@gmail.com</p>\r\n<p>Telepon : 089616035919</p>\r\n<p>Instagram : @nataliayayaya_</p>\r\n<p>Telegram : @nataliaep\r\n									', 'kontak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datacalonpekerja`
--
ALTER TABLE `datacalonpekerja`
  ADD PRIMARY KEY (`calonpekerja_id`);

--
-- Indexes for table `datacurriculumvitae`
--
ALTER TABLE `datacurriculumvitae`
  ADD PRIMARY KEY (`curriculum_id`);

--
-- Indexes for table `datalowongan`
--
ALTER TABLE `datalowongan`
  ADD PRIMARY KEY (`lowongan_id`);

--
-- Indexes for table `dataperusahaan`
--
ALTER TABLE `dataperusahaan`
  ADD PRIMARY KEY (`perusahaan_id`);

--
-- Indexes for table `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`posting_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datacalonpekerja`
--
ALTER TABLE `datacalonpekerja`
  MODIFY `calonpekerja_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `datacurriculumvitae`
--
ALTER TABLE `datacurriculumvitae`
  MODIFY `curriculum_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `datalowongan`
--
ALTER TABLE `datalowongan`
  MODIFY `lowongan_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `dataperusahaan`
--
ALTER TABLE `dataperusahaan`
  MODIFY `perusahaan_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `posting`
--
ALTER TABLE `posting`
  MODIFY `posting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
