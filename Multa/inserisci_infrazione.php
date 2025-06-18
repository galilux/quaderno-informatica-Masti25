<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = $_POST['data'];
    $matricola_agente = $_POST['matricola_agente'];
    $denominazione = $_POST['denominazione'];
    $importo = $_POST['importo'];
    $targa_auto = $_POST['targa_auto'];

    $sql = "INSERT INTO Infrazioni (data, matricola_agente, denominazione, importo, targa_auto) 
            VALUES ('$data', '$matricola_agente', '$denominazione', '$importo', '$targa_auto')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuova infrazione aggiunta con successo!";
    } else {
        echo "Errore: " . $conn->error;
    }

    $conn->close();
}
?>
<br><a href="index.php">Torna alla lista</a>
