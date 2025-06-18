<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabella di Quadrati e Cubi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 20px;
        }

        h1 {
            text-align: center;
            color: #2a3d66;
        }

        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
            background-color: #fff;
        }

        table, th, td {
            border: 1px solid #2a3d66;
            text-align: center;
            padding: 8px;
        }

        form {
            text-align: center;
            margin: 20px;
        }

        select, button {
            padding: 8px;
            font-size: 16px;
            margin: 10px;
            border-radius: 5px;
            border: 1px solid #4a6d8c;
        }

        button {
            background-color: #4a6d8c;
            color: white;
            cursor: pointer;
        }

        button:hover {
            background-color: #2a3d66;
        }

        .buttons {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recupero del numero N dal form
        $n = $_POST['numero'] ?? 1;

        // Validazione del numero
        if (is_numeric($n) && $n >= 1 && $n <= 10) {
            echo "<h1>Tabella di Quadrati e Cubi (da 1 a $n)</h1>";
            // Creazione della tabella
            echo "<table>";
            echo "<tr><th>Numero</th><th>Quadrato</th><th>Cubo</th></tr>";

            for ($i = 1; $i <= $n; $i++) {
                echo "<tr>";
                echo "<td>$i</td>";
                echo "<td>" . ($i ** 2) . "</td>";
                echo "<td>" . ($i ** 3) . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "<h1>Errore: Inserire un numero valido tra 1 e 10.</h1>";
        }
    } else {
        // Visualizzazione del form alla prima apertura della pagina
        echo '
        <h1>Inserisci un numero</h1>
        <form action="" method="post">
            <label for="numero">Seleziona un numero (1-10):</label>
            <select id="numero" name="numero" required>
                <option value="">-- Seleziona --</option>';
                for ($i = 1; $i <= 10; $i++) {
                    echo "<option value=\"$i\">$i</option>";
                }
        echo '
            </select>
            <br><br>
            <button type="submit">Crea Tabella</button>
        </form>';
    }
    ?>
    <br>
    <div class="buttons">
        <button onclick="window.location.href='esercizio2.html'">Torna indietro</button>
        <button onclick="window.location.href='index.html'">Torna al sommario</button>
    </div>
    <br>
    <p>Spiegazione del codice:
Gestione del form:

Il form viene visualizzato solo alla prima apertura della pagina ($_SERVER['REQUEST_METHOD'] non è POST).
L'utente seleziona un numero da un menu a tendina con opzioni da 1 a 10.
Recupero del numero N:

Con $_POST['numero'], si recupera il numero inviato dal form.
Il numero è validato per assicurarsi che sia compreso tra 1 e 10.
Generazione della tabella:

Se il numero è valido, viene creata una tabella con:
Colonna "Numero".
Colonna "Quadrato" (calcolato con $i ** 2).
Colonna "Cubo" (calcolato con $i ** 3).
La tabella mostra i dati da 1 a N.
Stile della tabella:

La tabella ha bordi visibili e il contenuto è centrato per leggibilità.
Errore:

Se l'input non è valido, viene mostrato un messaggio di errore.</p>
</body>
</html>
