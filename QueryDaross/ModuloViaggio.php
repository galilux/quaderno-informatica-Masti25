<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Modulo Viaggio</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $destinazione = $_POST['destinazione'] ?? '';
    $valuta = $_POST['valuta'] ?? '';
    $nome = $_POST['nome'] ?? '';
    $cognome = $_POST['cognome'] ?? '';
    $indirizzo = $_POST['indirizzo'] ?? '';

    echo "<div>";
    echo "<h2>Dati Ricevuti</h2>";
    echo "<table>";
    echo "<tr><td><strong>Destinazione:</strong></td><td>$destinazione</td></tr>";
    echo "<tr><td><strong>Valuta:</strong></td><td>$valuta</td></tr>";
    echo "<tr><td><strong>Nome:</strong></td><td>$nome</td></tr>";
    echo "<tr><td><strong>Cognome:</strong></td><td>$cognome</td></tr>";
    echo "<tr><td><strong>Indirizzo:</strong></td><td>$indirizzo</td></tr>";
    echo "</table>";
    echo "</div>";
}
?>

<div>
    <h2>Prenotazione Viaggio</h2>
    <form method="post" action="">
        <label>Scegli la destinazione:</label><br>
        <select name="destinazione" required>
            <option value="">-- Seleziona --</option>
            <option value="Francia">Francia</option>
            <option value="Tunisia">Tunisia</option>
            <option value="Marocco">Marocco</option>
            <option value="Seychelles">Seychelles</option>
            <option value="Brasile">Brasile</option>
        </select><br><br>

        <label>Scegli la valuta:</label><br>
        <select name="valuta" required>
            <option value="">-- Seleziona --</option>
            <option value="Euro">Euro</option>
            <option value="Dollaro">Dollaro</option>
            <option value="Dirham">Dirham</option>
            <option value="Real Brasiliano">Real Brasiliano</option>
        </select><br><br>

        <label>Immettere il nome:</label><br>
        <input type="text" name="nome" required><br><br>

        <label>Immettere il cognome:</label><br>
        <input type="text" name="cognome" required><br><br>

        <label>Immettere indirizzo:</label><br>
        <input type="text" name="indirizzo" required><br><br>

        <input type="submit" value="Invia">
    </form>
</div>
<br>
<div>
    <a href="index.html"><button>Home</button></a>
</div>
</body>
</html>
