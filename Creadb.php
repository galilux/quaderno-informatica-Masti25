<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabella Pitagorica</title>
</head>
<body>
  <h3>Premi il pulsante per installare nel tuo pc il Database scelto:</h3>
<form method="post">
    <button type="submit" class="back-button" name="tutto">Tutti i DB</button>
    <button type="submit" class="back-button" name="atletica">DB atletica</button>
    <button type="submit" class="back-button" name="banca">DB banca</button>
    <button type="submit" class="back-button" name="marittima">DB marittima</button>
    <button type="submit" class="back-button" name="multe">DB Multe</button>
    <button type="submit" class="back-button" name="treni">DB Treni</button>
    <button type="submit" class="back-button" name="vendite">DB Vendite</button>
    <button type="submit" class="back-button" name="fossili">DB Fossili</button> <br> <br>
    <a href="index.html" class="back-button">Torna indietro</a>
    <a href="index.html" class="back-button">Torna al Sommario</a>
</form>
</body>

</html>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f9;
            color: #333;
        }
        h1 {
            text-align: center;
            color: #2a3d66;
        }
        h2 {
            color: #4a6d8c;
        }
        h3 {
            color: #8c9ba8;
        }
        p {
            font-size: 16px;
            line-height: 1.6;
        }
        .section {
            margin-bottom: 30px;
        }
        .content-box {
            background-color: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .back-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #2a3d66;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
        }
        .back-button:hover {
            background-color: #4a6d8c;
        }
        .message {
    padding: 15px;
    margin: 20px auto;
    width: 60%;
    border-radius: 5px;
    text-align: center;
    font-weight: bold;
}
.success {
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}
.error {
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
}

    </style>
