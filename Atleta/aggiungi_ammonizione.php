<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ID_gara = $_POST['ID_gara'];
    $ID_atleta = $_POST['ID_atleta'];

    $sql = "INSERT INTO Ammonizioni (ID_gara, ID_atleta) 
            VALUES ('$ID_gara', '$ID_atleta')";

    if ($conn->query($sql) === TRUE) {
        echo "Ammonizione aggiunta con successo!";
    } else {
        echo "Errore: " . $conn->error;
    }

    $conn->close();
}
?>
<br><a href="index.php">Torna alla lista delle gare</a>
