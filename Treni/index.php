<?php
$servername = "localhost";
$username = "Masti"; // Modifica se necessario
$password = "Masti1234"; // Modifica se necessario
$dbname = "TVIDB";

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
    <title>Gestione Treni Veloci Italiani</title>
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
        input[type="text"], input[type="number"], input[type="time"] {
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

    <h1>Elenco Treni</h1>
    <table>
        <tr>
            <th>Numero Treno</th><th>Stazione Partenza</th><th>Orario Partenza</th>
            <th>Stazione Arrivo</th><th>Orario Arrivo</th>
        </tr>
        <?php
        $sql = "SELECT * FROM Treni";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['numero_treno']}</td><td>{$row['stazione_partenza']}</td><td>{$row['orario_partenza']}</td>
                        <td>{$row['stazione_arrivo']}</td><td>{$row['orario_arrivo']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Nessun treno trovato</td></tr>";
        }
        ?>
    </table>

    <br>
    <h2>Inserisci un Nuovo Treno</h2>
    <form action="inserisci_treno.php" method="post">
        <input type="number" name="numero_treno" placeholder="Numero Treno" required>
        <input type="text" name="stazione_partenza" placeholder="Stazione Partenza" required>
        <input type="time" name="orario_partenza" placeholder="Orario Partenza" required>
        <input type="text" name="stazione_arrivo" placeholder="Stazione Arrivo" required>
        <input type="time" name="orario_arrivo" placeholder="Orario Arrivo" required>
        <button type="submit">Aggiungi Treno</button>
    </form>
    <a href="../treni.php" class="back-button">Torna al indietro</a>
    <a href="../index.html" class="back-button">Torna al Sommario</a>

</body>
</html>
