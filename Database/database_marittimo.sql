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
-- Popolamento tabella Navi
INSERT INTO Navi (nome, nazionalita) VALUES
('MSC Seaview', 'Italia'),
('Queen Mary 2', 'Regno Unito'),
('Harmony of the Seas', 'USA');

-- Popolamento tabella Porti
INSERT INTO Porti (nome, nazione) VALUES
('Porto di Genova', 'Italia'),
('Porto di Rotterdam', 'Paesi Bassi'),
('Porto di Singapore', 'Singapore');

-- Popolamento tabella Fornitori
INSERT INTO Fornitori (nome, indirizzo, telefono, email) VALUES
('Global Shipping Ltd', 'Via Marittima 10, Genova', '0101234567', 'info@globalshipping.com'),
('Ocean Trade Corp', 'Havenstraat 5, Rotterdam', '003110987654', 'contact@oceantrade.nl'),
('Pacific Cargo Inc', 'Harbour Road 22, Singapore', '006562341234', 'sales@pacificcargo.sg');

-- Popolamento tabella Clienti
INSERT INTO Clienti (nome, indirizzo, telefono, email) VALUES
('Luxury Imports', 'Corso Italia 15, Milano', '0245678910', 'orders@luxuryimports.it'),
('Euro Distributors', 'Nieuwe Markt 8, Amsterdam', '003120998877', 'info@eurodist.com'),
('Asia Logistics', 'Business Park 99, Hong Kong', '008522349876', 'service@asialogistics.hk');

-- Popolamento tabella Viaggi
INSERT INTO Viaggi (sigla, data_partenza, data_arrivo, porto_partenza_id, porto_arrivo_id, capitano, nave_id) VALUES
('VJ202501', '2025-04-01', '2025-04-10', 1, 2, 'Cap. Marco Rossi', 1),
('VJ202502', '2025-05-05', '2025-05-15', 2, 3, 'Cap. John Smith', 2),
('VJ202503', '2025-06-10', '2025-06-20', 3, 1, 'Cap. Li Wei', 3);

-- Popolamento tabella Polizze
INSERT INTO Polizze (codice_identificativo, tipo_merce, tipo_colli, numero_colli, peso_totale, fornitore_id, cliente_id, viaggio_id) VALUES
('PZ1001', 'Elettronica', 'Container', 50, 25000.00, 1, 2, 1),
('PZ1002', 'Abbigliamento', 'Pallet', 200, 10000.00, 2, 3, 2),
('PZ1003', 'Macchinari', 'Casse di legno', 30, 50000.00, 3, 1, 3);
