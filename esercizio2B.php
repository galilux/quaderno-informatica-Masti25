<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login su singola pagina</title>
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

        form {
            max-width: 300px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #4a6d8c;
        }

        input {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            padding: 10px 20px;
            margin-top: 10px;
            border: none;
            border-radius: 5px;
            background-color: #4a6d8c;
            color: white;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #2a3d66;
        }

        .buttons {
            text-align: center;
            margin-top: 20px;
        }

        .buttons button {
            width: auto;
            padding: 8px 15px;
        }

        p {
            text-align: center;
            color: #777;
        }
    </style>
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
        <form action="" method="post">
            <h1>Login</h1>
            <label for="username">Nome utente:</label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            <button type="submit">Accedi</button>
        </form>
        ';
    }
    ?>

    <div class="buttons">
        <button onclick="window.location.href='esercizio2.html'">Torna indietro</button>
        <button onclick="window.location.href='index.html'">Torna al sommario</button>
    </div>

    <p>Credenziali predefinite:</p>
    <p>Nome utente: admin</p>
    <p>Password: 1234</p>
    <br>
    <p>Controllo del metodo della richiesta:</p>
    <p>Se $_SERVER['REQUEST_METHOD'] è POST, significa che il form è stato inviato.</p>
    <p>Recupera i dati di $_POST['username'] e $_POST['password'].</p>
    <p>Verifica credenziali:</p>
    <p>Se i dati corrispondono a quelli predefiniti, viene mostrato un messaggio di benvenuto.</p>
    <p>In caso di errore, viene mostrato un messaggio e il form viene riproposto.</p>
    <p>Funzione mostraForm:</p>
    <p>Gestisce la visualizzazione del form. Viene richiamata sia alla prima apertura della pagina sia in caso di errore.</p>
    <p>HTML dinamico:</p>
    <p>Il form e i messaggi vengono generati dinamicamente all'interno del blocco PHP.</p>

</body>
</html>
