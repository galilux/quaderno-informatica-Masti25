<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $specie = $_POST['specie'];
    $dimensioni = $_POST['dimensioni'];
    $peso = $_POST['peso'];
    $stato_conservazione = $_POST['stato_conservazione'];
    $valore_patrimoniale = $_POST['valore_patrimoniale'];
    $data_ritrovamento = $_POST['data_ritrovamento'];
    $localita_ritrovamento = $_POST['localita_ritrovamento'];
    $latitudine = $_POST['latitudine'];
    $longitudine = $_POST['longitudine'];
    $luogo_archiviazione = $_POST['luogo_archiviazione'];

    $sql = "INSERT INTO Fossili (specie, dimensioni, peso, stato_conservazione, valore_patrimoniale, 
            data_ritrovamento, localita_ritrovamento, latitudine, longitudine, luogo_archiviazione) 
            VALUES ('$specie', '$dimensioni', '$peso', '$stato_conservazione', '$valore_patrimoniale', 
                    '$data_ritrovamento', '$localita_ritrovamento', '$latitudine', '$longitudine', '$luogo_archiviazione')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuovo fossile aggiunto con successo!";
    } else {
        echo "Errore: " . $conn->error;
    }

    $conn->close();
}
?>
<br><a href="index.php">Torna alla lista</a>
