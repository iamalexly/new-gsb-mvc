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
     * Cette méthode permet de récuperer toutes les lignes de frais hors forfait du visiteur connecté
     * @param int $userID ID du visiteur connecté (contenu dans $_SESSION['userID'])
     * @return mixed
     */
    public function getLignesFraisHorsForfait($userID)
    {

        $db = $this->dbConnect();

        $select = $db->prepare('SELECT * FROM lignesFraisHorsForfait WHERE idVisiteur = :userID');
        $select->execute(array(
            'userID' => $userID
        ));

        return $select;

    }

}