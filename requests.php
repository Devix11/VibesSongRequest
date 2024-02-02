<!DOCTYPE html>
<html lang="en">
<head class="bg-red-500">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Richieste</title>
    <!-- Collegamento a Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-red-500 text-white">
    <header class="bg-primary text-white text-center py-4 bg-red-500">
        <h1 class="text-3xl bg-red-500">Lista Richieste</h1>
    </header>
    <main class="bg-white p-8 mt-8 rounded-lg shadow-lg max-w-md mx-auto">
        <ul class="list-inside list-disc">
            <?php include('get_requests.php'); ?>
        </ul>
    </main>
    <footer class="bg-light text-center py-3">
        <p>&copy; 2024 Vibes Events</p>
    </footer>
</body>
</html>
