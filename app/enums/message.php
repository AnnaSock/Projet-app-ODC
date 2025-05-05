<?php
enum Message: string {
    case EMAIL_OBLIGATOIRE = "le champ email est obligatoire !";
    case EMAIL_CARACTERE = "L'email doit avoir un arobase @ !";
    case RESSEMBLANCE_MDP = "Le nouveau mot de passe et sa confirmation ne correspondent pas !";
    case IDENTIFIANT_INCORRECT = "le mot de passe ou le login est incorrect !";
    case EMAIL_INCORRECT = "l'email saisie est incorrect !";
    case PASSWORD_LABEL = "Mot de passe";
    case PLACEHOLDER_PASSWORD = "Entrez votre mot de passe";
    case MDP_OUBLIE = "Mot de passe oublié ?";
    case LOGIN_OBLIGATOIRE = 'le champ login est obligatoire !';
    case PASSWORD_OBLIGATOIRE = 'le champ password  est obligatoire !';
    case LOGIN_CARACTERE = 'le login doit contenir au moins 4 caracteres !';
    case PASSWORD_CARACTERE = 'le password doit contenir au moins 6 caracteres !';
    




}
?>