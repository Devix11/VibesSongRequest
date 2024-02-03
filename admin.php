<?php
//questa è una pagina admin, è uguale alla pagina request, ma qui le richieste si possono eliminare dal database
// Connessione al database MySQL
$dbConnection = new mysqli('localhost', 'phpmyadmin', 'ciaone11', 'canzoni');
if ($dbConnection->connect_error) {
    die('Errore nella connessione al database: ' . $dbConnection->connect_error);
}

// Ottieni tutte le richieste dal database
$sql = 'SELECT * FROM richieste';
$result = $dbConnection->query($sql);

// Apri la tabella all'inizio del codice
echo '<table class="table-auto">';
if ($result->num_rows > 0) {
    // Inizia il ciclo foreach per le righe dei risultati
    foreach ($result as $row) {
        // Ottieni il numero di "likes" da questa riga
        $likes = $row['likes'];
        
        // Stampa l'intestazione della tabella
        echo '<thead>';
        echo '<tr>';
        echo '<th><a style="color:black">' . $row['titolo'] . ' - ' . $row['artista'] .'</a></th>';
        echo '<th><a href="delete_request.php?id=' . $row['id'] . '" class="text-red-500">Elimina</a></th>';
        echo '</tr>';
        echo '</thead>';
    }
    // Chiudi la tabella alla fine del ciclo
    echo '</table>';
} else {
    echo '<p>Nessuna richiesta trovata.</p>';
}


$dbConnection->close();
?>