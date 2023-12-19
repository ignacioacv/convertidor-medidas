<?php
class deCmsA extends Convertidor{
    public function convert1()
    {
        $newValor = $this->valor / 100;
        return "$this->valor Centimetro equivale a $newValor Metro";
    }
    public function convert2()
    {
        $newValor = $this->valor / 2.54;
        return "$this->valor Centímetro equivale a $newValor Pulgada";
    }
    public function convert3()
    {
        $newValor = $this->valor / 91.44;
        return "$this->valor Centímetro equivale a $newValor Yarda";
    }
    public function convert4()
    {
        $newValor = $this->valor / 30.48;
        return "$this->valor Centímetro equivale a $newValor Pie";
    }

    public function convert5()
    {
        $newValor = $this->valor / 100000;
        return "$this->valor Centímetro equivale a $newValor Kilometro";
    }
}
?>