-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 13, 2025 alle 23:20
-- Versione del server: 10.4.32-MariaDB
-- Versione PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atleticadb`
--
CREATE database IF NOT EXISTS `202425_5ia_abdelhamid_atleticadb`;
USE `202425_5ia_abdelhamid_atleticadb`;
-- --------------------------------------------------------

--
-- Struttura della tabella `ammonizioni`
--

CREATE TABLE `ammonizioni` (
  `ID_ammonizione` int(11) NOT NULL,
  `ID_gara` int(11) DEFAULT NULL,
  `ID_atleta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `atleti`
--

CREATE TABLE `atleti` (
  `ID_atleta` int(11) NOT NULL,
  `cognome` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `indirizzo` varchar(255) DEFAULT NULL,
  `cod_tiscale` varchar(16) NOT NULL,
  `data_nascita` date NOT NULL,
  `sesso` enum('M','F') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `atleti_gare`
--

CREATE TABLE `atleti_gare` (
  `ID_atleta` int(11) NOT NULL,
  `ID_gara` int(11) NOT NULL,
  `numero_pettorale` int(11) NOT NULL,
  `ID_categoria` int(11) DEFAULT NULL,
  `ID_squadra` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `categorie`
--

CREATE TABLE `categorie` (
  `ID_categoria` int(11) NOT NULL,
  `descrizione` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `gare`
--

CREATE TABLE `gare` (
  `ID_gara` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `citta` varchar(255) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `squadre`
--

CREATE TABLE `squadre` (
  `ID_squadra` int(11) NOT NULL,
  `descrizione` varchar(255) NOT NULL,
  `citta` varchar(255) NOT NULL,
  `nazione` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `ammonizioni`
--
ALTER TABLE `ammonizioni`
  ADD PRIMARY KEY (`ID_ammonizione`),
  ADD KEY `ID_gara` (`ID_gara`),
  ADD KEY `ID_atleta` (`ID_atleta`);

--
-- Indici per le tabelle `atleti`
--
ALTER TABLE `atleti`
  ADD PRIMARY KEY (`ID_atleta`),
  ADD UNIQUE KEY `cod_tiscale` (`cod_tiscale`);

--
-- Indici per le tabelle `atleti_gare`
--
ALTER TABLE `atleti_gare`
  ADD PRIMARY KEY (`ID_atleta`,`ID_gara`),
  ADD KEY `ID_gara` (`ID_gara`),
  ADD KEY `ID_categoria` (`ID_categoria`),
  ADD KEY `ID_squadra` (`ID_squadra`);

--
-- Indici per le tabelle `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`ID_categoria`);

--
-- Indici per le tabelle `gare`
--
ALTER TABLE `gare`
  ADD PRIMARY KEY (`ID_gara`);

--
-- Indici per le tabelle `squadre`
--
ALTER TABLE `squadre`
  ADD PRIMARY KEY (`ID_squadra`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `ammonizioni`
--
ALTER TABLE `ammonizioni`
  MODIFY `ID_ammonizione` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `atleti`
--
ALTER TABLE `atleti`
  MODIFY `ID_atleta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `categorie`
--
ALTER TABLE `categorie`
  MODIFY `ID_categoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `gare`
--
ALTER TABLE `gare`
  MODIFY `ID_gara` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `squadre`
--
ALTER TABLE `squadre`
  MODIFY `ID_squadra` int(11) NOT NULL AUTO_INCREMENT;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `ammonizioni`
--
ALTER TABLE `ammonizioni`
  ADD CONSTRAINT `ammonizioni_ibfk_1` FOREIGN KEY (`ID_gara`) REFERENCES `gare` (`ID_gara`) ON DELETE CASCADE,
  ADD CONSTRAINT `ammonizioni_ibfk_2` FOREIGN KEY (`ID_atleta`) REFERENCES `atleti` (`ID_atleta`) ON DELETE CASCADE;

--
-- Limiti per la tabella `atleti_gare`
--
ALTER TABLE `atleti_gare`
  ADD CONSTRAINT `atleti_gare_ibfk_1` FOREIGN KEY (`ID_atleta`) REFERENCES `atleti` (`ID_atleta`) ON DELETE CASCADE,
  ADD CONSTRAINT `atleti_gare_ibfk_2` FOREIGN KEY (`ID_gara`) REFERENCES `gare` (`ID_gara`) ON DELETE CASCADE,
  ADD CONSTRAINT `atleti_gare_ibfk_3` FOREIGN KEY (`ID_categoria`) REFERENCES `categorie` (`ID_categoria`) ON DELETE CASCADE,
  ADD CONSTRAINT `atleti_gare_ibfk_4` FOREIGN KEY (`ID_squadra`) REFERENCES `squadre` (`ID_squadra`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

GRANT ALL PRIVILEGES ON *.* TO `Masti`@`%` IDENTIFIED BY PASSWORD '*27E7ED564667DA0CD0E66691D2D175F5A3F902B0' WITH GRANT OPTION;

GRANT ALL PRIVILEGES ON `fossilidb`.* TO `Masti`@`%`;