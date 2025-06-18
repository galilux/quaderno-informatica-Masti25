CREATE DATABASE IF NOT EXISTS 202425_5ia_abdelhamid_BancaDB;
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
-- Popolamento tabella Filiali
INSERT INTO Filiali (codice, nome, città, patrimonio_totale) VALUES
(1, 'Banca Centrale Milano', 'Milano', 50000000.00),
(2, 'Banca Centrale Roma', 'Roma', 45000000.00),
(3, 'Banca Centrale Napoli', 'Napoli', 30000000.00);

-- Popolamento tabella Clienti
INSERT INTO Clienti (codice_fiscale, nominativo, indirizzo, città, numero_telefono) VALUES
('RSSMRA80A01H501Z', 'Mario Rossi', 'Via Roma 10', 'Milano', '3456789012'),
('BNCLGU75B12F205X', 'Luigi Bianchi', 'Piazza Duomo 5', 'Roma', '3487654321'),
('VRDFNC82C14H224K', 'Francesca Verdi', 'Corso Garibaldi 22', 'Napoli', '3471234567');

-- Popolamento tabella Conti Correnti
INSERT INTO ContiCorrenti (numero_conto, saldo, codice_filiale) VALUES
(1001, 15000.00, 1),
(1002, 25000.50, 2),
(1003, 3200.75, 3);

-- Popolamento tabella Intestatari (Clienti-ContiCorrenti)
INSERT INTO Intestatari (codice_fiscale_cliente, numero_conto) VALUES
('RSSMRA80A01H501Z', 1001),
('BNCLGU75B12F205X', 1002),
('VRDFNC82C14H224K', 1003);

-- Popolamento tabella Prestiti
INSERT INTO Prestiti (codice_prestito, ammontare, codice_filiale, matricola_impiegato, data_apertura, data_estinzione) VALUES
(2001, 50000.00, 1, 123, '2024-01-10', '2030-01-10'),
(2002, 75000.00, 2, 124, '2023-06-15', '2029-06-15'),
(2003, 30000.00, 3, 125, '2025-03-20', '2031-03-20');

-- Popolamento tabella Intestatari_Prestiti (Clienti-Prestiti)
INSERT INTO Intestatari_Prestiti (codice_fiscale_cliente, codice_prestito) VALUES
('RSSMRA80A01H501Z', 2001),
('BNCLGU75B12F205X', 2002),
('VRDFNC82C14H224K', 2003);
