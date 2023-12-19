<?php
class deYdaA extends Convertidor{
    public function convert1()
    {
        $newValor = $this->valor / 1.094;
        return "$this->valor Yarda equivale a $newValor Metro";
    }
    public function convert2()
    {
        $newValor = $this->valor * 36;
        return "$this->valor Yarda equivale a $newValor Pulgada";
    }
    public function convert3()
    {
        $newValor = $this->valor * 91.44;
        return "$this->valor Yarda equivale a $newValor Centímetro";
    }
    public function convert4()
    {
        $newValor = $this->valor * 3;
        return "$this->valor Yarda equivale a $newValor Pie";
    }

    public function convert5()
    {
        $newValor = $this->valor / 1094;
        return "$this->valor Yarda equivale a $newValor Kilometro";
    }
}
?>