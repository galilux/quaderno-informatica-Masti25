<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Selezione Alunni</title>
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
   <a href="index.html" class="back-button">Torna al indietro</a>
   <a href="../index.html" class="back-button">Torna al Sommario</a>
</div>
</body>
</html>
