<?php

/**
 * Vue de "Mes fiches de frais" de l'application
 *
 * @author Alexandre Lebailly <http://iamalex.fr>
 */

/** @var char $appTitle Titre de l'application */
$appTitle = "Mes fiches de frais";

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
                            <h3><u>Mes fiches de frais hors forfait</u></h3>
                            <form method="post" action="index.php?to=myExpenseSheets">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="month">Mois</label>
                                    </div>
                                    <select class="custom-select" id="month" name="month">
                                        <option selected>Selectionner un mois</option>
                                        <option value="01">Janvier</option>
                                        <option value="02">Fevrier</option>
                                        <option value="03">Mars</option>
                                        <option value="04">Avril</option>
                                        <option value="05">Mai</option>
                                        <option value="06">Juin</option>
                                        <option value="07">Juillet</option>
                                        <option value="08">Août</option>
                                        <option value="09">Septembre</option>
                                        <option value="10">Octobre</option>
                                        <option value="11">Novembre</option>
                                        <option value="12">Decembre</option>
                                    </select>
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">Rechercher</button>
                                    </div>
                                </div>
                            </form>
                            <?php
                            /** Si une erreur existe, on l'affiche */
                            if (!empty($_SESSION['errors'])) {

                                ?>

                                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                    <?= $_SESSION['errors'][0]; ?>
                                </div>

                                <?php
                            /** Si un succés existe, on l'affiche */
                            } elseif (!empty($_SESSION['success'])) {

                                ?>
                                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                    Mois sélectionné :
                                    <?php

                                    /** On traduit le mois en fonction de son numéro */
                                    switch ($_POST['month']) {
                                        case '01':
                                            echo "Janvier";
                                            break;
                                        case '02':
                                            echo "Février";
                                            break;
                                        case '03':
                                            echo "Mars";
                                            break;
                                        case '04':
                                            echo "Avril";
                                            break;
                                        case '05':
                                            echo "Mai";
                                            break;
                                        case '06':
                                            echo "Juin";
                                            break;
                                        case '07':
                                            echo "Juillet";
                                            break;
                                        case '08':
                                            echo "Août";
                                            break;
                                        case '09':
                                            echo "Septembre";
                                            break;
                                        case '10':
                                            echo "Octobre";
                                            break;
                                        case '11':
                                            echo "Novembre";
                                            break;
                                        case '12':
                                            echo "Décembre";
                                            break;
                                    }

                                    ?>
                                </div>
                                <?php
                            }


                            /** Si un mois a bien été séléctionné, on montre le tableau de frais hors forfait */
                            if (isset($_POST['month'])) {

                                ?>
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
                                <?php

                            }

                            ?>
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
