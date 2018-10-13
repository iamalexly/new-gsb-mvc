<?php

/**
 * Controlleur "Saisir fiches de frais" de l'application
 *
 * @author Alexandre Lebailly <http://iamalex.fr>
 */

require_once ('models/LignesFraisHorsForfait.php');
require_once ('models/LignesFraisForfait.php');

/**
 * Appel la vue SaisirFicheFraisView
 * @return void
 */
function saisirFichesFrais()
{

    require ('views/saisirFichesFraisView.php');

}


/**
 * Cette méthode permet d'ajout une ligne de frais hors forfait en fonction des informations soumise par le visiteur
 * (A l'aide du formulaire de saisie de frais hors forfait
 * @param int $userID ID du visiteur connecté (contenu dans $_SESSION['userID'])
 * @param varchar $libelle Libelle du frais hors forfait ajouté
 * @param decimal $montant Montant du frais hors forfait ajouté
 * @param date $dateAjout Date d'ajout du frais hors forfait
 * @return mixed
 */
function addFraisHorsForfait($userID, $libelle, $montant, $dateAjout)
{

    $lignesFHF = new LignesFraisHorsForfait();
    $affectedLine = $lignesFHF->addLignesFraisHorsForfait($userID, $libelle, $montant, $dateAjout);

    if ($affectedLine === false) {
        die('Impossible d\'ajouter une fiche de frais hors forfait');
    }

}