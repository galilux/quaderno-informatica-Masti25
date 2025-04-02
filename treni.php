<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quaderno Digitale - Database TVI</title>
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

    <h1 id="sommario">Quaderno Digitale - Analisi Database TVI</h1>

    <div class="section">
        <h2>Analisi dello Scenario</h2>
        <div class="content-box">
            <p>La società TVI (Treni Veloci Italiani) gestisce i collegamenti ferroviari ad alta velocità tra diverse città italiane. I dati da registrare includono:</p>
            <ul>
            La società TVI (Treni Veloci Italiani) deve gestire l’esercizio di collegamenti ferroviari ad alta velocità tra alcune delle maggiori città italiane. Un treno della società TVI è caratterizzato da un numero di treno (il numero è lo stesso per le corse che si ripetono in date di partenza diverse), da una stazione di partenza e dal relativo orario di partenza, da una stazione di arrivo e dal relativo orario di arrivo; non sono effettuate fermate intermedie.
 
 Ogni treno ha sempre la stessa composizione in termini di carrozze di prima e seconda classe, ciascuna avente un proprio codice e uno specifico numero di posti (per semplicità si suppone che per un treno vengano utilizzate sempre le stesse carrozze fisiche, una carrozza però può essere utilizzata per comporre, in momenti differenti, treni diversi).
 Il costo del biglietto dipende esclusivamente dalla classe (prima o seconda) e dalla tratta percorsa, cioè dalla stazione di partenza e da quella di arrivo; una prenotazione è identificata da un codice univoco ed è sempre relativa a un particolare posto di una specifica carrozza di una corsa di un treno per la tratta percorsa e può essere effettuata da un’agenzia per un cliente occasionale o da un cliente registrato (agenzie e clienti hanno un proprio codice identificativo) che la effettua direttamente mediante un servizio accessibile tramite un sito web cui accede mediante username e password; in questa modalità la prenotazione viene confermata mediante un’e-mail inviata all’indirizzo del cliente.
 Dovendo fornire alle proprie agenzie concessionarie e agli utenti registrati la possibilità di acquistare biglietti – identificati da un numero progressivo e sempre relativi a una prenotazione specifica, eventualmente modificabile – il responsabile dei sistemi informativi della società TVI commissiona la progettazione del database di supporto al servizio di prenotazione dei posti e di emissione dei biglietti.
 <br>
 1. Per esempio il treno 777 con partenza da Roma Termini alle ore 8.00 e arrivo a Milano Centrale alle ore 12.00 ha corse che si ripetono il 14.08.2022, il 16.08.2022, il 17.08.2022, il 19.08.2022, ecc.
 
            </ul>
        </div>
    </div>
    <div class="section">
        <h2>Entità</h2>
        <div class="content-box">
            <p>Si identifica le entità</p>
            <ul>
                <li><strong>treni</strong></li>
                <li><strong>carrozze</strong></li>
                <li><strong>corse</strong></li>
                <li><strong>stazioni</strong></li>
                <li><strong>tratte</strong></li>
                <li><strong>biglietti</strong></li>
                <li><strong>prenotazioni</strong></li>
                <li><strong>agenzie</strong></li>
                <li><strong>clienti</strong></li>
            </ul>
        </div>
    </div>

    <div class="section">
        <h2>Modello E/R</h2>
        <div class="content-box">
            <p>Il modello entità-relazione (E/R) del sistema prevede le seguenti entità e relazioni:</p>
            <ul>
                <li><strong>Treni</strong>: contiene attributi come numero di treno, stazione di partenza, orario di partenza, stazione di arrivo, orario di arrivo.</li>
                <li><strong>Carrozze</strong>: identifica la carrozza con codice e numero di posti disponibili.</li>
                <li><strong>corse</strong>: data,ora,partenza del treno.</li>
                <li><strong>stazioni</strong>: la tratta percorsa da un treno, definita dalla stazione di partenza e arrivo.</li>
                <li><strong>tratte</strong>: la tratta percorsa da un treno</li>
                <li><strong>Prenotazione</strong>: include codice prenotazione, cliente, agenzia, e posto prenotato.</li>
                <li><strong>Biglietti</strong>: associato alla prenotazione, con un numero progressivo.</li>
                <li><strong>Cliente</strong>: dati sul cliente che effettua la prenotazione.</li>
                <li><strong>Agenzia</strong>: dati sull'agenzia che effettua la prenotazione.</li>
            </ul>
        </div>
        <img src="foto/ERtreni.png" alt="">
    </div>

    <div class="section">
        <h2>Relazioni e Cardinalità</h2>
        <div class="content-box">
            <p>Le relazioni e le cardinalità tra le entità sono descritte come segue:</p>
            <ul>
                <li><strong>Treno - Corsa</strong>: 1:N, lo stesso treno effettua in giorni diversi corse diverse, ma una corsa si riferisce sempre allo stesso treno;</li>
                <li><strong>Tratta - Treno</strong>: 1:N, su una certa tratta viaggiano treni diversi mentre uno specifico treno percorre sempre la stessa tratta;</li>
                <li><strong>Stazione - Tratta</strong>:  1:N, una tratta ha una sola stazione di partenza e una sola stazione di arrivo, ma da una stazione possono partire e possono arrivare più tratte;</li>
                <li><strong>Treno - Carrozza</strong>: M:N, perché un treno comprende più carrozze nelle varie posizioni (1, 2, 3, ...), ma una carrozza può essere usata in momenti diversi per comporre treni diversi;</li>
                <li><strong>Corsa - Prenotazione</strong>: 1:N, una prenotazione si riferisce sempre a una corsa specifica identificata da treno e data, ma le prenotazioni per una corsa possono essere tante quanti sono i posti disponibili;</li>
                <li><strong>Prenotazione - Biglietto</strong>: 1:1, per ogni prenotazione esiste uno e un solo biglietto che può eventualmente essere emesso in una data diversa;</li>
                <li><strong>Prenotazione - Agenzia</strong>: 1:N, ogni prenotazione è effettuata da una sola agenzia (o, in alternativa da un cliente), ma un’agenzia effettua molte prenotazioni;</li>
                <li><strong>Prenotazione - Cliente</strong>: 1:N, ogni prenotazione è effettuata da un solo cliente (o, in alternativa da un’agenzia), ma un cliente può effettuare varie prenotazioni.</li>
            </ul>
        </div>
    </div>

    <div class="section">
        <h2>Modello Logico</h2>
        <div class="content-box">
            <p>Il modello logico traduce il modello E/R in tabelle relazionali. Ogni entità diventa una tabella, e le relazioni sono tradotte in chiavi primarie e chiavi esterne. Esempio:</p>
        </div>
        <img src="foto/LogicoTreni.png" alt="">
    </div>
    <div>
        <h1>
    Test del database.
        </h1>
        <a href="Treni/index.php" class="back-button">Esercizio Treni </a></li>
    </div>
<a href="index.html" class="back-button">Torna al Sommario</a>

</body>
</html>
