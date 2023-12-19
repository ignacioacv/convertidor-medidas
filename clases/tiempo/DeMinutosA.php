<?php
class DeMinutosA extends Convertidor{
    public function convert1()
    {
        $newValor = $this->valor * 60;
        return "$this->valor Minutos equivale a $newValor Segundos";
    }
    public function convert2()
    {
        $newValor = $this->valor / 60;
        return "$this->valor Minutos equivale a $newValor Horas";
    }
    public function convert3()
    {
        $newValor = $this->valor / 1440;
        return "$this->valor Minutos equivale a $newValor Días";
    }
    public function convert4()
    {
        $newValor = $this->valor / 10080;
        return "$this->valor Minutos equivale a $newValor Semanas";
    }
}
?>