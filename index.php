<?php
session_start();

// Verifica se l'utente ha già seguito il profilo Instagram
$haSeguitoInstagram = isset($_SESSION['haSeguitoInstagram']) ? $_SESSION['haSeguitoInstagram'] : false;

// Verifica se l'utente ha cliccato sul link Instagram
if (isset($_POST['cliccatoSuInstagram'])) {
    $haSeguitoInstagram = true;
    $_SESSION['haSeguitoInstagram'] = true;
}

// Verifica se l'utente ha seguito il profilo Instagram
if (!$haSeguitoInstagram) {
    // Se l'utente non ha seguito il profilo Instagram, reindirizza alla pagina Instagram
    header('Location: https://www.instagram.com/vibespadova/');
    exit;
}

// Gestisci l'invio della richiesta qui
if (isset($_POST['songTitle']) && isset($_POST['artist'])) {
    // Recupera i dati dal modulo
    $songTitle = $_POST['songTitle'];
    $artist = $_POST['artist'];

    // Esegui l'aggiunta della richiesta al database
    // Inserisci qui il codice per l'aggiunta al database
    // ...

    // Reindirizza l'utente alla pagina delle richieste dopo l'invio
    header('Location: requests.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserisci Richiesta Canzone</title>
    <!-- Collegamento a Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-primary text-white text-center py-4">
        <h1>Inserisci Richiesta Canzone</h1>
    </header>
    <main class="container mt-4">
        <form method="post" action="index.php">
            <div class="form-group">
                <label for="songTitle">Titolo della Canzone:</label>
                <input type="text" id="songTitle" name="songTitle" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="artist">Artista:</label>
                <input type="text" id="artist" name="artist" class="form-control" required>
            </div>
            <a href="https://www.instagram.com/vibespadova/" target="_blank" onclick="verificaClicInstagram()">Seguici su Instagram</a>
            <button type="submit" class="btn btn-primary">Invia Richiesta</button>
        </form>
    </main>
    <footer class="bg-light text-center py-3">
        <p>&copy; 2024 Vibes Events</p>
    </footer>

    <!-- Collegamento a Bootstrap JavaScript e jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>  
</html>
