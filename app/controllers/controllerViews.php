<?php
namespace app\controllers;

use app\models\modelsViews;

class controllerViews extends modelsViews {
    public function visualizar($obtener) {
        if ($obtener == "") {
            $valor = "inicio";
        } else {
            $valor = $this->visualizaVistaModelo($obtener);
        }
        return $valor;
    }
}
?>
