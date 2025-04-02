<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codice_fiscale = $_POST['codice_fiscale'];
    $nominativo = $_POST['nominativo'];
    $indirizzo = $_POST['indirizzo'];
    $città = $_POST['città'];
    $numero_telefono = $_POST['numero_telefono'];

    $sql = "INSERT INTO Clienti (codice_fiscale, nominativo, indirizzo, città, numero_telefono) 
            VALUES ('$codice_fiscale', '$nominativo', '$indirizzo', '$città', '$numero_telefono')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuovo cliente aggiunto con successo!";
    } else {
        echo "Errore: " . $conn->error;
    }

    $conn->close();
}
?>
<br><a href="index.php">Torna alla lista</a>
