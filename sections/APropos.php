<head>
    <title>À propos</title>
</head>

<body class="apropos-page">
<section id="APropos">
    <div class="content-APropos">
        <img src="img//apropos/me.jpg" alt="Me" width="300" height="350">
        <?php
        echo "<h2>ENCHANTÉ</h2>\n";
        foreach($data["apropos"]as $uneInfo){
            echo "<p>".$uneInfo."</p>\n";
        };
        ?>

    </div>

    <style>

        #APropos {
            display: flex;
            color: white;
            Justify-content: center;
            Align-items: center;
            Margin-top: 100px;
            width: 100%;
            height: 80vh;
            background-color: transparent;
            font-family: "Hedvig Letters Serif", sans-serif;
        }
        .content-APropos {
            text-align: center; 
            padding: 50px;
        }
    </style>
</section>
</body>
