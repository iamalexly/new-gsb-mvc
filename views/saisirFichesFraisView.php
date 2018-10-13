<?php

/**
 * Vue de "Saisir fiches de frais" de l'application
 *
 * @author Alexandre Lebailly <http://iamalex.fr>
 */

/** @var char $appTitle Titre de l'application */
$appTitle = "Saisir des fiches de frais";

/** Enregistrement du contenu de la vue pour insertion dans la Template de l'application */
ob_start();

?>

<div class="container" style="margin-top: 35px; margin-bottom: 50px;">
    <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" style="margin-bottom: 25px;">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Saisir une fiche de frais hors forfait</a>
                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Saisir une fiche de frais forfait</a>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-not-include">
                        <div class="card">
                            <div class="card-body">
                                <?php
                                /** Si un succés existe, on l'affiche */
                                if (!empty($_SESSION['success'])) {

                                    ?>

                                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                        <?= $_SESSION['success'][0]; ?>
                                    </div>

                                    <?php

                                }

                                /** On inclus le formulaire de saisi des fiches frais hors forfait */
                                include 'saisirFichesFraisHorsForfaitView.php';

                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-include">
                        <div class="card">
                            <div class="card-body">
                                <?php

                                /** Si un succés existe, on l'affiche */
                                if (!empty($_SESSION['success'])) {

                                    ?>

                                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                        <?= $_SESSION['success'][0]; ?>
                                    </div>

                                    <?php

                                }

                                /** On inclus le formulaire de saisi des fiches frais forfait */
                                include 'saisirFichesFraisForfaitView.php';

                                ?>
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
