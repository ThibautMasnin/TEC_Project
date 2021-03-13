<?php
    require_once(__DIR__ . "/config.php");
    if (LOGGED_IN) {
        header('Location: ' . ROOT_URL . "/view/user/camera.php");
        exit();
    }
    else { 
        header('Location: ' . ROOT_URL . "/view/user/login.php");
        exit();
    }
?>