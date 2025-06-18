<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codice = $_POST['codice'];
    $nome = $_POST['nome'];
    $città = $_POST['città'];
    $patrimonio_totale = $_POST['patrimonio_totale'];

    $sql = "INSERT INTO Filiali (codice, nome, città, patrimonio_totale) 
            VALUES ('$codice', '$nome', '$città', '$patrimonio_totale')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuova filiale aggiunta con successo!";
    } else {
        echo "Errore: " . $conn->error;
    }

    $conn->close();
}
?>
<br><a href="index.php">Torna alla lista</a>
