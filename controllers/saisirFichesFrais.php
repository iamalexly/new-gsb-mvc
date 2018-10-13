<?php

/**
 * Controlleur "Saisir fiches de frais" de l'application
 *
 * @author Alexandre Lebailly <http://iamalex.fr>
 */

require_once ('models/LignesFraisHorsForfait.php');
require_once ('models/LignesFraisForfait.php');
require_once ('models/FraisForfait.php');

/**
 * Appel la vue SaisirFicheFraisView
 * Affiche les différents frais forfait disponible dans le formulaire de saisie de fiche frais forfait
 * @return void
 */
function saisirFichesFrais()
{

    $fraisForfait = new FraisForfait();
    $getFraisForfait = $fraisForfait->getFraisForfait();
    $fraisForfaitDetails = $getFraisForfait->fetchAll();

    require ('views/saisirFichesFraisView.php');

}

/**
 * Cette méthode permet d'ajouter une ligne de frais hors forfait en fonction des informations soumises par le visiteur
 * (A l'aide du formulaire de saisie de fiches de frais hors forfait)
 * @param int $userID ID du visiteur connecté (contenu dans $_SESSION['userID'])
 * @param varchar $libelle Libelle du frais hors forfait ajouté
 * @param decimal $montant Montant du frais hors forfait ajouté
 * @param date $dateAjout Date d'ajout du frais hors forfait
 * @return void
 */
function addFraisHorsForfait($userID, $libelle, $montant, $dateAjout)
{

    $lignesFHF = new LignesFraisHorsForfait();
    $affectedLine = $lignesFHF->addLignesFraisHorsForfait($userID, $libelle, $montant, $dateAjout);

    if ($affectedLine === false) {
        die('Impossible d\'ajouter une fiche de frais hors forfait');
    }

}


/**
 * Cette méthode permet d'ajouter une ligne de frais forfait en fonction des informations soumises par le visiteur
 * (A l'aide du formulaire de saisie de fiches de frais forfait)
 * @param int $userID ID du visiteur connecté (contenu dans $_SESSION['userID'])
 * @param int $idFraisForfait ID du frais forfait concerné
 * @param date $dateAjout Date de l'ajout du frais forfait
 * @param int $nombre Nombre d'unité du type de frais forfait
 * @return void
 */
function addFraisForfait($userID, $idFraisForfait, $dateAjout, $nombre)
{
    $lignesFF = new LignesFraisForfait();
    $affectedLine = $lignesFF->addLignesFraisForfait($userID, $idFraisForfait, $dateAjout, $nombre);

    if ($affectedLine === false) {
        die('Impossible d\'ajouter une fiche de frais hors forfait');
    }
}