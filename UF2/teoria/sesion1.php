<?php

class Saiyajin
{
    public string $nombre = "Goku";
    public int $nivel_pelea = 1000;

    //primer método o función
    //siempre en mayúsculas la primera. Ej: Saludar();
    //podemos devolver ya mediante el return
    //Si queremos usar atributos o métodos de dentro de nuestra clase hay que usar el dólar ($)
    //podemos TIPAR LA FUNCIÓN. Obligo a devolver el tipo que le pongas
    public function Saludar() : string
    {
        return "Hola, mi nomnbre es " . $this->nombre;
    }

    //segundo método
    public function NivelDePelea() : int
    {
        return $this->nombre . "tiene un nivel de pelea " . $this->nivel_pelea;
    }
}

//Fuera de la clase
//INSTANCIO UNA CLASE
//CREANDO ASÍ UN OBJETO con new Clase()
$goku = new Saiyajin();

//$goku ahora tiene un nivel de pelea mil y un nombre saiyajin
//probamos a verlo con un var_dump()
//var_dump($goku);
//var_dump($goku2);

// echo $goku->Saludar();