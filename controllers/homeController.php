<?php

/**
 * Controlleur Home de l'application
 *
 * @author Alexandre Lebailly <http://iamalex.fr>
 */

require_once ('models/Visiteur.php');

/**
 * Appel la vue HomeView (page d'accueil après connexion)
 * @return void
 */
function home()
{

    $visiteur = new Visiteur();
    $getVisiteur = $visiteur->getVisiteur($_SESSION['login'], $_SESSION['mdp']);
    $visiteurDetails = $getVisiteur->fetch();

    require ('views/homeView.php');

}

/**
 * Cette fonction appel la méthode permettant de mettre à jour les informations d'un visiteur
 * @param $login
 * @param $mdp
 * @param $adresse
 * @param $ville
 * @param $cp
 * @return void
 */
function homeSettings($login, $mdp, $adresse, $ville, $cp)
{

    $visiteur = new Visiteur();
    $updateVisiteur = $visiteur->updateVisiteur($login, $mdp, $adresse, $ville, $cp);

}