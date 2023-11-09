<?php
    require_once("C://xampp/htdocs/proyecto/view/head/head.php");
?>


    <form action="store.php" method="POST" autocomplete="off">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre</label>
        <input type="text" name="nombre" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        <label for="exampleInputEmail1" class="form-label">Apellido</label>
        <input type="text" name="apellido" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        <label for="exampleInputEmail1" class="form-label">Direccion</label>
        <input type="text" name="direccion" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        <label for="exampleInputEmail1" class="form-label">Ciudad</label>
        <input type="text" name="ciudad" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        <label for="exampleInputEmail1" class="form-label">Pais</label>
        <input type="text" name="pais" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        <label for="exampleInputEmail1" class="form-label">Gmail</label>
        <input type="text" name="gmail" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
    <a class="btn btn-danger" href="index.php">Cancelar</a>
    </form>

<?php
    require_once("C://xampp/htdocs/proyecto/view/head/footer.php");
?>