<?php
class DeMililitroA extends Convertidor{
    public function convert1()
    {
        $newValor = $this->valor / 1000;
        return "$this->valor Mililitros equivale a $newValor Litros";
    }
    public function convert2()
    {
        $newValor = $this->valor / 16.387;
        return "$this->valor Mililitros equivale a $newValor Pulgada Cubicas";
    }
    public function convert3()
    {
        $newValor = $this->valor / 4546;
        return "$this->valor Mililitros equivale a $newValor Galón Imperial";
    }
    public function convert4()
    {
        $newValor = $this->valor / 28320;
        return "$this->valor Mililitros equivale a $newValor Pies Cubicos";
    }
}
?>