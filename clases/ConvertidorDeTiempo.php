<?php
require './clases/InterfazConvertidor.php';
class ConvertidorDeTiempo extends Convertidor{
    
    public function convert1()
    {
        $newValor = $this->valor / 60;
        return "$this->valor minutos equivale a $newValor horas";
    }
    public function convert2()
    {
        $newValor = $this->valor * 60;
        return "$this->valor horas equivale a $newValor minutos";
    
    }
    public function convert3()
    {
        $newValor = $this->valor / 24;
        return "$this->valor horas equivale a $newValor días";
    }

    public function convert4()
    {
        $newValor = $this->valor * 24;
        return "$this->valor días equivale a $newValor horas";
    }

    public function convert5()
    {
        $newValor = $this->valor / 30 ;
        return "$this->valor días equivale a $newValor meses";
    }
    public function convert6()
    {
        $newValor = $this->valor * 30 ;
        return "$this->valor meses equivale a $newValor días";
    }
    public function convert7()
    {
        $newValor = $this->valor / 12 ;
        return "$this->valor meses equivale a $newValor años";
    }
    public function convert8()
    {
        $newValor = $this->valor * 12 ;
        return "$this->valor años equivale a $newValor meses";
    }
    public function convert9()
    {
        $newValor = $this->valor * 1000;
        return "$this->valor segundos equivale a $newValor milisegundos";
    }
    public function convert10()
    {
        $newValor = $this->valor / 1000;
        return "$this->valor milisegundos equivale a $newValor segundos";
    }

}
?>