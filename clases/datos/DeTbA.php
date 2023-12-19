<?php
class DeTbA extends Convertidor{

    public function convert1()
{
    $newValor = $this->valor * 1E+9;
    return "$this->valor Terabytes son equivalentes a $newValor Kilobytes";
}
public function convert2()
{
    $newValor = $this->valor * 1E+6;
    return "$this->valor Terabytes son equivalentes a $newValor Megabytes";
}
public function convert3()
{
    $newValor = $this->valor * 1024;
    return "$this->valor Terabytes son equivalentes a $newValor Gigabytes";
}
public function convert4()
{
    $newValor = $this->valor / 1024;
    return "$this->valor Terabytes son equivalentes a $newValor Petabytes";
}
}
?>