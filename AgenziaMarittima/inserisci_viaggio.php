<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sigla = $_POST['sigla'];
    $data_partenza = $_POST['data_partenza'];
    $data_arrivo = $_POST['data_arrivo'];
    $porto_partenza_id = $_POST['porto_partenza_id'];
    $porto_arrivo_id = $_POST['porto_arrivo_id'];
    $capitano = $_POST['capitano'];
    $nave_id = $_POST['nave_id'];

    $sql = "INSERT INTO Viaggi (sigla, data_partenza, data_arrivo, porto_partenza_id, porto_arrivo_id, capitano, nave_id) 
            VALUES ('$sigla', '$data_partenza', '$data_arrivo', '$porto_partenza_id', '$porto_arrivo_id', '$capitano', '$nave_id')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuovo viaggio aggiunto con successo!";
    } else {
        echo "Errore: " . $conn->error;
    }

    $conn->close();
}
?>

<a href="index.php">Torna alla lista delle Navi</a>
