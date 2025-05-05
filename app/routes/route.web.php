<?php
require_once __DIR__ ."/../enums/fonction.php";
require_once __DIR__ .'/../controllers/error.controller.php';
require_once __DIR__ .'/../controllers/controller.connexion.php';
require_once __DIR__ .'/../controllers/controller.int.mdp.php';
require_once __DIR__ .'/../controllers/controller.layout.php';
require_once __DIR__ .'/../controllers/controller.changermdp.php';
require_once __DIR__ .'/../controllers/controller.promotion.php';

function mes_request(): void{
    $page = $_REQUEST['page'] ?? 'connexion';
    match($page){
         'page_connexion'=> mes_actions_connexion(),
         'int_mdp'=> mes_actions_int_mdp(),
         'promotion' => mes_actions_promotion(),
         'page_changermdp' => mes_actions_changer_mdp(),
         default => afficherPageErreur(),
    };
}
mes_request();


