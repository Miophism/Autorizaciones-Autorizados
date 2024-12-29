<?php
require_once("./Services/verifyAuth.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
    <div class="container-fluid">
        <p class="navbar-brand">
            <?php
            echo $usuario->getNombre() . " " . $usuario->getApellido();

            $listaSecciones = SeccionBLL::getSectionByTypeUser($usuario->getIdTipoUsuario());

            foreach ($listaSecciones as $seccion) {
                echo '<a href="' . $seccion->getUrl() . '">' . $seccion->getTitulo() . '</a>';
            }
            ?>
        </p>
        <!-- Espaciado de flexbox -->
        <div class="d-flex ms-auto">
            <form action="./Controllers/logOut.php" method="POST">
                <button type="submit" class="btn btn-outline-danger">Cerrar sesión</button>
            </form>
        </div>
    </div>
</nav>




</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="./node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
<script src="./Js/alerts.js"></script>

</html>