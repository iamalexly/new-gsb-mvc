<?php

/** @var char $appTitle Titre de l'application */
$appTitle = "Connexion";

/** Enregistrement du contenu de la vue pour insertion dans la Template de l'application */
ob_start();

?>

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="margin-top: 10%; text-align: center">
            <img src="public/images/logo.jpg" alt="GSBFrais Logo">
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="margin-top: 5%;">
            <div class="card">
                <div class="card-body">

                    <form class="needs-validation" action="index.php?to=loginChecker" method="post" novalidate>
                        <div class="form-group">
                            <label for="login">Login :</label>
                            <input type="text" class="form-control" id="login" name="login" placeholder="Votre nom d'utilisateur" required>
                            <div class="invalid-feedback">
                                Merci d'entrer un login valide
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mdp">Mot de passe :</label>
                            <input type="password" class="form-control" id="mdp" name="mdp" aria-describedby="warningMessage" placeholder="Votre mot de passe" required>
                            <div class="invalid-feedback">
                                Merci d'entrer un mot de passe valide
                            </div>
                            <small id="warningMessage" class="form-text text-muted">Ne partagez jamais vos identifiants.</small>
                        </div>
                        <button type="submit" class="btn btn-outline-primary btn-md btn-block">Connexion</button>
                    </form><br />

                    <script>
                        (function() {
                            'use strict';
                            window.addEventListener('load', function() {
                                var forms = document.getElementsByClassName('needs-validation');
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

                    <?php
                    /** Si une erreur existe, on l'affiche */
                    if (!empty($_SESSION['errors']))
                    {

                        ?>

                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?= $_SESSION['errors'][0]; ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <?php

                    }

                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

$content = ob_get_clean();

require ('views/template.php');

?>
