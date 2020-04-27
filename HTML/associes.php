<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>KBK</title>
        <meta charset="utf-8"/>


        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/> 
        <link rel="stylesheet" type="text/css" href="../CSS/css_general.css" />
        <link rel="stylesheet" type="text/css" href="../CSS/css_associes.css" />

        <!-- icons gratuites -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"/>
                
    </head>
    <body>
    <h1>Associ&eacute;s</h1>

    <?php
            require '../PHP/requete.php';
            $listeEmploye = listeEmploye();

    echo '
        <table id="listeAssocies" class="display" style="width:90%">
            <thead>
                <tr>
                    <th><h3>Nom</h3></th>
                    <th><h3>Pr&eacute;nom</h3></th>
                    <th><h3>Fonction</h3></th>
                    <th><h3>T&eacute;l&eacute;phone</h3></th>
                    <th><h3>Courriel</h3></th>
                </tr>
            </thead>
            <tbody>';
        

            foreach( $listeEmploye as $employe)
            {
                echo "<tr>";
                    echo '<td>';
                        echo $employe->getNom() ;
                    echo '</td>';

                    echo '<td>';
                        echo $employe->getPrenom() ;
                    echo '</td>';

                    echo '<td>';
                        echo $employe->getFonction() ;
                    echo '</td>';

                    echo '<td>';
                        echo '<i class="fas fa-phone"></i><a href="tel:'.$employe->getTel().'">'.$employe->getTel().'</a>';
                    echo '</td>';

                    echo '<td>';
                        echo '<i class="fas fa-envelope"></i><a href="mailto:'.$employe->getCourriel().'">'.$employe->getCourriel().'</a>' ;
                    echo '</td>';        

                echo "</tr>";

            }


    ?>
    </tbody>
        <tfoot>
            <tr>
                    <th><h3>Nom</h3></th>
                    <th><h3>Pr&eacute;nom</h3></th>
                    <th><h3>Fonction</h3></th>
                    <th><h3>T&eacute;l&eacute;phone</h3></th>
                    <th><h3>Courriel</h3></th>
                </tr>
        </tfoot>
    </table>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/w/dt/dt-1.10.19/datatables.min.js"></script>
        <script type="text/javascript" src="../JS/js_associes.js"></script>
    </body>
</html>