<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page int changer mdp ODC</title>
    <link rel="stylesheet" href="/assets/css/connexion.css">
</head>
<body>

    <div class="formulaire">
        <div class="logoS"><img src="/assets/images/logo_odc.png" alt="logo"></div>
       <div class="haut">
          <h3>Bienvenue sur</h3>
          <h4>Ecole du code Sonatel Academy</h4>
        </div> 
        <h2>Rentrer votre email</h2>
        <form action="index.php?page=int_mdp&action=int_mdp" method="POST">
        <?php if(!empty($erreurs['entrer'])):  ?>
            <p style="color:red"><?php echo $erreurs['entrer'] ?></p>
            <?php endif ?>
            <div class="login">Email</div>
           <input type="text" id="email" name="email" placeholder="  email">
           <?php if(!empty($erreurs['email'])):  ?>
            <p style="color:red"><?php echo $erreurs['email'] ?></p>
            <?php endif ?>
           <button type="submit">Entrer</button>
           <a href="index.php?page=page_connexion"><span>RETOUR</span></a></form>
        </form>
   </div>
</body>
</html>