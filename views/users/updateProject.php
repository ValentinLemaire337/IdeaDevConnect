<div class="container mt-5">
    <h1 class="text-center mb-4">Modifier le projet</h1>
    <form method="post">
        <div class="mb-3">
            <label for="projectName" class="form-label">Nom du projet</label>
            <input type="text" name="projectName" class="form-control" id="projectName" placeholder="Entrez le nom du projet" required>
        </div>
        <div class="mb-3">
            <label for="projectDescription" class="form-label">Description du projet</label>
            <textarea name="projectDescription" class="form-control" id="projectDescription" placeholder="Entrez la description du projet" required></textarea>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
        </div>
    </form>
</div>