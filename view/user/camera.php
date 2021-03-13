<?php 
    require_once(__DIR__ . "/../page/header.php"); 
    if (!LOGGED_IN) { 
        header('Location: ' . ROOT_URL . "/view/user/login.php");
        exit();
    }
?>

<div class="row">
    <img src="<?php echo ROOT_URL ?>/view/asset/video.png" class="m-5 d-grid gap-2 col-8 mx-auto" alt="Vue de la caméra">
</div>

<div class="row">
    <div class="d-grid gap-2 col-2 mx-auto"></div>
    <div class="d-grid gap-2 col-2 mx-auto">
        <?php if(CLOSED) { ?>
            <button class="btn btn-outline-dark"><img src="<?php echo ROOT_URL ?>/view/asset/unlocked.png" width="25" height="25" alt="Ouvrir"> Ouvrir</button>
        <?php } else { ?>
            <button class="btn btn-outline-dark"><img src="<?php echo ROOT_URL ?>/view/asset/locked.png" width="25" height="25" alt="Fermer"> Fermer</button>
        <?php } ?>
    </div>
    <div class="d-grid gap-2 col-1 mx-auto">
        <button class="btn btn-outline-dark">
            <img src="<?php echo ROOT_URL ?>/view/asset/micro.png" width="30" height="30" alt="Microphone">
        </button>
    </div>
    <div class="d-grid gap-2 col-2 mx-auto">
        <?php if(RECORD) { ?>
            <button class="btn btn-outline-dark"><img src="<?php echo ROOT_URL ?>/view/asset/camera.png" width="25" height="25" alt="Camera"> Arreter</button>
        <?php } else { ?>
            <button class="btn btn-outline-dark"><img src="<?php echo ROOT_URL ?>/view/asset/camera.png" width="25" height="25" alt="Camera"> Enregistrer</button>
        <?php } ?>
    </div>
    <div class="d-grid gap-2 col-2 mx-auto"></div>
</div>

<?php
require_once(__DIR__ . "/../page/footer.php");
?>