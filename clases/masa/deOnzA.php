<?php
class deOnzA extends Convertidor{
    public function convert1()
    {
        $newValor = $this->valor / 16;
        return "$this->valor Onza equivale a $newValor Libra";
    }
    public function convert2()
    {
        $newValor = $this->valor / 35.274;
        return "$this->valor Onza equivale a $newValor Kilogramo";
    }
    public function convert3()
    {
        $newValor = $this->valor * 28.35;
        return "$this->valor Onza equivale a $newValor Gramo";
    }
    public function convert4()
    {
        $newValor = $this->valor / 35270;
        return "$this->valor Onza equivale a $newValor Tonelada";
    }
}
?>