<?php
$servername = "localhost";
$username = "root"; // Modifica se necessario
$password = ""; // Modifica se necessario
$dbname = "AtleticaDB";

// Creazione connessione
$conn = new mysqli($servername, $username, $password, $dbname);

// Controllo connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}
?>
