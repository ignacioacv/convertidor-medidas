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
   
}
?>