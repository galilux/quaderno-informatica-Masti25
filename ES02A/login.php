<?php
// Dati di login predefiniti
$utente = "Masti25";
$password = "1234";

// Recupero dei dati inviati dal form
$nomeUtente = $_POST['username'] ?? '';
$psw = $_POST['password'] ?? '';

// Controllo delle credenziali
if ($nomeUtente === $utente && $psw === $password) {
    echo "<h1>Benvenuto, $nomeUtente!</h1>";
    echo "<p>Hai effettuato l'accesso alla pagina riservata.</p>";
    echo "<a href='../index.html'>Torna alla home</a>";
} else {
    echo "<h1>Accesso negato</h1>";
    echo "<p>Le credenziali inserite non sono corrette.</p>";
    echo "<a href='index.html'>Torna al login</a>";
}
?>
