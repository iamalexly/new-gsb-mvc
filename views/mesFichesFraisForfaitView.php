<?php

/**
 * Vue regroupant les fiches de frais forfait du visiteur contenu dans la Vue des Fiches de frais de l'application
 *
 * @author Alexandre Lebailly <http://iamalex.fr>
 */

?>
<?php

/** Si un mois a bien été séléctionné, on montre le tableau de frais hors forfait */
if (isset($_POST['month'])) {

    ?>
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
        foreach ($lignesFFDetails as $ligneFFDetails) {

            ?>
            <tr>
                <td><?= htmlspecialchars($ligneFFDetails['fFlibelle']); ?></td>
                <td><?= htmlspecialchars($ligneFFDetails['montant']); ?>€</td>
                <td><?= htmlspecialchars(dateConvert($ligneFFDetails['dateAjout'])); ?></td>

                <?php

                /** On regarde quel est l'état de la ligne, et on modifie la couleur du boutton en fonction */
                switch ($ligneFFDetails['idEtat']) {

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
                <td><button type="button" class="btn btn-sm btn-outline-<?= $buttonColorEtat; ?>" disabled><?= htmlspecialchars($ligneFFDetails['elibelle']); ?></button></td>

            </tr>
            <?php

        }

        ?>
        </tbody>
    </table>
    <?php

}

?>