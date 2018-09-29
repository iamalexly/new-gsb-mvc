<?php

/**
 * Vue de "Mes fiches de frais" de l'application
 *
 * @author Alexandre Lebailly <http://iamalex.fr>
 */

/** @var char $appTitle Titre de l'application */
$appTitle = "Accueil";

/** Enregistrement du contenu de la vue pour insertion dans la Template de l'application */
ob_start();

?>

<div class="container" style="margin-top: 35px; margin-bottom: 50px;">
    <div class="row">

        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" style="margin-bottom: 25px;">
            <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-notInclude-list" data-toggle="list" href="#list-notInclude" role="tab" aria-controls="home">Fiches frais hors forfait</a>
                <a class="list-group-item list-group-item-action" id="list-include-list" data-toggle="list" href="#list-include" role="tab" aria-controls="profile">Fiches frais forfait</a>
            </div>
        </div>

        <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-notInclude" role="tabpanel" aria-labelledby="list-notInclude-list">
                    <div class="card">
                        <div class="card-body">
                            <h3><u>Mes fiches de frais hors forfait</u></h3><br />
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Libellé</th>
                                        <th scope="col">Montant</th>
                                        <th scope="col">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php

                                /** @var mixed $ligneFHFDetails Contient les informations des Frais Hors Forfait du visiteur connecté */
                                foreach ($lignesFHorsFDetails as $ligneFHFDetails) {

                                    ?>
                                    <tr>
                                        <td><?= htmlspecialchars($ligneFHFDetails['libelle']); ?></td>
                                        <td><?= htmlspecialchars($ligneFHFDetails['montant']); ?>€</td>
                                        <td><?= htmlspecialchars(dateConvert($ligneFHFDetails['dateAjout'])); ?></td>
                                    </tr>
                                    <?php

                                }

                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="list-include" role="tabpanel" aria-labelledby="list-include-list">
                    <div class="card">
                        <div class="card-body">
                            <h3><u>Mes fiches de frais forfait</u></h3><br />
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
