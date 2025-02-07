<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabella Pitagorica</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Tabella Pitagorica</h1>
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

    <!-- Bottone per tornare al sommario -->
    <div class="button-container">
        <button onclick="window.location.href='index.php'">Torna al sommario</button>
    </div>

    <p>Come funziona il codice
Intestazione della tabella:

La prima riga della tabella contiene i numeri da 1 a 10 (o il numero scelto) come intestazione delle colonne.
La prima cella vuota nell'angolo in alto a sinistra separa l'intestazione delle righe e delle colonne.
Ciclo PHP:

Due cicli for sono usati:
Il primo ($row) genera le righe.
Il secondo ($col) genera le colonne.
Ogni cella ($product) è il prodotto del numero di riga e colonna.
Stile CSS:

Migliora la leggibilità con bordi e centratura</p>
</body>
</html>
