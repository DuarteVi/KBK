<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>KBK</title>
        <meta charset="utf-8"/>
        <link rel="icon" type="image/png" href="../images/logo.png">
        <link rel="stylesheet" type="text/css" href="../../CSS/css_general.css" />
        <link rel="stylesheet" type="text/css" href="../../CSS/css_vetement.css" />
    </head>
    <body>
        <header>
            <a id="logoretour" href="../../index.html"><img  class="logopetit" src="../images/logo.png" alt="logo du site"></a>
            <div><h1>V&ecirc;tement 2</h1></div>
        </header>

        <?php
            require '../../PHP/requete.php';
            
            $listeVetement = listeProduitInterval(6,10);

            if (empty($listeVetement)){
                echo '<section id="hautDePage">';
                    echo '<div><h2>';

                        echo '<br/>';
                        echo 'La page est actuellement vide.';
                        echo '<br/><br/>';
                        echo 'Revenez apr&egrave;s que plus d\'articles soient enregistr&eacute;s.';
                        echo '<br/>';
                        echo '<br/>';

                    echo '</h2></div>';
                echo '</section>';
            }
            else
            {

                echo '<section id="hautDePage">';
                for ($i = 0; $i < sizeof($listeVetement); $i++) {
                    echo '<div><h2><a href="#section'.($i+1).'">Section '.($i+1).'</a></h2></div>';
                }
                echo '</section>';

                for ($i = 0; $i < sizeof($listeVetement); $i++) {
                    echo '<section id="section'.($i+1).'">
                    <header>
                        <div><table>
                            <tr><td>Fabriquant : </td><td>';

                        echo $listeVetement[$i]->getFabriquant();

                    echo '</td></tr>
                            </table></div>
                            <div><table>
                                <tr><td>Couturier : </td><td>Louane Flame</td></tr>
                            </table></div>
                            <div><a href="#hautDePage">Haut de page</a></div>
                        </header>
                        <figure><img src="../../';

                        echo $listeVetement[$i]->getPhoto();

                    echo '" alt="Photo du v&ecirc;tement num&eacute;ro '.($i+1).'"/>
                    <figcaption>';

                        echo '<h1>'.$listeVetement[$i]->getNom().'</h1>';
                        echo $listeVetement[$i]->getDescription();

                    echo ' </figcaption> 
                    </figure>
                    <footer>
                        <div><table>
                            <tr><td>Prix : </td><td>';

                            echo $listeVetement[$i]->getPrix();

                    echo ' $</td></tr>
                            </table></div>
                            <div><a href="#section5">Bas de page</a></div>
                        </footer>
                    </section>';
                }
            }
        ?>
        <footer>
            <div>
                <a href="../accueil.php">Retour</a>
            </div>
        </footer>
    </body>
</html>