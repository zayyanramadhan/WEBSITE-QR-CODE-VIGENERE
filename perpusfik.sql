-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 23 Feb 2020 pada 14.51
-- Versi server: 5.7.26-log
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itpintar_perpusfik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bukus`
--

CREATE TABLE `bukus` (
  `id` int(11) NOT NULL,
  `fromid` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kat_buku` varchar(15) NOT NULL,
  `kode_buku` varchar(100) NOT NULL,
  `tgl_qrcode` varchar(15) DEFAULT NULL,
  `rak` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bukus`
--

INSERT INTO `bukus` (`id`, `fromid`, `nama`, `kat_buku`, `kode_buku`, `tgl_qrcode`, `rak`) VALUES
(1, 1, 'Konfigurasi Hotspot Pada Routerboard Dan Troubleshooting Berbasis Mikrotik Untuk Pelanggan PT.MEDIA CIPTA TRIMETIKA ( Triple Net )', 'PKL', 'PKL/TF/1/7/III/2019', NULL, NULL),
(2, 1, 'Implementasi Intrusion Prevention System ( IPS ) Untuk Deteksi Dan Pencegahan Serangan', 'SKRIPSI', 'SKRIPSI/TF/1/7/III/2019', NULL, NULL),
(3, 2, 'Implementasi File Transfer Protocol ( FTP ) Server Dengan Moodle Di SMA KARTIKA IV-3 Surabaya', 'PKL', 'PKL/TF/2/7/III/2019', NULL, NULL),
(4, 2, 'Implementasi Sistem Keamanan Jaringan Pada Server Dengan Metode Port Knocking Berbasis Mikrotik Router OS', 'SKRIPSI', 'SKRIPSI/TF/2/7/III/2019', NULL, NULL),
(5, 3, 'Implementasi Web Server Intranet Pada SMA KARTIKA IV-3 SURABAYA', 'PKL', 'PKL/TF/3/7/III/2019', NULL, NULL),
(6, 3, 'Implementasi Private Cloud Storege Sebagai Manajemen File Menggunakan Owncloud Di STKIP HIKMAH SURABAYA', 'SKRIPSI', 'SKRIPSI/TF/3/7/III/2019', NULL, NULL),
(7, 4, 'Pembuatan Sistem E-Learning Berbasis PHP Di SMA HANG-TUAH 4 SURABAYA', 'PKL', 'PKL/TF/4/7/III/2019', NULL, NULL),
(8, 4, 'Sistem Informasi Agensi Travel Dan Rental Mobil Berbasis Website Dengan Menggunakan Framework Codeigniter', 'SKRIPSI', 'SKRIPSI/TF/4/7/III/2019', NULL, NULL),
(9, 5, 'Pembuatan Web Profile SDN MEDOKAN AYU 1', 'PKL', 'PKL/TF/5/7/III/2019', NULL, NULL),
(10, 5, 'Perencanaan Arsitektur Teknologi Informasi Pada Pelayanan Rawat Inap Menggunakan Framework Togaf Adm Studi Kasus : Rumah Sakit Jiwa Menur Surabaya', 'SKRIPSI', 'SKRIPSI/TF/5/7/III/2019', NULL, NULL),
(11, 6, 'Pembuatan Website Ujian Online Di Lembaga Penjaminan Mutu Pendidikan ( LPMP ) Jawa Timur', 'PKL', 'PKL/TF/6/7/III/2019', NULL, NULL),
(12, 6, 'Teknik Virtualisasi Docker Multi Container ( Docker Swarm ) Dalam ManaGement Server )', 'SKRIPSI', 'SKRIPSI/TF/6/7/III/2019', NULL, NULL),
(13, 7, 'Rancang Bangun Website E-Commerce Goal Clothing Berbasis Conten Management System', 'PKL', 'PKL/TF/7/7/III/2019', NULL, NULL),
(14, 7, 'Implementasi Keamanan Jaringan Komputer Menggunakan IP TABLES Dan BRO IDS ( Intrusion Detection System ) Dengan Notifikasi Email Pada Laboratorium Elektro Universitas HangTuah Surabaya', 'SKRIPSI', 'SKRIPSI/TF/7/7/III/2019', NULL, NULL),
(15, 8, 'Perancangan Website Profile SEKOLAH DASAR ANGKASA PURA SURABAYA Menggunakan CMS JOOMLA ( Template Helix Ultimate )', 'PKL', 'PKL/TF/8/7/III/2019', NULL, NULL),
(16, 8, 'Prototipe Sistem Monitoring Tandon Air Pintar Berbasis Internet OF THINGS Terintegrasi BOT TELEGRAM', 'SKRIPSI', 'SKRIPSI/TF/8/7/III/2019', NULL, NULL),
(17, 9, 'Pengembangan Sistem Data Penduduk Pada Website KECAMATAN GUNUNG ANYAR', 'PKL', 'PKL/TF/9/7/III/2019', NULL, NULL),
(18, 9, 'Sistem Pendukung Keputusan Penetuan Uang Kuliah Tunggal ( UKT )Mahasiswa Baru Menggunakan Metode Naive Bayes Gaussian Yg Di Optimalkan Dg LAPLACE CORRECTION', 'SKRIPSI', 'SKRIPSI/TF/9/7/III/2019', NULL, NULL),
(19, 10, 'Perancangan Dan Pembuatan Website Profil KBIH AL-WAHYU SIDOARJO', 'PKL', 'PKL/TF/10/7/III/2019', NULL, NULL),
(20, 10, 'Analisa Keamanan Jaringan Menggunakan Intrusion Prevention System Dan Honeypot Sebagai Pendeteksian Pencegahan Malware', 'SKRIPSI', 'SKRIPSI/TF/10/7/III/2019', NULL, NULL),
(21, 11, 'Perancangan DataBase Dalam Aplikasi Sistem Kepegawaian Di PT.WARU TENIKATAMA', 'PKL', 'PKL/TF/11/7/III/2019', NULL, NULL),
(22, 11, 'Implementasi Metode Deteksi Tepi Pada Objek Bunga Adenium', 'SKRIPSI', 'SKRIPSI/TF/11/7/III/2019', NULL, NULL),
(23, 12, 'Rancang Bangun Website Profile Pada Amanah Travel  Berbasis Content Management System', 'PKL', 'PKL/TF/12/7/III/2019', NULL, NULL),
(24, 12, 'Analisis Performa Kecepatan Write,Read,Delete ( WRD) Menggunakan S3-BENCHMARK Pada Cloud Storage Wasabi', 'SKRIPSI', 'SKRIPSI/TF/12/7/III/2019', NULL, NULL),
(25, 13, 'Pembuatan Website E-Commerce Billing Shop Pada CV.INDEV ENTERPRISE', 'PKL', 'PKL/TF/13/7/III/2019', NULL, NULL),
(26, 13, 'Sistem Pendukung Keputusan Pemilihan Jurusan Pilihan Dengan Metode FUZZY-AHP Berbasis Web ( Studi Kasus : TEKNIK INFORMATIKA UPN\'VETERAN\'JAWA TIMUR', 'SKRIPSI', 'SKRIPSI/TF/13/7/III/2019', NULL, NULL),
(27, 14, 'Front-End Web profile Galeri Honda Dengan CV.INDEVE ENTERPRISE', 'PKL', 'PKL/TF/14/7/III/2019', NULL, NULL),
(28, 14, 'Sistem Pendukung Keputusan Pegawai Teladan Pada PT.HALIM JAYA SAKTI Dengan Metode FUZZY-SAW', 'SKRIPSI', 'SKRIPSI/TF/14/7/III/2019', NULL, NULL),
(29, 15, 'Pembuatan Front-End Pada Aplikasi Web Pergudangan Untuk CV. NARARYA PUTRA Jombang Berbasis PHP', 'PKL', 'PKL/TF/15/7/III/2019', NULL, NULL),
(30, 15, 'Aplikasi Indikator Pergerakan Harga Pada CRYPTOCORRENCY Berbasis PIVOT POINT', 'SKRIPSI', 'SKRIPSI/TF/15/7/III/2019', NULL, NULL),
(31, 16, 'Pembuatan Program Sistem Informasi PURCHASING Menggunakan BOOTSTRAP Pada PT.SIEMENS WESTINGHOUSE TECHNICAL SERVICE INDONESIA', 'PKL', 'PKL/TF/16/7/III/2019', NULL, NULL),
(32, 16, 'Rancang Bangun Aplikasi Media Pemasaran Perumahan Dengan Menerapkan VIRTUAL REALITY TOUR Pada ANDROID ( Studi Kasus : PT.NAHLA CITRAMULIA GROUP )', 'SKRIPSI', 'SKRIPSI/TF/16/7/III/2019', NULL, NULL),
(33, 17, 'Pembuatan Sistem informasi Website Profile di CV.DEWO SUTO SURABAYA', 'PKL', 'PKL/TF/17/7/III/2019', NULL, NULL),
(34, 17, 'Sistem Informasi Manajemen Pengelolaan Donatur Berbasis Web Menggunakan Framework YII2 ( Studi Kasus : YAYASAN FIKRAH FOUNDATION )', 'SKRIPSI', 'SKRIPSI/TF/17/7/III/2019', NULL, NULL),
(35, 18, 'Pembuatan Web Profile PT. SUKSES SEMPURNA SURABAYA Menggunakan CODEIGNITER', 'PKL', 'PKL/TF/18/7/III/2019', NULL, NULL),
(36, 18, 'Implementasi Teknik Perbaikan Kualitas Citra Pada Image Processing', 'SKRIPSI', 'SKRIPSI/TF/18/7/III/2019', NULL, NULL),
(37, 19, 'Perancangan Dan Pembuatan Website Main Makin Kaya Bagian Back-End Menggunakan FRAMEWORK LARAVEL5.4', 'PKL', 'PKL/TF/19/7/III/2019', NULL, NULL),
(38, 19, 'Klasifikasi Spesies Monyet Ekor Panjang Menggunakan LVQ-PSO Berdasarkan Fitur Warna Dan Tekstur', 'SKRIPSI', 'SKRIPSI/TF/19/7/III/2019', NULL, NULL),
(39, 20, 'Pembuatan Website Profile SEKOLAH AL-IKHLAS', 'PKL', 'PKL/TF/20/7/III/2019', NULL, NULL),
(40, 20, 'Sistem Pemantauan Prestasi Akademka Siswa Menggunakan Metode Bayes Classifier Di SD Santa Clara Surabaya', 'SKRIPSI', 'SKRIPSI/TF/20/7/III/2019', NULL, NULL),
(41, 21, 'Perancangan Dan Pembuatan DATABASE Pada Aplikasi Website Pergudangan CV.NARAYA PUTRA JOMBANG Berbasis PHP', 'PKL', 'PKL/TF/21/7/III/2019', NULL, NULL),
(42, 21, 'Penerapan IT BALANCED SCORECARD Untuk Pengukuran Kinerja Teknologi Informasi Pada RSUD dr. MOHAMAD SOEWANDHIE Surabaya', 'SKRIPSI', 'SKRIPSI/TF/21/7/III/2019', NULL, NULL),
(43, 22, 'Perancangan Dan Pembuatan DATABASE Pada WEBSITE Pendaftaran Siswa Baru SMK PGRI 13 Surabaya', 'PKL', 'PKL/TF/22/7/III/2019', NULL, NULL),
(44, 22, 'Sistem Pendukung Keputusan Untuk Seleksi Penerima Beasiswa Menggunakan Metode F- AHP ( Fuzzy Analytic Hierachy Process ) ( Studi Kasus : Upn\'Veteran\'JawaTimur )', 'SKRIPSI', 'SKRIPSI/TF/22/7/III/2019', NULL, NULL),
(45, 23, 'Sistem Informasi Lowongan Pekerjaan CV.MERPATI Berbasis WEB', 'PKL', 'PKL/TF/23/7/III/2019', NULL, NULL),
(46, 23, 'Implementasi Algoritma Genetika Pada Matematika Tentang Persamaan Linier Berbasis ANDROID', 'SKRIPSI', 'SKRIPSI/TF/23/7/III/2019', NULL, NULL),
(47, 24, 'Rancang Bangun Web Profile Pada Laboratorium Teknik Informatika Universitas Pembangunan Nasional\'Veteran\'Jawa Timur', 'PKL', 'PKL/TF/24/7/III/2019', NULL, NULL),
(48, 24, 'Aplikasi Untuk Membantu Terapi ACROPHOBIA Menggunakan Metode VIRTUAL REALITY EXPOSURE THERAPY', 'SKRIPSI', 'SKRIPSI/TF/24/7/III/2019', NULL, NULL),
(49, 25, 'Sistem Informasi Perpustakaan Berbasis Desktop Dengan VISUAL BASIC.NET 2010 Di SEKOLAH DASAR NEGERI KUTISARI 2 NO.269 SURABAYA', 'PKL', 'PKL/TF/25/7/III/2019', NULL, NULL),
(50, 25, 'Indikator Analisa Pergerakan CRYPTOCURRENCY Berbasis FIBONACCI', 'SKRIPSI', 'SKRIPSI/TF/25/7/III/2019', NULL, NULL),
(51, 26, 'Web Profile Brand Clothing Homeground Dengan Menggunakan Bahasa Pemrograman CMS', 'PKL', 'PKL/TF/26/7/III/2019', NULL, NULL),
(52, 26, 'Sistem Informasi Anggaran Jasa Menggunakan FRAMEWORK YII2 Studi Kasus \'PT. INECO WIRASAKTI HUTAMA\'', 'SKRIPSI', 'SKRIPSI/TF/26/7/III/2019', NULL, NULL),
(53, 27, 'Perancangan Database Dan Tampilan Website Sekolah Dasar Negeri Kalirungkut 1/264 Surabaya', 'PKL', 'PKL/TF/27/7/III/2019', NULL, NULL),
(54, 27, 'Deteksi Mobil Menggunakan ALGORITMA VIOLA-JONES', 'SKRIPSI', 'SKRIPSI/TF/27/7/III/2019', NULL, NULL),
(55, 28, 'Pembuatan BACK-END Pada Website Perekrutan Pekerja QUTSOURCE PT. DEN HAURA INDONESIA Menggunakan FRAMEWORK  LARAVEL', 'PKL', 'PKL/TF/28/7/III/2019', NULL, NULL),
(56, 28, 'Aplikasi Membuat Janji Dengan Dokter Berbasis ANDROID Menggunakan Pola Desain MVP ( Studi Kasus : RUMAH SAKIT WIYUNG SEJAHTERA )', 'SKRIPSI', 'SKRIPSI/TF/28/7/III/2019', NULL, NULL),
(57, 29, 'Pembuatan Program Sistem Informasi Penjualan Menggunakan CODEIGNITER Pada Siemens Westinghouse Technical Service Indonesia', 'PKL', 'PKL/TF/29/7/III/2019', NULL, NULL),
(58, 29, 'Penerapan Algoritma Apriori Dan Fp-Growth Untuk Market Basket Analysis Dalam Menentukan PRODUCT BUNDLING', 'SKRIPSI', 'SKRIPSI/TF/29/7/III/2019', NULL, NULL),
(59, 30, 'Bangun Prototype Aplikasi Pencari BARBERSHOP Di Surabaya Berbasis ANDROID Dari Sisi BACKEND DEVELOPMENT', 'PKL', 'PKL/TF/30/7/III/2019', NULL, NULL),
(60, 30, 'Aplikasi Permainan Serius Sempoa Menggunakan CONSTUCT 2 Berbasis ANDROID', 'SKRIPSI', 'SKRIPSI/TF/30/7/III/2019', NULL, NULL),
(61, 31, 'Pembuatan Situs Web Portal UKM Sebagai Pendukung CV. ORYSU DEVELOPMENT', 'PKL', 'PKL/TF/31/7/III/2019', NULL, NULL),
(62, 31, 'Pengedalian Suhu Dengan Metode PID KONTROL Menggunakan FUZZY Pada Proses Hidrolisis Berbasis ARDUINO', 'SKRIPSI', 'SKRIPSI/TF/31/7/III/2019', NULL, NULL),
(63, 32, 'Implementasi LOAD BALANCING Dengan Metode NTH Menggunakan MIKROTIK RB 800 Pada Jaringan Internet Di Jawa Pos Graha Pena Surabaya', 'PKL', 'PKL/TF/32/7/III/2019', NULL, NULL),
(64, 32, 'Implementasi Dan Analisis Cluster Cloud Computing  Berbasis Nextcloud Untuk Layanan Multiplatform ( Studi Kasus : PT.JAWA POS KORAN )', 'SKRIPSI', 'SKRIPSI/TF/32/7/III/2019', NULL, NULL),
(65, 33, 'Analisa Dan Komparasi Dua Website Pada Sekolah SZ Model Management', 'PKL', 'PKL/TF/33/7/III/2019', NULL, NULL),
(66, 33, 'Pengendalian Suhu Pada Proses Distilasi Batch Menggunakan PID Dengan ANT COLONY OPTIZATION ( ACO )', 'SKRIPSI', 'SKRIPSI/TF/33/7/III/2019', NULL, NULL),
(67, 34, 'Aplikasi Pendataan Barang Dan Pendataan Pegawai CV. MERPATI Menggunakan NETBEANS', 'PKL', 'PKL/TF/34/7/III/2019', NULL, NULL),
(68, 34, 'Tata Kelola Teknologi Informasi Mengguanakan FRAMEWORK COBIT 4.1 Studi Kasus RSUD KERTOSONO', 'SKRIPSI', 'SKRIPSI/TF/34/7/III/2019', NULL, NULL),
(69, 35, 'Pembuatan Web Profil Menggunakan CMS PT.KAMANJAYA TEKNIK INDONESIA Upn\'Veteran\'Jawa Timur', 'PKL', 'PKL/TF/35/9/III/2019', NULL, NULL),
(70, 35, 'Perbandingan Dan Desain Jaringan Komputer Menggunakan ROUTING GATEWAY PROTOKOL DAN OSPF (Studi Kasus PT.Fangbian Iskan Corporindo )', 'SKRIPSI', 'SKRIPSI/TF/35/9/III/2019', NULL, NULL),
(71, 36, 'Sistem Informasi Laboratorium Jaringan Komputer UPN\'VETERAN\'JAWA TIMUR', 'PKL', 'PKL/TF/36/9/III/2019', NULL, NULL),
(72, 36, 'Perancangan Website E-COMMERCE AKSHAYA SHOP Menggunakan PHP', 'SKRIPSI', 'SKRIPSI/TF/36/9/III/2019', NULL, NULL),
(73, 37, 'Pembuatan Sistem Informasi Perpustakaan Dengan Menggunakan MICROSOPT VISUAL BASIC 6.0', 'PKL', 'PKL/TF/37/9/III/2019', NULL, NULL),
(74, 37, 'Pembuatan Citra Panorama Menggunakan Metode SCALE INVARIANT TRANSFORM ( SIFT )', 'SKRIPSI', 'SKRIPSI/TF/37/9/III/2019', NULL, NULL),
(75, 38, 'Pembuatan Web Profile MI.KH.ROMLY TAMIM SURABAYA', 'PKL', 'PKL/TF/38/9/III/2019', NULL, NULL),
(76, 38, 'Implementasi Metode Economy Order Quantity ( EOQ ) Untuk Sistem Pengendalian Persediaan Stok Barang Pada TOKO. XXX', 'SKRIPSI', 'SKRIPSI/TF/38/9/III/2019', NULL, NULL),
(77, 39, 'Rancang Bangun Website Profile Program Studi Agribisnis Fakultas Pertanian UPN\'VETERAN\'JATIM Berbasis Content Management System', 'PKL', 'PKL/TF/39/9/III/2019', NULL, NULL),
(78, 39, 'Idenvikasi Mata Uang Lodam Menggunakan SEGMENTASI OTSU THRESHOLDING Dengan OPERASI MORFOLOGI', 'SKRIPSI', 'SKRIPSI/TF/39/9/III/2019', NULL, NULL),
(79, 40, 'Pembuatan WEB E-COMMERCE Menggunakan CMS MAGENTO', 'PKL', 'PKL/TF/40/9/III/2019', NULL, NULL),
(80, 40, 'Monitoring Curah Hujan Secara Real Time Menggunakan Teknologi Internet Of Things Berbasis MICRO --KONTROLER ARDUINO', 'SKRIPSI', 'SKRIPSI/TF/40/9/III/2019', NULL, NULL),
(81, 41, 'Pembuatan WEB E-LEARNING Menggunakan PHP DI SEKOLAH SMK PGRI 13 SURABAYA', 'PKL', 'PKL/TF/41/9/III/2019', NULL, NULL),
(82, 41, 'Identifikasi Jenis Daun Dengan Ekstrasi Ciri Warna Dan Tekstur Menggunakan Metode JARINGAN SYARAF TIRUAN RADIAL BASIS FUNCTION (JST-RBF )', 'SKRIPSI', 'SKRIPSI/TF/41/9/III/2019', NULL, NULL),
(83, 42, 'Pembuatan Aplikassi Toko Online Busana Muslim Berbasis WEB', 'PKL', 'PKL/TF/42/9/III/2019', NULL, NULL),
(84, 42, 'Pembuatan Sistem Informasi Transaksi Daring Busana Muslim Menggunakan Metode WATERFALL', 'SKRIPSI', 'SKRIPSI/TF/42/9/III/2019', NULL, NULL),
(85, 43, 'Pembuatan Website Profile Inkubator Bisnis Technopark Berbasis Content Management System Pada UPN \'VETERAN\'JAWA TIMUR', 'PKL', 'PKL/TF/43/9/III/2019', NULL, NULL),
(86, 43, 'Pembuatan Website Profile Dengan Source Maps Google Pada Inkubator Bisnis Technopark UPN\'VETERAN\'JAWA TIMUR', 'SKRIPSI', 'SKRIPSI/TF/43/9/III/2019', NULL, NULL),
(87, 44, 'Peracangan System Aplikasi Gudang Berbasis Website Di CV.DEVINA MANDIRI SURABAYA', 'PKL', 'PKL/TF/44/9/III/2019', NULL, NULL),
(88, 44, 'Penerapan Metode FUZZY Pada Kebocoran GAS LPG Berbasis IOT', 'SKRIPSI', 'SKRIPSI/TF/44/9/III/2019', NULL, NULL),
(89, 45, 'Rancang Bangun Aplikasi Gudang Berbasis Website Menggunakan Bahasa Pemrograman PHP & MYSQL Di CV. DEVINA MANDIRI SURABAYA', 'PKL', 'PKL/TF/45/9/III/2019', NULL, NULL),
(90, 45, 'Perancangan Prototype Alat SEIN Otomatis Berbasis ARDUINO UNO R3', 'SKRIPSI', 'SKRIPSI/TF/45/9/III/2019', NULL, NULL),
(91, 46, 'Pembuatan Website Companty Profile Green Traditional-Aksamedia', 'PKL', 'PKL/TF/46/9/III/2019', NULL, NULL),
(92, 46, 'Sistem Manajemen Inventory Stok Barang Berbasis Web ( Studi Kasus : LIMASKEMA )', 'SKRIPSI', 'SKRIPSI/TF/46/9/III/2019', NULL, NULL),
(93, 47, 'Pembuatan Website Company Profile Green Traditional \' Aksamedia', 'PKL', 'PKL/TF/47/9/III/2019', NULL, NULL),
(94, 47, 'Rancang bangun Pemberian Pakan Ternak BURUNG LOVEBIRD Menggunakan MICROKONTROLER ATMEGA 328 P Dengan Kontrol SMS GATEWAY', 'SKRIPSI', 'SKRIPSI/TF/47/9/III/2019', NULL, NULL),
(95, 48, 'Pembuatan Aplikasi Pergudangan Berbasis Website Menggunakan MYSQL Bagian Loging,Menu Suplier,Barang Masuk Dan Sok Barang Di CV.DEVINA MANDIRI MANDIRI SURABAYA', 'PKL', 'PKL/TF/48/9/III/2019', NULL, NULL),
(96, 48, 'Rancang Bangun Alat Penyiram Tanaman Otomatis Menggunakan Metode Logika FUZZY Berbasis Mikrokontroler Pada Bawang Merah', 'SKRIPSI', 'SKRIPSI/TF/48/9/III/2019', NULL, NULL),
(97, 49, 'Perancangan Serta Instalasi Dan Setting Ulang Perangkat Jaringan Di Program Studi Teknik Informatika Upn\'Veteran\' Jatim', 'PKL', 'PKL/TF/49/9/III/2019', NULL, NULL),
(98, 49, 'WEB Serapping Elemen Pada 3 Wesite Penjualan Menggunakan Metode HTML DOM', 'SKRIPSI', 'SKRIPSI/TF/49/9/III/2019', NULL, NULL),
(99, 50, 'Analisa Teknologi Informasi Menggunakan Indeks KAMI ( KEAMANAN INFORMATIKA ) DI  UPT. TELEMATIKA Upn\'Veteran\' Jawa Timur', 'PKL', 'PKL/TF/50/9/III/2019', NULL, NULL),
(100, 50, 'Implementasi Manajemen Bandwidth Menggunakan Metode PCQ ( PERCONECTION QUEUE ) STUDI Kasus SMK SENOPATI', 'SKRIPSI', 'SKRIPSI/TF/50/9/III/2019', NULL, NULL),
(101, 51, 'Pembuatan Sistem Informasi Persediaan Barang Bulog MART DEVISI REGIONAL Jawa Timur', 'PKL', 'PKL/TF/51/9/III/2019', '04/12/2019', NULL),
(102, 51, 'Aplikasi Kejadian Daruratt Wilayah Kota Surabaya Dengan Fitur GOOGLE MAPS', 'SKRIPSI', 'SKRIPSI/TF/51/9/III/2019', '04/12/2019', NULL),
(103, 52, 'Pengujian Website Properti Pada PT.IGS INDONESIA GROUPS Menggunakan Metode BLACK BOX SAMPLE TESTING AAND PERFORMANCE TESTING', 'PKL', 'PKL/TF/52/9/III/2019', '04/12/2019', NULL),
(104, 52, 'Pengukuran Kinerja Teknologi Informasi Menggunakan IT BALANCED SCORECARD Pada Sekolah Tinggi Ilmu Ekonomi Mahardika Surabaya', 'SKRIPSI', 'SKRIPSI/TF/52/9/III/2019', '04/12/2019', NULL),
(105, 53, 'Perancangan Basis Data Web Profil GUIDE READ OUTBOND ( CV.Jendela Indonesia )', 'PKL', 'PKL/TF/53/9/III/2019', '04/12/2019', NULL),
(106, 53, 'Analisis Dan Pengembangan Enterprise Arsitektur Menggunakan TOGAF ( Studi Kasus : DINAS ENERGO DAN SUMBER DAYA MENERAL PROVINSI JATIM )', 'SKRIPSI', 'SKRIPSI/TF/53/9/III/2019', '04/12/2019', NULL),
(107, 54, 'Pembuatan Front End Website Responsive Untuk Kebutuhan Company Profile CV.Karya Guna Bersama Berbasis PHP Dengan Menggunakan Framework Codeigniter', 'PKL', 'PKL/TF/54/9/III/2019', '04/12/2019', NULL),
(108, 54, 'Sistem Diagnosis Penyakit Diabetis Militus Meggunakan ALGORITMA C5.0', 'SKRIPSI', 'SKRIPSI/TF/54/9/III/2019', '04/12/2019', NULL),
(109, 55, 'Redesain Portal Internet  PT.SEMEN INDONESIA Dengan Menggunakan Bahsa Pemrograman PHP', 'PKL', 'PKL/TF/55/9/III/2019', NULL, NULL),
(110, 55, 'Evaluasi Tata Kelola Infrastruktur Teknologi Informasi Menggunakan Framework Cobit 5 Pada PT.GO CLEAN INDONESIA', 'SKRIPSI', 'SKRIPSI/TF/55/9/III/2019', NULL, NULL),
(111, 56, 'Desain Dan Implementasi Demilitarized Zone Pada Dinas Komunikasi Dan Informatika Provinsi Jawa Timur', 'PKL', 'PKL/TF/56/9/III/2019', NULL, NULL),
(112, 56, 'Desain Analisis Performa Load Balancing Dalam Sofware Defined Network Ryu Controller', 'SKRIPSI', 'SKRIPSI/TF/56/9/III/2019', NULL, NULL),
(113, 57, 'Perancangan Dan Simulasi Topologi Tree Pada Kantor kelurahan Sumber Rame Menggunakan GNS3', 'PKL', 'PKL/TF/57/9/III/2019', NULL, NULL),
(114, 57, 'Perancangan Strategi Sistem Informasi Dan Teknologi Informasi Menggunakan ANITA CASSIDY Pada SMK MUHAMMADYAH 4 GLENMORE', 'SKRIPSI', 'SKRIPSI/TF/57/9/III/2019', NULL, NULL),
(115, 58, 'Pembuatan Web E-commerce Elha Optic', 'PKL', 'PKL/TF/58/9/III/2019', NULL, NULL),
(116, 58, 'Analisa Implementasi Transmisi Data Ftp Dengan PENGAMANAN SSH PADA TUNNELING 6T04', 'SKRIPSI', 'SKRIPSI/TF/58/9/III/2019', NULL, NULL),
(117, 59, 'Pembuatan System E-Learning SMAN 18 SURABAYA Berbasis MOODLE STUDI KASUS PEMBUATAN BUKU MANUAL', 'PKL', 'PKL/TF/59/9/III/2019', NULL, NULL),
(118, 59, 'Implementasi Routing Protocol Dan Ospf Pada Layanan Video Streaming( Studi Kasus : Lab jaringan Komputr UNTAG SURABAYA )', 'SKRIPSI', 'SKRIPSI/TF/59/9/III/2019', NULL, NULL),
(119, 60, 'Pembuatan Sistem Infoemasi Persediaan Barang Berbasis DESKTOP Untuk CV. MITRA USAHA MANDIRI DI KABUPATEN GRESIK', 'PKL', 'PKL/TF/60/9/III/2019', NULL, NULL),
(120, 60, 'Deteksi Peti Kemas Berbasis Video Menggunakan ALGORITMA CNN BERDASARKAN ARSITEKTUR YOLO        (   YOU ONLY LOOK ONCE )', 'SKRIPSI', 'SKRIPSI/TF/60/9/III/2019', NULL, NULL),
(121, 61, 'Uji Coba Website Company Profile Di CV. KAMDI PROPERTI & STAFF NOTARIS', 'PKL', 'PKL/TF/61/9/III/2019', NULL, NULL),
(122, 61, 'Sistem Pendeteksian Truk Berbasis Video Menggunakan DEEP LEARNING DAN TENSORFLOW', 'SKRIPSI', 'SKRIPSI/TF/61/9/III/2019', NULL, NULL),
(123, 62, 'Perancangan Dan Pembuatan Back End Pada Aplikasi Web Pergudangan Berbasis PHP Untuk PERUSAHAAN CV.NARARYA PUTRA', 'PKL', 'PKL/TF/62/9/III/2019', NULL, NULL),
(124, 62, 'Metode Multinomial Naive Bayes Classifier Dan Reduksi FiturMenggunakan DF THRESHOLDING Untuk KLASIFIKASI GENRE Berdasarkan BLURB Pada MEDIA Berbagai Cerita Online', 'SKRIPSI', 'SKRIPSI/TF/62/9/III/2019', NULL, NULL),
(125, 63, 'Perancangan Dan DataBase Web Profile Pada PT. PANJI NASIONAL MEDIA PERSADA SURABAYA', 'PKL', 'PKL/TF/63/9/III/2019', '29/12/2019', NULL),
(126, 63, 'Sistem Informasi Pembayaran KPR Di PT.Nahla Citra Mulia Group Berbasis ANDROID Dengan Metode Rup ( Rational Unified Process)', 'SKRIPSI', 'SKRIPSI/TF/63/9/III/2019', '29/12/2019', NULL),
(127, 64, 'Perancangan Web Katalog Dan Penjualan Berbasis WEB Menggunakan CMS WORDPRESS ( Studi Kasus : CV.RAMA MULTI TECHNIK )', 'PKL', 'PKL/TF/64/9/III/2019', '29/12/2019', NULL),
(128, 64, 'Implementasi Data Mining Rekomendasi Menu Menggunakan AlGORITMA APRIORI', 'SKRIPSI', 'SKRIPSI/TF/64/9/III/2019', '29/12/2019', NULL),
(129, 65, 'Rekontruksi Dan Perancangan Jaringan Komputer Pada Kantor Dinas Energi Dan Sumber Daya Mineral Jawa Timur .', 'PKL', 'PKL/TF/65/9/III/2019', '29/12/2019', NULL),
(130, 65, 'Pengukuran Kualitas Website UPN \'VETERAN\' JAWA TIMUR Menggunakan Metode WEBQUAL 4.0', 'SKRIPSI', 'SKRIPSI/TF/65/9/III/2019', '29/12/2019', NULL),
(131, 66, 'Pembuatan Aplikasi Surat Pemberitahuan Perkembangan Hasil Penyidikan ( SP2HP ) Online Menggunakan Framework Codeigniter', 'PKL', 'PKL/TF/66/9/III/2019', '29/12/2019', NULL),
(132, 66, 'Aplikasi Perawatan Mesin Berbasis ANDROID ( Studi Kasus : PT.GARUDA FOOD PUTRA-PUTRI JAYA TBK )', 'SKRIPSI', 'SKRIPSI/TF/66/9/III/2019', '29/12/2019', NULL),
(133, 67, 'Rancang Bangun Website Admin Company Profile Studi Kasus : PERUSAHAAN CV.PRIMA TEKNO SOLUSINDO', 'PKL', 'PKL/TF/67/9/III/2019', '29/12/2019', NULL),
(134, 67, 'Aplikasi Based Mobile Classification And Regression Tree', 'SKRIPSI', 'SKRIPSI/TF/67/9/III/2019', '29/12/2019', NULL),
(135, 68, 'Perancangan Dan Pembuatan Basis Data Sistem Informasi Pembelian Pada PT.SIEMENS WESTINGHOUSE TECHNICAL SERVICES INDONESIA', 'PKL', 'PKL/TF/68/9/III/2019', '29/12/2019', NULL),
(136, 68, 'Implementasi Web Mining Menggunakan Teknik ASSOCIATION RULE Dengan Memfaatkan AlGORITMA MODIFIKASI APRIORI (TREE BASED APPROACH )', 'SKRIPSI', 'SKRIPSI/TF/68/9/III/2019', '29/12/2019', NULL),
(137, 69, 'Pengujian Website Rekruitmen Qutsourcing PT.LEXION INDONESIA Dengan Menggunakan Metode BLACK BOX', 'PKL', 'PKL/TF/69/9/III/2019', NULL, NULL),
(138, 69, 'Rancang Bangun Game Endless Runner Menggunakan Procedural Content Generation Untuk Level Permainan', 'SKRIPSI', 'SKRIPSI/TF/69/9/III/2019', NULL, NULL),
(139, 70, 'Perancangan Dan Pembuatan Website Main Makin Kaya Bagain Front-End Menggunakan FRAMEWORK LARAVEL 5.4', 'PKL', 'PKL/TF/70/9/III/2019', NULL, NULL),
(140, 70, 'Penerapan Metode Naive Bayes Classifier Dengan Seleksi Fitur Information gain Dalam Analisis Sentimen Review Makanan Pada Restoran X', 'SKRIPSI', 'SKRIPSI/TF/70/9/III/2019', NULL, NULL),
(141, 71, 'Analisa Teknologi Informasi Menggunakan Metode Indeks KAMI Di UPT TELEMATIKA UPN\'VETERAN\'JAWA TIMUR', 'PKL', 'PKL/TF/71/9/III/2019', NULL, NULL),
(142, 71, 'Audit Sistem Dan Teknologi Informasi Pada SMAN 18 SURABAYA', 'SKRIPSI', 'SKRIPSI/TF/71/9/III/2019', NULL, NULL),
(143, 72, 'Perancangan Sistem Registrasi Tamu Dan Kepuasan Masyarakat Pada UPT.PSMB ( PENGUJIAN SERTIFIKASI MUTU BARANG )-LEMBAGA TEMBAKAU JEMBER', 'PKL', 'PKL/TF/72/9/III/2019', NULL, NULL),
(144, 72, 'Pengukuran Tingkat Kapabilitas Tata Kelola Teknologi Informasi Menggunakan FRAMEWORK COBIT 5( Studi Kasus : Dinas Perpustakaan Dan Kearsipan Kabupaten Mojokerto )', 'SKRIPSI', 'SKRIPSI/TF/72/9/III/2019', NULL, NULL),
(145, 73, 'Perancangan Web Portal PT.PERTAMINA ( Persero ) MOR-V Berbasis Joomla Dengan Menggunakan Metode BACK-END', 'PKL', 'PKL/TF/73/9/III/2019', NULL, NULL),
(146, 73, 'INTERNET OF THING : Pengendalian Dan Pemantauan Tanaman Hidroponik Berbasis MIKROKONTROLER ARDUINO', 'SKRIPSI', 'SKRIPSI/TF/73/9/III/2019', NULL, NULL),
(147, 74, 'Perancangan Dan Pembuatan Website Profil Perusahaan Dan Pengadaan Fasilitas Menggunakan Database Untuk CV. MITRA USAHA MANDIRI DI GRESIK', 'PKL', 'PKL/TF/74/9/III/2019', NULL, NULL),
(148, 74, 'Implementasi Managemen Bandwidth Dengan Metode Peer Connection Qeue ( PCQ ) Menggunakan QUEUE TREE ( Studi Kasus : STIE YAPAN Surabaya )', 'SKRIPSI', 'SKRIPSI/TF/74/9/III/2019', NULL, NULL),
(149, 1, 'Teori Dan Praktek Cloud Computing', 'BACA', 'FIK/1/II/2019', NULL, NULL),
(150, 2, 'Pemrograman Sistem Pakar', 'BACA', 'FIK/2/II/2019', NULL, NULL),
(151, 3, 'Basis Data Revisi Kedua', 'BACA', 'FIK/3/II/2019', NULL, NULL),
(152, 4, 'Pemrograman Java Untuk Programmer', 'BACA', 'FIK/4/II/2019', NULL, NULL),
(153, 5, 'Teknik Pemrograman Menggunakan MATLAB', 'BACA', 'FIK/5/II/2019', NULL, NULL),
(154, 6, 'Analisis Perancangan Berorientasi Objek Dengan UML', 'BACA', 'FIK/6/II/2019', NULL, NULL),
(155, 7, 'Pemrograman Basis Data Di MATLAB Dg MySQL Dan Microssoft Access', 'BACA', 'FIK/7/II/2019', NULL, NULL),
(156, 8, 'The Best Effect Texture & Background', 'BACA', 'FIK/8/II/2019', NULL, NULL),
(157, 9, 'PHISING Cara Mudah Menyadap Password Dan pencegahannya', 'BACA', 'FIK/9/II/2019', NULL, NULL),
(158, 10, 'The Magic of Corel Draw', 'BACA', 'FIK/10/II/2019', NULL, NULL),
(159, 11, 'Pemrograman Berorientasi Objek C # (   Yang susah Jadi Mudah )', 'BACA', 'FIK/11/II/2019', NULL, NULL),
(160, 12, 'The Magic Of Photoshop', 'BACA', 'FIK/12/II/2019', NULL, NULL),
(161, 13, 'Buku Pintar Robotika', 'BACA', 'FIK/13/II/2019', NULL, NULL),
(162, 14, 'Text  Mining', 'BACA', 'FIK/14/II/2019', NULL, NULL),
(163, 15, 'Pemrograman Delphi Untuk Pemula', 'BACA', 'FIK/15/II/2019', NULL, NULL),
(164, 16, 'Konfgurasi RouterBoard Mikrotik RB-750', 'BACA', 'FIK/16/II/2019', NULL, NULL),
(165, 17, 'Cloud Computing', 'BACA', 'FIK/17/II/2019', NULL, NULL),
(166, 18, 'Kalkulus', 'BACA', 'FIK/18/II/2019', NULL, NULL),
(167, 19, 'Bootsrap, CSS , Framework', 'BACA', 'FIK/19/II/2019', NULL, NULL),
(168, 20, 'Pemrograman Fuzzy Dan Jaringan syaraf Tiruan Untuk Sistem Kendali Cerdas', 'BACA', 'FIK/20/II/2019', NULL, NULL),
(169, 21, 'Membangun Aplikasi Penjualan Tunai &Kridit Dengan MS Acceess', 'BACA', 'FIK/21/II/2019', NULL, NULL),
(170, 22, 'IOS Visual Programing', 'BACA', 'FIK/22/II/2019', NULL, NULL),
(171, 23, 'Metodologi Penelitian Kualitatif Edisi Revisi', 'BACA', 'FIK/23/II/2019', NULL, NULL),
(172, 24, 'Mudah Membuat Aplikasi Absensi Dengan JAVA', 'BACA', 'FIK/24/II/2019', NULL, NULL),
(173, 25, 'Kalkulus untukk Perguruan Tinggi', 'BACA', 'FIK/25/II/2019', NULL, NULL),
(174, 26, 'Android Pemrograman Aplikasi Mobil,Smartphone dan Tablet PC Berbasis Android', 'BACA', 'FIK/26/II/2019', NULL, NULL),
(175, 27, '101 jurus Promosi Paling Top .+ Dan --Membangun Online Shop Dengan Wordpress', 'BACA', 'FIK/27/II/2019', NULL, NULL),
(176, 28, 'Pemrograman Sistem Pakar', 'BACA', 'FIK/28/II/2019', NULL, NULL),
(177, 29, 'Cepat menguasai C ++ Ringkas Dan Tepat Mempelajari c++ untuk Programmer Pemula', 'BACA', 'FIK/29/II/2019', NULL, NULL),
(178, 30, 'Toko Online Dengan Wordpress Dan Woo  commerce', 'BACA', 'FIK/30/II/2019', NULL, NULL),
(179, 31, 'Algoritma Pemrograman Dalam Bahasa Pascal Dan C', 'BACA', 'FIK/31/II/2019', NULL, NULL),
(180, 32, 'Aplikasi Toko Akuntansi Dan Penggajian Dengan Access', 'BACA', 'FIK/32/II/2019', NULL, NULL),
(181, 33, 'Panduan Praktis Membangun LAN', 'BACA', 'FIK/33/II/2019', NULL, NULL),
(182, 34, 'The Power Of Owncloud Membangun Dan Mengelola Sendiri Teknologi \'Cloud Dilingkungan anda', 'BACA', 'FIK/34/II/2019', NULL, NULL),
(183, 35, 'Computer Vision Dan Aplikasinya', 'BACA', 'FIK/35/II/2019', NULL, NULL),
(184, 36, 'Pemrograman Delphi', 'BACA', 'FIK/36/II/2019', NULL, NULL),
(185, 37, 'Pemrograman Web', 'BACA', 'FIK/37/II/2019', NULL, NULL),
(186, 38, 'Simulasi Jaringan komputer Dengan CISCO PACKET TRECER', 'BACA', 'FIK/38/II/2019', NULL, NULL),
(187, 39, 'Inspirasi Codeigniter', 'BACA', 'FIK/39/II/2019', NULL, NULL),
(188, 40, 'Mengenal Pemrograman Data Base', 'BACA', 'FIK/40/II/2019', NULL, NULL),
(189, 41, 'Desktop Publishing Dengan Adobe Indesign C S3', 'BACA', 'FIK/41/II/2019', NULL, NULL),
(190, 42, 'Master PHP  ( 67 Ttrik Dan Ide Berlian )', 'BACA', 'FIK/42/II/2019', NULL, NULL),
(191, 43, 'Jaringan Komputer Teori Dan Implementasi Berbasis LINUX', 'BACA', 'FIK/43/II/2019', NULL, NULL),
(192, 44, 'Interaksi Manusia Dan Komputer', 'BACA', 'FIK/44/II/2019', NULL, NULL),
(193, 45, 'Introduction To Information Retrieval', 'BACA', 'FIK/45/II/2019', NULL, NULL),
(194, 46, 'Personal Balanced Scorecard', 'BACA', 'FIK/46/II/2019', NULL, NULL),
(195, 47, 'Desktop Application Training    (Microsopt Office)', 'BACA', 'FIK/47/II/2019', NULL, NULL),
(196, 48, 'Menguasai   CSS', 'BACA', 'FIK/48/II/2019', NULL, NULL),
(197, 49, 'Pemrograman Python  ( untuk Ilmu Komputer Dan Teknik )', 'BACA', 'FIK/49/II/2019', NULL, NULL),
(198, 50, 'Kupas Tuntas  WEB RESPONSIP', 'BACA', 'FIK/50/II/2019', NULL, NULL),
(199, 51, 'Membangun Aplikasi Dengan  PHP CODEIGNITER Dan Ajax', 'BACA', 'FIK/51/II/2019', NULL, NULL),
(200, 52, 'WINDOWS  XP  X X X', 'BACA', 'FIK/52/II/2019', NULL, NULL),
(201, 53, 'Langkah Praktis Membangun Aplikasi Sederhana PLATFORM ANDROID', 'BACA', 'FIK/53/II/2019', NULL, NULL),
(202, 54, 'Mengenal Pemrograman KOMPUTER DAN ANDROID Untuk Pemula', 'BACA', 'FIK/54/II/2019', NULL, NULL),
(203, 55, 'Inspirasi Codeigniter Return', 'BACA', 'FIK/55/II/2019', NULL, NULL),
(204, 56, 'Boom Visual Basic.Net 2010 Meledak', 'BACA', 'FIK/56/II/2019', NULL, NULL),
(205, 57, 'Sistem Informasi Akademik Kampus Berbasis Web Dengan LARAVEL 5', 'BACA', 'FIK/57/II/2019', NULL, NULL),
(206, 58, 'Pemrograman Sistem Pakar,Konsep Dasar Dan Aplikasinya Menggunakan Visual Basic 6', 'BACA', 'FIK/58/II/2019', NULL, NULL),
(207, 59, 'Cara Mudah Menguasai Microsopt C # 2008', 'BACA', 'FIK/59/II/2019', NULL, NULL),
(208, 60, 'Mudah Dan Cepat Membuat Program SKRIPSI DAN TUGAS AKHIR DENGAN ANDORID', 'BACA', 'FIK/60/II/2019', NULL, NULL),
(209, 61, 'Rahasia Dan IT Paling Top Menjadi IT EXPERT Dengan Sekejap', 'BACA', 'FIK/61/II/2019', NULL, NULL),
(210, 62, 'Pemrograman Web HTML', 'BACA', 'FIK/62/II/2019', NULL, NULL),
(211, 63, 'Pemrograman C ++', 'BACA', 'FIK/63/II/2019', NULL, NULL),
(212, 64, 'Microsopt Word 2010 Untuk Pemula', 'BACA', 'FIK/64/II/2019', NULL, NULL),
(213, 65, 'Algoritma Pemrograman C++ Dalam Ilustrasi', 'BACA', 'FIK/65/II/2019', NULL, NULL),
(214, 66, 'Inspirasi codeigniter', 'BACA', 'FIK/66/II/2019', NULL, NULL),
(215, 67, 'Trik Haeking Menggunakan Flash Disk', 'BACA', 'FIK/67/II/2019', NULL, NULL),
(216, 68, 'Belajar Mudah Microsopt Windows 2000 Profesional', 'BACA', 'FIK/68/II/2019', NULL, NULL),
(217, 69, 'Tutorial Membangun Website Sekolah Dengan Model CMSBalitbang Kemendikmas', 'BACA', 'FIK/69/II/2019', NULL, NULL),
(218, 70, 'Membangun Aplikasi Dengan PHP,Codeigniter Dan Ajax', 'BACA', 'FIK/70/II/2019', NULL, NULL),
(219, 71, '5 Proyek Populer SMS Gateway', 'BACA', 'FIK/71/II/2019', NULL, NULL),
(220, 72, 'Pemrograman ANDROID', 'BACA', 'FIK/72/II/2019', NULL, NULL),
(221, 73, 'Menyelesaikan Website 12 juta Secara Profesional', 'BACA', 'FIK/73/II/2019', NULL, NULL),
(222, 74, 'Cepat Menguasai C++', 'BACA', 'FIK/74/II/2019', NULL, NULL),
(223, 75, 'Membangun Mail Server Andal Dengan Fedora Dan Qmail', 'BACA', 'FIK/75/II/2019', NULL, NULL),
(224, 76, 'Buku Pintar Menguasai PHP MySQL', 'BACA', 'FIK/76/II/2019', NULL, NULL),
(225, 77, '54 Trik Tersembunyi PHP', 'BACA', 'FIK/77/II/2019', NULL, NULL),
(226, 78, 'Dasar  Algoritma & Struktur Data Dengan Bahasa JAVA', 'BACA', 'FIK/78/II/2019', NULL, NULL),
(227, 79, 'Mahir Dalam 7 Hari Adobe Flash CS 4', 'BACA', 'FIK/79/II/2019', '04/12/2019', NULL),
(228, 80, '3 In 1 : Javascript,Jquery,Dan Jquery Mobil', 'BACA', 'FIK/80/II/2019', '04/12/2019', NULL),
(229, 81, 'Aplikasi Elektronika Dengan Visual C# 2008', 'BACA', 'FIK/81/II/2019', '04/12/2019', NULL),
(230, 82, 'Konfigurasi Routerbeans Mikrotik RB-750', 'BACA', 'FIK/82/II/2019', '04/12/2019', NULL),
(231, 83, 'Membuat Sistem Informasi Kursus Berbasis WEB', 'BACA', 'FIK/83/II/2019', NULL, NULL),
(232, 84, 'Bikin Website Itu Mudah', 'BACA', 'FIK/84/II/2019', NULL, NULL),
(233, 85, 'Pasti Bisa belajar  Sendiri Microsopt Window 8.1', 'BACA', 'FIK/85/II/2019', NULL, NULL),
(234, 86, 'Membuat Toko Online Dengan Teknik OOP,MVC,Dan AJAX', 'BACA', 'FIK/86/II/2019', NULL, NULL),
(235, 87, 'Belajar Sendiri Desain Web Dengan Dreameaver', 'BACA', 'FIK/87/II/2019', NULL, NULL),
(236, 88, 'Jaringan Komputer Menggunakan Pendekatan Praktis', 'BACA', 'FIK/88/II/2019', NULL, NULL),
(237, 89, 'LINUX  Untuk Pendidikan Dengan Edubuntu', 'BACA', 'FIK/89/II/2019', NULL, NULL),
(238, 90, 'Sistem Operasi Cloud Computing Dengan Windows Azure', 'BACA', 'FIK/90/II/2019', NULL, NULL),
(239, 91, 'Codeigniter VS Laravel Kasus Membuat Pencari Kerja Menggunakan Codeigniter Versi  3.1.4 Dan Laravel Versi  5.4', 'BACA', 'FIK/91/II/2019', NULL, NULL),
(240, 92, 'Zend Framework  2.X  Solusi Mempercepat Pengembangan Aplikasi Berbasis Web Dengan PHP 5.x Framework', 'BACA', 'FIK/92/II/2019', NULL, NULL),
(241, 93, 'Rekayasa Perangkat Lunak  Testruktur Dan berorientasi Objek', 'BACA', 'FIK/93/II/2019', NULL, NULL),
(242, 94, 'Penerapan  DATA MINING Dengan MATLAB', 'BACA', 'FIK/94/II/2019', NULL, NULL),
(243, 95, '1 Hari Menjadi HECKER', 'BACA', 'FIK/95/II/2019', NULL, NULL),
(244, 96, 'FIBER  OPTIIC  Teknologi,Material,Instalasi,Dan Implementasi Fiber Untuk Berbagai kebutuhan :Fiber to The building,dll..', 'BACA', 'FIK/96/II/2019', NULL, NULL),
(245, 97, 'Pemrograman WEB  DENGAN  HTML Disertai Contoh .', 'BACA', 'FIK/97/II/2019', NULL, NULL),
(246, 98, 'Jurus Kilat Mahir Microsoft Windows 7 Dari Mahir Hingga Profesional', 'BACA', 'FIK/98/III/2019', NULL, NULL),
(247, 99, 'Konsep Dasar Rekayasa Perangkat Lunak ( Sofware Reengineering )', 'BACA', 'FIK/99/III/2019', NULL, NULL),
(248, 100, 'Administrasi Database Oracle 8 i', 'BACA', 'FIK/100/III/2019', NULL, NULL),
(249, 101, '25 Kreasi Desain Konveksi Dengan Adobe Illustrator Dan Photoshop CS 5.5', 'BACA', 'FIK/101/III/2019', NULL, NULL),
(250, 102, 'MATLAB Untuk Aljabar Linier &Matriks', 'BACA', 'FIK/102/III/2019', NULL, NULL),
(251, 103, 'DASAR PEMROGRAMAN  2 -Implementasi Menggunakan Java,C++,Matlab Dan Pascal', 'BACA', 'FIK/103/III/2019', NULL, NULL),
(252, 104, 'Adobe Acrobat X Pro ', 'BACA', 'FIK/104/III/2019', NULL, NULL),
(253, 105, 'Menghapus Virus Secara Manual.', 'BACA', 'FIK/105/III/2019', NULL, NULL),
(254, 106, 'Belajar Cepat Dan Praktis Menggunakan WINDOWS 7', 'BACA', 'FIK/106/III/2019', NULL, NULL),
(255, 107, 'Pemrograman  Client-Server Microsopt Visual Basic 6.0', 'BACA', 'FIK/107/III/2019', NULL, NULL),
(256, 108, 'Kupas Tuntas Bermacam Aplikasi Generasi Cloud Computing', 'BACA', 'FIK/108/III/2019', NULL, NULL),
(257, 109, 'Be Creative With HTML 5 Canvas', 'BACA', 'FIK/109/III/2019', NULL, NULL),
(258, 75, 'Aplikasi Pemesanan Catering CV.BHELLA DHELLA', 'PKL', 'PKL/SI/75/6/III/2019', NULL, NULL),
(259, 75, 'Sistem Informasi Penjualan Mesin Oven, Conveyor Dan Makaroni Berbasis Web Pada CV.EDI JAYA', 'SKRIPSI', 'SKRIPSI/SI/75/6/III/2019', NULL, NULL),
(260, 76, 'Sistem Informasi Perencanaan Keuangan UNIVERSITAS PEMBANGUNAN NASIONAL \'VETERAN\'JAWA TIMUR', 'PKL', 'PKL/SI/76/7/III/2019', '29/12/2019', NULL),
(261, 76, 'Sistem Pakar DIAGNOSIS Penyakit Cabai Menggunakan Metode FORWARD CHAINING Berbasis ANDROID', 'SKRIPSI', 'SKRIPSI/SI/76/7/III/2019', '29/12/2019', NULL),
(262, 77, 'Sistem Pendukung Keputusan Seleksi Karyawan Menggunakan Metode WEIGHTED PRODUCT Pada PT.LINTAS BANGUN PERSADA JAYA', 'PKL', 'PKL/SI/77/7/III/2019', '29/12/2019', NULL),
(263, 77, 'Pengembangan Dashboard KPI Bidang Penjualan Semen Curah, Semen Jumbo Bag Dan Proyek Menggunakan FITUR PERINTAH SUARA ( Studi Kasus : PT. Semen Indonesia Logistik )', 'SKRIPSI', 'SKRIPSI/SI/77/7/III/2019', '29/12/2019', NULL),
(264, 78, 'Sistem Informasi Pendaftaran Siswa Baru Lembaga Bimbingan Belajar Anak Bangsa Cerdas Berbasis DESKTOP', 'PKL', 'PKL/SI/78/7/III/2019', '29/12/2019', NULL),
(265, 78, 'Sistem Informasi Akademik Berbasis Web Pada SEKOLAH DASAR NEGERI PETEMON XII SURABAYA', 'SKRIPSI', 'SKRIPSI/SI/78/7/III/2019', NULL, NULL),
(266, 79, 'Sistem Informasi Pendaftaran Murid Baru SMP SASANA BHAKTI SURABAYA', 'PKL', 'PKL/SI/79/7/III/2019', '29/12/2019', NULL),
(267, 79, 'Penerapan CRM Pada Sistem Informasi Perseawaan Mobil Berbasis WEB ( Studi Kasus: CV.Rasita Irna )', 'SKRIPSI', 'SKRIPSI/SI/79/7/III/2019', NULL, NULL),
(268, 80, 'Sistem Informasi Pendaftaran Siswa Baru LEMBAGA BIMBINGAN BELAJAR ANAK BANGSA CERDAS Berbasis DESKTOP', 'PKL', 'PKL/SI/80/7/III/2019', NULL, NULL),
(269, 80, 'Sistem Informasi Akademik Lembaga Bimbingan Belajar Anak Bangsa Cerdas Berbasis WEB', 'SKRIPSI', 'SKRIPSI/SI/80/7/III/2019', NULL, NULL),
(270, 81, 'Sistem Informasi Pendaftaran Murid Baru SMP SASAN BHAKTI SURABAYA', 'PKL', 'PKL/SI/81/7/III/2019', NULL, NULL),
(271, 81, 'Penerapan CRM ( Customer Relationship Management ) Pada Toko Aksesoris Handphone Berbasis WEB ( Studi Kasus : TOKO RC ACC)', 'SKRIPSI', 'SKRIPSI/SI/81/7/III/2019', NULL, NULL),
(272, 82, 'Sistem Pengajuan Surat Keterangan Perjalanan Dinas Berbasis WEB ( Studi Kasus : BPJS KESEHATAN SIDOARJO)', 'PKL', 'PKL/SI/82/7/III/2019', NULL, NULL),
(273, 82, 'Sistem Informasi Pengelolaan Dana Donatur Berbasis WEB ( Studi Kasus : KANTOR PUSAT YAYASAN RIF\'ATUS SHOLIHAH SURABAYA )', 'SKRIPSI', 'SKRIPSI/SI/82/7/III/2019', NULL, NULL),
(274, 83, 'Aplikasi Pemesanan Catering CV.BHELLA DHELLA', 'PKL', 'PKL/SI/83/7/III/2019', NULL, NULL),
(275, 83, 'Sistem Pendukung Keputusan Penentuan Prioritas Perbaikan Jalan Dengan Metode SAW Berbasis GOOGLE MAP SERVICE', 'SKRIPSI', 'SKRIPSI/SI/83/7/III/2019', NULL, NULL),
(276, 84, 'Penerapan IT PROJECT MANAGEMENT Dan SCURITY AWARENESS Pada PT. PELABUHAN INDONESIA III ( Pelindo III ) Surabaya', 'PKL', 'PKL/SI/84/7/III/2019', NULL, NULL),
(277, 84, 'Rancang Bangun Sistem Informasi Manajemen Akademik Sekolah Dengan Pendekatan Arsitektur MVC ( Studi Kasus : SMK ANTARTIKA 1 Sidoarjo )', 'SKRIPSI', 'SKRIPSI/SI/84/7/III/2019', NULL, NULL),
(278, 85, 'Kosong Sesuai Surat ; Bukti Penyerahan Skripsi( Tugas Akhir ) Nomer: 2047/TA/2019', 'PKL', 'PKL/SI/85/7/III/2019', NULL, NULL),
(279, 85, 'Sistem Informasi Administrasi Proyek Pada PT.QUALIVA PRIMA ABADI Berbasis DESKTOP', 'SKRIPSI', 'SKRIPSI/SI/85/7/III/2019', NULL, NULL),
(280, 86, 'Sistem Kehadiran Berbasis Sidik Jari ( Studi Kasus : PROGDI SISTEM INFORMASI UPN \'VETERAN\'JAWA TIMUR', 'PKL', 'PKL/SI/86/7/III/2019', '29/12/2019', NULL),
(281, 86, 'Sistem Informasi Manajemen Kepegawaian Berbasis WEB ( Studi Kasus : PT.SANTANA MANGGALA KARYA )', 'SKRIPSI', 'SKRIPSI/SI/86/7/III/2019', '29/12/2019', NULL),
(282, 87, 'Sistem Informasi Pengukuran Kepuasan Pelanggan ( Studi Kasus : PT. OMETRACO ARYA SAMANTA )', 'PKL', 'PKL/SI/87/7/III/2019', '29/12/2019', NULL),
(283, 87, 'Sistem Informasi Kepegawaian Dengan Fitur Penilaian Kenerja Pegawai Menggunakan Metode AHP ( Analytical Hierarchy Process) (Studi Kasus :PT.ANUGERAH ABADI SEJAHTERA)', 'SKRIPSI', 'SKRIPSI/SI/87/7/III/2019', '29/12/2019', NULL),
(284, 88, 'Pembuatan Standar Operasional Prosedur(SOP) Pemeliharaan Infrastruktur Teknologi Informasi Pada INSPEKTORAT PROVINSI JAWA TIMUR', 'PKL', 'PKL/SI/88/7/III/2019', '29/12/2019', NULL),
(285, 88, 'Deteksi Emosi Tentang Pemilihan Presiden 2019 Pada TWITTER Dengan Menggunakan TEXT MINING', 'SKRIPSI', 'SKRIPSI/SI/88/7/III/2019', '29/12/2019', NULL),
(286, 89, 'Implementasi SAP Dalam Manajemen Aset Di Perusahaan Bidang Telekomunikasi ( Studi Kasus : PT. INDONESIA COMNETS PLUS )', 'PKL', 'PKL/SI/89/7/III/2019', NULL, NULL),
(287, 89, 'Analisis Pengukuran Kualitas Layanan E-GOVQUAL DI INDONESIA', 'SKRIPSI', 'SKRIPSI/SI/89/7/III/2019', NULL, NULL),
(288, 90, 'Perancangan Prototype Sistem Informasi Laporan Hasil Penjualan Berbasis Web Menggunakan FRAMEWORK CODEIGNITER (Studi Kasus : PERUM BULOG DIVISI REGIONAL JAWA TIMUR )', 'PKL', 'PKL/SI/90/7/III/2019', NULL, NULL),
(289, 90, 'Rancang Bangun Sistem Informasi Bimbingan Belajar Berbasis Web Menggunakan Framework Codeigniter ( Studi Kasus : Lembaga Bimbingan Belajar Learning Smart Fun ( LSF )', 'SKRIPSI', 'SKRIPSI/SI/90/7/III/2019', NULL, NULL),
(290, 91, 'Perancangan Prototype Sistem Informasi Laporan Hasil Penjualan Berbasis Web Menggunakan Framework Codeigniter Studi Kasus : PERUM BULOG DIVISI REGIONAL JAWA TIMUR', 'PKL', 'PKL/SI/91/7/III/2019', NULL, NULL),
(291, 91, 'Sistem Informasi Pengelolaan Sertifikat Prestasi Unit Kegiatan Mahasiswa Berbasis Web Di UPN \'VETERAN\' JAWA TIMUR', 'SKRIPSI', 'SKRIPSI/SI/91/7/III/2019', NULL, NULL),
(292, 92, 'Sistem Informasi Penyewaan Rental Mobil Pada: CV.VARIA INTI PERKASA', 'PKL', 'PKL/SI/92/7/III/2019', NULL, NULL),
(293, 92, 'Rancang Bangun Aplikasi Pemesan Menu Berbasis ANDROID DAN CLIENT-SERVER ( Studi Kasus : OOST KOFFIE AND THEE )', 'SKRIPSI', 'SKRIPSI/SI/92/7/III/2019', NULL, NULL),
(294, 93, 'Sistem Informasi Penjualan Barang Berbasis WEB Di CV. ANUGERAH LANCAR SEJATI', 'PKL', 'PKL/SI/93/7/III/2019', NULL, NULL),
(295, 93, 'Aplikasi Penjualan Jasa Optimasi Sosial Media Berbasis WEB', 'SKRIPSI', 'SKRIPSI/SI/93/7/III/2019', NULL, NULL),
(296, 94, 'Sistem Pendukung Seleksi Karyawan Menggunakan Metode WEIGHTED PRODUCT Pada PT. LNITAS BANGUN PERSADA JAYA', 'PKL', 'PKL/SI/94/7/III/2019', NULL, NULL),
(297, 94, 'Analisis Faktor Penerimaan Question And Answer Website ( QnA SITE ) Menggunakan UNIFIED THEORY OF ACCEPTANCE AND USE OF TECHNOLOGY ( UTAUT ) 2 (Studi Kasus : Branly Indonesia )', 'SKRIPSI', 'SKRIPSI/SI/94/7/III/2019', NULL, NULL),
(298, 95, 'Rancang Bangun Sistem Informasi Penyewaan Alat Musik Berbasis DESKTOP Pada MUSICAL\'S STUDIO', 'PKL', 'PKL/SI/95/8/III/2019', NULL, NULL),
(299, 95, 'Penerapan Sistem Informasi Penjualan Busana Muslim Dengan FITUR SMS GATEWAY ( Studi Kasus : TOKO BAJU DAN HIJAB D\'SHEYFA )', 'SKRIPSI', 'SKRIPSI/SI/95/8/III/2019', '29/12/2019', NULL),
(300, 96, 'Rancang Bangun Sistem Informasi Penjualan Pada PT. IKHSAN JAYA ABADI', 'PKL', 'PKL/SI/96/8/III/2019', NULL, NULL),
(301, 96, 'Perancangan Dan Pembuatan E-Commerce Berbasis Website Pada WAWAN FURNITURE Dengan Menggunakan FRAMEWORK CODEIGNITER', 'SKRIPSI', 'SKRIPSI/SI/96/8/III/2019', NULL, NULL),
(302, 97, 'Rancang Bangun Sistem Informasi Penjualan Furniture Di CV. Tanaya Gallery', 'PKL', 'PKL/SI/97/9/III/2019', NULL, NULL),
(303, 97, 'Sistem Informasi Penjualan Furniture Di CV. Tanaya Gallery Berbasis DESKTOP -', 'SKRIPSI', 'SKRIPSI/SI/97/9/III/2019', NULL, NULL),
(304, 98, 'Sistem Informasi Inventaris Pada Bengkel Bubut Dan las UD.EKA TEKNIK', 'PKL', 'PKL/SI/98/9/III/2019', NULL, NULL),
(305, 98, 'Sistem Informasi Penjualan Barang Pada Bengkel Bubut Dan Las UD.EKA TEKNIK Berbasis WEB', 'SKRIPSI', 'SKRIPSI/SI/98/9/III/2019', NULL, NULL),
(306, 99, 'Rancang Bangun sistem Informasi Pergudangan Berbasis DESKTOP Pada CV.MITRA TEKNIK', 'PKL', 'PKL/SI/99/9/III/2019', NULL, NULL),
(307, 99, 'Sistem Informasi Pencatatan Rekam Medis Pada KLINIK CIPTA MEDIKA DRIYOREJO Berbasis WEB', 'SKRIPSI', 'SKRIPSI/SI/99/9/III/2019', NULL, NULL),
(308, 100, 'Rancang Bangun Sistem Informasi Penjualan Berbasis DESKTOP DI DEPOT JOS GOBYOS', 'PKL', 'PKL/SI/100/9/III/2019', NULL, NULL),
(309, 100, 'Pengembangan Sistem Informasi Penjualan Berbasis Desktop Pada RUMAH MAKAN JOS GOBYOS', 'SKRIPSI', 'SKRIPSI/SI/100/9/III/2019', NULL, NULL),
(310, 101, 'Sistem Informasi Pendaftaran Online Berbasis Web Di TK.DUNIA SUZAN SURABAYA', 'PKL', 'PKL/SI/101/9/III/2019', NULL, NULL),
(311, 101, 'Rancang Bangun Sistem Informasi Pergudangan  (Studi Kasus : PT.INDO AICE )', 'SKRIPSI', 'SKRIPSI/SI/101/9/III/2019', NULL, NULL),
(312, 102, 'Sistem Informasi Pendaftaran Online Berbasis WEB Di TK.DUNIA SUZAN SURABAYA', 'PKL', 'PKL/SI/102/9/III/2019', NULL, NULL),
(313, 102, 'Sistem Informasi Pendaftaran Dan Seleksi Siswa Baru  Menggunakan CBT Berbasis WEB DI SMA SENOPATI SIDOARJO', 'SKRIPSI', 'SKRIPSI/SI/102/9/III/2019', NULL, NULL),
(314, 103, 'Rancang Bangun Sistem Informasi Penjualan Solar Berbasis DESKTOP Di PT. PUTRA MANSHUR JAYA SEJAHTERA', 'PKL', 'PKL/SI/103/9/III/2019', NULL, NULL),
(315, 103, 'Sistem Informasi Pembelian Dan Penjualan Hasil Tambak Berbasis DESKTOP Pada UD.BAROKAH', 'SKRIPSI', 'SKRIPSI/SI/103/9/III/2019', NULL, NULL),
(316, 104, 'Sistem Informasi Pendaftaran Siswa Baru Berbasis DESKTOP SDN PULOREJO 2 MOJOKERTO', 'PKL', 'PKL/SI/104/9/III/2019', NULL, NULL),
(317, 104, 'Rancang Bangun Sistem Informasi Penjualan Berbasis WEB', 'SKRIPSI', 'SKRIPSI/SI/104/9/III/2019', NULL, NULL),
(318, 105, 'Sistem Informasi TOKO ONLINE Dan Transaksi Berbasis Website Pada Permata Interior', 'PKL', 'PKL/SI/105/9/III/2019', NULL, NULL),
(319, 105, 'Sistem Informasi Penjualan TIKET KAPAL PELNI Berbasis Web Pada GAPURA SURYA NUSANTARA', 'SKRIPSI', 'SKRIPSI/SI/105/9/III/2019', NULL, NULL),
(320, 106, 'Perancangan Web Company Profile Pada PT.IGS Indonesia', 'PKL', 'PKL/SI/106/9/III/2019', NULL, NULL),
(321, 106, 'Virtual Tour Guide Sebagai Media Informasi Pada Fakultas Ilmu Komputer UPN\'VETERAN\'Jawa Timur Berbasis Virtual Reality', 'SKRIPSI', 'SKRIPSI/SI/106/9/III/2019', NULL, NULL),
(322, 107, 'Perekaman Data Functional Configuration ITEM Berbasis I.T.I.L. Menggunakan Sofware ITOP Di Lingkungan UPN\'VETERAN\' (Studi Kasus : FIK,FTI,FAD,FH )', 'PKL', 'PKL/SI/107/9/III/2019', NULL, NULL),
(323, 107, 'Aplikasi Pencatatan Pembelian Dan Penjualan Berbasis Android Dengan FRAMEWORK CORDAVA', 'SKRIPSI', 'SKRIPSI/SI/107/9/III/2019', NULL, NULL),
(324, 108, 'Aplikasi Perpustakaan Amdal Berbasis Web Studi Kasus DINAS LINGKUNGAN HIDUP PROVINSI JAWA TIMUR', 'PKL', 'PKL/SI/108/9/III/2019', NULL, NULL),
(325, 108, 'Rancang Bangun Sistem Informasi Perizinan Lingkungan Berbasis Web ( Studi Kasus : DINAS LINGKUNGAN HIDUP PROVINSI JAWA TIMUR )', 'SKRIPSI', 'SKRIPSI/SI/108/9/III/2019', NULL, NULL),
(326, 109, 'Aplikasi Absensi Kepegawaian Berbasis Desktop Studi Kasus : INSPETORAT PEMERINTAH PROVINSI JAWA TIMUR', 'PKL', 'PKL/SI/109/9/III/2019', NULL, NULL),
(327, 109, 'Identifikasi Kesuksesan Penggunaan Sistem Aplikasi Pengaduan Dan Keluhan Terpadu (APKT ) ( Studi Kasus : PT.PLN (Persero ) Di Jember )', 'SKRIPSI', 'SKRIPSI/SI/109/9/III/2019', NULL, NULL),
(328, 110, 'Aplikasi Absensi Kepegawaian Berbasis Desktop Studi Kasus : Inspektorat Pemerintah Provinsi Jawa Timur', 'PKL', 'PKL/SI/110/9/III/2019', NULL, NULL),
(329, 110, 'Analisis Kesuksesan Aplikasi Mobile PERSEBAYA SELAMANYA Dengan Pendekatan MODEL DELONE AND MCLEAN', 'SKRIPSI', 'SKRIPSI/SI/110/9/III/2019', NULL, NULL),
(330, 111, 'Sistem Informasi Inventory ( Studi Kasus : PT.OELANGAN KARYA ETAM )', 'PKL', 'PKL/SI/111/1/III/2019', NULL, NULL),
(331, 111, 'Rancang Bangun Sistem Monitoring Inventoring Barang Berbasis Website ( Studi Kasus : PT.OELANGAN KARYA ETAM )', 'SKRIPSI', 'SKRIPSI/SI/111/1/III/2019', NULL, NULL),
(332, 112, 'Aplikasi Absensi Kepegawaian Berbasis Desktop Studi Kasus : INSPEKTORAT PEMERINTAH PROVINSI JAWA TIMUR', 'PKL', 'PKL/SI/112/1/III/2019', NULL, NULL),
(333, 112, 'Analisis Persepsi Pelanggan Restoran Cepat Saji Pada Twitter Menggunakan Support Vector Machine .', 'SKRIPSI', 'SKRIPSI/SI/112/1/III/2019', '02/12/2019', NULL),
(334, 113, 'Optimalisasi Penggunaan Bandwith Menggunakan User Profile Mikrotik Studi Kasus : PT.CROSNET INDONESIA', 'PKL', 'PKL/SI/113/1/III/2019', NULL, NULL),
(335, 113, 'Sistem Informasi Monitoring Santri Berbasis Web ( Studi Kasus : Madrasah Bertaraf Internasional Amanatul Ummah Mojokerto )', 'SKRIPSI', 'SKRIPSI/SI/113/1/III/2019', '02/12/2019', NULL),
(336, 110, 'KEAMANAN Informasi Dan Internet', 'BACA', 'FIK/110/II/2019', NULL, NULL),
(337, 111, 'Pemrograman Aplikasi Android Dengan Sencha Touch', 'BACA', 'FIK/111/II/2019', NULL, NULL),
(338, 112, 'KEAMANAN Informasi Dan Internet', 'BACA', 'FIK/112/II/2019', NULL, NULL),
(339, 113, 'Panduan Lengkap Microsopt Excel 2007', 'BACA', 'FIK/113/II/2019', NULL, NULL),
(340, 114, 'CSCO CCNP Dan Jaringan Komputer', 'BACA', 'FIK/114/II/2019', NULL, NULL),
(341, 115, 'Belajar VB,Visual C# Dan Python Menggunakan Visual Studio', 'BACA', 'FIK/115/II/2019', NULL, NULL),
(342, 116, 'Aplikasi Program Terintegrasi dengan  VISUAL BASIC 6.0', 'BACA', 'FIK/116/II/2019', NULL, NULL),
(343, 117, 'Siapa Bikin Blog & Web Harus Bayar', 'BACA', 'FIK/117/II/2019', '29/12/2019', NULL),
(344, 118, 'KEAMANAN Informasi Dan Internet', 'BACA', 'FIK/118/II/2019', '29/12/2019', NULL),
(345, 119, 'Membuat Aplikasi Penjualan Dan Stop Barang Dengan Macro Excel', 'BACA', 'FIK/119/II/2019', NULL, NULL),
(346, 120, 'Sekali Baca Langsung Ingat Merakit Komputer', 'BACA', 'FIK/120/II/2019', NULL, NULL),
(347, 121, 'Kumpulan PHP Untuk Pemula', 'BACA', 'FIK/121/II/2019', NULL, NULL),
(348, 122, 'Pemrograman Aplikasi Android Dengan Sencha Touch', 'BACA', 'FIK/122/II/2019', NULL, NULL),
(349, 123, 'Membuat Website PHP Dengan Codeigniter', 'BACA', 'FIK/123/II/2019', NULL, NULL),
(350, 124, 'Pengantar Teknologi Informasi', 'BACA', 'FIK/124/II/2019', NULL, NULL),
(351, 125, 'Panduan Audit Keamanan Komputer Bagi Pemula', 'BACA', 'FIK/125/II/2019', NULL, NULL),
(352, 126, 'Data Base Systems Case sutdy All In One', 'BACA', 'FIK/126/II/2019', NULL, NULL),
(353, 127, 'Construct 2 Tutorial Game Engine', 'BACA', 'FIK/127/II/2019', NULL, NULL),
(354, 128, 'Pemrograman C Dan C++', 'BACA', 'FIK/128/II/2019', NULL, NULL),
(355, 129, 'Bootstrap CSS Framework', 'BACA', 'FIK/129/II/2019', NULL, NULL),
(356, 130, 'Mudah Menguasai Laravel', 'BACA', 'FIK/130/II/2019', NULL, NULL),
(357, 131, 'UML Distille edisi 3 Panduan Singkat Bhs Pemodelan Objek Standar', 'BACA', 'FIK/131/II/2019', '29/12/2019', NULL),
(358, 132, 'Akses Internet Dengan Komputer Dan PHP', 'BACA', 'FIK/132/II/2019', NULL, NULL),
(359, 133, 'Pemrograman PL / SQL ORACLE', 'BACA', 'FIK/133/II/2019', NULL, NULL),
(360, 134, 'Membuat Aplikasi Sistem Inventory Dengan V.B.Net 2005 Dan SQL Server 2005', 'BACA', 'FIK/134/II/2019', '29/12/2019', NULL),
(361, 135, 'Step By Step MS SQL Serve', 'BACA', 'FIK/135/II/2019', NULL, NULL),
(362, 136, 'Rumus Dan Fungsi Microsopt Access 2007', 'BACA', 'FIK/136/II/2019', '29/12/2019', NULL),
(363, 137, 'Pemrograman WEB Dengan HTML', 'BACA', 'FIK/137/II/2019', NULL, NULL),
(364, 138, 'Tutorial Lengkap Menguasai ArcGIS 10', 'BACA', 'FIK/138/II/2019', NULL, NULL),
(365, 139, 'Panduan Mudah Belajar Framework LARAVEL', 'BACA', 'FIK/139/II/2019', NULL, NULL),
(366, 140, 'Algoritma Dan Pemrograman Dalam Bahasa Pascal dan C', 'BACA', 'FIK/140/II/2019', NULL, NULL),
(367, 141, 'Dasar Pemrograman Komputer Dalam Bahasa JAVA', 'BACA', 'FIK/141/II/2019', NULL, NULL),
(368, 142, 'StepByStep Membuat SOP 203', 'BACA', 'FIK/142/II/2019', NULL, NULL),
(369, 143, 'Mengenal Java Dan Database Dengan NETBEANS', 'BACA', 'FIK/143/II/2019', NULL, NULL),
(370, 144, 'Pemodelan VisuaL Dengan UML', 'BACA', 'FIK/144/II/2019', NULL, NULL),
(371, 145, 'Pemrograman Sistem Informassi Dan aplikasinya', 'BACA', 'FIK/145/II/2019', NULL, NULL),
(372, 146, 'Mengenal Java Dan Data Base Dengan Netbeants', 'BACA', 'FIK/146/II/2019', NULL, NULL),
(373, 147, 'Pemrograman WEB', 'BACA', 'FIK/147/II/2019', NULL, NULL),
(374, 148, 'Kreasi Company Profile Interaktif Dengan Flash Action 3.0', 'BACA', 'FIK/148/II/2019', '09/12/2019', NULL),
(375, 149, 'Pemrograman JAVA Dari Nol', 'BACA', 'FIK/149/II/2019', '09/12/2019', NULL);
INSERT INTO `bukus` (`id`, `fromid`, `nama`, `kat_buku`, `kode_buku`, `tgl_qrcode`, `rak`) VALUES
(376, 150, 'Praktis Dan mudah Administrasi MySQL Berbasis GUI', 'BACA', 'FIK/150/II/2019', '09/12/2019', NULL),
(377, 151, 'Web Makin Dahsyat Dengan jQuery', 'BACA', 'FIK/151/II/2019', '09/12/2019', NULL),
(378, 152, 'Dasar Dasar Pemrograman  Database Desktop Dengan Visual Basic.Net 2008', 'BACA', 'FIK/152/III/2019', '09/12/2019', NULL),
(379, 153, 'Kumpulan Aplikasi Berbasis VB6,VB.Net, Java', 'BACA', 'FIK/153/III/2019', '09/12/2019', NULL),
(380, 154, 'Construct 2 Tutorial Game Engine', 'BACA', 'FIK/154/III/2019', '09/12/2019', NULL),
(381, 155, 'Panduan Membuat Aplikasi Program Toko Berbasis Web Dengan PHP,MySQL,Dan Dreamweaver', 'BACA', 'FIK/155/III/2019', '09/12/2019', NULL),
(382, 156, 'BITCOIN ( Mata Uang Digital Dunia )', 'BACA', 'FIK/156/III/2019', '29/12/2019', NULL),
(383, 157, 'Algoritma & Struktur Data Dengan C++', 'BACA', 'FIK/157/III/2019', '29/12/2019', NULL),
(384, 158, 'Jago Bikin Aplikasi Smart Phone', 'BACA', 'FIK/158/III/2019', '29/12/2019', NULL),
(385, 159, 'Aplikasi ANDROID DALAM 5 Menit', 'BACA', 'FIK/159/III/2019', '29/12/2019', NULL),
(386, 160, 'Cara Instan Membuat Website', 'BACA', 'FIK/160/III/2019', '29/12/2019', NULL),
(391, 165, 'Hacking Streaming ,Jurus Sakti Membangun Server Streaming Dengan NGINX-RTMP', 'BACA', 'FIK/165/III/2019', '29/12/2019', NULL),
(392, 166, 'Rekayasa Perangkat Lunak Menggunakan UML Dan JAVA', 'BACA', 'FIK/166/III/2019', '29/01/2020', NULL),
(393, 167, 'Menaklukkan Virus Komputer', 'BACA', 'FIK/167/III/2019', '29/12/2019', NULL),
(394, 168, 'Sistem Informasi Akademik Kampus Berbasis Web Dengan LARAVEL 5', 'BACA', 'FIK/168/III/2019', '29/12/2019', NULL),
(395, 169, 'Windows 8.1 Panduan Lengkap', 'BACA', 'FIK/169/III/2019', '29/12/2019', NULL),
(396, 170, 'Konsep Dasar REKAYASA pERANGKAT LUNAK', 'BACA', 'FIK/170/III/2019', '29/12/2019', NULL),
(397, 171, 'Android & Perancangan Sistem Informasi', 'BACA', 'FIK/171/III/2019', '29/12/2019', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosens`
--

