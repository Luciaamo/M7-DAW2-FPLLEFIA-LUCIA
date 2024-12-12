<?php

class Cotxe {
    public string $marca = "Hyundai";
    public string $model = "Kona";

    public function descripcio(): string {
        return "Aquest cotxe és un $this->marca $this->model.";
    }

}

$cotxe = new Cotxe();
echo $cotxe->descripcio();