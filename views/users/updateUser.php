<div class="container mt-5">
    <h1 class="text-center mb-4">Modifier les informations</h1>
    <form method="post">
        <div class="mb-3">
            <label for="firstname" class="form-label">Prénom</label>
            <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Entrez votre prénom" required>
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Nom</label>
            <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Entrez votre nom" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Adresse mail</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Entrez votre adresse mail" required>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
        </div>
    </form>
</div>