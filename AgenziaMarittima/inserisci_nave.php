<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $nazionalita = $_POST['nazionalita'];

    $sql = "INSERT INTO Navi (nome, nazionalita) VALUES ('$nome', '$nazionalita')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuova nave aggiunta con successo!";
    } else {
        echo "Errore: " . $conn->error;
    }

    $conn->close();
}
?>
<br><a href="index.php">Torna alla lista delle Navi</a>
