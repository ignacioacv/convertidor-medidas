<?php
require './clases/InterfazConvertidor.php';
class ConvertidorDeTiempo extends Convertidor{
    
    public function convert1($valor, $deUnidad, $aUnidad)
    {
        try{
            if($deUnidad == "minutos" & $aUnidad == "horas"){
                $newValor = $valor / 60;
            }
            echo "$valor minutos equivale a $newValor horas";
        }
        catch(Error){

        }
    }
    public function convert2($valor, $deUnidad, $aUnidad)
    {
        try{
            if($deUnidad == "horas" & $aUnidad == "minutos"){
                $newValor = $valor * 60;
            }
            echo "$valor horas equivale a $newValor minutos";
        }
        catch(Error){

        }
    }
    public function convert3($valor, $deUnidad, $aUnidad)
    {
        if($deUnidad == "horas" & $aUnidad == "dias"){
            $newValor = $valor / 24;
        }
        echo "$valor horas equivale a $newValor días";
    }

    public function convert4($valor, $deUnidad, $aUnidad)
    {
        if($deUnidad == "dias" & $aUnidad == "horas"){
            $newValor = $valor * 24;
        }
        echo "$valor días equivale a $newValor horas";
    }

    public function convert5($valor, $deUnidad, $aUnidad)
    {
        
    }
    public function convert6($valor, $deUnidad, $aUnidad)
    {
        
    }
    public function convert7($valor, $deUnidad, $aUnidad)
    {
        
    }
    public function convert8($valor, $deUnidad, $aUnidad)
    {
        
    }
    public function convert9($valor, $deUnidad, $aUnidad)
    {
        
    }
    public function convert10($valor, $deUnidad, $aUnidad)
    {
        
    }

}
?>