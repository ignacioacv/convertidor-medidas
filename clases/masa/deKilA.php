<?php
class deKilA extends Convertidor{
    public function convert1()
    {
        $newValor = $this->valor * 2.205;
        return "$this->valor Kilogramo equivale a $newValor Libra";
    }
    public function convert2()
    {
        $newValor = $this->valor * 35.274;
        return "$this->valor Kilogramo equivale a $newValor Onza";
    }
    public function convert3()
    {
        $newValor = $this->valor * 1000;
        return "$this->valor Kilogramo equivale a $newValor Gramos";
    }
    public function convert4()
    {
        $newValor = $this->valor / 1000;
        return "$this->valor Kilogramo equivale a $newValor Tonelada";
    }
}
?>