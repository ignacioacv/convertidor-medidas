<?php
class dePulA extends Convertidor{
    public function convert1()
    {
        $newValor = $this->valor / 39.37;
        return "$this->valor Pulgada equivale a $newValor Metro";
    }
    public function convert2()
    {
        $newValor = $this->valor * 2.54;
        return "$this->valor Pulgada equivale a $newValor Centímetro";
    }
    public function convert3()
    {
        $newValor = $this->valor / 36;
        return "$this->valor Pulgada equivale a $newValor Yarda";
    }
    public function convert4()
    {
        $newValor = $this->valor / 12;
        return "$this->valor Pulgada equivale a $newValor Pie";
    }

    public function convert5()
    {
        $newValor = $this->valor / 39370;
        return "$this->valor Pulgada equivale a $newValor Kilometro";
    }
}
?>