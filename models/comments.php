<?php

require_once('database.php');

function getComments()
{
    $db = initDatabse();
    $recipesStatement = $db->prepare('SELECT * FROM lpweb_mvc.comments WHERE post_id ='.$_GET['id']);
    $recipesStatement->execute();
    $data = $recipesStatement->fetchAll();
    return $data;
}

/** Doit contenir les méthodes pour  traiter les commentaires d'un poste
 * Rappel : Le modèle fait appel à la base de donner.
 * Il doit donc contenir les requêtes et s'occuper au maximum du traitement des données
 */
