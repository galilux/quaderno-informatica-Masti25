<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matricola = $_POST['matricola'];
    $nominativo = $_POST['nominativo'];

    $sql = "INSERT INTO Agenti (matricola, nominativo) 
            VALUES ('$matricola', '$nominativo')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuovo agente aggiunto con successo!";
    } else {
        echo "Errore: " . $conn->error;
    }

    $conn->close();
}
?>
<br><a href="index.php">Torna alla lista</a>
