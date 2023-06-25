-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jun 2023 pada 10.37
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abikan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` varchar(255) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `NIP` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `jadwal_praktik` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama`, `NIP`, `jenis_kelamin`, `no_hp`, `jadwal_praktik`) VALUES
('080ee26bd2', 'Dr.Audy', '13829489333', 'Perempuan', '08899286732', 'Senin,Selasa'),
('335d1e2d25', 'Dr.Nadhifa Zachra', '319894588KEP', 'Perempuan', '08976658334', 'Selasa,Jumat'),
('586a51bdd3', 'Dr.Pidahayati', '12383898223', 'Perempuan', '0889922331', 'Kamis,Jumat'),
('ef053e80a2', 'Dr.Yuna Kunisa', '318385840121', 'Perempuan', '08928434343', 'Rabu,Kamis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `ID_PASIEN` varchar(255) NOT NULL,
  `NIK` varchar(255) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Tanggal_Lahir` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Jenis_Kelamin` varchar(255) NOT NULL,
  `No_HP` varchar(255) NOT NULL,
  `Gol_Darah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`ID_PASIEN`, `NIK`, `Nama`, `Tanggal_Lahir`, `Alamat`, `Jenis_Kelamin`, `No_HP`, `Gol_Darah`) VALUES
('282b823426', '317504280003', 'Zubaedah', '1990-07-19', 'Jl. in aja dulu', 'Perempuan', '082134567', 'O'),
('2b9c632d4f', '31745373843289', 'Luna Maya', '1997-04-23', 'Jl.  Kita Bersama no 33', 'Perempuan', '08923291313', 'AB'),
('5262e7b8ea', '314358942342', 'Aura Nur Zapira', '1999-04-20', 'Jl. Kita Bisa yuk balikan No 17', 'Perempuan', '082843192419', 'O'),
('5899ebed27', '09861313', 'Biji Kacang', '2023-06-08', 'Jl melkar tengah bulet', 'Perempuan', '98692390', 'AB'),
('649555618d897', '317456788351', 'Zaenap ', '1994-08-16', 'Jl. Maju Mundur', 'Perempuan', '0896370164', 'B'),
('6495561bd16f1', '317456787583', 'Rismania', '2023-06-05', 'Jl. Maju Mundur', 'Perempuan', '0963907891', 'B'),
('6495bcc4339a8', '312579817652', 'Zaki Muamalah', '1993-10-11', 'Jl. Kaliwurung 17', 'Laki Laki', '0873913658242', 'AB'),
('786c316b5b', '123213124', 'Cahya', '2013-05-09', 'Jalan in aja', 'Perempuan', '1241414', 'O'),
('9887216ce5', '198238914939', 'Sashmita', '1998-04-22', 'Jl Kagina Tang No ', 'Perempuan', '08990123', 'AB'),
('ce1218c4ea', '3193940578340', 'Claudya Saliya', '2000-04-18', 'Jl Kuharap kita bisa bersama terus', 'Perempuan', '08821454583443', 'O'),
('d058c967d3', '123894791213', 'Aulia Farahmita', '2004-08-17', 'Jl Reveliation No 21', 'Perempuan', '082382837819', 'AB');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `ID_PASIEN` varchar(255) DEFAULT NULL,
  `Nama_Pasien` varchar(255) DEFAULT NULL,
  `Nama_Dokter` varchar(255) DEFAULT NULL,
  `Pelayanan` varchar(255) DEFAULT NULL,
  `Keterangan_Penanganan` varchar(255) DEFAULT NULL,
  `Resep_Obat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`ID_PASIEN`, `Nama_Pasien`, `Nama_Dokter`, `Pelayanan`, `Keterangan_Penanganan`, `Resep_Obat`) VALUES
