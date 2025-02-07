<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anagrafica Utenti</title>
</head>
<body>
    <h1>Inserisci i tuoi dati</h1>
    <form action="visualizza_dati.php" method="post">
        <label for="nome">Nome (obbligatorio):</label>
        <input type="text" id="nome" name="nome" required pattern="[A-Za-zÀ-ÿ\s]+" title="Inserire solo lettere e spazi."><br><br>

        <label for="cognome">Cognome (obbligatorio):</label>
        <input type="text" id="cognome" name="cognome" required pattern="[A-Za-zÀ-ÿ\s']+" title="Inserire solo lettere, spazi e apostrofi."><br><br>

        <label for="data_nascita">Data di nascita (obbligatoria):</label>
        <input type="date" id="data_nascita" name="data_nascita" required><br><br>

        <label for="codice_fiscale">Codice Fiscale (opzionale):</label>
        <input type="text" id="codice_fiscale" name="codice_fiscale" maxlength="16"><br><br>

        <label for="email">Email (obbligatoria):</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="cellulare">Cellulare (opzionale, 12 cifre):</label>
        <input type="tel" id="cellulare" name="cellulare" pattern="\d{12}" title="Inserire un numero di 12 cifre."><br><br>

        <fieldset>
            <legend>Indirizzo (obbligatorio):</legend>
            <label for="via">Via/Piazza:</label>
            <input type="text" id="via" name="via" required><br><br>
            <label for="cap">CAP:</label>
            <input type="text" id="cap" name="cap" required pattern="\d{5}" title="Inserire un CAP valido di 5 cifre."><br><br>
            <label for="comune">Comune:</label>
            <input type="text" id="comune" name="comune" required><br><br>
            <label for="provincia">Provincia:</label>
            <input type="text" id="provincia" name="provincia" required maxlength="2" pattern="[A-Za-z]{2}" title="Inserire una sigla di 2 lettere."><br><br>
        </fieldset>

        <label for="nickname">Nickname (deve essere diverso da nome e cognome):</label>
        <input type="text" id="nickname" name="nickname" required><br><br>

        <label for="password">Password (min 8 caratteri, maiuscola, numero, carattere speciale):</label>
        <input type="password" id="password" name="password" required minlength="8" 
               pattern="(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).+" 
               title="Deve contenere almeno una lettera maiuscola, un numero e un carattere speciale."><br><br>

        <button type="submit">Invia</button>
    </form>
    <div class="button-container">
        <button onclick="window.location.href='index.php'">Torna al sommario</button>
    </div>
    <br> <p>Questo form HTML raccoglie vari dati personali dell'utente, validandoli lato client con i pattern e gli attributi HTML. Una volta inviato, i dati vengono inviati tramite POST alla pagina PHP visualizza_dati.php (che dovresti implementare per processarli). La validazione è implementata sia tramite HTML (per validare i formati di base) che con l'uso di pattern regex (per il controllo di formati specifici).</p>
</body>
</html>
