<?php
spl_autoload_register(function ($class) {
    $base_dir = __DIR__ . '/';
    $file = $base_dir . str_replace('\\', '/', $class) . '.php';

    if (is_file($file)) {
        require_once $file;
    } else {
        error_log("Autoload error: No se pudo cargar la clase '$class' desde el archivo '$file'");
    }
});
?>
