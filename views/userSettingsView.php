<form>
    <div class="form-group">
        <label for="login">Login :</label>
        <input type="text" class="form-control" id="login" value="<?= $visiteurDetails['login']; ?>">
    </div>
    <div class="form-group">
        <label for="mdp">Mot de passe :</label>
        <input type="password" class="form-control" id="mdp" placeholder="Votre mot de passe">
    </div>
    <div class="form-group">
        <label for="ville">Ville :</label>
        <input type="text" class="form-control" id="ville" value="<?= $visiteurDetails['ville']; ?>">
    </div>
    <div class="form-group">
        <label for="cp">Code postal :</label>
        <input type="text" class="form-control" id="cp" value="<?= $visiteurDetails['cp']; ?>">
    </div>
    <div class="form-group">
        <label for="adresse">Adresse :</label>
        <input type="text" class="form-control" id="adresse" value="<?= $visiteurDetails['adresse']; ?>">
    </div>
    <button type="submit" class="btn btn-outline-primary btn-md btn-block">Enregistrer</button>
</form>