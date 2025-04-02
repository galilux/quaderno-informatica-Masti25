<?php
$servername = "localhost";
$username = "Masti"; // Modifica se necessario
$password = "Masti1234"; // Modifica se necessario
$dbname = "MarittimoDB";

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
    <title>Database Marittimo</title>
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
        h3 {
            color: #8c9ba8;
        }
        p {
            font-size: 16px;
            line-height: 1.6;
        }
        .section {
            margin-bottom: 30px;
        }
        .content-box {
            background-color: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            margin-bottom: 30px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
            color: #2a3d66;
        }
        td {
            background-color: #ffffff;
        }
        form input, form select, form button {
            padding: 8px;
            margin: 10px;
            width: 300px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            background-color: #2a3d66;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
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

    
    <div class="content-box">
    <h1>Elenco Navi</h1>
        <table>
            <tr>
                <th>ID</th><th>Nome</th><th>Nazionalità</th>
            </tr>
            <?php
            $sql = "SELECT * FROM Navi";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td><td>{$row['nome']}</td><td>{$row['nazionalita']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='3'>Nessuna nave trovata</td></tr>";
            }
            ?>
        </table>
    </div>

    <h2>Inserisci una nuova Nave</h2>
    <form action="inserisci_nave.php" method="post">
        <input type="text" name="nome" placeholder="Nome Nave" required>
        <input type="text" name="nazionalita" placeholder="Nazionalità" required>
        <button type="submit">Aggiungi Nave</button>
    </form>
<br>
    
    <div class="content-box">
    <h1>Elenco Porti</h1>
        <table>
            <tr>
                <th>ID</th><th>Nome</th><th>Nazione</th>
            </tr>
            <?php
            $sql = "SELECT * FROM Porti";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td><td>{$row['nome']}</td><td>{$row['nazione']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='3'>Nessun porto trovato</td></tr>";
            }
            ?>
        </table>
    </div>

    <h2>Inserisci nuovo porto</h2>
    <form action="inserisci_porto.php" method="post">
        <input type="text" name="nome" placeholder="Nome Porto" required>
        <input type="text" name="nazione" placeholder="Nazione" required>
        <button type="submit">Aggiungi Porto</button>
    </form>

   <br>
    <div class="content-box">
    <h1>Elenco Viaggi</h1>
        <table>
            <tr>
                <th>ID</th><th>Sigla</th><th>Data Partenza</th><th>Data Arrivo</th><th>Capitano</th><th>Nave</th>
            </tr>
            <?php
            $sql = "SELECT V.id, V.sigla, V.data_partenza, V.data_arrivo, V.capitano, N.nome AS nave_nome 
                    FROM Viaggi V JOIN Navi N ON V.nave_id = N.id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td><td>{$row['sigla']}</td><td>{$row['data_partenza']}</td><td>{$row['data_arrivo']}</td>
                            <td>{$row['capitano']}</td><td>{$row['nave_nome']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='6'>Nessun viaggio trovato</td></tr>";
            }
            ?>
        </table>
    </div>

    <h2>Inserisci nuovo Viaggio</h2>
    <form action="inserisci_viaggio.php" method="post">
        <input type="text" name="sigla" placeholder="Sigla Viaggio" required>
        <input type="date" name="data_partenza" placeholder="Data Partenza" required>
        <input type="date" name="data_arrivo" placeholder="Data Arrivo" required>
        <select name="porto_partenza_id" required>
            <option value="">Seleziona Porto di Partenza</option>
            <?php
            $sql = "SELECT * FROM Porti";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                echo "<option value='{$row['id']}'>{$row['nome']}</option>";
            }
            ?>
        </select>
        <select name="porto_arrivo_id" required>
            <option value="">Seleziona Porto di Arrivo</option>
            <?php
            $sql = "SELECT * FROM Porti";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                echo "<option value='{$row['id']}'>{$row['nome']}</option>";
            }
            ?>
        </select>
        <input type="text" name="capitano" placeholder="Nome Capitano" required>
        <select name="nave_id" required>
            <option value="">Seleziona Nave</option>
            <?php
            $sql = "SELECT * FROM Navi";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                echo "<option value='{$row['id']}'>{$row['nome']}</option>";
            }
            ?>
        </select>
        <button type="submit">Aggiungi Viaggio</button>
    </form>

   <br>
    <div class="content-box">
    <h1>Elenco Fornitori</h1>
        <table>
            <tr>
                <th>ID</th><th>Nome</th><th>Indirizzo</th><th>Telefono</th><th>Email</th>
            </tr>
            <?php
            $sql = "SELECT * FROM Fornitori";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td><td>{$row['nome']}</td><td>{$row['indirizzo']}</td>
                            <td>{$row['telefono']}</td><td>{$row['email']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Nessun fornitore trovato</td></tr>";
            }
            ?>
        </table>
    </div>

    <h2>Inserisci nuovo Fornitore</h2>
    <form action="inserisci_fornitore.php" method="post">
        <input type="text" name="nome" placeholder="Nome Fornitore" required>
        <input type="text" name="indirizzo" placeholder="Indirizzo">
        <input type="text" name="telefono" placeholder="Telefono">
        <input type="email" name="email" placeholder="Email">
        <button type="submit">Aggiungi Fornitore</button>
    </form>
    <br>
    <div class="content-box">
    <h1>Elenco Clienti</h1>
    <table>
    <tr>
        <th>ID</th><th>Nome</th><th>Indirizzo</th><th>Telefono</th><th>Email</th>
    </tr>
    <?php
    $sql = "SELECT * FROM Clienti";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td><td>{$row['nome']}</td><td>{$row['indirizzo']}</td>
                    <td>{$row['telefono']}</td><td>{$row['email']}</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='5'>Nessun cliente trovato</td></tr>";
    }
    ?>
