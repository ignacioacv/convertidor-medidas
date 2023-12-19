<?php
class DeSegundosA extends Convertidor{
    public function convert1()
    {
        $newValor = $this->valor / 60;
        return "$this->valor Segundos equivale a $newValor Minutos";
    }
    public function convert2()
    {
        $newValor = $this->valor / 3600;
        return "$this->valor Segundos equivale a $newValor Horas";
    }
    public function convert3()
    {
        $newValor = $this->valor / 86400;
        return "$this->valor Segundos equivale a $newValor Días";
    }
    public function convert4()
    {
        $newValor = $this->valor / 604800;
        return "$this->valor Segundos equivale a $newValor Semanas";
    }
}
?>