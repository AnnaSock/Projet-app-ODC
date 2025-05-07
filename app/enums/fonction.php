<?php

enum Fonction: string{
    case CONNECTION = "page_connexion";
    case VALIDATOR_CONNEXION = "validator_connexion";
    case VALIDATOR_EMAIL = "validator_email";

    case CHANGER_PASSWORD = "ChangerPassword";
    case REDIRECTION = "redirectToRoute";
    case RENDER = "render";
    case Sauv_photo = "savePhoto";
    case Page_erreur = "afficherPageErreur";
    case VALIDATOR_RESSEMBLANCE = "modifier_mdp";
    case changer_mdp = "changerPassword";
    case unicite = "unicite";
    case json_to_array ="json_to_array";
    case array_to_json = "array_to_json";
<<<<<<< HEAD
=======
    case COMPARER_MDP = "comparer_mdp";
    case SE_CONNECTER = "se_connecter";
    case ENTRER = "Entrer";
>>>>>>> b89b887b3f92b24d80b73a84ca27ebb08e03a3e7

}