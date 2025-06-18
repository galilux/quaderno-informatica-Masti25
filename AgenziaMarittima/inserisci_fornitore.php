<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $indirizzo = $_POST['indirizzo'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];

    $sql = "INSERT INTO Fornitori (nome, indirizzo, telefono, email) 
            VALUES ('$nome', '$indirizzo', '$telefono', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuovo fornitore aggiunto con successo!";
    } else {
        echo "Errore: " . $conn->error;
    }

    $conn->close();
}
?>

<a href="index.php">Torna alla lista delle Navi</a>