</table>
    </div>
<h2>Inserisci nuovo cliente</h2>
<form action="inserisci_cliente.php" method="post">
    <input type="text" name="nome" placeholder="Nome Cliente" required>
    <input type="text" name="indirizzo" placeholder="Indirizzo">
    <input type="text" name="telefono" placeholder="Telefono">
    <input type="email" name="email" placeholder="Email">
    <button type="submit">Aggiungi Cliente</button>
</form>
    <br>
    <div class="content-box">
    <h1>Elenco Polizze</h1>
        <table>
            <tr>
                <th>ID</th><th>Codice Identificativo</th><th>Tipo Merce</th><th>Tipo Colli</th><th>Peso Totale</th><th>Fornitore</th><th>Cliente</th>
            </tr>
            <?php
            $sql = "SELECT P.id, P.codice_identificativo, P.tipo_merce, P.tipo_colli, P.peso_totale, F.nome AS fornitore_nome, C.nome AS cliente_nome
                    FROM Polizze P JOIN Fornitori F ON P.fornitore_id = F.id JOIN Clienti C ON P.cliente_id = C.id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td><td>{$row['codice_identificativo']}</td><td>{$row['tipo_merce']}</td><td>{$row['tipo_colli']}</td>
                            <td>{$row['peso_totale']}</td><td>{$row['fornitore_nome']}</td><td>{$row['cliente_nome']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='7'>Nessuna polizza trovata</td></tr>";
            }
            ?>
        </table>
    </div>

    <h2>Inserisci Polizza</h2>
    <form action="inserisci_polizza.php" method="post">
        <input type="text" name="codice" placeholder="Codice Polizza" required>
        <input type="text" name="tipo_merce" placeholder="Tipo Merce" required>
        <input type="text" name="tipo_colli" placeholder="Tipo Colli" required>
        <input type="number" name="numero_colli" placeholder="Numero Colli" required>
        <input type="number" step="0.01" name="peso_totale" placeholder="Peso Totale (tonnellate)" required>
        <select name="fornitore_id" required>
            <option value="">Seleziona Fornitore</option>
            <?php
            $sql = "SELECT * FROM Fornitori";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                echo "<option value='{$row['id']}'>{$row['nome']}</option>";
            }
            ?>
        </select>
        <select name="cliente_id" required>
            <option value="">Seleziona Cliente</option>
            <?php
            $sql = "SELECT * FROM Clienti";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                echo "<option value='{$row['id']}'>{$row['nome']}</option>";
            }
            ?>
        </select>
        <select name="viaggio_id" required>
            <option value="">Seleziona Viaggio</option>
            <?php
            $sql = "SELECT * FROM Viaggi";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                echo "<option value='{$row['id']}'>{$row['sigla']}</option>";
            }
            ?>
        </select>
        <button type="submit">Aggiungi Polizza</button>
    </form>
    <a href="../Marittima.php" class="back-button">Torna al indietro</a>
    <a href="../index.html" class="back-button">Torna al Sommario</a>
    
</body>
</html>
