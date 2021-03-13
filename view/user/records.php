<?php 
    require_once(__DIR__ . "/../page/header.php"); 
    if (!LOGGED_IN) { 
        header('Location: ' . ROOT_URL . "/view/user/login.php");
        exit();
    }
?>

<div class="row p-5">
    <div class="col-12 col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">13/03/2021 - 15h48</h5>
                <img src="<?php echo ROOT_URL ?>/view/asset/video.png" class="d-grid gap-2 col-8 mx-auto" alt="Vue de la caméra">
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">13/03/2021 - 15h48</h5>
                <img src="<?php echo ROOT_URL ?>/view/asset/video.png" class="d-grid gap-2 col-8 mx-auto" alt="Vue de la caméra">
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">13/03/2021 - 15h48</h5>
                <img src="<?php echo ROOT_URL ?>/view/asset/video.png" class="d-grid gap-2 col-8 mx-auto" alt="Vue de la caméra">
            </div>
        </div>
    </div>
</div>

<?php
require_once(__DIR__ . "/../page/footer.php");
?>