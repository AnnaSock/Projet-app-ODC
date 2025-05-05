<?php
require_once __DIR__ . "/model.php";

$model_connexion = [
    'se_connecter' => function(string $login, string $password):bool {
        global $models;
        $fichier_json = $models["json_to_array"]();
        $users = $fichier_json['utilisateurs'];

        $utilisateurTrouve = array_filter($users, function ($user) use ($login, $password) {
            return $user['login'] === $login && $user['password'] === $password;
        });
    
        return !empty($utilisateurTrouve);
}
];
        
        