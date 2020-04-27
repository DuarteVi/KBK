<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>KBK</title>
        <meta charset="utf-8"/>
        
        <!--<link rel="stylesheet" type="text/css" href="../CSS/CSS_bootstrap.min.css" />-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <link rel="stylesheet" type="text/css" href="../CSS/css_general.css" />
        <link rel="stylesheet" type="text/css" href="../CSS/css_anniversaire.css" />

        <!-- icons gratuites -->
        <!--
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"/>
        --> 
                
    </head>
    <body>
       
       <div class="container">
       
       <h1 class="mb-5 mt-3" >Anniversaire</h1>
            <table class="table table-hover">
            <thead class="thead-light">
                <tr>
                    <th><h2>Pr&eacute;nom</h2></th>
                    <th><h2>Photo</h2></th>
                    <th><h2>Jour de Naissance</h2></th>
                    <th><h2>Mois de Naissance</h2></th>
                </tr>
            </thead>
            <tbody>
                
                <?php
                    require '../PHP/requete.php';

                    $listeEmploye = listeEmploye();

                    foreach( $listeEmploye as $employe)
                    {
                        echo "<tr>";
                            echo '<td class="align-middle text-center" >';
                                echo $employe->getPrenom() ;
                            echo '</td>';
                        
                            echo '<td class="align-middle text-center" >';
                                echo '<img src="../'.$employe->getPhoto().'" alt="test" class="img-thumbnail rounded mx-auto d-block">';
                            echo '</td>';
                        
                            echo '<td class="align-middle text-center" >';
                                echo date("j", mktime(0, 0, 0, 1, $employe->getJour(), 1));
                            echo '</td>';
                        
                            echo '<td class="align-middle text-center" >';
                                echo date("F", mktime(0, 0, 0, $employe->getMois(), 1, 1));
                            echo '</td>';
                        echo "</tr>";

                    }
                ?>

            </tbody>
            </table>
        </div>
    </body>
</html>
