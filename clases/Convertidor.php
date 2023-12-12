<?php
abstract class Convertidor {
    public $valor;
    public $deUnidad;
    public $aUnidad;
    
    public function __construct($valor, $deUnidad, $aUnidad)
    {
        $this->valor = $valor;
        $this->deUnidad = $deUnidad;
        $this->aUnidad = $aUnidad;
    }
    
    abstract function convert1 ($valor, $deUnidad, $aUnidad);
    abstract function convert2 ($valor, $deUnidad, $aUnidad);
    abstract function convert3 ($valor, $deUnidad, $aUnidad);
    abstract function convert4 ($valor, $deUnidad, $aUnidad);
    abstract function convert5 ($valor, $deUnidad, $aUnidad);
    abstract function convert6 ($valor, $deUnidad, $aUnidad);
    abstract function convert7 ($valor, $deUnidad, $aUnidad);
    abstract function convert8 ($valor, $deUnidad, $aUnidad);
    abstract function convert9 ($valor, $deUnidad, $aUnidad);
    abstract function convert10 ($valor, $deUnidad, $aUnidad);
}
?>