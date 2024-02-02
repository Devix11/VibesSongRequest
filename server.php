<?php
if (isset($_POST['submit'])) {

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
} else {
    // L'utente non ha cliccato sul link Instagram, non puoi processare la richiesta
    echo 'Per favore, clicca sul link Instagram per seguire Vibes Padova.';
}   

        header('Location: requests.php');
        exit;

    $stmt->close();
    $dbConnection->close();
}
?>
