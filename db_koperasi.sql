-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Sep 2019 pada 15.34
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_koperasi`
--
CREATE DATABASE IF NOT EXISTS `db_koperasi` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_koperasi`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_akun`
--

CREATE TABLE `tb_akun` (
  `no_akun` int(11) NOT NULL,
  `nama_akun` varchar(50) NOT NULL,
  `tipe_akun` varchar(30) NOT NULL,
  `saldo_normal` varchar(20) NOT NULL,
  `penjelasan` varchar(200) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_debitor`
--

CREATE TABLE `tb_debitor` (
  `id_debitor` int(11) NOT NULL,
  `id_kredit_salur` int(11) NOT NULL,
  `no_id_debitor` varchar(20) NOT NULL,
  `jumlah_kredit` bigint(20) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `jangka_waktu` int(11) NOT NULL,
  `tujuan_penggunaan` varchar(30) NOT NULL,
  `tanggal_penyaluran` date NOT NULL,
  `tanggal_jatuh_tempo` date NOT NULL,
  `term` varchar(10) NOT NULL,
  `periode_cicilan` varchar(10) NOT NULL,
  `banyak_cicilan` int(11) NOT NULL,
  `jatuh_tempo_cicilan` int(11) NOT NULL,
  `bunga` int(11) NOT NULL,
  `nominal_cicilan` int(11) NOT NULL,
  `total_lunas` int(11) NOT NULL,
  `top_up` bigint(20) NOT NULL,
  `saldo_akhir` bigint(20) NOT NULL,
  `sisa_masa_cicilan` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_debitor_pekerjaan`
--

CREATE TABLE `tb_debitor_pekerjaan` (
  `no_id_debitor` varchar(20) NOT NULL,
  `jenis_pekerjaan` varchar(20) NOT NULL,
  `nama_perusahaan` varchar(30) NOT NULL,
  `bidang_usaha` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `mulai_bekerja` int(11) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `nama_atasan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_debitor_pekerjaan_pasangan`
--

CREATE TABLE `tb_debitor_pekerjaan_pasangan` (
  `no_id_debitor` varchar(20) NOT NULL,
  `nama_pasangan` varchar(50) NOT NULL,
  `tempat_lahir_pasangan` varchar(30) NOT NULL,
  `tanggal_lahir_pasangan` date NOT NULL,
  `pekerjaan_pasangan` varchar(20) NOT NULL,
  `nama_perusahaan_pasangan` varchar(30) NOT NULL,
  `bidang_usaha_pasangan` varchar(20) NOT NULL,
  `mulai_bekerja_pasangan` int(11) NOT NULL,
  `alamat_pasangan` varchar(100) NOT NULL,
  `jabatan_pasangan` varchar(20) NOT NULL,
  `kota_pasangan` varchar(30) NOT NULL,
  `kode_pos_pasangan` int(11) NOT NULL,
  `telp_pasangan` varchar(20) NOT NULL,
  `hp_pasangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_debitor_pribadi`
--

CREATE TABLE `tb_debitor_pribadi` (
  `no_id_debitor` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `warga_negara` varchar(30) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `npwp` varchar(30) NOT NULL,
  `no_ktp_passport` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat_ktp` varchar(100) NOT NULL,
  `kota_ktp` varchar(30) NOT NULL,
  `kode_pos_ktp` int(11) NOT NULL,
  `telp_ktp` varchar(20) NOT NULL,
  `hp_ktp` varchar(20) NOT NULL,
  `alamat_sekarang` varchar(100) NOT NULL,
  `ditempati_sejak_sekarang` int(11) NOT NULL,
  `kota_sekarang` varchar(30) NOT NULL,
  `kode_pos_sekarang` int(11) NOT NULL,
  `telp_sekarang` varchar(20) NOT NULL,
  `hp_sekarang` varchar(20) NOT NULL,
  `status_kepemilikan` varchar(30) NOT NULL,
  `alamat_surat` varchar(100) NOT NULL,
  `kota_surat` varchar(30) NOT NULL,
  `pendidikan_terakhir` varchar(20) NOT NULL,
  `status_perkawinan` varchar(20) NOT NULL,
  `jumlah_tanggungan` int(11) NOT NULL,
  `nama_keperluan` varchar(50) NOT NULL,
  `alamat_keperluan` varchar(100) NOT NULL,
  `kota_keperluan` varchar(30) NOT NULL,
  `kode_pos_keperluan` int(11) NOT NULL,
  `telp_keperluan` varchar(20) NOT NULL,
  `hp_keperluan` varchar(20) NOT NULL,
  `hubungan_keperluan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori_akun`
--

CREATE TABLE `tb_kategori_akun` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kreditor`
--

CREATE TABLE `tb_kreditor` (
  `no_akun` int(11) NOT NULL,
  `nama_bank` varchar(30) NOT NULL,
  `cabang_bank` varchar(30) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `fax` varchar(20) NOT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `tanggal_peminjaman` date NOT NULL,
  `tanggal_jatuh_tempo` date NOT NULL,
  `term` varchar(10) NOT NULL,
  `periode_cicilan` varchar(10) NOT NULL,
  `banyak_cicilan` int(11) NOT NULL,
  `jatuh_tempo_cicilan` int(11) NOT NULL,
  `nominal_pinjaman` bigint(20) NOT NULL,
  `bunga` int(11) NOT NULL,
  `nominal_cicilan` bigint(20) NOT NULL,
  `total_lunas` bigint(20) NOT NULL,
  `top_up` bigint(20) NOT NULL,
  `saldo_akhir` bigint(20) NOT NULL,
  `sisa_masa_cicilan` int(11) NOT NULL,
  `id_kreditor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kredit_salur`
--

CREATE TABLE `tb_kredit_salur` (
  `no_akun` int(11) NOT NULL,
  `jenis_kredit` varchar(20) NOT NULL,
  `saldo` bigint(20) NOT NULL,
  `id_kredit_salur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `no_id` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_akun`
--
ALTER TABLE `tb_akun`
  ADD PRIMARY KEY (`no_akun`);

--
-- Indeks untuk tabel `tb_debitor`
--
ALTER TABLE `tb_debitor`
  ADD PRIMARY KEY (`id_debitor`);

--
-- Indeks untuk tabel `tb_debitor_pekerjaan`
--
ALTER TABLE `tb_debitor_pekerjaan`
  ADD PRIMARY KEY (`no_id_debitor`);

--
-- Indeks untuk tabel `tb_debitor_pekerjaan_pasangan`
--
ALTER TABLE `tb_debitor_pekerjaan_pasangan`
  ADD PRIMARY KEY (`no_id_debitor`);

--
-- Indeks untuk tabel `tb_debitor_pribadi`
--
ALTER TABLE `tb_debitor_pribadi`
  ADD PRIMARY KEY (`no_id_debitor`);

--
-- Indeks untuk tabel `tb_kategori_akun`
--
ALTER TABLE `tb_kategori_akun`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tb_kreditor`
--
ALTER TABLE `tb_kreditor`
  ADD PRIMARY KEY (`id_kreditor`);

--
-- Indeks untuk tabel `tb_kredit_salur`
--
ALTER TABLE `tb_kredit_salur`
  ADD PRIMARY KEY (`id_kredit_salur`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`no_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_debitor`
--
ALTER TABLE `tb_debitor`
  MODIFY `id_debitor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori_akun`
--
ALTER TABLE `tb_kategori_akun`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_kreditor`
--
ALTER TABLE `tb_kreditor`
  MODIFY `id_kreditor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_kredit_salur`
--
ALTER TABLE `tb_kredit_salur`
  MODIFY `id_kredit_salur` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
