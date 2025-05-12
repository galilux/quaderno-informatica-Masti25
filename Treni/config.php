<?php
$servername = "localhost";
$username = "Masti"; // Modifica se necessario
$password = "Masti1234"; // Modifica se necessario
$dbname = "202425_5ia_abdelhamid_TVIDB";

// Creazione connessione
$conn = new mysqli($servername, $username, $password, $dbname);

// Controllo connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}
?>