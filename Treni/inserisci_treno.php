<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero_treno = $_POST['numero_treno'];
    $stazione_partenza = $_POST['stazione_partenza'];
    $orario_partenza = $_POST['orario_partenza'];
    $stazione_arrivo = $_POST['stazione_arrivo'];
    $orario_arrivo = $_POST['orario_arrivo'];

    $sql = "INSERT INTO Treni (numero_treno, stazione_partenza, orario_partenza, stazione_arrivo, orario_arrivo) 
            VALUES ('$numero_treno', '$stazione_partenza', '$orario_partenza', '$stazione_arrivo', '$orario_arrivo')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuovo treno aggiunto con successo!";
    } else {
        echo "Errore: " . $conn->error;
    }

    $conn->close();
}
?>
<br><a href="index.php">Torna alla lista</a>
