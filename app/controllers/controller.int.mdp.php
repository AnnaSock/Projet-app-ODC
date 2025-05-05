<?php
require_once __DIR__ ."/../enums/chemins.php";
require_once __DIR__ .Chemins::MODEL_INT_MDP -> value;
require_once __DIR__ .Chemins::CHEF_CONTROLLER -> value;


function mes_actions_int_mdp(){
    $actions= $_REQUEST["action"] ?? 'int_mdp';
    match ($actions){
     'int_mdp'=> Entrer(),
      default => afficherPageErreur(),
 
    };
 }

 function Entrer(){
  global $session_service, $validator_service, $model_int_mdp;
  
  if (isset($_POST['email']) ) {
    $email = $session_service['requet_post']('email');
    if (!$validator_service[FONCTION::VALIDATOR_EMAIL -> value]($email)){
      return render('/connexions/page_changermdp.html.php',['erreurs' => $GLOBALS['erreurs'], ]);
  }

  $Entrer = $model_int_mdp['Entrer']($email,);


  if ($Entrer){
    return     render('/connexions/page_changermdp.html.php');

} else {
    return render('/int.mdp.html.php',[ 'erreurs' => $GLOBALS['erreurs'] ]);
}

 }else {
    return render('/int.mdp.html.php',[ 'erreurs' => $GLOBALS['erreurs'] ]);
 }
    
}




?>