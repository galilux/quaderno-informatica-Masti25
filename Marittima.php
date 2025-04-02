<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quaderno Digitale - Database Agenzia Marittima</title>
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

    <h1 id="sommario">Quaderno Digitale - Analisi Database Agenzia Marittima</h1>

    <div class="section">
        <h2>Analisi dello Scenario</h2>
        <div class="content-box">
            <p>L'agenzia marittima gestisce il traffico di merci forestali provenienti da tutto il mondo verso l'Europa. I dati da registrare includono:</p>
            <ul>
                <li><strong>Navi</strong>: ogni nave ha un nome e una nazionalità (bandiera);</li>
                <li><strong>Viaggi</strong>: ogni viaggio è identificato da una sigla, data di partenza, porto di partenza e di arrivo, e nome del capitano;</li>
                <li><strong>Porti</strong>: informazioni sui porti di partenza e arrivo, comprese nazione, nome, e altre informazioni logistiche;</li>
                <li><strong>Polizze di carico</strong>: ogni polizza ha un codice identificativo, tipo di merce, colli e peso totale;</li>
                <li><strong>Fornitori e Clienti</strong>: entrambi hanno informazioni anagrafiche per ogni polizza di carico.</li>
            </ul>
        </div>
    </div>

    <div class="section">
        <h2>Entità</h2>
        <div class="content-box">
            <p>Le entità principali del sistema sono le seguenti:</p>
            <ul>
                <li><strong>Navi</strong></li>
                <li><strong>Viaggi</strong></li>
                <li><strong>Porti</strong></li>
                <li><strong>Polizze di carico</strong></li>
                <li><strong>Fornitori</strong></li>
                <li><strong>Clienti</strong></li>
            </ul>
        </div>
    </div>

    <div class="section">
        <h2>Modello E/R</h2>
        <div class="content-box">
            <p>Il modello entità-relazione (E/R) del sistema include le seguenti entità e relazioni:</p>
            <ul>
                <li><strong>Navi</strong>: nome, nazionalità;</li>
                <li><strong>Viaggi</strong>: sigla viaggio, data di partenza, porto di partenza, porto di arrivo, capitano;</li>
                <li><strong>Porti</strong>: nome, nazione;</li>
                <li><strong>Polizze di carico</strong>: codice, tipo di merce, colli, peso totale;</li>
                <li><strong>Fornitori e Clienti</strong>: informazioni anagrafiche;</li>
            </ul>
        </div>
    </div>

    <div class="section">
        <h2>Relazioni e Cardinalità</h2>
        <div class="content-box">
            <p>Le relazioni e le cardinalità tra le entità sono le seguenti:</p>
            <ul>
                <li><strong>Nave - Viaggio</strong>: 1:N, una nave può effettuare più viaggi;</li>
                <li><strong>Viaggio - Polizza di carico</strong>: 1:N, un viaggio può essere associato a più polizze di carico;</li>
                <li><strong>Polizza di carico - Fornitore</strong>: 1:N, una polizza può essere associata a più fornitori;</li>
                <li><strong>Polizza di carico - Cliente</strong>: 1:N, una polizza può essere associata a più clienti;</li>
                <li><strong>Porto - Viaggio</strong>: 1:N, un porto può essere sia di partenza che di arrivo per più viaggi;</li>
            </ul>
        </div>
    </div>

    <div class="section">
        <h2>Modello Logico</h2>
        <div class="content-box">
            <p>Il modello logico traduce il modello E/R in tabelle relazionali. Esempio:</p>
            <ul>
                <li><strong>Tabelle principali:</strong> Navi, Viaggi, Porti, Polizze, Fornitori, Clienti;</li>
                <li><strong>Relazioni:</strong> Viaggio -> Polizza di carico, Porto -> Viaggio, Polizza -> Fornitore, Polizza -> Cliente;</li>
            </ul>
        </div>
    </div>

    <div>
        <h1>
            Test del database.
        </h1>
        <a href="AgenziaMarittima/index.php" class="back-button">Esercizio Agenzia Marittima </a>
    </div>
    <a href="index.html" class="back-button">Torna al Sommario</a>

</body>
</html>
