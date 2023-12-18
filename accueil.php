<?php
// Récupérer la page demandée depuis l'URL
$page = isset($_GET['page']) ? $_GET['page'] : 'Accueil';

require_once("yaml/yaml.php");
$data=yaml_parse_file('contenu.yaml');
//print_array($data);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nathan GASTON</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Agbalumo&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hedvig+Letters+Serif:opsz@12..24&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/accueil.css">
    <link rel="stylesheet" href="css/navigation.css">
    <script src="https://www.google.com/recaptcha/api.js"></script>
</head>

<body>

    <!-- Barre de navigation -->
    <div class="navbar">
        <!-- logo de mon site en haut à gauche -->
        <a class="logo" href="https://github.com/NathanGaston">
            <img src="img/silent-hill.png" width="65" height="65">
        </a>
        <ul class="nav-buttons">
            <li <?php echo $page === 'Accueil' ? 'class="active"' : ''; ?>><a href="?page=Accueil">Accueil</a></li>
            <li <?php echo $page === 'APropos' ? 'class="active"' : ''; ?>><a href="?page=APropos">À propos</a></li>
            <li <?php echo $page === 'Competences' || $page === 'Competences-page2' ? 'class="active"' : ''; ?>><a href="?page=Competences">Compétences</a></li>
            <li <?php echo $page === 'Experience' ? 'class="active"' : ''; ?>><a href="?page=Experience">Expériences</a></li>
            <li <?php echo $page === 'Formations' ? 'class="active"' : ''; ?>><a href="?page=Formations">Formations</a></li>
            <li <?php echo $page === 'Contact' ? 'class="active"' : ''; ?>><a href="?page=Contact">Contact</a></li>
        </ul>
        </ul>
    </div>

    <!-- Affichage de la section correspondante -->
    <?php
    // Récupérer la page demandée depuis l'URL
    $page = isset($_GET['page']) ? $_GET['page'] : 'Accueil';

    // Afficher la section correspondante
    switch ($page) {
        case 'APropos':
            include('sections/APropos.php');
            break;
        case 'Competences':
            include('sections/Competences.php');
            break;
        case 'Competences-page2':
            include('sections/Competences-page2.php');
            break;
        case 'Competences-page2':
            include('sections/Competences-page2.php');
            break;
        case 'Experience':
            include('sections/Experience.php');
            break;
        case 'Formations':
            include('sections/Formations.php');
            break;
        case 'Contact':
            include('sections/Contact.php');
            break;
        default:
            include('sections/Accueil.php');
            break;
    }
    ?>

    <footer id="footer">
        <div id="buttons">
            <ul>
                <li><a href="?page=MentionsLegales">Mentions Légales</a></li>
                <li>●</li>
                <li><a href="?page=ReseauxSociaux">Réseaux Sociaux</a></li>
                <li>●</li>
                <li><a href="?page=Contact">Contacts</a></li>
            </ul>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const navButtons = document.querySelectorAll('.nav-buttons li');

            navButtons.forEach(function (button) {
                button.addEventListener('click', function () {
                    // Supprime la classe 'active' de tous les boutons
                    navButtons.forEach(function (btn) {
                        btn.classList.remove('active');
                    });

                    // Ajoute la classe 'active' au bouton cliqué
                    this.classList.add('active');

                    document.body.classList.add('fade');

                    setTimeout(function () {
                        document.body.classList.remove('fade');
                    }, 1500);
                });
            });
        });
    </script>
</body>
</html>