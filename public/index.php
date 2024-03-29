<?php

require_once '../includes/config.php';

$article = get_all_article();

if(isset($_GET['del']))
{
  $getid = intval($_GET['del']);
  delete_article($getid);
  header('location:index.php');
}

?>


<!DOCTYPE HTML>
<html lang="fr">

<head>
<meta charset="utf-8" />
	<title>Mon blog</title>
	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
	<link href="../css/mdb.css" rel="stylesheet">
	<!--CSS-->
	<link rel="stylesheet" href="../css/style.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

    <!-- Barre de navigation -->
	<nav class="navbar navbar-expand-md navbar-expand-lg scrolling-navbar top-nav-collapse" style="padding-top: 5px; padding-bottom: 5px; background-color: #22313f;">
			<a class="navbar-brand" style="color: white" href="#">Voir les articles</a>
			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="navbar-collapse collapse" id="navbarSupportedContent-7">
				<ul class="navbar-nav mr-auto">
			  	<div class="navbar-nav">
				<a class="nav-item nav-link" href="../page/ajouter.php">Ajouter un article</a>
        <a class="btn btn-info btn-sm" href="../page/inscription.php" role="button">Inscription</a>
        <a class="btn btn-warning btn-sm disabled" href="../page/connexion.php" role="button" >Connexion</a>
			  </div>
			</div>
	 </nav>
    <!-- Fin barre de nav-->
    
   <!-- Article --> 
<div class="container">
<div class="row">
<div class="jumbotron-fluid col-4-sm" style="border-bottom: 2px solid grey; padding: 20px;">
        <?php foreach($article as $article): ?>
            <h2 class="display-4"><?= $article['titre']?></h2>
            <h5 class="display-5"><?=$article['categorie']?></h5>
            <p class="lead"><?=$article['contenu']?></p>
            <a class="btn btn-primary btn-sm" href="../page/lire_plus.php?id=<?= $article['id'] ?>" role="button">Afficher</a>
            <a class="btn btn-success btn-sm" href="../page/modifier.php?id=<?= $article['id'] ?>" role="button">Modifier</a>
            <a class="btn btn-danger btn-sm" href="index.php?del=<?= $article['id'] ?>" role="button" id="submit_suppr" name="submit_suppr">Supprimer</a>
        <?php endforeach; ?>    
    </div>
</div>
    
</div>
   <!-- Article 2  
   <div class="jumbotron-fluid"  style="border-bottom: 2px solid grey; padding: 20px;">
    <h2 class="display-4">PHP</h2>
    <p class="lead">Honnêtement, c'est beaucoup beaucoup beaucoup beaucoup beaucoup beaucoup beaucoup beaucoup beaucoup beaucoup beaucoup beaucoup beaucoup beaucoup beaucoup beaucoup beaucoup trop dure sans indications...</p>
    <a class="btn btn-primary btn-lg" href="#" role="button">Lire plus</a>
  </div>
   
 
  Article 3  
 <div class="jumbotron-fluid"  style="border-bottom: 2px solid grey; padding: 20px;">
    <h2 class="display-4">HTML</h2>
    <p class="lead">L’HyperText Markup Language, généralement abrégé HTML, est le langage de balisage conçu pour représenter les pages web. C’est un langage permettant d’écrire de l’hypertexte, d’où son nom.</p>
    <a class="btn btn-primary btn-lg" href="#" role="button">Lire plus</a>
  </div>
 
 - Article 4  
 <div class="jumbotron-fluid"  style="padding: 20px;">
    <h2 class="display-4">CSS</h2>
    <p class="lead">Les feuilles de style en cascade, généralement appelées CSS de l'anglais Cascading Style Sheets, forment un langage informatique qui décrit la présentation des documents HTML et XML. Les standards définissant CSS sont publiés par le World Wide Web Consortium</p>
    <a class="btn btn-primary btn-lg" href="#" role="button">Lire</a>
  </div>
     

 -->
   
 <!-- Footer -->
 <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Arthur 2019</p>
    </div>
    <!-- /.container -->
  </footer>


</body>
</html>