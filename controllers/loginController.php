<?php

/**
 * Controlleur Login de l'application
 * 
 * @author Alexandre Lebailly <http://iamalex.fr>
 */

require_once ('models/Visiteur.php');

/**
 * Appel la vue LoginView (formulaire de connexion)
 * @return void
 */
function loginForm()
{

    require ('views/loginView.php');

}

/**
 * Fonction permettant de valider ou non la connexion d'un visiteur
 * @param $login
 * @param $mdp
 * @return void
 */
function loginChecker($login, $mdp)
{

    $loginChecker = new Visiteur();
    $result = $loginChecker->getVisiteur($login, $mdp);
    $data = $result->fetch();

    if ($login == $data['login'] && $mdp == $data['mdp'])
    {
        $_SESSION['status'] = "Logged";
        $_SESSION['login'] = htmlspecialchars($login);
        $_SESSION['mdp'] = htmlspecialchars($mdp);

        header('Location: index.php');
    } else
    {
        $_SESSION['errors'] = array(0 => "Login ou mot de passe incorrect");
    }

}