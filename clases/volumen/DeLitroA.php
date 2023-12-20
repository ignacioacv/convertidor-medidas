<?php
class DeLitroA extends Convertidor{
    public function convert1()
    {
        $newValor = $this->valor * 1000;
        return "$this->valor Litros equivale a $newValor Mililitros";
    }
    public function convert2()
    {
        $newValor = $this->valor * 61.0237;
        return "$this->valor Litros equivale a $newValor Pulgada Cubicas";
    }
    public function convert3()
    {
        $newValor = $this->valor / 4.546;
        return "$this->valor Litros equivale a $newValor Galón Imperial";
    }
    public function convert4()
    {
        $newValor = $this->valor / 28.317;
        return "$this->valor Litros equivale a $newValor Pies Cubicos";
    }
}
?>