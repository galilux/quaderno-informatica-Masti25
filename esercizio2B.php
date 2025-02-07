<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login su singola pagina</title>
</head>
<body>
    <?php
    // Dati di login predefiniti
    $utente = "admin";
    $password = "1234";

    // Controlla se il form è stato inviato
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recupero dati inviati
        $nomeUtente = $_POST['username'] ?? '';
        $psw = $_POST['password'] ?? '';

        // Verifica credenziali
        if ($nomeUtente === $utente && $psw === $password) {
            echo "<h1>Benvenuto, $nomeUtente!</h1>";
            echo "<p>Hai effettuato l'accesso con successo.</p>";
        } else {
            echo "<h1>Accesso negato</h1>";
            echo "<p>Le credenziali inserite non sono corrette. Riprova.</p>";
            mostraForm(); // Mostra nuovamente il form
        }
    } else {
        // Mostra il form alla prima apertura della pagina
        mostraForm();
    }

    // Funzione per mostrare il form
    function mostraForm() {
        echo '
        <h1>Login</h1>
        <form action="" method="post">
            <label for="username">Nome utente:</label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            <button type="submit">Accedi</button>
        </form>
        ';
    }
    ?>
    <div class="button-container">
        <button onclick="window.location.href='index.php'">Torna al sommario</button>
    </div> <br>
    <p>Credenziali predefinite:

Nome utente: admin
Password: 1234
Controllo del metodo della richiesta:

Se $_SERVER['REQUEST_METHOD'] è POST, significa che il form è stato inviato.
Recupera i dati di $_POST['username'] e $_POST['password'].
Verifica credenziali:

Se i dati corrispondono a quelli predefiniti, viene mostrato un messaggio di benvenuto.
In caso di errore, viene mostrato un messaggio e il form viene riproposto.
Funzione mostraForm:

Gestisce la visualizzazione del form.
Viene richiamata sia alla prima apertura della pagina sia in caso di errore.
HTML dinamico:

Il form e i messaggi vengono generati dinamicamente all'interno del blocco PHP.</p>
</body>
</html>
