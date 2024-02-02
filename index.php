<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserisci Richiesta Canzone</title>
    <!-- Collegamento a Bulma CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>
<body>
    <section class="hero is-primary is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title">Inserisci Richiesta Canzone</h1>
                <p class="subtitle">Per favore, clicca su <a href="https://www.instagram.com/vibespadova/" target="_blank" id="instagramLink">questo link</a> per seguire Vibes Padova su Instagram.</p>
                <!-- Checkbox "HAI CLICCATO IL LINK INSTAGRAM" -->
                <form method="post" action="server.php" class="box">
                    <div class="field">
                        <label for="songTitle" class="label">Titolo della Canzone:</label>
                        <div class="control">
                            <input type="text" id="songTitle" name="songTitle" class="input" required>
                        </div>
                    </div>
                    
                    <div class="field">
                        <label for="artist" class="label">Artista:</label>
                        <div class="control">
                            <input type="text" id="artist" name="artist" class="input" required>
                        </div>
                    </div>
                    
                    <div class="field">
                        <label for="instagramButton" class="checkbox">
                            <input type="checkbox" id="instagramButton" name="instagramButton" required>
                            Hai cliccato il link Instagram?
                        </label>
                    </div>
                    
                    <div class="field">
                        <div class="control">
                            <button type="submit" id="submitButton" name="submit" class="button is-primary">Invia Richiesta</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="content has-text-centered">
            <p>&copy; 2024 Vibes Events</p>
        </div>
    </footer>
</body>
</html>
