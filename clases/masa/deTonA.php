<?php
class DeTonA extends Convertidor{
    public function convert1()
    {
        $newValor = $this->valor * 2205;
        return "$this->valor Tonelada equivale a $newValor Libras";
    }
    public function convert2()
    {
        $newValor = $this->valor * 35270;
        return "$this->valor Tonelada equivale a $newValor Onzas";
    }
    public function convert3()
    {
        $newValor = $this->valor * 1000000;
        return "$this->valor Tonelada equivale a $newValor Gramos";
    }
    public function convert4()
    {
        $newValor = $this->valor * 1000;
        return "$this->valor Tonelada equivale a $newValor Kilogramos";
    }
}
?>