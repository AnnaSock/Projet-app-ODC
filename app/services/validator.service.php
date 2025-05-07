
<?php
require_once __DIR__ ."/../enums/chemins.php";
require_once __DIR__ .Chemins::ERROR_CONTROLLER -> value;
require_once __DIR__ .chemins::FONCTION -> value;
require_once __DIR__ .Chemins::MESSAGE -> value;
require_once __DIR__ .Chemins::RELATIF_CHEF_MODEL -> value;



$validator_service = [
    FONCTION::VALIDATOR_CONNEXION -> value => function (string $login, string $password) {
        supprimer_erreur();
        if (empty($login) ) {
            ajouter_erreur('login',  Message::LOGIN_OBLIGATOIRE -> value);
        }else if (strlen(trim($login)) < 4){
            ajouter_erreur('login', Message::LOGIN_CARACTERE -> value);
        }

        if (empty($password) ) {
        
        ajouter_erreur('password',  Message::PASSWORD_OBLIGATOIRE -> value );
        }
        else if (strlen(trim($password)) < 6){
            ajouter_erreur('password',Message::PASSWORD_CARACTERE -> value);
        }
        if (!amna_erreur()) {
            global $model_connexion;

            $utilisateurExiste = $model_connexion['se_connecter']($login, $password);

            if (!$utilisateurExiste) {
                ajouter_erreur('connexion', MESSAGE::IDENTIFIANT_INCORRECT->value);
            }
        }
        return amna_erreur();
    },
    FONCTION::VALIDATOR_EMAIL -> value => function (string $email) {
        supprimer_erreur();

        if (empty($email) ) {
        
            ajouter_erreur('email',  Message::EMAIL_OBLIGATOIRE -> value );
            }
            else if (strpos($email, '@') == false){
                ajouter_erreur('email',Message::EMAIL_CARACTERE -> value);
            } 
            if (!amna_erreur()) {
                global $model_int_mdp;
    
                $utilisateurExiste = $model_int_mdp['Entrer']($email);
    
                if (!$utilisateurExiste) {
                    ajouter_erreur('entrer', MESSAGE::EMAIL_INCORRECT->value);
                }
            }
        return amna_erreur();

    },
    FONCTION::VALIDATOR_RESSEMBLANCE -> value => function(string $nouveau_mdp, string $confirmer_mdp){
         supprimer_erreur();

           if ($nouveau_mdp !== $confirmer_mdp) {
            ajouter_erreur('ressemblance', Message::RESSEMBLANCE_MDP ->value);
          } 
          return amna_erreur();
        }

    

    ];


















