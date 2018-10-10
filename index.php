<?php

/**
 * Routeur de l'application
 *
 * @author Alexandre Lebailly <http://iamalex.fr>
 */

require_once ('controllers/loginController.php');
require_once ('controllers/homeController.php');
require_once ('controllers/mesFichesFrais.php');

session_start();

/** Initialisation de l'array stockant les erreurs */
$_SESSION['errors'] = [];

/** Initialisation de l'array stockant les succés */
$_SESSION['success'] = [];

/**
 * Cette fonction permet de convertir au format FR
 * @param Date $date Date avant conversion
 * @return false|string
 */
function dateConvert($date)
{
    $convert = date('d/m/Y', strtotime($date));
    return $convert;
}

/** Block Try pour afficher les Exceptions (erreurs) de l'application */
try {

    if (isset($_GET['to'])) {

        switch ($_GET['to']) {

            case 'login':
                /** On vérifie si l'utilisateur est connecté ou pas */
                if (isset($_SESSION['status'])) {

                    header('Location: index.php?to=home');

                } else {
                    /** On regarde si les champs du formulaire de login sont bien remplis */
                    if (isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['mdp']) && !empty($_POST['mdp'])) {

                        loginChecker($_POST['login'], $_POST['mdp']);

                    } else {

                        $_SESSION['errors'] = array(0 => "Veuillez remplir tous les champs");

                    }
                }

                loginForm();
                break;



            case 'home':
                /** On vérifie si l'utilisateur est connecté ou pas */
                if (isset($_SESSION['status'])) {

                    home();

                } else {

                    header('Location: index.php');

                }
                break;



            case 'homeSettings':
                /** On vérifie si l'utilisateur est connecté ou pas */
                if (isset($_SESSION['status'])) {

                    if (isset($_POST['ville']) && !empty($_POST['ville']) && isset($_POST['cp']) && !empty($_POST['cp']) && isset($_POST['adresse']) && !empty($_POST['adresse'])) {

                        homeSettings($_SESSION['login'], $_SESSION['mdp'], $_POST['adresse'], $_POST['ville'], $_POST['cp']);
                        $_SESSION['success'] = array(0 => "Paramètres du compte changé avec succés !");

                    } else {

                        $_SESSION['errors'] = array(0 => "Veuillez remplir tous les champs");

                    }

                    home();

                } else {

                    header('Location: index.php');

                }
                break;



            case 'mesFichesFrais':
                /** On vérifie si l'utilisateur est connecté ou pas */
                if (isset($_SESSION['status'])) {

                    /**
                     * On vérifie si un mois a été selectionné ou pas
                     * Si aucun mois n'est sélectionné, on l'indique à l'aide de la @var array $_SESSION['errors']
                     * Sinon, on indique le mois sélectionné grâce à la @var array $_SESSION['success']
                     */
                    if (isset($_POST['month']) && $_POST['month'] >= 01 && $_POST['month'] <= 12) {
                        $_SESSION['success'] = array(0 => $_POST['month']);
                        myExpenseSheets($_SESSION['userID'], $_POST['month']);
                    } else {
                        $_SESSION['errors'] = array(0 => "Aucun mois n'a été sélectionné");
                        myExpenseSheets($_SESSION['userID'], 00);
                    }

                } else {

                    header('Location: index.php');

                }
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

                } else {

                    loginForm();

                }
                break;

        }

    /**
     * Affichage du formulaire de connexion (première page de l'application) s'il n'existe aucune @var $_GET
     * Si l'utilisateur est connecté en revanche, on le redirige vers l'accueil de l'application
     */
    } else {
        /** On vérifie si l'utilisateur est connecté ou pas */
        if (isset($_SESSION['status'])) {

            header('Location: index.php?to=home');

        } else {

            loginForm();

        }
    }

} catch (Exception $e) {

    echo $e->getMessage();

}