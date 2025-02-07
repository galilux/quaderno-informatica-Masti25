<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangoli di Asterischi</title>
    <style>
        body {
            font-family: monospace;
        }
    </style>
</head>
<body>
    <h1>Triangoli di Asterischi</h1>

    <!-- (a) Triangolo con asterischi crescenti -->
    <h2>(a) Triangolo con asterischi crescenti</h2>
    <?php
    for ($i = 1; $i <= 10; $i++) { // Righe
        for ($j = 0; $j < $i; $j++) { // Asterischi
            echo '*';
        }
        echo '<br>'; // Nuova riga
    }
    ?>

    <!-- (b) Triangolo con asterischi decrescenti -->
    <h2>(b) Triangolo con asterischi decrescenti</h2>
    <?php
    for ($i = 10; $i >= 1; $i--) { // Righe
        for ($j = 0; $j < $i; $j++) { // Asterischi
            echo '*';
        }
        echo '<br>'; // Nuova riga
    }
    ?>

    <!-- (c) Triangolo specchiato con asterischi decrescenti -->
    <h2>(c) Triangolo specchiato con asterischi decrescenti</h2>
    <?php
    for ($i = 10; $i >= 1; $i--) { // Righe
        for ($j = 0; $j < 10 - $i; $j++) { // Spazi
            echo '&nbsp;';
        }
        for ($k = 0; $k < $i; $k++) { // Asterischi
            echo '*';
        }
        echo '<br>'; // Nuova riga
    }
    ?>

    <!-- (d) Triangolo specchiato con asterischi crescenti -->
    <h2>(d) Triangolo specchiato con asterischi crescenti</h2>
    <?php
    for ($i = 1; $i <= 10; $i++) { // Righe
        for ($j = 0; $j < 10 - $i; $j++) { // Spazi
            echo '&nbsp;';
        }
        for ($k = 0; $k < $i; $k++) { // Asterischi
            echo '*';
        }
        echo '<br>'; // Nuova riga
    }
    ?>

<div class="button-container">
        <button onclick="window.location.href='index.php'">Torna al sommario</button>
    </div>
    <p>Spiegazione del codice:
Triangolo con asterischi crescenti (a):

Il ciclo esterno gestisce il numero di righe.
Il ciclo interno stampa il numero di asterischi crescente.
Triangolo con asterischi decrescenti (b):

Il ciclo esterno parte dal massimo numero di righe (10) e decrementa.
Il ciclo interno stampa il numero di asterischi decrescente.
Triangolo specchiato con asterischi decrescenti (c):

Un primo ciclo interno aggiunge spazi (&nbsp;) per allineare.
Un secondo ciclo interno stampa gli asterischi decrescenti.
Triangolo specchiato con asterischi crescenti (d):

Simile al triangolo specchiato decrescente, ma il numero di asterischi aumenta</p>
</body>
</html>
