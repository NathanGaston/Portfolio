document.addEventListener('DOMContentLoaded', function () {
    var rgpdLink = document.getElementById('rgpdLink');

    if (rgpdLink) {
        rgpdLink.addEventListener('click', function (event) {
            event.preventDefault(); // Empêche le lien de naviguer vers une autre page

            // Affiche une boîte d'alerte avec le message
            alert("Notre engagement envers votre vie privée est absolu. Ainsi, nous vous assurons que nous ne conservons et n'utilisons aucune donnée personnelle vous concernant. Votre confiance est notre priorité, et nous mettons tout en œuvre pour garantir la protection totale de vos informations.");
        });
    }
});
