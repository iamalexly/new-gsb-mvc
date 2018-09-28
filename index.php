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

            case 'loginChecker':

                loginForm();

                /** On vérifie si l'utilisateur est connecté ou pas */
                if (isset($_SESSION['status'])) {
                    header('Location: index.php?to=home');
                } else
                {
                    /** On regarde si les champs du formulaire de login sont bien remplis */
                    if (isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['mdp']) && !empty($_POST['mdp']))
                    {
                        loginChecker($_POST['login'], $_POST['mdp']);
                    } else
                    {
                        throw new Exception("Veuillez remplir tous les champs !");
                    }
                }

                break;



            case 'home':

                break;



            case 'logout':

                /** On détruit les SESSIONS (cela déconnecte l'utilisateur) puis on redirige vers l'index */
                session_destroy();
                header('Location: index.php');

                break;



            /**
             * Affichage du formulaire de connexion (première page de l'application)
             * Si l'utilisateur est connecté en revanche, on le redirige vers l'accueil de l'application
             */
            default:

                /** On vérifie si l'utilisateur est connecté ou pas */
                if (isset($_SESSION['status'])) {
                    header('Location: index.php?to=home');
                } else
                {
                    loginForm();
                }

                break;

        }

    }
    /**
     * Affichage du formulaire de connexion (première page de l'application) s'il n'existe aucune @var $_GET
     * Si l'utilisateur est connecté en revanche, on le redirige vers l'accueil de l'application
     */
    else
    {
        /** On vérifie si l'utilisateur est connecté ou pas */
        if (isset($_SESSION['status'])) {
            header('Location: index.php?to=home');
        } else
        {
            loginForm();
        }
    }

} catch (Exception $e)
{

    echo $e->getMessage();

}