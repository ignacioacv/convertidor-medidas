<?php
class DeLbsA extends Convertidor{
    public function convert1()
    {
        $newValor = $this->valor / 2.205;
        return "$this->valor Libra equivale a $newValor Kilogramos";
    }
    public function convert2()
    {
        $newValor = $this->valor * 16;
        return "$this->valor Libra equivale a $newValor Onzas";
    }
    public function convert3()
    {
        $newValor = $this->valor * 453.6;
        return "$this->valor Libra equivale a $newValor Gramos";
    }
    public function convert4()
    {
        $newValor = $this->valor / 2205;
        return "$this->valor Libra equivale a $newValor Toneladas";
    }
}
?>