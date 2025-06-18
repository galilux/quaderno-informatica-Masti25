<?php
$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'home';

$contenuti = [
    'home' => "<h1>Benvenuto nel Quaderno di Informatica</h1><p>Seleziona un argomento dal menu.</p>",
    'cardinalita' => "<h2>Cardinalit&agrave; delle Relazioni</h2>
        <p>I vincoli di cardinalit&agrave; sulle relazioni vengono rappresentati con una coppia di numeri (min, max).</p>
        <ul>
            <li>min: limite minimo di entit&agrave; associate.</li>
            <li>max: limite massimo di entit&agrave; associate.</li>
        </ul>",
    'tipologie' => "<h2>Classificazione delle Relazioni</h2>
        <ul>
            <li>Relazioni Uno-a-Uno (1:1)</li>
            <li>Relazioni Uno-a-Molti (1:N)</li>
            <li>Relazioni Molti-a-Molti (M:N)</li>
        </ul>",
    'esempi' => "<h2>Esempi Pratici</h2>
        <p>Alcuni esempi di relazioni:</p>
        <ul>
            <li>Impiegato (0,1) ↔︎ Dirige ↔︎ Progetto (1,1)</li>
            <li>Persona (0,N) ↔︎ Propriet&agrave; ↔︎ Automobile (0,1)</li>
            <li>Libro (1,M) ↔︎ Scritto ↔︎ Autore (1,N)</li>
        </ul>"
];
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quaderno di Informatica</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        nav {
            background-color: #333;
            padding: 10px 0;
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        nav ul li {
            display: inline;
            margin-right: 20px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }
        nav ul li a:hover {
            text-decoration: underline;
        }
        main {
            padding: 20px;
            background-color: white;
            max-width: 800px;
            margin: 20px auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        button {
            background-color: #4a6d8c;
            color: white;
            border: none;
            padding: 10px 20px;
            margin-top: 20px;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover {
            background-color: #4a6d8c;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="?pagina=home">Home</a></li>
            <li><a href="?pagina=cardinalita">Cardinalit&agrave;</a></li>
            <li><a href="?pagina=tipologie">Tipologie</a></li>
            <li><a href="?pagina=esempi">Esempi</a></li>
        </ul>
    </nav>
    <main>
        <?php echo $contenuti[$pagina]; ?>
    </main>
    <div style="text-align: center;">
        <button onclick="window.location.href='index.html'">Torna al sommario</button>
    </div>
</body>
</html>
