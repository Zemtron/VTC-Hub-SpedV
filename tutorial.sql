-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 06. Apr 2020 um 23:25
-- Server-Version: 10.1.44-MariaDB-0+deb9u1
-- PHP-Version: 7.0.33-26+0~20200320.33+debian9~1.gbp746b8e

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `tutorial`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `accounts`
--

CREATE TABLE `accounts` (
  `USERNAME` varchar(255) DEFAULT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `TOKEN` varchar(255) DEFAULT NULL,
  `SERVERRANK` int(11) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `accounts`
--

INSERT INTO `accounts` (`USERNAME`, `PASSWORD`, `EMAIL`, `TOKEN`, `SERVERRANK`, `ID`) VALUES
('Admin', '$2y$10$aXcngkjSCY9b7VDIrLLHAOMihrvuyVAWcRzqFfFTdlnmV0koZ5Dt2', 'admin@example.com', NULL, 2, 1);


-- --------------------------------------------------------


--
-- Indizes für die Tabelle `accounts`
--
ALTER TABLE `accounts`
  ADD UNIQUE KEY `USERNAME` (`USERNAME`),
  ADD KEY `TOKEN` (`TOKEN`);


--
-- AUTO_INCREMENT für exportierte Tabellen
--



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
