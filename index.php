<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserisci Richiesta Canzone</title>
    <!-- Collegamento a Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <header class="bg-blue-500 p-4 text-white text-center">
        <h1 class="text-2xl">Inserisci Richiesta Canzone</h1>
    </header>
    <main class="container mx-auto mt-8 p-4">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <p class="mb-4">Per favore, clicca su <a href="https://www.instagram.com/vibespadova/" target="_blank" id="instagramLink" class="text-blue-500">questo link</a> per seguire Vibes Padova su Instagram.</p>
            <!-- CHECKBOX "HAI CLICCATO IL LINK INSTAGRAM" -->
            <label for="instagramButton" class="block mb-2">Hai cliccato il link Instagram?</label>
            <input type="checkbox" id="instagramButton" name="instagramButton" required class="mb-4">
            <form method="post" action="server.php" class="space-y-4">
                <div class="flex flex-col">
                    <label for="songTitle" class="mb-1">Titolo della Canzone:</label>
                    <input type="text" id="songTitle" name="songTitle" required class="border rounded-lg py-2 px-3 focus:outline-none focus:border-blue-500">
                </div>
                <div class="flex flex-col">
                    <label for="artist" class="mb-1">Artista:</label>
                    <input type="text" id="artist" name="artist" required class="border rounded-lg py-2 px-3 focus:outline-none focus:border-blue-500">
                </div>
                <button type="submit" id="submitButton" name="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition duration-300">Invia Richiesta</button>
            </form>
        </div>
    </main>
    <footer class="bg-gray-300 text-center py-4">
        <p>&copy; 2024 Vibes Events</p>
    </footer>
</body>
</html>
