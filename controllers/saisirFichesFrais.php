<?php

/**
 * Controlleur "Saisir fiches de frais" de l'application
 *
 * @author Alexandre Lebailly <http://iamalex.fr>
 */

require_once ('models/LignesFraisHorsForfait.php');
require_once ('models/LignesFraisForfait.php');

function saisirFichesFrais()
{

    require ('views/saisirFichesFraisView.php');

}