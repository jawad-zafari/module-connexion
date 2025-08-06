<?php 
include 'config.php';

if (!isset($_SESSION['login']) || $_SESSION['login'] != 'admin') {
    header("Location: connexion.php");
    exit();
}

$users = $bdd->query("SELECT * FROM utilisateurs")->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Administration</h1>
            <nav>
                <a href="index.php">Accueil</a>
                <a href="profil.php">Profil</a>
                <a href="logout.php">Déconnexion</a>
            </nav>
        </div>
    </header>

    <main class="container">
        <h2>Liste des utilisateurs</h2>
        
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Login</th>
                        <th>Prénom</th>
                        <th>Nom</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?php echo $user['id']; ?></td>
                            <td><?php echo $user['login']; ?></td>
                            <td><?php echo $user['prenom']; ?></td>
                            <td><?php echo $user['nom']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>
