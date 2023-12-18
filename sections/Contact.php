<form method="POST" action="sections/formulaire/traitement_formulaire.php" class="formulaire" >
    <label for="nom">Nom (En Majuscule) :</label>
    <input type="text" id="nom" name="nom" required>

    <label for="nom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" required>

    <label for="email">E-mail :</label>
    <input type="email" id="email" name="email" required>

    <label for="objet_msg">Objet du message :</label>
    <input type="text" name="objet_msg">

    <label for="message">Message :</label>
    <textarea id="message" name="message" required></textarea>

    <input type="submit" value="Envoyer">
</form>

<style>
    body {
        display: flex;
        min-height: 100vh;
        align-items: center;
        justify-content: center;
        margin: 0;
    }

    form {
        display: flex;
        flex-direction: column;
        max-width: 300px; /* Ajustez selon vos besoins */
        margin: auto;    }

    label {
        margin-bottom: 5px;
    }

    input,
    textarea {
        margin-bottom: 10px;
        padding: 8px;
        width: 100%;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: crimson;
        color: white;
        cursor: pointer;
        padding: 10px;
    }

</style>