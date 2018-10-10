<?php

/**
 * Controlleur "Mes fiches de frais" de l'application
 *
 * @author Alexandre Lebailly <http://iamalex.fr>
 */

require_once ('models/LignesFraisHorsForfait.php');

/**
 * Appel la vue mesFraisHorsForfait (Mes fiches de frais)
 * Cette fonction passe les lignes de frais hors forfait du visiteur connecté par rapport au mois sélectionné
 * @param int $userID ID du visiteur connecté (contenu dans $_SESSION['userID'])
 * @param int $month Mois séléctionné par l'utilisateur (de 01 à 12). Si aucun mois n'est séléctionné, le @var $month est initialisé à 00
 * @return void
 */
function myExpenseSheets($userID, $month)
{

    $lignesFHorsF = new LignesFraisHorsForfait();
    $getLignesFHorsF = $lignesFHorsF->getLignesFraisHorsForfait($userID, $month);

    $lignesFHorsFDetails = $getLignesFHorsF->fetchAll();

    require ('views/mesFichesFraisView.php');

}