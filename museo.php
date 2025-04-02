<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-16">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quaderno Digitale - Database Fossili</title>
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

    <h1 id="sommario">Quaderno Digitale - Analisi Database Fossili</h1>

    <div class="section">
        <h2>Analisi dello Scenario</h2>
        <div class="content-box">
            <p>Un istituto di ricerche paleontologiche desidera realizzare un database per censire i ritrovamenti fossili, sia animali che vegetali, su scala mondiale. I dati da registrare includono:</p>
            <ul>
                Un istituto di ricerche paleontologiche vuole realizzare un database per censire i ritrovamenti fossili su cui, eventualmente, organizzare anche mostre itineranti.
                Si vogliono catalogare tutti i reperti fossili, animali e vegetali, ritrovati a livello mondiale.
                Di ogni fossile si vuole conoscere la specie di appartenenza, le dimensioni, il peso, lo stato di conservazione (ottimo, buono, deteriorato, parziale) e il suo valore patrimoniale.
                È necessario altresì conoscere data e località di ritrovamento, comprese le esatte coordinate di localizzazione.
                Per i reperti già catalogati si vuole sapere in quale posto sono realmente archiviati (museo, università, enti privati, ecc.).
                Ogni reperto è stato ritrovato grazie al lavoro svolto da una spedizione tecnica di cui si vogliono mantenere il nome del gruppo e quello del responsabile, le date di inizio e fine, una descrizione e il numero di persone che ne facevano parte.
                Ogni spedizione, per sostenere i costi derivanti dal lungo tempo necessario a portare alla luce i reperti, è finanziata da uno o più sponsor che contribuisce a supportare con donazioni le varie attività.
            </ul>
        </div>
    </div>


    <div class="section">
        <h2>Entita</h2>
        <div class="content-box">
            <p>si identifica le entità</p>
            <ul>
                <li><strong>reperti</strong></li>
                <li><strong>specie</strong></li>
                <li><strong>depositi</strong></li>
                <li><strong>spedizioni</strong></li>
                <li><strong>sponsor</strong></li>
                <li><strong>mostre</strong></li>
            </ul>
        </div>
    </div>

    <div class="section">
        <h2>Modello E/R</h2>
        <div class="content-box">
            <p>Il modello entità-relazione (E/R) del sistema prevede le seguenti entità e relazioni:</p>
            <ul>
                <li><strong>specie</strong>: contiene attributi come dimensioni, peso, stato di conservazione e valore patrimoniale.</li>
                <li><strong>reperti</strong>: informazioni relativo a stato, peso, priorita.</li>
                <li><strong>depositi</strong>: luogo di conservazione del fossile (museo, università, ecc.).</li>
                <li><strong>spedizioni</strong>: contiene nome del gruppo, responsabile, date e numero di membri.</li>
                <li><strong>Sponsor</strong>: informazioni sugli sponsor finanziatori delle spedizioni.</li>
                <li><strong>mostre</strong>: informazioni relaziovo alle mostre, luogo tema.</li>
            </ul>
        </div>
        <img src="foto/ERmuseo.png" alt="">
    </div>

    <div class="section">
        <h2>Relazioni e Cardinalità</h2>
        <div class="content-box">
            <p>Le relazioni e le cardinalità tra le entità sono descritte come segue:</p>
            <ul>
                <li><strong>Sponsor - Spedizione</strong>:  M:N, in quanto uno sponsor può sovvenzionare più spedizioni e una spedizione può essere supportata da più di uno sponsor;</li>
                <li><strong>Spedizione - Reperto</strong>: 1:N, perché nell’ambito di una spedizione possono essere scoperti più reperti;</li>
                <li><strong>Specie - Reperto</strong>: 1:N, perché più reperti appartengono a un’unica specie;</li>
                <li><strong>Mostra - Reperto</strong>: M:N, in base al fatto che in una sigola mostra vengono esposti più reperti ma uno stesso reperto viene esposto nel tempo nell’ambito di mostre diverse;</li>
                <li><strong>Deposito - Reperto</strong>: 1:N, considerando il fatto che uno specifico deposito può contenere più reperti e che fisicamente ognuno di essi viene conservato in un unico deposito.
                </li>
            </ul>
        </div>
    </div>

    <div class="section">
        <h2>Modello Logico</h2>
        <div class="content-box">
            <p>Il modello logico traduce il modello E/R in tabelle relazionali. Ogni entità diventa una tabella, e le relazioni sono tradotte in chiavi primarie e chiavi esterne. Esempio:</p>
        <img src="foto/LogicoMuseo.png" alt="">
    </div>
    <div>
        <h1>
    Test del database.
        </h1>
        <a href="Museo/index.php" class="back-button">Esercizio Museo </a></li>
    </div>
    <a href="index.html" class="back-button">Torna al Sommario</a>
    

</body>
</html>
