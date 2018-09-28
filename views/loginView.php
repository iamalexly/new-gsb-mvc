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
                    <form action="index.php?to=loginChecker" method="post">
                        <div class="form-group">
                            <label for="login">Login :</label>
                            <input type="text" class="form-control" id="login" name="login" placeholder="Votre nom d'utilisateur">
                        </div>
                        <div class="form-group">
                            <label for="mdp">Mot de passe :</label>
                            <input type="password" class="form-control" id="mdp" name="mdp" aria-describedby="warningMessage" placeholder="Votre mot de passe">
                            <small id="warningMessage" class="form-text text-muted">Ne partagez jamais vos identifiants.</small>
                        </div>
                        <button type="submit" class="btn btn-outline-primary btn-md btn-block">Connexion</button>
                    </form><br />
                </div>
            </div>
        </div>
    </div>
</div>

<?php

$content = ob_get_clean();

require ('views/template.php');

?>
