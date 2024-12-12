<?php

class Cotxe {
    public string $marca;
    public string $model;

    public function descripcio() : string {
        return "Aquest cotxe és un $this->marca $this->model.";
    }
}

$cotxe = new Cotxe();
$cotxe->marca = "Toyota";
$cotxe->model = "Corolla";
echo $cotxe->descripcio();