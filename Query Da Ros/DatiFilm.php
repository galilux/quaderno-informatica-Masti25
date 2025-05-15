<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Dati film</title>
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
        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        form {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"], input[type="number"], input[type="date"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #2a3d66;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
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
    

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $regista = $_POST['regista'] ?? '';
    $titolo = $_POST['titolo'] ?? '';
    $nazione = $_POST['nazione'] ?? '';
    $anno = $_POST['anno'] ?? '';
    $generi = $_POST['genere'] ?? [];

    echo "<div>";
    echo "<h3>Dati Inseriti:</h3>";
    echo "<strong>Regista:</strong> $regista<br>";
    echo "<strong>Titolo:</strong> $titolo<br>";
    echo "<strong>Nazione:</strong> $nazione<br>";
    echo "<strong>Anno:</strong> $anno<br>";
    echo "<strong>Genere:</strong> " . implode(", ", $generi) . "<br>";
    echo "</div>";
}
?>

<div>
    <h2>Dati film</h2>
    <form method="post" action="">
        <label for="regista">Regista:</label>
        <input type="text" name="regista" id="regista">
<br>
        <label for="titolo">Titolo:</label>
        <input type="text" name="titolo" id="titolo">
<br>
        <label for="nazione">Nazione:</label>
        <input type="text" name="nazione" id="nazione">
<br>
        <label for="anno">Anno:</label>
        <input type="text" name="anno" id="anno">
<br>
        <div>
            <strong>Genere:</strong><br>
            <input type="checkbox" name="genere[]" value="Drammatico"> Drammatico<br>
            <input type="checkbox" name="genere[]" value="Thriller"> Thriller<br>
            <input type="checkbox" name="genere[]" value="Horror"> Horror<br>
            <input type="checkbox" name="genere[]" value="Western"> Western<br>
            <input type="checkbox" name="genere[]" value="Commedia"> Commedia<br>
            <input type="checkbox" name="genere[]" value="Fantascienza"> Fantascienza<br>
            <input type="checkbox" name="genere[]" value="Animazione"> Animazione<br>
        </div>

        <div>
            <input type="submit" value="Invia">
            <input type="reset" value="Cancella">
        </div>
    </form>
</div>
<br>
    <a href="index.html" class="back-button">Torna al indietro</a>
    <a href="../index.html" class="back-button">Torna al Sommario</a>
</body>
</html>
