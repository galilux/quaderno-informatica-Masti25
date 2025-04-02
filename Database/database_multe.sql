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
