<?php
$servername = "localhost";
$username = "Masti"; // Modifica se necessario
$password = "Masti1234"; // Modifica se necessario
$dbname = "ComuneDB";

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
    <title>Gestione Multe</title>
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

    <h1>Elenco Infrazioni</h1>
    <table>
        <tr>
            <th>Codice Infrazione</th><th>Data</th><th>Agente</th><th>Infrazione</th><th>Importo (€)</th><th>Targa Auto</th>
        </tr>
        <?php
        $sql = "SELECT i.codice_infrazione, i.data, a.nominativo AS agente, i.denominazione, i.importo, i.targa_auto 
                FROM Infrazioni i
                JOIN Agenti a ON i.matricola_agente = a.matricola";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['codice_infrazione']}</td><td>{$row['data']}</td><td>{$row['agente']}</td><td>{$row['denominazione']}</td><td>{$row['importo']}</td><td>{$row['targa_auto']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>Nessuna infrazione trovata</td></tr>";
        }
        ?>
    </table>

    <br>
    <h2>Inserisci una Nuova Infrazione</h2>
    <form action="inserisci_infrazione.php" method="post">
        <input type="date" name="data" required>
        <input type="number" name="matricola_agente" placeholder="Matricola Agente" required>
        <input type="text" name="denominazione" placeholder="Denominazione Infrazione" required>
        <input type="number" step="0.01" name="importo" placeholder="Importo (€)" required>
        <input type="text" name="targa_auto" placeholder="Targa Auto" required>
        <button type="submit">Aggiungi Infrazione</button>
    </form>
    <a href="../Multe.php" class="back-button">Torna al indietro</a>
    <a href="../index.html" class="back-button">Torna al Sommario</a>

</body>
</html>
