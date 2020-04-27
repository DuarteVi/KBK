<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>KBK</title>
        <meta charset="utf-8"/>
        <link rel="icon" type="image/png" href="images/logo.png">
        <link rel="stylesheet" type="text/css" href="../CSS/css_general.css" />
        <link rel="stylesheet" type="text/css" href="../CSS/css_accueil.css" />
        <script type="text/javascript" src="../JS/js_accueil.js"></script>
    </head>
    <body>
        <header>
            <a href="../index.html" id="logoretour"><img class="logopetit" src="images/logo.png" alt="logo du site"></a>
            <div><a href="magasin.html" target="myFrame">Magasin</a></div>
            <div onclick="gerant()"><a href="">G&eacute;rant</a></div>
            <div><a href="contact.html" target="myFrame">Contact</a></div>
            <div><a href="anniversaire.php" target="myFrame">Anniversaire</a></div>
            <div><a href="associes.php" target="myFrame">Associ&eacute;s</a></div>
            <div><a href="connexion.php" target="myFrame">Connexion</a></div>
            
            
        </header>

        <section class="contener">
            <nav>
                <?php
                    include('navigateur.php');
                ?>
            </nav>
                <iframe src="presentation.html" name="myFrame" id="myFrame"></iframe>
        </section>
        <footer>
            <div>Site d&eacute;velopp&eacute; dans le cadre du cours <a href="https://etudier.uqam.ca/cours?sigle=INF3190" target="_blank">INF3190</a> &agrave; <a href="https://uqam.ca/" target="_blank">l'UQAM</a></div>
            <div>D&eacute;velopp&eacute; par : <a href="mailto:ed291038@ens.uqam.ca">Vincent Duarte</a></div>
        </footer>
        
    </body>
</html>