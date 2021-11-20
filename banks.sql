-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Nov 2021 pada 09.38
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banks`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datasampah`
--

CREATE TABLE `datasampah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `datasampah`
--

INSERT INTO `datasampah` (`id`, `nama`, `jenis`, `harga`, `created_at`, `updated_at`) VALUES
(118300, 'tutup galon', 'plastik', 5600, '2021-10-18 04:29:00', '2021-11-14 11:38:47'),
(118302, 'gelas', 'kaca', 3500, '2021-10-18 07:35:47', '2021-10-18 07:35:47'),
(118303, 'tutup galon', 'plastik', 2200, '2021-10-19 04:55:55', '2021-10-19 04:55:55'),
(118305, 'botol', 'kaca', 2500, '2021-10-19 04:56:36', '2021-10-29 10:12:20'),
(118308, 'Koran', 'kertas', 5000, '2021-10-29 10:11:40', '2021-10-29 10:11:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_09_18_154209_create_datasampah_table', 1),
(5, '2021_09_19_084013_create_nasabahs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `saldo`
--

CREATE TABLE `saldo` (
  `id` int(11) NOT NULL,
  `total_saldo` int(11) NOT NULL,
  `nasabah_id` int(11) NOT NULL,
  `transaksi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(10) NOT NULL,
  `jenis_transaksi` text NOT NULL,
  `jumlah` int(10) NOT NULL,
  `total_transaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `jenis_transaksi`, `jumlah`, `total_transaksi`) VALUES
(12423432, 'setor', 20, 0),
(789465467, 'tarik', 12, 25000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_item`
--

CREATE TABLE `transaksi_item` (
  `id` int(11) NOT NULL,
  `transaksi_id` int(11) NOT NULL,
  `datasampah_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total_transaksi_item` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `roles` int(11) DEFAULT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notelp` bigint(20) DEFAULT NULL,
  `totalsampah` int(10) DEFAULT NULL,
  `totalsaldo` int(10) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `roles`, `name`, `email`, `email_verified_at`, `password`, `alamat`, `notelp`, `totalsampah`, `totalsaldo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', 'admin@banksamita.com', NULL, '$2a$12$hNrdrdrcJINNlJ2kMdj4Mew89GBXNWMOFi2ujLb58v7XcCIV95.Ne', 'admin aja dulu', 81382705546, 0, 0, NULL, NULL, '2021-10-16 04:03:31'),
(2, 2, 'Nasabah', 'Nasabah@banksamita.com', NULL, '$2a$12$66XHrGtdCtZH9xxp/pIYkuMH8i2VbaB5MFPWQJ6RzEQt8GdxSXq9G', 'Jl.Suryakencana bogor', 829130843, 15, 12750, 'NOcylPXgQvc49NXqc8sNzH1Vd9LHV9dKgS6SZgzoBxg7cY1jba7jIdX4exZX', NULL, NULL),
(12, 3, 'Spv', 'supervisor@banksamita.com', NULL, '$2y$10$PWmf1y72ZI7bt/6j2b7bQO4.JscIl7g25r8LQX4MSMEdfkeqjG6YS', 'jalan jalan terosss', 939890231023, NULL, NULL, NULL, '2021-11-10 06:36:57', '2021-11-10 06:38:49'),
(13, 4, 'Dewan Gereja', 'dewan.gereja@banksamita.com', NULL, '$2y$10$P2D7Fxp5Kaw0Mp6.LguTge8I3MNGbDwSHK0OWAaDJtBn9udUkN39i', 'kp.baru bulak kambing no.89 rt.003 rw.002 Jurumudi Benda', 87932198123, NULL, NULL, NULL, '2021-11-10 06:37:34', '2021-11-10 06:37:34'),
(14, 5, 'Staff Bank Sampah Induk', 'staff@banksamita.com', NULL, '$2y$10$CVHwctXsVNsW7hHx2WlAZurV47Y6fXGs2DB48IzxCv/U6sPhPPEQS', 'kp.baru bulak kambing no.89 rt.003 rw.002 Jurumudi Benda', 8781239823402, NULL, NULL, NULL, '2021-11-10 06:38:31', '2021-11-10 06:38:31');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datasampah`
--
ALTER TABLE `datasampah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `saldo`
--
ALTER TABLE `saldo`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi_item`
--
ALTER TABLE `transaksi_item`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_so_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datasampah`
--
ALTER TABLE `datasampah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118309;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `saldo`
--
ALTER TABLE `saldo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=789465468;

--
-- AUTO_INCREMENT untuk tabel `transaksi_item`
--
ALTER TABLE `transaksi_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
