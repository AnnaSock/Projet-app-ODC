<?php

require_once __DIR__ . "/../models/model.connexion.php";
require_once __DIR__ . "/controller.php";


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
            return render('/connexions/page_connexion.html.php',['erreurs' => $GLOBALS['erreurs'], ]);
        }

        $Connecter = $model_connexion['se_connecter']($login, $password);

        if ($Connecter){
            return     render('/base.layout.html.php');

        } else {
            return render('/connexions/page_connexion.html.php',[ 'erreurs' => $GLOBALS['erreurs'] ]);
        }
    } else {
        return render('/connexions/page_connexion.html.php',[ 'erreurs' => $GLOBALS['erreurs'] ]);
    }
}
