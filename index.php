<?php
require_once "./config/aplicacion.php";
require_once "./autoload.php";
require_once "./app/views/inc/sesion_start.php";

if (isset($_GET['views'])) {
    $url = explode("/", $_GET['views']);
} else {
    $url = ["inicio"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once "./app/views/inc/head.php"; ?>
</head>
<body>
    <?php
    use app\controllers\controllerViews;

    $controllerViews = new controllerViews();
    $obtener = $controllerViews->visualizar($url[0]);

    if ($obtener == "inicio" || $obtener == "404") {
        require_once "./app/views/content/" . $obtener . "-vista.php";
    } else {
        require_once $obtener;
    }
    require_once "./app/views/inc/script.php";
    ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
