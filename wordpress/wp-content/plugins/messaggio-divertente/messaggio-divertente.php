<?php
/*
Plugin Name: Messaggio Divertente
Description: Mostra un messaggio divertente in fondo al sito.
Version: 1.0
Author: Il Tuo Nome
*/

add_action('wp_footer', 'mostra_messaggio_divertente');

function mostra_messaggio_divertente() {
    $frasi = [
        "Hai già scrollato troppo!",
        "Questo sito è meglio con una pizza 🍕",
        "Complimenti, hai trovato il fondo del sito!",
        "Sei ancora qui? Sei tenace!",
        "Powered by caffè ☕ e sogni."
    ];
    $frase = $frasi[array_rand($frasi)];
    echo "<p style='text-align:center; font-style:italic; margin-top:20px; color:gray;'>$frase</p>";
}
