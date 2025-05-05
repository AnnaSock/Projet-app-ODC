<?php
require_once __DIR__ ."/../enums/chemins.php";
require_once __DIR__ .chemins::FONCTION -> value;

require_once __DIR__ .Chemins::CHEF_MODEL -> value;


$model_connexion = [
    Fonction::SE_CONNECTER -> value => function(string $login, string $password):bool {
        global $models;
        $fichier_json = $models["json_to_array"]();
        $users = $fichier_json['utilisateurs'];

        $utilisateurTrouve = array_filter($users, function ($user) use ($login, $password) {
            return $user['login'] === $login && $user['password'] === $password;
        });
    
        return !empty($utilisateurTrouve);
}
];
        
        