<?php
class dePieA extends Convertidor{
    public function convert1()
    {
        $newValor = $this->valor / 3.281;
        return "$this->valor Pie equivale a $newValor Metro";
    }
    public function convert2()
    {
        $newValor = $this->valor * 12;
        return "$this->valor Pie equivale a $newValor Pulgada";
    }
    public function convert3()
    {
        $newValor = $this->valor / 3;
        return "$this->valor Pie equivale a $newValor Yarda";
    }
    public function convert4()
    {
        $newValor = $this->valor * 30.48;
        return "$this->valor Pie equivale a $newValor Centímetro";
    }

    public function convert5()
    {
        $newValor = $this->valor / 3281;
        return "$this->valor Pie equivale a $newValor Kilometro";
    }
}
?>