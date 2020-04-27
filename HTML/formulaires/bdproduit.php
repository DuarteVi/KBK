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
            <div><h1>Produit enregistr&eacute;</h1></div>
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

            $infoFich = $_FILES["photoProduit"];
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
            

            $nomProduit=$_REQUEST["nomProduit"];
            $descProduit=$_REQUEST["descProduit"];
            $fabriquantProduit=$_REQUEST["fabriquantProduit"];
            $prixProduit=$_REQUEST["prixProduit"];
            $photoProduit=$savedFile;
            $record=array(
                'nom'=>"$nomProduit",
                'description'=>"$descProduit",
                'fabricant'=>"$fabriquantProduit",
                'prix'=>"$prixProduit",
                'photo'=>"$photoProduit"
            );
            $insertionReussit = $database->insert("produits",$record); 

            if (!$insertionReussit)
            { 
                echo "<h1>Echec d'insertion dans la base de données</h1>";
            }
            else
            {


                echo "<h1>Récapitulatif de votre produit :</h1>";

                echo '<section>
                    <header>
                        <div><table>
                            <tr><td>Fabriquant : </td><td>';

                        echo $fabriquantProduit;

                    echo '</td></tr>
                            </table></div>
                        </header>
                        <figure><img src="../../HTML/images/';

                        echo $infoFich['name'];

                    echo '" alt="Photo du v&ecirc;tement enregistré"/>
                    <figcaption>';

                        echo '<h1>'.$nomProduit.'</h1>';
                        echo $descProduit;

                    echo ' </figcaption> 
                    </figure>
                    <footer>
                        <div><table>
                            <tr><td>Prix : </td><td>';

                            echo $prixProduit;

                    echo ' $</td></tr>
                            </table></div>                        
                        </footer>
                    </section>';

            }
            
        }
        ?>

        <h2><a href="administration.php">Retour &agrave; la page administration</a></h2><br/>
    </body>
</html>