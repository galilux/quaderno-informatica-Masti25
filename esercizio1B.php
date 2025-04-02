<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prima Pagina PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            color: #2a3d66;
            margin-top: 50px;
        }
        p {
            font-size: 16px;
            line-height: 1.6;
            text-align: center;
        }
        .container {
            text-align: center;
            margin-top: 30px;
        }
        .buttons {
            margin-top: 20px;
        }
        button {
            background-color: #4a6d8c;
            color: white;
            border: none;
            padding: 10px 20px;
            margin: 5px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover {
            background-color: #4a6d8c;
        }
        .code-info {
            margin-top: 20px;
            font-size: 14px;
            background-color: #f9f9f9;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>

    <?php
    // Definizione della variabile nome
    $nome = "Paolo";

    // Ottenere l'ora attuale
    $ora = date("H");

    // Determinare il saluto in base all'ora
    if ($ora >= 8 && $ora < 12) {
        $saluto = "Buongiorno";
    } elseif ($ora >= 12 && $ora < 20) {
        $saluto = "Buonasera";
    } else {
        $saluto = "Buonanotte";
    }

    // Stampare il messaggio di benvenuto
    echo "<h1>$saluto $nome, benvenuta nella mia prima pagina PHP</h1>";

    // Identificare il browser utilizzato dall'utente
    $browser = $_SERVER['HTTP_USER_AGENT'];

    // Stampare il messaggio sul browser
    echo "<p>Stai usando il browser: $browser</p>";
    ?>

    <div class="container">
        <div class="buttons">
            <button onclick="window.location.href='esercizio1.html'">Torna indietro</button>
            <button onclick="window.location.href='index.html'">Torna al sommario</button>
        </div>
    </div>

    <div class="code-info">
        <h3>Come funziona il codice:</h3>
        <p><strong>Definizione del nome:</strong> La variabile $nome contiene il nome "Paolo".</p>
        <p><strong>Ottenimento dell'ora attuale:</strong> Utilizza date("H") per ottenere l'ora in formato 24 ore.</p>
        <p><strong>Saluto basato sull'orario:</strong> Viene utilizzato un blocco if-elseif-else per scegliere tra "Buongiorno", "Buonasera" o "Buonanotte".</p>
        <p><strong>Identificazione del browser:</strong> La variabile $_SERVER['HTTP_USER_AGENT'] contiene informazioni sul browser dell'utente.</p>
        <p><strong>Visualizzazione dei messaggi:</strong> Utilizza echo per stampare i messaggi HTML con il saluto e le informazioni sul browser.</p>
    </div>

</body>
</html>
