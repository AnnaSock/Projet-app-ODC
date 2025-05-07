<?php
require_once __DIR__ ."/../enums/chemins.php";
require_once __DIR__ .Chemins::MODEL_CHANGER_MDP -> value;
require_once __DIR__ .Chemins::CHEF_CONTROLLER -> value;

function mes_actions_changer_mdp(){
    $actions= $_REQUEST["action"] ?? 'changer_mdp';
    match ($actions){
     'changer_mdp'=> changer_mdp(),
      default => afficherPageErreur(),
 
    };
 }

 function changer_mdp(){
  global $model_changermdp, $validator_service, $session_service;

  if (isset($_POST['nouveau_mdp']) && $_POST['confirmer_mdp']){
    $nouveau_mdp=$session_service['requet_post']('nouveau_mdp');
    $confirmer_mdp=$session_service['requet_post']('confirmer_mdp');


    if ($validator_service[FONCTION::VALIDATOR_RESSEMBLANCE->value]($nouveau_mdp, $confirmer_mdp)){
      return render('/connexions/page_connexion.html.php',['erreurs' => $GLOBALS['erreurs'], ]);
    }

    $changer=$model_changermdp['comparer_mdp']($nouveau_mdp, $confirmer_mdp);

    if ($changer){
      return '';
    }

      
    







  }




}




?>