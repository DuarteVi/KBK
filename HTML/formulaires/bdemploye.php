<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>KBK</title>
        <meta charset="utf-8"/>
        <link rel="icon" type="image/png" href="../images/logo.png">
        <link rel="stylesheet" type="text/css" href="../../CSS/css_general.css" />
        <link rel="stylesheet" type="text/css" href="../../CSS/css_donnees.css" />
        <link rel="stylesheet" type="text/css" href="../../CSS/css_vetement.css" />
    </head>
    <body>
        <header>
            <a href="../../index.html"><img class="logopetit" src="../images/logo.png" alt="logo du site"></a>
            <div><h1>Employ&eacute; enregistr&eacute;</h1></div>
        </header>

        <?php

        require '../../PHP/requete.php';

        
        if (!isset($_REQUEST['soumettre']))
        {
            echo "<h1>Information(s) manquante(s)</h1>";
            echo "<h1>Veuillez remplire toutes les informations demandées</h1>";
        }
        else
        {

            $infoFich = $_FILES["photoEmploye"];
            $fileName = $infoFich['name']; // nom du fichier chargé par l'utilisateur
            $tmpFile=$infoFich['tmp_name'];// fichier temporaire après téléversement
            $saveDir="HTML/images";
            $savedFile="$saveDir"."/$fileName";

            //On retourne à la racine relative de notre dossier
            chdir("../..")||die("<span style='color:red'>erreur avec la commande chdir()</span>");

            if(!file_exists($saveDir)){
                //si le dossier n'existe pas
                echo "<br/><br/>".getcwd();
                mkdir("$saveDir")||die("<span style='color:red'>impossible de créer le dossier $saveDir</span>");
            }
            
            move_uploaded_file("$tmpFile","$savedFile")||die("<span style='color:red'>impossible de saugarder $fileName  dans $saveDir</span>");
            

            $nomEmploye=$_REQUEST["nomEmploye"];
            $prenomEmploye=$_REQUEST["prenomEmploye"];
            $fonctionEmploye=$_REQUEST["fonctionEmploye"];
            $dateEmploye=$_REQUEST["dateEmploye"];
            $courrielEmploye=$_REQUEST["courrielEmploye"];
            $telEmploye=$_REQUEST["telEmploye"];
            $photoEmploye=$savedFile;
            $record=array(
                'nom'=>"$nomEmploye",
                'prenom'=>"$prenomEmploye",
                'fonction'=>"$fonctionEmploye",
                'datenaissance'=>"$dateEmploye",
                'photo'=>"$photoEmploye",
                'courriel'=>"$courrielEmploye",
                'telephone'=>"$telEmploye"
            );
            $insertionReussit = $database->insert("employes",$record); 
            
            if (!$insertionReussit)
            { 
                echo "<h1>Echec d'insertion dans la base de données</h1>";
            }
            else
            {
                //On sépare les éléments de la date pour les afficher plus lisiblement
                $annee = $dateEmploye[0]."".$dateEmploye[1]."".$dateEmploye[2]."".$dateEmploye[3];
                $mois = $dateEmploye[5]."".$dateEmploye[6];
                $jour = $dateEmploye[8]."".$dateEmploye[9];              

                echo "<h1>Récapitulatif de l'employé :</h1>";

                echo '<section>
                    <header>';
                    echo '<div><table>
                            <tr><td>Nom : </td><td>';
                            echo $nomEmploye;
                    echo '</td></tr>
                            </table></div>';

                    echo '<div><table>
                            <tr><td>Prénom : </td><td>';
                            echo $prenomEmploye;
                    echo '</td></tr>
                            </table></div>';

                            echo '<div><table>
                            <tr><td>Né(e) le : </td><td>';
                            echo date("j F Y", mktime(0, 0, 0, $mois, $jour, $annee));
                    echo '</td></tr>
                            </table></div>';


                    echo '</header>
                        <figure><img src="../../HTML/images/';

                        echo $infoFich['name'];

                    echo '" alt="Photo de l\'employé(e) enregistré(e)"/>
                    <figcaption>';

                        echo '<h1>'.$fonctionEmploye.'</h1>';

                    echo ' </figcaption> 
                    </figure>
                    <footer>';
                    echo '<div><table>
                            <tr><td>Courriel : </td><td>';
                            echo $courrielEmploye;
                    echo ' </td></tr>
                            </table></div>';       
                    echo '<div><table>
                            <tr><td>téléphone : </td><td>';
                            echo $telEmploye;
                    echo ' </td></tr>
                            </table></div>';       
                            
                            
                    echo '   </footer>
                    </section>';

            }
            
        }
        ?>
        
        <h2><a href="administration.php">Retour &agrave; la page administration</a></h2><br/>

    </body>
</html>