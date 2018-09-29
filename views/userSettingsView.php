<?php

/**
 * Vue du formulaire permettant au visiteur de mettre à jour ses informations
 * Formulaire contenu dans la Vue de l'accueil de l'application
 *
 * @author Alexandre Lebailly <http://iamalex.fr>
 */

?>
<form class="needs-validation" action="index.php?to=homeSettings" method="post" novalidate>
    <div class="form-group">
        <label for="login">Login :</label>
        <input type="text" class="form-control" id="login" value="<?= $visiteurDetails['login']; ?>" readonly>
    </div>
    <div class="form-group">
        <label for="mdp">Mot de passe :</label>
        <input type="password" class="form-control" id="mdp" value="<?= $visiteurDetails['mdp']; ?>" readonly>
    </div>
    <div class="form-group">
        <label for="ville">Ville :</label>
        <input type="text" class="form-control" id="ville" name="ville" value="<?= $visiteurDetails['ville']; ?>" required>
    </div>
    <div class="form-group">
        <label for="cp">Code postal :</label>
        <input type="text" class="form-control" id="cp" name="cp" value="<?= $visiteurDetails['cp']; ?>" required>
    </div>
    <div class="form-group">
        <label for="adresse">Adresse :</label>
        <input type="text" class="form-control" id="adresse" name="adresse" value="<?= $visiteurDetails['adresse']; ?>" required>
    </div>
    <button type="submit" class="btn btn-outline-primary btn-md btn-block">Enregistrer</button>
</form>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>