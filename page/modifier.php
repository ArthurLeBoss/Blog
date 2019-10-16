<?php

    require_once '../includes/config.php';
    $id = $_GET['id'];
    $recup = recuperer_article($id);


if (isset($_POST['submit2']))
        {
            $titre = $_POST['titre'];
            $categorie = $_POST['categorie'];
            $contenu = $_POST['contenu'];
            update_article($id, $titre, $categorie, $contenu);
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
            <h1>Modification d'article</h1>

            <form method="post" action="">
                <label for="titre">Titre</label>
                <input type="text" name="titre" class="form-control" value="<?= $recup['titre']?>">
                <label for="titre">Categorie</label>
                <input type="text" name="categorie" class="form-control" value="<?= $recup['categorie']?>">
                <div class="form-group">
                    <label for="contenu">Contenu</label>
                    <textarea type="text" name="contenu" class="form-control" id="contenu" rows="10" ><?= $recup['contenu']?></textarea>
                </div>

                <input class="form-control" id="submit2" name="submit2" type="submit" value="Valider">
            </form> 
            <a class="nav-item nav-link" href="../public/index.php">Voir tous les articles</a>
        </div>

</body>

</html>