<?php
require_once __DIR__ ."/../enums/chemins.php";
require_once __DIR__ .chemins::MODEL_CONNEXION -> value;
require_once __DIR__ .Chemins::CHEF_CONTROLLER -> value;


function mes_actions_connexion(){
    $actions = $_REQUEST["action"] ?? 'connexion';
    match ($actions) {
        'connexion' => connexion(),
        default => afficherPageErreur(), 
    };
}

function connexion(){
    global $model_connexion, $session_service, $validator_service;

    if (isset($_POST['login']) && isset($_POST['password'])) {
        $login = $session_service['requet_post']('login');
        $password = $session_service['requet_post']('password');

        if ($validator_service[FONCTION::VALIDATOR_CONNEXION -> value]($login, $password)){
            return render(chemins::VUE_CONNEXION -> value,['erreurs' => $GLOBALS['erreurs'], ]);
        }

        $Connecter = $model_connexion['se_connecter']($login, $password);

        if ($Connecter){
            return     render(chemins::VUE_LAYOUT -> value);

        } else {
            return render(chemins::VUE_CONNEXION -> value,[ 'erreurs' => $GLOBALS['erreurs'] ]);
        }
    } else {
        return render(chemins::VUE_CONNEXION -> value,[ 'erreurs' => $GLOBALS['erreurs'] ]);
    }
}
