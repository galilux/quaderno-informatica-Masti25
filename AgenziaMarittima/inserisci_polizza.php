<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codice = $_POST['codice'];
    $tipo_merce = $_POST['tipo_merce'];
    $tipo_colli = $_POST['tipo_colli'];
    $numero_colli = $_POST['numero_colli'];
    $peso_totale = $_POST['peso_totale'];
    $fornitore_id = $_POST['fornitore_id'];
    $cliente_id = $_POST['cliente_id'];
    $viaggio_id = $_POST['viaggio_id'];

    $sql = "INSERT INTO Polizze (codice, tipo_merce, tipo_colli, numero_colli, peso_totale, fornitore_id, cliente_id, viaggio_id) 
            VALUES ('$codice', '$tipo_merce', '$tipo_colli', '$numero_colli', '$peso_totale', '$fornitore_id', '$cliente_id', '$viaggio_id')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuova polizza aggiunta con successo!";
    } else {
        echo "Errore: " . $conn->error;
    }

    $conn->close();
}
?>

<a href="index.php">Torna alla lista delle Navi</a>
