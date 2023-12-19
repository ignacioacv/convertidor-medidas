<?php
class deGrsA extends Convertidor{
    public function convert1()
    {
        $newValor = $this->valor / 453.6;
        return "$this->valor Gramo equivale a $newValor Libra";
    }
    public function convert2()
    {
        $newValor = $this->valor / 28.35;
        return "$this->valor Gramo equivale a $newValor Onza";
    }
    public function convert3()
    {
        $newValor = $this->valor / 1000;
        return "$this->valor Gramo equivale a $newValor Kilogramo";
    }
    public function convert4()
    {
        $newValor = $this->valor / 1000000;
        return "$this->valor Gramo equivale a $newValor Tonelada";
    }
}
?>