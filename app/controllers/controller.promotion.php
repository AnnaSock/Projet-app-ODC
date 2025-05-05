<?php 
require_once __DIR__ ."/controller.php";


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