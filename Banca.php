<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quaderno Digitale - Database Banca</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f9;
            color: #333;
        }
        h1 {
            text-align: center;
            color: #2a3d66;
        }
        h2 {
            color: #4a6d8c;
        }
        h3 {
            color: #8c9ba8;
        }
        p {
            font-size: 16px;
            line-height: 1.6;
        }
        .section {
            margin-bottom: 30px;
        }
        .content-box {
            background-color: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .back-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #2a3d66;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
        }
        .back-button:hover {
            background-color: #4a6d8c;
        }
    </style>
</head>
<body>

    <h1 id="sommario">Quaderno Digitale - Analisi Database Banca</h1>

    <div class="section">
        <h2>Analisi dello Scenario</h2>
        <div class="content-box">
            <p>La banca deve gestire i dati relativi alle filiali e ai conti correnti. Per ogni filiale, i dati da registrare includono:</p>
            <ul>
                <li><strong>Codice</strong>: Identificativo univoco della filiale.</li>
                <li><strong>Nome</strong>: Nome della filiale.</li>
                <li><strong>Città</strong>: La città in cui si trova la filiale.</li>
                <li><strong>Patrimonio Totale</strong>: Il patrimonio complessivo della filiale.</li>
            </ul>
            <p>Ogni filiale gestisce anche i conti correnti, che sono identificati dal numero di conto e dal saldo, e possono avere più intestatari (clienti).</p>
            <p>Inoltre, la banca concede dei prestiti ai clienti, ogni prestito è identificato da un codice, un ammontare, il codice della filiale che lo ha concesso e i dati dell’impiegato che l’ha stipulato.</p>
        </div>
    </div>

    <div class="section">
        <h2>Entità</h2>
        <div class="content-box">
            <p>Le entità principali nel sistema sono:</p>
            <ul>
                <li><strong>Filiale</strong></li>
                <li><strong>Cliente</strong></li>
                <li><strong>Conto Corrente</strong></li>
                <li><strong>Prestito</strong></li>
            </ul>
        </div>
    </div>

    <div class="section">
        <h2>Modello E/R</h2>
        <div class="content-box">
            <p>Il modello entità-relazione (E/R) del sistema prevede le seguenti entità e relazioni:</p>
            <ul>
                <li><strong>Filiale</strong>: contiene attributi come codice, nome, città, patrimonio totale.</li>
                <li><strong>Cliente</strong>: contiene codice fiscale, nominativo, indirizzo, città, numero di telefono.</li>
                <li><strong>Conto Corrente</strong>: ha un numero di conto, saldo e può essere intestato a più clienti.</li>
                <li><strong>Prestito</strong>: ha un codice identificativo, ammontare, data di apertura e scadenza.</li>
                <li><strong>Relazioni</strong>: le relazioni tra le entità includono l'associazione di clienti con conti correnti e prestiti, e la gestione dei conti correnti da parte delle filiali.</li>
            </ul>
        </div>
        <img src="foto/ERBanca.png" alt="Modello E/R Banca">
    </div>

    <div class="section">
        <h2>Relazioni e Cardinalità</h2>
        <div class="content-box">
            <p>Le relazioni e le cardinalità tra le entità sono descritte come segue:</p>
            <ul>
                <li><strong>Filiale - Conto Corrente</strong>: 1:N, una filiale ha molti conti correnti, ma ogni conto è associato a una sola filiale.</li>
                <li><strong>Cliente - Conto Corrente</strong>: N:M, un cliente può essere intestatario di più conti, e ogni conto può avere più clienti intestatari.</li>
                <li><strong>Filiale - Prestito</strong>: 1:N, una filiale può concedere molti prestiti, ma ogni prestito è concesso da una sola filiale.</li>
                <li><strong>Cliente - Prestito</strong>: N:M, un cliente può sottoscrivere più prestiti e un prestito può essere sottoscritto da più clienti.</li>
            </ul>
        </div>
    </div>

    <div class="section">
        <h2>Modello Logico</h2>
        <div class="content-box">
            <p>Il modello logico traduce il modello E/R in tabelle relazionali. Ogni entità diventa una tabella, e le relazioni sono tradotte in chiavi primarie e chiavi esterne. Esempio:</p>
            <ul>
                <li><strong>Filiale</strong>Codice_Filiale (PK), Nome, Città, Patrimonio_Totale.</li>
                <li><strong>Cliente</strong>Codice_Fiscale (PK), Nominativo, Indirizzo, Città, Telefono.</li>
                <li><strong>Conto Corrente</strong>Numero_Conto (PK), Saldo Codice_Filiale (FK) → Filiale(Codice_Filiale), Codice_Fiscale_Cliente (FK) → Cliente(Codice_Fiscale)</li>
                <li><strong>Prestito</strong>Codice_Prestito (PK), Ammontare Codice_Filiale (FK) → Filiale(Codice_Filiale), Matricola_Impiegato, Data_Apertura Data_Estinzione</li>
                <li><strong>Prestito_Cliente</strong>Codice_Prestito (FK) → Prestito(Codice_Prestito), Codice_Fiscale_Cliente (FK) → Cliente(Codice_Fiscale)</li>
                <li><strong>Conto_Cliente</strong>Numero_Conto (FK) → Conto Corrente(Numero_Conto), Codice_Fiscale_Cliente (FK) → Cliente(Codice_Fiscale)</li>
            </ul>
        </div>
    </div>
    <div>
        <h1>
    Test del database.
        </h1>
        <a href="Banca/index.php" class="back-button">Esercizio Banca </a></li>
    </div>
    <a href="index.html" class="back-button">Torna al Sommario</a>

</body>
</html>
