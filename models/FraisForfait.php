<?php

/**
 * Modele de la table "fraisForfait"
 *
 * @author Alexandre Lebailly <http://iamalex.fr>
 */

require_once ('models/Database.conf.php');

/**
 * Class FraisForfait
 * Cette classe recense les différentes méthodes en rapport avec les (types) frais forfait
 */
class FraisForfait extends DatabaseConf
{


    /**
     * Cette méthode permet de recupérer tous les (types) frais forfait
     * @return mixed
     */
    public function getFraisForfait()
    {

        $db = $this->dbConnect();

        $select = $db->query('SELECT * FROM fraisForfait');

        return $select;

    }

}