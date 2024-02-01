<?php
header('Access-Control-Allow-Origin: http://vibes-internal.mrfreex.net:3339');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: Content-Type, Authorization');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $postData = file_get_contents('php://input');
    $requestData = json_decode($postData, true);

    if (empty($requestData)) {
        http_response_code(400);
        echo json_encode(['success' => false, 'error' => 'Dati del modulo mancanti o non validi']);
        exit;
    }

    $songTitle = $requestData['songTitle'];
    $artist = $requestData['artist'];

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
        echo json_encode(['success' => true, 'message' => 'Richiesta aggiunta con successo']);
    } else {
        echo json_encode(['success' => false, 'error' => 'Errore nell\'inserimento della richiesta']);
    }

    $stmt->close();
    $dbConnection->close();
} else {
    http_response_code(405);
    echo json_encode(['success' => false, 'error' => 'Metodo non consentito']);
}
?>
