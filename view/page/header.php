<?php 
    require_once(__DIR__ . "/../../config.php");
    session_start();        
    if(isset($_POST["deconnexion"])) {
        session_destroy();
        header("Location: " . ROOT_URL . "/view/user/login.php");
        exit();        
    }
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Emploi du temps</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo ROOT_URL ?>/view/asset/style.css?<?= time() ?>">
</head>

<body>
    <div class="container-fluid">

        <div class="row bg-dark">
            <div class="col-lg-2 navbar">
                <a class="navbar-brand" href="<?php echo ROOT_URL; ?>" style="color: white;">
                    <img src="<?php echo ROOT_URL ?>/view/asset/logo.png" width="30" height="30" alt="Logo">
                    Smart Door
                </a>
            </div>
            <div class="col-lg-8 navbar navbar-expand-lg bg-dark navbar-dark">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="navbarContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <?php if (isset($_SESSION["login"])) : ?>
                            <li class="nav-item px-3">
                                <a class="nav-link" href="<?php echo ROOT_URL ?>/view/user/camera.php">Camera</a>
                            </li>
                            <li class="nav-item px-3">
                                <a class="nav-link" href="<?php echo ROOT_URL ?>/view/user/records.php">Enregistrements</a>
                            </li>
                            <li class="nav-item px-3">
                                <a class="nav-link" href="<?php echo ROOT_URL ?>/view/user/list.php">Autorisations</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <?php if (isset($_SESSION["login"])) : ?>
                <div class="col-lg-2 navbar">
                    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                        <input type="hidden" name="controller" value="UserController">
                        <input type="hidden" name="action" value="logout">
                        <button class="btn btn-outline-danger" type="submit" name="deconnexion" value="submit">Deconnexion</button>
                    </form>
                </div>
            <?php endif; ?>
        </div>