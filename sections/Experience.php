<body class="experiences-page">
    <div class="overlay-box experiences">
        <h1>Mes Expériences Professionnelles</h1>
        <div id="trait"></div>
        <?php
        foreach($data["experiences1"] as $experience1){
            echo "<h3 id='title'>".$experience1["nom"]."</h3><p id='dates'>".$experience1["date"]."</p><p>".$experience1["taches"]."</p>\n";
        };
        ?>
        <div id="trait2"></div>

        <?php
        foreach($data["experiences2"] as $experience2){
            echo "<h3 id='title'>".$experience2["nom"]."</h3><p id='dates'>".$experience2["date"]."</p><p>".$experience2["taches"]."</p>\n";
        };
        ?>

        <div id="trait2"></div>

        <?php
        foreach($data["experiences3"] as $experience3){
            echo "<h3 id='title'>".$experience3["nom"]."</h3><p id='dates'>".$experience3["date"]."</p><p>".$experience3["taches"]."</p>\n";
        };
        ?>
            
        <div id="trait2"></div>

    </div>
</body>

<style>

    .overlay-box {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        width: 42%;
        height: 95vh; /* La boîte occupe 100% de la hauteur de la fenêtre */
        background-color: #000;
        color: #fff;
        padding: 20px;
        font-family: "Hedvig Letters Serif", sans-serif;
        overflow-y: auto; /* Ajoutez une barre de défilement vertical si nécessaire */
    }

    h1 {
        color: white;
        margin-top: 75px;
        font-family: "Hedvig Letters Serif", sans-serif;
    }

    #dates {
        color: grey;
        margin-left: 10px;
        font-size: 14px;
    }

    #trait {
        border-bottom: rgb(0, 153, 255) 5px solid;
        width: 400px;
        margin-bottom: 25px;
    }

    #trait2 {
        border-bottom: rgb(0, 153, 255) 2px solid;
        width: 250px;
        margin-bottom: 20px;
    }

    #title {
        margin: 0;
    }

    #dates {
        margin: 0;
        margin-top: 15px;
        color: grey;
        font-size: 16px;
        font-weight: bold;
    }
</style>