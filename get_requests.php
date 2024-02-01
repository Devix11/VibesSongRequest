<?php
// Connessione al database MySQL
$dbConnection = new mysqli('localhost', 'phpmyadmin', 'ciaone11', 'canzoni');
if ($dbConnection->connect_error) {
    die('Errore nella connessione al database: ' . $dbConnection->connect_error);
}

// Ottieni tutte le richieste dal database
$sql = 'SELECT * FROM richieste';
$result = $dbConnection->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $likes = $row['likes']; // Aggiungi questa riga per ottenere il numero di likes
        echo '<li>' . $row['titolo'] . ' - ' . $row['artista'] . ' - <i class="bi bi-hand-thumbs-up"></i>: ' . $likes . '</li>';
    }
} else {
    echo '<p>Nessuna richiesta trovata.</p>';
}

$dbConnection->close();
?>
