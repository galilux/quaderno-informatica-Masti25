<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Modulo Viaggio</title>
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
        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        form {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"], input[type="number"], input[type="date"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #2a3d66;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #4a6d8c;
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
    <a href="index.html" class="back-button">Torna al indietro</a>
    <a href="../index.html" class="back-button">Torna al Sommario</a>
</div>
</body>
</html>
