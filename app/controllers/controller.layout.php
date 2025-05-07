<?php
<<<<<<< HEAD
// require_once __DIR__ ."/../models/model.layout.php";
require_once __DIR__ ."/controller.php";
=======
require_once __DIR__ ."/../enums/chemins.php";
require_once __DIR__ .Chemins::CHEF_CONTROLLER -> value;
>>>>>>> b89b887b3f92b24d80b73a84ca27ebb08e03a3e7

function mes_actions_layout(){
    $actions= $_REQUEST["action"] ?? 'layout';
    match($actions){
        'layout'=> afficher_layout(),
        default => afficherPageErreur(),
        
    };


}
  
function afficher_layout(){
    render('/base.layout.html.php');
}