('5899ebed27', 'Biji Kacang', 'Dr.Nadhifa Zachra', 'Konseling', 'Bagaimana caranya CU', 'Obat Kuat - 10Mg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penanganan`
--

CREATE TABLE `penanganan` (
  `id_pasien` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `pelayanan` varchar(255) DEFAULT NULL,
  `tanggal` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penanganan`
--

INSERT INTO `penanganan` (`id_pasien`, `nama`, `pelayanan`, `tanggal`) VALUES
('2b9c632d4f', 'Luna Maya', 'Pemeriksaan Bayi', '2023-06-01'),
('282b823426', 'Zubaedah', 'Pemeriksaan Anak', '2023-06-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `selesai`
--

CREATE TABLE `selesai` (
  `ID_pasien` varchar(255) DEFAULT NULL,
  `Nama` varchar(255) DEFAULT NULL,
  `Pelayanan` varchar(255) DEFAULT NULL,
  `tanggal` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `selesai`
--

INSERT INTO `selesai` (`ID_pasien`, `Nama`, `Pelayanan`, `tanggal`) VALUES
('786c316b5b', 'Cahya', 'Imunisasi', '2023-05-31'),
('1be4ecc59d', 'Annisa Azalea', 'Persalinan', '2023-05-31'),
('e051182c22', 'Agil', 'Keluarga Berencana', '2023-05-31'),
('2b9c632d4f', 'Luna Maya', 'Imunisasi', '2023-06-01'),
('1be4ecc59d', 'Annisa Azalea', 'Pemeriksaan Ibu Nifas', '2023-06-01'),
('786c316b5b', 'Cahya', 'Persalinan', '2023-06-01'),
('786c316b5b', 'Cahya', 'Konseling', '2023-06-01'),
('786c316b5b', 'Cahya', 'Konseling', '2023-06-01'),
('602b44bd31', 'ASDASDHUHU', 'Persalinan', '2023-06-01'),
('e051182c22', 'Agil', 'Persalinan', '2023-06-01'),
('e051182c22', 'Agil', 'Pemeriksaan Anak', '2023-06-01'),
('9887216ce5', 'Sashmita', 'Persalinan', '2023-06-01'),
('2b9c632d4f', 'Luna Maya', 'Keluarga Berencana', '2023-06-01'),
('2b9c632d4f', 'Luna Maya', 'Imunisasi', '2023-06-01'),
('2b9c632d4f', 'Luna Maya', 'Imunisasi', '2023-06-01'),
('602b44bd31', 'ASDASDHUHU', 'Persalinan', '2023-06-01'),
('d058c967d3', 'Aulia Farahmita', 'Pemeriksaan Anak', '2023-06-01'),
('d7c89dd24e', 'jafar', 'Persalinan', '2023-06-06'),
('249de24337', 'handowo', 'Pemeriksaan Bayi', '2023-06-05'),
('5899ebed27', 'Biji Kacang', 'Konseling', '2023-06-08'),
('282b823426', 'Zubaedah', 'Konseling', '2023-06-01'),
('2b9c632d4f', 'Luna Maya', 'Konseling', '2023-06-01'),
('9887216ce5', 'Sashmita', 'Persalinan', '2023-06-01'),
('9887216ce5', 'Sashmita', 'Pemeriksaan Anak', '2023-06-02'),
('2b9c632d4f', 'Luna Maya', 'Pemeriksaan Anak', '2023-06-09'),
('5262e7b8ea', 'Aura Nur Zapira', 'Pemeriksaan Bayi', '2023-06-06'),
('282b823426', 'Zubaedah', 'Pemeriksaan Bayi', '2023-06-01'),
('1be4ecc59d', 'Annisa Azalea', 'Pemeriksaan Bayi', '2023-06-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `selesaimembayar`
--

CREATE TABLE `selesaimembayar` (
  `ID_Pasien` varchar(255) DEFAULT NULL,
  `Nama_Pasien` varchar(255) DEFAULT NULL,
  `Nama_Dokter` varchar(255) DEFAULT NULL,
  `Pelayanan` varchar(255) DEFAULT NULL,
  `Keterangan_Penanganan` varchar(255) DEFAULT NULL,
  `Resep_Obat` varchar(255) DEFAULT NULL,
  `Harga_Obat` varchar(255) DEFAULT NULL,
  `Grand_Total` varchar(255) DEFAULT NULL,
  `Bayar` varchar(255) DEFAULT NULL,
  `Kembali` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `selesaimembayar`
--

INSERT INTO `selesaimembayar` (`ID_Pasien`, `Nama_Pasien`, `Nama_Dokter`, `Pelayanan`, `Keterangan_Penanganan`, `Resep_Obat`, `Harga_Obat`, `Grand_Total`, `Bayar`, `Kembali`) VALUES
('d058c967d3', 'Aulia Farahmita', 'Dr.Nadhifa Zachra', 'Pemeriksaan Anak', 'Baik', 'Baik', '23000', '173,000', '200000', '27,000'),
('d7c89dd24e', 'jafar', 'Dr.huyukang', 'Persalinan', 'lahir dengan normal', 'obat pasca persalinan', '23000', '5,023,000', '5100000', '77,000'),
('249de24337', 'handowo', 'Dr.Audy', 'Pemeriksaan Bayi', 'asdsadasd', 'asdsadsad', '12000', '2,012,000', '2100000', '88,000'),
('282b823426', 'Zubaedah', 'Dr.Yuna Kunisa', 'Konseling', 'asd', 'asd', '2000', '202,000', '210000', '8,000'),
('282b823426', 'Zubaedah', 'Dr.Pidahayati', 'Pemeriksaan Bayi', 'ok', 'ok', '2000', '202,000', '210000', '8,000'),
('2b9c632d4f', 'Luna Maya', 'Dr.huyukang', 'Konseling', 'OKE ', 'OKE', '20000', '220,000', '250000', '30,000'),
('2b9c632d4f', 'Luna Maya', 'Dr.Yuna Kunisa', 'Pemeriksaan Anak', 'OKE', 'OKE', '20000', '220,000', '250000', '30,000'),
('1be4ecc59d', 'Annisa Azalea', 'Dr.huyukang', 'Pemeriksaan Bayi', 'sd', 'sd', '23000', '2,023,000', '2100000', '77,000'),
('5262e7b8ea', 'Aura Nur Zapira', 'Dr.Pidahayati', 'Pemeriksaan Bayi', 'OK', 'OK', '24000', '2,024,000', '2050000', '26,000'),
('9887216ce5', 'Sashmita', 'Dr.Yuna Kunisa', 'Pemeriksaan Anak', 'OK', 'OK', '23000', '173,000', '200000', '27,000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `email` varchar(255) NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`email`, `id_user`, `nama`, `password`) VALUES
('hdfg@m.com', '2167734b-df8e-11ed-8355-2cfda178c289', 'fa', '$2y$10$zwKvPvpX6roJXFxaSLW90.pst9vCOw.eFelRGV966GP3dV7zZBcri');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`ID_PASIEN`),
  ADD UNIQUE KEY `Nama` (`Nama`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD KEY `ID_PASIEN` (`ID_PASIEN`),
  ADD KEY `Nama_Pasien` (`Nama_Pasien`),
  ADD KEY `Nama_Dokter` (`Nama_Dokter`),
  ADD KEY `Pelayanan` (`Pelayanan`);

--
-- Indeks untuk tabel `penanganan`
--
ALTER TABLE `penanganan`
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `nama` (`nama`),
  ADD KEY `pelayanan` (`pelayanan`),
  ADD KEY `tanggal` (`tanggal`);

--
-- Indeks untuk tabel `selesai`
--
ALTER TABLE `selesai`
  ADD KEY `ID_pasien` (`ID_pasien`),
  ADD KEY `Nama` (`Nama`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_3` FOREIGN KEY (`Nama_Dokter`) REFERENCES `dokter` (`nama`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `penanganan`
--
ALTER TABLE `penanganan`
  ADD CONSTRAINT `penanganan_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`ID_PASIEN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penanganan_ibfk_2` FOREIGN KEY (`nama`) REFERENCES `pasien` (`Nama`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
