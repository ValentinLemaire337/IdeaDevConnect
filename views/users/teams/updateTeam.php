<div class="container mt-5">
    <h1 class="text-center mb-4">Modifier les informations de l'équipe</h1>
    <form method="post">
        <div class="mb-3">
            <label for="teamName" class="form-label">Nom de l'équipe</label>
            <input type="text" name="teamName" class="form-control" id="teamName" placeholder="Entrez le nouveau nom de l'équipe" required>
        </div>
        <div class="mb-3">
            <label for="teamDescription" class="form-label">Description de l'équipe</label>
            <textarea class="form-control" name="teamDescription" id="teamDescription" placeholder="Modifier la présentation de votre équipe"></textarea>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
        </div>
    </form>
</div>