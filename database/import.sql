DROP DATABASE IF EXISTS `sdg`;

CREATE DATABASE `sdg`;

USE `sdg`;

CREATE TABLE `antwoorden` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answers` varchar(2048) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `naam` varchar(2048) NOT NULL,
  `contactpersoon` varchar(2048) NOT NULL,
  `locatie` varchar(2048) NOT NULL,
  `activiteit` varchar(2048) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `antwoorden`
--
ALTER TABLE `antwoorden`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_foreign` (`user_id`),
  ADD KEY `questions_foreign` (`question_id`);

--
-- Indexen voor tabel `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `antwoorden`
--
ALTER TABLE `antwoorden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
