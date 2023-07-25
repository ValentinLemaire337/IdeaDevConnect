document.getElementById('signupForm').addEventListener('submit', function (event) {
    // Récupère les valeurs des champs de mot de passe
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('password1').value;

    // Compare les mots de passe
    if (!comparePasswords(password, confirmPassword)) {
        // Si les mots de passe ne correspondent pas, empêche la soumission du formulaire
        event.preventDefault();
        console.log('Les mots de passe ne correspondent pas.');
        let message = 'Les mots de passe ne correspondent pas';
    }
});

function comparePasswords(password, confirmPassword) {
    return password === confirmPassword;
}
