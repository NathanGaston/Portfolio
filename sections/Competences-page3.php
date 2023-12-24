<!-- ________________CODE HTML____________________ -->

<body class="competences-page3">
    <section id="Competences3">
        <div class="content-Competences3">
            <h1><strong>MES COMPÉTENCES : LANGUES</strong></h1>
            <div class="images3">
                <img src="img/competences/french-competences.png" height="275" width="275">
                <img src="img/competences/english-competences.png" height="275" width="275">
                <img src="img/competences/spanish-competences.png" height="275" width="275">
            </div>
            <a class="previous-button2" href="?page=Competences-page2">
                <img src="img/competences/previous_button.png" height="100" width="100">
                <p><strong>INFORMATIQUE</strong></p>
            </a>
        </div>
    </section>

<!-- ________________CODE CSS____________________ -->

    <style>
        #Competences3 {
            display: flex;
            color: white;
            justify-content: center;
            align-items: center;
            width: 100%; 
            height: 100vh;
            background-color: transparent;
            font-family: "Pixelify Sans", sans-serif;
        }

        .content-Competences3 {
            text-align: center; 
            padding: 50px;
        }

        .content-Competences3 h1 {
            font-size: 28px;
            border-bottom: solid 2px white;
            width: 50%;
            margin-left: auto;
            margin-right: auto;
            margin-top: 50px;
            background-color: black;
        }

        .images3 {
            display: flex;
            margin-top: 20px; 
            flex-direction: row;
            justify-content: space-around;  
        }


        .images3 img {
            margin: 0 10px;
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