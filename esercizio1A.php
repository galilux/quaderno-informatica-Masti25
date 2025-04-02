<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabella Pitagorica</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 20px;
            text-align: center;
        }

        h1 {
            color: #2a3d66;
        }

        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
            border: 1px solid #ddd;
        }

        th, td {
            border: 1px solid black;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        td {
            background-color: #fff;
        }

        .btn-container {
            margin-top: 20px;
        }

        button {
            background-color: #4a6d8c;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin: 5px;
        }

        button:hover {
            background-color: #4a6d8c;
        }
    </style>
</head>
<body>
    <h1>Tabella Pitagorica</h1>
    <table>
        <?php
        // Definizione della dimensione della tabella
        $size = 10;

        // Generazione dell'intestazione
        echo "<tr><th></th>";
        for ($i = 1; $i <= $size; $i++) {
            echo "<th>$i</th>";
        }
        echo "</tr>";

        // Generazione del contenuto della tabella
        for ($row = 1; $row <= $size; $row++) {
            echo "<tr>";
            echo "<th>$row</th>"; // Intestazione della riga
            for ($col = 1; $col <= $size; $col++) {
                $product = $row * $col;
                echo "<td>$product</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

    <div class="btn-container">
        <button onclick="window.location.href='esercizio1.html'">Torna indietro</button>
        <button onclick="window.location.href='index.html'">Torna al sommario</button>
    </div>

    <p>Come funziona il codice:</p>
    <p><strong>Intestazione della tabella:</strong> La prima riga della tabella contiene i numeri da 1 a 10 come intestazione delle colonne. La prima cella nell'angolo in alto a sinistra separa l'intestazione delle righe e delle colonne.</p>
    <p><strong>Ciclo PHP:</strong> Due cicli for generano la tabella. Il primo ($row) genera le righe, e il secondo ($col) genera le colonne. Ogni cella ($product) è il prodotto del numero di riga e colonna.</p>
    <p><strong>Stile CSS:</strong> La tabella ha bordi e celle centrati per migliorarne la leggibilità.</p>
</body>
</html>
