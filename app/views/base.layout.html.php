<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="/assets/css/layout.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <?php if (!empty($css)) : ?>
        <link rel="stylesheet" href="<?= $css ?>">
    <?php endif; ?>
</head>
<body>
   <div class="conteneur c1">
    <div class="logoS"><img src="/assets/images/logo_odc.png" alt="logo"></div>
    <p>Promotion - 2025</p>
    <nav class="menu">
        <a href="index.php?page=dashboard&action=dashboard"><i class="ri-dashboard-line"></i><span>Tableau de bord</span></a>
        <a href="index.php?page=promotion&action=promotion"><i class="ri-folder-2-line"></i><span>Promotions</span></a>
        <a href="index.php?page=referentiel&action=referentiel"><i class="ri-folder-2-line"></i><span>Référentiels</span></a>
        <a href="index.php?page=apprenant&action=apprenant"><i class="ri-user-3-line"></i><span>Apprenants</span></a>
        <a href="#"><i class="ri-calendar-check-line"></i><span>Gestion des présences</span></a>
        <a href="#"><i class="ri-folder-2-line"></i><span>Kits & Laptops</span></a>
        <a href="#"><i class="ri-bar-chart-line"></i><span>Rapports & Stats</span></a>
        
      </nav>
    <a href="index.php?page=page_connexion" class="deconnexion"><i class="ri-logout-box-r-line"></i><span>Déconnexion</span></a>
    </div>
    <div class="conteneur c2">

        <div class="box b1">
            <input type="text" name="recherche" id="recherche" placeholder="    Rechercher...">
            
        </div>

        <div class="box b2">
          
        <?php
                if (isset($interface)) {
                    $chemin_vue = __DIR__ . '/' . $interface;

                    if (file_exists($chemin_vue)) {
                        include_once $chemin_vue;
                    } else {
                        echo "<p style='color:red'>Erreur : la vue demandée est introuvable. ($chemin_vue)</p>";
                    }
                } else {
                    echo "<p style='color:red'>Erreur : aucune vue définie.</p>";
                }
            ?>



        </div>

    </div>

</body>
</html>
