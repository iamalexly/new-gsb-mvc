<?php

/**
 * Controlleur "Mes fiches de frais" de l'application
 *
 * @author Alexandre Lebailly <http://iamalex.fr>
 */

require_once ('models/LignesFraisHorsForfait.php');

/**
 * Appel la vue myExpenseSheets (Mes fiches de frais)
 * Cette fonction passe les lignes de frais hors forfait du visiteur connecté à la vue
 * @return void
 */
function myExpenseSheets()
{

    $lignesFHorsF = new LignesFraisHorsForfait();
    $getLignesFHorsF = $lignesFHorsF->getLignesFraisHorsForfait($_SESSION['userID']);

    $lignesFHorsFDetails = $getLignesFHorsF->fetchAll();

    require ('views/myExpenseSheetsView.php');

}