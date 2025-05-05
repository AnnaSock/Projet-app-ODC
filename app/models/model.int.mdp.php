<?php
require_once __DIR__ . "/model.php";

$model_int_mdp= [
    'Entrer' => function(string $email):bool{
        global $models;
        $fichier_json = $models["json_to_array"]();
        $users = $fichier_json['utilisateurs'];

        $utilisateurTrouve = array_filter($users, function ($user) use ($email) {
            return $user['login'] === $email;
        });
    return !empty($utilisateurTrouve);
    }
];