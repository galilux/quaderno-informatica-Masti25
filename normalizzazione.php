<?php
$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'home';

$contenuti = [
    'home' => "<h1>Normalizzazione dei Database</h1>
        <p>Seleziona una forma normale dal menu per approfondire.</p>",

    '1nf' => "<h2>Prima Forma Normale (1NF)</h2>
        <p>Un database è in <strong>1NF</strong> se:</p>
        <ul>
            <li>Tutti gli attributi contengono valori atomici (indivisibili).</li>
            <li>Ogni colonna ha un tipo di dato omogeneo.</li>
            <li>Ogni riga è identificata in modo univoco (es. con una chiave primaria).</li>
        </ul>
        <h3>📌 Esempio:</h3>
        <p><strong>Non in 1NF:</strong> Un cliente può avere più numeri di telefono nello stesso campo.</p>
        <pre>
            | Cliente_ID | Nome   | Telefono          |
            |-----------|--------|-------------------|
            | 1         | Marco  | 123456, 789012    |
        </pre>
        <p><strong>In 1NF:</strong> Separiamo i numeri di telefono in righe diverse.</p>
        <pre>
            | Cliente_ID | Nome   | Telefono  |
            |-----------|--------|----------|
            | 1         | Marco  | 123456   |
            | 1         | Marco  | 789012   |
        </pre>",

    '2nf' => "<h2>Seconda Forma Normale (2NF)</h2>
        <p>Un database è in <strong>2NF</strong> se:</p>
        <ul>
            <li>È già in 1NF.</li>
            <li>Ogni attributo non chiave dipende completamente dalla chiave primaria.</li>
        </ul>
        <h3>📌 Esempio:</h3>
        <p><strong>Non in 2NF:</strong> La tabella degli ordini include dati sui prodotti.</p>
        <pre>
            | Ordine_ID | Prodotto_ID | Cliente_Nome | Prodotto_Nome | Prezzo |
            |----------|------------|-------------|--------------|--------|
            | 1        | 101        | Marco       | Libro A      | 15.00  |
        </pre>
        <p><strong>In 2NF:</strong> Separiamo prodotti e ordini.</p>
        <pre>
            **Tabella Ordini**
            | Ordine_ID | Cliente_Nome |
            |----------|-------------|
            | 1        | Marco       |

            **Tabella Prodotti**
            | Prodotto_ID | Prodotto_Nome | Prezzo |
            |-----------|--------------|--------|
            | 101       | Libro A      | 15.00  |
        </pre>",

    '3nf' => "<h2>Terza Forma Normale (3NF)</h2>
        <p>Un database è in <strong>3NF</strong> se:</p>
        <ul>
            <li>È già in 2NF.</li>
            <li>Gli attributi non chiave dipendono solo dalla chiave primaria (niente dipendenze transitive).</li>
        </ul>
        <h3>📌 Esempio:</h3>
        <p><strong>Non in 3NF:</strong> Il CAP dipende dalla città, non dal Cliente_ID.</p>
        <pre>
            | Cliente_ID | Nome   | Città  | CAP   |
            |----------|-------|------|------|
            | 1        | Marco | Roma | 00100 |
        </pre>
        <p><strong>In 3NF:</strong> Creiamo una tabella separata per le città.</p>
        <pre>
            **Tabella Clienti**
            | Cliente_ID | Nome   | Città_ID |
            |----------|-------|---------|
            | 1        | Marco | 1       |

            **Tabella Città**
            | Città_ID | Città  | CAP   |
            |--------|------|------|
            | 1      | Roma | 00100 |
        </pre>",

    'bcnf' => "<h2>Forma Normale di Boyce-Codd (BCNF)</h2>
        <p>Un database è in <strong>BCNF</strong> se:</p>
        <ul>
            <li>È già in 3NF.</li>
            <li>Ogni determinante è una super chiave (elimina dipendenze anomale).</li>
        </ul>
        <h3>📌 Esempio:</h3>
        <p><strong>Non in BCNF:</strong> Un docente può insegnare solo in una specifica aula.</p>
        <pre>
            | Docente | Corso  | Aula |
            |--------|------|------|
            | Rossi  | Matematica | 101  |
            | Verdi  | Informatica | 102  |
        </pre>
        <p><strong>In BCNF:</strong> Separiamo docenti e corsi.</p>
        <pre>
            **Tabella Docenti_Aule**
            | Docente | Aula |
            |--------|------|
            | Rossi  | 101  |

            **Tabella Corsi**
            | Corso       | Docente |
            |-----------|--------|
            | Matematica | Rossi  |
        </pre>"
];
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Normalizzazione DB</title>
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
            background-color: #3a5a7c;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="?pagina=home">Home</a></li>
            <li><a href="?pagina=1nf">1NF</a></li>
            <li><a href="?pagina=2nf">2NF</a></li>
            <li><a href="?pagina=3nf">3NF</a></li>
            <li><a href="?pagina=bcnf">BCNF</a></li>
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
