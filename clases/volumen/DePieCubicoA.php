<?php
class DePieCubicoA extends Convertidor{
    public function convert1()
    {
        $newValor = $this->valor * 28320;
        return "$this->valor Pies Cubicos equivale a $newValor Mililitros";
    }
    public function convert2()
    {
        $newValor = $this->valor * 28.317;
        return "$this->valor Pies Cubicos equivale a $newValor Litros";
    }
    public function convert3()
    {
        $newValor = $this->valor * 1728;
        return "$this->valor Pies Cubicos equivale a $newValor Pulgadas Cubicas";
    }
    public function convert4()
    {
        $newValor = $this->valor * 6.229;
        return "$this->valor Pies Cubicos equivale a $newValor Galón Imperial";
    }
}
?>