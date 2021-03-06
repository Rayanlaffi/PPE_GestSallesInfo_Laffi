-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 24 Mai 2021 à 18:20
-- Version du serveur :  5.7.11
-- Version de PHP :  7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestparcinfo`
--

-- --------------------------------------------------------

--
-- Structure de la table `installer`
--

CREATE TABLE `installer` (
  `nPoste` varchar(7) DEFAULT NULL,
  `nLog` varchar(5) DEFAULT NULL,
  `numIns` int(5) NOT NULL,
  `dateIns` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `delai` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `installer`
--

INSERT INTO `installer` (`nPoste`, `nLog`, `numIns`, `dateIns`, `delai`) VALUES
('p2', 'log1', 1, '2003-05-14 22:00:00', NULL),
('p2', 'log2', 2, '2003-09-16 22:00:00', NULL),
('p4', 'log5', 3, '2020-11-30 15:58:34', NULL),
('p6', 'log6', 4, '2003-05-19 22:00:00', NULL),
('p6', 'log1', 5, '2003-05-19 22:00:00', NULL),
('p8', 'log2', 6, '2003-05-18 22:00:00', NULL),
('p8', 'log6', 7, '2003-05-19 22:00:00', NULL),
('p11', 'log3', 8, '2003-04-19 22:00:00', NULL),
('p12', 'log4', 9, '2003-04-19 22:00:00', NULL),
('p11', 'log7', 10, '2003-04-19 22:00:00', NULL),
('p7', 'log7', 11, '2002-03-31 22:00:00', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `logiciel`
--

CREATE TABLE `logiciel` (
  `nLog` varchar(5) NOT NULL,
  `nomLog` varchar(20) NOT NULL,
  `dateAch` datetime DEFAULT NULL,
  `version` varchar(7) DEFAULT NULL,
  `typeLog` varchar(9) DEFAULT NULL,
  `prix` decimal(6,2) DEFAULT NULL,
  `nbInstall` tinyint(2) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `logiciel`
--

INSERT INTO `logiciel` (`nLog`, `nomLog`, `dateAch`, `version`, `typeLog`, `prix`, `nbInstall`) VALUES
('log1', 'Oracle 6', '1995-05-13 00:00:00', '6.2', 'UNIX', '3000.00', 0),
('log2', 'Oracle 8', '1999-09-15 00:00:00', '8i', 'UNIX', '5600.00', 0),
('log3', 'SQL Server', '1998-04-12 00:00:00', '7', 'PCNT', '2700.00', 0),
('log4', 'Front Page', '1997-06-03 00:00:00', '5', 'PCWS', '500.00', 0),
('log5', 'WinDev', '1997-05-12 00:00:00', '5', 'PCWS', '750.00', 0),
('log6', 'SQL*Net', NULL, '2.0', 'UNIX', '500.00', 0),
('log7', 'I. I. S.', '2002-04-12 00:00:00', '2', 'PCNT', '810.00', 0),
('log8', 'DreamWeaver', '2003-09-21 00:00:00', '2.0', 'BeOS', '1400.00', 0);

-- --------------------------------------------------------

--
-- Structure de la table `mrbs_area`
--

CREATE TABLE `mrbs_area` (
  `id` int(11) NOT NULL,
  `disabled` tinyint(1) NOT NULL DEFAULT '0',
  `area_name` varchar(30) DEFAULT NULL,
  `area_admin_email` text,
  `resolution` int(11) DEFAULT NULL,
  `default_duration` int(11) DEFAULT NULL,
  `morningstarts` int(11) DEFAULT NULL,
  `morningstarts_minutes` int(11) DEFAULT NULL,
  `eveningends` int(11) DEFAULT NULL,
  `eveningends_minutes` int(11) DEFAULT NULL,
  `private_enabled` tinyint(1) DEFAULT NULL,
  `private_default` tinyint(1) DEFAULT NULL,
  `private_mandatory` tinyint(1) DEFAULT NULL,
  `private_override` varchar(32) DEFAULT NULL,
  `min_book_ahead_enabled` tinyint(1) DEFAULT NULL,
  `min_book_ahead_secs` int(11) DEFAULT NULL,
  `max_book_ahead_enabled` tinyint(1) DEFAULT NULL,
  `max_book_ahead_secs` int(11) DEFAULT NULL,
  `custom_html` text,
  `approval_enabled` tinyint(1) DEFAULT NULL,
  `reminders_enabled` tinyint(1) DEFAULT NULL,
  `enable_periods` tinyint(1) DEFAULT NULL,
  `confirmation_enabled` tinyint(1) DEFAULT NULL,
  `confirmed_default` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `mrbs_area`
--

INSERT INTO `mrbs_area` (`id`, `disabled`, `area_name`, `area_admin_email`, `resolution`, `default_duration`, `morningstarts`, `morningstarts_minutes`, `eveningends`, `eveningends_minutes`, `private_enabled`, `private_default`, `private_mandatory`, `private_override`, `min_book_ahead_enabled`, `min_book_ahead_secs`, `max_book_ahead_enabled`, `max_book_ahead_secs`, `custom_html`, `approval_enabled`, `reminders_enabled`, `enable_periods`, `confirmation_enabled`, `confirmed_default`) VALUES
(1, 0, 'Informatique - multimédia', 'chemin.lorette@lorraine-sport.net', 1800, 3600, 7, 0, 19, 30, 0, 0, 0, 'none', 0, 0, 0, 604800, '', 0, 1, 0, 1, 1),
(2, 0, 'Salles de réunion', 'chemin.lorette@lorraine-sport.net', 1800, 3600, 7, 0, 23, 30, 0, 0, 0, 'none', 0, 0, 0, 604800, '', 0, 1, 0, 1, 1),
(3, 0, 'Salles de réception', 'chemin.lorette@lorraine-sport.net', 1800, 3600, 7, 0, 23, 30, 0, 0, 0, 'none', 0, 0, 0, 604800, '', 0, 1, 0, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `mrbs_entry`
--

CREATE TABLE `mrbs_entry` (
  `id` int(11) NOT NULL,
  `start_time` int(11) NOT NULL DEFAULT '0',
  `end_time` int(11) NOT NULL DEFAULT '0',
  `entry_type` int(11) NOT NULL DEFAULT '0',
  `repeat_id` int(11) NOT NULL DEFAULT '0',
  `room_id` int(11) NOT NULL DEFAULT '1',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `create_by` varchar(80) NOT NULL DEFAULT '',
  `name` varchar(80) NOT NULL DEFAULT '',
  `type` char(1) NOT NULL DEFAULT 'E',
  `description` text,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `reminded` int(11) DEFAULT NULL,
  `info_time` int(11) DEFAULT NULL,
  `info_user` varchar(80) DEFAULT NULL,
  `info_text` text,
  `ical_uid` varchar(255) NOT NULL DEFAULT '',
  `ical_sequence` smallint(6) NOT NULL DEFAULT '0',
  `ical_recur_id` varchar(16) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `mrbs_repeat`
--

CREATE TABLE `mrbs_repeat` (
  `id` int(11) NOT NULL,
  `start_time` int(11) NOT NULL DEFAULT '0',
  `end_time` int(11) NOT NULL DEFAULT '0',
  `rep_type` int(11) NOT NULL DEFAULT '0',
  `end_date` int(11) NOT NULL DEFAULT '0',
  `rep_opt` varchar(32) NOT NULL DEFAULT '',
  `room_id` int(11) NOT NULL DEFAULT '1',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `create_by` varchar(80) NOT NULL DEFAULT '',
  `name` varchar(80) NOT NULL DEFAULT '',
  `type` char(1) NOT NULL DEFAULT 'E',
  `description` text,
  `rep_num_weeks` smallint(6) DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `reminded` int(11) DEFAULT NULL,
  `info_time` int(11) DEFAULT NULL,
  `info_user` varchar(80) DEFAULT NULL,
  `info_text` text,
  `ical_uid` varchar(255) NOT NULL DEFAULT '',
  `ical_sequence` smallint(6) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `mrbs_room`
--

CREATE TABLE `mrbs_room` (
  `id` int(11) NOT NULL,
  `disabled` tinyint(1) NOT NULL DEFAULT '0',
  `area_id` int(11) DEFAULT '0',
  `room_name` varchar(25) NOT NULL DEFAULT '',
  `sort_key` varchar(25) DEFAULT '',
  `description` varchar(60) DEFAULT NULL,
  `capacity` int(11) NOT NULL DEFAULT '0',
  `room_admin_email` text,
  `custom_html` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `mrbs_room`
--

INSERT INTO `mrbs_room` (`id`, `disabled`, `area_id`, `room_name`, `sort_key`, `description`, `capacity`, `room_admin_email`, `custom_html`) VALUES
(1, 0, 2, 'Daum', 'Daum', 'La salle du daum', 15, '', ''),
(2, 0, 2, 'Corbin', 'Corbin', 'La salle du Corbin', 15, '', ''),
(3, 0, 2, 'Baccarat', 'Baccarat', 'La salle du Baccarat', 20, '', ''),
(4, 0, 2, 'Longwy', 'Longwy', 'La salle du Longwy', 12, '', ''),
(5, 0, 1, 'Multimédia', 'Multimédia', 'La salle du Multimédia', 25, '', ''),
(6, 0, 3, 'Amphithéâtre', 'Amphithéâtre', 'L\'Amphithéâtre', 200, '', ''),
(7, 0, 2, 'Lamour', 'Lamour', 'Salle Lamour', 30, '', ''),
(8, 0, 2, 'Grüber', 'Grüber', 'Salle Grüber', 15, '', '');

-- --------------------------------------------------------

--
-- Structure de la table `mrbs_users`
--

CREATE TABLE `mrbs_users` (
  `id` int(11) NOT NULL,
  `level` smallint(6) NOT NULL DEFAULT '0',
  `name` varchar(30) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `email` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `mrbs_users`
--

INSERT INTO `mrbs_users` (`id`, `level`, `name`, `password`, `email`) VALUES
(1, 2, 'rayanlaffi', '21232f297a57a5a743894a0e4a801fc3', 'rayan.laffi@icof.fr');

-- --------------------------------------------------------

--
-- Structure de la table `mrbs_variables`
--

CREATE TABLE `mrbs_variables` (
  `id` int(11) NOT NULL,
  `variable_name` varchar(80) DEFAULT NULL,
  `variable_content` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `mrbs_variables`
--

INSERT INTO `mrbs_variables` (`id`, `variable_name`, `variable_content`) VALUES
(1, 'db_version', '26'),
(2, 'local_db_version', '1');

-- --------------------------------------------------------

--
-- Structure de la table `permission`
--

CREATE TABLE `permission` (
  `id` tinyint(4) NOT NULL,
  `libelle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `permission`
