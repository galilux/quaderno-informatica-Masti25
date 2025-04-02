Guida all'installazione e configurazione del progetto
Per eseguire il progetto, seguire i passaggi descritti di seguito:

1) Clonazione del repository
-Accedere al repository GitHub ([quaderno-informatica-Masti25](https://github.com/galilux/quaderno-informatica-Masti25.git)).
-Cliccare sul pulsante verde "<> Code" e selezionare l'opzione "Open with GitHub Desktop".
-Clonare il repository all'interno della directory: C:\xampp\htdocs
 
2) Avvio di XAMPP
-Avviare XAMPP e attivare i servizi Apache e MySQL cliccando su "Start".

3) Importazione del database
-Accedere a phpMyAdmin cliccando sul pulsante "Admin" nella sezione MySQL di XAMPP.
-Nel menu superiore, selezionare la scheda "Importa".
-Cliccare su "Scegli file", accedere al percorso: C:\xampp\htdocs\quaderno-informatica-Masti25\Database

4) Accesso alla pagina web
-Una volta completata l'importazione del database, è possibile accedere all'applicazione web tramite il seguente [URL](http://localhost/quaderno-informatica-Masti25):

5) Configurazione privilegi utente
-In phpMyAdmin, accedere alla scheda "Privilegi".
-Creare un nuovo utente con i seguenti parametri:
-Nome utente: Masti
-Password: Masti1234
-Concedere tutti i privilegi all'utente creato.

A questo punto, l'installazione e la configurazione del progetto sono completate e il sistema è pronto all'uso.

Versioe del progetto 1.2:
bug: Esercizio del libro 1,2,3 pag 182 probelemi di esecuzione. 
inserimento degli esercizi DB, normalizzazione, museo, Treni, Banca, Marittima, Atletal(work in progress), Vendite(work in progress)