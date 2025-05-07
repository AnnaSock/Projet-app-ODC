<?php
<<<<<<< HEAD
require_once __DIR__ ."/../enums/fonction.php";
require_once __DIR__ .'/../controllers/error.controller.php';
require_once __DIR__ .'/../controllers/controller.connexion.php';
require_once __DIR__ .'/../controllers/controller.int.mdp.php';
require_once __DIR__ .'/../controllers/controller.layout.php';
require_once __DIR__ .'/../controllers/controller.changermdp.php';
require_once __DIR__ .'/../controllers/controller.promotion.php';

function mes_request(): void{
    $page = $_REQUEST['page'] ?? 'connexion';
=======
require_once __DIR__ ."/../enums/chemins.php";
require_once __DIR__ .Chemins::FONCTION -> value;
require_once __DIR__ .Chemins::ERROR_CONTROLLER -> value;
require_once __DIR__ .Chemins::CONTROLLER_CONNEXION -> value;
require_once __DIR__ .Chemins::CONTROLLER_INT_MDP -> value;
require_once __DIR__ .Chemins::CONTROLLER_LAYOUT -> value;
require_once __DIR__ .chemins::CONTROLLER_CHANGER_MDP -> value;
require_once __DIR__ .Chemins::CONTROLLER_PROMOTION -> value;

function mes_request(): void{
    $page = $_REQUEST['page'] ?? 'page_connexion';
>>>>>>> b89b887b3f92b24d80b73a84ca27ebb08e03a3e7
    match($page){
         'page_connexion'=> mes_actions_connexion(),
         'int_mdp'=> mes_actions_int_mdp(),
         'promotion' => mes_actions_promotion(),
         'page_changermdp' => mes_actions_changer_mdp(),
         default => afficherPageErreur(),
    };
}
mes_request();


