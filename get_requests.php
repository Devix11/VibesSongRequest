<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista Richieste</title>
    <!-- Aggiungi il collegamento a Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head><body>
<?php
// Connessione al database MySQL
$dbConnection = new mysqli('localhost', 'phpmyadmin', 'ciaone11', 'canzoni');
if ($dbConnection->connect_error) {
    die('Errore nella connessione al database: ' . $dbConnection->connect_error);
}

// Ottieni tutte le richieste dal database
$sql = 'SELECT * FROM richieste';
$result = $dbConnection->query($sql);

// Apri la tabella all'inizio del codice
echo '<table class="table-auto bg-cyan-500">';
if ($result->num_rows > 0) {
    // Inizia il ciclo foreach per le righe dei risultati
    foreach ($result as $row) {
        // Ottieni il numero di "likes" da questa riga
        $likes = $row['likes'];
        
        // Stampa l'intestazione della tabella
        echo '<thead>';
        echo '<tr>';
        echo '<th><a style="color:black">' . $row['titolo'] . ' - ' . $row['artista'] .'</a></th>';
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

<!-- Aggiungi il collegamento a Bootstrap JavaScript e jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

