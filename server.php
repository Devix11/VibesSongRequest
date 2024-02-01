<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $songTitle = $_POST['songTitle'];
    $artist = $_POST['artist'];

    // Connessione al database MySQL
    $dbConnection = new mysqli('localhost', 'phpmyadmin', 'ciaone11', 'canzoni');
    if ($dbConnection->connect_error) {
        die('Errore nella connessione al database: ' . $dbConnection->connect_error);
    }

    // Esegui l'aggiunta della richiesta al database
    $sql = 'INSERT INTO richieste (titolo, artista) VALUES (?, ?)';
    $stmt = $dbConnection->prepare($sql);
    $stmt->bind_param('ss', $songTitle, $artist);

    if ($stmt->execute()) {
        echo 'Richiesta aggiunta con successo';
    } else {
        echo 'Errore nell\'inserimento della richiesta';
    }

    $stmt->close();
    $dbConnection->close();
}
?>
