<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $descrizione = $_POST['descrizione'];
    $citta = $_POST['citta'];
    $nazione = $_POST['nazione'];

    $sql = "INSERT INTO Squadre (descrizione, citta, nazione) 
            VALUES ('$descrizione', '$citta', '$nazione')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuova squadra aggiunta con successo!";
    } else {
        echo "Errore: " . $conn->error;
    }

    $conn->close();
}
?>
<br><a href="index.php">Torna alla lista delle squadre</a>
