-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2021 at 06:46 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rebulm_tester`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` bigint(20) UNSIGNED NOT NULL,
  `email_admin` varchar(100) NOT NULL,
  `user_admin` varchar(100) NOT NULL,
  `password_admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id_faq` bigint(100) NOT NULL,
  `id_admin` bigint(20) UNSIGNED NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` bigint(20) NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_admin` bigint(20) UNSIGNED NOT NULL,
  `id_movie` bigint(20) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id_feedback`, `id_user`, `id_admin`, `id_movie`, `created_at`, `updated_at`, `comment`) VALUES
(6, 7, 1, 15, '2021-01-13', '2021-01-13', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id_movie` bigint(100) NOT NULL,
  `movie_title` varchar(100) NOT NULL,
  `year` year(4) NOT NULL,
  `director` varchar(100) NOT NULL,
  `actress` varchar(100) NOT NULL,
  `synopsis` text NOT NULL,
  `rating` decimal(10,0) NOT NULL,
  `duration` varchar(255) NOT NULL DEFAULT 'unknown',
  `img_path` varchar(255) NOT NULL,
  `trailer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id_movie`, `movie_title`, `year`, `director`, `actress`, `synopsis`, `rating`, `duration`, `img_path`, `trailer`) VALUES
(8, 'Spiderman Far From Home', 2019, 'Jon Watts', 'Tom Holland', 'Thrilled by his experience with the Avengers, young Peter Parker returns home to live with his Aunt May. Under the watchful eye of mentor Tony Stark, Parker starts to embrace his newfound identity as Spider-Man. He also tries to return to his normal daily routine -- distracted by thoughts of proving himself to be more than just a friendly neighborhood superhero. Peter must soon put his powers to the test when the evil Vulture emerges to threaten everything that he holds dear.', '8', '2 hours', 'spidermanffh.jpg-1610521936.jpg', 'https://www.youtube.com/embed/Nt9L1jCKGnE'),
(9, 'Frozen 2', 2020, 'Jennifer Lee', 'Idina Menzel', 'Raja Agnarr dari Arendelle menceritakan sebuah kisah kepada anak-anaknya yang masih kecil, Elsa dan Anna, bahwa kakek mereka, Raja Runeard, membuat perjanjian dengan suku tetangga Northuldra dengan membangun bendungan di tanah air mereka, Hutan Ajaib.', '8', '-', 'Frozen2.jpg-1610528691.jpg', 'https://youtu.be/embed/nrZxwPwmgrw'),
(12, 'Maleficent', 2014, 'Joe Roth', 'Angelina Jolie', 'Maleficent (Angelina Jolie) awalnya peri wanita bersayap besar dan kuat yang sangat baik hati. Di tempat tinggalnya yang bernama Moors, Maleficent kecil (Ella Purrnell) bertemu dengan seorang anak laki-laki bernama Stefan (Micheal Higgins). Stefan tertangkap oleh warga Moors karena mencuri, tetapi Maleficent kecil menyelamatkannya. Stefan yang hanya seorang yatim piatu miskin rela melepaskan cincinnya hanya karena Maleficent tidak bisa menyentuh besi. Mereka pun bersahabat, dan akhirnya menjadi sering bertemu. Sehingga, lama-kelamaan persahabatan mereka berubah menjadi cinta', '8', '-', 'maleficent.jpg-1610552721.jpg', 'https://youtu.be/embed/LaArkjF7AnM'),
(13, 'Avengers End Game', 2019, 'Joe Russo', 'Robert Downey Junior, Chris Hemsworth, Chris Evans', 'Dua puluh tiga hari setelah Thanos menggunakan Infinity Gauntlet untuk menghancurkan setengah dari seluruh kehidupan di alam semesta, Carol Danvers menyelamatkan Nebula dan Tony Stark, yang terdampar di luar angkasa setelah pertarungan mereka dengan Thanos.', '9', '-', 'endgame.jpg-1610552871.jpg', 'https://youtu.be/embed/TcMBFSGVi1c'),
(14, 'Avenger Infinity War', 2018, 'Joe Russo', 'Robert Downey Junior, Chris Hemsworth, Chris Evans, Scarlett Johansson', 'Having acquired the Power Stone–one of the six Infinity Stones–from the planet Xandar, Thanos and his lieutenants: Ebony Maw, Cull Obsidian, Proxima Midnight, and Corvus Glaive, intercept the spaceship carrying the survivors of Asgard\'s destruction. After subduing Thor, Thanos extracts the Space Stone from the Tesseract, overpowers the Hulk, and kills Loki. Thanos also kills Heimdall after he sends Hulk to Earth using the Bifröst. Thanos and his lieutenants leave, destroying the ship.', '9', '-', 'AvengerInfinity.jpg-1610553080.jpg', 'https://youtu.be/embed/6ZfuNTqbHE8'),
(15, 'Maze Runner The Death Cure', 2018, 'Wes Ball', 'Dylan O\'Brien', 'The Death Cure menceritakan perjuangan Thomas dan teman-temannya dalam menyelamatkan Minho (Ki Long Hee) dari tangan WCKD, organisasi yang telah melakukan eksperimen terhadap anak-anak yang memiliki imun terhadap virus The Flare.', '8', '-', 'deathcure.jpg-1610553294.jpg', 'https://youtu.be/embed/4-BTxXm8KSg'),
(16, 'Thor Ragnarok', 2017, 'Taika Watiti', 'Chris Hemsworth, Mark Ruffalo', 'Ragnarok bercerita tentang setelah kejadian di Avengers: Age of Ultron dan empat tahun setelah kejadian Thor: The Dark World, Thor tertangkap di planet Sakaar tanpa palu-nya. Dia harus memenangkan duel gladiator melawan teman lamanya, Hulk, dalam usahanya untuk kembali ke Asgard yang sedang terancam', '9', '-', 'thorragnarok.jpg-1610553453.jpg', 'https://youtu.be/embed/ue80QwXMRHg'),
(17, 'Nemo', 2003, 'Andrew Stanton', 'Alexander Gould', 'Menceritakan tentang petualangan Marlin (suara diisi oleh Albert Brooks) mencari anaknya, Nemo (Alexander Gould). Marlin adalah seekor ikan badut yang sangat protektif terhadap anaknya karena putranya itu memiliki sirip cacat.', '7', '-', 'nemo.jpg-1610553592.jpg', 'https://youtu.be/embed/2zLkasScy7A'),
(18, 'Iron man', 2008, 'Jon Favreau', 'Robert Downey Jr.', 'Tony Stark (Robert Downey Jr.) adalah pemimpin dari Stark Industries, sebuah perusahaan kontraktor militer utama yang ia warisi dari mendiang ayahnya. Stark adalah seorang jenius inventif dan ajaib, namun dia juga playboy. Setelah diwawancarai oleh Christine Everhart, ia membuatnya terpesona ke seks malam itu.', '7', '-', 'ironman.jpg-1610553736.jpg', 'https://youtu.be/embed/8ugaeA-nMTc'),
(19, 'Enola Holmes', 2020, 'Harry Bradbeer', 'Millie Bobby Brown', 'Dengan latar belakang waktu tahun 1884, film ini mengisahkan seorang gadis bernama Enola Holmes, yang baru saja berulang tahun ke-16 mengetahui bahwa ibunya hilang secara misterius. Sebelum menghilangnya ibu Enola yang diperankan oleh Helena Bonham Carter, ia meninggalkan hadiah yang aneh.', '8', '-', 'enola.jpg-1610553878.jpg', 'https://youtu.be/embed/1d0Zf9sXlHk'),
(20, 'Fast and Furious 8', 2017, 'F. Gary Gray', 'Dwayne Johnson, Vin Diesel', 'Cerita ini dimulai saat Dom sedang menikmati bulan madu. Lalu, hadir sosok wanita bernama Chiper yang mengatakan bahwa ia memiliki video yang membuat Dom harus mengikuti semua perintahnya dan tidak bisa mengelak.', '9', '-', 'f8.jpeg-1610554058.jpg', 'https://youtu.be/embed/JwMKRevYa_M'),
(21, 'Fast and Furious 7', 2015, 'James Wan', 'Paul Walker, Dwayne Johnson, Vin Diesel', 'Berkisah tentang Dominic Toretto (Vin Diesel), Brian O\'Conner ( Paul Walker), dan kru lainnya yang dapat kembali ke Amerika Serikat dan berharap hidup normal setelah mengalahkan Owen Shaw', '9', '-', 'ff7.jpg-1610554189.jpg', 'https://youtu.be/embed/Skpu5HaVkOc');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile_user`
--

CREATE TABLE `profile_user` (
  `id_profiluser` bigint(100) NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `phonenumber` int(50) NOT NULL,
  `borndate` date NOT NULL,
  `p_favgenre` varchar(50) NOT NULL,
  `p_listbuy` varchar(50) NOT NULL,
  `p_listrent` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(100) NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_movie` bigint(100) NOT NULL,
  `paket` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `total_price` int(100) NOT NULL,
  `payment_method` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `id_movie`, `paket`, `created_at`, `updated_at`, `total_price`, `payment_method`) VALUES
