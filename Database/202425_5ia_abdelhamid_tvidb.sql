CREATE DATABASE IF NOT EXISTS 202425_5ia_abdelhamid_TVIDB;
USE TVIDB;

-- Tabella Treni
CREATE TABLE IF NOT EXISTS Treni (
    numero_treno INT PRIMARY KEY,
    stazione_partenza VARCHAR(255) NOT NULL,
    orario_partenza TIME NOT NULL,
    stazione_arrivo VARCHAR(255) NOT NULL,
    orario_arrivo TIME NOT NULL
);

-- Tabella Corse
CREATE TABLE IF NOT EXISTS Corse (
    id INT AUTO_INCREMENT PRIMARY KEY,
    numero_treno INT,
    data DATE NOT NULL,
    FOREIGN KEY (numero_treno) REFERENCES Treni(numero_treno) ON DELETE CASCADE
);

-- Tabella Carrozze
CREATE TABLE IF NOT EXISTS Carrozze (
    codice_carrozza VARCHAR(10) PRIMARY KEY,
    classe ENUM('prima', 'seconda') NOT NULL,
    numero_posti INT NOT NULL
);

-- Tabella Treni_Carrozze (Associa treni a carrozze specifiche)
CREATE TABLE IF NOT EXISTS Treni_Carrozze (
    numero_treno INT,
    codice_carrozza VARCHAR(10),
    PRIMARY KEY (numero_treno, codice_carrozza),
    FOREIGN KEY (numero_treno) REFERENCES Treni(numero_treno) ON DELETE CASCADE,
    FOREIGN KEY (codice_carrozza) REFERENCES Carrozze(codice_carrozza) ON DELETE CASCADE
);

-- Tabella Agenzie
CREATE TABLE IF NOT EXISTS Agenzie (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
);

-- Tabella Clienti
CREATE TABLE IF NOT EXISTS Clienti (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    username VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL
);

-- Tabella Prenotazioni
CREATE TABLE IF NOT EXISTS Prenotazioni (
    id INT AUTO_INCREMENT PRIMARY KEY,
    codice_agenzia INT,
    codice_cliente INT,
    numero_treno INT,
    data DATE NOT NULL,
    codice_carrozza VARCHAR(10),
    numero_posto INT,
    stato ENUM('confermata', 'annullata') NOT NULL,
    FOREIGN KEY (codice_agenzia) REFERENCES Agenzie(id) ON DELETE SET NULL,
    FOREIGN KEY (codice_cliente) REFERENCES Clienti(id) ON DELETE SET NULL,
    FOREIGN KEY (numero_treno) REFERENCES Treni(numero_treno) ON DELETE CASCADE,
    FOREIGN KEY (codice_carrozza) REFERENCES Carrozze(codice_carrozza) ON DELETE SET NULL
);

-- Tabella Biglietti
CREATE TABLE IF NOT EXISTS Biglietti (
    id INT AUTO_INCREMENT PRIMARY KEY,
    codice_prenotazione INT,
    numero_biglietto INT NOT NULL,
    prezzo DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (codice_prenotazione) REFERENCES Prenotazioni(id) ON DELETE CASCADE
);
INSERT INTO Treni (numero_treno, stazione_partenza, orario_partenza, stazione_arrivo, orario_arrivo) 
VALUES
(101, 'Milano Centrale', '08:30:00', 'Roma Termini', '12:15:00'),
(202, 'Torino Porta Nuova', '09:15:00', 'Venezia Santa Lucia', '12:45:00'),
(303, 'Napoli Centrale', '07:45:00', 'Firenze Santa Maria Novella', '10:30:00'),
(404, 'Bologna Centrale', '10:00:00', 'Genova Piazza Principe', '12:20:00'),
(505, 'Verona Porta Nuova', '14:20:00', 'Trieste Centrale', '17:00:00'),
(606, 'Palermo Centrale', '06:30:00', 'Catania Centrale', '09:10:00'),
(707, 'Bari Centrale', '13:50:00', 'Lecce', '15:45:00');
