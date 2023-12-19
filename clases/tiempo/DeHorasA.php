<?php
class DeHorasA extends Convertidor{
    public function convert1()
    {
        $newValor = $this->valor * 3600;
        return "$this->valor Horas equivale a $newValor Segundos";
    }
    public function convert2()
    {
        $newValor = $this->valor * 60;
        return "$this->valor Horas equivale a $newValor Minutos";
    }
    public function convert3()
    {
        $newValor = $this->valor / 24;
        return "$this->valor Horas equivale a $newValor Días";
    }
    public function convert4()
    {
        $newValor = $this->valor / 168;
        return "$this->valor Horas equivale a $newValor Semanas";
    }
}
?>