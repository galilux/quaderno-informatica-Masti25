CREATE DATABASE IF NOT EXISTS MarittimoDB;
USE MarittimoDB;

-- Tabella Navi
CREATE TABLE IF NOT EXISTS Navi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    nazionalita VARCHAR(100) NOT NULL
);

-- Tabella Porti
CREATE TABLE IF NOT EXISTS Porti (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    nazione VARCHAR(100) NOT NULL
);

-- Tabella Fornitori
CREATE TABLE IF NOT EXISTS Fornitori (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    indirizzo VARCHAR(255),
    telefono VARCHAR(50),
    email VARCHAR(100)
);

-- Tabella Clienti
CREATE TABLE IF NOT EXISTS Clienti (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    indirizzo VARCHAR(255),
    telefono VARCHAR(50),
    email VARCHAR(100)
);

-- Tabella Viaggi
CREATE TABLE IF NOT EXISTS Viaggi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    sigla VARCHAR(10) NOT NULL,
    data_partenza DATE NOT NULL,
    data_arrivo DATE NOT NULL,
    porto_partenza_id INT NOT NULL,
    porto_arrivo_id INT NOT NULL,
    capitano VARCHAR(255) NOT NULL,
    nave_id INT NOT NULL,
    FOREIGN KEY (porto_partenza_id) REFERENCES Porti(id),
    FOREIGN KEY (porto_arrivo_id) REFERENCES Porti(id),
    FOREIGN KEY (nave_id) REFERENCES Navi(id)
);

-- Tabella Polizze
CREATE TABLE IF NOT EXISTS Polizze (
    id INT AUTO_INCREMENT PRIMARY KEY,
    codice_identificativo VARCHAR(10) NOT NULL,
    tipo_merce VARCHAR(255) NOT NULL,
    tipo_colli VARCHAR(100) NOT NULL,
    numero_colli INT NOT NULL,
    peso_totale DECIMAL(10,2) NOT NULL,
    fornitore_id INT NOT NULL,
    cliente_id INT NOT NULL,
    viaggio_id INT NOT NULL,
    FOREIGN KEY (fornitore_id) REFERENCES Fornitori(id),
    FOREIGN KEY (cliente_id) REFERENCES Clienti(id),
    FOREIGN KEY (viaggio_id) REFERENCES Viaggi(id)
);
