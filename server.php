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
    
    $stmt->execute();
    $stmt->close();
    $dbConnection->close();

    header('Location: requests.php');
    exit;
}
?>
