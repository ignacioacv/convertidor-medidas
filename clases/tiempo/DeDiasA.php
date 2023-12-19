<?php
class DeDiasA extends Convertidor{
    public function convert1()
    {
        $newValor = $this->valor * 86400;
        return "$this->valor Días equivale a $newValor Segundos";
    }
    public function convert2()
    {
        $newValor = $this->valor * 1440;
        return "$this->valor Días equivale a $newValor Minutos";
    }
    public function convert3()
    {
        $newValor = $this->valor * 24;
        return "$this->valor Días equivale a $newValor Horas";
    }
    public function convert4()
    {
        $newValor = $this->valor / 7;
        return "$this->valor Días equivale a $newValor Semanas";
    }
}
?>