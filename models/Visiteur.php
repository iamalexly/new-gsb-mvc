<?php

/**
 * Routeur de l'application
 *
 * @author Alexandre Lebailly <http://iamalex.fr>
 */

require_once ('models/Database.conf.php');

/**
 * Class Visiteur
 * Cette classe ressence les différentes méthodes en rapport avec les visiteurs
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
     * @param $login
     * @param $mdp
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

}