<?php
 if (isset($_POST['tutto'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }

    $sql = "-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 13, 2025 alle 23:31
-- Versione del server: 10.4.32-MariaDB
-- Versione PHP: 8.2.12



/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fossilidb`
--
CREATE database IF NOT EXISTS `202425_5ia_abdelhamid_fossilidb`;
USE `202425_5ia_abdelhamid_fossilidb`;
-- --------------------------------------------------------

--
-- Struttura della tabella `fossili`
--

CREATE TABLE `fossili` (
  `id` int(11) NOT NULL,
  `specie` varchar(255) NOT NULL,
  `dimensioni` varchar(100) DEFAULT NULL,
  `peso` decimal(10,2) DEFAULT NULL,
  `stato_conservazione` enum('ottimo','buono','deteriorato','parziale') NOT NULL,
  `valore_patrimoniale` decimal(15,2) DEFAULT NULL,
  `data_ritrovamento` date NOT NULL,
  `localita_ritrovamento` varchar(255) NOT NULL,
  `latitudine` decimal(10,6) DEFAULT NULL,
  `longitudine` decimal(10,6) DEFAULT NULL,
  `luogo_archiviazione` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `fossili`
--

INSERT INTO `fossili` (`id`, `specie`, `dimensioni`, `peso`, `stato_conservazione`, `valore_patrimoniale`, `data_ritrovamento`, `localita_ritrovamento`, `latitudine`, `longitudine`, `luogo_archiviazione`) VALUES
(1, 'Tyrannosaurus rex', '12m x 4m', 8500.00, 'ottimo', 2500000.00, '2021-07-15', 'Montana, USA', 47.123456, -110.987654, 'Museo di Storia Naturale, NY'),
(2, 'Triceratops horridus', '9m x 3m', 6000.50, 'buono', 1800000.00, '2020-05-22', 'Dakota del Sud, USA', 44.987654, -103.654321, 'Smithsonian Institution, Washington DC'),
(3, 'Velociraptor mongoliensis', '2m x 0.5m', 15.75, 'parziale', 350000.00, '2019-09-10', 'Deserto del Gobi, Mongolia', 43.876543, 104.234567, 'Museo di Ulaanbaatar, Mongolia'),
(4, 'Spinosaurus aegyptiacus', '14m x 5m', 7200.25, 'deteriorato', 950000.00, '2018-11-30', 'Bahariya, Egitto', 27.154321, 30.765432, 'Museo del Cairo, Egitto'),
(5, 'Stegosaurus stenops', '7m x 2.5m', 3000.00, 'buono', 1200000.00, '2022-03-14', 'Colorado, USA', 39.739236, -104.990251, 'Denver Museum of Nature & Science'),
(6, 'Pteranodon longiceps', '6m x 1.8m', 45.30, 'ottimo', 500000.00, '2021-12-05', 'Kansas, USA', 38.123456, -97.654321, 'American Museum of Natural History, NY'),
(7, 'Mosasaurus hoffmannii', '10m x 3m', 1500.00, 'parziale', 800000.00, '2017-06-18', 'Maastricht, Olanda', 50.848765, 5.687654, 'Naturalis Biodiversity Center, Olanda');

-- --------------------------------------------------------

--
-- Struttura della tabella `fossili_spedizioni`
--

CREATE TABLE `fossili_spedizioni` (
  `fossile_id` int(11) NOT NULL,
  `spedizione_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `spedizioni`
--

CREATE TABLE `spedizioni` (
  `id` int(11) NOT NULL,
  `nome_gruppo` varchar(255) NOT NULL,
  `responsabile` varchar(255) NOT NULL,
  `data_inizio` date NOT NULL,
  `data_fine` date DEFAULT NULL,
  `descrizione` text DEFAULT NULL,
  `numero_partecipanti` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `spedizioni_sponsor`
--

CREATE TABLE `spedizioni_sponsor` (
  `spedizione_id` int(11) NOT NULL,
  `sponsor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `sponsor`
--

CREATE TABLE `sponsor` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `importo_donazione` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `fossili`
--
ALTER TABLE `fossili`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `fossili_spedizioni`
--
ALTER TABLE `fossili_spedizioni`
  ADD PRIMARY KEY (`fossile_id`,`spedizione_id`),
  ADD KEY `spedizione_id` (`spedizione_id`);

--
-- Indici per le tabelle `spedizioni`
--
ALTER TABLE `spedizioni`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `spedizioni_sponsor`
--
ALTER TABLE `spedizioni_sponsor`
  ADD PRIMARY KEY (`spedizione_id`,`sponsor_id`),
  ADD KEY `sponsor_id` (`sponsor_id`);

--
-- Indici per le tabelle `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `fossili`
--
ALTER TABLE `fossili`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT per la tabella `spedizioni`
--
ALTER TABLE `spedizioni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `fossili_spedizioni`
--
ALTER TABLE `fossili_spedizioni`
  ADD CONSTRAINT `fossili_spedizioni_ibfk_1` FOREIGN KEY (`fossile_id`) REFERENCES `fossili` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fossili_spedizioni_ibfk_2` FOREIGN KEY (`spedizione_id`) REFERENCES `spedizioni` (`id`) ON DELETE CASCADE;

--
-- Limiti per la tabella `spedizioni_sponsor`
--
ALTER TABLE `spedizioni_sponsor`
  ADD CONSTRAINT `spedizioni_sponsor_ibfk_1` FOREIGN KEY (`spedizione_id`) REFERENCES `spedizioni` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `spedizioni_sponsor_ibfk_2` FOREIGN KEY (`sponsor_id`) REFERENCES `sponsor` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
GRANT ALL PRIVILEGES ON *.* TO `Masti`@`%` IDENTIFIED BY PASSWORD '*27E7ED564667DA0CD0E66691D2D175F5A3F902B0' WITH GRANT OPTION;

GRANT ALL PRIVILEGES ON `fossilidb`.* TO `Masti`@`%`;";









$conn->multi_query($sql);
$conn->close();
$conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }

$sql = "-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 13, 2025 alle 23:36
-- Versione del server: 10.4.32-MariaDB
-- Versione PHP: 8.2.12

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vendite_db`
--
CREATE database IF NOT EXISTS `202425_5ia_abdelhamid_vendite_db`;
USE `202425_5ia_abdelhamid_vendite_db`;
-- --------------------------------------------------------

--
-- Struttura della tabella `articoli`
--

CREATE TABLE `articoli` (
  `ID_articolo` int(11) NOT NULL,
  `descrizione` varchar(255) NOT NULL,
  `prezzo_unitario` decimal(10,2) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `categoria`
--

CREATE TABLE `categoria` (
  `ID_categoria` int(11) NOT NULL,
  `descrizione` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `citta`
--

CREATE TABLE `citta` (
  `ID_citta` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `CAP` varchar(10) NOT NULL,
  `regione` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `clienti`
--

CREATE TABLE `clienti` (
  `ID_clienti` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `indirizzo` varchar(255) NOT NULL,
  `cod_fiscale` varchar(16) DEFAULT NULL,
  `partita_iva` varchar(11) DEFAULT NULL,
  `id_citta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `dettagli`
--

CREATE TABLE `dettagli` (
  `ID_dettaglio` int(11) NOT NULL,
  `id_articolo` int(11) NOT NULL,
  `id_fattura` int(11) NOT NULL,
  `quantita` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `fatture`
--

CREATE TABLE `fatture` (
  `ID_fatture` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `data` date NOT NULL,
  `num_fattura` varchar(20) NOT NULL,
  `importo` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `articoli`
--
ALTER TABLE `articoli`
  ADD PRIMARY KEY (`ID_articolo`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indici per le tabelle `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`ID_categoria`);

--
-- Indici per le tabelle `citta`
--
ALTER TABLE `citta`
  ADD PRIMARY KEY (`ID_citta`);

--
-- Indici per le tabelle `clienti`
--
ALTER TABLE `clienti`
  ADD PRIMARY KEY (`ID_clienti`),
  ADD UNIQUE KEY `cod_fiscale` (`cod_fiscale`),
  ADD UNIQUE KEY `partita_iva` (`partita_iva`),
  ADD KEY `id_citta` (`id_citta`);

--
-- Indici per le tabelle `dettagli`
--
ALTER TABLE `dettagli`
  ADD PRIMARY KEY (`ID_dettaglio`),
  ADD KEY `id_articolo` (`id_articolo`),
  ADD KEY `id_fattura` (`id_fattura`);

--
-- Indici per le tabelle `fatture`
--
ALTER TABLE `fatture`
  ADD PRIMARY KEY (`ID_fatture`),
  ADD UNIQUE KEY `num_fattura` (`num_fattura`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `articoli`
--
ALTER TABLE `articoli`
  MODIFY `ID_articolo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `categoria`
--
ALTER TABLE `categoria`
  MODIFY `ID_categoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `citta`
--
ALTER TABLE `citta`
  MODIFY `ID_citta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `clienti`
--
ALTER TABLE `clienti`
  MODIFY `ID_clienti` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `dettagli`
--
ALTER TABLE `dettagli`
  MODIFY `ID_dettaglio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `fatture`
--
ALTER TABLE `fatture`
  MODIFY `ID_fatture` int(11) NOT NULL AUTO_INCREMENT;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `articoli`
--
ALTER TABLE `articoli`
  ADD CONSTRAINT `articoli_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`ID_categoria`);

--
-- Limiti per la tabella `clienti`
--
ALTER TABLE `clienti`
  ADD CONSTRAINT `clienti_ibfk_1` FOREIGN KEY (`id_citta`) REFERENCES `citta` (`ID_citta`);

--
-- Limiti per la tabella `dettagli`
--
ALTER TABLE `dettagli`
  ADD CONSTRAINT `dettagli_ibfk_1` FOREIGN KEY (`id_articolo`) REFERENCES `articoli` (`ID_articolo`),
  ADD CONSTRAINT `dettagli_ibfk_2` FOREIGN KEY (`id_fattura`) REFERENCES `fatture` (`ID_fatture`);

--
-- Limiti per la tabella `fatture`
--
ALTER TABLE `fatture`
  ADD CONSTRAINT `fatture_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clienti` (`ID_clienti`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
GRANT ALL PRIVILEGES ON *.* TO `Masti`@`%` IDENTIFIED BY PASSWORD '*27E7ED564667DA0CD0E66691D2D175F5A3F902B0' WITH GRANT OPTION;

GRANT ALL PRIVILEGES ON `fossilidb`.* TO `Masti`@`%`;";
$conn->multi_query($sql);

    $conn->close();
     $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }
$sql = "-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 13, 2025 alle 23:35
-- Versione del server: 10.4.32-MariaDB
-- Versione PHP: 8.2.12



/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tvidb`
--
CREATE database IF NOT EXISTS `202425_5ia_abdelhamid_tvidb`;
USE `202425_5ia_abdelhamid_tvidb`;
-- --------------------------------------------------------

--
-- Struttura della tabella `agenzie`
--

CREATE TABLE `agenzie` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `biglietti`
--

CREATE TABLE `biglietti` (
  `id` int(11) NOT NULL,
  `codice_prenotazione` int(11) DEFAULT NULL,
  `numero_biglietto` int(11) NOT NULL,
  `prezzo` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `carrozze`
--

CREATE TABLE `carrozze` (
  `codice_carrozza` varchar(10) NOT NULL,
  `classe` enum('prima','seconda') NOT NULL,
  `numero_posti` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `clienti`
--

CREATE TABLE `clienti` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `corse`
--

CREATE TABLE `corse` (
  `id` int(11) NOT NULL,
  `numero_treno` int(11) DEFAULT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `prenotazioni`
--

CREATE TABLE `prenotazioni` (
  `id` int(11) NOT NULL,
  `codice_agenzia` int(11) DEFAULT NULL,
  `codice_cliente` int(11) DEFAULT NULL,
  `numero_treno` int(11) DEFAULT NULL,
  `data` date NOT NULL,
  `codice_carrozza` varchar(10) DEFAULT NULL,
  `numero_posto` int(11) DEFAULT NULL,
  `stato` enum('confermata','annullata') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `treni`
--

CREATE TABLE `treni` (
  `numero_treno` int(11) NOT NULL,
  `stazione_partenza` varchar(255) NOT NULL,
  `orario_partenza` time NOT NULL,
  `stazione_arrivo` varchar(255) NOT NULL,
  `orario_arrivo` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `treni`
--

INSERT INTO `treni` (`numero_treno`, `stazione_partenza`, `orario_partenza`, `stazione_arrivo`, `orario_arrivo`) VALUES
(101, 'Milano Centrale', '08:30:00', 'Roma Termini', '12:15:00'),
(202, 'Torino Porta Nuova', '09:15:00', 'Venezia Santa Lucia', '12:45:00'),
(303, 'Napoli Centrale', '07:45:00', 'Firenze Santa Maria Novella', '10:30:00'),
(404, 'Bologna Centrale', '10:00:00', 'Genova Piazza Principe', '12:20:00'),
(505, 'Verona Porta Nuova', '14:20:00', 'Trieste Centrale', '17:00:00'),
(606, 'Palermo Centrale', '06:30:00', 'Catania Centrale', '09:10:00'),
(707, 'Bari Centrale', '13:50:00', 'Lecce', '15:45:00');

-- --------------------------------------------------------

--
-- Struttura della tabella `treni_carrozze`
--

CREATE TABLE `treni_carrozze` (
  `numero_treno` int(11) NOT NULL,
  `codice_carrozza` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `agenzie`
--
ALTER TABLE `agenzie`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `biglietti`
--
ALTER TABLE `biglietti`
  ADD PRIMARY KEY (`id`),
  ADD KEY `codice_prenotazione` (`codice_prenotazione`);

--
-- Indici per le tabelle `carrozze`
--
ALTER TABLE `carrozze`
  ADD PRIMARY KEY (`codice_carrozza`);

--
-- Indici per le tabelle `clienti`
--
ALTER TABLE `clienti`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indici per le tabelle `corse`
--
ALTER TABLE `corse`
  ADD PRIMARY KEY (`id`),
  ADD KEY `numero_treno` (`numero_treno`);

--
-- Indici per le tabelle `prenotazioni`
--
ALTER TABLE `prenotazioni`
  ADD PRIMARY KEY (`id`),
  ADD KEY `codice_agenzia` (`codice_agenzia`),
  ADD KEY `codice_cliente` (`codice_cliente`),
  ADD KEY `numero_treno` (`numero_treno`),
  ADD KEY `codice_carrozza` (`codice_carrozza`);

--
-- Indici per le tabelle `treni`
--
ALTER TABLE `treni`
  ADD PRIMARY KEY (`numero_treno`);

--
-- Indici per le tabelle `treni_carrozze`
--
ALTER TABLE `treni_carrozze`
  ADD PRIMARY KEY (`numero_treno`,`codice_carrozza`),
  ADD KEY `codice_carrozza` (`codice_carrozza`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `agenzie`
--
ALTER TABLE `agenzie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `biglietti`
--
ALTER TABLE `biglietti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `clienti`
--
ALTER TABLE `clienti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `corse`
--
ALTER TABLE `corse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `prenotazioni`
--
ALTER TABLE `prenotazioni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `biglietti`
--
ALTER TABLE `biglietti`
  ADD CONSTRAINT `biglietti_ibfk_1` FOREIGN KEY (`codice_prenotazione`) REFERENCES `prenotazioni` (`id`) ON DELETE CASCADE;

--
-- Limiti per la tabella `corse`
--
ALTER TABLE `corse`
  ADD CONSTRAINT `corse_ibfk_1` FOREIGN KEY (`numero_treno`) REFERENCES `treni` (`numero_treno`) ON DELETE CASCADE;

--
-- Limiti per la tabella `prenotazioni`
--
ALTER TABLE `prenotazioni`
  ADD CONSTRAINT `prenotazioni_ibfk_1` FOREIGN KEY (`codice_agenzia`) REFERENCES `agenzie` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `prenotazioni_ibfk_2` FOREIGN KEY (`codice_cliente`) REFERENCES `clienti` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `prenotazioni_ibfk_3` FOREIGN KEY (`numero_treno`) REFERENCES `treni` (`numero_treno`) ON DELETE CASCADE,
  ADD CONSTRAINT `prenotazioni_ibfk_4` FOREIGN KEY (`codice_carrozza`) REFERENCES `carrozze` (`codice_carrozza`) ON DELETE SET NULL;

--
-- Limiti per la tabella `treni_carrozze`
--
ALTER TABLE `treni_carrozze`
  ADD CONSTRAINT `treni_carrozze_ibfk_1` FOREIGN KEY (`numero_treno`) REFERENCES `treni` (`numero_treno`) ON DELETE CASCADE,
  ADD CONSTRAINT `treni_carrozze_ibfk_2` FOREIGN KEY (`codice_carrozza`) REFERENCES `carrozze` (`codice_carrozza`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
GRANT ALL PRIVILEGES ON *.* TO `Masti`@`%` IDENTIFIED BY PASSWORD '*27E7ED564667DA0CD0E66691D2D175F5A3F902B0' WITH GRANT OPTION;

GRANT ALL PRIVILEGES ON `fossilidb`.* TO `Masti`@`%`;";

$conn->multi_query($sql);

    $conn->close();
    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }
$sql = "-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 13, 2025 alle 23:28
-- Versione del server: 10.4.32-MariaDB
-- Versione PHP: 8.2.12



/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comunedb`
--
CREATE database IF NOT EXISTS `202425_5ia_abdelhamid_comunedb`;
USE `202425_5ia_abdelhamid_comunedb`;
-- --------------------------------------------------------

--
-- Struttura della tabella `agenti`
--

CREATE TABLE `agenti` (
  `matricola` int(11) NOT NULL,
  `nominativo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `agenti`
--

INSERT INTO `agenti` (`matricola`, `nominativo`) VALUES
(1001, 'Marco Bianchi'),
(1002, 'Luca Verdi'),
(1003, 'Anna Rossi');

-- --------------------------------------------------------

--
-- Struttura della tabella `auto`
--

CREATE TABLE `auto` (
  `targa` varchar(10) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `modello` varchar(255) NOT NULL,
  `proprietario_codice_fiscale` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `auto`
--

INSERT INTO `auto` (`targa`, `marca`, `modello`, `proprietario_codice_fiscale`) VALUES
('AB123CD', 'Fiat', 'Punto', 'RSSMRA80A01H501Z'),
('EF456GH', 'Volkswagen', 'Golf', 'BNCLGU75B12F205X'),
('IJ789KL', 'Renault', 'Clio', 'VRDFNC82C14H224K');

-- --------------------------------------------------------

--
-- Struttura della tabella `automobilisti`
--

CREATE TABLE `automobilisti` (
  `codice_fiscale` varchar(16) NOT NULL,
  `nominativo` varchar(255) NOT NULL,
  `indirizzo` varchar(255) NOT NULL,
  `città` varchar(255) NOT NULL,
  `cap` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `automobilisti`
--

INSERT INTO `automobilisti` (`codice_fiscale`, `nominativo`, `indirizzo`, `città`, `cap`) VALUES
('BNCLGU75B12F205X', 'Luigi Bianchi', 'Piazza Duomo 5', 'Roma', '00100'),
('RSSMRA80A01H501Z', 'Mario Rossi', 'Via Roma 10', 'Milano', '20121'),
('VRDFNC82C14H224K', 'Francesca Verdi', 'Corso Garibaldi 22', 'Napoli', '80121');

-- --------------------------------------------------------

--
-- Struttura della tabella `infrazioni`
--

CREATE TABLE `infrazioni` (
  `codice_infrazione` int(11) NOT NULL,
  `data` date NOT NULL,
  `matricola_agente` int(11) DEFAULT NULL,
  `denominazione` varchar(255) NOT NULL,
  `importo` decimal(10,2) NOT NULL,
  `targa_auto` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `infrazioni`
--

INSERT INTO `infrazioni` (`codice_infrazione`, `data`, `matricola_agente`, `denominazione`, `importo`, `targa_auto`) VALUES
(1, '2025-03-20', 1001, 'Eccesso di velocità', 150.00, 'AB123CD'),
(2, '2025-03-21', 1002, 'Divieto di sosta', 80.00, 'EF456GH'),
(3, '2025-03-22', 1003, 'Mancata revisione', 200.00, 'IJ789KL');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `agenti`
--
ALTER TABLE `agenti`
  ADD PRIMARY KEY (`matricola`);

--
-- Indici per le tabelle `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`targa`),
  ADD KEY `proprietario_codice_fiscale` (`proprietario_codice_fiscale`);

--
-- Indici per le tabelle `automobilisti`
--
ALTER TABLE `automobilisti`
  ADD PRIMARY KEY (`codice_fiscale`);

--
-- Indici per le tabelle `infrazioni`
--
ALTER TABLE `infrazioni`
  ADD PRIMARY KEY (`codice_infrazione`),
  ADD KEY `matricola_agente` (`matricola_agente`),
  ADD KEY `targa_auto` (`targa_auto`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `infrazioni`
--
ALTER TABLE `infrazioni`
  MODIFY `codice_infrazione` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `auto`
--
ALTER TABLE `auto`
  ADD CONSTRAINT `auto_ibfk_1` FOREIGN KEY (`proprietario_codice_fiscale`) REFERENCES `automobilisti` (`codice_fiscale`) ON DELETE CASCADE;

--
-- Limiti per la tabella `infrazioni`
--
ALTER TABLE `infrazioni`
  ADD CONSTRAINT `infrazioni_ibfk_1` FOREIGN KEY (`matricola_agente`) REFERENCES `agenti` (`matricola`) ON DELETE CASCADE,
  ADD CONSTRAINT `infrazioni_ibfk_2` FOREIGN KEY (`targa_auto`) REFERENCES `auto` (`targa`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
GRANT ALL PRIVILEGES ON *.* TO `Masti`@`%` IDENTIFIED BY PASSWORD '*27E7ED564667DA0CD0E66691D2D175F5A3F902B0' WITH GRANT OPTION;

GRANT ALL PRIVILEGES ON `fossilidb`.* TO `Masti`@`%`;";

$conn->multi_query($sql);

    $conn->close();
    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }
$sql = "-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 13, 2025 alle 23:24
-- Versione del server: 10.4.32-MariaDB
-- Versione PHP: 8.2.12



/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marittimodb`
--
CREATE database IF NOT EXISTS `202425_5ia_abdelhamid_marittimodb`;
USE `202425_5ia_abdelhamid_marittimodb`;

-- --------------------------------------------------------

--
-- Struttura della tabella `clienti`
--

CREATE TABLE `clienti` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `indirizzo` varchar(255) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `clienti`
--

INSERT INTO `clienti` (`id`, `nome`, `indirizzo`, `telefono`, `email`) VALUES
(1, 'Luxury Imports', 'Corso Italia 15, Milano', '0245678910', 'orders@luxuryimports.it'),
(2, 'Euro Distributors', 'Nieuwe Markt 8, Amsterdam', '003120998877', 'info@eurodist.com'),
(3, 'Asia Logistics', 'Business Park 99, Hong Kong', '008522349876', 'service@asialogistics.hk');

-- --------------------------------------------------------

--
-- Struttura della tabella `fornitori`
--

CREATE TABLE `fornitori` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `indirizzo` varchar(255) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `fornitori`
--

INSERT INTO `fornitori` (`id`, `nome`, `indirizzo`, `telefono`, `email`) VALUES
(1, 'Global Shipping Ltd', 'Via Marittima 10, Genova', '0101234567', 'info@globalshipping.com'),
(2, 'Ocean Trade Corp', 'Havenstraat 5, Rotterdam', '003110987654', 'contact@oceantrade.nl'),
(3, 'Pacific Cargo Inc', 'Harbour Road 22, Singapore', '006562341234', 'sales@pacificcargo.sg');

-- --------------------------------------------------------

--
-- Struttura della tabella `navi`
--

CREATE TABLE `navi` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `nazionalita` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `navi`
--

INSERT INTO `navi` (`id`, `nome`, `nazionalita`) VALUES
(1, 'MSC Seaview', 'Italia'),
(2, 'Queen Mary 2', 'Regno Unito'),
(3, 'Harmony of the Seas', 'USA');

-- --------------------------------------------------------

--
-- Struttura della tabella `polizze`
--

CREATE TABLE `polizze` (
  `id` int(11) NOT NULL,
  `codice_identificativo` varchar(10) NOT NULL,
  `tipo_merce` varchar(255) NOT NULL,
  `tipo_colli` varchar(100) NOT NULL,
  `numero_colli` int(11) NOT NULL,
  `peso_totale` decimal(10,2) NOT NULL,
  `fornitore_id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `viaggio_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `polizze`
--

INSERT INTO `polizze` (`id`, `codice_identificativo`, `tipo_merce`, `tipo_colli`, `numero_colli`, `peso_totale`, `fornitore_id`, `cliente_id`, `viaggio_id`) VALUES
(1, 'PZ1001', 'Elettronica', 'Container', 50, 25000.00, 1, 2, 1),
(2, 'PZ1002', 'Abbigliamento', 'Pallet', 200, 10000.00, 2, 3, 2),
(3, 'PZ1003', 'Macchinari', 'Casse di legno', 30, 50000.00, 3, 1, 3);

-- --------------------------------------------------------

--
-- Struttura della tabella `porti`
--

CREATE TABLE `porti` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `nazione` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `porti`
--

INSERT INTO `porti` (`id`, `nome`, `nazione`) VALUES
(1, 'Porto di Genova', 'Italia'),
(2, 'Porto di Rotterdam', 'Paesi Bassi'),
(3, 'Porto di Singapore', 'Singapore');

-- --------------------------------------------------------

--
-- Struttura della tabella `viaggi`
--

CREATE TABLE `viaggi` (
  `id` int(11) NOT NULL,
  `sigla` varchar(10) NOT NULL,
  `data_partenza` date NOT NULL,
  `data_arrivo` date NOT NULL,
  `porto_partenza_id` int(11) NOT NULL,
  `porto_arrivo_id` int(11) NOT NULL,
  `capitano` varchar(255) NOT NULL,
  `nave_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `viaggi`
--

INSERT INTO `viaggi` (`id`, `sigla`, `data_partenza`, `data_arrivo`, `porto_partenza_id`, `porto_arrivo_id`, `capitano`, `nave_id`) VALUES
(1, 'VJ202501', '2025-04-01', '2025-04-10', 1, 2, 'Cap. Marco Rossi', 1),
(2, 'VJ202502', '2025-05-05', '2025-05-15', 2, 3, 'Cap. John Smith', 2),
(3, 'VJ202503', '2025-06-10', '2025-06-20', 3, 1, 'Cap. Li Wei', 3);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `clienti`
--
ALTER TABLE `clienti`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `fornitori`
--
ALTER TABLE `fornitori`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `navi`
--
ALTER TABLE `navi`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `polizze`
--
ALTER TABLE `polizze`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fornitore_id` (`fornitore_id`),
  ADD KEY `cliente_id` (`cliente_id`),
  ADD KEY `viaggio_id` (`viaggio_id`);

--
-- Indici per le tabelle `porti`
--
ALTER TABLE `porti`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `viaggi`
--
ALTER TABLE `viaggi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `porto_partenza_id` (`porto_partenza_id`),
  ADD KEY `porto_arrivo_id` (`porto_arrivo_id`),
  ADD KEY `nave_id` (`nave_id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `clienti`
--
ALTER TABLE `clienti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `fornitori`
--
ALTER TABLE `fornitori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `navi`
--
ALTER TABLE `navi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `polizze`
--
ALTER TABLE `polizze`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `porti`
--
ALTER TABLE `porti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `viaggi`
--
ALTER TABLE `viaggi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `polizze`
--
ALTER TABLE `polizze`
  ADD CONSTRAINT `polizze_ibfk_1` FOREIGN KEY (`fornitore_id`) REFERENCES `fornitori` (`id`),
  ADD CONSTRAINT `polizze_ibfk_2` FOREIGN KEY (`cliente_id`) REFERENCES `clienti` (`id`),
  ADD CONSTRAINT `polizze_ibfk_3` FOREIGN KEY (`viaggio_id`) REFERENCES `viaggi` (`id`);

--
-- Limiti per la tabella `viaggi`
--
ALTER TABLE `viaggi`
  ADD CONSTRAINT `viaggi_ibfk_1` FOREIGN KEY (`porto_partenza_id`) REFERENCES `porti` (`id`),
  ADD CONSTRAINT `viaggi_ibfk_2` FOREIGN KEY (`porto_arrivo_id`) REFERENCES `porti` (`id`),
  ADD CONSTRAINT `viaggi_ibfk_3` FOREIGN KEY (`nave_id`) REFERENCES `navi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
GRANT ALL PRIVILEGES ON *.* TO `Masti`@`%` IDENTIFIED BY PASSWORD '*27E7ED564667DA0CD0E66691D2D175F5A3F902B0' WITH GRANT OPTION;

GRANT ALL PRIVILEGES ON `fossilidb`.* TO `Masti`@`%`;";

$conn->multi_query($sql);

    $conn->close();
    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }
$sql = "-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 13, 2025 alle 23:26
-- Versione del server: 10.4.32-MariaDB
-- Versione PHP: 8.2.12



/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bancadb`
--
CREATE database IF NOT EXISTS `202425_5ia_abdelhamid_bancadb`;
USE `202425_5ia_abdelhamid_bancadb`;
-- --------------------------------------------------------

--
-- Struttura della tabella `clienti`
--

CREATE TABLE `clienti` (
  `codice_fiscale` varchar(16) NOT NULL,
  `nominativo` varchar(255) NOT NULL,
  `indirizzo` varchar(255) NOT NULL,
  `città` varchar(255) NOT NULL,
  `numero_telefono` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `clienti`
--

INSERT INTO `clienti` (`codice_fiscale`, `nominativo`, `indirizzo`, `città`, `numero_telefono`) VALUES
('BNCLGU75B12F205X', 'Luigi Bianchi', 'Piazza Duomo 5', 'Roma', '3487654321'),
('RSSMRA80A01H501Z', 'Mario Rossi', 'Via Roma 10', 'Milano', '3456789012'),
('VRDFNC82C14H224K', 'Francesca Verdi', 'Corso Garibaldi 22', 'Napoli', '3471234567');

-- --------------------------------------------------------

--
-- Struttura della tabella `conticorrenti`
--

CREATE TABLE `conticorrenti` (
  `numero_conto` int(11) NOT NULL,
  `saldo` decimal(10,2) NOT NULL,
  `codice_filiale` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `conticorrenti`
--

INSERT INTO `conticorrenti` (`numero_conto`, `saldo`, `codice_filiale`) VALUES
(1001, 15000.00, 1),
(1002, 25000.50, 2),
(1003, 3200.75, 3);

-- --------------------------------------------------------

--
-- Struttura della tabella `filiali`
--

CREATE TABLE `filiali` (
  `codice` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `città` varchar(255) NOT NULL,
  `patrimonio_totale` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `filiali`
--

INSERT INTO `filiali` (`codice`, `nome`, `città`, `patrimonio_totale`) VALUES
(1, 'Banca Centrale Milano', 'Milano', 50000000.00),
(2, 'Banca Centrale Roma', 'Roma', 45000000.00),
(3, 'Banca Centrale Napoli', 'Napoli', 30000000.00);

-- --------------------------------------------------------

--
-- Struttura della tabella `intestatari`
--

CREATE TABLE `intestatari` (
  `codice_fiscale_cliente` varchar(16) NOT NULL,
  `numero_conto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `intestatari`
--

INSERT INTO `intestatari` (`codice_fiscale_cliente`, `numero_conto`) VALUES
('BNCLGU75B12F205X', 1002),
('RSSMRA80A01H501Z', 1001),
('VRDFNC82C14H224K', 1003);

-- --------------------------------------------------------

--
-- Struttura della tabella `intestatari_prestiti`
--

CREATE TABLE `intestatari_prestiti` (
  `codice_fiscale_cliente` varchar(16) NOT NULL,
  `codice_prestito` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `intestatari_prestiti`
--

INSERT INTO `intestatari_prestiti` (`codice_fiscale_cliente`, `codice_prestito`) VALUES
('BNCLGU75B12F205X', 2002),
('RSSMRA80A01H501Z', 2001),
('VRDFNC82C14H224K', 2003);

-- --------------------------------------------------------

--
-- Struttura della tabella `prestiti`
--

CREATE TABLE `prestiti` (
  `codice_prestito` int(11) NOT NULL,
  `ammontare` decimal(15,2) NOT NULL,
  `codice_filiale` int(11) DEFAULT NULL,
  `matricola_impiegato` int(11) NOT NULL,
  `data_apertura` date NOT NULL,
  `data_estinzione` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `prestiti`
--

INSERT INTO `prestiti` (`codice_prestito`, `ammontare`, `codice_filiale`, `matricola_impiegato`, `data_apertura`, `data_estinzione`) VALUES
(2001, 50000.00, 1, 123, '2024-01-10', '2030-01-10'),
(2002, 75000.00, 2, 124, '2023-06-15', '2029-06-15'),
(2003, 30000.00, 3, 125, '2025-03-20', '2031-03-20');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `clienti`
--
ALTER TABLE `clienti`
  ADD PRIMARY KEY (`codice_fiscale`);

--
-- Indici per le tabelle `conticorrenti`
--
ALTER TABLE `conticorrenti`
  ADD PRIMARY KEY (`numero_conto`),
  ADD KEY `codice_filiale` (`codice_filiale`);

--
-- Indici per le tabelle `filiali`
--
ALTER TABLE `filiali`
  ADD PRIMARY KEY (`codice`);

--
-- Indici per le tabelle `intestatari`
--
ALTER TABLE `intestatari`
  ADD PRIMARY KEY (`codice_fiscale_cliente`,`numero_conto`),
  ADD KEY `numero_conto` (`numero_conto`);

--
-- Indici per le tabelle `intestatari_prestiti`
--
ALTER TABLE `intestatari_prestiti`
  ADD PRIMARY KEY (`codice_fiscale_cliente`,`codice_prestito`),
  ADD KEY `codice_prestito` (`codice_prestito`);

--
-- Indici per le tabelle `prestiti`
--
ALTER TABLE `prestiti`
  ADD PRIMARY KEY (`codice_prestito`),
  ADD KEY `codice_filiale` (`codice_filiale`);

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `conticorrenti`
--
ALTER TABLE `conticorrenti`
  ADD CONSTRAINT `conticorrenti_ibfk_1` FOREIGN KEY (`codice_filiale`) REFERENCES `filiali` (`codice`) ON DELETE CASCADE;

--
-- Limiti per la tabella `intestatari`
--
ALTER TABLE `intestatari`
  ADD CONSTRAINT `intestatari_ibfk_1` FOREIGN KEY (`codice_fiscale_cliente`) REFERENCES `clienti` (`codice_fiscale`) ON DELETE CASCADE,
  ADD CONSTRAINT `intestatari_ibfk_2` FOREIGN KEY (`numero_conto`) REFERENCES `conticorrenti` (`numero_conto`) ON DELETE CASCADE;

--
-- Limiti per la tabella `intestatari_prestiti`
--
ALTER TABLE `intestatari_prestiti`
  ADD CONSTRAINT `intestatari_prestiti_ibfk_1` FOREIGN KEY (`codice_fiscale_cliente`) REFERENCES `clienti` (`codice_fiscale`) ON DELETE CASCADE,
  ADD CONSTRAINT `intestatari_prestiti_ibfk_2` FOREIGN KEY (`codice_prestito`) REFERENCES `prestiti` (`codice_prestito`) ON DELETE CASCADE;

--
-- Limiti per la tabella `prestiti`
--
ALTER TABLE `prestiti`
  ADD CONSTRAINT `prestiti_ibfk_1` FOREIGN KEY (`codice_filiale`) REFERENCES `filiali` (`codice`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
 GRANT ALL PRIVILEGES ON *.* TO `Masti`@`%` IDENTIFIED BY PASSWORD '*27E7ED564667DA0CD0E66691D2D175F5A3F902B0' WITH GRANT OPTION;

GRANT ALL PRIVILEGES ON `fossilidb`.* TO `Masti`@`%`;";

$conn->multi_query($sql);

    $conn->close();
     $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }
$sql = $sql = "-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 13, 2025 alle 23:20
-- Versione del server: 10.4.32-MariaDB
-- Versione PHP: 8.2.12




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

GRANT ALL PRIVILEGES ON `fossilidb`.* TO `Masti`@`%`;";

if ($conn->Multi_query($sql) === TRUE) {
            $message = " Tutti i Database sono stati creati con successo.";
            $messageType = "success";
        } else {
            $message = "Errore nella creazione del database: " . $conn->error;
            $messageType = "error";
        }
    $conn->close();
}




//fine tutto

//fine tutto

//fine tutto

//fine tutto

//fine tutto










else if (isset($_POST['atletica'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }

    $sql = "-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 13, 2025 alle 23:20
-- Versione del server: 10.4.32-MariaDB
-- Versione PHP: 8.2.12




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

GRANT ALL PRIVILEGES ON `fossilidb`.* TO `Masti`@`%`;";

if ($conn->Multi_query($sql) === TRUE) {
            $message = "Database 'Atletica' creato con successo.";
            $messageType = "success";
        } else {
            $message = "Errore nella creazione del database: " . $conn->error;
            $messageType = "error";
        }
    $conn->close();
}
else if (isset($_POST['banca'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }

    $sql = "-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 13, 2025 alle 23:26
-- Versione del server: 10.4.32-MariaDB
-- Versione PHP: 8.2.12



/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bancadb`
--
CREATE database IF NOT EXISTS `202425_5ia_abdelhamid_bancadb`;
USE `202425_5ia_abdelhamid_bancadb`;
-- --------------------------------------------------------

--
-- Struttura della tabella `clienti`
--

CREATE TABLE `clienti` (
  `codice_fiscale` varchar(16) NOT NULL,
  `nominativo` varchar(255) NOT NULL,
  `indirizzo` varchar(255) NOT NULL,
  `città` varchar(255) NOT NULL,
  `numero_telefono` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `clienti`
--

INSERT INTO `clienti` (`codice_fiscale`, `nominativo`, `indirizzo`, `città`, `numero_telefono`) VALUES
('BNCLGU75B12F205X', 'Luigi Bianchi', 'Piazza Duomo 5', 'Roma', '3487654321'),
('RSSMRA80A01H501Z', 'Mario Rossi', 'Via Roma 10', 'Milano', '3456789012'),
('VRDFNC82C14H224K', 'Francesca Verdi', 'Corso Garibaldi 22', 'Napoli', '3471234567');

-- --------------------------------------------------------

--
-- Struttura della tabella `conticorrenti`
--

CREATE TABLE `conticorrenti` (
  `numero_conto` int(11) NOT NULL,
  `saldo` decimal(10,2) NOT NULL,
  `codice_filiale` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `conticorrenti`
--

INSERT INTO `conticorrenti` (`numero_conto`, `saldo`, `codice_filiale`) VALUES
(1001, 15000.00, 1),
(1002, 25000.50, 2),
(1003, 3200.75, 3);

-- --------------------------------------------------------

--
-- Struttura della tabella `filiali`
--

CREATE TABLE `filiali` (
  `codice` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `città` varchar(255) NOT NULL,
  `patrimonio_totale` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `filiali`
--

INSERT INTO `filiali` (`codice`, `nome`, `città`, `patrimonio_totale`) VALUES
(1, 'Banca Centrale Milano', 'Milano', 50000000.00),
(2, 'Banca Centrale Roma', 'Roma', 45000000.00),
(3, 'Banca Centrale Napoli', 'Napoli', 30000000.00);

-- --------------------------------------------------------

--
-- Struttura della tabella `intestatari`
--

CREATE TABLE `intestatari` (
  `codice_fiscale_cliente` varchar(16) NOT NULL,
  `numero_conto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `intestatari`
--

INSERT INTO `intestatari` (`codice_fiscale_cliente`, `numero_conto`) VALUES
('BNCLGU75B12F205X', 1002),
('RSSMRA80A01H501Z', 1001),
('VRDFNC82C14H224K', 1003);

-- --------------------------------------------------------

--
-- Struttura della tabella `intestatari_prestiti`
--

CREATE TABLE `intestatari_prestiti` (
  `codice_fiscale_cliente` varchar(16) NOT NULL,
  `codice_prestito` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `intestatari_prestiti`
--

INSERT INTO `intestatari_prestiti` (`codice_fiscale_cliente`, `codice_prestito`) VALUES
('BNCLGU75B12F205X', 2002),
('RSSMRA80A01H501Z', 2001),
('VRDFNC82C14H224K', 2003);

-- --------------------------------------------------------

--
-- Struttura della tabella `prestiti`
--

CREATE TABLE `prestiti` (
  `codice_prestito` int(11) NOT NULL,
  `ammontare` decimal(15,2) NOT NULL,
  `codice_filiale` int(11) DEFAULT NULL,
  `matricola_impiegato` int(11) NOT NULL,
  `data_apertura` date NOT NULL,
  `data_estinzione` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `prestiti`
--

INSERT INTO `prestiti` (`codice_prestito`, `ammontare`, `codice_filiale`, `matricola_impiegato`, `data_apertura`, `data_estinzione`) VALUES
(2001, 50000.00, 1, 123, '2024-01-10', '2030-01-10'),
(2002, 75000.00, 2, 124, '2023-06-15', '2029-06-15'),
(2003, 30000.00, 3, 125, '2025-03-20', '2031-03-20');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `clienti`
--
ALTER TABLE `clienti`
  ADD PRIMARY KEY (`codice_fiscale`);

--
-- Indici per le tabelle `conticorrenti`
--
ALTER TABLE `conticorrenti`
  ADD PRIMARY KEY (`numero_conto`),
  ADD KEY `codice_filiale` (`codice_filiale`);

--
-- Indici per le tabelle `filiali`
--
ALTER TABLE `filiali`
  ADD PRIMARY KEY (`codice`);

--
-- Indici per le tabelle `intestatari`
--
ALTER TABLE `intestatari`
  ADD PRIMARY KEY (`codice_fiscale_cliente`,`numero_conto`),
  ADD KEY `numero_conto` (`numero_conto`);

--
-- Indici per le tabelle `intestatari_prestiti`
--
ALTER TABLE `intestatari_prestiti`
  ADD PRIMARY KEY (`codice_fiscale_cliente`,`codice_prestito`),
  ADD KEY `codice_prestito` (`codice_prestito`);

--
-- Indici per le tabelle `prestiti`
--
ALTER TABLE `prestiti`
  ADD PRIMARY KEY (`codice_prestito`),
  ADD KEY `codice_filiale` (`codice_filiale`);

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `conticorrenti`
--
ALTER TABLE `conticorrenti`
  ADD CONSTRAINT `conticorrenti_ibfk_1` FOREIGN KEY (`codice_filiale`) REFERENCES `filiali` (`codice`) ON DELETE CASCADE;

--
-- Limiti per la tabella `intestatari`
--
ALTER TABLE `intestatari`
  ADD CONSTRAINT `intestatari_ibfk_1` FOREIGN KEY (`codice_fiscale_cliente`) REFERENCES `clienti` (`codice_fiscale`) ON DELETE CASCADE,
  ADD CONSTRAINT `intestatari_ibfk_2` FOREIGN KEY (`numero_conto`) REFERENCES `conticorrenti` (`numero_conto`) ON DELETE CASCADE;

--
-- Limiti per la tabella `intestatari_prestiti`
--
ALTER TABLE `intestatari_prestiti`
  ADD CONSTRAINT `intestatari_prestiti_ibfk_1` FOREIGN KEY (`codice_fiscale_cliente`) REFERENCES `clienti` (`codice_fiscale`) ON DELETE CASCADE,
  ADD CONSTRAINT `intestatari_prestiti_ibfk_2` FOREIGN KEY (`codice_prestito`) REFERENCES `prestiti` (`codice_prestito`) ON DELETE CASCADE;

--
-- Limiti per la tabella `prestiti`
--
ALTER TABLE `prestiti`
  ADD CONSTRAINT `prestiti_ibfk_1` FOREIGN KEY (`codice_filiale`) REFERENCES `filiali` (`codice`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
 GRANT ALL PRIVILEGES ON *.* TO `Masti`@`%` IDENTIFIED BY PASSWORD '*27E7ED564667DA0CD0E66691D2D175F5A3F902B0' WITH GRANT OPTION;

GRANT ALL PRIVILEGES ON `fossilidb`.* TO `Masti`@`%`;";

if ($conn->Multi_query($sql) === TRUE) {
            $message = "Database 'Banca' creato con successo.";
            $messageType = "success";
        } else {
            $message = "Errore nella creazione del database: " . $conn->error;
            $messageType = "error";
        }
    $conn->close();
}
else if (isset($_POST['marittima'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }

    $sql = "-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 13, 2025 alle 23:24
-- Versione del server: 10.4.32-MariaDB
-- Versione PHP: 8.2.12



/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marittimodb`
--
CREATE database IF NOT EXISTS `202425_5ia_abdelhamid_marittimodb`;
USE `202425_5ia_abdelhamid_marittimodb`;

-- --------------------------------------------------------

--
-- Struttura della tabella `clienti`
--

CREATE TABLE `clienti` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `indirizzo` varchar(255) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `clienti`
--

INSERT INTO `clienti` (`id`, `nome`, `indirizzo`, `telefono`, `email`) VALUES
(1, 'Luxury Imports', 'Corso Italia 15, Milano', '0245678910', 'orders@luxuryimports.it'),
(2, 'Euro Distributors', 'Nieuwe Markt 8, Amsterdam', '003120998877', 'info@eurodist.com'),
(3, 'Asia Logistics', 'Business Park 99, Hong Kong', '008522349876', 'service@asialogistics.hk');

-- --------------------------------------------------------

--
-- Struttura della tabella `fornitori`
--

CREATE TABLE `fornitori` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `indirizzo` varchar(255) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `fornitori`
--

INSERT INTO `fornitori` (`id`, `nome`, `indirizzo`, `telefono`, `email`) VALUES
(1, 'Global Shipping Ltd', 'Via Marittima 10, Genova', '0101234567', 'info@globalshipping.com'),
(2, 'Ocean Trade Corp', 'Havenstraat 5, Rotterdam', '003110987654', 'contact@oceantrade.nl'),
(3, 'Pacific Cargo Inc', 'Harbour Road 22, Singapore', '006562341234', 'sales@pacificcargo.sg');

-- --------------------------------------------------------

--
-- Struttura della tabella `navi`
--

CREATE TABLE `navi` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `nazionalita` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `navi`
--

INSERT INTO `navi` (`id`, `nome`, `nazionalita`) VALUES
(1, 'MSC Seaview', 'Italia'),
(2, 'Queen Mary 2', 'Regno Unito'),
(3, 'Harmony of the Seas', 'USA');

-- --------------------------------------------------------

--
-- Struttura della tabella `polizze`
--

CREATE TABLE `polizze` (
  `id` int(11) NOT NULL,
  `codice_identificativo` varchar(10) NOT NULL,
  `tipo_merce` varchar(255) NOT NULL,
  `tipo_colli` varchar(100) NOT NULL,
  `numero_colli` int(11) NOT NULL,
  `peso_totale` decimal(10,2) NOT NULL,
  `fornitore_id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `viaggio_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `polizze`
--

INSERT INTO `polizze` (`id`, `codice_identificativo`, `tipo_merce`, `tipo_colli`, `numero_colli`, `peso_totale`, `fornitore_id`, `cliente_id`, `viaggio_id`) VALUES
(1, 'PZ1001', 'Elettronica', 'Container', 50, 25000.00, 1, 2, 1),
(2, 'PZ1002', 'Abbigliamento', 'Pallet', 200, 10000.00, 2, 3, 2),
(3, 'PZ1003', 'Macchinari', 'Casse di legno', 30, 50000.00, 3, 1, 3);

-- --------------------------------------------------------

--
-- Struttura della tabella `porti`
--

CREATE TABLE `porti` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `nazione` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `porti`
--

INSERT INTO `porti` (`id`, `nome`, `nazione`) VALUES
(1, 'Porto di Genova', 'Italia'),
(2, 'Porto di Rotterdam', 'Paesi Bassi'),
(3, 'Porto di Singapore', 'Singapore');

-- --------------------------------------------------------

--
-- Struttura della tabella `viaggi`
--

CREATE TABLE `viaggi` (
  `id` int(11) NOT NULL,
  `sigla` varchar(10) NOT NULL,
  `data_partenza` date NOT NULL,
  `data_arrivo` date NOT NULL,
  `porto_partenza_id` int(11) NOT NULL,
  `porto_arrivo_id` int(11) NOT NULL,
  `capitano` varchar(255) NOT NULL,
  `nave_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `viaggi`
--

INSERT INTO `viaggi` (`id`, `sigla`, `data_partenza`, `data_arrivo`, `porto_partenza_id`, `porto_arrivo_id`, `capitano`, `nave_id`) VALUES
(1, 'VJ202501', '2025-04-01', '2025-04-10', 1, 2, 'Cap. Marco Rossi', 1),
(2, 'VJ202502', '2025-05-05', '2025-05-15', 2, 3, 'Cap. John Smith', 2),
(3, 'VJ202503', '2025-06-10', '2025-06-20', 3, 1, 'Cap. Li Wei', 3);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `clienti`
--
ALTER TABLE `clienti`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `fornitori`
--
ALTER TABLE `fornitori`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `navi`
--
ALTER TABLE `navi`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `polizze`
--
ALTER TABLE `polizze`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fornitore_id` (`fornitore_id`),
  ADD KEY `cliente_id` (`cliente_id`),
  ADD KEY `viaggio_id` (`viaggio_id`);

--
-- Indici per le tabelle `porti`
--
ALTER TABLE `porti`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `viaggi`
--
ALTER TABLE `viaggi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `porto_partenza_id` (`porto_partenza_id`),
  ADD KEY `porto_arrivo_id` (`porto_arrivo_id`),
  ADD KEY `nave_id` (`nave_id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `clienti`
--
ALTER TABLE `clienti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `fornitori`
--
ALTER TABLE `fornitori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `navi`
--
ALTER TABLE `navi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `polizze`
--
ALTER TABLE `polizze`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `porti`
--
ALTER TABLE `porti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `viaggi`
--
ALTER TABLE `viaggi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `polizze`
--
ALTER TABLE `polizze`
  ADD CONSTRAINT `polizze_ibfk_1` FOREIGN KEY (`fornitore_id`) REFERENCES `fornitori` (`id`),
  ADD CONSTRAINT `polizze_ibfk_2` FOREIGN KEY (`cliente_id`) REFERENCES `clienti` (`id`),
  ADD CONSTRAINT `polizze_ibfk_3` FOREIGN KEY (`viaggio_id`) REFERENCES `viaggi` (`id`);

--
-- Limiti per la tabella `viaggi`
--
ALTER TABLE `viaggi`
  ADD CONSTRAINT `viaggi_ibfk_1` FOREIGN KEY (`porto_partenza_id`) REFERENCES `porti` (`id`),
  ADD CONSTRAINT `viaggi_ibfk_2` FOREIGN KEY (`porto_arrivo_id`) REFERENCES `porti` (`id`),
  ADD CONSTRAINT `viaggi_ibfk_3` FOREIGN KEY (`nave_id`) REFERENCES `navi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
GRANT ALL PRIVILEGES ON *.* TO `Masti`@`%` IDENTIFIED BY PASSWORD '*27E7ED564667DA0CD0E66691D2D175F5A3F902B0' WITH GRANT OPTION;

GRANT ALL PRIVILEGES ON `fossilidb`.* TO `Masti`@`%`;";

if ($conn->Multi_query($sql) === TRUE) {
            $message = "Database 'Marittima' creato con successo.";
            $messageType = "success";
        } else {
            $message = "Errore nella creazione del database: " . $conn->error;
            $messageType = "error";
        }
    $conn->close();
}
else if (isset($_POST['multe'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }

    $sql = "-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 13, 2025 alle 23:28
-- Versione del server: 10.4.32-MariaDB
-- Versione PHP: 8.2.12



/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comunedb`
--
CREATE database IF NOT EXISTS `202425_5ia_abdelhamid_comunedb`;
USE `202425_5ia_abdelhamid_comunedb`;
-- --------------------------------------------------------

--
-- Struttura della tabella `agenti`
--

CREATE TABLE `agenti` (
  `matricola` int(11) NOT NULL,
  `nominativo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `agenti`
--

INSERT INTO `agenti` (`matricola`, `nominativo`) VALUES
(1001, 'Marco Bianchi'),
(1002, 'Luca Verdi'),
(1003, 'Anna Rossi');

-- --------------------------------------------------------

--
-- Struttura della tabella `auto`
--

CREATE TABLE `auto` (
  `targa` varchar(10) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `modello` varchar(255) NOT NULL,
  `proprietario_codice_fiscale` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `auto`
--

INSERT INTO `auto` (`targa`, `marca`, `modello`, `proprietario_codice_fiscale`) VALUES
('AB123CD', 'Fiat', 'Punto', 'RSSMRA80A01H501Z'),
('EF456GH', 'Volkswagen', 'Golf', 'BNCLGU75B12F205X'),
('IJ789KL', 'Renault', 'Clio', 'VRDFNC82C14H224K');

-- --------------------------------------------------------

--
-- Struttura della tabella `automobilisti`
--

CREATE TABLE `automobilisti` (
  `codice_fiscale` varchar(16) NOT NULL,
  `nominativo` varchar(255) NOT NULL,
  `indirizzo` varchar(255) NOT NULL,
  `città` varchar(255) NOT NULL,
  `cap` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `automobilisti`
--

INSERT INTO `automobilisti` (`codice_fiscale`, `nominativo`, `indirizzo`, `città`, `cap`) VALUES
('BNCLGU75B12F205X', 'Luigi Bianchi', 'Piazza Duomo 5', 'Roma', '00100'),
('RSSMRA80A01H501Z', 'Mario Rossi', 'Via Roma 10', 'Milano', '20121'),
('VRDFNC82C14H224K', 'Francesca Verdi', 'Corso Garibaldi 22', 'Napoli', '80121');

-- --------------------------------------------------------

--
-- Struttura della tabella `infrazioni`
--

CREATE TABLE `infrazioni` (
  `codice_infrazione` int(11) NOT NULL,
  `data` date NOT NULL,
  `matricola_agente` int(11) DEFAULT NULL,
  `denominazione` varchar(255) NOT NULL,
  `importo` decimal(10,2) NOT NULL,
  `targa_auto` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `infrazioni`
--

INSERT INTO `infrazioni` (`codice_infrazione`, `data`, `matricola_agente`, `denominazione`, `importo`, `targa_auto`) VALUES
(1, '2025-03-20', 1001, 'Eccesso di velocità', 150.00, 'AB123CD'),
(2, '2025-03-21', 1002, 'Divieto di sosta', 80.00, 'EF456GH'),
(3, '2025-03-22', 1003, 'Mancata revisione', 200.00, 'IJ789KL');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `agenti`
--
ALTER TABLE `agenti`
  ADD PRIMARY KEY (`matricola`);

--
-- Indici per le tabelle `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`targa`),
  ADD KEY `proprietario_codice_fiscale` (`proprietario_codice_fiscale`);

--
-- Indici per le tabelle `automobilisti`
--
ALTER TABLE `automobilisti`
  ADD PRIMARY KEY (`codice_fiscale`);

--
-- Indici per le tabelle `infrazioni`
--
ALTER TABLE `infrazioni`
  ADD PRIMARY KEY (`codice_infrazione`),
  ADD KEY `matricola_agente` (`matricola_agente`),
  ADD KEY `targa_auto` (`targa_auto`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `infrazioni`
--
ALTER TABLE `infrazioni`
  MODIFY `codice_infrazione` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `auto`
--
ALTER TABLE `auto`
  ADD CONSTRAINT `auto_ibfk_1` FOREIGN KEY (`proprietario_codice_fiscale`) REFERENCES `automobilisti` (`codice_fiscale`) ON DELETE CASCADE;

--
-- Limiti per la tabella `infrazioni`
--
ALTER TABLE `infrazioni`
  ADD CONSTRAINT `infrazioni_ibfk_1` FOREIGN KEY (`matricola_agente`) REFERENCES `agenti` (`matricola`) ON DELETE CASCADE,
  ADD CONSTRAINT `infrazioni_ibfk_2` FOREIGN KEY (`targa_auto`) REFERENCES `auto` (`targa`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
GRANT ALL PRIVILEGES ON *.* TO `Masti`@`%` IDENTIFIED BY PASSWORD '*27E7ED564667DA0CD0E66691D2D175F5A3F902B0' WITH GRANT OPTION;

GRANT ALL PRIVILEGES ON `fossilidb`.* TO `Masti`@`%`;";

if ($conn->Multi_query($sql) === TRUE) {
            $message = "Database 'Multe' creato con successo.";
            $messageType = "success";
        } else {
            $message = "Errore nella creazione del database: " . $conn->error;
            $messageType = "error";
        }
    $conn->close();
}
else if (isset($_POST['treni'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }

    $sql = "-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 13, 2025 alle 23:35
-- Versione del server: 10.4.32-MariaDB
-- Versione PHP: 8.2.12



/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tvidb`
--
CREATE database IF NOT EXISTS `202425_5ia_abdelhamid_tvidb`;
USE `202425_5ia_abdelhamid_tvidb`;
-- --------------------------------------------------------

--
-- Struttura della tabella `agenzie`
--

CREATE TABLE `agenzie` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `biglietti`
--

CREATE TABLE `biglietti` (
  `id` int(11) NOT NULL,
  `codice_prenotazione` int(11) DEFAULT NULL,
  `numero_biglietto` int(11) NOT NULL,
  `prezzo` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `carrozze`
--

CREATE TABLE `carrozze` (
  `codice_carrozza` varchar(10) NOT NULL,
  `classe` enum('prima','seconda') NOT NULL,
  `numero_posti` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `clienti`
--

CREATE TABLE `clienti` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `corse`
--

CREATE TABLE `corse` (
  `id` int(11) NOT NULL,
  `numero_treno` int(11) DEFAULT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `prenotazioni`
--

CREATE TABLE `prenotazioni` (
  `id` int(11) NOT NULL,
  `codice_agenzia` int(11) DEFAULT NULL,
  `codice_cliente` int(11) DEFAULT NULL,
  `numero_treno` int(11) DEFAULT NULL,
  `data` date NOT NULL,
  `codice_carrozza` varchar(10) DEFAULT NULL,
  `numero_posto` int(11) DEFAULT NULL,
  `stato` enum('confermata','annullata') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `treni`
--

CREATE TABLE `treni` (
  `numero_treno` int(11) NOT NULL,
  `stazione_partenza` varchar(255) NOT NULL,
  `orario_partenza` time NOT NULL,
  `stazione_arrivo` varchar(255) NOT NULL,
  `orario_arrivo` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `treni`
--

INSERT INTO `treni` (`numero_treno`, `stazione_partenza`, `orario_partenza`, `stazione_arrivo`, `orario_arrivo`) VALUES
(101, 'Milano Centrale', '08:30:00', 'Roma Termini', '12:15:00'),
(202, 'Torino Porta Nuova', '09:15:00', 'Venezia Santa Lucia', '12:45:00'),
(303, 'Napoli Centrale', '07:45:00', 'Firenze Santa Maria Novella', '10:30:00'),
(404, 'Bologna Centrale', '10:00:00', 'Genova Piazza Principe', '12:20:00'),
(505, 'Verona Porta Nuova', '14:20:00', 'Trieste Centrale', '17:00:00'),
(606, 'Palermo Centrale', '06:30:00', 'Catania Centrale', '09:10:00'),
(707, 'Bari Centrale', '13:50:00', 'Lecce', '15:45:00');

-- --------------------------------------------------------

--
-- Struttura della tabella `treni_carrozze`
--

CREATE TABLE `treni_carrozze` (
  `numero_treno` int(11) NOT NULL,
  `codice_carrozza` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `agenzie`
--
ALTER TABLE `agenzie`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `biglietti`
--
ALTER TABLE `biglietti`
  ADD PRIMARY KEY (`id`),
  ADD KEY `codice_prenotazione` (`codice_prenotazione`);

--
-- Indici per le tabelle `carrozze`
--
ALTER TABLE `carrozze`
  ADD PRIMARY KEY (`codice_carrozza`);

--
-- Indici per le tabelle `clienti`
--
ALTER TABLE `clienti`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indici per le tabelle `corse`
--
ALTER TABLE `corse`
  ADD PRIMARY KEY (`id`),
  ADD KEY `numero_treno` (`numero_treno`);

--
-- Indici per le tabelle `prenotazioni`
--
ALTER TABLE `prenotazioni`
  ADD PRIMARY KEY (`id`),
  ADD KEY `codice_agenzia` (`codice_agenzia`),
  ADD KEY `codice_cliente` (`codice_cliente`),
  ADD KEY `numero_treno` (`numero_treno`),
  ADD KEY `codice_carrozza` (`codice_carrozza`);

--
-- Indici per le tabelle `treni`
--
ALTER TABLE `treni`
  ADD PRIMARY KEY (`numero_treno`);

--
-- Indici per le tabelle `treni_carrozze`
--
ALTER TABLE `treni_carrozze`
  ADD PRIMARY KEY (`numero_treno`,`codice_carrozza`),
  ADD KEY `codice_carrozza` (`codice_carrozza`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `agenzie`
--
ALTER TABLE `agenzie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `biglietti`
--
ALTER TABLE `biglietti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `clienti`
--
ALTER TABLE `clienti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `corse`
--
ALTER TABLE `corse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `prenotazioni`
--
ALTER TABLE `prenotazioni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `biglietti`
--
ALTER TABLE `biglietti`
  ADD CONSTRAINT `biglietti_ibfk_1` FOREIGN KEY (`codice_prenotazione`) REFERENCES `prenotazioni` (`id`) ON DELETE CASCADE;

--
-- Limiti per la tabella `corse`
--
ALTER TABLE `corse`
  ADD CONSTRAINT `corse_ibfk_1` FOREIGN KEY (`numero_treno`) REFERENCES `treni` (`numero_treno`) ON DELETE CASCADE;

--
-- Limiti per la tabella `prenotazioni`
--
ALTER TABLE `prenotazioni`
  ADD CONSTRAINT `prenotazioni_ibfk_1` FOREIGN KEY (`codice_agenzia`) REFERENCES `agenzie` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `prenotazioni_ibfk_2` FOREIGN KEY (`codice_cliente`) REFERENCES `clienti` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `prenotazioni_ibfk_3` FOREIGN KEY (`numero_treno`) REFERENCES `treni` (`numero_treno`) ON DELETE CASCADE,
  ADD CONSTRAINT `prenotazioni_ibfk_4` FOREIGN KEY (`codice_carrozza`) REFERENCES `carrozze` (`codice_carrozza`) ON DELETE SET NULL;

--
-- Limiti per la tabella `treni_carrozze`
--
ALTER TABLE `treni_carrozze`
  ADD CONSTRAINT `treni_carrozze_ibfk_1` FOREIGN KEY (`numero_treno`) REFERENCES `treni` (`numero_treno`) ON DELETE CASCADE,
  ADD CONSTRAINT `treni_carrozze_ibfk_2` FOREIGN KEY (`codice_carrozza`) REFERENCES `carrozze` (`codice_carrozza`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
GRANT ALL PRIVILEGES ON *.* TO `Masti`@`%` IDENTIFIED BY PASSWORD '*27E7ED564667DA0CD0E66691D2D175F5A3F902B0' WITH GRANT OPTION;

GRANT ALL PRIVILEGES ON `fossilidb`.* TO `Masti`@`%`;";

if ($conn->Multi_query($sql) === TRUE) {
            $message = "Database 'Treni' creato con successo.";
            $messageType = "success";
        } else {
            $message = "Errore nella creazione del database: " . $conn->error;
            $messageType = "error";
        }
    $conn->close();
}
else if (isset($_POST['vendite'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }

    $sql = "-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 13, 2025 alle 23:36
-- Versione del server: 10.4.32-MariaDB
-- Versione PHP: 8.2.12

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vendite_db`
--
CREATE database IF NOT EXISTS `202425_5ia_abdelhamid_vendite_db`;
USE `202425_5ia_abdelhamid_vendite_db`;
-- --------------------------------------------------------

--
-- Struttura della tabella `articoli`
--

CREATE TABLE `articoli` (
  `ID_articolo` int(11) NOT NULL,
  `descrizione` varchar(255) NOT NULL,
  `prezzo_unitario` decimal(10,2) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `categoria`
--

CREATE TABLE `categoria` (
  `ID_categoria` int(11) NOT NULL,
  `descrizione` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `citta`
--

CREATE TABLE `citta` (
  `ID_citta` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `CAP` varchar(10) NOT NULL,
  `regione` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `clienti`
--

CREATE TABLE `clienti` (
  `ID_clienti` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `indirizzo` varchar(255) NOT NULL,
  `cod_fiscale` varchar(16) DEFAULT NULL,
  `partita_iva` varchar(11) DEFAULT NULL,
  `id_citta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `dettagli`
--

CREATE TABLE `dettagli` (
  `ID_dettaglio` int(11) NOT NULL,
  `id_articolo` int(11) NOT NULL,
  `id_fattura` int(11) NOT NULL,
  `quantita` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `fatture`
--

CREATE TABLE `fatture` (
  `ID_fatture` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `data` date NOT NULL,
  `num_fattura` varchar(20) NOT NULL,
  `importo` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `articoli`
--
ALTER TABLE `articoli`
  ADD PRIMARY KEY (`ID_articolo`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indici per le tabelle `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`ID_categoria`);

--
-- Indici per le tabelle `citta`
--
ALTER TABLE `citta`
  ADD PRIMARY KEY (`ID_citta`);

--
-- Indici per le tabelle `clienti`
--
ALTER TABLE `clienti`
  ADD PRIMARY KEY (`ID_clienti`),
  ADD UNIQUE KEY `cod_fiscale` (`cod_fiscale`),
  ADD UNIQUE KEY `partita_iva` (`partita_iva`),
  ADD KEY `id_citta` (`id_citta`);

--
-- Indici per le tabelle `dettagli`
--
ALTER TABLE `dettagli`
  ADD PRIMARY KEY (`ID_dettaglio`),
  ADD KEY `id_articolo` (`id_articolo`),
  ADD KEY `id_fattura` (`id_fattura`);

--
-- Indici per le tabelle `fatture`
--
ALTER TABLE `fatture`
  ADD PRIMARY KEY (`ID_fatture`),
  ADD UNIQUE KEY `num_fattura` (`num_fattura`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `articoli`
--
ALTER TABLE `articoli`
  MODIFY `ID_articolo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `categoria`
--
ALTER TABLE `categoria`
  MODIFY `ID_categoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `citta`
--
ALTER TABLE `citta`
  MODIFY `ID_citta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `clienti`
--
ALTER TABLE `clienti`
  MODIFY `ID_clienti` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `dettagli`
--
ALTER TABLE `dettagli`
  MODIFY `ID_dettaglio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `fatture`
--
ALTER TABLE `fatture`
  MODIFY `ID_fatture` int(11) NOT NULL AUTO_INCREMENT;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `articoli`
--
ALTER TABLE `articoli`
  ADD CONSTRAINT `articoli_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`ID_categoria`);

--
-- Limiti per la tabella `clienti`
--
ALTER TABLE `clienti`
  ADD CONSTRAINT `clienti_ibfk_1` FOREIGN KEY (`id_citta`) REFERENCES `citta` (`ID_citta`);

--
-- Limiti per la tabella `dettagli`
--
ALTER TABLE `dettagli`
  ADD CONSTRAINT `dettagli_ibfk_1` FOREIGN KEY (`id_articolo`) REFERENCES `articoli` (`ID_articolo`),
  ADD CONSTRAINT `dettagli_ibfk_2` FOREIGN KEY (`id_fattura`) REFERENCES `fatture` (`ID_fatture`);

--
-- Limiti per la tabella `fatture`
--
ALTER TABLE `fatture`
  ADD CONSTRAINT `fatture_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clienti` (`ID_clienti`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
GRANT ALL PRIVILEGES ON *.* TO `Masti`@`%` IDENTIFIED BY PASSWORD '*27E7ED564667DA0CD0E66691D2D175F5A3F902B0' WITH GRANT OPTION;

GRANT ALL PRIVILEGES ON `fossilidb`.* TO `Masti`@`%`;";

if ($conn->Multi_query($sql) === TRUE) {
            $message = "Database 'Vendite' creato con successo.";
            $messageType = "success";
        } else {
            $message = "Errore nella creazione del database: " . $conn->error;
            $messageType = "error";
        }
    $conn->close();
}
else if (isset($_POST['fossili'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }

    $sql ="-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 13, 2025 alle 23:31
-- Versione del server: 10.4.32-MariaDB
-- Versione PHP: 8.2.12



/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fossilidb`
--
CREATE database IF NOT EXISTS `202425_5ia_abdelhamid_fossilidb`;
USE `202425_5ia_abdelhamid_fossilidb`;
-- --------------------------------------------------------

--
-- Struttura della tabella `fossili`
--

CREATE TABLE `fossili` (
  `id` int(11) NOT NULL,
  `specie` varchar(255) NOT NULL,
  `dimensioni` varchar(100) DEFAULT NULL,
  `peso` decimal(10,2) DEFAULT NULL,
  `stato_conservazione` enum('ottimo','buono','deteriorato','parziale') NOT NULL,
  `valore_patrimoniale` decimal(15,2) DEFAULT NULL,
  `data_ritrovamento` date NOT NULL,
  `localita_ritrovamento` varchar(255) NOT NULL,
  `latitudine` decimal(10,6) DEFAULT NULL,
  `longitudine` decimal(10,6) DEFAULT NULL,
  `luogo_archiviazione` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `fossili`
--

INSERT INTO `fossili` (`id`, `specie`, `dimensioni`, `peso`, `stato_conservazione`, `valore_patrimoniale`, `data_ritrovamento`, `localita_ritrovamento`, `latitudine`, `longitudine`, `luogo_archiviazione`) VALUES
(1, 'Tyrannosaurus rex', '12m x 4m', 8500.00, 'ottimo', 2500000.00, '2021-07-15', 'Montana, USA', 47.123456, -110.987654, 'Museo di Storia Naturale, NY'),
(2, 'Triceratops horridus', '9m x 3m', 6000.50, 'buono', 1800000.00, '2020-05-22', 'Dakota del Sud, USA', 44.987654, -103.654321, 'Smithsonian Institution, Washington DC'),
(3, 'Velociraptor mongoliensis', '2m x 0.5m', 15.75, 'parziale', 350000.00, '2019-09-10', 'Deserto del Gobi, Mongolia', 43.876543, 104.234567, 'Museo di Ulaanbaatar, Mongolia'),
(4, 'Spinosaurus aegyptiacus', '14m x 5m', 7200.25, 'deteriorato', 950000.00, '2018-11-30', 'Bahariya, Egitto', 27.154321, 30.765432, 'Museo del Cairo, Egitto'),
(5, 'Stegosaurus stenops', '7m x 2.5m', 3000.00, 'buono', 1200000.00, '2022-03-14', 'Colorado, USA', 39.739236, -104.990251, 'Denver Museum of Nature & Science'),
(6, 'Pteranodon longiceps', '6m x 1.8m', 45.30, 'ottimo', 500000.00, '2021-12-05', 'Kansas, USA', 38.123456, -97.654321, 'American Museum of Natural History, NY'),
(7, 'Mosasaurus hoffmannii', '10m x 3m', 1500.00, 'parziale', 800000.00, '2017-06-18', 'Maastricht, Olanda', 50.848765, 5.687654, 'Naturalis Biodiversity Center, Olanda');

-- --------------------------------------------------------

--
-- Struttura della tabella `fossili_spedizioni`
--

CREATE TABLE `fossili_spedizioni` (
  `fossile_id` int(11) NOT NULL,
  `spedizione_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `spedizioni`
--

CREATE TABLE `spedizioni` (
  `id` int(11) NOT NULL,
  `nome_gruppo` varchar(255) NOT NULL,
  `responsabile` varchar(255) NOT NULL,
  `data_inizio` date NOT NULL,
  `data_fine` date DEFAULT NULL,
  `descrizione` text DEFAULT NULL,
  `numero_partecipanti` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `spedizioni_sponsor`
--

CREATE TABLE `spedizioni_sponsor` (
  `spedizione_id` int(11) NOT NULL,
  `sponsor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `sponsor`
--

CREATE TABLE `sponsor` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `importo_donazione` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `fossili`
--
ALTER TABLE `fossili`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `fossili_spedizioni`
--
ALTER TABLE `fossili_spedizioni`
  ADD PRIMARY KEY (`fossile_id`,`spedizione_id`),
  ADD KEY `spedizione_id` (`spedizione_id`);

--
-- Indici per le tabelle `spedizioni`
--
ALTER TABLE `spedizioni`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `spedizioni_sponsor`
--
ALTER TABLE `spedizioni_sponsor`
  ADD PRIMARY KEY (`spedizione_id`,`sponsor_id`),
  ADD KEY `sponsor_id` (`sponsor_id`);

--
-- Indici per le tabelle `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `fossili`
--
ALTER TABLE `fossili`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT per la tabella `spedizioni`
--
ALTER TABLE `spedizioni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `fossili_spedizioni`
--
ALTER TABLE `fossili_spedizioni`
  ADD CONSTRAINT `fossili_spedizioni_ibfk_1` FOREIGN KEY (`fossile_id`) REFERENCES `fossili` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fossili_spedizioni_ibfk_2` FOREIGN KEY (`spedizione_id`) REFERENCES `spedizioni` (`id`) ON DELETE CASCADE;

--
-- Limiti per la tabella `spedizioni_sponsor`
--
ALTER TABLE `spedizioni_sponsor`
  ADD CONSTRAINT `spedizioni_sponsor_ibfk_1` FOREIGN KEY (`spedizione_id`) REFERENCES `spedizioni` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `spedizioni_sponsor_ibfk_2` FOREIGN KEY (`sponsor_id`) REFERENCES `sponsor` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
GRANT ALL PRIVILEGES ON *.* TO `Masti`@`%` IDENTIFIED BY PASSWORD '*27E7ED564667DA0CD0E66691D2D175F5A3F902B0' WITH GRANT OPTION;

GRANT ALL PRIVILEGES ON `fossilidb`.* TO `Masti`@`%`;" ;

 if ($conn->Multi_query($sql) === TRUE) {
            $message = "Database 'Fossili' creato con successo.";
            $messageType = "success";
        } else {
            $message = "Errore nella creazione del database: " . $conn->error;
            $messageType = "error";
        }
    $conn->close();
};
?>

<?php if (!empty($message)): ?>
    <div class="message <?php echo $messageType; ?>">
        <?php echo $message; ?>
    </div>
<?php endif; ?>
