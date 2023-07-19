<div class="container mt-5">
    <h1 class="text-center mb-4">Changer le mot de passe</h1>
    <form method="post">
        <div class="mb-3">
            <label for="oldPassword" class="form-label">Ancien mot de passe</label>
            <input type="password" name="oldPassword" class="form-control" id="oldPassword" required>
        </div>
        <div class="mb-3">
            <label for="newPassword" class="form-label">Nouveau mot de passe</label>
            <input type="password" name="newPassword" class="form-control" id="newPassword" required>
        </div>
        <div class="mb-3">
            <label for="confirmPassword" class="form-label">Confirmer le nouveau mot de passe</label>
            <input type="password" name="confirmPassword" class="form-control" id="confirmPassword" required>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Changer le mot de passe</button>
        </div>
    </form>
</div>