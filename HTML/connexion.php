<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>KBK</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="../CSS/css_general.css" />
        <link rel="stylesheet" type="text/css" href="../CSS/css_formulaire.css" />
    </head>
    <body>
       <h1>Connexion</h1>
       <fieldset>
           <legend><h2>Formulaire d'authentification</h2></legend>
           <form method="post" target="_top" action="formulaires/administration.php">
            <table>
                <tr><td><label for="login"><h3>Login : </h3></label></td><td><input id="login" name="login" class="informations"
                <?php
                    if (isset($_COOKIE['login']))
                    {
                        echo 'value="'.$_COOKIE['login'].'" ';
                    }
                ?>
                type="text" placeholder="entez un login" pattern="[A-Za-z]{8}" required></td></tr>
                <tr><td><label for="pwd"><h3>Mot de passe : </h3></label></td><td><input id="pwd" class="informations" type="password" pattern="[A-Za-z0-9]{8}" placeholder="entrez un mot de passe" required></td></tr>

                <tr><td><input class="boutonEnvoyer" type="submit" value="envoyer"/></td><td><input class="boutonAnnuler" type="reset" value="annuler"/></td></tr>
            </table>
           </form>
       </fieldset>
    </body>
</html>