<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestione Atleti</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        table { width: 80%; margin: auto; border-collapse: collapse; }
        th, td { border: 1px solid black; padding: 10px; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

    <h1>Elenco Atleti</h1>
    <table>
        <tr>
            <th>ID Atleta</th><th>Cognome</th><th>Nome</th><th>Codice Fiscale</th><th>Data di Nascita</th>
        </tr>
        <?php
        $sql = "SELECT * FROM Atleti";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['ID_atleta']}</td><td>{$row['cognome']}</td><td>{$row['nome']}</td>
                        <td>{$row['cod_tiscale']}</td><td>{$row['data_nascita']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Nessun atleta trovato</td></tr>";
        }
        ?>
    </table>

    <br>
    <h2>Inserisci Nuovo Atleta</h2>
    <form action="inserisci_atleta.php" method="post">
        <input type="text" name="cognome" placeholder="Cognome" required>
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="text" name="indirizzo" placeholder="Indirizzo" required>
        <input type="text" name="cod_tiscale" placeholder="Codice Fiscale" required>
        <input type="date" name="data_nascita" required>
        <select name="sesso" required>
            <option value="M">Maschio</option>
            <option value="F">Femmina</option>
        </select>
        <button type="submit">Aggiungi Atleta</button>
    </form>

</body>
</html>
