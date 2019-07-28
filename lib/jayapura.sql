-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 28, 2019 at 04:09 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jayapura`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_distrik`
--

CREATE TABLE `tbl_distrik` (
  `id_distrik` varchar(6) NOT NULL,
  `nama_distrik` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_distrik`
--

INSERT INTO `tbl_distrik` (`id_distrik`, `nama_distrik`) VALUES
('DS0001', 'Jayapura Utara'),
('DS0002', 'Jayapura Selatan'),
('DS0003', 'Abepura'),
('DS0004', 'Keerom'),
('DS0005', 'Muara Tami');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenislayanan`
--

CREATE TABLE `tbl_jenislayanan` (
  `id_jenislayanan` varchar(9) NOT NULL,
  `nama_jenis_layanan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jenislayanan`
--

INSERT INTO `tbl_jenislayanan` (`id_jenislayanan`, `nama_jenis_layanan`) VALUES
('JNSLYN001', 'Sarana Kesehatan'),
('JNSLYN002', 'Sarana Pendidikan'),
('JNSLYN003', 'Sarana Komunikasi'),
('JNSLYN004', 'Sarana Keamanan'),
('JNSLYN005', 'Sarana Industri'),
('JNSLYN006', 'Instansi Pemerintahan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_layanan`
--

CREATE TABLE `tbl_layanan` (
  `id_layanan` varchar(6) NOT NULL,
  `nama_layanan` varchar(100) NOT NULL,
  `id_jenislayanan` varchar(9) NOT NULL,
  `id_distrik` varchar(6) NOT NULL,
  `alamat_layanan` text NOT NULL,
  `lat` decimal(10,8) NOT NULL,
  `lng` decimal(11,8) NOT NULL,
  `data_img` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_layanan`
--

INSERT INTO `tbl_layanan` (`id_layanan`, `nama_layanan`, `id_jenislayanan`, `id_distrik`, `alamat_layanan`, `lat`, `lng`, `data_img`) VALUES
('LYN001', 'Dinas Pendidikan dan Kebudayaan', 'JNSLYN006', 'DS0002', 'Jl. Balai Kota No.1 Gedung Otonom, Kel. Entrop', '-2.56283600', '140.69245000', '[\"Dinas Pendidikan - Pelayanan.jpg\",\"Dinas Pendidikan.jpg\"]'),
('LYN002', 'Dinas Perindustrian, Perdagangan, Koperasi dan UKM', 'JNSLYN006', 'DS0002', 'Jl. Balai Kota No.1 Gedung Otonom, Kel. Entrop', '-2.56179600', '140.69224000', '[\"Dinas Perindustrian - Alur.jpg\",\"Dinas Perindustrian - Bidang Industri.jpg\",\"Dinas Perindustrian - Bidang Koperasi.jpg\",\"Dinas Perindustrian - Bidang Perdagangan.jpg\",\"Dinas Perindustrian, Perdagangan, Koperasi dan UKM.jpg\"]'),
('LYN003', 'Dinas Kependudukan dan Pencatatan Sipil', 'JNSLYN006', 'DS0002', 'Jl. Balai Kota No.1 Gedung Otonom, Kel. Entrop', '-2.56187100', '140.69202000', '[\"Dinas Kependudukan - Alur Kepengurusan Dokumen Kependudukan.jpg\",\"Dinas Kependudukan - Standar Pelayanan Bidang Pencatatan Sipil.jpg\",\"Dinas Kependudukan - Standar Pelayanan Bidang Pendaftaran Penduduk.jpg\",\"Dinas Kependudukan dan Pencatatan Sipil.jpg\"]'),
('LYN004', 'Dinas Lingkungan Hidup dan Kebersihan', 'JNSLYN006', 'DS0002', 'Jl. Balai Kota No.1 Gedung Otonom, Kel. Entrop', '-2.56234300', '140.69187500', '[\"Dinas Lingkungan Hidup - Penanganan Pengaduan Masyarakat.jpg\",\"Dinas Lingkungan Hidup - Penertiban Izin Lingkungan Usaha SPPL.jpg\",\"Dinas Lingkungan Hidup - Penertiban Izin Lingkungan Usaha UKL-UPL.jpg\",\"Dinas Lingkungan Hidup - Perizinan Pembuangan Limbah Cair.jpg\",\"Dinas Lingkungan Hidup - Visi Misi.jpg\",\"Dinas Lingkungan Hidup.jpg\"]'),
('LYN005', 'Dinas Sosial', 'JNSLYN006', 'DS0002', 'Jl. Balai Kota No.1 Gedung Otonom, Kel. Entrop', '-2.56226900', '140.69166800', '[\"Dinas Sosial - Pelayanan.jpg\",\"Dinas Sosial.jpg\"]'),
('LYN006', 'Dinas Tenaga Kerja', 'JNSLYN006', 'DS0002', 'Jl. Balai Kota No.1 Gedung Otonom, Kel. Entrop', '-2.56240400', '140.69184400', '[\"Dinas Tenaga Kerja - Pelayanan.jpg\",\"Dinas Tenaga Kerja - Visi Misi.jpg\",\"Dinas Tenaga Kerja - Wajib Lapor Ketenagakerjaan.jpg\",\"Dinas Tenaga Kerja.jpg\"]'),
('LYN007', 'RS Marthen Indey', 'JNSLYN001', 'DS0001', 'Jl. Diponegoro No.57, Kel. Gurabesi', '-2.54510600', '140.69378100', '[\"rsmarthenindey.jpg\"]'),
('LYN008', 'Provita Hospital', 'JNSLYN001', 'DS0001', 'Jl. Samratulangi No.39, Kel. Bhayangkara', '-2.53698400', '140.70529500', '[\"provitahospital.jpeg\"]'),
('LYN009', 'RSAL Dr. Soedibjo Sardadi', 'JNSLYN001', 'DS0002', 'Jl. Amphibi No.1 Hamadi', '-2.56397600', '140.73008000', '[\"rsaljayapura.jpg\"]');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`) VALUES
(1, 'administrator', 'admin11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_distrik`
--
ALTER TABLE `tbl_distrik`
  ADD PRIMARY KEY (`id_distrik`);

--
-- Indexes for table `tbl_jenislayanan`
--
ALTER TABLE `tbl_jenislayanan`
  ADD PRIMARY KEY (`id_jenislayanan`);

--
-- Indexes for table `tbl_layanan`
--
ALTER TABLE `tbl_layanan`
  ADD PRIMARY KEY (`id_layanan`),
  ADD KEY `id_jenislayanan` (`id_jenislayanan`),
  ADD KEY `id_distrik` (`id_distrik`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_layanan`
--
ALTER TABLE `tbl_layanan`
  ADD CONSTRAINT `tbl_layanan_ibfk_1` FOREIGN KEY (`id_jenislayanan`) REFERENCES `tbl_jenislayanan` (`id_jenislayanan`),
  ADD CONSTRAINT `tbl_layanan_ibfk_2` FOREIGN KEY (`id_distrik`) REFERENCES `tbl_distrik` (`id_distrik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
