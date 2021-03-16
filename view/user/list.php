<?php
    require_once(__DIR__ . "/../page/header.php");
    if (!LOGGED_IN) { 
        header("Location: " . ROOT_URL . "/view/user/login.php");
        exit();
    }
?>

<div class="container">
    <br /><br />
    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal" style="width: 100px;">Ajouter</button>
    <br /><br />
    <table class="table table-hover table-striped border">
        <thead class="bg-dark text-light">
            <tr>
                <th>ID</th>
                <th>Photo</th>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Gestion</th>
            </tr>
        </thead>
        <tbody id="tbody">
            <tr>
                <td>1</td>
                <td><img src="<?php echo ROOT_URL ?>/view/asset/face.png" width="35" height="35" alt="Tete"></td>
                <td>John</td>
                <td>Doe</td>
                <td>
                    <div class="row">
                        <div class="col-md-4">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modifyModal" style="width: 100px;">Modifier</button>
                        </div>
                        <div class="col-md-4">
                            <form method="post" action="">
                                <input type="hidden" name="controller" value="UserController">
                                <input type="hidden" name="action" value="delete">
                                <input type="hidden" name="id" value="" />
                                <button class="btn btn-danger" type="submit" name="submit" value="submit" style="width: 100px;">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>

        </tbody>
    </table>
</div>



<!-- Modal -->
<div class="modal fade" id="modifyModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit</h5>
            </div>
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                <div class="modal-body">
                    <input type="hidden" name="controller" value="UserController">
                    <input type="hidden" name="action" value="update">

                    <fieldset>
                        <table>
                            <tbody>
                                <tr>
                                    <td> <input type="hidden" class="input-update" name="id" /></td>
                                </tr>
                                <tr>
                                    <th>Image :</th>
                                    <td><input type="file" class="input-update" name="image" /></td>
                                </tr>
                                <tr>
                                    <th>Nom : </th>
                                    <td><input type="text" class="input-update" name="name" /></td>
                                </tr>
                                <tr>
                                    <th>Autoriser :</th>
                                    <td><input type="checkbox" class="input-update" name="autorisation" /></td>
                                </tr>
                                <tr>
                                    <td><input type="hidden" class="input-update" /></td>
                                </tr>
                            </tbody>
                        </table>
                    </fieldset>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" name="submit" value="submit" class="btn btn-primary">Modifier</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="addModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add</h5>
            </div>
            <form method="post" action="<?php ROOT_URL . "/model/insert.php" ?>">
                <div class="modal-body">
                    <input type="hidden" name="controller" value="UserController">
                    <input type="hidden" name="action" value="register">

                    <fieldset>
                        <table>
                            <tbody>
                                <tr>
                                    <td> <input type="hidden" class="input-update" name="id" /></td>
                                </tr>
                                <tr>
                                    <th>Image :</th>
                                    <td><input type="file" class="input-update" name="image" /></td>
                                </tr>
                                <tr>
                                    <th>Nom : </th>
                                    <td><input type="text" class="input-update" name="name" /></td>
                                </tr>
                                <tr>
                                    <th>Prenom : </th>
                                    <td><input type="text" class="input-update" name="surname" /></td>
                                </tr>
                                <tr>
                                    <td><input type="hidden" class="input-update" /></td>
                                </tr>
                            </tbody>
                        </table>
                    </fieldset>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" name="submit" value="submit" class="btn btn-success">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
require_once(__DIR__ . "/../page/footer.php");
?>