CREATE TABLE `dosens` (
  `id` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_fak` varchar(15) NOT NULL,
  `id_jur` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fakultas`
--

CREATE TABLE `fakultas` (
  `id` int(11) NOT NULL,
  `nama_fakultas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fakultas`
--

INSERT INTO `fakultas` (`id`, `nama_fakultas`) VALUES
(2, 'Fakultas Ilmu Komputer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kunjungans`
--

CREATE TABLE `kunjungans` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `kunjungan` varchar(20) DEFAULT NULL,
  `out` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kunjungans`
--

INSERT INTO `kunjungans` (`id`, `username`, `kunjungan`, `out`) VALUES
(1, '0534010095', '02/12/2019 12:52:54', ''),
(2, '0534010095', '03/12/2019 16:37:59', ''),
(3, '0534010095', '19/12/2019 14:32:14', ''),
(4, '1635010003', '29/12/2019 13:03:57', ''),
(5, '0534010095', '03/12/2019 12:52:54', ''),
(6, '0534010095', '04/12/2019 10:52:54', ''),
(7, '0534010095', '04/12/2019 13:52:54', ''),
(8, '0534010095', '04/12/2019 14:15:54', '04/12/2019 14:16:54'),
(9, '0534010095', '04/12/2019 14:21:54', '04/12/2019 14:22:54'),
(10, '0534010095', '04/12/2019 15:23:44', '04/12/2019 15:24:44'),
(11, '0534010095', '07/01/2020 20:37:30', '07/01/2020 20:43:20'),
(12, '0534010095', '07/01/2020 20:59:10', '07/01/2020 21:10:36'),
(13, '0534010095', '07/01/2020 20:59:25', '07/01/2020 21:10:55'),
(16, '0534010095', '07/01/2020 21:02:36', '07/01/2020 21:12:03'),
(17, '0534010095', '07/01/2020 21:14:10', '07/01/2020 21:14:20'),
(18, '0534010095', '07/01/2020 21:14:36', '07/01/2020 21:14:45'),
(19, '0534010095', '20/01/2020 20:30:58', '20/01/2020 20:31:10'),
(22, '1534010095', '29/01/2020 19:43:32', '29/01/2020 21:41:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswas`
--

CREATE TABLE `mahasiswas` (
  `id` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `npm` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_fak` varchar(15) NOT NULL,
  `id_jur` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswas`
--

INSERT INTO `mahasiswas` (`id`, `id_users`, `npm`, `nama`, `id_fak`, `id_jur`) VALUES
(1, 26, '0534010095', 'mhs zayyan', '2', '1'),
(2, 28, '0635010003', 'emilia rosa', '2', '3'),
(3, 29, '1534010000', 'zayyan semhas', '2', '1'),
(4, 30, '1134010090', 'cindy aura balqis', '2', '1'),
(5, 31, '1134010091', 'shinta', '2', '1'),
(6, 32, '1134010092', 'bagas pratama', '2', '1'),
(7, 33, '1134010093', 'rudi halim santoso', '2', '1'),
(8, 0, '1434010116', 'MUHAMMAD KEVIN FEBRIANTO', '2', '1'),
(9, 0, '1434010097', 'YOGA ADITYA WICAKSANA', '2', '1'),
(10, 0, '1434010052', 'ARI WAHYU HIDAYAH', '2', '1'),
(11, 0, '1434010035', 'KRISNA JAUHAR ABI ZAKARIA', '2', '1'),
(12, 0, '1434010095', 'MAHENDRA EKA SETIAWAN', '2', '1'),
(13, 0, '1434010036', 'R. MEHINDRA PRASMATIO', '2', '1'),
(14, 0, '1534010067', 'BAGUS ADHI WICAKSONO', '2', '1'),
(15, 0, '1434010049', 'AJI BIMANTORO', '2', '1'),
(16, 0, '1634010026', 'RAHMAWATI', '2', '1'),
(17, 0, '1634010004', 'NADYA RUSMA ALAMINIAH', '2', '1'),
(18, 0, '1634010066', 'ARDISTY PALVELUS JUMALA', '2', '1'),
(19, 0, '1434010088', 'PUTRI MEGA SUKMAWATI', '2', '1'),
(20, 0, '1634010029', 'MOCHAMMAD SUBRA IRHAZ', '2', '1'),
(21, 0, '1434010141', 'WINDA SURYANING RATRI PANGASTUTI', '2', '1'),
(22, 0, '1534010117', 'AHMAD RIFQI TAUFIQIE', '2', '1'),
(23, 0, '1434010211', 'IRWAN KURNIAWAN', '2', '1'),
(24, 0, '1634010025', 'M. MIFTACHUL ANWAR', '2', '1'),
(25, 0, '1634010053', 'DHANY SATYA HUTAMA', '2', '1'),
(26, 0, '1634010040', 'ROBY SIROJUL ABRORY', '2', '1'),
(27, 0, '1434010168', 'ILHAM BAHSYIRUDDIN ICHSAN', '2', '1'),
(28, 39, '1534010095', 'MOCHAMMAD ZAYYAN RAMADHAN', '2', '1'),
(29, 0, '1634010008', 'MARETTA RINTSLIANDRA PUTRI SIHOMBING', '2', '1'),
(30, 0, '1434010147', 'TAUFIKURRAHMAN', '2', '1'),
(31, 0, '1534010059', 'BURHANUDDIN MUHAMMAD ZHIROF', '2', '1'),
(32, 0, '1634010069', 'ILHAM SETIA RINALDHI', '2', '1'),
(33, 0, '1434010148', 'ABIDZAR FAJAR MAULANA', '2', '1'),
(34, 0, '1634010068', 'MUHAMMAD DIKY SETIYAWAHYUDI', '2', '1'),
(35, 0, '1434010214', 'YANUAR PRASETYO', '2', '1'),
(36, 0, '1634010088', 'EMMIL YULIANTO', '2', '1'),
(37, 0, '1334010114', 'GILANG GEMA RAMADHAN', '2', '1'),
(38, 0, '1634010093', 'ANITA NUSARI', '2', '1'),
(39, 0, '1434010061', 'DAVID RISDIANTO', '2', '1'),
(40, 0, '1534010056', 'YUDHA YUNIARTHA KUSUMA WARDHANA', '2', '1'),
(41, 0, '1634010043', 'JANNATUL FIRDAUS', '2', '1'),
(42, 0, '1434010177', 'ANGGA MAULANA SANTOSA', '2', '1'),
(43, 0, '1634010042', 'AKHMAD FAHRUR ROZY', '2', '1'),
(44, 0, '1634010083', 'BERRYL PAMUDYA FIRENSHA', '2', '1'),
(45, 0, '1434010136', 'MUKHAMMAD NUR KHOLIS', '2', '1'),
(46, 0, '1434010054', 'MUHAMMAD HERDIANSYAH PUTRA PERDANA', '2', '1'),
(47, 0, '1534010057', 'YUZRIL FADHIL MUHAMMAD', '2', '1'),
(48, 0, '1634010054', 'HELDIAN LINTANG PERDANA', '2', '1'),
(49, 0, '1634010087', 'FARIS HIRMAR PRALAS', '2', '1'),
(50, 0, '1534010048', 'FAIZ RIZKY RAMADHAN', '2', '1'),
(51, 0, '1634010001', 'ERDIN ABDURRAHMAN', '2', '1'),
(52, 0, '1534010109', 'MUKHAMMAD AINUR ROZAQI', '2', '1'),
(53, 0, '1634010035', 'EVENDI', '2', '1'),
(54, 0, '1634010050', 'AGUS PRAYOGI', '2', '1'),
(55, 0, '1634010089', 'RAYHAN AULIA NURRACHMAN', '2', '1'),
(56, 0, '1634010056', 'RIZQI CHANDRA PRAMANA', '2', '1'),
(57, 0, '1434010174', 'OKY AGUS HERMAWAN', '2', '1'),
(58, 0, '1634010063', 'MOCH. ZACHARIA AZRA', '2', '1'),
(59, 0, '1434010198', 'DENY ALIF FIRMANSYAH', '2', '1'),
(60, 0, '1534010082', 'ANZHARI PERDANA SYAFEGA', '2', '1'),
(61, 0, '1534010054', 'HERMAN NURDIANSYAH', '2', '1'),
(62, 0, '1634010013', 'AGUNG SYAIFUL UMAR', '2', '1'),
(63, 0, '1434010029', 'DIAN CAHYONO PUTRO', '2', '1'),
(64, 0, '1634010067', 'MAR ATUL ADILA', '2', '1'),
(65, 0, '1634010007', 'MUHAMMAD THORIQ SHOLIHUDDIN AL AYYUBI', '2', '1'),
(66, 0, '1634010012', 'ZELI ERIKA SHOLIKHA', '2', '1'),
(67, 0, '1434010041', 'MOHAMAD NUR AMIN', '2', '1'),
(68, 0, '1634010044', 'MOHAMAD RIZKY', '2', '1'),
(69, 0, '1634010009', 'SINGGIH PUTRA PRATAMA', '2', '1'),
(70, 0, '1434010010', 'MIFTAKHUL ARIFAN', '2', '1'),
(71, 0, '1534010111', 'MUKHAMMAD ADI FIRMANSYAH', '2', '1'),
(72, 0, '1634010002', 'MARIA CATHERINE AYU PRANOTO', '2', '1'),
(73, 0, '1534010033', 'ALFIAN HENDIKA PUTRA', '2', '1'),
(74, 0, '1534010097', 'BIMA PUTRA G.P', '2', '1'),
(75, 0, '1634010005', 'DEWI NUR AINI', '2', '1'),
(76, 0, '1634010020', 'MOH. SHAUBIL HAQ AL-FALAH SAHBANA', '2', '1'),
(77, 0, '1634010091', 'ILHAM ADE WIDYA SAMPURNO', '2', '1'),
(78, 0, '1634010052', 'RICO SANDYCA NOVENZA', '2', '1'),
(79, 0, '1634010065', 'MOHAMMAD IQBAL ROZIQ', '2', '1'),
(80, 0, '1634010061', 'HADIANSYAH RACHMAWAN PUTRA', '2', '1'),
(81, 0, '1634010085', 'NOBEL HUMANIA BILLAH', '2', '1'),
(82, 0, '1534010107', 'ISFAN RACHMAD AVIANTO', '2', '1'),
(83, 0, '1634010019', 'ALIF FAHRI MAGHRIZA', '2', '1'),
(84, 0, '1634010033', 'IFNU WISMA DWI PRASTYA', '2', '1'),
(85, 0, '1634010018', 'FAJAR PUTRA HARIYANTO', '2', '1'),
(86, 0, '1434010129', 'AHMAD FAISHOL KHANIF', '2', '1'),
(87, 0, '1634010055', 'MUHAMMAD SYAFRIL HIDAYAT', '2', '1'),
(88, 0, '1634010027', 'M. AUNUN NAJIB KHOIS', '2', '1'),
(89, 0, '1634010048', 'NABELLA PERMATA SARI', '2', '1'),
(90, 0, '1334010175', 'KEFIN NIAMUR PERMADI', '2', '1'),
(91, 0, '1634010014', 'SENNY MELIYAN', '2', '1'),
(92, 0, '1634010016', 'RONNY SUBAGIA', '2', '1'),
(93, 0, '1534010005', 'AHMAD NAUFAL FIRDAUS', '2', '1'),
(94, 0, '1434010155', 'ADHIKA ACHMAD JALALLUDIN RUMY', '2', '1'),
(95, 0, '1634010051', 'MUH. MIFTAKHUN NIZAR', '2', '1'),
(96, 0, '1634010037', 'RAHEL WIDYA ARIANTI', '2', '1'),
(97, 0, '1434010002', 'FAISAL FAHRI FERDIANSYAH', '2', '1'),
(98, 0, '1534010065', 'NADHIF REVISYACH FAHMI SETYA WALUYO', '2', '1'),
(99, 0, '1634010092', 'ILHAM DWIFASMA', '2', '1'),
(100, 0, '1634010057', 'M. HAFIDZ AMARUL MARUFI', '2', '1'),
(101, 0, '1634010015', 'MUHAMMAD NUR HAQIQI', '2', '1'),
(102, 0, '1634010079', 'QONITAH JIHAN NABILAH', '2', '1'),
(103, 0, '1634010075', 'NUR AINI ERSANTI', '2', '1'),
(104, 0, '1634010072', 'VINZA HEDI SATRIA', '2', '1'),
(105, 0, '1634010039', 'I MADE PANDE KRESNA MAHARDHIKA', '2', '1'),
(106, 0, '1634010006', 'KRIS ANDRE PRASETYO', '2', '1'),
(107, 0, '1634010086', 'RHEZA RIZQI AHMADI', '2', '1'),
(108, 0, '1634010032', 'NURUL FUAD', '2', '1'),
(109, 0, '1634010011', 'IRFAN FARID', '2', '1'),
(110, 0, '1634010010', 'DIAN ARISTA', '2', '1'),
(111, 0, '1634010038', 'LUKYTO RACHMAT WIDODO', '2', '1'),
(112, 0, '1634010081', 'ILVI NUR DIANA', '2', '1'),
(113, 0, '1434010078', 'M FARIS EKO SAPUTRA', '2', '1'),
(114, 0, '1634010049', 'AKBAR MAULANA D', '2', '1'),
(115, 0, '1634010017', 'MUHAMMAD AGUNG SHOBIRIN', '2', '1'),
(116, 0, '1634010082', 'HILMAN FADHLILLAH LESMANA', '2', '1'),
(117, 0, '1634010060', 'MOCH. FIKRI HIDAYAT', '2', '1'),
(118, 0, '1634010071', 'MOCHAMAD GIAN RAZAN', '2', '1'),
(119, 0, '1534010101', 'ISLAH RACHMAWATI', '2', '1'),
(120, 0, '1634010064', 'LUGITO MICHAEL IMANUEL PRASETYA', '2', '1'),
(121, 0, '1634010047', 'MAULANA IHSANUR ROZAQ', '2', '1'),
(122, 0, '1634010028', 'ALYANI MUTIAH', '2', '1'),
(123, 0, '1634010076', 'MUHAMMAD SURIANSYAH', '2', '1'),
(124, 0, '1634010046', 'FITRI RAHMAWATI', '2', '1'),
(125, 0, '1634010058', 'AHMAD SIDQI BAHARIAWANSYAH', '2', '1'),
(126, 0, '1634010073', 'REZA ACHMAD GALLANTA', '2', '1'),
(127, 0, '1634010030', 'SYAWALUDIN SUHADAK', '2', '1'),
(128, 0, '1635010075', 'MOHAMAD RIZA RAMADHANI ODING', '2', '3'),
(129, 0, '1535010005', 'WAHYU RATNODIANTO', '2', '3'),
(130, 0, '1635010069', 'EZA SEPTYA HARMAWATI', '2', '3'),
(131, 0, '1535010047', 'ERLANGGA NORMAN WICAKSANA', '2', '3'),
(132, 0, '1535010027', 'ABDUL HANIF AL`ATHO`ILLAH', '2', '3'),
(133, 0, '1635010011', 'RAHMAH PUTRI FARISKA', '2', '3'),
(134, 0, '1635010025', 'RIZKY DWI PRATIWI', '2', '3'),
(135, 0, '1635010071', 'PUTU GEDE KRISNA MEISA PUTRA', '2', '3'),
(136, 0, '1535010040', 'MUHAMMAD RIFKI', '2', '3'),
(137, 0, '1535010059', 'REZCIO NARINDA INDRAPRASTA', '2', '3'),
(138, 0, '1635010048', 'BENI KURNIAWAN', '2', '3'),
(139, 0, '1635010004', 'ERICA MAS UDAH', '2', '3'),
(140, 0, '1635010059', 'RIFQI NAUFAL WIGUSTI', '2', '3'),
(141, 0, '1635010057', 'MASHITA KUSTYANI', '2', '3'),
(142, 0, '1635010056', 'AHMAD VIRDAUZY RIZKY AKBAR', '2', '3'),
(143, 0, '1535010026', 'AYU PUTRI FITRIANI', '2', '3'),
(144, 0, '1635010063', 'GITA ISLAMIWATY SUHERLAN', '2', '3'),
(145, 0, '1635010021', 'KOLFINNA REVI W.', '2', '3'),
(146, 0, '1635010037', 'ARIF RAHMAN RUBIANSYAH', '2', '3'),
(147, 0, '1635010019', 'AHMAD QUSHAY AL BARRA', '2', '3'),
(148, 0, '1535010039', 'MUCHAMMAD FAUZI MUBARROQ', '2', '3'),
(149, 0, '1635010030', 'BOBY RIZKY PERMADI', '2', '3'),
(150, 0, '1535010114', 'BAYU PRASETYA', '2', '3'),
(151, 0, '1635010029', 'ABRAHAM HAHOLONGAN NARMADA POHAN', '2', '3'),
(152, 0, '1635010034', 'QONITA', '2', '3'),
(153, 0, '1535010089', 'YANRAL AFRIN WIRANATA', '2', '3'),
(154, 0, '1635010050', 'DANIEL GLORYO NADIRCO', '2', '3'),
(155, 0, '1635010028', 'RAHMANDA WAHYU ADINEGORO', '2', '3'),
(156, 0, '1635010016', 'USLIFATUL FUAIDA', '2', '3'),
(157, 0, '1635010061', 'MEIVY BAGUS SETYA PRADANA', '2', '3'),
(158, 0, '1535010018', 'MOCHAMMAD SETO HASANUDIN', '2', '3'),
(159, 0, '1635010074', 'ABIYYU NAUFAL SHAFLY', '2', '3'),
(160, 0, '1635010068', 'ANDHIKA PUTRA PERDANA', '2', '3'),
(161, 0, '1635010070', 'I GEDE OKTA BUDI MARDANA', '2', '3'),
(162, 0, '1535010101', 'RIZALDY DETA PERMANA', '2', '3'),
(163, 0, '1535010098', 'DIDIT AURYAN IMANSYAH MASHUDAH', '2', '3'),
(164, 0, '1635010076', 'MUHAMMAD BACHRUL ULUM', '2', '3'),
(165, 0, '1635010067', 'YHAN ALFIS SYAHRIN', '2', '3'),
(166, 0, '1635010031', 'RAHMA ADISTA AMALIASANTI', '2', '3'),
(167, 0, '1635010023', 'YERIKHO DWI HARPENDI P', '2', '3'),
(168, 0, '1635010047', 'NURUL FIRDAUS', '2', '3'),
(169, 0, '1535010095', 'RAKHMAT SAFRI A P', '2', '3'),
(170, 0, '1635010051', 'M. CALVIN ALEXANDER RACHMAN', '2', '3'),
(171, 0, '1635010044', 'VIVI NOVIANA', '2', '3'),
(172, 0, '1635010077', 'SITI ZAKIYATUL MAWADDAH', '2', '3'),
(173, 0, '1635010022', 'ANA KHOLIFATUL JANAH', '2', '3'),
(174, 0, '1635010015', 'MUHAMMAD ILFADZ ALFIAN', '2', '3'),
(175, 0, '1635010010', 'ARILZA FARDLIANA', '2', '3'),
(176, 0, '1635010062', 'ZULFA FIRNANDA CHAIRUNNISA', '2', '3'),
(177, 0, '1635010003', 'EMILIA ROSA', '2', '3'),
(178, 0, '1635010054', 'ULFIANITA AMAMI', '2', '3'),
(179, 0, '1535010112', 'MOH. BAIQ BADAROZ', '2', '3'),
(180, 0, '1535010091', 'HARIZT IGA BUANA', '2', '3'),
(181, 0, '1635010046', 'AJIRASA', '2', '3'),
(182, 0, '1635010043', 'DINTA APRILIA PUTRI', '2', '3'),
(183, 0, '1635010026', 'MUHAMMAD ALEQ ABDILLAH', '2', '3'),
(184, 0, '1635010041', 'TANTRA PUJA BASMALLAH', '2', '3'),
(185, 0, '1635010013', 'PIPIN TRIO IRAWAN', '2', '3'),
(186, 37, '1635010002', 'MUHAMMAD YUSUF RANDY', '2', '3'),
(187, 0, '1635010053', 'AKHMAD RAMDHAN PAMUJI', '2', '3'),
(188, 38, '1635010020', 'LINDA SEMBILLA', '2', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `nip_petugas` varchar(50) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `jabatan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id`, `id_users`, `nip_petugas`, `nama_petugas`, `jabatan`) VALUES
(2, 2, '123456', 'admin', 'admin'),
(5, 25, '2020', 'ptg zayyan', 'petugas'),
(6, 27, '36202101871', 'misman', 'petugas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjams`
--

CREATE TABLE `pinjams` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `id_buku` varchar(11) NOT NULL,
  `tgl_pinjam` varchar(20) NOT NULL,
  `tgl_kembali` varchar(20) DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `denda` varchar(20) DEFAULT NULL,
  `bayar_denda` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pinjams`
--

INSERT INTO `pinjams` (`id`, `username`, `id_buku`, `tgl_pinjam`, `tgl_kembali`, `status`, `denda`, `bayar_denda`) VALUES
(1, '0534010095', '386', '02/12/2019 13:07:03', '02/12/2019 13:21:55', 'Selesai', '', NULL),
(2, '0534010095', '385', '21/01/2020 13:07:13', '-', 'Pinjam', '6000', NULL),
(3, '0534010095', '333', '02/12/2019 13:08:08', '-', 'Pinjam', '56000', NULL),
(4, '0534010095', '393', '03/12/2019 16:40:49', '-', 'Pinjam', '55000', NULL),
(5, '0534010095', '396', '19/12/2019 14:42:19', '29/12/2019 14:43:20', 'Selesai', '7000', '7000'),
(6, '0534010095', '384', '19/12/2019 14:49:00', '29/01/2020 14:49:00', 'Selesai', '38000', '38000'),
(7, '1635010003', '393', '29/12/2019 13:14:02', '2/01/2020 13:15:01', 'Selesai', '1000', '1000'),
(8, '1534010095', '393', '29/01/2020 20:15:07', '29/01/2020 20:16:34', 'Selesai', NULL, NULL),
(9, '1534010095', '392', '20/01/2020 20:15:07', '29/01/2020 20:37:49', 'Selesai', '6000', '6000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pklskripsis`
--

CREATE TABLE `pklskripsis` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `npm` varchar(20) NOT NULL,
  `pkl` varchar(255) DEFAULT NULL,
  `skripsi` varchar(255) DEFAULT NULL,
  `wisuda` varchar(15) DEFAULT NULL,
  `tgl` varchar(15) NOT NULL,
  `progdi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pklskripsis`
--

INSERT INTO `pklskripsis` (`id`, `nama`, `npm`, `pkl`, `skripsi`, `wisuda`, `tgl`, `progdi`) VALUES
(1, 'Revanda dwi Fani', '1534010024', 'Konfigurasi Hotspot Pada Routerboard Dan Troubleshooting Berbasis Mikrotik Untuk Pelanggan PT.MEDIA CIPTA TRIMETIKA ( Triple Net )', 'Implementasi Intrusion Prevention System ( IPS ) Untuk Deteksi Dan Pencegahan Serangan', '2019/3', '29/07/2019', 'Teknik Informatika'),
(2, 'M.Arief Ubaidillah', '1534010019', 'Implementasi File Transfer Protocol ( FTP ) Server Dengan Moodle Di SMA KARTIKA IV-3 Surabaya', 'Implementasi Sistem Keamanan Jaringan Pada Server Dengan Metode Port Knocking Berbasis Mikrotik Router OS', '2019/3', '29/07/2019', 'Teknik Informatika'),
(3, 'Arief Bagas Samudra', '1534010014', 'Implementasi Web Server Intranet Pada SMA KARTIKA IV-3 SURABAYA', 'Implementasi Private Cloud Storege Sebagai Manajemen File Menggunakan Owncloud Di STKIP HIKMAH SURABAYA', '2019/3', '29/07/2019', 'Teknik Informatika'),
(4, 'M.Syafuddin Zulwadi', '1234010108', 'Pembuatan Sistem E-Learning Berbasis PHP Di SMA HANG-TUAH 4 SURABAYA', 'Sistem Informasi Agensi Travel Dan Rental Mobil Berbasis Website Dengan Menggunakan Framework Codeigniter', '2019/3', '30/07/2019', 'Teknik Informatika'),
(5, 'Faizal Rahmat R.', '1234010104', 'Pembuatan Web Profile SDN MEDOKAN AYU 1', 'Perencanaan Arsitektur Teknologi Informasi Pada Pelayanan Rawat Inap Menggunakan Framework Togaf Adm Studi Kasus : Rumah Sakit Jiwa Menur Surabaya', '2019/3', '30/07/2019', 'Teknik Informatika'),
(6, 'Wisang Sanjaya', '1234010078', 'Pembuatan Website Ujian Online Di Lembaga Penjaminan Mutu Pendidikan ( LPMP ) Jawa Timur', 'Teknik Virtualisasi Docker Multi Container ( Docker Swarm ) Dalam ManaGement Server )', '2019/3', '30/07/2019', 'Teknik Informatika'),
(7, 'Kiki Bahrum Suharno', '1234010126', 'Rancang Bangun Website E-Commerce Goal Clothing Berbasis Conten Management System', 'Implementasi Keamanan Jaringan Komputer Menggunakan IP TABLES Dan BRO IDS ( Intrusion Detection System ) Dengan Notifikasi Email Pada Laboratorium Elektro Universitas HangTuah Surabaya', '2019/3', '30/07/2019', 'Teknik Informatika'),
(8, 'Wahyu Ramadhan', '1434010030', 'Perancangan Website Profile SEKOLAH DASAR ANGKASA PURA SURABAYA Menggunakan CMS JOOMLA ( Template Helix Ultimate )', 'Prototipe Sistem Monitoring Tandon Air Pintar Berbasis Internet OF THINGS Terintegrasi BOT TELEGRAM', '2019/3', '30/07/2019', 'Teknik Informatika'),
(9, 'Bagus Dermawan F.K', '1334010017', 'Pengembangan Sistem Data Penduduk Pada Website KECAMATAN GUNUNG ANYAR', 'Sistem Pendukung Keputusan Penetuan Uang Kuliah Tunggal ( UKT )Mahasiswa Baru Menggunakan Metode Naive Bayes Gaussian Yg Di Optimalkan Dg LAPLACE CORRECTION', '2019/3', '30/07/2019', 'Teknik Informatika'),
(10, 'Adhitya Wirayudha K', '1234010123', 'Perancangan Dan Pembuatan Website Profil KBIH AL-WAHYU SIDOARJO', 'Analisa Keamanan Jaringan Menggunakan Intrusion Prevention System Dan Honeypot Sebagai Pendeteksian Pencegahan Malware', '2019/3', '30/07/2019', 'Teknik Informatika'),
(11, 'Wina Binartika', '1334010143', 'Perancangan DataBase Dalam Aplikasi Sistem Kepegawaian Di PT.WARU TENIKATAMA', 'Implementasi Metode Deteksi Tepi Pada Objek Bunga Adenium', '2019/3', '30/07/2019', 'Teknik Informatika'),
(12, 'Ramadhan Salatin P.', '1234010135', 'Rancang Bangun Website Profile Pada Amanah Travel  Berbasis Content Management System', 'Analisis Performa Kecepatan Write,Read,Delete ( WRD) Menggunakan S3-BENCHMARK Pada Cloud Storage Wasabi', '2019/3', '30/07/2019', 'Teknik Informatika'),
(13, 'Naufan Rianaldo F.L', '1334010191', 'Pembuatan Website E-Commerce Billing Shop Pada CV.INDEV ENTERPRISE', 'Sistem Pendukung Keputusan Pemilihan Jurusan Pilihan Dengan Metode FUZZY-AHP Berbasis Web ( Studi Kasus : TEKNIK INFORMATIKA UPN\'VETERAN\'JAWA TIMUR', '2019/3', '30/07/2019', 'Teknik Informatika'),
(14, 'Andre Novarian A.', '1334010176', 'Front-End Web profile Galeri Honda Dengan CV.INDEVE ENTERPRISE', 'Sistem Pendukung Keputusan Pegawai Teladan Pada PT.HALIM JAYA SAKTI Dengan Metode FUZZY-SAW', '2019/3', '30/07/2019', 'Teknik Informatika'),
(15, 'Devi Anugrah Putri P.', '1534010035', 'Pembuatan Front-End Pada Aplikasi Web Pergudangan Untuk CV. NARARYA PUTRA Jombang Berbasis PHP', 'Aplikasi Indikator Pergerakan Harga Pada CRYPTOCORRENCY Berbasis PIVOT POINT', '2019/3', '30/07/2019', 'Teknik Informatika'),
(16, 'Irvan Arief Herwitedi', '1534010015', 'Pembuatan Program Sistem Informasi PURCHASING Menggunakan BOOTSTRAP Pada PT.SIEMENS WESTINGHOUSE TECHNICAL SERVICE INDONESIA', 'Rancang Bangun Aplikasi Media Pemasaran Perumahan Dengan Menerapkan VIRTUAL REALITY TOUR Pada ANDROID ( Studi Kasus : PT.NAHLA CITRAMULIA GROUP )', '2019/3', '30/07/2019', 'Teknik Informatika'),
(17, 'Ahmad Syauqi', '1334015020', 'Pembuatan Sistem informasi Website Profile di CV.DEWO SUTO SURABAYA', 'Sistem Informasi Manajemen Pengelolaan Donatur Berbasis Web Menggunakan Framework YII2 ( Studi Kasus : YAYASAN FIKRAH FOUNDATION )', '2019/3', '30/07/2019', 'Teknik Informatika'),
(18, 'Ady Irwanto', '1334010137', 'Pembuatan Web Profile PT. SUKSES SEMPURNA SURABAYA Menggunakan CODEIGNITER', 'Implementasi Teknik Perbaikan Kualitas Citra Pada Image Processing', '2019/3', '30/07/2019', 'Teknik Informatika'),
(19, 'Murni Yosep', '1534010091', 'Perancangan Dan Pembuatan Website Main Makin Kaya Bagian Back-End Menggunakan FRAMEWORK LARAVEL5.4', 'Klasifikasi Spesies Monyet Ekor Panjang Menggunakan LVQ-PSO Berdasarkan Fitur Warna Dan Tekstur', '2019/3', '30/07/2019', 'Teknik Informatika'),
(20, 'Firman Wahyu S.', '1234015012', 'Pembuatan Website Profile SEKOLAH AL-IKHLAS', 'Sistem Pemantauan Prestasi Akademka Siswa Menggunakan Metode Bayes Classifier Di SD Santa Clara Surabaya', '2019/3', '30/07/2019', 'Teknik Informatika'),
(21, 'Kusdiana E. Putri', '1534010025', 'Perancangan Dan Pembuatan DATABASE Pada Aplikasi Website Pergudangan CV.NARAYA PUTRA JOMBANG Berbasis PHP', 'Penerapan IT BALANCED SCORECARD Untuk Pengukuran Kinerja Teknologi Informasi Pada RSUD dr. MOHAMAD SOEWANDHIE Surabaya', '2019/3', '30/07/2019', 'Teknik Informatika'),
(22, 'Rosyita Khamid', '1534010069', 'Perancangan Dan Pembuatan DATABASE Pada WEBSITE Pendaftaran Siswa Baru SMK PGRI 13 Surabaya', 'Sistem Pendukung Keputusan Untuk Seleksi Penerima Beasiswa Menggunakan Metode F- AHP ( Fuzzy Analytic Hierachy Process ) ( Studi Kasus : Upn\'Veteran\'JawaTimur )', '2019/3', '30/07/2019', 'Teknik Informatika'),
(23, 'Faisal Dwiyanto A.', '1534010116', 'Sistem Informasi Lowongan Pekerjaan CV.MERPATI Berbasis WEB', 'Implementasi Algoritma Genetika Pada Matematika Tentang Persamaan Linier Berbasis ANDROID', '2019/3', '30/07/2019', 'Teknik Informatika'),
(24, 'Junio Bagus K.', '1534010075', 'Rancang Bangun Web Profile Pada Laboratorium Teknik Informatika Universitas Pembangunan Nasional\'Veteran\'Jawa Timur', 'Aplikasi Untuk Membantu Terapi ACROPHOBIA Menggunakan Metode VIRTUAL REALITY EXPOSURE THERAPY', '2019/3', '30/07/2019', 'Teknik Informatika'),
(25, 'Birgita Dyah P.', '1434010056', 'Sistem Informasi Perpustakaan Berbasis Desktop Dengan VISUAL BASIC.NET 2010 Di SEKOLAH DASAR NEGERI KUTISARI 2 NO.269 SURABAYA', 'Indikator Analisa Pergerakan CRYPTOCURRENCY Berbasis FIBONACCI', '2019/3', '30/07/2019', 'Teknik Informatika'),
(26, 'Daffa Priyandika W.', '1234010177', 'Web Profile Brand Clothing Homeground Dengan Menggunakan Bahasa Pemrograman CMS', 'Sistem Informasi Anggaran Jasa Menggunakan FRAMEWORK YII2 Studi Kasus \'PT. INECO WIRASAKTI HUTAMA\'', '2019/3', '30/07/2019', 'Teknik Informatika'),
(27, 'Fitri Kurnia Masitoh', '1434010115', 'Perancangan Database Dan Tampilan Website Sekolah Dasar Negeri Kalirungkut 1/264 Surabaya', 'Deteksi Mobil Menggunakan ALGORITMA VIOLA-JONES', '2019/3', '30/07/2019', 'Teknik Informatika'),
(28, 'Akbar Raihan M.', '1534010008', 'Pembuatan BACK-END Pada Website Perekrutan Pekerja QUTSOURCE PT. DEN HAURA INDONESIA Menggunakan FRAMEWORK  LARAVEL', 'Aplikasi Membuat Janji Dengan Dokter Berbasis ANDROID Menggunakan Pola Desain MVP ( Studi Kasus : RUMAH SAKIT WIYUNG SEJAHTERA )', '2019/3', '30/07/2019', 'Teknik Informatika'),
(29, 'Ricky Gilang Aryadi', '1534010044', 'Pembuatan Program Sistem Informasi Penjualan Menggunakan CODEIGNITER Pada Siemens Westinghouse Technical Service Indonesia', 'Penerapan Algoritma Apriori Dan Fp-Growth Untuk Market Basket Analysis Dalam Menentukan PRODUCT BUNDLING', '2019/3', '30/07/2019', 'Teknik Informatika'),
(30, 'Erlangga Dwi P.', '1534010080', 'Bangun Prototype Aplikasi Pencari BARBERSHOP Di Surabaya Berbasis ANDROID Dari Sisi BACKEND DEVELOPMENT', 'Aplikasi Permainan Serius Sempoa Menggunakan CONSTUCT 2 Berbasis ANDROID', '2019/3', '30/07/2019', 'Teknik Informatika'),
(31, 'Muhammad Muzakki', '1434010110', 'Pembuatan Situs Web Portal UKM Sebagai Pendukung CV. ORYSU DEVELOPMENT', 'Pengedalian Suhu Dengan Metode PID KONTROL Menggunakan FUZZY Pada Proses Hidrolisis Berbasis ARDUINO', '2019/3', '30/07/2019', 'Teknik Informatika'),
(32, 'Shaldy Siswapratama', '1534010061', 'Implementasi LOAD BALANCING Dengan Metode NTH Menggunakan MIKROTIK RB 800 Pada Jaringan Internet Di Jawa Pos Graha Pena Surabaya', 'Implementasi Dan Analisis Cluster Cloud Computing  Berbasis Nextcloud Untuk Layanan Multiplatform ( Studi Kasus : PT.JAWA POS KORAN )', '2019/3', '30/07/2019', 'Teknik Informatika'),
(33, 'Novan Laksana P.', '1434010120', 'Analisa Dan Komparasi Dua Website Pada Sekolah SZ Model Management', 'Pengendalian Suhu Pada Proses Distilasi Batch Menggunakan PID Dengan ANT COLONY OPTIZATION ( ACO )', '2019/3', '30/07/2019', 'Teknik Informatika'),
(34, 'Yosafat Novianto S.', '1534010112', 'Aplikasi Pendataan Barang Dan Pendataan Pegawai CV. MERPATI Menggunakan NETBEANS', 'Tata Kelola Teknologi Informasi Mengguanakan FRAMEWORK COBIT 4.1 Studi Kasus RSUD KERTOSONO', '2019/3', '30/07/2019', 'Teknik Informatika'),
(35, 'Herviangga Rifqi Hari', '1234010063', 'Pembuatan Web Profil Menggunakan CMS PT.KAMANJAYA TEKNIK INDONESIA Upn\'Veteran\'Jawa Timur', 'Perbandingan Dan Desain Jaringan Komputer Menggunakan ROUTING GATEWAY PROTOKOL DAN OSPF (Studi Kasus PT.Fangbian Iskan Corporindo )', '2019/3', '03/09/2019', 'Teknik Informatika'),
(36, 'Devi Satya Intan C.', '1234010178', 'Sistem Informasi Laboratorium Jaringan Komputer UPN\'VETERAN\'JAWA TIMUR', 'Perancangan Website E-COMMERCE AKSHAYA SHOP Menggunakan PHP', '2019/3', '03/09/2019', 'Teknik Informatika'),
(37, 'M. Nashrul Khanif', '1234010068', 'Pembuatan Sistem Informasi Perpustakaan Dengan Menggunakan MICROSOPT VISUAL BASIC 6.0', 'Pembuatan Citra Panorama Menggunakan Metode SCALE INVARIANT TRANSFORM ( SIFT )', '2019/3', '03/09/2019', 'Teknik Informatika'),
(38, 'M. Hamdani', '1234015017', 'Pembuatan Web Profile MI.KH.ROMLY TAMIM SURABAYA', 'Implementasi Metode Economy Order Quantity ( EOQ ) Untuk Sistem Pengendalian Persediaan Stok Barang Pada TOKO. XXX', '2019/3', '03/09/2019', 'Teknik Informatika'),
(39, 'Yudha Tri Prasetyo', '1234010106', 'Rancang Bangun Website Profile Program Studi Agribisnis Fakultas Pertanian UPN\'VETERAN\'JATIM Berbasis Content Management System', 'Idenvikasi Mata Uang Lodam Menggunakan SEGMENTASI OTSU THRESHOLDING Dengan OPERASI MORFOLOGI', '2019/3', '03/09/2019', 'Teknik Informatika'),
(40, 'Reza Hardiansyah', '1234010083', 'Pembuatan WEB E-COMMERCE Menggunakan CMS MAGENTO', 'Monitoring Curah Hujan Secara Real Time Menggunakan Teknologi Internet Of Things Berbasis MICRO --KONTROLER ARDUINO', '2019/3', '03/09/2019', 'Teknik Informatika'),
(41, 'Bagus Anshori', '1234010076', 'Pembuatan WEB E-LEARNING Menggunakan PHP DI SEKOLAH SMK PGRI 13 SURABAYA', 'Identifikasi Jenis Daun Dengan Ekstrasi Ciri Warna Dan Tekstur Menggunakan Metode JARINGAN SYARAF TIRUAN RADIAL BASIS FUNCTION (JST-RBF )', '2019/3', '03/09/2019', 'Teknik Informatika'),
(42, 'Ayattul Fatayani', '1234010185', 'Pembuatan Aplikassi Toko Online Busana Muslim Berbasis WEB', 'Pembuatan Sistem Informasi Transaksi Daring Busana Muslim Menggunakan Metode WATERFALL', '2019/3', '03/09/2019', 'Teknik Informatika'),
(43, 'Mardi Sucahyo', '1234010136', 'Pembuatan Website Profile Inkubator Bisnis Technopark Berbasis Content Management System Pada UPN \'VETERAN\'JAWA TIMUR', 'Pembuatan Website Profile Dengan Source Maps Google Pada Inkubator Bisnis Technopark UPN\'VETERAN\'JAWA TIMUR', '2019/3', '03/09/2019', 'Teknik Informatika'),
(44, 'Ardiansyah Bayu C.', '1434010063', 'Peracangan System Aplikasi Gudang Berbasis Website Di CV.DEVINA MANDIRI SURABAYA', 'Penerapan Metode FUZZY Pada Kebocoran GAS LPG Berbasis IOT', '2019/3', '17/09/2019', 'Teknik Informatika'),
(45, 'Ronny Guntur S.', '1334010104', 'Rancang Bangun Aplikasi Gudang Berbasis Website Menggunakan Bahasa Pemrograman PHP & MYSQL Di CV. DEVINA MANDIRI SURABAYA', 'Perancangan Prototype Alat SEIN Otomatis Berbasis ARDUINO UNO R3', '2019/3', '18/09/2019', 'Teknik Informatika'),
(46, 'Hero Yudhanto', '1334010126', 'Pembuatan Website Companty Profile Green Traditional-Aksamedia', 'Sistem Manajemen Inventory Stok Barang Berbasis Web ( Studi Kasus : LIMASKEMA )', '2019/3', '18/09/2019', 'Teknik Informatika'),
(47, 'Fachriz Arfian', '1334010135', 'Pembuatan Website Company Profile Green Traditional \' Aksamedia', 'Rancang bangun Pemberian Pakan Ternak BURUNG LOVEBIRD Menggunakan MICROKONTROLER ATMEGA 328 P Dengan Kontrol SMS GATEWAY', '2019/3', '18/09/2019', 'Teknik Informatika'),
(48, 'M. Agis Santoso', '1434010053', 'Pembuatan Aplikasi Pergudangan Berbasis Website Menggunakan MYSQL Bagian Loging,Menu Suplier,Barang Masuk Dan Sok Barang Di CV.DEVINA MANDIRI MANDIRI SURABAYA', 'Rancang Bangun Alat Penyiram Tanaman Otomatis Menggunakan Metode Logika FUZZY Berbasis Mikrokontroler Pada Bawang Merah', '2019/3', '18/09/2019', 'Teknik Informatika'),
(49, 'Yusuf Alfiansyah', '1334010196', 'Perancangan Serta Instalasi Dan Setting Ulang Perangkat Jaringan Di Program Studi Teknik Informatika Upn\'Veteran\' Jatim', 'WEB Serapping Elemen Pada 3 Wesite Penjualan Menggunakan Metode HTML DOM', '2019/3', '19/09/2019', 'Teknik Informatika'),
(50, 'Mandala Jala Dwi P.', '1334010061', 'Analisa Teknologi Informasi Menggunakan Indeks KAMI ( KEAMANAN INFORMATIKA ) DI  UPT. TELEMATIKA Upn\'Veteran\' Jawa Timur', 'Implementasi Manajemen Bandwidth Menggunakan Metode PCQ ( PERCONECTION QUEUE ) STUDI Kasus SMK SENOPATI', '2019/3', '19/09/2019', 'Teknik Informatika'),
(51, 'A . Ardi Firdiansyah', '1334010178', 'Pembuatan Sistem Informasi Persediaan Barang Bulog MART DEVISI REGIONAL Jawa Timur', 'Aplikasi Kejadian Daruratt Wilayah Kota Surabaya Dengan Fitur GOOGLE MAPS', '2019/3', '19/09/2019', 'Teknik Informatika'),
(52, 'Ray Victor Panjaitan', '1534010121', 'Pengujian Website Properti Pada PT.IGS INDONESIA GROUPS Menggunakan Metode BLACK BOX SAMPLE TESTING AAND PERFORMANCE TESTING', 'Pengukuran Kinerja Teknologi Informasi Menggunakan IT BALANCED SCORECARD Pada Sekolah Tinggi Ilmu Ekonomi Mahardika Surabaya', '2019/3', '24/09/2019', 'Teknik Informatika'),
(53, 'Shafira Eriska D', '1434010165', 'Perancangan Basis Data Web Profil GUIDE READ OUTBOND ( CV.Jendela Indonesia )', 'Analisis Dan Pengembangan Enterprise Arsitektur Menggunakan TOGAF ( Studi Kasus : DINAS ENERGO DAN SUMBER DAYA MENERAL PROVINSI JATIM )', '2019/3', '24/09/2019', 'Teknik Informatika'),
(54, 'Eric Katono', '1534010066', 'Pembuatan Front End Website Responsive Untuk Kebutuhan Company Profile CV.Karya Guna Bersama Berbasis PHP Dengan Menggunakan Framework Codeigniter', 'Sistem Diagnosis Penyakit Diabetis Militus Meggunakan ALGORITMA C5.0', '2019/3', '24/09/2019', 'Teknik Informatika'),
(55, 'M. Vivin  Alfaruq', '1334010062', 'Redesain Portal Internet  PT.SEMEN INDONESIA Dengan Menggunakan Bahsa Pemrograman PHP', 'Evaluasi Tata Kelola Infrastruktur Teknologi Informasi Menggunakan Framework Cobit 5 Pada PT.GO CLEAN INDONESIA', '2019/3', '24/09/2019', 'Teknik Informatika'),
(56, 'Dandy Anjarnuri A .P.', '1434010067', 'Desain Dan Implementasi Demilitarized Zone Pada Dinas Komunikasi Dan Informatika Provinsi Jawa Timur', 'Desain Analisis Performa Load Balancing Dalam Sofware Defined Network Ryu Controller', '2019/3', '24/09/2019', 'Teknik Informatika'),
(57, 'Irfan Ibrahim Dwi W', '1434010208', 'Perancangan Dan Simulasi Topologi Tree Pada Kantor kelurahan Sumber Rame Menggunakan GNS3', 'Perancangan Strategi Sistem Informasi Dan Teknologi Informasi Menggunakan ANITA CASSIDY Pada SMK MUHAMMADYAH 4 GLENMORE', '2019/3', '24/09/2019', 'Teknik Informatika'),
(58, 'Nyssa Makkiyah', '1334010192', 'Pembuatan Web E-commerce Elha Optic', 'Analisa Implementasi Transmisi Data Ftp Dengan PENGAMANAN SSH PADA TUNNELING 6T04', '2019/3', '24/09/2019', 'Teknik Informatika'),
(59, 'Yayangk Rendhy KA', '1434010204', 'Pembuatan System E-Learning SMAN 18 SURABAYA Berbasis MOODLE STUDI KASUS PEMBUATAN BUKU MANUAL', 'Implementasi Routing Protocol Dan Ospf Pada Layanan Video Streaming( Studi Kasus : Lab jaringan Komputr UNTAG SURABAYA )', '2019/3', '24/09/2019', 'Teknik Informatika'),
(60, 'Abdullah Wasian', '1434010076', 'Pembuatan Sistem Infoemasi Persediaan Barang Berbasis DESKTOP Untuk CV. MITRA USAHA MANDIRI DI KABUPATEN GRESIK', 'Deteksi Peti Kemas Berbasis Video Menggunakan ALGORITMA CNN BERDASARKAN ARSITEKTUR YOLO        (   YOU ONLY LOOK ONCE )', '2019/3', '24/09/2019', 'Teknik Informatika'),
(61, 'Anggik Irawan', '1434010044', 'Uji Coba Website Company Profile Di CV. KAMDI PROPERTI & STAFF NOTARIS', 'Sistem Pendeteksian Truk Berbasis Video Menggunakan DEEP LEARNING DAN TENSORFLOW', '2019/3', '24/09/2019', 'Teknik Informatika'),
(62, 'Luthfiyatul\'Azizah', '1534010002', 'Perancangan Dan Pembuatan Back End Pada Aplikasi Web Pergudangan Berbasis PHP Untuk PERUSAHAAN CV.NARARYA PUTRA', 'Metode Multinomial Naive Bayes Classifier Dan Reduksi FiturMenggunakan DF THRESHOLDING Untuk KLASIFIKASI GENRE Berdasarkan BLURB Pada MEDIA Berbagai Cerita Online', '2019/3', '25/09/2019', 'Teknik Informatika'),
(63, 'Anggik Ardiansyah P.', '1534010009', 'Perancangan Dan DataBase Web Profile Pada PT. PANJI NASIONAL MEDIA PERSADA SURABAYA', 'Sistem Informasi Pembayaran KPR Di PT.Nahla Citra Mulia Group Berbasis ANDROID Dengan Metode Rup ( Rational Unified Process)', '2019/3', '25/09/2019', 'Teknik Informatika'),
(64, 'Aprilio Akbar Setia P.', '1434010022', 'Perancangan Web Katalog Dan Penjualan Berbasis WEB Menggunakan CMS WORDPRESS ( Studi Kasus : CV.RAMA MULTI TECHNIK )', 'Implementasi Data Mining Rekomendasi Menu Menggunakan AlGORITMA APRIORI', '2019/3', '25/09/2019', 'Teknik Informatika'),
(65, 'Yudha Mahadika P.', '1434010158', 'Rekontruksi Dan Perancangan Jaringan Komputer Pada Kantor Dinas Energi Dan Sumber Daya Mineral Jawa Timur .', 'Pengukuran Kualitas Website UPN \'VETERAN\' JAWA TIMUR Menggunakan Metode WEBQUAL 4.0', '2019/3', '25/09/2019', 'Teknik Informatika'),
(66, 'Mochamad Nor F.', '1534010068', 'Pembuatan Aplikasi Surat Pemberitahuan Perkembangan Hasil Penyidikan ( SP2HP ) Online Menggunakan Framework Codeigniter', 'Aplikasi Perawatan Mesin Berbasis ANDROID ( Studi Kasus : PT.GARUDA FOOD PUTRA-PUTRI JAYA TBK )', '2019/3', '26/09/2019', 'Teknik Informatika'),
(67, 'Wahyu Aji Pangestu', '1534010034', 'Rancang Bangun Website Admin Company Profile Studi Kasus : PERUSAHAAN CV.PRIMA TEKNO SOLUSINDO', 'Aplikasi Based Mobile Classification And Regression Tree', '2019/3', '26/09/2019', 'Teknik Informatika'),
(68, 'Dianti Anggraeni', '1534010052', 'Perancangan Dan Pembuatan Basis Data Sistem Informasi Pembelian Pada PT.SIEMENS WESTINGHOUSE TECHNICAL SERVICES INDONESIA', 'Implementasi Web Mining Menggunakan Teknik ASSOCIATION RULE Dengan Memfaatkan AlGORITMA MODIFIKASI APRIORI (TREE BASED APPROACH )', '2019/3', '26/09/2019', 'Teknik Informatika'),
(69, 'Rafika Aistya Adiyan', '1534010036', 'Pengujian Website Rekruitmen Qutsourcing PT.LEXION INDONESIA Dengan Menggunakan Metode BLACK BOX', 'Rancang Bangun Game Endless Runner Menggunakan Procedural Content Generation Untuk Level Permainan', '2019/3', '26/09/2019', 'Teknik Informatika'),
(70, 'Olivia Anggun P.', '1534010029', 'Perancangan Dan Pembuatan Website Main Makin Kaya Bagain Front-End Menggunakan FRAMEWORK LARAVEL 5.4', 'Penerapan Metode Naive Bayes Classifier Dengan Seleksi Fitur Information gain Dalam Analisis Sentimen Review Makanan Pada Restoran X', '2019/3', '26/09/2019', 'Teknik Informatika'),
(71, 'Rischi Uripanto Adhi', '1334010046', 'Analisa Teknologi Informasi Menggunakan Metode Indeks KAMI Di UPT TELEMATIKA UPN\'VETERAN\'JAWA TIMUR', 'Audit Sistem Dan Teknologi Informasi Pada SMAN 18 SURABAYA', '2019/3', '27/09/2019', 'Teknik Informatika'),
(72, 'Hanan Ade Kurnia', '1334010084', 'Perancangan Sistem Registrasi Tamu Dan Kepuasan Masyarakat Pada UPT.PSMB ( PENGUJIAN SERTIFIKASI MUTU BARANG )-LEMBAGA TEMBAKAU JEMBER', 'Pengukuran Tingkat Kapabilitas Tata Kelola Teknologi Informasi Menggunakan FRAMEWORK COBIT 5( Studi Kasus : Dinas Perpustakaan Dan Kearsipan Kabupaten Mojokerto )', '2019/3', '27/09/2019', 'Teknik Informatika'),
(73, 'Syahidzul Karim', '1434010094', 'Perancangan Web Portal PT.PERTAMINA ( Persero ) MOR-V Berbasis Joomla Dengan Menggunakan Metode BACK-END', 'INTERNET OF THING : Pengendalian Dan Pemantauan Tanaman Hidroponik Berbasis MIKROKONTROLER ARDUINO', '2019/3', '30/09/2019', 'Teknik Informatika'),
(74, 'Arif Setyodirgantoro', '1434010102', 'Perancangan Dan Pembuatan Website Profil Perusahaan Dan Pengadaan Fasilitas Menggunakan Database Untuk CV. MITRA USAHA MANDIRI DI GRESIK', 'Implementasi Managemen Bandwidth Dengan Metode Peer Connection Qeue ( PCQ ) Menggunakan QUEUE TREE ( Studi Kasus : STIE YAPAN Surabaya )', '2019/3', '30/09/2019', 'Teknik Informatika'),
(75, 'Muhammad Rizal I.', '1235010039', 'Aplikasi Pemesanan Catering CV.BHELLA DHELLA', 'Sistem Informasi Penjualan Mesin Oven, Conveyor Dan Makaroni Berbasis Web Pada CV.EDI JAYA', '2019/3', '11/06/2019', 'Sistem Informasi'),
(76, 'Dimas Wahyu Utomo', '1535010049', 'Sistem Informasi Perencanaan Keuangan UNIVERSITAS PEMBANGUNAN NASIONAL \'VETERAN\'JAWA TIMUR', 'Sistem Pakar DIAGNOSIS Penyakit Cabai Menggunakan Metode FORWARD CHAINING Berbasis ANDROID', '2019/3', '22/07/2019', 'Sistem Informasi'),
(77, 'Tasya Putri Arbadi', '1535010024', 'Sistem Pendukung Keputusan Seleksi Karyawan Menggunakan Metode WEIGHTED PRODUCT Pada PT.LINTAS BANGUN PERSADA JAYA', 'Pengembangan Dashboard KPI Bidang Penjualan Semen Curah, Semen Jumbo Bag Dan Proyek Menggunakan FITUR PERINTAH SUARA ( Studi Kasus : PT. Semen Indonesia Logistik )', '2019/3', '26/07/2019', 'Sistem Informasi'),
(78, 'Andika Rizky G.', '1235010032', 'Sistem Informasi Pendaftaran Siswa Baru Lembaga Bimbingan Belajar Anak Bangsa Cerdas Berbasis DESKTOP', 'Sistem Informasi Akademik Berbasis Web Pada SEKOLAH DASAR NEGERI PETEMON XII SURABAYA', '2019/3', '29/07/2019', 'Sistem Informasi'),
(79, 'M.Afrizal Cahya S.', '1235010013', 'Sistem Informasi Pendaftaran Murid Baru SMP SASANA BHAKTI SURABAYA', 'Penerapan CRM Pada Sistem Informasi Perseawaan Mobil Berbasis WEB ( Studi Kasus: CV.Rasita Irna )', '2019/3', '29/07/2019', 'Sistem Informasi'),
(80, 'Andi Nor Rahman', '1235010027', 'Sistem Informasi Pendaftaran Siswa Baru LEMBAGA BIMBINGAN BELAJAR ANAK BANGSA CERDAS Berbasis DESKTOP', 'Sistem Informasi Akademik Lembaga Bimbingan Belajar Anak Bangsa Cerdas Berbasis WEB', '2019/3', '29/07/2019', 'Sistem Informasi'),
(81, 'Gorrys Arta Dynata', '1235010036', 'Sistem Informasi Pendaftaran Murid Baru SMP SASAN BHAKTI SURABAYA', 'Penerapan CRM ( Customer Relationship Management ) Pada Toko Aksesoris Handphone Berbasis WEB ( Studi Kasus : TOKO RC ACC)', '2019/3', '29/07/2019', 'Sistem Informasi'),
(82, 'M.Galang Satrio W.', '1535010037', 'Sistem Pengajuan Surat Keterangan Perjalanan Dinas Berbasis WEB ( Studi Kasus : BPJS KESEHATAN SIDOARJO)', 'Sistem Informasi Pengelolaan Dana Donatur Berbasis WEB ( Studi Kasus : KANTOR PUSAT YAYASAN RIF\'ATUS SHOLIHAH SURABAYA )', '2019/3', '29/07/2019', 'Sistem Informasi'),
(83, 'Daffa Muhammad I.', '1335010006', 'Aplikasi Pemesanan Catering CV.BHELLA DHELLA', 'Sistem Pendukung Keputusan Penentuan Prioritas Perbaikan Jalan Dengan Metode SAW Berbasis GOOGLE MAP SERVICE', '2019/3', '29/07/2019', 'Sistem Informasi'),
(84, 'Alief Hary Purnomo', '1535010092', 'Penerapan IT PROJECT MANAGEMENT Dan SCURITY AWARENESS Pada PT. PELABUHAN INDONESIA III ( Pelindo III ) Surabaya', 'Rancang Bangun Sistem Informasi Manajemen Akademik Sekolah Dengan Pendekatan Arsitektur MVC ( Studi Kasus : SMK ANTARTIKA 1 Sidoarjo )', '2019/3', '30/07/2019', 'Sistem Informasi'),
(85, 'Vanny Prasetyo Adi', '1235010007', 'Kosong Sesuai Surat ; Bukti Penyerahan Skripsi( Tugas Akhir ) Nomer: 2047/TA/2019', 'Sistem Informasi Administrasi Proyek Pada PT.QUALIVA PRIMA ABADI Berbasis DESKTOP', '2019/3', '30/07/2019', 'Sistem Informasi'),
(86, 'Bayu Aji Purbacaraka', '1235010018', 'Sistem Kehadiran Berbasis Sidik Jari ( Studi Kasus : PROGDI SISTEM INFORMASI UPN \'VETERAN\'JAWA TIMUR', 'Sistem Informasi Manajemen Kepegawaian Berbasis WEB ( Studi Kasus : PT.SANTANA MANGGALA KARYA )', '2019/3', '30/07/2019', 'Sistem Informasi'),
(87, 'Aliffian Nurdin', '1535010100', 'Sistem Informasi Pengukuran Kepuasan Pelanggan ( Studi Kasus : PT. OMETRACO ARYA SAMANTA )', 'Sistem Informasi Kepegawaian Dengan Fitur Penilaian Kenerja Pegawai Menggunakan Metode AHP ( Analytical Hierarchy Process) (Studi Kasus :PT.ANUGERAH ABADI SEJAHTERA)', '2019/3', '30/07/2019', 'Sistem Informasi'),
(88, 'Aldi Kurniawan', '1535010067', 'Pembuatan Standar Operasional Prosedur(SOP) Pemeliharaan Infrastruktur Teknologi Informasi Pada INSPEKTORAT PROVINSI JAWA TIMUR', 'Deteksi Emosi Tentang Pemilihan Presiden 2019 Pada TWITTER Dengan Menggunakan TEXT MINING', '2019/3', '30/07/2019', 'Sistem Informasi'),
(89, 'M.Purbo Adi W.', '1535010002', 'Implementasi SAP Dalam Manajemen Aset Di Perusahaan Bidang Telekomunikasi ( Studi Kasus : PT. INDONESIA COMNETS PLUS )', 'Analisis Pengukuran Kualitas Layanan E-GOVQUAL DI INDONESIA', '2019/3', '30/07/2019', 'Sistem Informasi'),
(90, 'Suherbing Septian', '1535010046', 'Perancangan Prototype Sistem Informasi Laporan Hasil Penjualan Berbasis Web Menggunakan FRAMEWORK CODEIGNITER (Studi Kasus : PERUM BULOG DIVISI REGIONAL JAWA TIMUR )', 'Rancang Bangun Sistem Informasi Bimbingan Belajar Berbasis Web Menggunakan Framework Codeigniter ( Studi Kasus : Lembaga Bimbingan Belajar Learning Smart Fun ( LSF )', '2019/3', '30/07/2019', 'Sistem Informasi'),
(91, 'Anita Nabila Sita', '1535010003', 'Perancangan Prototype Sistem Informasi Laporan Hasil Penjualan Berbasis Web Menggunakan Framework Codeigniter Studi Kasus : PERUM BULOG DIVISI REGIONAL JAWA TIMUR', 'Sistem Informasi Pengelolaan Sertifikat Prestasi Unit Kegiatan Mahasiswa Berbasis Web Di UPN \'VETERAN\' JAWA TIMUR', '2019/3', '30/07/2019', 'Sistem Informasi'),
(92, 'Abdul Ghofur Al H.', '1235010056', 'Sistem Informasi Penyewaan Rental Mobil Pada: CV.VARIA INTI PERKASA', 'Rancang Bangun Aplikasi Pemesan Menu Berbasis ANDROID DAN CLIENT-SERVER ( Studi Kasus : OOST KOFFIE AND THEE )', '2019/3', '30/07/2019', 'Sistem Informasi'),
(93, 'Safalian Novandika', '1235010042', 'Sistem Informasi Penjualan Barang Berbasis WEB Di CV. ANUGERAH LANCAR SEJATI', 'Aplikasi Penjualan Jasa Optimasi Sosial Media Berbasis WEB', '2019/3', '30/07/2019', 'Sistem Informasi'),
(94, 'Muhamad Purwanto', '1535010058', 'Sistem Pendukung Seleksi Karyawan Menggunakan Metode WEIGHTED PRODUCT Pada PT. LNITAS BANGUN PERSADA JAYA', 'Analisis Faktor Penerimaan Question And Answer Website ( QnA SITE ) Menggunakan UNIFIED THEORY OF ACCEPTANCE AND USE OF TECHNOLOGY ( UTAUT ) 2 (Studi Kasus : Branly Indonesia )', '2019/3', '30/07/2019', 'Sistem Informasi'),
(95, 'Faical Adam', '1235010062', 'Rancang Bangun Sistem Informasi Penyewaan Alat Musik Berbasis DESKTOP Pada MUSICAL\'S STUDIO', 'Penerapan Sistem Informasi Penjualan Busana Muslim Dengan FITUR SMS GATEWAY ( Studi Kasus : TOKO BAJU DAN HIJAB D\'SHEYFA )', '2019/3', '29/08/2019', 'Sistem Informasi'),
(96, 'Suwardi Tri Utoyo', '1235010079', 'Rancang Bangun Sistem Informasi Penjualan Pada PT. IKHSAN JAYA ABADI', 'Perancangan Dan Pembuatan E-Commerce Berbasis Website Pada WAWAN FURNITURE Dengan Menggunakan FRAMEWORK CODEIGNITER', '2019/3', '30/08/2019', 'Sistem Informasi'),
(97, 'Lukman Rizki P.', '1235010054', 'Rancang Bangun Sistem Informasi Penjualan Furniture Di CV. Tanaya Gallery', 'Sistem Informasi Penjualan Furniture Di CV. Tanaya Gallery Berbasis DESKTOP -', '2019/3', '03/09/2019', 'Sistem Informasi'),
(98, 'Dyky Dwi Apriliyan', '1235010075', 'Sistem Informasi Inventaris Pada Bengkel Bubut Dan las UD.EKA TEKNIK', 'Sistem Informasi Penjualan Barang Pada Bengkel Bubut Dan Las UD.EKA TEKNIK Berbasis WEB', '2019/3', '03/09/2019', 'Sistem Informasi'),
(99, 'M. Qoryfaras', '1235010074', 'Rancang Bangun sistem Informasi Pergudangan Berbasis DESKTOP Pada CV.MITRA TEKNIK', 'Sistem Informasi Pencatatan Rekam Medis Pada KLINIK CIPTA MEDIKA DRIYOREJO Berbasis WEB', '2019/3', '03/09/2019', 'Sistem Informasi'),
(100, 'Bintang Puja P.', '1235010078', 'Rancang Bangun Sistem Informasi Penjualan Berbasis DESKTOP DI DEPOT JOS GOBYOS', 'Pengembangan Sistem Informasi Penjualan Berbasis Desktop Pada RUMAH MAKAN JOS GOBYOS', '2019/3', '03/09/2019', 'Sistem Informasi'),
(101, 'Susilo Warsito', '1235010005', 'Sistem Informasi Pendaftaran Online Berbasis Web Di TK.DUNIA SUZAN SURABAYA', 'Rancang Bangun Sistem Informasi Pergudangan  (Studi Kasus : PT.INDO AICE )', '2019/3', '03/09/2019', 'Sistem Informasi'),
(102, 'Fanni Noor Rahman', '1235010060', 'Sistem Informasi Pendaftaran Online Berbasis WEB Di TK.DUNIA SUZAN SURABAYA', 'Sistem Informasi Pendaftaran Dan Seleksi Siswa Baru  Menggunakan CBT Berbasis WEB DI SMA SENOPATI SIDOARJO', '2019/3', '03/09/2019', 'Sistem Informasi'),
(103, 'M.Alif Nur Fahmi', '1235010070', 'Rancang Bangun Sistem Informasi Penjualan Solar Berbasis DESKTOP Di PT. PUTRA MANSHUR JAYA SEJAHTERA', 'Sistem Informasi Pembelian Dan Penjualan Hasil Tambak Berbasis DESKTOP Pada UD.BAROKAH', '2019/3', '03/09/2019', 'Sistem Informasi'),
(104, 'Nur Fikri Kurniawan', '1235010015', 'Sistem Informasi Pendaftaran Siswa Baru Berbasis DESKTOP SDN PULOREJO 2 MOJOKERTO', 'Rancang Bangun Sistem Informasi Penjualan Berbasis WEB', '2019/3', '03/09/2019', 'Sistem Informasi'),
(105, 'Gerry Pratama A.S', '1235010077', 'Sistem Informasi TOKO ONLINE Dan Transaksi Berbasis Website Pada Permata Interior', 'Sistem Informasi Penjualan TIKET KAPAL PELNI Berbasis Web Pada GAPURA SURYA NUSANTARA', '2019/3', '04/09/2019', 'Sistem Informasi'),
(106, 'Muhammad Alkaff', '1235010022', 'Perancangan Web Company Profile Pada PT.IGS Indonesia', 'Virtual Tour Guide Sebagai Media Informasi Pada Fakultas Ilmu Komputer UPN\'VETERAN\'Jawa Timur Berbasis Virtual Reality', '2019/3', '12/09/2019', 'Sistem Informasi'),
(107, 'M. Imam Adi N.', '1535010115', 'Perekaman Data Functional Configuration ITEM Berbasis I.T.I.L. Menggunakan Sofware ITOP Di Lingkungan UPN\'VETERAN\' (Studi Kasus : FIK,FTI,FAD,FH )', 'Aplikasi Pencatatan Pembelian Dan Penjualan Berbasis Android Dengan FRAMEWORK CORDAVA', '2019/3', '30/09/2019', 'Sistem Informasi'),
(108, 'M.Agung Hidayat', '1535010011', 'Aplikasi Perpustakaan Amdal Berbasis Web Studi Kasus DINAS LINGKUNGAN HIDUP PROVINSI JAWA TIMUR', 'Rancang Bangun Sistem Informasi Perizinan Lingkungan Berbasis Web ( Studi Kasus : DINAS LINGKUNGAN HIDUP PROVINSI JAWA TIMUR )', '2019/3', '30/09/2019', 'Sistem Informasi'),
(109, 'Della Novitasari', '1535010069', 'Aplikasi Absensi Kepegawaian Berbasis Desktop Studi Kasus : INSPETORAT PEMERINTAH PROVINSI JAWA TIMUR', 'Identifikasi Kesuksesan Penggunaan Sistem Aplikasi Pengaduan Dan Keluhan Terpadu (APKT ) ( Studi Kasus : PT.PLN (Persero ) Di Jember )', '2019/3', '30/09/2019', 'Sistem Informasi'),
(110, 'Setyawan Adam L.', '1535010109', 'Aplikasi Absensi Kepegawaian Berbasis Desktop Studi Kasus : Inspektorat Pemerintah Provinsi Jawa Timur', 'Analisis Kesuksesan Aplikasi Mobile PERSEBAYA SELAMANYA Dengan Pendekatan MODEL DELONE AND MCLEAN', '2019/3', '30/09/2019', 'Sistem Informasi'),
(111, 'Vicky Surya P.A', '1535010074', 'Sistem Informasi Inventory ( Studi Kasus : PT.OELANGAN KARYA ETAM )', 'Rancang Bangun Sistem Monitoring Inventoring Barang Berbasis Website ( Studi Kasus : PT.OELANGAN KARYA ETAM )', '2019/3', '01/10/2019', 'Sistem Informasi'),
(112, 'Syntia Dwi W.', '1535010099', 'Aplikasi Absensi Kepegawaian Berbasis Desktop Studi Kasus : INSPEKTORAT PEMERINTAH PROVINSI JAWA TIMUR', 'Analisis Persepsi Pelanggan Restoran Cepat Saji Pada Twitter Menggunakan Support Vector Machine .', '2019/3', '02/10/2019', 'Sistem Informasi'),
(113, 'Ahmad Makky Z.', '1535010066', 'Optimalisasi Penggunaan Bandwith Menggunakan User Profile Mikrotik Studi Kasus : PT.CROSNET INDONESIA', 'Sistem Informasi Monitoring Santri Berbasis Web ( Studi Kasus : Madrasah Bertaraf Internasional Amanatul Ummah Mojokerto )', '2019/3', '02/10/2019', 'Sistem Informasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `progdis`
--

CREATE TABLE `progdis` (
  `id` int(11) NOT NULL,
  `id_fakultas` varchar(15) NOT NULL,
  `nama_progdi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `progdis`
--

INSERT INTO `progdis` (`id`, `id_fakultas`, `nama_progdi`) VALUES
(1, '2', 'Teknik Informatika'),
(3, '2', 'Sistem Informasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `raks`
--

CREATE TABLE `raks` (
  `id` int(11) NOT NULL,
  `kode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `raks`
--

INSERT INTO `raks` (`id`, `kode`) VALUES
(1, '123456'),
(2, 'a1234'),
(3, 'a2134'),
(4, 'c5432'),
(5, 'q8765'),
(6, 'qw132');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sumbang_bukus`
--

CREATE TABLE `sumbang_bukus` (
  `id` int(11) NOT NULL,
  `tgl` varchar(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `npm` varchar(20) DEFAULT NULL,
  `judul` varchar(255) NOT NULL,
  `pengarang_penerbit` varchar(255) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `progdi` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sumbang_bukus`
--

INSERT INTO `sumbang_bukus` (`id`, `tgl`, `nama`, `npm`, `judul`, `pengarang_penerbit`, `tahun`, `progdi`) VALUES
(1, '22/05/2019', 'M.Wahyu Kurniawan', '1434010009', 'Teori Dan Praktek Cloud Computing', 'Iwan Sofana / Informatika \' Bandung.', '2012', 'Teknik Informatika'),
(2, '27/05/2019', 'Arief Rahman', '1434010096', 'Pemrograman Sistem Pakar', 'Anik Andran,M.Kom /PT.Buku Sari Mahakam \'Jogyakarta.', '2017', 'Teknik Informatika'),
(3, '27/05/2019', 'M.Burhanuddin F.', '1534010089', 'Basis Data Revisi Kedua', 'Fathansyah /Informatika--Bandung.', '2015', 'Teknik Informatika'),
(4, '27/05/2019', 'Kevin Brian Pradipta', '1534010103', 'Pemrograman Java Untuk Programmer', 'Dr.Eny.R.H Sianipar,M.Eng /Informatika-Bandung.', '2015', 'Teknik Informatika'),
(5, '27/05/2019', 'Tisca Jurisa R.', '1534010098', 'Teknik Pemrograman Menggunakan MATLAB', 'Ir.Hary Ranza,M.T /PT.Grasindo-Jakarta .', '2007', 'Teknik Informatika'),
(6, '27/05/2019', 'Rossy Aprilevanita Sahid', '1534010122', 'Analisis Perancangan Berorientasi Objek Dengan UML', 'Munawar / Informatika--Bandung.', '2018', 'Teknik Informatika'),
(7, '27/05/2019', 'Muflikhun Putri U.', '1534010118', 'Pemrograman Basis Data Di MATLAB Dg MySQL Dan Microssoft Access', 'Rahmadya Trias H.H / Informatika--Bandung.', '2018', 'Teknik Informatika'),
(8, '27/05/2019', 'Hermanto Arya M.', '1434010057', 'The Best Effect Texture & Background', 'Mr.Ananto/Bonjer PT.Palapa   Depok.', '2016', 'Teknik Informatika'),
(9, '27/05/2019', 'M.Syafriansyah', '1534010032', 'PHISING Cara Mudah Menyadap Password Dan pencegahannya', 'Efvy Zam / Mediakita  Jakarta Selatan 12630.', '2014', 'Teknik Informatika'),
(10, '27/05/2019', 'Sahadi Ilahi Zamani', '1534010022', 'The Magic of Corel Draw', 'Hendi Hendratman / Informatika-Bandung', '2013', 'Teknik Informatika'),
(11, '27/05/2019', 'Nuraini Hariyanti', '1534010055', 'Pemrograman Berorientasi Objek C # (   Yang susah Jadi Mudah )', 'Enrico Dharmawan H. / Informatika-Bandung .', '2014', 'Teknik Informatika'),
(12, '27/05/2019', 'Lisa Aulia Fauzi', '1534010119', 'The Magic Of Photoshop', 'Hendi Hendratman /Informatika- Bandung.', '2013', 'Teknik Informatika'),
(13, '27/05/2019', 'Afrina Nurhayati', '1434010086', 'Buku Pintar Robotika', 'Taufik Dwi Seotiani Suyadhi / ANDI \'Yogyakarta.', '2010', 'Teknik Informatika'),
(14, '27/05/2019', 'Diah Ayu Setiowati', '1434010080', 'Text  Mining', 'Onno W. Purbo / ANDI-Yogyakarta.', '2019', 'Teknik Informatika'),
(15, '27/05/2019', 'Stefany Herawwati', '1434010114', 'Pemrograman Delphi Untuk Pemula', 'Gregius Agung /PT. Elex Media Komputindo-Jakarta', '2017', 'Teknik Informatika'),
(16, '27/05/2019', 'Moch.Aditiyaraka', '1434010190', 'Konfgurasi RouterBoard Mikrotik RB-750', 'Hardana Ino Irvanto / ANDI \'Yogyakarta.', '2014', 'Teknik Informatika'),
(17, '27/05/2019', 'Bari Hade W.', '1534010072', 'Cloud Computing', 'Yohan Jati Waloeyo /CV.ANDI OFFET- Yogyakarta.', '2012', 'Teknik Informatika'),
(18, '27/05/2019', 'Riski Ramadani', '1434010117', 'Kalkulus', 'Hazrul Iswadi / CV.Citramedia-Taman Wage Sidoarjo.', '2003', 'Teknik Informatika'),
(19, '27/05/2019', 'Hendra Adi Pratama', '1434010202', 'Bootsrap, CSS , Framework', 'Roberto  Kaban / CV. ANDI OFFSET-Yogyakarta.', '2019', 'Teknik Informatika'),
(20, '27/05/2019', 'Affan Fathur R.', '1434010081', 'Pemrograman Fuzzy Dan Jaringan syaraf Tiruan Untuk Sistem Kendali Cerdas', 'Basuki Rahmat,S.Si,MT Dan Budi Nugroho,S.Kom,M.Kom /Indo Media Pustaka-Sukodono sidoarjo', '2019', 'Teknik Informatika'),
(21, '27/05/2019', 'Ainur Rofiq', '1434010175', 'Membangun Aplikasi Penjualan Tunai &Kridit Dengan MS Acceess', 'Ahmad Muhclis Dan dita Anggraini / PT.Elex Media Komputindo \' Jakarta .', '2002', 'Teknik Informatika'),
(22, '27/05/2019', 'Rafif Putra W.D.', '1434010143', 'IOS Visual Programing', 'Rizki Syahputra,S.ST. Dan Syaful Amin / MediaKom- Yogyakarta.', '2014', 'Teknik Informatika'),
(23, '27/05/2019', 'Reza  Amandika Z.', '1334010031', 'Metodologi Penelitian Kualitatif Edisi Revisi', 'Prof.DR.Lexy J.Moleong,M.A /PT.Remaja Rosdakarya \'Bandung.', '2017', 'Teknik Informatika'),
(24, '27/05/2019', 'Dwi Rahmad K', '1534010027', 'Mudah Membuat Aplikasi Absensi Dengan JAVA', 'Gregorius Agung / PT.Elex Media Komputindo-Jakarta', '2014', 'Teknik Informatika'),
(25, '27/05/2019', 'Rais Alhakim', '1534010096', 'Kalkulus untukk Perguruan Tinggi', 'Mhd.Daud Pinem. / Rekayasa Sains \'Bandung.', '2015', 'Teknik Informatika'),
(26, '27/05/2019', 'Wahyu Kirmanto', '1434010069', 'Android Pemrograman Aplikasi Mobil,Smartphone dan Tablet PC Berbasis Android', 'Nazruddin Syafaat H./ Informatika-Bandung.', '2014', 'Teknik Informatika'),
(27, '27/05/2019', 'Nadya Laili Putri', '1434010149', '101 jurus Promosi Paling Top .+ Dan --Membangun Online Shop Dengan Wordpress', 'Feri Sulianta / PT.Elex Media Komputindo-Jakarta . Dan Ricky Rahmanto . (Penerbit Sama)', '2014', 'Teknik Informatika'),
(28, '27/05/2019', 'Hiliyah Diena Isroanni', '1434010206', 'Pemrograman Sistem Pakar', 'Anik Andriani,M.Kom / MediaKom-Yogyakarta.', '2017', 'Teknik Informatika'),
(29, '27/05/2019', 'M.Misbachul Munir', '1234010186', 'Cepat menguasai C ++ Ringkas Dan Tepat Mempelajari c++ untuk Programmer Pemula', 'Gregorius Agung ./PT.Elex Media Komputindo-Jakarta.', '2015', 'Teknik Informatika'),
(30, '27/05/2019', 'Herza Septyanto Putra', '1434010066', 'Toko Online Dengan Wordpress Dan Woo  commerce', 'P.Seno Wibowo / CV.ANDI OFFSET \'Yogyakarta', '2015', 'Teknik Informatika'),
(31, '27/05/2019', 'Dina Setya Nagari', '1334015006', 'Algoritma Pemrograman Dalam Bahasa Pascal Dan C', 'Rinaldi Munir / Informatika- Bandung.', '2007', 'Teknik Informatika'),
(32, '27/05/2019', 'Moch. Alfian .D', '1334010171', 'Aplikasi Toko Akuntansi Dan Penggajian Dengan Access', 'Ahmad Muhclis & Dita Anggraini /PT.Elex media Komputindo-Jakarta.', '2014', 'Teknik Informatika'),
(33, '27/05/2019', 'Moh . Reno Oktafian.S', '1234010090', 'Panduan Praktis Membangun LAN', 'Ristianto W. / PT.Infosarana Media-Jakarta .', '2008', 'Teknik Informatika'),
(34, '27/05/2019', 'Hamzah Rosyidi', '1434010037', 'The Power Of Owncloud Membangun Dan Mengelola Sendiri Teknologi \'Cloud Dilingkungan anda', 'Dedy Setyo Afrianto / CV.ANDI-Yogyakarta.', '2017', 'Teknik Informatika'),
(35, '27/05/2019', 'Widha Ponco Sugiarto', '1234010194', 'Computer Vision Dan Aplikasinya', 'Budiman Putra AR / CV. ANDI OFFSET-Yogyakarta.', '2017', 'Teknik Informatika'),
(36, '27/05/2019', 'Arief Cendikia R.', '1234010203', 'Pemrograman Delphi', 'Kusnassriyanto Saiful Bahri Wawan Syachriyanto /Informatika Bandung.', '2005', 'Teknik Informatika'),
(37, '27/05/2019', 'Kamadwingga B.R', '1434010009', 'Pemrograman Web', 'Priyanto Hidayahtullah Jauhari Khairul Kawistara / Informatika \'Bandung.', '2015', 'Teknik Informatika'),
(38, '27/05/2019', 'Moch.Bukhori B', '1234010193', 'Simulasi Jaringan komputer Dengan CISCO PACKET TRECER', 'Dian Ariawan &Onno Wpurbo / Elex Media Komputindo-jakarta', '2016', 'Teknik Informatika'),
(39, '27/05/2019', 'Aditya Irwansyah', '1234010173', 'Inspirasi Codeigniter', 'Ibnu Syuhada,M.Si / PT.Elex Media Komputindo -Jakarta', '2014', 'Teknik Informatika'),
(40, '27/05/2019', 'Rizal Mariyadi', '1234010179', 'Mengenal Pemrograman Data Base', 'Jubilee Enterprise / PT.Elex Media Komputindo- Jakarta', '2014', 'Teknik Informatika'),
(41, '28/05/2019', 'Riski Indrasukma R.', '1234010153', 'Desktop Publishing Dengan Adobe Indesign C S3', 'Agnes Heni T./ CV.ANDI OFFSET-Yogyakarta.', '2008', 'Teknik Informatika'),
(42, '28/05/2019', 'Anggra Yuanda', '1234010047', 'Master PHP  ( 67 Ttrik Dan Ide Berlian )', 'Rosihan Ari Yuana / Loka Media \'Yogyakarta.', '2010', 'Teknik Informatika'),
(43, '28/05/2019', 'M.Ilman Pathoni', '1234010117', 'Jaringan Komputer Teori Dan Implementasi Berbasis LINUX', 'Wagito / Gava Media -Yogyakarta', '2005', 'Teknik Informatika'),
(44, '28/05/2019', 'M.Ilham', '1234010098', 'Interaksi Manusia Dan Komputer', 'Insap Santoso / CV. ANDI OFFSET-Yogyakarta.', '2010', 'Teknik Informatika'),
(45, '28/05/2019', 'Wahyu Ferdyanto', '1234010143', 'Introduction To Information Retrieval', 'Christopher D.Manning Prabhakar Raghavan H.S /Cambridge-New york.', '2008', 'Teknik Informatika'),
(46, '28/05/2019', 'Syaiful Ikhsan', '1234010067', 'Personal Balanced Scorecard', 'Dr.Ir.Hubert K. Ramparsad / Jakarta Pusat.', '2006', 'Teknik Informatika'),
(47, '28/05/2019', 'Elang Mor Prabowo', '1234010155', 'Desktop Application Training    (Microsopt Office)', 'Ahmad Zainudin / Ebiz Press-                      Surabaya.', '2006', 'Teknik Informatika'),
(48, '28/05/2019', 'Fandi Kris P', '1334010073', 'Menguasai   CSS', 'Tn.Arie Prabawati / CV.ANDI OFFSET-Yogyakarta.', '2015', 'Teknik Informatika'),
(49, '28/05/2019', 'M.Adi Kurniawan', '1334010057', 'Pemrograman Python  ( untuk Ilmu Komputer Dan Teknik )', 'Widodo Budiharto / CV.ANDI OFFSET-Yogyakarta.', '2018', 'Teknik Informatika'),
(50, '28/05/2019', 'Sapta Nugraha A.W', '1334010050', 'Kupas Tuntas  WEB RESPONSIP', 'Slamet Riyanto / PT.Elex Media Komputindo-Jakarta', '2002', 'Teknik Informatika'),
(51, '28/05/2019', 'Ahmad Faisal', '1234010163', 'Membangun Aplikasi Dengan  PHP CODEIGNITER Dan Ajax', 'Sandi Febriyatna R. Dan Uus Rusmawan / PT.Elex Media Komputindo-Jakarta', '2014', 'Teknik Informatika'),
(52, '28/05/2019', 'Rauf Arsy Pamasa', '1234010095', 'WINDOWS  XP  X X X', 'Eri Bowo / JasaKom \'Yogyakarta.', '2006', 'Teknik Informatika'),
(53, '29/07/2019', 'Revanda Dwi Fani', '1534010024', 'Langkah Praktis Membangun Aplikasi Sederhana PLATFORM ANDROID', 'Ayu Yudha /PT.Elex Media Komputindo-Jakarta', '2012', 'Teknik Informatika'),
(54, '29/07/2019', 'Arief Bagas Samudra', '1534010014', 'Mengenal Pemrograman KOMPUTER DAN ANDROID Untuk Pemula', 'Jebulee Enterprise / PT.Elex Media Komputindo-Jakarta', '2017', 'Teknik Informatika'),
(55, '29/07/2019', 'M.Arief Ubaidillah', '1534010019', 'Inspirasi Codeigniter Return', 'Ibnu Syuhada/PT.Elex Media Komputindo-Jakarta.', '2017', 'Teknik Informatika'),
(56, '30/07/2019', 'Wahyu Ramadhan', '1434010030', 'Boom Visual Basic.Net 2010 Meledak', 'Yuswanto Dan Subari / Cerdas Pustaka Publisher-Jakarta.', '2010', 'Teknik Informatika'),
(57, '30/07/2019', 'Faizal Dwiyanto A.', '1534010116', 'Sistem Informasi Akademik Kampus Berbasis Web Dengan LARAVEL 5', 'Liliek Triyono / CV.Lokomedia \'Yogyakarta.', '2016', 'Teknik Informatika'),
(58, '30/07/2019', 'Yosafat Novianto S.', '1534010112', 'Pemrograman Sistem Pakar,Konsep Dasar Dan Aplikasinya Menggunakan Visual Basic 6', 'Anik Andriani,M.Kom./MediaKom-Yogyakarta.', '2017', 'Teknik Informatika'),
(59, '30/07/2019', 'Murni Yosep', '1534010091', 'Cara Mudah Menguasai Microsopt C # 2008', 'Maria Agustina /CV.ANDI OFFSET-Yogyakarta.', '2009', 'Teknik Informatika'),
(60, '30/07/2019', 'Erlangga Dwi Pratama', '1534010080', 'Mudah Dan Cepat Membuat Program SKRIPSI DAN TUGAS AKHIR DENGAN ANDORID', 'Ir.Yuniar Supardi &Dr.Ir.Iwan Setiawan / PT.Elex Media Komputindo-Jakarta', '2014', 'Teknik Informatika'),
(61, '30/07/2019', 'Muhammad Muzakki', '1434010110', 'Rahasia Dan IT Paling Top Menjadi IT EXPERT Dengan Sekejap', 'Feri Sulianta / CV.ANDI OFFSET- Yogyakarta.', '2015', 'Teknik Informatika'),
(62, '30/07/2019', 'Adhitya Wirayudha K.', '1234010123', 'Pemrograman Web HTML', 'Betha Sidik, Ir.Husni Ipohan,Ir.M.Eng /Informatika-Bandung.', '2014', 'Teknik Informatika'),
(63, '30/07/2019', 'Kiki Bahrum Suharno', '1234010126', 'Pemrograman C ++', 'Budi Harjo / Informatika-Bandung', '2010', 'Teknik Informatika'),
(64, '30/07/2019', 'Wisang Sanjaya', '1234010078', 'Microsopt Word 2010 Untuk Pemula', 'MADCOMS / CV.ANDI OFFSET-Yogyakarta.', '2010', 'Teknik Informatika'),
(65, '30/07/2019', 'Bagus Dermawan', '1334010017', 'Algoritma Pemrograman C++ Dalam Ilustrasi', 'Ym Kusuma Ardhana,ST.Gregorius Airlangga /JasaKom', '2011', 'Teknik Informatika'),
(66, '30/07/2019', 'Mutiara Juwi S.P', '1534010046', 'Inspirasi codeigniter', 'Ibnu Syuhada,M.Si / PT.Elex Media Komputindo-Jakarta', '2015', 'Teknik Informatika'),
(67, '30/07/2019', 'Shaldy Siswapratama', '1534010061', 'Trik Haeking Menggunakan Flash Disk', 'Efvy Zamidra Zam (Vyctoria.com) PT.Elex Media Komputindo-Jakarta.', '2002', 'Teknik Informatika'),
(68, '30/07/2019', 'Johni Akbar Santoso', '1234010132', 'Belajar Mudah Microsopt Windows 2000 Profesional', 'Adi Kurniadi / PT.Elex Media Komputindo-Jakarta.', '1997', 'Teknik Informatika'),
(69, '30/07/2019', 'Yogi Adam Pratama', '1534010102', 'Tutorial Membangun Website Sekolah Dengan Model CMSBalitbang Kemendikmas', 'Alan Ridwan Maulana,S.Si.M.Kom., .../ Informatika \'Bandung.', '2011', 'Teknik Informatika'),
(70, '30/07/2019', 'Anggoro Cahyo N.', '1534010030', 'Membangun Aplikasi Dengan PHP,Codeigniter Dan Ajax', 'Sandi Febriytna Raamadhan Dan Uus Rusmawan / PT.Elex Media Komputindo-Jakarta.', '2014', 'Teknik Informatika'),
(71, '30/07/2019', 'Wisnu Ari Sugianto', '1534010051', '5 Proyek Populer SMS Gateway', 'Sofyan Maulana,S.Kom / PT.Elex Media Komputindo-Jakarta.', '2014', 'Teknik Informatika'),
(72, '30/07/2019', 'Achmad Diva Bina S.', '1434010015', 'Pemrograman ANDROID', 'Priyanta F. / Cerdas Pustaka Publisher \' Jakarta.', '2011', 'Teknik Informatika'),
(73, '30/07/2019', 'Rifardi Taufiq Y.', '1534010029', 'Menyelesaikan Website 12 juta Secara Profesional', 'Agus Saputra,Feni Agustin,CV.ASFA Solution / PT.Elex Media Komputindo-Jkt.', '2013', 'Teknik Informatika'),
(74, '30/07/2019', 'Akbar Raihan M.', '1534010008', 'Cepat Menguasai C++', 'Jubilee Enterprise / PT.Elex Media Komputindo-Jakarta.', '2014', 'Teknik Informatika'),
(75, '30/07/2019', 'Fahmi Yahya S.', '1534010085', 'Membangun Mail Server Andal Dengan Fedora Dan Qmail', 'Albertus Dwiyoga W./ PT.Elex Media Komputindo-Jakarta.', '2005', 'Teknik Informatika'),
(76, '30/07/2019', 'Dimas Rizward H.U.', '1534010037', 'Buku Pintar Menguasai PHP MySQL', 'Andrea Adhelheid & Khairil Nst /TransMedia-Jakarta selatan.', '2012', 'Teknik Informatika'),
(77, '30/07/2019', 'Ahmad Sidqi Musyawi', '1534010090', '54 Trik Tersembunyi PHP', 'Rulianto Kurniawan / MaxiKom-Palembang.', '2007', 'Teknik Informatika'),
(78, '30/07/2019', 'Issa Rizky Firdhausa', '1534010100', 'Dasar  Algoritma & Struktur Data Dengan Bahasa JAVA', 'Cipta Ramadhani, S.T.,M.Eng / CV.ANDI OFFSET-Yogyakarta.', '2015', 'Teknik Informatika'),
(79, '30/07/2019', 'Elista Sandy Leila C.', '1534010070', 'Mahir Dalam 7 Hari Adobe Flash CS 4', 'MADCOMS MADIUN/ANDI OFFSET-Yogyakarta.', '2009', 'Teknik Informatika'),
(80, '30/07/2019', 'M.Syaifuddin Z.', '1234010108', '3 In 1 : Javascript,Jquery,Dan Jquery Mobil', 'Edy Winarno ST, M.Eng ,Ali Zaki SmitDev Community / PT.Elex Media Komputindo-Jakarta.', '2014', 'Teknik Informatika'),
(81, '30/07/2019', 'Afif Suchaimi', '1534010073', 'Aplikasi Elektronika Dengan Visual C# 2008', 'Dayat Kurniawan / PT.Elex Media Komputindo-Jakarta.', '2002', 'Teknik Informatika'),
(82, '30/07/2019', 'Lutfan Wira D.', '1234010164', 'Konfigurasi Routerbeans Mikrotik RB-750', 'Hardana Ino Irvantino /CV.ANDI OFFSET-Yogyakarta.', '2014', 'Teknik Informatika'),
(83, '30/07/2019', 'Faizal Rachmad T.', '1234010104', 'Membuat Sistem Informasi Kursus Berbasis WEB', 'Khadafi Zubaidi / CV.ANDI OFFSET-Yogyakarta.', '2015', 'Teknik Informatika'),
(84, '30/07/2019', 'Novan Laksana P.', '1434010120', 'Bikin Website Itu Mudah', 'Jonathan Sarwono / Mediakita-Jakarta Selatan.', '2015', 'Teknik Informatika'),
(85, '30/07/2019', 'Fitri Kurnia M.', '1434010115', 'Pasti Bisa belajar  Sendiri Microsopt Window 8.1', 'Leo Agung /Madcoms+Andi Offset-Yogyakarta.', '2014', 'Teknik Informatika'),
(86, '30/07/2019', 'Junio Bagus kurniawan', '1534010075', 'Membuat Toko Online Dengan Teknik OOP,MVC,Dan AJAX', 'Rohi Abdulloh / PT.Elex Media Komputindo-Jakarta.', '2014', 'Teknik Informatika'),
(87, '30/07/2019', 'Irfan Arif Herwitedi', '1534010015', 'Belajar Sendiri Desain Web Dengan Dreameaver', 'Jubilee Enterprise / PT.Elex Media Komputindo-Jakarta.', '2014', 'Teknik Informatika'),
(88, '30/07/2019', 'Ricky Gilang Aryadi', '1534010044', 'Jaringan Komputer Menggunakan Pendekatan Praktis', 'Kukuh Nugroho,ST,MT. / MEDIATERA- Kebumen.', '2016', 'Teknik Informatika'),
(89, '30/07/2019', 'Devi Anugrah Putri P.', '1534010035', 'LINUX  Untuk Pendidikan Dengan Edubuntu', 'Tommy Hendrawan &StanisLaus Ivan YP / CV.ANDI OFFSET-Yogyakarta.', '2008', 'Teknik Informatika'),
(90, '30/07/2019', 'Daffa Priyandika W.', '1234010177', 'Sistem Operasi Cloud Computing Dengan Windows Azure', 'Tutang,SE,MM./ CV..ANDI OFFSET-Yogyakarta.', '2014', 'Teknik Informatika'),
(91, '30/07/2019', 'Birgitta Dyah  P.', '1434010056', 'Codeigniter VS Laravel Kasus Membuat Pencari Kerja Menggunakan Codeigniter Versi  3.1.4 Dan Laravel Versi  5.4', 'David Naista / CV.LOKOMEDIA- Yogyakrta.', '2017', 'Teknik Informatika'),
(92, '30/07/2019', 'Winda Binartika', '1334010143', 'Zend Framework  2.X  Solusi Mempercepat Pengembangan Aplikasi Berbasis Web Dengan PHP 5.x Framework', 'Edison Siregar / CV.ANDI OFFSET-Yogyakarta.', '2015', 'Teknik Informatika'),
(93, '30/07/2019', 'Rosita Khamid', '1534010069', 'Rekayasa Perangkat Lunak  Testruktur Dan berorientasi Objek', 'Rosa A.S,M.Shalahuddin  / INFORMATIKA-Bandung.', '2016', 'Teknik Informatika'),
(94, '30/07/2019', 'Kusdiana Elliawati P.', '1534010025', 'Penerapan  DATA MINING Dengan MATLAB', 'Prabowo Pudjo Widodo,Rahmadya Trias H../ REKAYASA SAINS-Bandung.', '2013', 'Teknik Informatika'),
(95, '30/07/2019', 'Ramadhan Salatin P.', '1234010135', '1 Hari Menjadi HECKER', 'Andrea Adelheid / Mediakita-Jakarta Selatan.', '2013', 'Teknik Informatika'),
(96, '30/07/2019', 'Ady Irawanto', '1334010137', 'FIBER  OPTIIC  Teknologi,Material,Instalasi,Dan Implementasi Fiber Untuk Berbagai kebutuhan :Fiber to The building,dll..', 'Gunadi Dwi Hantoro Karyada / INFORMATIKA-Bandung.', '2015', 'Teknik Informatika'),
(97, '30/07/2019', 'Firman Wahyu', '1234015012', 'Pemrograman WEB  DENGAN  HTML Disertai Contoh .', 'Betha Sidik,Ir. Husni Iskandar Pohan,Ir.,  M.Eng. /Informatika-Bandung.', '2012', 'Teknik Informatika'),
(98, '03/09/2019', 'Herviangga R.Hawari', '1234010063', 'Jurus Kilat Mahir Microsoft Windows 7 Dari Mahir Hingga Profesional', 'Hendra Irawan  / Laskar Aksara \'Jakarta Timur', '2012', 'Teknik Informatika'),
(99, '03/09/2019', 'Devi Satya Intan C.', '1234010178', 'Konsep Dasar Rekayasa Perangkat Lunak ( Sofware Reengineering )', 'Soetam Rizky / Prestasi Pustaka-Jakarta', '2011', 'Teknik Informatika'),
(100, '03/09/2019', 'M.Nashrul Khanif', '1234010068', 'Administrasi Database Oracle 8 i', 'Reinhard Damopolii /PT.Elex Media Komputindao-Jakarta', '2002', 'Teknik Informatika'),
(101, '03/09/2019', 'Ayattul Fatayani', '1234010185', '25 Kreasi Desain Konveksi Dengan Adobe Illustrator Dan Photoshop CS 5.5', 'Kerjasama Wahana Komputer-/ PT.Andi -Yogyakarta', '2012', 'Teknik Informatika'),
(102, '03/09/2019', 'Yudha Tri Prasetyo', '1234010106', 'MATLAB Untuk Aljabar Linier &Matriks', 'Dr.Eng.R.H.Sianipar / Penerbit \'ANDI- Yogyakarta', '2017', 'Teknik Informatika'),
(103, '03/09/2019', 'Bagus Anshori', '1234010076', 'DASAR PEMROGRAMAN  2 -Implementasi Menggunakan Java,C++,Matlab Dan Pascal', 'Dr.Harwikarya, M.T., Desi \'Ramayanti ,S.Kom.,M.T., Nur Ani,-S.T.,MMSI. / Penerbit ANDI-Yogyakarta', '2017', 'Teknik Informatika'),
(104, '03/09/2019', 'Muhammad Hamdani', '1234015017', 'Adobe Acrobat X Pro ', 'Candra/Maxikom-Palembang.', '2012', 'Teknik Informatika'),
(105, '03/09/2019', 'Muhammad Hamdani', '1234015017', 'Menghapus Virus Secara Manual.', 'Syaiful Kabir/FlashBooks-Yogyakarta.', '2011', 'Teknik Informatika'),
(106, '03/09/2019', 'Muhammad Hamdani', '1234015017', 'Belajar Cepat Dan Praktis Menggunakan WINDOWS 7', 'Eko yulianto, Abdul Razaq / INDAH Surabaya-Surabaya', '2010', 'Teknik Informatika'),
(107, '03/09/2019', 'Mardi Sucahyono', '1234010136', 'Pemrograman  Client-Server Microsopt Visual Basic 6.0', 'Yuswanto / Prestasi Pustaka-Jakarta', '2003', 'Teknik Informatika'),
(108, '03/09/2019', 'Reza Hardiyansyah', '1234010083', 'Kupas Tuntas Bermacam Aplikasi Generasi Cloud Computing', 'Wahana Komputer/Penerbit ANDI- Yogyakarta', '2011', 'Teknik Informatika'),
(109, '17/09/2019', 'Ardiansyah Bayu', '1434010063', 'Be Creative With HTML 5 Canvas', 'Rohi Abdulloh / PT.Elex Media Komputindo- Jakarta', '2014', 'Teknik Informatika'),
(110, '22/05/2019', 'Muhammad Reyhan', '1535010029', 'KEAMANAN Informasi Dan Internet', 'Prof.Richardus Eko Indrajit / Preinexus-Yogyakarta.', '2016', 'Sistem Informasi'),
(111, '23/05/2019', 'Nor Hasanah', '1535010073', 'Pemrograman Aplikasi Android Dengan Sencha Touch', 'Ignas-Bowo / ANDI-Yogyakarta', '2015', 'Sistem Informasi'),
(112, '24/05/2019', 'M.Sholechuddin', '1535010079', 'KEAMANAN Informasi Dan Internet', 'Prof.Richardus Eko Indrajit / Preinexus-Yogyakarta.', '2016', 'Sistem Informasi'),
(113, '27/05/2019', 'Indra Dermawan', '1535010048', 'Panduan Lengkap Microsopt Excel 2007', 'Theresia Ari Prabawati / ANDI OFFSET-Madiun', '2007', 'Sistem Informasi'),
(114, '27/05/2019', 'Suci A. Pramista A.', '1535010107', 'CSCO CCNP Dan Jaringan Komputer', 'Iwan Sofana / Informatika-Bandung', '2012', 'Sistem Informasi'),
(115, '27/05/2019', 'Yoland Pradipta', '1535010023', 'Belajar VB,Visual C# Dan Python Menggunakan Visual Studio', 'Jubilee Enterprise / PT.Elex Media Komputindo-Jakarta.', '2017', 'Sistem Informasi'),
(116, '27/05/2019', 'Siti Muhartini', '1535010107', 'Aplikasi Program Terintegrasi dengan  VISUAL BASIC 6.0', 'M.Leo Agung /Mad Coms Yogyakarta.', '2011', 'Sistem Informasi'),
(117, '27/05/2019', 'M.Arief Kurniawan', '1435010035', 'Siapa Bikin Blog & Web Harus Bayar', 'Theresia Arie Prabawati, Andreas Hery Prasetya /CV. ANDI \' Yogyakarta.', '2011', 'Sistem Informasi'),
(118, '27/05/2019', 'Pradita Yunita B.', '1535010064', 'KEAMANAN Informasi Dan Internet', 'Prof.Richardus Eko Indrajit /Preinexus-Yogyakarta.', '2016', 'Sistem Informasi'),
(119, '27/05/2019', 'Ahmad Sahal W.', '1435010037', 'Membuat Aplikasi Penjualan Dan Stop Barang Dengan Macro Excel', 'Yudhy Wicaksono / PT.Elex Media Komputindo-Jakarta .', '2002', 'Sistem Informasi'),
(120, '27/05/2019', 'Faiz Zulfikar', '1435010035', 'Sekali Baca Langsung Ingat Merakit Komputer', 'Allawi Duratun Fatwa /Kunci Aksara-Jakarta.', '2013', 'Sistem Informasi'),
(121, '27/05/2019', 'Winda Salsabila R.K', '1535010009', 'Kumpulan PHP Untuk Pemula', 'Gregorius Agung / PT.Elex Media Komputindo-Yogyakarta.', '2014', 'Sistem Informasi'),
(122, '27/05/2019', 'Novia Rahmawati', '1535010042', 'Pemrograman Aplikasi Android Dengan Sencha Touch', 'Ignas, Bowo / CV. ANDI OFFSET \'Yogyakarta.', '2015', 'Sistem Informasi'),
(123, '27/05/2019', 'Fiara Sasti', '1535010007', 'Membuat Website PHP Dengan Codeigniter', 'Gregorius Agung / PT.Elex Media Komputindo-Jakarta.', '2014', 'Sistem Informasi'),
(124, '27/05/2019', 'Gina Rizka Alsyah', '1535010056', 'Pengantar Teknologi Informasi', 'Ahmad Fauzi / Graha Ilmu- Yogyakarta.', '2008', 'Sistem Informasi'),
(125, '27/05/2019', 'Astri Reginasari', '1535010033', 'Panduan Audit Keamanan Komputer Bagi Pemula', 'Girindro Pringgo Digdo/ PT.Elex Media Komputindo-Jakarta.', '2017', 'Sistem Informasi'),
(126, '29/05/2019', 'Anang Kurniawan', '1235010051', 'Data Base Systems Case sutdy All In One', 'Indrajani,S.Kom.,MM./PT.Elex Media Komputindo-Jakarta.', '2014', 'Sistem Informasi'),
(127, '29/05/2019', 'M.Iffan Farouq', '1435010044', 'Construct 2 Tutorial Game Engine', 'Rickman Roedavan / Informatika-Bandung.', '2017', 'Sistem Informasi'),
(128, '29/05/2019', 'Yoshua Yves Laurent', '1235010065', 'Pemrograman C Dan C++', 'Adam Mukharil Bachtiar/ Informatika-Bandung.', '2017', 'Sistem Informasi'),
(129, '29/05/2019', 'Supardionsyah', '1235010066', 'Bootstrap CSS Framework', 'Robert Kaban / CV.ANDI OFFSET-Yogyakarta.', '2019', 'Sistem Informasi'),
(130, '11/06/2019', 'Moh.Rizal Iqbal', '1235010039', 'Mudah Menguasai Laravel', ' Yudhanto,Helmi Adi Prasetyo / PT.Elex Media Komputindo-Jkt.', '2019', 'Sistem Informasi'),
(131, '22/07/2019', 'Dimas Wahyu Utomo', '1535010049', 'UML Distille edisi 3 Panduan Singkat Bhs Pemodelan Objek Standar', 'Martin Fowler / CV.ANDI OFFSET-Yogyakarta.', '2004', 'Sistem Informasi'),
(132, '26/07/2019', 'Tasya Putri Arbadi', '1535010024', 'Akses Internet Dengan Komputer Dan PHP', 'Vivi Herlina / CV.YRAMA WIDYA-Banduang.', '2007', 'Sistem Informasi'),
(133, '29/07/2019', 'M.Afrizal Cahya S.', '1235010013', 'Pemrograman PL / SQL ORACLE', 'Imam Heryanto,Budi Rahrjo / Informatika-Bandung.', '2003', 'Sistem Informasi'),
(134, '29/07/2019', 'Andi Noer Rahman', '1235010027', 'Membuat Aplikasi Sistem Inventory Dengan V.B.Net 2005 Dan SQL Server 2005', 'Hengky Alexander Mangkulo/PT.Elex Media Komputindo-Jakarta.', '1997', 'Sistem Informasi'),
(135, '29/07/2019', 'Gorrys Arta Dynata', '1235010035', 'Step By Step MS SQL Serve', 'Gregorius Agung / PT.Elex Media Komputing-Jakarta', '2018', 'Sistem Informasi'),
(136, '29/07/2019', 'Andika Rizky G.', '1235010032', 'Rumus Dan Fungsi Microsopt Access 2007', 'Fi Sigit Suyantoro/ CV.ANDI OFFSET-Yogyakarta', '2007', 'Sistem Informasi'),
(137, '29/07/2019', 'M.Galang Satrio W.', '1535010037', 'Pemrograman WEB Dengan HTML', 'Betha Sidik, Ir.Husni Iskandar Pohan, Ir.M.Eng / Informatika-Bandung', '2014', 'Sistem Informasi'),
(138, '29/07/2019', 'Daffa M.Iqbal .', '1335010006', 'Tutorial Lengkap Menguasai ArcGIS 10', 'Giovany /CV. ANDI OFFSET-Yogyakarta.', '2017', 'Sistem Informasi'),
(139, '30/07/2019', 'Alief Harry Purnomo', '1535010092', 'Panduan Mudah Belajar Framework LARAVEL', 'Yudho Yudhanto,Helmi Adi Prasetyo/PT.Elex Media Komputindo-Jakarta.', '2018', 'Sistem Informasi'),
(140, '30/07/2019', 'Bayu aji Purbacaraka', '1235010018', 'Algoritma Dan Pemrograman Dalam Bahasa Pascal dan C', 'Rinaldi Munir /Informatika-Bandung.', '2007', 'Sistem Informasi'),
(141, '30/07/2019', 'Vanny Prasetyo Adi', '1235010007', 'Dasar Pemrograman Komputer Dalam Bahasa JAVA', 'Suwarga,FI Sigit Suyantoro/CV. ANDI OFFSET-Yogyakarta.', '2009', 'Sistem Informasi'),
(142, '30/07/2019', 'Aliffian Nurdin', '1535010100', 'StepByStep Membuat SOP 203', 'Arini Tathagati / Efata Publishing-Yogyakarta.', '2014', 'Sistem Informasi'),
(143, '30/07/2019', 'Aldi Kurniawan', '1535010067', 'Mengenal Java Dan Database Dengan NETBEANS', 'Jubilee Enterprise / PT.Elex Media Komputindo-Jkt.', '2015', 'Sistem Informasi'),
(144, '30/07/2019', 'Anita Nabila Sita', '1535010003', 'Pemodelan VisuaL Dengan UML', 'Munawar/ Graha Ilmu-Jakarta Barat.', '2005', 'Sistem Informasi'),
(145, '30/07/2019', 'M.Purbo Adi W.', '1535010002', 'Pemrograman Sistem Informassi Dan aplikasinya', 'Andri Kristanto/Gava Media-Yogyakarta.', '2008', 'Sistem Informasi'),
(146, '30/07/2019', 'Suherbing Septian', '1535010046', 'Mengenal Java Dan Data Base Dengan Netbeants', 'Jubilee Enterprise / PT.Elex Media Komputindo-Jakarta.', '2015', 'Sistem Informasi'),
(147, '31/07/2019', 'Safalian Novandika', '1235010042', 'Pemrograman WEB', 'Priyanto Hidayahtullah/ Informatika-Bandung.', '2017', 'Sistem Informasi'),
(148, '31/07/2019', 'Abdul Ghofur A.', '1235010056', 'Kreasi Company Profile Interaktif Dengan Flash Action 3.0', 'Herman Thuan / ANDI \'Yogyakarta.', '2014', 'Sistem Informasi'),
(149, '01/08/2019', 'Muhammad Purwanto', '1535010058', 'Pemrograman JAVA Dari Nol', 'Tim EMS / PT.Elex Media Komputindo-Jakarta.', '2015', 'Sistem Informasi'),
(150, '29/08/2019', 'Faical Adam', '1235010062', 'Praktis Dan mudah Administrasi MySQL Berbasis GUI', 'Firrar Utdirartatmo/ANDI -Yogyakarta', '2006', 'Sistem Informasi'),
(151, '30/08/2019', 'Suwardi Tri Utoyo', '1235010079', 'Web Makin Dahsyat Dengan jQuery', 'Arista Prasetyo Adi Dan Ridwan Sanjaya/PT.Elex Media Komputindo - Jakarta.', '2012', 'Sistem Informasi'),
(152, '03/09/2019', 'Dyky Dwi Apriliyan', '1235010075', 'Dasar Dasar Pemrograman  Database Desktop Dengan Visual Basic.Net 2008', 'Primananda Arif Aditya,S.Si,M.M/PT.Elex Media Komputindo --Jakarta', '2002', 'Sistem Informasi'),
(153, '03/09/2019', 'Bintang Pujo P.', '1235010078', 'Kumpulan Aplikasi Berbasis VB6,VB.Net, Java', 'NONO/PT.Elex Media Komputindo-Jakarta', '2012', 'Sistem Informasi'),
(154, '03/09/2019', 'Susilo Warsito', '1235010005', 'Construct 2 Tutorial Game Engine', 'Rickman Roedavan / Informatika \'Bandung', '2016', 'Sistem Informasi'),
(155, '03/09/2019', 'Muhammad Qoryfaras', '1235010074', 'Panduan Membuat Aplikasi Program Toko Berbasis Web Dengan PHP,MySQL,Dan Dreamweaver', 'Bunafit Nugroho / Gava Media-Yogyakarta', '2015', 'Sistem Informasi'),
(156, '03/09/2019', 'Lukman Rizki P.', '1235010054', 'BITCOIN ( Mata Uang Digital Dunia )', 'Oscar Darmawan,Ceo Bitcoin Indonesia / JasaKom-Indonesia', '2014', 'Sistem Informasi'),
(157, '03/09/2019', 'M.Alif Fahmi', '1235010070', 'Algoritma & Struktur Data Dengan C++', 'Indra Yatini B, Erliansyah Nasution / Graha Ilmu-Yogyakarta', '2005', 'Sistem Informasi'),
(158, '03/09/2019', 'Fanni Noor Rahman', '1235010060', 'Jago Bikin Aplikasi Smart Phone', 'Anditya,S.T. , Mirza Ilhami,S.Kom,M.T.I. / Penerbit Andi', '2015', 'Sistem Informasi'),
(159, '03/09/2019', 'Nur Fikri Kurniawan', '1235010015', 'Aplikasi ANDROID DALAM 5 Menit', 'Hanif Irsyad /PT.Elex Media Komputindo-Jakarta', '2016', 'Sistem Informasi'),
(160, '04/09/2019', 'Gerry Pratama A.S', '1235010077', 'Cara Instan Membuat Website', 'Su Rahman /PT.Elex Media Komputindo-jakarta', '2016', 'Sistem Informasi'),
(165, '01/10/2019', 'Vicky Surya', '1535010074', 'Hacking Streaming ,Jurus Sakti Membangun Server Streaming Dengan NGINX-RTMP', 'Onno W.Purbo Jourdan Andrean', '2014', 'Sistem Informasi'),
(166, '02/10/2019', 'Syntia Dwi W.', '1535010099', 'Rekayasa Perangkat Lunak Menggunakan UML Dan JAVA', 'Adi Nugroho Penerbit Andi Offset', '2009', 'Sistem Informasi'),
(167, '02/10/2019', 'Ahmad Makky Zamzami', '1535010066', 'Menaklukkan Virus Komputer', 'Firdaus Asyqar Penerbit Cakrawala-Jakarta', '2010', 'Sistem Informasi'),
(168, '28/11/2019', 'Muhammad Farrel A.', '1535010035', 'Sistem Informasi Akademik Kampus Berbasis Web Dengan LARAVEL 5', 'Liliek Tryono Penerbit CV.LokoMedia', '2016', 'Sistem Informasi'),
(169, '30/09/2019', 'Arif Setyodirgantara', '1434010102', 'Windows 8.1 Panduan Lengkap', 'Eri Bowo Penerbit Jasacom-Yogyakarta', '2014', 'Teknik Informatika'),
(170, '28/11/2019', 'David Agung Cahyono', '1334010013', 'Konsep Dasar REKAYASA pERANGKAT LUNAK', 'Soetam Rizky Penerbit Prestasi Pustaka -Jakarta', '2011', 'Teknik Informatika'),
(171, '28/11/2019', 'Rivaldi Micco Pradana', '1434010033', 'Android & Perancangan Sistem Informasi', 'Hanif Al Fatta Penerbit Andi Yogyakarta', '2007', 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `id_mahasiswa` int(11) DEFAULT NULL,
  `id_dosen` int(11) DEFAULT NULL,
  `id_petugas` int(11) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `imei` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `id_mahasiswa`, `id_dosen`, `id_petugas`, `username`, `no_telp`, `alamat`, `email`, `password`, `imei`) VALUES
(2, 0, 0, 2, '123456', '123456', 'admin', 'admin@a.id', '$2y$10$Yds3A0aG7v5uGaza2xYuxOEXOwnbLxjcG.GcQVrGVAq.Z2RRMSJ2m', ''),
(25, 0, 0, 5, '2020', '081534010095', 'surabaya', 'zayyan@zayyan.com', '$2y$10$hfsIYqS0V7Y7BnbJ7BqYge0Alvm/yOF/C3qOIZfcvL/T41de.pk2m', '865932040314369'),
(26, 1, 0, 0, '0534010095', '18111111001', 'surabaya', 'zayyanramadhan@gmail.com', '$2y$10$MFbYEQlK7.Vs1PGqCIT3ne8j70tlSxN4mHvUdXOtVDCefiC4tjBTu', ''),
(27, 0, 0, 6, '36202101871', '082143174234', 'jl.Baratajaya 17/09 surabaya', 'mismansyahza@gmai.com', '$2y$10$SNM7fWapqrs062h93NzTFurAIvTQmZm1WCA8muJGZOvQX0R5RY.nG', '869366024404738'),
(28, 2, 0, 0, '1635010003', '085706712918', 'medokan asri barat', 'emiliarosa@gmail.com', '$2y$10$bL7Cq/rq7fahfmcs2RwM1eEUhizeC8GCW/J6ktnBYDHzZYRw2vWQ6', '351803098596696'),
(29, 3, 0, 0, '1534010000', '0855555555', 'sini', 'yy@y.com', '$2y$10$YDSJhG33xMBvTICJEymLt.VEhS7nYDtFGc0KKjSwqpSMfnJHJ5tfW', '867768036474199'),
(30, 4, 0, 0, '1134010090', '08111111001', 'surabaya', 'cindyaura@gmail.com', '$2y$10$MFbYEQlK7.Vs1PGqCIT3ne8j70tlSxN4mHvUdXOtVDCefiC4tjBTu', '865932040314361'),
(31, 5, 0, 0, '1134010091', '08111111001', 'surabaya', 'shinta@gmail.com', '$2y$10$MFbYEQlK7.Vs1PGqCIT3ne8j70tlSxN4mHvUdXOtVDCefiC4tjBTu', '865932040314362'),
(32, 6, 0, 0, '1134010092', '08111111001', 'surabaya', 'bagas@gmail.com', '$2y$10$MFbYEQlK7.Vs1PGqCIT3ne8j70tlSxN4mHvUdXOtVDCefiC4tjBTu', '865932040314352'),
(33, 7, 0, 0, '1134010093', '08111111001', 'surabaya', 'rudi_halim@gmail.com', '$2y$10$MFbYEQlK7.Vs1PGqCIT3ne8j70tlSxN4mHvUdXOtVDCefiC4tjBTu', '865932040314350'),
(39, 28, 0, 0, '1534010095', '085551234567', 'Gresik', 'zayyanif@gmail.com', '$2y$10$j5sXmPi8eiqke8yqwgwzf.1TTb08McAtv6SxxidJVkoNJRN/Pj9ny', '865932040314369');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bukus`
--
ALTER TABLE `bukus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dosens`
--
ALTER TABLE `dosens`
  ADD PRIMARY KEY (`id`,`nip`);

--
-- Indeks untuk tabel `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kunjungans`
--
ALTER TABLE `kunjungans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswas`
--
ALTER TABLE `mahasiswas`
  ADD PRIMARY KEY (`id`,`npm`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`,`nip_petugas`);

--
-- Indeks untuk tabel `pinjams`
--
ALTER TABLE `pinjams`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pklskripsis`
--
ALTER TABLE `pklskripsis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `progdis`
--
ALTER TABLE `progdis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `raks`
--
ALTER TABLE `raks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sumbang_bukus`
--
ALTER TABLE `sumbang_bukus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`,`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bukus`
--
ALTER TABLE `bukus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=398;

--
-- AUTO_INCREMENT untuk tabel `dosens`
--
ALTER TABLE `dosens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kunjungans`
--
ALTER TABLE `kunjungans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `mahasiswas`
--
ALTER TABLE `mahasiswas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pinjams`
--
ALTER TABLE `pinjams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pklskripsis`
--
ALTER TABLE `pklskripsis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT untuk tabel `progdis`
--
ALTER TABLE `progdis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `raks`
--
ALTER TABLE `raks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `sumbang_bukus`
--
ALTER TABLE `sumbang_bukus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
