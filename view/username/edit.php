<?php
    require_once("C://xampp/htdocs/proyecto/view/head/head.php");
    require_once("C://xampp/htdocs/proyecto/controller/usernameController.php");
    $obj = new usernameController();
    $user = $obj->show($_GET['id']);
?>
  <form action="update.php" method="post" autocomplete="off">
    <h2>Modificando Registro</h2>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
        <div class="col-sm-10">
        <input type="text" name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?= $user[0]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Nombre</label>
        <div class="col-sm-10">
            <input type="text" name="nombre" class="form-control" id="inputPassword" value="<?= $user[1]?>">
        </div>
        
        <br><br>

        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Apellido</label>
        <div class="col-sm-10">
            <input type="text" name="apellido" class="form-control" id="inputPassword" value="<?= $user[2]?>">
        </div>

        <br><br>

        <label for="inputPassword" class="col-sm-2 col-form-label">Nueva Direccion</label>
        <div class="col-sm-10">
            <input type="text" name="direccion" class="form-control" id="inputPassword" value="<?= $user[3]?>">
        </div>

        <br><br>

        <label for="inputPassword" class="col-sm-2 col-form-label">Nueva Ciudad</label>
        <div class="col-sm-10">
            <input type="text" name="ciudad" class="form-control" id="inputPassword" value="<?= $user[4]?>">
        </div>

        <br><br>

        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Pais</label>
        <div class="col-sm-10">
            <input type="text" name="pais" class="form-control" id="inputPassword" value="<?= $user[5]?>">
        </div>

        <br><br>

        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Gmail</label>
        <div class="col-sm-10">
            <input type="text" name="gmail" class="form-control" id="inputPassword" value="<?= $user[6]?>">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Fecha de registro</label>
        <div class="col-sm-10">
        <input type="text" name="fecha" readonly class="form-control-plaintext" id="staticEmail" value="<?= $user[7]?>">
        </div>
    </div>

    <div>
        <input type="submit" class="btn btn-success" value="Actualizar">
        <a class="btn btn-danger" href="show.php?id=<?= $user[0]?>">Cancelar</a>
    </div>
  </form>
<?php
    require_once("C://xampp/htdocs/proyecto/view/head/footer.php");
?>