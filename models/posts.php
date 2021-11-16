<?php

require_once 'database.php';

function getPosts()
{
    $db = initDatabse();
    $recipesStatement = $db->prepare('SELECT * FROM lpweb_mvc.posts');
    $recipesStatement->execute();
    $data = $recipesStatement->fetchAll();

    return $data;
}
/** Doit contenir les méthodes pour  traiter les postes.
 * Rappel : Le modèle fait appel à la base de données.
 * Il doit donc contenir les requêtes et s'occuper au maximum du traitement des données
 */
