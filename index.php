<?php
    require_once(__DIR__ . "/config.php");
    session_start();

    if (isset($_SESSION['login'])) {
        header('Location: ' . ROOT_URL . "/view/user/camera.php");
        exit();
    }
    else { 
        header('Location: ' . ROOT_URL . "/view/user/login.php");
        exit();
    }
?>