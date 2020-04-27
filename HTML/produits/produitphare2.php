<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>KBK</title>
        <meta charset="utf-8"/>
        <link rel="icon" type="image/png" href="../images/logo.png">
        <link rel="stylesheet" type="text/css" href="../../CSS/css_general.css" />
        <link rel="stylesheet" type="text/css" href="../../CSS/css_produitphare.css" />
    </head>
    <body>
    <?php
        require '../../PHP/requete.php';
        $produitPhare = listeProduitPhare();
        echo '<h1>'.$produitPhare[1]->getNom().'</h1>';
        echo '<dl>';
            echo '<dt><h2>Description du produit</h2></dt>';
            echo '<dd>'.$produitPhare[1]->getDescription().'</dd>';
        echo '</dl>';
        ?>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/6t3wACMqTvo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </body>
</html>