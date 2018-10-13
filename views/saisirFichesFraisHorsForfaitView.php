<?php

/**
 * Vue permettant d'afficher le formulaire permettant d'ajouter des fiches de frais hors forfait
 *
 * @author Alexandre Lebailly <http://iamalex.fr>
 */

?>
<div class="card">
    <div class="card-body">
        <h3><u>Saisir un fiches de frais hors forfait</u></h3><br />
        <form class="needs-validation" method="post" action="saisir-fiches-frais" novalidate>
            <div class="form-group">
                <label for="libelleFHF">Libelle :</label>
                <input type="text" class="form-control" id="libelleFHF" name="libelleFHF" placeholder="Bouteille" required>
            </div>
            <div class="form-group">
                <label for=dateFHF">Date :</label>
                <input type="date" class="form-control" id="dateFHF" name="dateFHF" required>
            </div>
            <div class="form-group">
                <label for="montantFHF">Montant :</label>
                <input type="number" step="0.01" class="form-control" id="montantFHF" name="montantFHF" placeholder="25.00" required>
            </div>
            <button type="submit" class="btn btn-outline-primary btn-md btn-block">Ajouter</button>
        </form>
    </div>
</div>
