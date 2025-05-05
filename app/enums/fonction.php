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

}