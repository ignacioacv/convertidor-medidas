<?php
class DeOnzA extends Convertidor{
    public function convert1()
    {
        $newValor = $this->valor / 16;
        return "$this->valor Onza equivale a $newValor Libras";
    }
    public function convert2()
    {
        $newValor = $this->valor / 35.274;
        return "$this->valor Onza equivale a $newValor Kilogramos";
    }
    public function convert3()
    {
        $newValor = $this->valor * 28.35;
        return "$this->valor Onza equivale a $newValor Gramos";
    }
    public function convert4()
    {
        $newValor = $this->valor / 35270;
        return "$this->valor Onza equivale a $newValor Toneladas";
    }
}
?>