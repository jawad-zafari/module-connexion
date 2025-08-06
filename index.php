<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Module Connexion</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Module Connexion</h1>
            <nav>
                <?php if(isset($_SESSION['login'])): ?>
                    <a href="profil.php">Profil</a>
                    <a href="logout.php">Déconnexion</a>
                <?php else: ?>
                    <a href="connexion.php">Connexion</a>
                    <a href="inscription.php">Créer un compte</a>
                <?php endif; ?>
                <?php if(isset($_SESSION['login']) && $_SESSION['login'] == 'admin'): ?>
                    <a href="admin.php">Admin</a>
                <?php endif; ?>
            </nav>
        </div>
    </header>

    <main class="container01">
        <section>
            <h2>Bienvenue sur mon site</h2>
            <p>Ceci est un module de connexion simple avec PHP et MySQL.</p>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>Projet Module Connexion</p>
            <p><a href="https://github.com/jawad-zafari/module-connexion" target="_blank">Lien GitHub</a></p>
        </div>
    </footer>
</body>
</html>