--

INSERT INTO `permission` (`id`, `libelle`) VALUES
(1, 'administrateur'),
(2, 'developpeur'),
(3, 'Visiteur');

-- --------------------------------------------------------

--
-- Structure de la table `poste`
--

CREATE TABLE `poste` (
  `nPoste` varchar(7) NOT NULL,
  `nomPoste` varchar(20) NOT NULL,
  `indIP` varchar(11) DEFAULT NULL,
  `ad` int(3) DEFAULT NULL,
  `typePoste` varchar(9) DEFAULT NULL,
  `idSalle` int(11) DEFAULT NULL,
  `nbLog` tinyint(2) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `poste`
--

INSERT INTO `poste` (`nPoste`, `nomPoste`, `indIP`, `ad`, `typePoste`, `idSalle`, `nbLog`) VALUES
('p1', 'Poste 1', '130.120.80', 1, 'TX', 1, NULL),
('p10', 'Poste 10', '130.120.81', 3, 'UNIX', 2, NULL),
('p11', 'Poste 11', '130.120.82', 1, 'PCNT', 2, 5),
('p12', 'Poste 12', '130.120.82', 2, 'PCWS', 1, 5),
('p13', 'Poste 13', '130.120.81', 5, 'NC', 1, 5),
('p14', 'Poste 14', '130.120.82', 1, 'UNIX', 1, 5),
('p15', 'Poste 15', '130.120.81', 2, 'TX', 1, 10),
('p16', 'Poste 16', '130.120.81', 2, 'TX', 1, 10),
('p17', 'test', '130.120.80', NULL, 'BeOS', NULL, NULL),
('p18', 'sasa', '130.120.80', NULL, 'BeOS', NULL, NULL),
('p19', 'asassaaaa', '130.120.80', NULL, 'BeOS', NULL, NULL),
('p2', 'Poste 2', '130.120.80', 2, 'UNIX', 1, 5),
('p3', 'Poste 3', '130.120.80', 3, 'TX', 1, 5),
('p4', 'Poste 4', '130.120.80', 4, 'PCWS', 1, 5),
('p5', 'Poste 5', '130.120.80', 5, 'PCWS', 1, 5),
('p6', 'Poste 6', '130.120.80', 6, 'UNIX', 1, 5),
('p7', 'Poste 7', '130.120.80', 7, 'TX', 1, 5),
('p8', 'Poste 8', '130.120.81', 1, 'UNIX', 1, 5),
('p9', 'Poste 9', '130.120.81', 2, 'TX', 1, 10);

--
-- Déclencheurs `poste`
--
DELIMITER $$
CREATE TRIGGER `deletePoste` AFTER DELETE ON `poste` FOR EACH ROW UPDATE salle
SET nbPoste = (SELECT COUNT(idSalle) from poste where idSalle = OLD.idSalle) WHERE id = OLD.idSalle
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `updateNbPosteAfterInsert` AFTER INSERT ON `poste` FOR EACH ROW UPDATE salle
SET nbPoste = (SELECT COUNT(idSalle) from poste where idSalle = NEW.idSalle) WHERE id = NEW.idSalle
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `updateNbPosteAfterUpdate` AFTER UPDATE ON `poste` FOR EACH ROW UPDATE salle
SET nbPoste = (SELECT COUNT(idSalle) from poste where idSalle = OLD.idSalle) WHERE id = OLD.idSalle
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `updateNbPosteBeforeUpdate` AFTER UPDATE ON `poste` FOR EACH ROW UPDATE salle
SET nbPoste = (SELECT COUNT(idSalle) from poste where idSalle = NEW.idSalle) WHERE id = NEW.idSalle
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE `salle` (
  `id` int(11) NOT NULL,
  `nbPoste` tinyint(2) DEFAULT NULL,
  `indIP` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `salle`
--

INSERT INTO `salle` (`id`, `nbPoste`, `indIP`) VALUES
(1, 14, '130.120.80'),
(2, 2, '130.120.80'),
(3, 0, '130.120.80'),
(4, 0, '130.120.81'),
(5, 0, '130.120.81'),
(6, 0, '130.120.82'),
(7, 0, '130.120.83'),
(8, 0, '130.120.83');

-- --------------------------------------------------------

--
-- Structure de la table `segment`
--

CREATE TABLE `segment` (
  `indIP` varchar(11) NOT NULL,
  `nomSegment` varchar(15) DEFAULT NULL,
  `etage` tinyint(1) DEFAULT NULL,
  `nbSalle` tinyint(2) DEFAULT '0',
  `nbPoste` tinyint(2) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `segment`
--

INSERT INTO `segment` (`indIP`, `nomSegment`, `etage`, `nbSalle`, `nbPoste`) VALUES
('130.120.80', 'Brin RDC', 0, 0, 0),
('130.120.81', 'Brin 1er  étage', 1, 0, 0),
('130.120.82', 'Brin 2ème étage', 2, 0, 0),
('130.120.83', 'Brin 3ème étage', 3, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `types`
--

CREATE TABLE `types` (
  `typeLP` varchar(9) NOT NULL,
  `nomType` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `types`
--

INSERT INTO `types` (`typeLP`, `nomType`) VALUES
('BeOS', 'Système Be'),
('NC', 'Network Computer'),
('PCNT', 'PC Windows  NT'),
('PCWS', 'PC Windows'),
('TX', 'Terminal X-Window'),
('UNIX', 'Système Unix');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `permission` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `password`, `telephone`, `permission`) VALUES
(1, 'laffi', 'rayan', 'rayan.laffi@icof.fr', '098f6bcd4621d373cade4e832627b4f6', '0671717171', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `installer`
--
ALTER TABLE `installer`
  ADD PRIMARY KEY (`numIns`),
  ADD UNIQUE KEY `un_installation` (`nPoste`,`nLog`),
  ADD KEY `fk_Installer_nLog_Logiciel` (`nLog`);

--
-- Index pour la table `logiciel`
--
ALTER TABLE `logiciel`
  ADD PRIMARY KEY (`nLog`),
  ADD KEY `fk_Logiciel_typeLog_Types` (`typeLog`);

--
-- Index pour la table `mrbs_area`
--
ALTER TABLE `mrbs_area`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mrbs_entry`
--
ALTER TABLE `mrbs_entry`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idxStartTime` (`start_time`),
  ADD KEY `idxEndTime` (`end_time`);

--
-- Index pour la table `mrbs_repeat`
--
ALTER TABLE `mrbs_repeat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mrbs_room`
--
ALTER TABLE `mrbs_room`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idxSortKey` (`sort_key`);

--
-- Index pour la table `mrbs_users`
--
ALTER TABLE `mrbs_users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mrbs_variables`
--
ALTER TABLE `mrbs_variables`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `poste`
--
ALTER TABLE `poste`
  ADD PRIMARY KEY (`nPoste`),
  ADD KEY `FK_salleid` (`idSalle`),
  ADD KEY `fk_Poste_indIP_Segment` (`indIP`),
  ADD KEY `fk_Poste_typePoste_Types` (`typePoste`);

--
-- Index pour la table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Salle_indIP_Segment` (`indIP`);

--
-- Index pour la table `segment`
--
ALTER TABLE `segment`
  ADD PRIMARY KEY (`indIP`);

--
-- Index pour la table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`typeLP`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permission` (`permission`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `installer`
--
ALTER TABLE `installer`
  MODIFY `numIns` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `mrbs_area`
--
ALTER TABLE `mrbs_area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `mrbs_entry`
--
ALTER TABLE `mrbs_entry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `mrbs_repeat`
--
ALTER TABLE `mrbs_repeat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `mrbs_room`
--
ALTER TABLE `mrbs_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `mrbs_users`
--
ALTER TABLE `mrbs_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `mrbs_variables`
--
ALTER TABLE `mrbs_variables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `permission`
--
ALTER TABLE `permission`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `installer`
--
ALTER TABLE `installer`
  ADD CONSTRAINT `fk_Installer_nLog_Logiciel` FOREIGN KEY (`nLog`) REFERENCES `logiciel` (`nLog`),
  ADD CONSTRAINT `fk_Installer_nPoste_Poste` FOREIGN KEY (`nPoste`) REFERENCES `poste` (`nPoste`);

--
-- Contraintes pour la table `logiciel`
--
ALTER TABLE `logiciel`
  ADD CONSTRAINT `fk_Logiciel_typeLog_Types` FOREIGN KEY (`typeLog`) REFERENCES `types` (`typeLP`);

--
-- Contraintes pour la table `poste`
--
ALTER TABLE `poste`
  ADD CONSTRAINT `FK_salleid` FOREIGN KEY (`idSalle`) REFERENCES `salle` (`id`),
  ADD CONSTRAINT `fk_Poste_indIP_Segment` FOREIGN KEY (`indIP`) REFERENCES `segment` (`indIP`),
  ADD CONSTRAINT `fk_Poste_typePoste_Types` FOREIGN KEY (`typePoste`) REFERENCES `types` (`typeLP`);

--
-- Contraintes pour la table `salle`
--
ALTER TABLE `salle`
  ADD CONSTRAINT `FK_idsallemrbs` FOREIGN KEY (`id`) REFERENCES `mrbs_room` (`id`),
  ADD CONSTRAINT `fk_Salle_indIP_Segment` FOREIGN KEY (`indIP`) REFERENCES `segment` (`indIP`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`permission`) REFERENCES `permission` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
