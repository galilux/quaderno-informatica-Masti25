<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cognome = $_POST['cognome'];
    $nome = $_POST['nome'];
    $indirizzo = $_POST['indirizzo'];
    $cod_tiscale = $_POST['cod_tiscale'];
    $data_nascita = $_POST['data_nascita'];
    $sesso = $_POST['sesso'];

    $sql = "INSERT INTO Atleti (cognome, nome, indirizzo, cod_tiscale, data_nascita, sesso) 
            VALUES ('$cognome', '$nome', '$indirizzo', '$cod_tiscale', '$data_nascita', '$sesso')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuovo atleta aggiunto con successo!";
    } else {
        echo "Errore: " . $conn->error;
    }

    $conn->close();
}
?>
<br><a href="atleti.php">Torna alla lista degli atleti</a>
