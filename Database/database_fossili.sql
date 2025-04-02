CREATE DATABASE IF NOT EXISTS FossiliDB;
USE FossiliDB;

-- Tabella Fossili
CREATE TABLE IF NOT EXISTS Fossili (
    id INT AUTO_INCREMENT PRIMARY KEY,
    specie VARCHAR(255) NOT NULL,
    dimensioni VARCHAR(100),
    peso DECIMAL(10,2),
    stato_conservazione ENUM('ottimo', 'buono', 'deteriorato', 'parziale') NOT NULL,
    valore_patrimoniale DECIMAL(15,2),
    data_ritrovamento DATE NOT NULL,
    localita_ritrovamento VARCHAR(255) NOT NULL,
    latitudine DECIMAL(10,6),
    longitudine DECIMAL(10,6),
    luogo_archiviazione VARCHAR(255)
);

-- Tabella Spedizioni
CREATE TABLE IF NOT EXISTS Spedizioni (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_gruppo VARCHAR(255) NOT NULL,
    responsabile VARCHAR(255) NOT NULL,
    data_inizio DATE NOT NULL,
    data_fine DATE,
    descrizione TEXT,
    numero_partecipanti INT NOT NULL
);

-- Tabella Sponsor
CREATE TABLE IF NOT EXISTS Sponsor (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    importo_donazione DECIMAL(15,2) NOT NULL
);

-- Tabella Relazione tra Fossili e Spedizioni
CREATE TABLE IF NOT EXISTS Fossili_Spedizioni (
    fossile_id INT,
    spedizione_id INT,
    PRIMARY KEY (fossile_id, spedizione_id),
    FOREIGN KEY (fossile_id) REFERENCES Fossili(id) ON DELETE CASCADE,
    FOREIGN KEY (spedizione_id) REFERENCES Spedizioni(id) ON DELETE CASCADE
);

-- Tabella Relazione tra Spedizioni e Sponsor
CREATE TABLE IF NOT EXISTS Spedizioni_Sponsor (
    spedizione_id INT,
    sponsor_id INT,
    PRIMARY KEY (spedizione_id, sponsor_id),
    FOREIGN KEY (spedizione_id) REFERENCES Spedizioni(id) ON DELETE CASCADE,
    FOREIGN KEY (sponsor_id) REFERENCES Sponsor(id) ON DELETE CASCADE
);
