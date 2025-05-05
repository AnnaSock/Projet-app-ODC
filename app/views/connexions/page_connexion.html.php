

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page connexion ODC</title>
    <link rel="stylesheet" href="/assets/css/connexion.css">
</head>
<body>

    <div class="formulaire">
        <div class="logoS"><img src="/assets/images/logo_odc.png" alt="logo"></div>
       <div class="haut">
          <h3>Bienvenue sur</h3>
          <h4>Ecole du code Sonatel Academy</h4>
        </div> 
        <h2>Se connecter</h2>
        
        <form action="index.php?page=page_connexion&action=connexion" method="POST">
           <?php if(!empty($erreurs['connexion'])):  ?>
            <p style="color:red"><?php echo $erreurs['connexion'] ?></p>
            <?php endif ?>
           <div class="login">Login</div>
           <input type="text" id="login" name="login" placeholder="  matricule ou email">
           <?php if(!empty($erreurs['login'])):  ?>
            <p style="color:red"><?php echo $erreurs['login'] ?></p>
            <?php endif ?>
           <div class="mp">Mot de passe</div>
           <input type="password" id="mdp" name="password" placeholder="  mot de passe">
           <?php if(!empty($erreurs['password'])):  ?>
            <p style="color:red"><?php echo $erreurs['password'] ?></p>
            <?php endif ?>
           <div class="mpo"><a href="index.php?page=int_mdp&action=int_mdp" class="mdpoublie">Mot de passe oublié ?</a></div>
           <button type = "submit">Se connecter</button>
       </form>
   
    </div>
</body>
</html>