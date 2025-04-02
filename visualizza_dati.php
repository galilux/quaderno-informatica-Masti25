<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dati Inseriti</title>
</head>
<body>
    <h1>Dati inseriti dall'utente</h1>
    <?php
    // Verifica che il form sia stato inviato
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo "<ul>";
        echo "<li><strong>Nome:</strong> " . htmlspecialchars($_POST['nome']) . "</li>";
        echo "<li><strong>Cognome:</strong> " . htmlspecialchars($_POST['cognome']) . "</li>";
        echo "<li><strong>Data di nascita:</strong> " . htmlspecialchars($_POST['data_nascita']) . "</li>";
        echo "<li><strong>Codice Fiscale:</strong> " . htmlspecialchars($_POST['codice_fiscale']) . "</li>";
        echo "<li><strong>Email:</strong> " . htmlspecialchars($_POST['email']) . "</li>";
        echo "<li><strong>Cellulare:</strong> " . htmlspecialchars($_POST['cellulare']) . "</li>";
        echo "<li><strong>Indirizzo:</strong> " . htmlspecialchars($_POST['via']) . ", CAP: " . htmlspecialchars($_POST['cap']) . ", Comune: " . htmlspecialchars($_POST['comune']) . ", Provincia: " . htmlspecialchars($_POST['provincia']) . "</li>";
        echo "<li><strong>Nickname:</strong> " . htmlspecialchars($_POST['nickname']) . "</li>";
        echo "<li><strong>Password:</strong> " . str_repeat("*", strlen($_POST['password'])) . " (non mostrata per sicurezza)</li>";
        echo "</ul>";
    } else {
        echo "<p>Errore: nessun dato inviato.</p>";
    }
    ?>
    <div>
    <button onclick="window.location.href='esercizio3A.html'">Torna indietro</button>
    <button onclick="window.location.href='index.html'">Torna al sommario</button>
    </div>
    <br><p>Questa pagina PHP raccoglie i dati da un form HTML inviato tramite POST. Se il form è stato inviato correttamente, i dati inseriti vengono mostrati in una lista. I dati vengono sanitizzati con htmlspecialchars per evitare vulnerabilità di sicurezza, e la password viene mostrata come asterischi per motivi di privacy. Se il form non è stato inviato, viene mostrato un messaggio di errore.</p>
</body>
</html>
