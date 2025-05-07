<?php 
<<<<<<< HEAD
require_once __DIR__ ."/controller.php";
=======

require_once __DIR__ ."/../enums/chemins.php";
require_once __DIR__ .Chemins::CHEF_CONTROLLER -> value;
>>>>>>> b89b887b3f92b24d80b73a84ca27ebb08e03a3e7


 function mes_actions_promotion(){
    $actions= $_REQUEST["action"] ?? 'layout';
    match($actions){
        'promotion'=> promotion(),
        default => afficherPageErreur(),
        
    };


}
  
function promotion(){
        return render_view_layout('page_promotion.html.php', ['css' => '/assets/css/promotion.css']);
    
} 