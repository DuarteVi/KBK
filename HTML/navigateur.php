<?php

    require '../PHP/requete.php';

    echo '<h3 style="text-align:center;">Produits Phares</h3>';

    $produitPhare = listeProduitPhare();
    if (!empty($produitPhare))
    {
        echo '<div onclick="produitphare1()"><a href="">'.$produitPhare[0]->getNom().'</a></div>';

        if ( sizeof($produitPhare) > 1 )
        {
            echo '<div onclick="produitphare2()"><a href="">'.$produitPhare[1]->getNom().'</a></div>';
        }   
    }

    echo '<hr/>';

    echo '<br/><h3 style="text-align:center;">V&ecirc;tements</h3>';

    echo '<div><a href="produits/vetement1.php">V&ecirc;tement 1</a></div>';
    echo '<div><a href="produits/vetement2.php">V&ecirc;tement 2</a></div>';
    echo '<div><a href="produits/vetement3.php">V&ecirc;tement 3</a></div>';

?>