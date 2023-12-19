<?php
class DeSemanasA extends Convertidor{
    public function convert1()
    {
        $newValor = $this->valor * 604800;
        return "$this->valor Semanas equivale a $newValor Segundos";
    }
    public function convert2()
    {
        $newValor = $this->valor * 10080;
        return "$this->valor Semanas equivale a $newValor Minutos";
    }
    public function convert3()
    {
        $newValor = $this->valor * 168;
        return "$this->valor Semanas equivale a $newValor Horas";
    }
    public function convert4()
    {
        $newValor = $this->valor * 7;
        return "$this->valor Semanas equivale a $newValor Días";
    }
}
?>