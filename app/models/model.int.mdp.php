<?php
require_once __DIR__ ."/../enums/chemins.php";
require_once __DIR__ .chemins::FONCTION -> value;
require_once __DIR__ .Chemins::CHEF_MODEL -> value;


$model_int_mdp= [
    Fonction::ENTRER -> value => function(string $email):bool{
        global $models;
        $fichier_json = $models["json_to_array"]();
        $users = $fichier_json['utilisateurs'];

        $utilisateurTrouve = array_filter($users, function ($user) use ($email) {
            return $user['login'] === $email;
        });
    return !empty($utilisateurTrouve);
    }
];