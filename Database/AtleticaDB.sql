CREATE DATABASE IF NOT EXISTS AtleticaDB;
USE AtleticaDB;

-- Tabella Gare
CREATE TABLE IF NOT EXISTS Gare (
    ID_gara INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    citta VARCHAR(255) NOT NULL,
    data DATE NOT NULL
);

-- Tabella Atleti
CREATE TABLE IF NOT EXISTS Atleti (
    ID_atleta INT AUTO_INCREMENT PRIMARY KEY,
    cognome VARCHAR(255) NOT NULL,
    nome VARCHAR(255) NOT NULL,
    indirizzo VARCHAR(255),
    cod_tiscale VARCHAR(16) UNIQUE NOT NULL,
    data_nascita DATE NOT NULL,
    sesso ENUM('M', 'F') NOT NULL
);

-- Tabella Categorie
CREATE TABLE IF NOT EXISTS Categorie (
    ID_categoria INT AUTO_INCREMENT PRIMARY KEY,
    descrizione VARCHAR(255) NOT NULL
);

-- Tabella Squadre
CREATE TABLE IF NOT EXISTS Squadre (
    ID_squadra INT AUTO_INCREMENT PRIMARY KEY,
    descrizione VARCHAR(255) NOT NULL,
    citta VARCHAR(255) NOT NULL,
    nazione VARCHAR(255) NOT NULL
);

-- Tabella Ammonizioni
CREATE TABLE IF NOT EXISTS Ammonizioni (
    ID_ammonizione INT AUTO_INCREMENT PRIMARY KEY,
    ID_gara INT,
    ID_atleta INT,
    FOREIGN KEY (ID_gara) REFERENCES Gare(ID_gara) ON DELETE CASCADE,
    FOREIGN KEY (ID_atleta) REFERENCES Atleti(ID_atleta) ON DELETE CASCADE
);

-- Tabella Atleti_Gare (Associa atleti alle gare)
CREATE TABLE IF NOT EXISTS Atleti_Gare (
    ID_atleta INT,
    ID_gara INT,
    numero_pettorale INT NOT NULL,
    ID_categoria INT,
    ID_squadra INT,
    PRIMARY KEY (ID_atleta, ID_gara),
    FOREIGN KEY (ID_atleta) REFERENCES Atleti(ID_atleta) ON DELETE CASCADE,
    FOREIGN KEY (ID_gara) REFERENCES Gare(ID_gara) ON DELETE CASCADE,
    FOREIGN KEY (ID_categoria) REFERENCES Categorie(ID_categoria) ON DELETE CASCADE,
    FOREIGN KEY (ID_squadra) REFERENCES Squadre(ID_squadra) ON DELETE CASCADE
);
