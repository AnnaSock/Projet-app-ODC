<?php
// require_once __DIR__ ."/../models/model.layout.php";
require_once __DIR__ ."/controller.php";

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












