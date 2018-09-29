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

function homeSettings()
{

    

}