<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Richieste</title>
    <!-- Aggiungi il collegamento a Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-primary text-white text-center py-4">
        <h1>Lista Richieste</h1>
    </header>
    <main class="container mt-4">
        <ul class="list-group">
            <?php include('get_requests.php'); ?>
        </ul>
    </main>
    <footer class="bg-light text-center py-3">
        <p>&copy; 2024 Il Tuo Sito Web</p>
    </footer>

    <!-- Aggiungi il collegamento a Bootstrap JavaScript e jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
