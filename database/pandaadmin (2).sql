-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jan 2021 pada 09.16
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pandaadmin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `no_urut` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `asal` varchar(255) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `no_surat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`no_urut`, `tanggal`, `asal`, `keterangan`, `no_surat`) VALUES
(1, '2020-10-01', 'kediri', 'surat permintaan tanah', 178192189),
(2, '2020-10-02', 'malang', 'surat permintaan pembuatan aplikasi web', 908310923);

-- --------------------------------------------------------

--
-- Struktur dari tabel `instansi`
--

CREATE TABLE `instansi` (
  `header_1` varchar(128) NOT NULL,
  `header_2` varchar(128) NOT NULL,
  `header_3` varchar(128) NOT NULL,
  `header_4` varchar(128) NOT NULL,
  `header_5` varchar(128) NOT NULL,
  `logo` varchar(256) NOT NULL,
  `id` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `instansi`
--

INSERT INTO `instansi` (`header_1`, `header_2`, `header_3`, `header_4`, `header_5`, `logo`, `id`) VALUES
('UNIVERSITAS NEGERI MALANG ', 'FAKULTAS MANAJEMEN', 'PENDIDIKAN ADMINISTRASI PERKANTORAN', 'Jalan Semarang No.5, Sumbersari, kec.Lowokwaru, Kota Malang, Jawa Timur 65145', '(0341)551312', '1604453989.png', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyusutan`
--

