<?php
//pagina delete_request.php
// Connessione al database MySQL
$dbConnection = new mysqli('localhost', 'phpmyadmin', 'ciaone11', 'canzoni');

if ($dbConnection->connect_error) {
    die('Errore nella connessione al database: ' . $dbConnection->connect_error);
}

// Ottieni l'ID della richiesta da eliminare
$id = $_GET['id'];

// Esegui l'eliminazione della richiesta dal database
$sql = 'DELETE FROM richieste WHERE id = ?';
$stmt = $dbConnection->prepare($sql);
$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->close();
$dbConnection->close();

header('Location: admin.php');
exit;
?>