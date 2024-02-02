<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserisci Richiesta Canzone</title>
    <!-- Collegamento a Tailwind CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-white text-black">
    <section class="min-h-screen flex flex-col justify-center items-center">
        <div class="max-w-md w-full p-6 bg-red-500 rounded-lg shadow-lg">
            <h1 class="text-2xl font-bold mb-4">Inserisci Richiesta Canzone</h1>
            <p class="text-sm mb-4">Per favore, clicca su <a href="https://www.instagram.com/vibespadova/" target="_blank" id="instagramLink" class="text-blue-500 underline">questo link</a> per seguire Vibes Padova su Instagram.</p>
            <!-- Checkbox "HAI CLICCATO IL LINK INSTAGRAM" -->
            <form method="post" action="server.php">
                <div class="mb-4">
                    <label for="songTitle" class="block text-sm font-medium">Titolo della Canzone:</label>
                    <input type="text" id="songTitle" name="songTitle" class="mt-1 p-2 w-full border border-gray-300 rounded-md" required>
                </div>
                <div class="mb-4">
                    <label for="artist" class="block text-sm font-medium">Artista:</label>
                    <input type="text" id="artist" name="artist" class="mt-1 p-2 w-full border border-gray-300 rounded-md" required>
                </div>
                <div class="mb-4">
                    <label for="instagramButton" class="block text-sm font-medium">
                        <input type="checkbox" id="instagramButton" name="instagramButton" required class="mr-2">
                        Hai cliccato il link Instagram?
                    </label>
                </div>
                <div class="mb-4">
                    <button type="submit" id="submitButton" name="submit" class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 focus:outline-none focus:bg-red-700">Invia Richiesta</button>
                </div>
            </form>
        </div>
    </section>
    <footer class="text-center py-4 text-sm text-gray-500">
        &copy; 2024 Vibes Events
    </footer>
</body>
</html>
