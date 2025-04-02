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
INSERT INTO Fossili (specie, dimensioni, peso, stato_conservazione, valore_patrimoniale, data_ritrovamento, localita_ritrovamento, latitudine, longitudine, luogo_archiviazione) 
VALUES
('Tyrannosaurus rex', '12m x 4m', 8500.00, 'ottimo', 2500000.00, '2021-07-15', 'Montana, USA', 47.123456, -110.987654, 'Museo di Storia Naturale, NY'),
('Triceratops horridus', '9m x 3m', 6000.50, 'buono', 1800000.00, '2020-05-22', 'Dakota del Sud, USA', 44.987654, -103.654321, 'Smithsonian Institution, Washington DC'),
('Velociraptor mongoliensis', '2m x 0.5m', 15.75, 'parziale', 350000.00, '2019-09-10', 'Deserto del Gobi, Mongolia', 43.876543, 104.234567, 'Museo di Ulaanbaatar, Mongolia'),
('Spinosaurus aegyptiacus', '14m x 5m', 7200.25, 'deteriorato', 950000.00, '2018-11-30', 'Bahariya, Egitto', 27.154321, 30.765432, 'Museo del Cairo, Egitto'),
('Stegosaurus stenops', '7m x 2.5m', 3000.00, 'buono', 1200000.00, '2022-03-14', 'Colorado, USA', 39.739236, -104.990251, 'Denver Museum of Nature & Science'),
('Pteranodon longiceps', '6m x 1.8m', 45.30, 'ottimo', 500000.00, '2021-12-05', 'Kansas, USA', 38.123456, -97.654321, 'American Museum of Natural History, NY'),
('Mosasaurus hoffmannii', '10m x 3m', 1500.00, 'parziale', 800000.00, '2017-06-18', 'Maastricht, Olanda', 50.848765, 5.687654, 'Naturalis Biodiversity Center, Olanda');
