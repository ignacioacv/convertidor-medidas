<?php
class ConvertidorDeDatos extends Convertidor{
    public function convert1 (){
        $newValor = $this->valor * 1000;
        return "$this->valor Kilobytes son equivalentes a $newValor Megabytes";
    }
    public function convert2 (){
        $newValor = $this->valor / 1000;
        return "$this->valor Megabytes son equivalentes a $newValor Kilobytes";
    }
    public function convert3 (){
        $newValor = $this->valor / 1000;
        return "$this->valor Megabytes son equivalentes a $newValor Gigabytes";
    }
    public function convert4 (){
        $newValor = $this->valor * 1000;
        return "$this->valor Gigabytes son equivalentes a $newValor Megabytes";
    }
    public function convert5 (){

    }
    public function convert6 (){

    }
    public function convert7 (){

    }
    public function convert8 (){

    }
    public function convert9 (){

    }
    public function convert10(){

    }
}
?>