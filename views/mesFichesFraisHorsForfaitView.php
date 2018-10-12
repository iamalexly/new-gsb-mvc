<?php

/**
 * Vue regroupant les fiches de frais Hors Forfait du visiteur contenu dans la Vue des Fiches de frais de l'application
 *
 * @author Alexandre Lebailly <http://iamalex.fr>
 */

?>
<?php

/** Si un mois a bien été séléctionné, on montre le tableau de frais hors forfait */
if (isset($_POST['month'])) {

    ?>
    <div class="table-responsive">

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Libellé</th>
                <th scope="col">Montant</th>
                <th scope="col">Date</th>
                <th scope="col">Etat</th>
            </tr>
            </thead>
            <tbody>
            <?php

            /** @var mixed $ligneFHFDetails Contient les informations des Frais Hors Forfait et leurs états du visiteur connecté */
            foreach ($lignesFHorsFDetails as $ligneFHFDetails) {

                ?>
                <tr>
                    <td><?= htmlspecialchars($ligneFHFDetails['Llibelle']); ?></td>
                    <td><?= htmlspecialchars($ligneFHFDetails['montant']); ?>€</td>
                    <td><?= htmlspecialchars(dateConvert($ligneFHFDetails['dateAjout'])); ?></td>

                    <?php

                    /** On regarde quel est l'état de la ligne, et on modifie la couleur du boutton en fonction */
                    switch ($ligneFHFDetails['idEtat']) {

                        case '1':
                            $buttonColorEtat = 'danger';
                            break;

                        case '2':
                            $buttonColorEtat = 'dark';
                            break;

                        case '3':
                            $buttonColorEtat = 'success';

                    }

                    ?>
                    <td><button type="button" class="btn btn-sm btn-outline-<?= $buttonColorEtat; ?>" disabled><?= htmlspecialchars($ligneFHFDetails['Elibelle']); ?></button></td>

                </tr>
                <?php

            }

            ?>
            </tbody>
        </table>
    </div>
    <?php

}

?>