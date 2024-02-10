<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Voyagez avec nous</title>
</head>
<body>
    <header>
        <h1>Bienvenue sur notre site de voyage</h1>
    </header>

    <main>
        <section class="search">
            <h2>Recherchez votre destination de rêve</h2>
            <form id="searchForm" action="search.php" method="GET">
                <input type="text" id="destinationInput" name="destination" placeholder="Entrez votre destination...">
                <button type="submit">Rechercher</button>
            </form>
        </section>

        <section class="popular-destinations">
            <h2>Destinations populaires</h2>
            <ul>
                <li><a href="destination.php?id=1">Paris</a></li>
                <li><a href="destination.php?id=2">New York</a></li>
                <li><a href="destination.php?id=3">Tokyo</a></li>
                <!-- Ajoutez d'autres destinations populaires ici -->
            </ul>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Voyagez avec nous</p>
    </footer>

    <script>
        // Validation du formulaire de recherche
        document.getElementById('searchForm').addEventListener('submit', function(event) {
            var destinationInput = document.getElementById('destinationInput');
            if (destinationInput.value.trim() === '') {
                event.preventDefault();
                alert('Veuillez entrer une destination valide.');
            }
        });
    </script>
</body>
</html>
