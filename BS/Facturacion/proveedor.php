<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <form action="" method="POST">
        <div class="container">
            <h1 class="text-center mb-5">Registrar Proveedor</h1>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" aria-label="default input example" name="nombre">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Direccion</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" aria-label="default input example" name="direccion">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Telefono</label>
                <div class="col-sm-10">
                    <input class="form-control" type="number" aria-label="default input example" name="telefono">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Producto</label>
                <div class="col-sm-10">
                    <select name="tipo" id="">
                        <option value="">Seleccionar</option>
                        <?php
                            include_once("conexion.php");
                            $consulta = $conexion->query("Select * from producto");
                            while ($row=$consulta->fetch_array()) {
                                ?>
                                    <option value="<?php echo $row['nombre']; ?>"><?php echo $row['nombre']; ?></option>
                                <?php
                            }
                        ?>
                    </select>
                </div>
            </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-secondary">Aceptar</button>
                </div>
        </div>
    </form>
    <div class="container">
        <a class="btn btn-secondary" href="http://localhost/ADSO-2593917/BS/Facturacion/menu.php" role="button">Menu</a>
    </div>
    <?php
    if (isset($_REQUEST['nombre'])) {
        include_once ("conexion.php");
        $conexion->query("insert into proveedor(nombre,direccion,telefono,producto) values ('$_REQUEST[nombre]','$_REQUEST[direccion]','$_REQUEST[telefono]','$_REQUEST[tipo]')");
    }
    ?>
</body>
</html>