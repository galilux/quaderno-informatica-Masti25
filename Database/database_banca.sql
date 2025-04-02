CREATE DATABASE IF NOT EXISTS BancaDB;
USE BancaDB;

-- Tabella Filiali
CREATE TABLE IF NOT EXISTS Filiali (
    codice INT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    città VARCHAR(255) NOT NULL,
    patrimonio_totale DECIMAL(15, 2) NOT NULL
);

-- Tabella Clienti
CREATE TABLE IF NOT EXISTS Clienti (
    codice_fiscale VARCHAR(16) PRIMARY KEY,
    nominativo VARCHAR(255) NOT NULL,
    indirizzo VARCHAR(255) NOT NULL,
    città VARCHAR(255) NOT NULL,
    numero_telefono VARCHAR(15)
);

-- Tabella Conti Correnti
CREATE TABLE IF NOT EXISTS ContiCorrenti (
    numero_conto INT PRIMARY KEY,
    saldo DECIMAL(10, 2) NOT NULL,
    codice_filiale INT,
    FOREIGN KEY (codice_filiale) REFERENCES Filiali(codice) ON DELETE CASCADE
);

-- Tabella Intestatari (relazione molti a molti tra Clienti e ContiCorrenti)
CREATE TABLE IF NOT EXISTS Intestatari (
    codice_fiscale_cliente VARCHAR(16),
    numero_conto INT,
    PRIMARY KEY (codice_fiscale_cliente, numero_conto),
    FOREIGN KEY (codice_fiscale_cliente) REFERENCES Clienti(codice_fiscale) ON DELETE CASCADE,
    FOREIGN KEY (numero_conto) REFERENCES ContiCorrenti(numero_conto) ON DELETE CASCADE
);

-- Tabella Prestiti
CREATE TABLE IF NOT EXISTS Prestiti (
    codice_prestito INT PRIMARY KEY,
    ammontare DECIMAL(15, 2) NOT NULL,
    codice_filiale INT,
    matricola_impiegato INT NOT NULL,
    data_apertura DATE NOT NULL,
    data_estinzione DATE NOT NULL,
    FOREIGN KEY (codice_filiale) REFERENCES Filiali(codice) ON DELETE CASCADE
);

-- Tabella Intestatari_Prestiti (relazione molti a molti tra Clienti e Prestiti)
CREATE TABLE IF NOT EXISTS Intestatari_Prestiti (
    codice_fiscale_cliente VARCHAR(16),
    codice_prestito INT,
    PRIMARY KEY (codice_fiscale_cliente, codice_prestito),
    FOREIGN KEY (codice_fiscale_cliente) REFERENCES Clienti(codice_fiscale) ON DELETE CASCADE,
    FOREIGN KEY (codice_prestito) REFERENCES Prestiti(codice_prestito) ON DELETE CASCADE
);
