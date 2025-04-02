<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangoli di Asterischi</title>
    <style>
        body {
            font-family: monospace;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        h1, h2 {
            color: #333;
        }
        div {
            margin-top: 20px;
            text-align: center;
        }
        button {
            padding: 10px 20px;
            margin: 5px;
            background-color: #4a6d8c;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #4a6d8c;
        }
        p {
            font-size: 16px;
            width: 80%;
            text-align: justify;
            margin-top: 20px;
        }
        pre {
            font-family: monospace;
            background-color: #f1f1f1;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            margin-top: 20px;
            white-space: pre-wrap;
            word-wrap: break-word;
        }
    </style>
</head>
<body>
    <h1>Triangoli di Asterischi</h1>

    <!-- (a) Triangolo con asterischi crescenti -->
    <h2>(a) Triangolo con asterischi crescenti</h2>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        for ($j = 0; $j < $i; $j++) {
            echo '*';
        }
        echo '<br>';
    }
    ?>

    <!-- (b) Triangolo con asterischi decrescenti -->
    <h2>(b) Triangolo con asterischi decrescenti</h2>
    <?php
    for ($i = 10; $i >= 1; $i--) {
        for ($j = 0; $j < $i; $j++) {
            echo '*';
        }
        echo '<br>';
    }
    ?>

    <!-- (c) Triangolo specchiato con asterischi decrescenti -->
    <h2>(c) Triangolo specchiato con asterischi decrescenti</h2>
    <?php
    for ($i = 10; $i >= 1; $i--) {
        for ($j = 0; $j < 10 - $i; $j++) {
            echo '&nbsp;';
        }
        for ($k = 0; $k < $i; $k++) {
            echo '*';
        }
        echo '<br>';
    }
    ?>

    <!-- (d) Triangolo specchiato con asterischi crescenti -->
    <h2>(d) Triangolo specchiato con asterischi crescenti</h2>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        for ($j = 0; $j < 10 - $i; $j++) {
            echo '&nbsp;';
        }
        for ($k = 0; $k < $i; $k++) {
            echo '*';
        }
        echo '<br>';
    }
    ?>

    <div>
        <button onclick="window.location.href='esercizio1.html'">Torna indietro</button>
        <button onclick="window.location.href='index.html'">Torna al sommario</button>
    </div>

    <p>Spiegazione del codice:</p>
    <pre>
Triangolo con asterischi crescenti (a):
- Il ciclo esterno gestisce il numero di righe.
- Il ciclo interno stampa il numero di asterischi crescente.

Triangolo con asterischi decrescenti (b):
- Il ciclo esterno parte dal massimo numero di righe (10) e decrementa.
- Il ciclo interno stampa il numero di asterischi decrescente.

Triangolo specchiato con asterischi decrescenti (c):
- Un primo ciclo interno aggiunge spazi (&nbsp;) per allineare.
- Un secondo ciclo interno stampa gli asterischi decrescenti.

Triangolo specchiato con asterischi crescenti (d):
- Simile al triangolo specchiato decrescente, ma il numero di asterischi aumenta
    </pre>
</body>
</html>
