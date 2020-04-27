<?php
    if (isset($_POST['login']))
    {
        if (!isset($_COOKIE['login']))
        {
            setcookie('login', $_POST['login']);
        }
        else
        {
            setcookie('login', $_POST['login'], -1, '/');
        }
    }    
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>KBK</title>
        <meta charset="utf-8"/>
        <link rel="icon" type="image/png" href="../images/logo.png">
        <link rel="stylesheet" type="text/css" href="../../CSS/css_general.css" />
        <link rel="stylesheet" type="text/css" href="../../CSS/css_formulaire.css" />
    </head>
    <body>
        <header>
            <a href="../../index.html"><img class="logopetit" src="../images/logo.png" alt="logo du site"></a>
            <div><h1>Administration</h1></div>
        </header>
       
        <fieldset>
            <legend><h2>Formulaire d'un produit</h2></legend>
            <form method="post" target="_top" enctype="multipart/form-data" action="bdproduit.php">
            <table>
                <tr><td><label for="nomProduit"><h3>Nom du produit : </h3></label></td><td><input id="nomProduit" name="nomProduit" class="informations" type="text" placeholder="Entez un nom" maxlength="64" required></td></tr>
                <tr><td><label for="descProduit"><h3>Description : </h3></label></td><td><textarea class="informations" id="descProduit" name="descProduit" rows="4" cols="30" placeholder="Ecrivez ici" maxlength="256" required></textarea></td></tr>
                <tr><td><label for="fabriquantProduit"><h3>Fabriquant : </h3></label></td><td><input id="fabriquantProduit" name="fabriquantProduit" class="informations" type="text" placeholder="Entez un nom" maxlength="255" required></td></tr>
                <tr><td><label for="prixProduit"><h3>Prix du produit (en $) : </h3></label></td><td><input id="prixProduit" name="prixProduit" class="informations" type="number" placeholder="Entez un nombre" min="0" step=".0001" required></td></tr>
                <tr><td><label for="photoProduit"><h3>Photo du produit : </h3></label></td><td><input class="informations" id="photoProduit" name="photoProduit" type="file" required></td></tr>
                <tr><td><input class="boutonEnvoyer" type="submit" name="soumettre" value="envoyer"></td><td><input class="boutonAnnuler" type="reset" value="annuler"></td></tr>
            </table>
            </form>
        </fieldset>

        <br/><hr/><br/>
       
        <fieldset>
            <legend><h2>Formulaire d'un employ&eacute;</h2></legend>
            <form method="post" target="_top" enctype="multipart/form-data" action="bdemploye.php">
            <table>
                <tr><td><label for="nomEmploye"><h3>Nom : </h3></label></td><td><input class="informations" name="nomEmploye" id="nomEmploye" type="text" placeholder="Entez un nom" maxlength="25" required></td></tr>
                <tr><td><label for="prenomEmploye"><h3>Pr&eacute;nom : </h3></label></td><td><input class="informations" name="prenomEmploye" id="prenomEmploye" type="text" placeholder="Entez un pr&eacute;nom" maxlength="25" required></td></tr>
                <tr><td><label for="fonctionEmploye"><h3>Fonction : </h3></label></td><td><input class="informations" name="fonctionEmploye" id="fonctionEmploye" type="text" placeholder="Entrez une fonction" maxlength="64" required></td></tr>
                <tr><td><label for="dateEmploye"><h3>Date de naissance : </h3></label></td><td><input class="informations" name="dateEmploye" id="dateEmploye" type="date"
                <?php echo 'max="'.date('Y-m-d').'"'; ?>
                 value = "1990-01-01" required></td></tr>
                <tr><td><label for="courrielEmploye"><h3>courriel : </h3></label></td><td><input class="informations" name="courrielEmploye" id="courrielEmploye" type="email" placeholder="adresse@mail" maxlength="254" required></td></tr>
                <tr><td><label for="telEmploye"><h3>t&eacute;l&eacute;phone : </h3></label></td><td><input class="informations" name="telEmploye" id="telEmploye" type="tel" placeholder="chiffres seulement" maxlength="20" required></td></tr>
                <tr><td><label for="photoEmploye"><h3>Photo : </h3></label></td><td><input class="informations" id="photoEmploye" name="photoEmploye" type="file" required></td></tr>
                <tr><td><input class="boutonEnvoyer" name="soumettre" type="submit" value="envoyer"></td><td><input class="boutonAnnuler" type="reset" value="annuler"></td></tr>
            </table>
            </form>
        </fieldset>

        <footer><div><a href="../accueil.php">Retour &agrave; l'accueil</a></div></footer>
    </body>
</html>