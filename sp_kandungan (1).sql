-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 24 Nov 2019 pada 08.31
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sp_kandungan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` varchar(5) NOT NULL,
  `nm_gejala` varchar(191) NOT NULL,
  `cf` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `nm_gejala`, `cf`) VALUES
('G01', 'Kehilangan Nafsu Makan ', '0.4'),
('G02', 'Mual Dan Muntah ', '0.4'),
('G03', 'Tubuh Rasa Lelah', '0.2'),
('G04', 'Lemas', '0.2'),
('G05', 'Warna Fases Berubah Menjadi Pucat Seperti Dempul', '1'),
('G06', 'Warna Urine Berubah Menjadi Gelap Seperti Teh', '1'),
('G07', 'Kulit Dan Mata Menjadi Kuning', '0.6'),
('G08', 'Gatal-gatal Pada kulit', '0.2'),
('G09', 'Nyeri Perut Dan Perut Membesar', '0.6'),
('G10', 'Pembekakan Pada Tungkai Dan Kaki', '0.8'),
('G11', 'Medah Memar', '0.4'),
('G12', 'Batuk Yang Berlangsung lama (3 minggu atau lebih), Biasanya berdahak', '0.2'),
('G13', 'Batuk Mengeluarkan Darah', '0.8'),
('G14', 'Berkeringat pada malam hari', '0.6'),
('G15', 'Penurunan berat badan', '0.4'),
('G16', 'Demam dan menggigil', '0.4'),
('G17', 'Nyeri dada saat bernafas dan batuk', '0.8'),
('G18', 'Cenderung mengasingkan diri dari orang lain', '0.6'),
('G19', 'Mudah marah dan depresi', '0.4'),
('G20', 'Perubahan pola tidur', '0.2'),
('G21', 'Kurang kosentrasi dan motivasi', '0.6'),
('G22', 'Kesulitan dalam mengerjakan tugas sekolah', '0.4'),
('G23', 'Respon emosional yang ganjil, seperti ekspresi wajah dan nada bicara yang tidak berubah (monoton)', '0.6'),
('G24', 'Sulit untuk merasa senang dan puas', '0.6'),
('G25', 'Enggan bersosialisasi dan lebih memilih berdiam diri dirumah', '0.4'),
('G26', 'Kehilangan minat dan motivasi pada berbagai aktivitas, seperti menjalin hubungan atau berhubungan seks', '0.6'),
('G27', 'Tidak nyaman berada dekat dengan orang lain, dan tidak mau memulai percakapan', '0.6'),
('G28', 'Tidak peduli dengan penampilan dan kebersihan diri', '0.6'),
('G29', 'Batuk kronis yang dapat disertai dahak atau darah', '0.4'),
('G30', 'Suara serak', '0.2'),
('G31', 'Berat badan turun drastis', '0.6'),
('G32', 'Sesak nafas', '0.8'),
('G33', 'Sakit kepala', '0.6'),
('G34', 'Nyeri tulang dan sendi', '0.8'),
('G35', 'Pembengkakan dileher dan wajah', '0.8'),
('G36', 'Penurunan daya ingat', '1'),
('G37', 'Mati rasa dilengan dan tungkai', '1'),
('G38', 'Gangguan keseimbangan', '0.8'),
('G39', 'Muncul ruam di kulit', '0.6'),
('G40', 'Diare', '0.4'),
('G41', 'Pembengkakan kelenjer getah bening', '1'),
('G42', 'Sakit perut', '0.4'),
('G43', 'Sakit tenggorokan dan sariawan', '0.2'),
('G44', 'Herpes Zoster', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `umur` varchar(10) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl` varchar(10) NOT NULL,
  `id_penyakit` varchar(11) NOT NULL,
  `rule1` varchar(11) NOT NULL,
  `rule2` varchar(11) NOT NULL,
  `rule3` varchar(11) NOT NULL,
  `rule4` varchar(11) NOT NULL,
  `rule5` varchar(11) NOT NULL,
  `hasil_max` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konsultasi`
--

INSERT INTO `konsultasi` (`id`, `nama`, `umur`, `jk`, `alamat`, `tgl`, `id_penyakit`, `rule1`, `rule2`, `rule3`, `rule4`, `rule5`, `hasil_max`) VALUES
(6, 'Nadilla Fitrilisya gunawan', '22', 'Perempuan', 'Jalan Kampung Tanjung', '06-04-2019', 'P01', '27', '5', '0', '8', '27', '27'),
(7, 'Nadilla Fitrilisya gunawan', '22', 'Perempuan', 'Jalan Kampung Tanjung', '06-04-2019', 'P01', '27', '5', '0', '8', '27', '27'),
(8, 'Nadilla Fitrilisya gunawan', '22', 'Perempuan', 'Jalan Kampung Tanjung', '06-04-2019', 'P04', '27', '68', '45', '129', '90', '129'),
(9, 'Nadilla Fitrilisya gunawan', '22', 'Perempuan', 'Jalan Kampung Tanjung', '06-04-2019', 'P04', '208', '176', '176', '224', '80', '224'),
(10, 'Nadilla Fitrilisya gunawan', '22', 'Perempuan', 'Jalan Kampung Tanjung', '06-04-2019', 'P01', '32.4', '31.2', '10.8', '7.2', '0', '32.4'),
(11, 'Nadilla Fitrilisya gunawan', '22', 'Perempuan', 'Jalan Kampung Tanjung', '06-04-2019', 'P01', '64.8', '31.2', '21.6', '39.6', '5.6', '64.8');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` varchar(5) NOT NULL,
  `nm_penyakit` varchar(50) NOT NULL,
  `ket` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `nm_penyakit`, `ket`) VALUES
