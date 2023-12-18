<!-- ________________CODE HTML____________________ -->

<body class="competences-page2">
    <section id="Competences2">
        <div class="content-Competences2">
            <h1><strong>MES COMPÉTENCES : INFORMATIQUE</strong></h1>
            <div class="images2">
                <img src="img/competences/windows-competences.png" height="225" width="225">
                <img src="img/competences/macos-competences.png" height="225" width="225">
                <img src="img/competences/linux-competences.png" height="225" width="225">
            </div>
            <div class="images3">
                <img src="img/competences/network-competences.png" height="225" width="225">
                <img src="img/competences/fibre-competences.png" height="225" width="225">
                <img src="img/competences/equipements-competences.png" height="225" width="225">
            </div>
            <a class="next-button2" href="?page=Competences-page2">
                <img src="img/competences/next_button.png" height="100" width="100">
                <p><strong>LANGUES</strong></p>
            </a>
            <a class="previous-button2" href="?page=Competences">
                <img src="img/competences/previous_button.png" height="100" width="100">
                <p><strong>DÉVELOPPEMENT</strong></p>
            </a>
        </div>
    </section>

<!-- ________________CODE CSS____________________ -->

    <style>
        #Competences2 {
            display: flex;
            color: white;
            justify-content: center;
            align-items: center;
            width: 100%; 
            height: 100vh;
            background-color: transparent;
            font-family: "Pixelify Sans", sans-serif;
        }

        .content-Competences2 {
            text-align: center; 
            padding: 50px;
        }

        .content-Competences2 h1 {
            font-size: 28px;
            border-bottom: solid 2px white;
            width: 70%;
            margin-left: auto;
            margin-right: auto;
            background-color: black;
        }

        .images2 {
            display: flex;
            margin-top: 20px; 
            flex-direction: row;
            justify-content: space-around; 
        }

        .images3 {
            display: flex;
            margin-top: 20px; 
            flex-direction: row;
            justify-content: space-around; 
            margin-top: 50px;
        }

        .images2 img {
            margin: 0 10px;
        }

        .next-button2 {
            position: absolute;
            top: 45%;
            right: 130px;
            background-color: transparent;
            color: white;
            cursor: pointer;
            font-family: "Pixelify Sans", sans-serif;
            text-decoration: none;
            transition: 0.3s;
        }

        .next-button2:hover {
            transform: scale(1.1)
        }

        .previous-button2 {
            position: absolute;
            top: 45%;
            left: 130px;
            background-color: transparent;
            color: white;
            cursor: pointer;
            font-family: "Pixelify Sans", sans-serif;
            text-decoration: none;
            transition: 0.3s;
        }

        .previous-button2:hover {
            transform: scale(1.1)
        }
    </style>
</section>
</body>