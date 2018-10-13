<?php

/**
 * Modele de la table "lignesFraisForfait"
 *
 * @author Alexandre Lebailly <http://iamalex.fr>
 */

require_once ('models/Database.conf.php');

/**
 * Class LignesFraisForfait
 * Cette classe recense les différentes méthodes en rapport avec les frais forfait
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

        $select = $db->prepare('SELECT fF.libelle AS fFlibelle, lFF.dateAjout AS dateAjout, (fF.montant * lFF.nombre) AS montant, e.libelle AS elibelle, lFF.idEtat as idEtat, lFF.nombre AS nombre
                                FROM lignesFraisForfait AS lFF, fraisForfait AS fF, etats AS e
                                WHERE lFF.idVisiteur = :userID AND MONTH(lFF.dateAjout) = :monthDateAjout AND lFF.idEtat = e.id AND lFF.idFraisForfait = fF.id');
        $select->execute(array(
            'userID' => $userID,
            'monthDateAjout' => $month
        ));

        return $select;

    }


    /**
     * Cette méthode permet d'ajout une ligne de frais forfait en fonction des informations soumise par le visiteur
     * (A l'aide du formulaire de saisie de frais forfait)
     * @param int $userID ID du visiteur connecté (contenu dans $_SESSION['userID'])
     * @param int $idFraisForfait ID du frais forfait concerné
     * @param date $dateAjout Date de l'ajout du frais forfait
     * @param int $nombre Nombre d'unité du type de frais forfait
     * @return mixed
     */
    public function addLignesFraisForfait($userID, $idFraisForfait, $dateAjout, $nombre)
    {

        $db = $this->dbConnect();

        $insert = $db->prepare('INSERT INTO lignesFraisForfait (idVisiteur, idFraisForfait, idEtat, dateAjout, nombre)
                                VALUES (:idVisiteur, :idFraisForfait, 2, :dateAjout, :nombre)');

        $affectedLine = $insert->execute(array(
            'idVisiteur' => $userID,
            'idFraisForfait' => $idFraisForfait,
            'dateAjout' => $dateAjout,
            'nombre' => $nombre
        ));

        return $affectedLine;

    }

}