<?php
class ConvertidorDeDatos extends Convertidor{
    public function convert1 (){
        $newValor = $this->valor / 1024;
        return "$this->valor Kilobytes son equivalentes a $newValor Megabytes";
    }
    public function convert2 (){
        $newValor = $this->valor * 1024;
        return "$this->valor Megabytes son equivalentes a $newValor Kilobytes";
    }
    public function convert3 (){
        $newValor = $this->valor / 1024;
        return "$this->valor Megabytes son equivalentes a $newValor Gigabytes";
    }
    public function convert4 (){
        $newValor = $this->valor * 1024;
        return "$this->valor Gigabytes son equivalentes a $newValor Megabytes";
    }
    public function convert5 (){
        $newValor = $this->valor / 1024;
        return "$this->valor Gigabytes son equivalentes a $newValor Terabytes";
    }
    public function convert6 (){
        $newValor = $this->valor * 1024;
        return "$this->valor Terabytes son equivalentes a $newValor Gigabytes";
    }
    public function convert7 (){
        $newValor = $this->valor / 1024;
        return "$this->valor Terabytes son equivalentes a $newValor Petabytes";
    }
    public function convert8 (){
        $newValor = $this->valor * 1024;
        return "$this->valor Petabytes son equivalentes a $newValor Terabytes";
    }
    public function convert9 (){
        $newValor = $this->valor / 1024;
        return "$this->valor Petabytes son equivalentes a $newValor Exabytes";
    }
    public function convert10(){
        $newValor = $this->valor * 1024;
        return "$this->valor Exabytes son equivalentes a $newValor Petabytes";
    }
}
?>