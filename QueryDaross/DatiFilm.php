<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Dati film</title>
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
<div>
    <a href="index.html"><button>Home</button></a>
</div>
</body>
</html>
