<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page changer mot de passe ODC</title>
    <link rel="stylesheet" href="/assets/css/connexion.css">
</head>
<body>

    <div class="formulaire">
        <div class="logoS"><img src="/assets/images/logo_odc.png" alt="logo"></div>
       <div class="haut">
          <h3>Bienvenue sur</h3>
          <h4>Ecole du code Sonatel Academy</h4>
        </div> 
        <h2>Changer son mot de passe</h2>
        <form action="index.php?page=page_changermdp&action=changer_mdp" method="POST">
            <div class="mp">Nouveau mot de passe</div>
           <input type="text" id="nouveau_mdp" name="nouveau_mdp" placeholder="  nouveau mot de passe">
           <?php if(!empty($erreurs['nouveau_mdp'])):  ?>
            <p style="color:red"><?php echo $erreurs['nouveau_mdp'] ?></p>
            <?php endif ?>
           <div class="mp">Confirmer mot de passe</div>
           <input type="text" id="confirmer_mdp" name="confirmer_mdp" placeholder="  confirmer mot de passe">
           <?php if(!empty($erreurs['confirmer_mdp'])):  ?>
            <p style="color:red"><?php echo $erreurs['confirmer_mdp'] ?></p>
            <?php endif ?>
           <button type="submit">Changer</button>
           <a href="index.php?page=int_mdp"><span>RETOUR</span></a></form>

       </form>
   
    </div>
</body>
</html>