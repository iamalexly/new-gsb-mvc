<?php

/**
 * Modele de la table "lignesFraisForfait"
 *
 * @author Alexandre Lebailly <http://iamalex.fr>
 */

require_once ('models/Database.conf.php');

/**
 * Class LignesFraisHorsForfait
 * Cette classe recense les différentes méthodes en rapport avec les frais hors forfait
 */
class LignesFraisForfait extends DatabaseConf
{

    /**
     * Cette méthode permet de récuperer toutes les lignes de frais forfait du visiteur connecté et leurs états
     * @param int $userID ID du visiteur connecté (contenu dans $_SESSION['userID'])
     * @param int $month Mois séléctionné par l'utilisateur (de 01 à 12). Si aucun mois n'est séléctionné, le @var $month est initialisé à 00
     * @return mixed
     */
    public function getLignesFraisForfait($userID, $month)
    {

        $db = $this->dbConnect();

        $select = $db->prepare('SELECT fF.libelle AS fFlibelle, lFF.dateAjout AS dateAjout, (fF.montant * fF.nombre) AS montant, e.libelle AS elibelle, lFF.idEtat as idEtat, fF.nombre AS nombre
                                FROM lignesFraisForfait AS lFF, fraisForfait AS fF, etats AS e
                                WHERE lFF.idVisiteur = :userID AND MONTH(lFF.dateAjout) = :monthDateAjout AND lFF.idEtat = e.id AND lFF.idFraisForfait = fF.id');
        $select->execute(array(
            'userID' => $userID,
            'monthDateAjout' => $month
        ));

        return $select;

    }

}