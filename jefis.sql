-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 23 fév. 2024 à 11:55
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jefis`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `id_posts` int(11) NOT NULL,
  `id_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `followers`
--

CREATE TABLE `followers` (
  `id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_users_is_followed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `like_posts`
--

CREATE TABLE `like_posts` (
  `id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_posts` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `is_read` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_users_recieve` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `id_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `profile_picture` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `profile_picture`, `email`, `password`, `birthday`, `phone`, `active`, `created_at`) VALUES
(2, 'Tony', 'Vatry', 'GOAT', 'goat.pnj', 'tony@vatry.Fr', 'Tony', '2000-01-01', '0606060606', 1, '2024-02-22 15:24:51'),
(3, 'Moi', 'Mwa', 'me', '', 'moi@mwa.fr', 'moi', '2024-02-16', '0707070707', 1, '2024-02-23 08:26:13'),
(4, 'Moi2', 'Mwa', 'me', '', 'moi@mwa.fr', 'moi', '2024-02-16', '0707070707', 1, '2024-02-23 08:26:13'),
(5, 'Theo', 'Boyet', 'DeaZ', '', 'Theo1638@gmail.com', 'Boyet', '2001-09-17', '0778113562', 1, '0000-00-00 00:00:00'),
(6, 'Logan', 'Theodore', 'Fayvara', '', 'Fayvara@gmailo.com', 'Logan', '2003-07-31', '4545454545', 1, '2024-02-23 10:37:21'),
(7, '1', 'test', 'test1', '', 'test@1.fr', 'test', '2024-02-23', '0000000001', 1, '2024-02-23 10:59:40'),
(8, '2', 'test', 'test2', '', 'test@1.fr', 'test', '2024-02-23', '0000000001', 1, '2024-02-23 11:01:06'),
(9, '3', 'test', 'test2', '', 'test@1.fr', 'test', '2024-02-23', '0000000001', 1, '2024-02-23 11:01:23'),
(10, 'Popaul', 'Paul', 'popaul', '', 'po@paul.fr', 'azz', '2024-02-23', '0123456789', 1, '2024-02-23 11:51:49'),
(11, '1', 'test', 'rg', '', 'Fayvara@gmailo.com', 'azezaef', '2024-02-23', '0202020202', 1, '2024-02-23 11:52:56');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_posts_FK` (`id_posts`),
  ADD KEY `comments_users0_FK` (`id_users`);

--
-- Index pour la table `followers`
--
ALTER TABLE `followers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `followers_users_FK` (`id_users`),
  ADD KEY `followers_users0_FK` (`id_users_is_followed`);

--
-- Index pour la table `like_posts`
--
ALTER TABLE `like_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `like_posts_users_FK` (`id_users`),
  ADD KEY `like_posts_posts0_FK` (`id_posts`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_users_FK` (`id_users`),
  ADD KEY `messages_users0_FK` (`id_users_recieve`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_users_FK` (`id_users`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `followers`
--
ALTER TABLE `followers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `like_posts`
--
ALTER TABLE `like_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_posts_FK` FOREIGN KEY (`id_posts`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `comments_users0_FK` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `followers`
--
ALTER TABLE `followers`
  ADD CONSTRAINT `followers_users0_FK` FOREIGN KEY (`id_users_is_followed`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `followers_users_FK` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `like_posts`
--
ALTER TABLE `like_posts`
  ADD CONSTRAINT `like_posts_posts0_FK` FOREIGN KEY (`id_posts`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `like_posts_users_FK` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_users0_FK` FOREIGN KEY (`id_users_recieve`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `messages_users_FK` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_users_FK` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
