<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prima Pagina PHP</title>
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
     <div class="button-container">
        <button onclick="window.location.href='index.php'">Torna al sommario</button>
    </div>
    <p>Come funziona il codice:
Definizione del nome: La variabile $nome contiene il nome "Paolo".
Ottenimento dell'ora attuale: Utilizza date("H") per ottenere l'ora in formato 24 ore.
Saluto basato sull'orario: Viene utilizzato un blocco if-elseif-else per scegliere tra "Buongiorno", "Buonasera" o "Buonanotte".
Identificazione del browser: La variabile $_SERVER['HTTP_USER_AGENT'] contiene informazioni sul browser dell'utente.
Visualizzazione dei messaggi: Utilizza echo per stampare i messaggi HTML con il saluto e le informazioni sul browser.</p>
</body>
</html>
