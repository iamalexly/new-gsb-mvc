<?php

/**
 * Routeur de l'application
 *
 * @author Alexandre Lebailly <http://iamalex.fr>
 */

require_once ('controllers/loginController.php');

/** Démarrage des SESSIONS */
session_start();

/** Block Try pour afficher les Exceptions (erreurs) de l'application */
try
{

    if (isset($_GET['to']))
    {

        switch ($_GET['to'])
        {

            /** Affichage du formulaire de connexion (première page de l'application) */
            default:
                loginForm();
                break;

        }

    } else /** Affichage du formulaire de connexion (première page de l'application) s'il n'existe aucune @var $_GET */
    {
        loginForm();
    }

} catch (Exception $e)
{

    echo $e->getMessage();

}