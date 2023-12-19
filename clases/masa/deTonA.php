<?php
class deTonA extends Convertidor{
    public function convert1()
    {
        $newValor = $this->valor * 2205;
        return "$this->valor Tonelada equivale a $newValor Libra";
    }
    public function convert2()
    {
        $newValor = $this->valor * 35270;
        return "$this->valor Tonelada equivale a $newValor Onza";
    }
    public function convert3()
    {
        $newValor = $this->valor * 1000000;
        return "$this->valor Tonelada equivale a $newValor Gramo";
    }
    public function convert4()
    {
        $newValor = $this->valor * 1000;
        return "$this->valor Tonelada equivale a $newValor Kilogramo";
    }
}
?>