<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quaderno Digitale - Database Multe</title>
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

    <h1 id="sommario">Quaderno Digitale - Analisi Database Multe</h1>

    <div class="section">
        <h2>Analisi dello Scenario</h2>
        <div class="content-box">
            <p>Un piccolo comune deve gestire i dati relativi alle multe per violazioni al Codice della strada. Le informazioni registrate includono:</p>
            <ul>
                <li><strong>Agenti</strong>: matricola e nominativo.</li>
                <li><strong>Infrazioni</strong>: codice infrazione, data, agente che l’ha rilevata, denominazione, importo e targa dell’auto multata.</li>
                <li><strong>Auto</strong>: targa, marca, modello e automobilista proprietario.</li>
                <li><strong>Automobilisti</strong>: codice fiscale, nominativo, indirizzo, città, CAP.</li>
            </ul>
        </div>
    </div>

    <div class="section">
        <h2>Entità</h2>
        <div class="content-box">
            <p>Le entità principali nel sistema sono:</p>
            <ul>
                <li><strong>Agenti</strong></li>
                <li><strong>Infrazioni</strong></li>
                <li><strong>Auto</strong></li>
                <li><strong>Automobilisti</strong></li>
            </ul>
        </div>
    </div>

    <div class="section">
        <h2>Modello E/R</h2>
        <div class="content-box">
            <p>Il modello entità-relazione descrive le connessioni tra le entità del sistema:</p>
            <ul>
                <li>Un <strong>Agente</strong> è identificato da una matricola e un nominativo.</li>
                <li>Un <strong>Infrazione</strong> è caratterizzata da un codice univoco, una data, una denominazione e un importo. È rilevata da un solo agente ed è associata a una specifica auto.</li>
                <li>Un <strong>Auto</strong> è identificata dalla targa e possiede informazioni su marca e modello. Ogni auto ha un unico proprietario.</li>
                <li>Un <strong>Automobilista</strong> è individuato tramite il codice fiscale e ha associati dati personali come nominativo e indirizzo.</li>
            </ul>
        </div>
    </div>

    <div class="section">
        <h2>Relazioni e Cardinalità</h2>
        <div class="content-box">
            <p>Le relazioni e le cardinalità tra le entità sono descritte come segue:</p>
            <ul>
                <li><strong>Agente - Infrazione</strong>: 1:N, un agente può rilevare più infrazioni, ma ogni infrazione è rilevata da un solo agente.</li>
                <li><strong>Auto - Infrazione</strong>: 1:N, un’auto può ricevere più multe, ma ogni multa è associata a una sola auto.</li>
                <li><strong>Automobilista - Auto</strong>: 1:N, un automobilista può possedere più auto, ma ogni auto ha un solo proprietario.</li>
            </ul>
        </div>
    </div>

    <div class="section">
        <h2>Modello Logico</h2>
        <div class="content-box">
            <p>Il modello logico traduce il modello E/R in tabelle relazionali. Ogni entità diventa una tabella, e le relazioni sono tradotte in chiavi primarie e chiavi esterne. Esempio:</p>
            <ul>
                <li><strong>Agente</strong>(Matricola (PK), Nominativo)</li>
                <li><strong>Infrazione</strong>(Codice_Infrazione (PK), Data, Matricola_Agente (FK) → Agente(Matricola), Denominazione, Importo, Targa_Auto (FK) → Auto(Targa))</li>
                <li><strong>Auto</strong>(Targa (PK), Marca, Modello, Codice_Fiscale_Proprietario (FK) → Automobilista(Codice_Fiscale))</li>
                <li><strong>Automobilista</strong>(Codice_Fiscale (PK), Nominativo, Indirizzo, Città, CAP)</li>
            </ul>
        </div>
    </div>
    <div>
        <h1>
    Test del database.
        </h1>
        <a href="Multa/index.php" class="back-button">Esercizio Multe </a></li>
    </div>
    <a href="index.html" class="back-button">Torna al Sommario</a>

</body>
</html>