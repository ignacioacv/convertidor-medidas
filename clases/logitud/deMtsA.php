<?php
class deMtsA extends Convertidor{
    public function convert1()
    {
        $newValor = $this->valor * 100;
        return "$this->valor Metro equivale a $newValor Centímetro";
    }
    public function convert2()
    {
        $newValor = $this->valor * 39.37;
        return "$this->valor Metro equivale a $newValor Pulgada";
    }
    public function convert3()
    {
        $newValor = $this->valor * 1.094;
        return "$this->valor Metro equivale a $newValor Yarda";
    }
    public function convert4()
    {
        $newValor = $this->valor * 3.281;
        return "$this->valor Metro equivale a $newValor Pie";
    }

    public function convert5()
    {
        $newValor = $this->valor / 1000;
        return "$this->valor Metro equivale a $newValor Kilometro";
    }
}
?>