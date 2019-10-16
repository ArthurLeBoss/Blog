<?php

function get_all_article()
{
    global $db;
    $sth = $db->query("SELECT * FROM article");
    return $sth->fetchAll();
}

function ajouter_article($titre, $categorie, $contenu)
{
    global $db;
    $sth = $db->prepare('INSERT INTO article(titre, categorie, contenu) VALUES(:titre, :categorie, :contenu)');
    $sth->execute(array(
        'titre' => $titre,
        'categorie' => $categorie,
        'contenu' => $contenu 
    ));
}

function recuperer_article($id)
{
    global $db;
    $sth = $db->prepare('SELECT * FROM article where id=?');
    $sth->execute(array($id));
    return $sth->fetch();
}

function update_article($id, $titre, $categorie, $contenu)
{
    global $db;
    $sth = $db->prepare("UPDATE article SET titre=?, categorie=?, contenu=? WHERE id=?");
    $sth->execute(array($titre, $categorie, $contenu, $id));
}

function delete_article($id)
{
    global $db;
    $sth = $db->prepare("DELETE FROM article WHERE id=?");
    $sth->execute(array($id));
}