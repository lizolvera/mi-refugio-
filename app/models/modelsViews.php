<?php
namespace app\models;

class modelsViews {
    protected function visualizaVistaModelo($obtener) {
        $listaBlanca = [ "acercade","contacto","formulario","servicio","carrucel"];

        if (in_array($obtener, $listaBlanca)) {
            if (is_file("./app/views/content/" . $obtener . "-vista.php")) {
                $contenido = "./app/views/content/" . $obtener . "-vista.php";
            } else {
                $contenido = "404";
            }
        } elseif ($obtener == "inicio" || $obtener == "index") {
            $contenido = "inicio";
        } else {
            $contenido = "404";
        }
        return $contenido;
    }
}
?>