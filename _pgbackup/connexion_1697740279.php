<?php
    include('conn.php');
    include('constantes.php');
    $compte = 0;
    $msg = "Veuillez insérer vos informations personnelles";
    //Traitement du formulaire de Connexion
    @$le_mail = $_POST['email'];
    @$le_mdp = $_POST['mdp'];
    if(isset($_POST['btn'])){
        //Vérification de l'existance de l'adresse mail
        $req = mysqli_query($cnx, "SELECT * FROM tb_clients WHERE Email='$le_mail' AND Mdp='$le_mdp'");
        while($rar = mysqli_fetch_array($req)){
            $compte += 1;
            break;
        }
        if($req){
            $msg = "Les informations saisie ne sont pas correct.<br> veuillez réessayer";
        }else{
            //Tout s'est bien passé
            $msg = "Bienvenue";
            //header('location:');
        }
    }
?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="description" content=""/>
        <title>
            <?= $APP_NAME?> - Connexion
        </title>
        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
        <!-- Custom styles for this template -->
        <link href="sign-in.css" rel="stylesheet"/>
    </head>
    <body class="text-center">
        <main class="form-signin">
            <form method="POST" action="">
                <img class="mb-4" src="assets/img/favicons/logo_site_web.png" alt="" height="57"/>
                <h1 class="h3 mb-3 fw-normal" style="font-size:20px"><?= $msg?></h1>
                <label for="inputEmail" class="visually-hidden">Email address</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Adresse email" required="" autofocus="" name="email"/>
                <label for="inputPassword" class="visually-hidden">Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required="" name="mdp"/>
                <div class="checkbox mb-3" style="display:none;">
                    <label>
                        <input type="checkbox" value="remember-me"/> Se souvenir de moi
                    </label>
                </div>
                <input class="w-100 btn btn-lg btn-primary" name="btn" type="submit" value="Se connecter"/>
            </form>
            <p style="margin-top:30px;">Vous n'avez pas de compte ? <a href="compte.php">Créer un compte ici</a></p>
            <p class="mt-5 mb-3 text-muted">© 2023 <?= $APP_NAME ?> Inc</p>
        </main>
        <script src="assets/js/popper.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
