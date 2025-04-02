<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $citta = $_POST['citta'];
    $data = $_POST['data'];

    $sql = "INSERT INTO Gare (nome, citta, data) 
            VALUES ('$nome', '$citta', '$data')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuova gara aggiunta con successo!";
    } else {
        echo "Errore: " . $conn->error;
    }

    $conn->close();
}
?>
<br><a href="index.php">Torna alla lista delle gare</a>
