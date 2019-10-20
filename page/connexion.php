<?php

    // Je n'ai malheureusement pas réussi à faire la page de connexion ... 
    require_once '../includes/config.php';

    if(!empty($_POST['connexion']))
    {
        
        if(!empty($_POST['mail']) && !empty($_POST['password']))
        {
            if(($POST['mail'] == $mail) && ($_POST['password'] == $password))
            {
                echo "vous êtes connecté";
                // connexion($password);
                // header('location:../public/index.php');
            }
            else {

                Alert("Veuillez entrer un mot de passe valide");
            }
            
        }
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
	<link href="../css/mdb.css" rel="stylesheet">
	<!--CSS-->
	<link rel="stylesheet" href="../css/style.css" type="text/css" />
    <title>Document</title>
</head>
<body>
<div class="in">
    <div class="article">
    <h1>Connexion</h1>
        <form method="post" action="">
            <label for="titre">Email</label>
            <input type="text" name="mail" class="form-control" placeholder="Entrer votre mail...">
            <label for="contenu">Mot de passe</label>
            <input type="password" id="password" name="password" placeholder="Entrer votre mot de passe..." class="form-control" style="margin-bottom: 2%;">
            <input class="form-control" id ="submit1" name="connexion" type="submit" value="Valider">
        </form>
</div>
</body>
</html>