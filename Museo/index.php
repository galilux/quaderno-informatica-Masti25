<?php
$servername = "localhost";
$username = "Masti"; // Modifica se necessario
$password = "Masti1234"; // Modifica se necessario
$dbname = "FossiliDB";

// Creazione connessione
$conn = new mysqli($servername, $username, $password, $dbname);

// Controllo connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Fossili</title>
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
        input[type="text"], input[type="number"], input[type="date"], select {
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

    <h1>Elenco Fossili</h1>
    <table>
        <tr>
            <th>ID</th><th>Specie</th><th>Dimensioni</th><th>Peso (kg)</th><th>Stato Conservazione</th><th>Valore (€)</th>
            <th>Data Ritrovamento</th><th>Località</th><th>Latitudine</th><th>Longitudine</th><th>Archivio</th>
        </tr>
        <?php
        $sql = "SELECT * FROM Fossili";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td><td>{$row['specie']}</td><td>{$row['dimensioni']}</td><td>{$row['peso']}</td>
                        <td>{$row['stato_conservazione']}</td><td>{$row['valore_patrimoniale']}</td>
                        <td>{$row['data_ritrovamento']}</td><td>{$row['localita_ritrovamento']}</td>
                        <td>{$row['latitudine']}</td><td>{$row['longitudine']}</td><td>{$row['luogo_archiviazione']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='11'>Nessun fossile trovato</td></tr>";
        }
        ?>
    </table>

    <br>
    <h2>Inserisci un nuovo Fossile</h2>
    <form action="inserisci.php" method="post">
        <input type="text" name="specie" placeholder="Specie" required>
        <input type="text" name="dimensioni" placeholder="Dimensioni">
        <input type="number" step="0.01" name="peso" placeholder="Peso (kg)">
        <select name="stato_conservazione" required>
            <option value="ottimo">Ottimo</option>
            <option value="buono">Buono</option>
            <option value="deteriorato">Deteriorato</option>
            <option value="parziale">Parziale</option>
        </select>
        <input type="number" step="0.01" name="valore_patrimoniale" placeholder="Valore (€)">
        <input type="date" name="data_ritrovamento" required>
        <input type="text" name="localita_ritrovamento" placeholder="Località" required>
        <input type="number" step="0.000001" name="latitudine" placeholder="Latitudine">
        <input type="number" step="0.000001" name="longitudine" placeholder="Longitudine">
        <input type="text" name="luogo_archiviazione" placeholder="Luogo Archiviazione">
        <button type="submit">Aggiungi Fossile</button>
    </form>
    <a href="../museo.php" class="back-button">Torna al indietro</a>
    <a href="../index.html" class="back-button">Torna al Sommario</a>

</body>
</html>
