CREATE DATABASE IF NOT EXISTS ComuneDB;
USE ComuneDB;

-- Tabella Agenti
CREATE TABLE IF NOT EXISTS Agenti (
    matricola INT PRIMARY KEY,
    nominativo VARCHAR(255) NOT NULL
);

-- Tabella Automobilisti
CREATE TABLE IF NOT EXISTS Automobilisti (
    codice_fiscale VARCHAR(16) PRIMARY KEY,
    nominativo VARCHAR(255) NOT NULL,
    indirizzo VARCHAR(255) NOT NULL,
    città VARCHAR(255) NOT NULL,
    cap VARCHAR(5) NOT NULL
);

-- Tabella Auto
CREATE TABLE IF NOT EXISTS Auto (
    targa VARCHAR(10) PRIMARY KEY,
    marca VARCHAR(255) NOT NULL,
    modello VARCHAR(255) NOT NULL,
    proprietario_codice_fiscale VARCHAR(16),
    FOREIGN KEY (proprietario_codice_fiscale) REFERENCES Automobilisti(codice_fiscale) ON DELETE CASCADE
);

-- Tabella Infrazioni
CREATE TABLE IF NOT EXISTS Infrazioni (
    codice_infrazione INT PRIMARY KEY AUTO_INCREMENT,
    data DATE NOT NULL,
    matricola_agente INT,
    denominazione VARCHAR(255) NOT NULL,
    importo DECIMAL(10, 2) NOT NULL,
    targa_auto VARCHAR(10),
    FOREIGN KEY (matricola_agente) REFERENCES Agenti(matricola) ON DELETE CASCADE,
    FOREIGN KEY (targa_auto) REFERENCES Auto(targa) ON DELETE CASCADE
);
-- Popolamento tabella Agenti
INSERT INTO Agenti (matricola, nominativo) VALUES
(1001, 'Marco Bianchi'),
(1002, 'Luca Verdi'),
(1003, 'Anna Rossi');

-- Popolamento tabella Automobilisti
INSERT INTO Automobilisti (codice_fiscale, nominativo, indirizzo, città, cap) VALUES
('RSSMRA80A01H501Z', 'Mario Rossi', 'Via Roma 10', 'Milano', '20121'),
('BNCLGU75B12F205X', 'Luigi Bianchi', 'Piazza Duomo 5', 'Roma', '00100'),
('VRDFNC82C14H224K', 'Francesca Verdi', 'Corso Garibaldi 22', 'Napoli', '80121');

-- Popolamento tabella Auto
INSERT INTO Auto (targa, marca, modello, proprietario_codice_fiscale) VALUES
('AB123CD', 'Fiat', 'Punto', 'RSSMRA80A01H501Z'),
('EF456GH', 'Volkswagen', 'Golf', 'BNCLGU75B12F205X'),
('IJ789KL', 'Renault', 'Clio', 'VRDFNC82C14H224K');

-- Popolamento tabella Infrazioni
INSERT INTO Infrazioni (data, matricola_agente, denominazione, importo, targa_auto) VALUES
('2025-03-20', 1001, 'Eccesso di velocità', 150.00, 'AB123CD'),
('2025-03-21', 1002, 'Divieto di sosta', 80.00, 'EF456GH'),
('2025-03-22', 1003, 'Mancata revisione', 200.00, 'IJ789KL');
