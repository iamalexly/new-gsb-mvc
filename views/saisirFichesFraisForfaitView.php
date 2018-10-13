<?php

/**
 * Vue permettant d'afficher le formulaire permettant d'ajouter des fiches de frais forfait
 *
 * @author Alexandre Lebailly <http://iamalex.fr>
 */

?>
<h3><u>Saisir un fiches de frais forfait</u></h3><br />
<form class="needs-validation" method="post" action="saisir-fiches-frais" novalidate>
    <div class="form-group">
        <label for="typeFF">Frais forfait (Prix / Unité):</label>
        <select multiple class="form-control" id="typeFF" name="typeFF" required>
            <?php

            /** @var mixed $fraisForfaitDetail On affiche les différents frais forfait */
            foreach ($fraisForfaitDetails as $fraisForfaitDetail) {

                echo '<option value="' . $fraisForfaitDetail['id'] . '">' . $fraisForfaitDetail['libelle'] . ' - (' . $fraisForfaitDetail['montant'] . '€)</option>';

            }
            
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="numberFF">Nombre :</label>
        <input type="number" class="form-control" id="numberFF" name="numberFF" required>
    </div>
    <div class="form-group">
        <label for="dateFF">Date :</label>
        <input type="date" class="form-control" id="dateFF" name="dateFF" required>
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
