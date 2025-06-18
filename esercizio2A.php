<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
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

        ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
        }

        ul li {
            margin: 10px 0;
        }

        a {
            text-decoration: none;
            color: #4a6d8c;
            font-size: 18px;
        }

        a:hover {
            color: #2a3d66;
        }

        .buttons {
            text-align: center;
            margin-top: 20px;
        }

        button {
            padding: 10px 20px;
            margin: 5px;
            border: none;
            border-radius: 5px;
            background-color: #4a6d8c;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2a3d66;
        }
    </style>
</head>
<body>
    <h1>Benvenuto nella mia Home Page</h1>
    <a href="ES02A/index.html">ES02A - Accesso a pagina riservata</a>
    <br>
    <p>La pagina è una Home Page semplice con un messaggio di benvenuto ("Benvenuto nella mia Home Page").
    In fondo alla pagina c'è un link che porta l'utente a un'altra pagina chiamata "index.html", situata nella sottocartella "/ES02A". Questo link potrebbe essere per accedere a una pagina riservata.</p>
    <div class="buttons">
        <button onclick="window.location.href='esercizio2.html'">Torna indietro</button>
        <button onclick="window.location.href='index.html'">Torna al sommario</button>
    </div>
</body>
</html>
