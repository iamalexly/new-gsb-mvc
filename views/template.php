<?php

/**
 * Template de base de l'application
 *
 * @author Alexandre Lebailly <http://iamalex.fr>
 */

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="public/css/bootstrap.css">
    <link rel="stylesheet" href="public/css/gsb.css">

    <title>GSBFrais - <?= $appTitle; ?></title>
</head>
<body>
<?php

/** On regarde si l'utilisateur est connecté */
if (isset($_SESSION['status'])) {

    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">

            <a class="navbar-brand" href="index.php?to=home">GSBFrais</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?to=home">Accueil</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Fiche des frais
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="index.php?to=mesFichesFrais">Mes fiches de frais</a>
                            <a class="dropdown-item" href="#">Saisie de fiches de frais</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?to=logout">Déconnexion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php

}

?>

<?= $content; ?>

<script src="public/js/jquery-3.3.1.min.js"></script>
<script src="public/js/bootstrap.js"></script>
</html>