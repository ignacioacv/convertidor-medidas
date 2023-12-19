<?php
class DeGbA extends Convertidor{

    public function convert1()
{
    $newValor = $this->valor * 1E+6;
    return "$this->valor Gigabytes son equivalentes a $newValor Kilobytes";
}
public function convert2()
{
    $newValor = $this->valor * 1024;
    return "$this->valor Gigabytes son equivalentes a $newValor Megabytes";
}
public function convert3()
{
    $newValor = $this->valor / 1024;
    return "$this->valor Gigabytes son equivalentes a $newValor Terabytes";
}
public function convert4()
{
    $newValor = $this->valor / 1E-6;
    return "$this->valor Gigabytes son equivalentes a $newValor Petabytes";
}
}
?>