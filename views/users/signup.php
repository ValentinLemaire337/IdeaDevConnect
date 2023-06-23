<main>
    <div class="container">
        <div class="row">
            <p>Inscrivez-vous :</p>
            <form>
            <div class="mb-3">
                    <label for="fistname" class="form-label">Nom :</label>
                    <input type="text" class="form-control" id="fistname" name="fistname" required>
                </div>
                <div class="mb-3">
                    <label for="lastname" class="form-label">Prénom :</label>
                    <input type="text" class="form-control" id="lastname" name="lastname">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Adresse mail :</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
                    <div id="emailHelp" class="form-text">Nous ne partagerons pas votre email.</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe :</label>
                    <input type="password" class="form-control" id="password" required>
                </div>
                <div class="mb-3">
                    <label for="password1" class="form-label">Confirmez votre mot de passe :</label>
                    <input type="password1" class="form-control" id="password1" required>
                </div>
                <button type="submit" class="btn btn-primary">Valider</button>
            </form>
            </div>
        </div>
    </div>
</main>