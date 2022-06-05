-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Des 2020 pada 12.36
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keretapiku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `email` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `no_ID` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `tipe_id` text NOT NULL,
  `no_telpon` varchar(15) NOT NULL,
  `nama_lengkap` text CHARACTER SET utf8mb4 NOT NULL,
  `jenis_kelamin` varchar(6) CHARACTER SET utf8mb4 NOT NULL,
  `tanggal_lahir` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `alamat` text CHARACTER SET utf8mb4 NOT NULL,
  `sandi` varchar(20) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`email`, `no_ID`, `tipe_id`, `no_telpon`, `nama_lengkap`, `jenis_kelamin`, `tanggal_lahir`, `alamat`, `sandi`) VALUES
('rama@gmail.com', '00077777777', 'KTP', '08555555', 'ramadina', 'Female', '15/12/2020', 'madiun, jawa timur', '666'),
('malik@gmail.com', '000999000997', 'KTP', '088888886', 'malik ahmad', 'Male', '30/11/2020', 'jl kusumahadi no 8 surakarta', '1111'),
('zaynmalik@gmail.com', '000999000998', 'KTP', '088888888', 'zayn malik', 'Male', '16/12/2020', 'jl kusumahadi no 7 surakarta', 'zzz'),
('zera@gmail.com', '088888885', 'KTP', '0899999', 'zera', 'Female', '09/12/2020', 'karanganyar, surakarta', '000'),
('fahri@gmail.com', '088888886', 'KTP', '077776', 'fahri', 'Male', '09/12/2020', 'yogjakarta, indonesia', '555'),
('apaansihbg@mail.m', '123321123', 'KTP', '081818818818', 'Lala Setiawan', 'Male', '14/10/1974', 'Jl. Jayengan no. 10 B', 'qiuqiu'),
('gita@gmail.com', '982718273', 'KTP', '', '', '', '05/12/2006', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `kode_informasi` varchar(5) CHARACTER SET utf8mb4 NOT NULL,
  `nama_informasi` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `pertanyaan` text CHARACTER SET utf8mb4 NOT NULL,
  `jawaban` text CHARACTER SET utf8mb4 NOT NULL,
  `kontak` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `id_admin` varchar(20) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_kereta`
--

CREATE TABLE `jadwal_kereta` (
  `no_kereta` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `nama_kereta` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `asal_stasiun` text CHARACTER SET utf8mb4 NOT NULL,
  `jam_keberangkatan` varchar(5) CHARACTER SET utf8mb4 NOT NULL,
  `tanggal_keberangkatan` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `stasiun_tujuan` text CHARACTER SET utf8mb4 NOT NULL,
  `jam_kedatangan` varchar(5) CHARACTER SET utf8mb4 NOT NULL,
  `tanggal_kedatangan` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `kelas_kereta` varchar(3) NOT NULL,
  `jenis_kereta` varchar(5) NOT NULL,
  `harga` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal_kereta`
--

INSERT INTO `jadwal_kereta` (`no_kereta`, `nama_kereta`, `asal_stasiun`, `jam_keberangkatan`, `tanggal_keberangkatan`, `stasiun_tujuan`, `jam_kedatangan`, `tanggal_kedatangan`, `kelas_kereta`, `jenis_kereta`, `harga`) VALUES
('GPN_6721', 'Argo Dwipangga', 'Stasiun Gambir (GM)', '08:00', '12/22/2020', 'Stasiun Solo Balapan (SLO)', '16:35', '12/22/2020', 'EKS', 'Jauh', 530000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_admin`
--

CREATE TABLE `login_admin` (
  `id_admin` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `sandi` varchar(20) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembatalan`
--

CREATE TABLE `pembatalan` (
  `kode_tiket` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `id_penumpang` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `nama_penumpang` text CHARACTER SET utf8mb4 NOT NULL,
  `nama_bank` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `no_rek` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `nama_akun_bank` varchar(30) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan_tiket`
--

CREATE TABLE `pesan_tiket` (
  `kode_tiket` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `email_akun` varchar(50) NOT NULL,
  `nama_pemesan` text CHARACTER SET utf8mb4 NOT NULL,
  `notelp_pemesan` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `email_pemesan` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `id_penumpang` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `Nama_penumpang` text CHARACTER SET utf8mb4 NOT NULL,
  `nama_kereta` text CHARACTER SET utf8mb4 NOT NULL,
  `no_kereta` varchar(6) CHARACTER SET utf8mb4 NOT NULL,
  `kelas_kereta` varchar(3) CHARACTER SET utf8mb4 NOT NULL,
  `tempat_duduk` varchar(3) CHARACTER SET utf8mb4 NOT NULL,
  `asal_stasiun` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `jam_keberangkatan` varchar(5) CHARACTER SET utf8mb4 NOT NULL,
  `tanggal_keberangkatan` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `stasiun_tujuan` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `jam_kedatangan` varchar(5) CHARACTER SET utf8mb4 NOT NULL,
  `tanggal_kedatangan` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `harga` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesan_tiket`
--

INSERT INTO `pesan_tiket` (`kode_tiket`, `email_akun`, `nama_pemesan`, `notelp_pemesan`, `email_pemesan`, `id_penumpang`, `Nama_penumpang`, `nama_kereta`, `no_kereta`, `kelas_kereta`, `tempat_duduk`, `asal_stasiun`, `jam_keberangkatan`, `tanggal_keberangkatan`, `stasiun_tujuan`, `jam_kedatangan`, `tanggal_kedatangan`, `harga`) VALUES
('TK001', '', 'hafiidh', '0', 'hi@gmail.com', '0999', 'hafiidh annaafi', 'Argo', 'GPN_67', 'EKS', 'A08', 'Stasiun Gambir (GM)', '08:00', '12/22/2020', 'Stasiun Solo Balapan', '16:35', '12/22/2020', 530000),
('TK0010', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
('TK0011', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
('TK0012', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
('TK0013', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
('TK0014', '', '', '', '', '', '', '<br', '<br', '<br', '', '', '', '', '', '', '', 0),
('TK0015', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
('TK0016', '', 'cek', '324', 'c@gmail.com', '325324', 'sada', 'Argo', 'GPN_67', 'EKS', 'wew', 'Stasiun Gambir (GM)', '08:00', '12/22/2020', 'Stasiun Solo Balapan', '16:35', '12/22/2020', 530000),
('TK0017', '', 'ddddd', '78888', 'd@gmail.com', '534543', 'dede', 'Argo', 'GPN_67', 'EKS', 'fgr', 'Stasiun Gambir (GM)', '08:00', '12/22/2020', 'Stasiun Solo Balapan', '16:35', '12/22/2020', 530000),
('TK002', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
('TK003', '', 'hafiidhann', '0988', 'hafiidhh@gmail.com', '890000', 'hhhhaaa', 'Argo', 'GPN_67', 'EKS', 'A09', 'Stasiun Gambir (GM)', '08:00', '12/22/2020', 'Stasiun Solo Balapan', '16:35', '12/22/2020', 530000),
('TK004', '', 'enny', '09899', 'enny@gmail.com', '098777', 'enny zakiyyah', 'Argo', 'GPN_67', 'EKS', 'A09', 'Stasiun Gambir (GM)', '08:00', '12/22/2020', 'Stasiun Solo Balapan', '16:35', '12/22/2020', 530000),
('TK005', '', 'enny', '09899', 'enny@gmail.com', '098777', 'enny zakiyyah', 'Argo', 'GPN_67', 'EKS', 'A09', 'Stasiun Gambir (GM)', '08:00', '12/22/2020', 'Stasiun Solo Balapan', '16:35', '12/22/2020', 530000),
('TK006', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
('TK007', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
('TK008', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
('TK009', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `promosi`
--

CREATE TABLE `promosi` (
  `kode_promosi` varchar(5) CHARACTER SET utf8mb4 NOT NULL,
  `nama_promosi` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `tanggal_berlaku` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `tanggal_berakhir` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `deskripsi` longtext CHARACTER SET utf8mb4 NOT NULL,
  `id_admin` varchar(20) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `reschedule`
--

CREATE TABLE `reschedule` (
  `kode_tiket` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `id_penumpang` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `nama_penumpang` text CHARACTER SET utf8mb4 NOT NULL,
  `kelas_kereta` varchar(3) CHARACTER SET utf8mb4 NOT NULL,
  `tempat_dudukbaru` varchar(3) CHARACTER SET utf8mb4 NOT NULL,
  `asal_stasiunbaru` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `jam_keberangkatanbaru` varchar(5) CHARACTER SET utf8mb4 NOT NULL,
  `tanggal_keberangkatanbaru` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `stasiun_tujuanbaru` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `jam_kedatanganbaru` varchar(5) CHARACTER SET utf8mb4 NOT NULL,
  `tanggal_kedatanganbaru` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `harga` int(8) NOT NULL,
  `metode_bayar` varchar(15) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket_penumpang`
--

CREATE TABLE `tiket_penumpang` (
  `kode_tiket` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `id_penumpang` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `nama_penumpang` text CHARACTER SET utf8mb4 NOT NULL,
  `kelas_kereta` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `tempat_duduk` varchar(3) CHARACTER SET utf8mb4 NOT NULL,
  `no_kereta` varchar(6) NOT NULL,
  `nama_kereta` text CHARACTER SET utf8mb4 NOT NULL,
  `asal_stasiun` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `jam_keberangkatan` varchar(5) CHARACTER SET utf8mb4 NOT NULL,
  `tanggal_keberangkatan` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `stasiun_tujuan` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `jam_kedatangan` varchar(5) CHARACTER SET utf8mb4 NOT NULL,
  `tanggal_kedatangan` varchar(10) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`no_ID`),
  ADD KEY `email` (`email`),
  ADD KEY `sandi` (`sandi`);

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`kode_informasi`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indeks untuk tabel `jadwal_kereta`
--
ALTER TABLE `jadwal_kereta`
  ADD PRIMARY KEY (`no_kereta`);

--
-- Indeks untuk tabel `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `pembatalan`
--
ALTER TABLE `pembatalan`
  ADD PRIMARY KEY (`kode_tiket`),
  ADD KEY `id_penumpang` (`id_penumpang`);

--
-- Indeks untuk tabel `pesan_tiket`
--
ALTER TABLE `pesan_tiket`
  ADD PRIMARY KEY (`kode_tiket`);

--
-- Indeks untuk tabel `promosi`
--
ALTER TABLE `promosi`
  ADD PRIMARY KEY (`kode_promosi`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indeks untuk tabel `reschedule`
--
ALTER TABLE `reschedule`
  ADD PRIMARY KEY (`kode_tiket`);

--
-- Indeks untuk tabel `tiket_penumpang`
--
ALTER TABLE `tiket_penumpang`
  ADD PRIMARY KEY (`kode_tiket`),
  ADD KEY `no_kereta` (`no_kereta`),
  ADD KEY `id_penumpang` (`id_penumpang`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD CONSTRAINT `informasi_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `login_admin` (`id_admin`);

--
-- Ketidakleluasaan untuk tabel `pembatalan`
--
ALTER TABLE `pembatalan`
  ADD CONSTRAINT `pembatalan_ibfk_1` FOREIGN KEY (`kode_tiket`) REFERENCES `tiket_penumpang` (`kode_tiket`);

--
-- Ketidakleluasaan untuk tabel `promosi`
--
ALTER TABLE `promosi`
  ADD CONSTRAINT `promosi_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `login_admin` (`id_admin`);

--
-- Ketidakleluasaan untuk tabel `reschedule`
--
ALTER TABLE `reschedule`
  ADD CONSTRAINT `reschedule_ibfk_1` FOREIGN KEY (`kode_tiket`) REFERENCES `tiket_penumpang` (`kode_tiket`);

--
-- Ketidakleluasaan untuk tabel `tiket_penumpang`
--
ALTER TABLE `tiket_penumpang`
  ADD CONSTRAINT `tiket_penumpang_ibfk_1` FOREIGN KEY (`kode_tiket`) REFERENCES `pesan_tiket` (`kode_tiket`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
