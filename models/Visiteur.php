<?php

/**
 * Routeur de l'application
 *
 * @author Alexandre Lebailly <http://iamalex.fr>
 */

require_once ('models/Database.conf.php');

/**
 * Class Visiteur
 * Cette classe recense les différentes méthodes en rapport avec les visiteurs
 */
class Visiteur extends DatabaseConf
{

    /**
     * Permet de récuperer toutes les informations de tous les visiteurs
     * @return mixed
     */
    public function getVisiteurs()
    {
        $db = $this->dbConnect();

        $select = $db->query('SELECT * FROM visiteurs');

        return $select;
    }

    /**
     * Cette méthode permet de récupérer toutes les informations d'un visiteur précis
     * @param string $login Login du visiteur
     * @param string $mdp Mot de passe du visiteur
     * @return mixed
     */
    public function getVisiteur($login, $mdp)
    {
        $db = $this->dbConnect();

        $select = $db->prepare('SELECT * FROM visiteurs WHERE login = :login AND mdp = :mdp');
        $select->execute(array(
            'login' => $login,
            'mdp' => $mdp
        ));

        return $select;
    }

    /**
     * Cette méthode permet de mettre à jour certaines informations concernant un visiteur.
     * @param string $login Login du visiteur
     * @param string $mdp Mot de passe du visiteur
     * @param string $adresse Adresse à mettre à jour
     * @param string $ville Ville à mettre à jour
     * @param string $cp Code postal à mettre à jour
     * @return mixed
     */
    public function updateVisiteur($login, $mdp, $adresse, $ville, $cp)
    {
        $db = $this->dbConnect();

        $update = $db->prepare('UPDATE visiteurs SET adresse = :adresse, cp = :cp, ville = :ville WHERE login = :login AND mdp = :mdp');
        $update->execute(array(
            'adresse' => $adresse,
            'cp' => $cp,
            'ville' => $ville,
            'login' => $login,
            'mdp' => $mdp
        ));

        return $update;
    }

}