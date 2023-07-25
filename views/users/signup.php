
    <div class="container-fluid row d-flex">
        <div class="col-6 justify-content-center align-middle divSignup">
            <h1 class="titleSignup">Pourquoi s'inscrire ?</h1>
            <p>C'est très simple !</p>
            <p>
                Votre inscription est le moyen idéal sur ce site pour commencer à s'investir d'avantage
                dans votre apprentissage !
            </p>
            <p>
                Venez découvrir les projets, y participer ou tout simplement discuter !
            </p>
            <p>
                En plus, ce ne vous prendra que quelques secondes !
            </p>
        </div>
        <div class="col-6">
            <p>Inscrivez-vous :</p>
            <form method="post" id="signupForm">
                <div class="mb-3">
                    <label for="firstname" class="form-label">Nom :</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" required>
                    <p><?= $errorFirstname ?? '' ?></p>
                </div>
                <div class="mb-3">
                    <label for="lastname" class="form-label">Prénom :</label>
                    <input type="text" class="form-control" id="lastname" name="lastname">
                    <p><?= $errorLastname ?? '' ?></p>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Adresse mail :</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" required>
                    <div id="emailHelp" class="form-text">Nous ne partagerons pas votre email.</div>
                    <p><?= $errorMail ?? '' ?></p>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe :</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                    <div id="passwordHelpBlock" class="form-text">
                        Votre mot de passe doit contenir au moins 8 caractères : lettres, chiffres et caractères spéciaux.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password1" class="form-label">Confirmez votre mot de passe :</label>
                    <input type="password" class="form-control" id="password1" name="password1" required>
                </div>
                <button type="submit" class="btn btn-light">Valider</button>
            </form>
            <p class="mb-3">Vous avez déjà un compte ? Connectez vous <a href="/controllers/signInCtrl.php">ici</a></p>
        </div>
        <div class="row col-6">

        </div>
    </div>
    </div>
