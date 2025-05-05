<?php
function afficherPageErreur() {
    echo "<h1>Erreur 404 : Page introuvable</h1>";
}

$erreurs = [];

function ajouter_erreur(string $key, string $message){
    global $erreurs;
    $erreurs[$key] = $message;
}

function recuperer_erreur(string $key){
    global $erreurs;
    return $erreurs[$key] ?? '';
}

function amna_erreur():bool{
    global $erreurs;
    return !empty($erreurs);

}
 
function supprimer_erreur(){
    global $erreurs;
    $erreurs = [];
}