<?php
<<<<<<< HEAD



declare(strict_types=1);
require_once __DIR__ . "/model.php";
global $models;

$model_changermdp= [
    'comparer_mdp' => function(string $nouveau_mdp):bool {
=======
require_once __DIR__ ."/../enums/chemins.php";
require_once __DIR__ .Chemins::CHEF_MODEL -> value;
require_once __DIR__ .chemins::FONCTION -> value;


$model_changermdp= [
    Fonction::COMPARER_MDP -> value => function(string $nouveau_mdp):bool {
>>>>>>> b89b887b3f92b24d80b73a84ca27ebb08e03a3e7
        global $models;
        $fichier_json = $models["json_to_array"]();
        $users = $fichier_json['utilisateurs'];

        $utilisateurTrouve = array_filter($users, function ($user) use ($nouveau_mdp): bool {
            return $user['password'] !== $nouveau_mdp;
        });
    
        return !empty($utilisateurTrouve);
},




];