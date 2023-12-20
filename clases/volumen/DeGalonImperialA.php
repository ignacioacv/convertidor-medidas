<?php
class DeGalonImperialA extends Convertidor{
    public function convert1()
    {
        $newValor = $this->valor * 4546;
        return "$this->valor Galón Imperial equivale a $newValor Mililitros";
    }
    public function convert2()
    {
        $newValor = $this->valor * 4.546;
        return "$this->valor Galón Imperial equivale a $newValor Litros";
    }
    public function convert3()
    {
        $newValor = $this->valor * 277.4;
        return "$this->valor Galón Imperial equivale a $newValor Pulgadas Cubicas";
    }
    public function convert4()
    {
        $newValor = $this->valor / 6.229;
        return "$this->valor Galón Imperial equivale a $newValor Pies Cubicos";
    }
}
?>