('P01', 'Liver', 'Penyakit liver atau hati adalah istilah yang digunakan ketika hati mengalami gangguan sehingga tidak berfungsi sebagaimana mestinya Liver atau hati merupakan organ terbesar kedua dalam tubuh manusia dengan ukuran kira-kira sebesar bola rugby dan memiliki dua bagian (lobus) kanan dan kiri. Liver terletak di perut kanan atas tepat di bawah tulang rusuk'),
('P02', 'Tubercolusis(TBC)', 'TBC atau tuberkulosis (TB) tulang belakang dikenal juga dengan nama penyakit Pott, yaitu tuberkulosis yang terjadi di luar paru-paru, di mana menjangkiti tulang belakang. Penyakit ini umumnya menginfeksi tulang belakang pada area toraks (dada belakang) bagian bawah dan vertebra lumbalis (pinggang belakang) atas.'),
('P03', 'Skizofrenia', 'Skizofrenia adalah gangguan mental yang terjadi dalam jangka panjang. Gangguan ini menyebabkan penderitanya mengalami halusinasi, delusi atau waham, kekacauan berpikir, dan perubahan perilaku. Gejala tersebut merupakan gejala dari psikosis, yaitu kondisi di mana penderitanya kesulitan membedakan kenyataan dengan pikirannya sendiri'),
('P04', 'Kanker Paru-paru', 'Kanker paru-paru merupakan penyakit dengan ciri khas adanya pertumbuhan sel yang tidak terkontrol pada jaringan paru-paru. Bila tidak dirawat, pertumbuhan sel ini dapat menyebar ke luar dari paru-paru melalui suatu proses yang disebut metastasis ke jaringan yang terdekat atau bagian tubuh yang lainnya '),
('P05', 'HIV/AIDS', 'HIV (human immunodeficiency virus) adalah virus yang merusak sistem kekebalan tubuh, dengan menginfeksi dan menghancurkan sel CD4. Semakin banyak sel CD4 yang akan semakin lemah, sehingga rentan diserang berbagai penyakit.  Infeksi HIV yang tidak segera ditangani akan berkembang menjadi kondisi serius yang disebut AIDS (Acquired Immune Deficiency Syndrome). AIDS adalah stadium akhir dari infeksi virus HIV. Pada tahap ini, kemampuan tubuh untuk melawan infeksi sudah hilang sepenuhnya dihancurkan, kekebalan tubuh');

-- --------------------------------------------------------

--
-- Struktur dari tabel `solusi`
--

CREATE TABLE `solusi` (
  `id_solusi` varchar(5) NOT NULL,
  `id_penyakit` varchar(50) NOT NULL,
  `solusi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `solusi`
--

INSERT INTO `solusi` (`id_solusi`, `id_penyakit`, `solusi`) VALUES
('S01', 'P01, P03, P04', 'Rawat Inap'),
('S02', 'P01', 'Terapi Medika merfosa'),
('S03', 'P01', 'Diet Rendah Lemak Dan Gula'),
('S04', 'P01', 'Meningkatkan daya tahan tubuh'),
('S05', 'P01', 'Hindari Stres'),
('S06', 'P02', 'Minum Obat Rutin'),
('S07', 'P02', 'Kontrol Rutin Terjadwal'),
('S08', 'P02', 'Hindari Aktifitas Fisik Yang Berat'),
('S09', 'P02', 'Memakai Masker'),
('S10', 'P02', 'Menjaga Asupan Makanan'),
('S11', 'P03', 'Konsultasi Dengan Tenaga kesehatan'),
('S12', 'P03', 'Pendamping Keluarga'),
('S13', 'P04', 'Minum Obat Anti Kanker'),
('S14', 'P04', 'Hindari Aktifitas Perkembangan Kanker'),
('S15', 'P04', 'Jaga Daya Tahan tubuh'),
('S16', 'P05', 'Pendampingan Konselor'),
('S17', 'P05', 'Perbanyak aktifitas Positif'),
('S18', 'P05', 'Memakai Pengamanan Ketika Berhubungan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `umur` varchar(10) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `email` varchar(32) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `level` varchar(11) NOT NULL,
  `tgl` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `umur`, `jk`, `email`, `alamat`, `level`, `tgl`) VALUES
(1, 'admin', '$2y$10$OL28w5EEWZ19zRkWaWnmAeNfMtZPHOIFV3bazkgHHr7tpWL0mkQwq', 'Yerri Kurnia Febrina', '21', 'Perempuan', 'inutfebrina@gmail.com', 'Lubeg', 'admin', ''),
(11, 'user', '$2y$10$jFzLWW/oLZ7b19u4qvJqJuLkcEo0yDQBynFbvpj1y/q3fTB9spBjK', 'Nadilla Fitrilisya gunawan', '22', 'Perempuan', 'dwinarulita@gmail.com', 'Jalan Kampung Tanjung', 'user', '06-04-2019');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indeks untuk tabel `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indeks untuk tabel `solusi`
--
ALTER TABLE `solusi`
  ADD PRIMARY KEY (`id_solusi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
