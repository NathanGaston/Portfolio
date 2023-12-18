<!-- ________________CODE HTML____________________ -->

<body class="competences-page">
    <section id="Competences">
        <div class="content-Competences">
            <h1><strong>MES COMPÉTENCES : DÉVELOPPEMENT</strong></h1>
            <div class="images">
                <img src="img/competences/html-competences.png" height="275" width="275">
                <img src="img/competences/css-competences.png" height="275" width="275">
                <img src="img/competences/php-competences.png" height="275" width="275">
            </div>
            <div class="images">
                <img src="img/competences/sql-competences.png" height="275" width="275">
                <img src="img/competences/python-competences.png" height="275" width="275">
                <img src="img/competences/js-competences.png" height="275" width="275">
            </div>
            <a class="next-button" href="?page=Competences-page2">
                <img src="img/competences/next_button.png" height="100" width="100">
                <p><strong>INFORMATIQUE</strong></p>
            </a>
        </div>
    </section>

<!-- ________________CODE CSS____________________ -->

    <style>
        #Competences {
            display: flex;
            color: white;
            justify-content: center;
            align-items: center;
            width: 100%; 
            height: 100vh;
            background-color: transparent;
            font-family: "Pixelify Sans", sans-serif;
        }

        .content-Competences {
            text-align: center; 
            padding: 50px;
        }

        .content-Competences h1 {
            font-size: 28px;
            border-bottom: solid 2px white;
            width: 60%;
            margin-left: auto;
            margin-right: auto;
            margin-top: 50px;
            background-color: black;
        }

        .images {
            display: flex;
            margin-top: 20px; 
            flex-direction: row;
            justify-content: space-around; 
        }

        .images img {
            margin: 0 10px;
        }

        .next-button {
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

        .next-button:hover {
            transform: scale(1.1)
        }
    </style>
</section>
</body>