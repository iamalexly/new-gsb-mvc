<?php

/**
 * Vue de l'accueil de l'application
 *
 * @author Alexandre Lebailly <http://iamalex.fr>
 */

/** @var char $appTitle Titre de l'application */
$appTitle = "Accueil";

/** Enregistrement du contenu de la vue pour insertion dans la Template de l'application */
ob_start();

?>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Bienvenue <?= $visiteurDetails['prenom'] . " " . $visiteurDetails['nom']; ?></h1>
        <p class="lead">Cette application a pour but de gérer des fiches de frais d'employés.<br />
            Vous pouvez participer à l'amélioration de ce projet sur <a href="https://github.com/iamalexly/new-gsb-mvc/" target="_blank">GitHub</a>.</p>
    </div>
</div>

<div class="container" style="margin-bottom: 50px;">
    <div class="row">

        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" style="margin-bottom: 25px;">
            <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="home">Profil</a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="profile">Paramètres</a>
            </div>
        </div>

        <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
            <?php
            /** Si une erreur existe, on l'affiche */
            if (!empty($_SESSION['errors'])) {

                ?>

                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= $_SESSION['errors'][0]; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <?php

            } elseif (!empty($_SESSION['success'])) { /** Si un succés existe, on l'affiche */

                ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $_SESSION['success'][0]; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php

            }

            ?>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                    <div class="card">
                        <div class="card-body">
                            <h3><u>Informations du compte</u></h3><br />
                            <?php require ('views/homeInfosVisiteur.php'); ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                    <div class="card">
                        <div class="card-body">
                            <h3><u>Paramètres du compte</u></h3><br />
                            <?php require ('views/homeParametresVisiteur.php'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

<?php

$content = ob_get_clean();

require ('views/template.php');

?>
