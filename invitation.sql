-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 06 Mar 2023 pada 19.01
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `invitation`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guests`
--

CREATE TABLE `guests` (
  `id` int(11) NOT NULL,
  `id_invitation` int(11) NOT NULL,
  `name` text NOT NULL,
  `link` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `guests`
--

INSERT INTO `guests` (`id`, `id_invitation`, `name`, `link`, `created_at`, `updated_at`) VALUES
(1, 10, 'Blabla', NULL, '2023-02-25 21:34:20', '2023-02-25 21:34:20'),
(2, 10, 'anjai', NULL, '2023-02-25 21:36:55', '2023-02-25 21:36:55'),
(3, 10, 'hanif', NULL, '2023-02-26 00:44:11', '2023-02-26 00:44:11'),
(7, 10, 'hanif', NULL, '2023-02-26 00:48:36', '2023-02-26 00:48:36'),
(8, 10, 'asda', 'http://127.0.0.1:8000/10/invitation/asda', '2023-02-26 00:50:29', '2023-02-26 00:50:29'),
(9, 10, 'gyvyggy', 'http://127.0.0.1:8000/10/invitation/gyvyggy', '2023-03-03 17:13:18', '2023-03-03 17:13:18'),
(10, 10, 'awluull', 'http://127.0.0.1:8000/10/invitation/awluull', '2023-03-06 21:25:52', '2023-03-06 21:25:52'),
(11, 10, 'awluull', 'http://127.0.0.1:8000/10/invitation/awluull', '2023-03-06 21:26:38', '2023-03-06 21:26:38'),
(12, 10, 'awluull', 'http://127.0.0.1:8000/10/invitation/awluull', '2023-03-06 21:27:02', '2023-03-06 21:27:02'),
(13, 10, 'awluull', 'http://127.0.0.1:8000/10/invitation/awluull', '2023-03-06 21:27:08', '2023-03-06 21:27:08'),
(14, 10, 'awluull', 'http://127.0.0.1:8000/10/invitation/awluull', '2023-03-06 21:28:46', '2023-03-06 21:28:46'),
(15, 10, 'awluull', 'http://127.0.0.1:8000/10/invitation/awluull', '2023-03-06 21:29:13', '2023-03-06 21:29:13'),
(16, 10, 'awluull', 'http://127.0.0.1:8000/10/invitation/awluull', '2023-03-06 21:30:09', '2023-03-06 21:30:09'),
(17, 10, 'asdasd', 'http://127.0.0.1:8000/10/invitation/asdasd', '2023-03-06 21:31:38', '2023-03-06 21:31:38'),
(18, 10, 'asdasd', 'http://127.0.0.1:8000/10/invitation/asdasd', '2023-03-06 21:32:03', '2023-03-06 21:32:03'),
(19, 10, 'asdasd', 'http://127.0.0.1:8000/10/invitation/asdasd', '2023-03-06 21:32:21', '2023-03-06 21:32:21'),
(20, 10, 'asdasd', 'http://127.0.0.1:8000/10/invitation/asdasd', '2023-03-06 21:41:46', '2023-03-06 21:41:46'),
(21, 10, 'asdasd', 'http://127.0.0.1:8000/10/invitation/asdasd', '2023-03-06 21:42:19', '2023-03-06 21:42:19'),
(22, 10, 'asdasd', 'http://127.0.0.1:8000/10/invitation/asdasd', '2023-03-06 21:42:41', '2023-03-06 21:42:41'),
(23, 10, 'asdasdasd', 'http://127.0.0.1:8000/10/invitation/asdasdasd', '2023-03-06 21:42:44', '2023-03-06 21:42:44'),
(24, 10, 'asdasdasd', 'http://127.0.0.1:8000/10/invitation/asdasdasd', '2023-03-06 21:42:48', '2023-03-06 21:42:48'),
(25, 10, 'asdasdasd', 'http://127.0.0.1:8000/10/invitation/asdasdasd', '2023-03-06 21:44:33', '2023-03-06 21:44:33'),
(26, 10, 'asdasdasd', 'http://127.0.0.1:8000/10/invitation/asdasdasd', '2023-03-06 21:44:45', '2023-03-06 21:44:45'),
(27, 10, 'asdasdasd', 'http://127.0.0.1:8000/10/invitation/asdasdasd', '2023-03-06 21:47:26', '2023-03-06 21:47:26'),
(28, 10, 'asdasdasd', 'http://127.0.0.1:8000/10/invitation/asdasdasd', '2023-03-06 21:49:38', '2023-03-06 21:49:38'),
(29, 10, 'asdasdasd', 'http://127.0.0.1:8000/10/invitation/asdasdasd', '2023-03-06 21:49:56', '2023-03-06 21:49:56'),
(30, 10, 'asdasdasd', 'http://127.0.0.1:8000/10/invitation/asdasdasd', '2023-03-06 21:51:17', '2023-03-06 21:51:17'),
(31, 10, 'asdasdasd', 'http://127.0.0.1:8000/10/invitation/asdasdasd', '2023-03-06 21:51:53', '2023-03-06 21:51:53'),
(32, 10, 'asdasdasd', 'http://127.0.0.1:8000/10/invitation/asdasdasd', '2023-03-06 21:52:23', '2023-03-06 21:52:23'),
(33, 10, 'asdasdasd', 'http://127.0.0.1:8000/10/invitation/asdasdasd', '2023-03-06 22:00:16', '2023-03-06 22:00:16'),
(34, 10, 'asdasdasd', 'http://127.0.0.1:8000/10/invitation/asdasdasd', '2023-03-06 22:00:27', '2023-03-06 22:00:27'),
(35, 10, 'asdasdasd', 'http://127.0.0.1:8000/10/invitation/asdasdasd', '2023-03-06 22:02:40', '2023-03-06 22:02:40'),
(36, 10, 'asdasdasd', 'http://127.0.0.1:8000/10/invitation/asdasdasd', '2023-03-06 22:02:57', '2023-03-06 22:02:57'),
(37, 10, 'asdasdasd', 'http://127.0.0.1:8000/10/invitation/asdasdasd', '2023-03-06 22:03:23', '2023-03-06 22:03:23'),
(38, 10, 'asdasdasd', 'http://127.0.0.1:8000/10/invitation/asdasdasd', '2023-03-06 22:03:42', '2023-03-06 22:03:42'),
(39, 10, 'asdasdasd', 'http://127.0.0.1:8000/10/invitation/asdasdasd', '2023-03-06 22:04:32', '2023-03-06 22:04:32'),
(40, 10, 'asdasdasd', 'http://127.0.0.1:8000/10/invitation/asdasdasd', '2023-03-06 22:05:36', '2023-03-06 22:05:36'),
(41, 10, 'asdasdasd', 'http://127.0.0.1:8000/10/invitation/asdasdasd', '2023-03-06 22:07:09', '2023-03-06 22:07:09'),
(42, 10, 'asdasdasd', 'http://127.0.0.1:8000/10/invitation/asdasdasd', '2023-03-06 22:07:30', '2023-03-06 22:07:30'),
(43, 10, 'asdasdasd', 'http://127.0.0.1:8000/10/invitation/asdasdasd', '2023-03-06 22:08:23', '2023-03-06 22:08:23'),
(44, 10, 'sdfds', 'http://127.0.0.1:8000/10/invitation/sdfds', '2023-03-06 22:12:15', '2023-03-06 22:12:15'),
(45, 10, 'asds', 'http://127.0.0.1:8000/10/invitation/asds', '2023-03-06 22:14:13', '2023-03-06 22:14:13'),
(46, 10, 'asds', 'http://127.0.0.1:8000/10/invitation/asds', '2023-03-06 22:15:25', '2023-03-06 22:15:25'),
(47, 10, 'asds', 'http://127.0.0.1:8000/10/invitation/asds', '2023-03-06 22:16:22', '2023-03-06 22:16:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `invitations`
--

CREATE TABLE `invitations` (
  `id` int(11) NOT NULL,
  `id_users` int(11) DEFAULT NULL,
  `name_male` text DEFAULT NULL,
  `username_male` varchar(16) DEFAULT NULL,
  `name_female` text DEFAULT NULL,
  `username_female` varchar(16) DEFAULT NULL,
  `father_male` text DEFAULT NULL,
  `mother_male` text DEFAULT NULL,
  `father_female` text DEFAULT NULL,
  `mother_female` text DEFAULT NULL,
  `akad_date` date DEFAULT NULL,
  `akad_time` time DEFAULT NULL,
  `resepsi_date` date DEFAULT NULL,
  `resepsi_time` time DEFAULT NULL,
  `header_message` text DEFAULT NULL,
  `bg_header` text DEFAULT NULL,
  `footer_message` text DEFAULT NULL,
  `backsound` varchar(16) DEFAULT NULL,
  `place` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `link_address` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `invitations`
--

INSERT INTO `invitations` (`id`, `id_users`, `name_male`, `username_male`, `name_female`, `username_female`, `father_male`, `mother_male`, `father_female`, `mother_female`, `akad_date`, `akad_time`, `resepsi_date`, `resepsi_time`, `header_message`, `bg_header`, `footer_message`, `backsound`, `place`, `address`, `link_address`, `created_at`, `updated_at`) VALUES
(9, 8, NULL, 'Luull', NULL, 'Jiso', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'users-assets/awluull-14/16770794438.jpg', NULL, 'tBbdSzwxqyY', NULL, NULL, NULL, '2023-02-21 06:03:42', '2023-02-23 04:24:01'),
(10, 1, 'Raihan Daffa Fadurohman', 'Izhar', 'Nabilla Nurilah Islah', 'Annisa', 'Sukarno', 'Megawati', 'Yanto', 'Dini', '2023-02-22', '12:00:00', '2023-02-24', '15:00:00', 'Mahasuci Allah telah menciptakan manusia dengan berpasang-pasangan. Sungguh besar rahmat dan karunia yang diberikan-Nya kepada keluarga Kami.\n\nMaka izinkan Kami mengundang sekaligus mengharapkan doa restu dari bapak/ibu dalam acara pernikahan putra & putri kami.', 'users-assets/luull/16770318451.jpg', 'Atas kehadiran dan doa restu bapak/ibu yang hadir, Kami sampaikan terima kasih.', 'tBbdSzwxqyY', 'Hotel Mercure', 'Jln Raya Bogor kec Serang Baru Blok E 22/5', 'https://goo.gl/maps/juxsbxudpq6V8BKj7', '2023-02-22 02:04:33', '2023-03-04 20:08:30'),
(11, 10, NULL, 'Farhan Arrsayid', NULL, 'Isyana saraspati', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'users-assets/five-teen/167707992510.jpg', NULL, 'G4nNBckyZQU', NULL, NULL, NULL, '2023-02-22 15:31:22', '2023-02-23 04:38:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `templates`
--

CREATE TABLE `templates` (
  `id` int(11) NOT NULL,
  `themes` varchar(128) NOT NULL,
  `yield` varchar(128) NOT NULL,
  `icon` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `templates`
--

INSERT INTO `templates` (`id`, `themes`, `yield`, `icon`) VALUES
(1, 'templates1', 'content-templates1', NULL),
(2, 'templates2', 'content-templates2', NULL),
(3, 'templates3', 'content-templates3', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `email_verified_at` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_templates` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `id_templates`, `created_at`, `updated_at`) VALUES
(1, 'luull', 'm.fadlullah14@gmail.com', '2023-02-15 07:17:57', '0', 1, '2023-02-15 07:17:57', '2023-02-15 07:17:57'),
(7, 'blabla', 'blabla@gmail.com', '2023-02-17 07:55:48', '$2y$10$6Dx5jIddpANxMBUyYj9WKOHea/1zkEwkZQaYAeRp0NCQ7AmY4vtk6', 2, '2023-02-17 07:55:48', '2023-02-17 07:55:48'),
(8, 'awluull 14', 'awluull@gmail.com', '2023-02-17 09:13:46', '0', 2, '2023-02-17 09:13:46', '2023-02-17 09:13:46'),
(9, 'das', 'asdasd@assa.asd', '2023-02-17 12:39:21', '$2y$10$dX8dNeunaxs9Cnn0iCnsyO7lWlQD7qSQl73zJBF58Iiq.uhodq8QG', 1, '2023-02-17 12:39:21', '2023-02-17 12:39:21'),
(10, 'Five Teen', 'teenfive15@gmail.com', '2023-02-18 06:37:54', '0', 3, '2023-02-18 06:37:54', '2023-02-18 06:37:54');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guests`
--
ALTER TABLE `guests`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `invitations`
--
ALTER TABLE `invitations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `guests`
--
ALTER TABLE `guests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `invitations`
--
ALTER TABLE `invitations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `templates`
--
ALTER TABLE `templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
