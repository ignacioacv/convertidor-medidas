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
    
    abstract function convert1 ();
    abstract function convert2 ();
    abstract function convert3 ();
    abstract function convert4 ();
    abstract function convert5 ();
    abstract function convert6 ();
    abstract function convert7 ();
    abstract function convert8 ();
    abstract function convert9 ();
    abstract function convert10();
}
?>