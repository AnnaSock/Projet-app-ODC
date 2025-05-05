<?php
require_once __DIR__ ."/../enums/chemins.php";
require_once __DIR__ .Chemins::CHEF_CONTROLLER -> value;

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












