<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserisci Richiesta Canzone</title>
    <!-- Collegamento a Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-black text-white">
    <section class="hero bg-red-500 h-screen">
        <div class="hero-body">
            <div class="container mx-auto text-center">
                <h1 class="text-3xl font-bold mt-16">Inserisci Richiesta Canzone</h1>
                <p class="mt-4">Per favore, clicca su <a href="https://www.instagram.com/vibespadova/" target="_blank" id="instagramLink" class="text-blue-500">questo link</a> per seguire Vibes Padova su Instagram.</p>
                <!-- Checkbox "HAI CLICCATO IL LINK INSTAGRAM" -->
                <form method="post" action="server.php" class="bg-white p-8 mt-8 rounded-lg shadow-lg max-w-md mx-auto">
    <div class="mb-4">
        <label for="songTitle" class="block text-sm font-bold mb-2 text-black">Titolo della Canzone:</label>
        <input type="text" id="songTitle" name="songTitle" class="w-full border rounded-lg py-2 px-3 focus:outline-none focus:border-red-500" required>
    </div>
    
    <div class="mb-4">
        <label for="artist" class="block text-sm font-bold mb-2 text-black">Artista:</label>
        <input type="text" id="artist" name="artist" class="w-full border rounded-lg py-2 px-3 focus:outline-none focus:border-red-500" required>
    </div>
    
    <div class="mb-4">
        <label for="instagramButton" class="block text-black">
            <input type="checkbox" id="instagramButton" name="instagramButton" required>
            Hai cliccato il link Instagram?
        </label>
    </div>
</form>

                    
                    <div class="mb-4">
                        <button type="submit" id="submitButton" name="submit" class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-red-600 transition duration-300">Invia Richiesta</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <footer class="bg-white text-black text-center py-4">
        <div class="container mx-auto">
            <p>&copy; 2024 Vibes Events</p>
        </div>
    </footer>
</body>
</html>
