<?php

/**
 * Modele de la table "lignesFraisHorsForfait"
 *
 * @author Alexandre Lebailly <http://iamalex.fr>
 */

require_once ('models/Database.conf.php');

/**
 * Class LignesFraisHorsForfait
 * Cette classe recense les différentes méthodes en rapport avec les frais hors forfait
 */
class LignesFraisHorsForfait extends DatabaseConf
{

    /**
     * Cette méthode permet de récuperer toutes les lignes de frais hors forfait du visiteur connecté et leurs états
     * @param int $userID ID du visiteur connecté (contenu dans $_SESSION['userID'])
     * @param int $month Mois séléctionné par l'utilisateur (de 01 à 12). Si aucun mois n'est séléctionné, le @var $month est initialisé à 00
     * @return mixed
     */
    public function getLignesFraisHorsForfait($userID, $month)
    {

        $db = $this->dbConnect();

        $select = $db->prepare('SELECT l.id, l.idVisiteur, l.libelle AS Llibelle, l.montant, l.dateAjout, l.idEtat, e.id, e.libelle AS Elibelle
                                FROM lignesFraisHorsForfait AS l, etats AS e 
                                WHERE l.idVisiteur = :userID AND MONTH(l.dateAjout) = :monthDateAjout AND l.idEtat = e.id');
        $select->execute(array(
            'userID' => $userID,
            'monthDateAjout' => $month
        ));

        return $select;

    }

}