CREATE TABLE `penyusutan` (
  `no_urut` int(11) NOT NULL,
  `surat` varchar(255) NOT NULL,
  `id_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penyusutan`
--

INSERT INTO `penyusutan` (`no_urut`, `surat`, `id_user`) VALUES
(7, 'makan malam', 7),
(8, 'makan malam', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjam`
--

CREATE TABLE `pinjam` (
  `no_urut` int(11) NOT NULL,
  `nomor_peminjam` varchar(11) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `nip` int(11) NOT NULL,
  `nama_peminjam` varchar(255) NOT NULL,
  `unit_kerja` varchar(255) NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `dokumen_dipinjam` varchar(255) NOT NULL,
  `id_user` int(5) DEFAULT NULL,
  `status` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pinjam`
--

INSERT INTO `pinjam` (`no_urut`, `nomor_peminjam`, `tanggal_pinjam`, `nip`, `nama_peminjam`, `unit_kerja`, `tanggal_kembali`, `dokumen_dipinjam`, `id_user`, `status`) VALUES
(5, '101321', '2020-02-02', 21211, 'Abdul Munir', '212', '0021-12-23', 'makan malam', 0, 'Sudah Dikembalikan'),
(6, '101321', '0002-12-21', 21211, 'Rich Brian', '321', '0131-12-31', 'makan malam', 0, 'Sudah Dikembalikan'),
(7, '2131', '0121-02-21', 21, 'Thiery Henry', 'kos', '0131-01-31', 'makan malam', 7, 'Sudah Dikembalikan'),
(8, '0101321', '2131-02-02', 31231, '321312', '321', '0021-12-31', 'makan malam', NULL, 'Sudah Dikembalikan'),
(9, 'DF2121', '2222-02-22', 21211, 'okele', 'okle', '2222-02-02', 'makan malam', NULL, NULL),
(10, '22', '2222-02-22', 321312, 'gauadsa', 'kos', '0222-02-22', '3213', 10, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `retensi`
--

CREATE TABLE `retensi` (
  `no_urut` int(11) NOT NULL,
  `surat` varchar(255) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_berakhir` date NOT NULL,
  `id_user` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `retensi`
--

INSERT INTO `retensi` (`no_urut`, `surat`, `tanggal_mulai`, `tanggal_berakhir`, `id_user`) VALUES
(9, 'makan malam', '2222-02-22', '2222-02-22', 0),
(10, 'makan malam', '2222-02-22', '2222-03-22', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `no_urut` int(11) NOT NULL,
  `dari` varchar(255) NOT NULL,
  `kepada` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kota` varchar(128) NOT NULL,
  `indeks` varchar(128) NOT NULL,
  `no_surat` varchar(128) NOT NULL,
  `lampiran` varchar(255) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `tanggal_simpan` date NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `kode_simpan` varchar(128) NOT NULL,
  `pokok_soal` varchar(128) NOT NULL,
  `isi_ringkasan` varchar(1000) NOT NULL,
  `berkas` varchar(255) DEFAULT NULL,
  `laci` varchar(128) DEFAULT NULL,
  `Guide` varchar(128) DEFAULT NULL,
  `Map` varchar(128) DEFAULT NULL,
  `nomor_berkas` varchar(128) NOT NULL,
  `id_user` int(5) DEFAULT NULL,
  `tersier` varchar(256) DEFAULT NULL,
  `kode_1` varchar(256) DEFAULT NULL,
  `kode_2` varchar(256) DEFAULT NULL,
  `kode_3` varchar(256) DEFAULT NULL,
  `kode_4` varchar(256) DEFAULT NULL,
  `kode_5` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat_keluar`
--

INSERT INTO `surat_keluar` (`no_urut`, `dari`, `kepada`, `alamat`, `kota`, `indeks`, `no_surat`, `lampiran`, `tanggal_surat`, `perihal`, `tanggal_simpan`, `kategori`, `kode_simpan`, `pokok_soal`, `isi_ringkasan`, `berkas`, `laci`, `Guide`, `Map`, `nomor_berkas`, `id_user`, `tersier`, `kode_1`, `kode_2`, `kode_3`, `kode_4`, `kode_5`) VALUES
(1, '', 'UM', 'Banjarsari RT. 01 RW. 03 Kec. Cerme, Kab. Gresik', '2147483647', '21231', '2147483647', '-1', '2020-12-31', 'makan malam', '2020-12-31', 'Abjad', '2147483647', '', 'okoe', '1605168775.png', '1', '2', '4', '5', 0, '3', 'ok1', 'okeo23', 'oke3', 'oke5', NULL),
(2, '', 'Bapak Hamndan', 'Banjarsari RT. 01 RW. 03 Kec. Cerme, Kab. Gresik', '2147483647', '21', '2147483647', '-1', '2020-02-02', 'makan malam', '2020-12-31', 'Nomor', '2147483647', '', 'oke', '1605171375.png', '', '', '', '', 0, NULL, 'oke1', 'oke2', 'oke3', '', NULL),
(3, '', 'UM', 'Banjarsari RT. 01 RW. 03 Kec. Cerme, Kab. Gresik', '2147483647', '21', '2147483647', '-1', '2020-12-31', 'makan malam', '2020-12-31', 'Abjad', '2147483647', '', 'okoek', '1605172236.png', '', '', '', '', 0, NULL, '1', '2', '3', '4', NULL),
(4, '', 'UM', 'Banjarsari RT. 01 RW. 03 Kec. Cerme, Kab. Gresik', '21231', '2147483647', '21231', '-1', '2020-12-31', 'makan malam', '2020-12-31', 'Wilayah', '2147483647', '', 'wqw', '1605176713.png', '', '', '', '', 0, NULL, 'oke1', 'okeo222', 'oke3', 'oke4', NULL),
(5, '-', 'UM', 'Banjarsari RT. 01 RW. 03 Kec. Cerme, Kab. Gresik', '2147483647', '21', '2147483647', '-1', '2019-12-31', 'makan malam', '2020-12-31', 'Abjad', '2147483647', '', 'koek', '1605183699.png', '5', '4', '2', '1', 7, '3', '0', '0', '0', '0', NULL),
(6, '-', 'UM', 'Banjarsari RT. 01 RW. 03 Kec. Cerme, Kab. Gresik', '21', '2147483647', '21', '-1', '2020-12-30', 'makan malam', '2020-12-31', 'Abjad', '2147483647', '', 'okwq', '1605188495.png', '1', '234', '5', '6', 7, '4', '2', '0', '5', '1', NULL),
(7, '', '1', '2', '4', '5', '4', '21', '5555-05-05', '12', '2222-02-22', 'Wilayah', '21', '', '12', '1605249247.png', '', '', '', '', 0, NULL, '11', '22', '33', '44', '55'),
(8, '', 'UM', 'Banjarsari RT. 01 RW. 03 Kec. Cerme, Kab. Gresik', 'Malang', '2147483647', '21231', '-1', '2020-12-31', 'makan malam', '2019-12-31', 'Subject', '2147483647', '5', 'dwq', '1605300877.png', '', '', '', '', 0, NULL, '111', '222', '333', '444', NULL),
(9, '-', 'UM', 'Banjarsari RT. 01 RW. 03 Kec. Cerme, Kab. Gresik', 'Malang', '2147483647', '21', '-1', '2020-12-31', 'makan malam', '2020-12-31', 'Wilayah', '2147483647', '', 'okeoe', '1605301723.png', '', '', '', '', 7, NULL, '44', '33', '22', '11', '00'),
(10, '-', 'UM', 'Banjarsari RT. 01 RW. 03 Kec. Cerme, Kab. Gresik', 'Malang', '1002131', '21', '-1', '2020-12-31', 'makan malam', '2020-12-31', 'Wilayah', '2147483647', '', '031', '1605301963.png', '', '', '', '', 7, NULL, '1', '2', '3', '5', '3'),
(11, '-', 'UM', 'Banjarsari RT. 01 RW. 03 Kec. Cerme, Kab. Gresik', 'Malang', '21', '1002131', '-1', '2020-12-31', 'makan malam', '2222-12-30', 'Wilayah', '21', '', '121', '1605302083.png', '', '', '', '', 7, NULL, '1', '2', '3', '5', '4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `no_urut` int(11) NOT NULL,
  `dari` varchar(255) NOT NULL,
  `kepada` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kota` varchar(128) NOT NULL,
  `indeks` varchar(128) NOT NULL,
  `no_surat` varchar(128) NOT NULL,
  `lampiran` varchar(500) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `tanggal_simpan` date NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `surat_rapat` tinyint(1) NOT NULL DEFAULT 0,
  `kode_simpan` varchar(128) NOT NULL,
  `pokok_soal` varchar(128) NOT NULL,
  `isi_ringkasan` varchar(1000) NOT NULL,
  `berkas` varchar(255) NOT NULL,
  `laci` varchar(128) DEFAULT NULL,
  `Guide` varchar(128) DEFAULT NULL,
  `Map` varchar(128) DEFAULT NULL,
  `nomor_berkas` varchar(128) DEFAULT NULL,
  `id_user` int(5) DEFAULT NULL,
  `tersier` varchar(256) DEFAULT NULL,
  `kode_1` varchar(256) DEFAULT NULL,
  `kode_2` varchar(256) DEFAULT NULL,
  `kode_3` varchar(256) DEFAULT NULL,
  `kode_4` varchar(256) DEFAULT NULL,
  `kode_5` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat_masuk`
--

INSERT INTO `surat_masuk` (`no_urut`, `dari`, `kepada`, `alamat`, `kota`, `indeks`, `no_surat`, `lampiran`, `tanggal_surat`, `perihal`, `tanggal_simpan`, `kategori`, `surat_rapat`, `kode_simpan`, `pokok_soal`, `isi_ringkasan`, `berkas`, `laci`, `Guide`, `Map`, `nomor_berkas`, `id_user`, `tersier`, `kode_1`, `kode_2`, `kode_3`, `kode_4`, `kode_5`) VALUES
(1, 'PT. Damico Indomarta', '', 'Banjarsari RT. 01 RW. 03 Kec. Cerme, Kab. Gresik', 'oke', '21', '2147483647', '2', '2020-12-31', 'makan malam', '2020-12-31', 'Abjad', 1, '2147483647', '', 'oke', '1605168649.png', '', '', '', '', 0, '33', '4', '3', '2', '1', ''),
(2, 'PT. Damico Indomarta', '', 'Banjarsari RT. 01 RW. 03 Kec. Cerme, Kab. Gresik', '2147483647', '21', '2147483647', '-1', '2020-12-31', 'makan malam', '2020-12-31', 'Kronologi', 0, '2147483647', '', 'oke', '1605169647.png', '', '', '', '', 0, NULL, 'oke', 'okeo', 'oke', 'oke', NULL),
(3, 'PT. Damico Indomarta', '', 'Banjarsari RT. 01 RW. 03 Kec. Cerme, Kab. Gresik', '2147483647', '21', '2147483647', '-2', '2020-12-31', 'makan malam', '2020-11-22', 'Subject', 0, '2147483647', '21', 'okee', '1605169692.png', '', '', '', '', 0, NULL, 'oke', 'oke', 'oke', 'oke', NULL),
(4, 'PT. Damico Indomartaan', '', 'Banjarsari RT. 01 RW. 03 Kec. Cerme, Kab. Gresik', '2147483647', '21', '2147483647', '-2', '2020-12-31', 'makan malam', '2020-11-22', 'Kronologi', 0, '2147483647', '21', 'okokokok', '1605169712.png', '', '', '', '', 0, NULL, 'oke', 'oke', 'oke', 'oke', NULL),
(5, 'PT. Damico Indomartaan 21', '', 'Banjarsari RT. 01 RW. 03 Kec. Cerme, Kab. Gresik', '2147483647', '21', '2147483647', '-2', '2020-12-31', 'makan malam', '2020-11-22', 'Wilayah', 0, '2147483647', '21', 'kokoke', '1605169736.png', '5', '4', '2', '1', 0, '3', 'oke', 'oke', 'oke', 'oke', NULL),
(6, 'PT. Damico Indomartaan 21', '', 'Banjarsari RT. 01 RW. 03 Kec. Cerme, Kab. Gresik', '2147483647', '21', '2147483647', '-2', '2020-12-31', 'makan malam', '2020-11-22', 'Subject', 0, '2147483647', '21', 'okokokoe', '1605169797.png', '', '', '', '', 0, NULL, 'oke', 'oke', 'oke', 'oke', NULL),
(7, 'PT. Damico Indomarta', '', 'Banjarsari RT. 01 RW. 03 Kec. Cerme, Kab. Gresik', '2147483647', '21', '2147483647', '-1', '2020-12-31', 'makan malam', '2020-12-31', 'Nomor', 0, '2147483647', '', 'okoek', '1605170140.png', '', '', '', '', 0, NULL, 'okok1', 'okok2', 'okok3', NULL, NULL),
(8, 'PT. Damico Indomarta', '', 'Banjarsari RT. 01 RW. 03 Kec. Cerme, Kab. Gresik', '2147483647', '21', '2147483647', '-1', '2020-12-31', 'makan malam', '2020-12-31', 'Subject', 0, '2147483647', '11', 'koewkq', '1605171880.png', '', '', '', '', 0, NULL, 'oke', 'okeo', 'oke', 'oke', NULL),
(9, 'PT. Damico Indomarta', '', 'Banjarsari RT. 01 RW. 03 Kec. Cerme, Kab. Gresik', '21', '2147483647', '21', '-1', '2019-12-31', '21', '2020-12-31', 'Abjad', 0, 'okwoq', '', 'w21', '1605177568.png', '', '', '', '', 7, '3', '1', '2', '2', '4', NULL),
(10, 'PT. Damico Indomarta', '', 'Banjarsari RT. 01 RW. 03 Kec. Cerme, Kab. Gresik', '1002131', '21', '1002131', '-1', '2020-12-31', 'makan malam', '2020-12-31', 'Subject', 0, 'oko2', '3', 'okoek', '1605186930.png', '1', '2', '5', '6', 7, '4', '3', '3', '3', '3', NULL),
(11, 'PT. Damico Indomarta', '', 'Banjarsari RT. 01 RW. 03 Kec. Cerme, Kab. Gresik', '21231', '2147483647', '21231', '-1', '2020-12-31', 'makan malam', '2019-12-31', 'Wilayah', 0, '2147483647', '', '21', '1605249034.png', '', '', '', '', 0, NULL, '1', '2', '34', '678', NULL),
(12, 'PT. Damico Indomarta', '', 'Banjarsari RT. 01 RW. 03 Kec. Cerme, Kab. Gresik', '221', '21', '221', '-1', '2019-12-31', 'makan malam', '2020-12-31', 'Wilayah', 0, '2147483647', '', '21', '1605249520.png', '', '', '', '', 10, NULL, '1', '2', '3', '4', NULL),
(13, 'PT. Damico Indomarta', '', 'Banjarsari RT. 01 RW. 03 Kec. Cerme, Kab. Gresik', '21', '2147483647', '21', '-1', '2020-11-02', 'makan malam', '2222-02-02', 'Wilayah', 0, '2', '', '231', '1605249688.png', '', '', '', '', 10, NULL, '1', '2', '3', '42', '21'),
(14, 'PT. Damico Indomarta', '', 'Banjarsari RT. 01 RW. 03 Kec. Cerme, Kab. Gresik', '2147483647', '21', '2147483647', '-1', '2020-12-30', 'makan malam', '2020-12-31', 'Wilayah', 0, '2147483647', '', '321', '1605249812.png', '', '', '', '', 0, NULL, '1', '23', '4', '2', '7'),
(15, '1', '', '2', '5', '4', '5', '55', '0005-02-05', 'makan siang gan', '2020-12-31', 'Wilayah', 0, '21', '', 'okoek', '1605300568.png', '', '', '', '', 0, NULL, '1', '2', '3', '5', '4'),
(16, 'PT. Damico Indomarta', '', 'Banjarsari RT. 01 RW. 03 Kec. Cerme, Kab. Gresik', 'Malang', '21', '21', '-5', '2122-12-31', '21', '2222-02-22', 'Wilayah', 0, '213', '', 'wq', '1605301234.png', '', '', '', '', 7, NULL, '1', '2', '3', '213', '21'),
(17, 'rian', '', 'Banjarsari RT. 01 RW. 03 Kec. Cerme, Kab. Gresik', 'Malang', '2147483647', '21', '-1', '2020-12-31', 'makan malam', '2020-12-30', 'Wilayah', 0, '2147483647', '', 'koke', '1605301333.png', '', '', '', '', 7, NULL, '5', '4', '3', '11', '2'),
(18, 'PT. Damico Indomarta', '', 'Banjarsari RT. 01 RW. 03 Kec. Cerme, Kab. Gresik', 'Malang', '21', '221', '0', '2020-12-03', 'makan malam', '2020-12-12', 'Wilayah', 0, '2147483647', '', 'b', '1607409159.png', '', '', '', '', 0, NULL, 'oke', 'q', 'qqq', 'q', 'q'),
(19, 'UM 21', '', 's', 's', '09', '000756', '1', '2020-12-07', 's', '2020-12-23', 'Abjad', 0, 's', '', 'sjhjs', '1607409640.png', '', '', '', '', 0, NULL, 'ss', 's', 's', 'kjk', ''),
(20, 'w', '', 'w', 'w', '9', 's', '1', '2020-12-11', '1', '2020-12-09', 'Abjad', 0, '1', '', 'w', '1607413196640327972.jpg', '', '', '', '', 10, NULL, 'w', 'www', 'w', 'w', ''),
(21, 'q', '', 'q', '2', '9', '9', '1', '2020-12-07', 'q', '2020-12-08', 'Abjad', 1, '8', '', 'q', '16074133761866511819.jpg', '', '', '', '', 10, NULL, 'q', 'q', 'q', 'q', ''),
(22, 'PT. Damico Indomarta', '', 'Banjarsari RT. 01 RW. 03 Kec. Cerme, Kab. Gresik', '2', '21', '2147483647', '-1', '2020-12-31', 'makan malam', '2020-12-31', 'Abjad', 1, '2147483647', '', '321', '1607417678.png', '', '', '', '', 0, NULL, '1', '1', '1', '1', ''),
(23, 'PT. Damico Indomarta', '', 'Banjarsari RT. 01 RW. 03 Kec. Cerme, Kab. Gresik', '2', '21', '2147483647', '-1', '2020-12-31', 'makan malam', '2020-12-31', 'Abjad', 1, '2147483647', '', 'sa', '1607417728.png', '', '', '', '', 0, NULL, '1', '1', '1', '1', ''),
(24, 'rian', '', 'Banjarsari RT. 01 RW. 03 Kec. Cerme, Kab. Gresik', 'Malang', '2', '1002131', '1', '2020-12-06', '21', '2020-12-08', 'Abjad', 0, '21', '', 'n', '1607418273.png', '', '', '', '', 0, NULL, ',,', 'mj', 'k', 'mn', ''),
(25, 'rian99', '', 'Gresik', '21', '21231', '1002131', '1', '2020-12-06', 'makan malam', '2020-12-08', 'Abjad', 0, '0', '', 'm', '1607418355.jpg', '', '', '', '', 0, NULL, 'oke', 'okeo', '3', '4', ''),
(26, 'rian99', '', 'Gresik', '21', '21231', '1002131', '1', '2020-12-06', 'makan malam', '2020-12-08', 'Abjad', 1, '0', '', 'qq', '1607418430.png', '', '', '', '', 0, NULL, 'oke', 'okeo', '3', '4', ''),
(27, 'rian', '', 'Gresik', '21', '2', '2147483647', '1', '2020-12-06', 'makan siang gan', '2020-12-08', 'Abjad', 0, '1', '', 'e', '1607418774.png', '', '', '', '', 0, NULL, '1', '3', 'w', 'e', ''),
(28, 'e', '', 'e', 'e', '1', '1', '-12', '0001-01-03', '1', '2020-12-08', 'Abjad', 0, '1', '', '', '1607418815.png', '', '', '', '', 0, NULL, '1', '1', '1', '', ''),
(29, '1', '', '1', '1', '1', '1', '1', '2020-12-07', '1', '2020-12-01', 'Abjad', 1, '1', '', '1', '1607418859.png', '', '', '', '', 0, NULL, '1', '1', '1', '1', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','user') NOT NULL,
  `id` int(11) NOT NULL,
  `nama` varchar(256) DEFAULT NULL,
  `kelas` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `level`, `id`, `nama`, `kelas`) VALUES
('naila5', 'naila2', 'admin', 2, NULL, ''),
('halo', 'halo', 'admin', 3, NULL, ''),
('', '', 'admin', 4, NULL, ''),
('', '', 'admin', 5, NULL, ''),
('naila9', 'naila9', 'admin', 6, NULL, ''),
('akunbaru', 'akunbaru1', 'user', 7, 'Suharjo', ''),
('akunbaru99', 'akunbaru99', 'user', 8, 'Suharjo', ''),
('tesakun2', 'tes', 'user', 9, NULL, ''),
('oke', 'oke', 'user', 10, 'Zinide Zidane', ''),
('admin', '5f4dcc3b5aa765d61d8327deb882cf99', 'user', 11, 'nama', 'XI IPA 3');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`no_urut`);

--
-- Indeks untuk tabel `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penyusutan`
--
ALTER TABLE `penyusutan`
  ADD PRIMARY KEY (`no_urut`);

--
-- Indeks untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`no_urut`);

--
-- Indeks untuk tabel `retensi`
--
ALTER TABLE `retensi`
  ADD PRIMARY KEY (`no_urut`);

--
-- Indeks untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`no_urut`);

--
-- Indeks untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`no_urut`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data`
--
ALTER TABLE `data`
  MODIFY `no_urut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `instansi`
--
ALTER TABLE `instansi`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `penyusutan`
--
ALTER TABLE `penyusutan`
  MODIFY `no_urut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `no_urut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `retensi`
--
ALTER TABLE `retensi`
  MODIFY `no_urut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `no_urut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `no_urut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
