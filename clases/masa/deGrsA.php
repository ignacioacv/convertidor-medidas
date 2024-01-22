<?php
class DeGrsA extends Convertidor{
    public function convert1()
    {
        $newValor = $this->valor / 453.6;
        return "$this->valor Gramo equivale a $newValor Libras";
    }
    public function convert2()
    {
        $newValor = $this->valor / 28.35;
        return "$this->valor Gramo equivale a $newValor Onzas";
    }
    public function convert3()
    {
        $newValor = $this->valor / 1000;
        return "$this->valor Gramo equivale a $newValor Kilogramos";
    }
    public function convert4()
    {
        $newValor = $this->valor / 1000000;
        return "$this->valor Gramo equivale a $newValor Toneladas";
    }
}
?>