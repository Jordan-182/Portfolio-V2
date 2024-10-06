document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault();  // Empêche le rechargement de la page

    // Récupérer les données du formulaire
    let formData = new FormData(this);

    // Envoyer la requête AJAX
    fetch('index.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())  // Conversion de la réponse en JSON
    .then(data => {
        console.log(data);
        // Afficher le message de retour dans le div "formMessage"
        let messageDiv = document.getElementById('formMessage');
        if (data.status === 'success') {
            messageDiv.style.color = 'green';
            // Vider le formulaire après envoi
            document.getElementById('Name').reset();
            document.getElementById('Email').reset();
            document.getElementById('Subject').reset();
            document.getElementById('Message').reset();
        } else {
            messageDiv.style.color = 'red';
        }
        messageDiv.textContent = data.message; // Affiche le message
    })
    .catch(error => console.error('Erreur:', error));
});
