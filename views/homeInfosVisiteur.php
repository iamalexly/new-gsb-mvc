<?php

/**
 * Vue regroupant les informations du visiteur contenu dans la Vue de l'accueil de l'application
 *
 * @author Alexandre Lebailly <http://iamalex.fr>
 */

?>
<div class="input-group">
    <div class="input-group-prepend">
        <span class="input-group-text" id="">Nom</span>
    </div>
    <input type="text" class="form-control" value="<?= htmlspecialchars($visiteurDetails['nom']); ?>" readonly>
</div><br />

<div class="input-group">
    <div class="input-group-prepend">
        <span class="input-group-text" id="">Prenom</span>
    </div>
    <input type="text" class="form-control" value="<?= htmlspecialchars($visiteurDetails['prenom']); ?>" readonly>
</div><br />

<div class="input-group">
    <div class="input-group-prepend">
        <span class="input-group-text" id="">Ville</span>
    </div>
    <input type="text" class="form-control" value="<?= htmlspecialchars($visiteurDetails['ville']); ?>" readonly>
</div><br />

<div class="input-group">
    <div class="input-group-prepend">
        <span class="input-group-text" id="">Code Postal</span>
    </div>
    <input type="text" class="form-control" value="<?= htmlspecialchars($visiteurDetails['cp']); ?>" readonly>
</div><br />

<div class="input-group">
    <div class="input-group-prepend">
        <span class="input-group-text" id="">Adresse</span>
    </div>
    <input type="text" class="form-control" value="<?= htmlspecialchars($visiteurDetails['adresse']); ?>" readonly>
</div><br />

<div class="input-group">
    <div class="input-group-prepend">
        <span class="input-group-text" id="">Date d'embauche</span>
    </div>
    <input type="text" class="form-control" value="<?= dateConvert($visiteurDetails['dateEmbauche']); ?>" readonly>
</div><br />