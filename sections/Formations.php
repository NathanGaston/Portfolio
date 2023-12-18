<body class="formations-page">
    <div class="img-formations">
        <img id="CharlesT" src="img/formations/logo-lycee-charles-tellier.png" width="350" height="250" >
        <img id="JeanJ" src="img/formations/logo_j.j__serre-7af2f.png" width="350" height="150">
    </div>
    <img id="SaintL" src="img/formations/logo-st-louis.png" width="250" height="250">

    <div class="overlay-box formations">
        <h1>Mes Formations & Diplômes</h1>
        <div id="trait"></div>

        <?php
        foreach($data["formations1"] as $formations1){
            echo "<h3 id='title'>".$formations1["nom"]."</h3><p id='dates'>".$formations1["date"]."</p><p>".$formations1["taches"]."</p>\n";
        };
        ?>

        <div id="trait2"></div>

        <?php
        foreach($data["formations2"] as $formations2){
            echo "<h3 id='title'>".$formations2["nom"]."</h3><p id='dates'>".$formations2["date"]."</p><p>".$formations2["taches"]."</p>\n";
        };
        ?>

        <div id="trait2"></div>

        <?php
        foreach($data["formations3"] as $formations3){
            echo "<h3 id='title'>".$formations3["nom"]."</h3><p id='dates'>".$formations3["date"]."</p><p>".$formations3["taches"]."</p>\n";
        };
        ?>
            
        <div id="trait2"></div>

    </div>
</body>

<style>
    .img-formations {
        margin-top: 225px;
        margin-left: 75px;
    }

    .img-formations img {
        padding-right: 100px;
    }

    #SaintL {
        margin-top: 50px;
        margin-left: 375px;
    }

    .overlay-box {
        position: absolute;
        top: 0;
        right: 0;
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
        margin-top: 100px;
        font-family: "Hedvig Letters Serif", sans-serif;
    }

    #dates {
        color: pink;
        margin-left: 10px;
        font-size: 14px;
        font-weight: bold;
    }

    #trait {
        border-bottom: crimson 5px solid;
        width: 400px;
        margin-bottom: 25px;
    }

    #trait2 {
        border-bottom: crimson 2px solid;
        width: 250px;
        margin-bottom: 20px;
    }
</style>