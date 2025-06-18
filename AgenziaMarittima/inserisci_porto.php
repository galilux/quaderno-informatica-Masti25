<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $nazione = $_POST['nazione'];

    $sql = "INSERT INTO Porti (nome, nazione) VALUES ('$nome', '$nazione')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuovo porto aggiunto con successo!";
    } else {
        echo "Errore: " . $conn->error;
    }

    $conn->close();
}
?>

<a href="index.php">Torna alla lista delle Navi</a>
