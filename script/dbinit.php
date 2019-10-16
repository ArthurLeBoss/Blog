<?php

require_once '/code/includes/config.php';

$sth = $db->query("CREATE TABLE IF NOT EXISTS article (
    id              SERIAL PRIMARY KEY,
    titre           VARCHAR(100) NOT NULL,
    categorie       VARCHAR(100) NOT NULL,
    contenu         TEXT NOT NULL,
    datea           DATE
);
");



