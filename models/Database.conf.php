<?php

/**
 * Fichier de configuration de la base de données
 *
 * @author Alexandre Lebailly <http://iamalex.fr>
 */

/**
 * Class DatabaseConf
 * Cette classe sert à effectuer une connexion à la base de données
 */
class DatabaseConf
{

    protected $host = "localhost"; /** @var string $host Hôte de la base de données */
    protected $dbname = "gsb_new"; /** @var string $dbname Nom de la base de données */
    protected $username = "alexandre"; /** @var string $username Nom d'utilisateur de la base de données */
    protected $password = "debianalex"; /** @var string $password Mot de passe de la base de données */

    /**
     * Methode permettant de ce connecter à la base de données
     * @return PDO
     */
    protected function dbConnect()
    {

        try {
            $dbConnect = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname.';charset=utf8', $this->username, $this->password);
        } catch (Exception $e)
        {
            echo $e->getMessage();
        }

        return $dbConnect;

    }

}