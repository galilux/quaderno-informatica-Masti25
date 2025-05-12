<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Selezione Alunni</title>
</head>
<body>

<?php
$alunni = [
    "Abdelhamid" => "Mohamed",
    "Attia" => "Mahmoud",
    "Bisceglie" => "Leonardo",
    "Dibenedetto" => "Marco",
    "Draouch" => "Hajar",
    "Espinosa" => "Yvette",
    "Fantini" => "Andrea",
    "Fernando" => "Marco",
    "Martinez" => "Matteo",
    "Roselli" => "Alessio",
    "Salonga" => "Giuliana",
    "Wang Wei" => "Steve",
    "Zheng" => "Gianni" 
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selezionati = $_POST['alunni'] ?? [];

    echo "<div>";
    echo "<h3>Alunni Selezionati:</h3>";
    if (count($selezionati) > 0) {
        echo "<ul>";
        foreach ($selezionati as $cognome) {
            if (isset($alunni[$cognome])) {
                echo "<li><strong>$cognome</strong> - {$alunni[$cognome]}</li>";
            } 
        }
        
    }
    echo "</div>";
}
?>

<div>
    <h2>Seleziona gli alunni</h2>
    <form method="post" action="">
        <?php
        foreach ($alunni as $cognome => $nome) {
            echo "<input type='checkbox' name='alunni[]' value='$cognome'> $cognome $nome<br>";
        }
        ?>
        <br>
        <input type="submit" value="Invia">
    </form>
</div>
<br>
<div>
    <a href="index.html"><button>Home</button></a>
</div>
</body>
</html>
