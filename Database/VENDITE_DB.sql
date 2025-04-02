CREATE DATABASE IF NOT EXISTS VENDITE_DB;
USE VENDITE_DB;

-- Tabella città
CREATE TABLE IF NOT EXISTS citta (
    ID_citta INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    CAP VARCHAR(10) NOT NULL,
    regione VARCHAR(50) NOT NULL
);

-- Tabella clienti
CREATE TABLE IF NOT EXISTS clienti (
    ID_clienti INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    indirizzo VARCHAR(255) NOT NULL,
    cod_fiscale VARCHAR(16) UNIQUE,
    partita_iva VARCHAR(11) UNIQUE,
    id_citta INT NOT NULL,
    FOREIGN KEY (id_citta) REFERENCES citta(ID_citta)
);

-- Tabella categoria
CREATE TABLE IF NOT EXISTS categoria (
    ID_categoria INT AUTO_INCREMENT PRIMARY KEY,
    descrizione VARCHAR(100) NOT NULL
);

-- Tabella articoli
CREATE TABLE IF NOT EXISTS articoli (
    ID_articolo INT AUTO_INCREMENT PRIMARY KEY,
    descrizione VARCHAR(255) NOT NULL,
    prezzo_unitario DECIMAL(10,2) NOT NULL,
    id_categoria INT NOT NULL,
    FOREIGN KEY (id_categoria) REFERENCES categoria(ID_categoria)
);

-- Tabella fatture
CREATE TABLE IF NOT EXISTS fatture (
    ID_fatture INT AUTO_INCREMENT PRIMARY KEY,
    id_cliente INT NOT NULL,
    data DATE NOT NULL,
    num_fattura VARCHAR(20) UNIQUE NOT NULL,
    importo DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (id_cliente) REFERENCES clienti(ID_clienti)
);

-- Tabella dettagli
CREATE TABLE IF NOT EXISTS dettagli (
    ID_dettaglio INT AUTO_INCREMENT PRIMARY KEY,
    id_articolo INT NOT NULL,
    id_fattura INT NOT NULL,
    quantita INT NOT NULL,
    FOREIGN KEY (id_articolo) REFERENCES articoli(ID_articolo),
    FOREIGN KEY (id_fattura) REFERENCES fatture(ID_fatture)
);