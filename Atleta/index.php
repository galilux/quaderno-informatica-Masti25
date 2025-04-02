<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestione Gare Podistiche</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        table { width: 80%; margin: auto; border-collapse: collapse; }
        th, td { border: 1px solid black; padding: 10px; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

    <h1>Elenco Gare Podistiche</h1>
    <table>
        <tr>
            <th>ID Gara</th><th>Nome</th><th>Città</th><th>Data</th>
        </tr>
        <?php
        $sql = "SELECT * FROM Gare";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['ID_gara']}</td><td>{$row['nome']}</td><td>{$row['citta']}</td><td>{$row['data']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Nessuna gara trovata</td></tr>";
        }
        ?>
    </table>

    <br>
    <h2>Inserisci Nuova Gara</h2>
    <form action="inserisci_gara.php" method="post">
        <input type="text" name="nome" placeholder="Nome Gara" required>
        <input type="text" name="citta" placeholder="Città" required>
        <input type="date" name="data" required>
        <button type="submit">Aggiungi Gara</button>
    </form>
</body>
</html>
