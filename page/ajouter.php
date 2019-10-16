<?php

    // $bdd = new PDO('mysql:host=localhost;dbname=miniblog;charset=utf8', 'root', '');
    require_once '../includes/config.php';
     
    
if (isset($_POST['submit1']))
    {
        // if(empty($titre) || empty($categorie) || empty($contenu))
        // {

        // } else {

            $titre = $_POST['titre'];
            $categorie = $_POST['categorie'];
            $contenu = $_POST['contenu'];
            ajouter_article($titre, $categorie, $contenu);
            header('location:../public/index.php');
    }
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Mini-blog</title>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
	<link href="../css/mdb.css" rel="stylesheet">
	<!--CSS-->
	<link rel="stylesheet" href="../css/style.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <div class="in">

        <div class="article">
       
            <h1>Ajouter un article</h1>

            <form method="post" action="">
                <label for="titre">Titre</label>
                <input type="text" name="titre" class="form-control" placeholder="Entrer le titre de l'article...">
                <label for="titre">Categorie</label>
                <input type="text" name="categorie" class="form-control" placeholder="Entrer le nom de la categorie...">
                <div class="form-group">
                    <label for="contenu">Contenu</label>
                    <textarea type="text" name="contenu" class="form-control" id="contenu" rows="10" placeholder="Entrer votre message..."></textarea>
                </div>

                <input class="form-control" id ="submit1" name="submit1" type="submit" value="Valider">
            </form>
        </div>

    </div>
</body>

</html>