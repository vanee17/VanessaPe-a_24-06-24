<?php

class homeController
{

    private $MODEL;

    public function __construct()
    {
        require_once ("../model/homeModel.php");
        $this->MODEL = new homeModel();
    }

    public function guardarRegistros()
    {
        $nombre = $_POST["inputName"];
        $telefono = $_POST["inputNumber"];
        $correo = $_POST["inputEmail"];
        $condiciones = $_POST["inputCheck"] == "on" ? 1 : 0;
        $valor = $this->MODEL->guardarRegistro($nombre, $telefono, $correo, $condiciones);
        echo $valor;
    }
    public function guardarSuscripciones()
    {
        $correo = $_POST["inputEmail"];
        $condiciones = $_POST["inputCheck"] == "on" ? 1 : 0;
        $valor = $this->MODEL->guardarSuscripcion($correo, $condiciones);
        echo $valor;
    }
}

$prub = new homeController();
if (isset($_GET["f"])) {
    $function_act = $_GET["f"];
    switch ($function_act) {
        case "guardarRegistros":
            $prub->guardarRegistros();
            break;
        case "guardarSuscripciones":
            $prub->guardarSuscripciones();
            break;
        default:
            break;
    }
} else {
    echo "La variable no está presente en el POST.";
}