(78, 7, 8, 'Rent 1 Week', '2021-01-13', '2021-01-13', 10000, 'Dana'),
(79, 7, 15, 'Buy', '2021-01-13', '2021-01-13', 50000, 'M-Banking');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `borndate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `borndate`, `phonenumber`, `username`, `remember_token`, `img_path`, `created_at`, `updated_at`) VALUES
(1, 'user', 'Dewi Astuti', 'd@gmail.com', NULL, '$2y$10$Nc0DYIqGCXGPHyhdl20P8OxgWs/yB44a0bm8EARkOVBxgHYm5YOhi', '2021-01-06', '12345', 'dewiaastt', NULL, NULL, '2021-01-11 07:21:09', '2021-01-11 07:21:09'),
(3, 'admin', 'admin', 'admin@gmail.com', NULL, '$2y$10$Nc0DYIqGCXGPHyhdl20P8OxgWs/yB44a0bm8EARkOVBxgHYm5YOhi', '2021-01-06', '12345', 'admin', NULL, NULL, '2021-01-11 07:21:09', '2021-01-11 07:21:09'),
(4, 'user', 'Hendery', 'dd@gmail.com', NULL, '$2y$10$acfypQvdweNGpj2VQNgr1e2g0c/jcrYmCb2nsCuwKJL5KuWPQHXwe', '2021-01-28', '54321', 'henderywong', NULL, NULL, '2021-01-11 09:11:46', '2021-01-11 09:11:46'),
(5, 'user', 'Zeus', 'ddd@gmail.com', NULL, '$2y$10$YyvgcCZWlQSsu4uAIk2DEOIFGEo9YFIPiKNG9sf80lm3aZwq7bxpe', '2021-01-21', '12345', 'zeus_', NULL, NULL, '2021-01-11 09:17:09', '2021-01-11 09:17:09'),
(6, 'user', 'Mark', 'mark@gmail.com', NULL, '$2y$10$9loSvnHRkBxo3L0GMStDTeK0.uDuQ.rXcQi0PaCFjTZLDNn/NmUuC', '2021-01-08', '0812', 'marklee', NULL, NULL, '2021-01-11 09:27:49', '2021-01-11 09:27:49'),
(7, 'user', 'Rizalrasyd', 'drizalrasyd@gmail.com', NULL, '$2y$10$wKEgY9PTg9gwYjQExR4J..O3TutHcrt.etlxNHS5n5QZtj1.lenLK', '2021-01-07', '123456789', 'jackzay', NULL, NULL, '2021-01-12 23:18:44', '2021-01-13 09:14:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id_faq`),
  ADD KEY `fk14` (`id_admin`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`),
  ADD KEY `fk16` (`id_admin`),
  ADD KEY `fk17` (`id_user`),
  ADD KEY `fk18` (`id_movie`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id_movie`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `profile_user`
--
ALTER TABLE `profile_user`
  ADD PRIMARY KEY (`id_profiluser`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `fk8` (`id_movie`),
  ADD KEY `fk13` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id_faq` bigint(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id_movie` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `profile_user`
--
ALTER TABLE `profile_user`
  MODIFY `id_profiluser` bigint(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `faqs`
--
ALTER TABLE `faqs`
  ADD CONSTRAINT `fk14` FOREIGN KEY (`id_admin`) REFERENCES `users` (`id`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `fk16` FOREIGN KEY (`id_admin`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `fk17` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `fk18` FOREIGN KEY (`id_movie`) REFERENCES `movies` (`id_movie`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profile_user`
--
ALTER TABLE `profile_user`
  ADD CONSTRAINT `profile_user_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk13` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `fk8` FOREIGN KEY (`id_movie`) REFERENCES `movies` (`id_movie`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
