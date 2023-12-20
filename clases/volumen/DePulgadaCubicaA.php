<?php
class DePulgadaCubicaA extends Convertidor{
    public function convert1()
    {
        $newValor = $this->valor * 16.387;
        return "$this->valor Pulgadas Cubica equivale a $newValor Mililitros";
    }
    public function convert2()
    {
        $newValor = $this->valor / 61.024;
        return "$this->valor Pulgadas Cubicas equivale a $newValor Litros";
    }
    public function convert3()
    {
        $newValor = $this->valor / 277.4;
        return "$this->valor Pulgadas Cubicas equivale a $newValor Galón Imperial";
    }
    public function convert4()
    {
        $newValor = $this->valor / 1728;
        return "$this->valor Pulgadas Cubicas equivale a $newValor Pies Cubicos";
    }
}
?>