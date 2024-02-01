<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserisci Richiesta Canzone</title>
</head>
<body>
    <header>
        <h1>Inserisci Richiesta Canzone</h1>
    </header>
    <main>
        <p>Per favore, clicca su <a href="https://www.instagram.com/vibespadova/" target="_blank" id="instagramLink">questo link</a> per seguire Vibes Padova su Instagram.</p>
        <!-- CHEXCKBOX "HAI CLICCATO IL LINK INSTAGRAM" -->
        <input type="checkbox" id="instagramButton" name="instagramButton" required>
        <form method="post" action="server.php"> <!-- Il modulo invierà i dati al server.php -->
            <label for="songTitle">Titolo della Canzone:</label>
            <input type="text" id="songTitle" name="songTitle" required>
            
            <label for="artist">Artista:</label>
            <input type="text" id="artist" name="artist" required>
            
            <button type="submit" id="submitButton" name="submit">Invia Richiesta</button>
        </form>        
    </main>
    <footer>
        <p>&copy; 2024 Vibes Events</p>
    </footer>
</body>
</html>
