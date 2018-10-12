<?php

/**
 * Vue de "Saisir fiches de frais" de l'application
 *
 * @author Alexandre Lebailly <http://iamalex.fr>
 */

/** @var char $appTitle Titre de l'application */
$appTitle = "Saisir des fiches de frais";

/** Enregistrement du contenu de la vue pour insertion dans la Template de l'application */
ob_start();

?>

<div class="container" style="margin-top: 35px; margin-bottom: 50px;">
    <div class="row">

            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" style="margin-bottom: 25px;">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Saisir une fiche de frais hors forfait</a>
                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Saisir une fiche de frais forfait</a>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-not-include">
                        <div class="card">
                            <div class="card-body">
                                <h3><u>Saisir un fiches de frais hors forfait</u></h3><br />
                                <form class="needs-validation" novalidate>
                                    <div class="form-group">
                                        <label for="libelleFHF">Libelle :</label>
                                        <input type="text" class="form-control" id="libelleFHF" placeholder="Bouteille" required>
                                    </div>
                                    <div class="form-group">
                                        <label for=dateFHF">Date :</label>
                                        <input type="date" class="form-control" id="dateFHF" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="montantFHF">Montant :</label>
                                        <input type="number" class="form-control" id="montantFHF" placeholder="25.00" required>
                                    </div>
                                    <button type="submit" class="btn btn-outline-primary btn-md btn-block">Ajouter</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-include">
                        <div class="card">
                            <div class="card-body">
                                <h3><u>Saisir un fiches de frais forfait</u></h3><br />
                                <form class="needs-validation" novalidate>
                                    <div class="form-group">
                                        <label for="typeFF">Frais forfait :</label>
                                        <select multiple class="form-control" id="typeFF" required>
                                            <option>Nuit Hôtel - (60.00€ / Nuit)</option>
                                            <option>Kilomètres - (1.50€ / Km)</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="numberFF">Nombre :</label>
                                        <input type="number" class="form-control" id="numberFF" required>
                                    </div>
                                    <button type="submit" class="btn btn-outline-primary btn-md btn-block">Ajouter</button>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>

<?php

$content = ob_get_clean();

require ('views/template.php');

?>
