<?php
require './clases/InterfazConvertidor.php';
class ConvertidorDeTiempo extends Convertidor{
    
    public function convert1($valor, $deUnidad, $aUnidad)
    {
        if($deUnidad == "minutos" & $aUnidad == "horas"){
            $newValor = $valor / 60;
        }
        echo "$valor minutos equivale a $newValor horas";
    }
    public function convert2($valor, $deUnidad, $aUnidad)
    {
        if($deUnidad == "horas" & $aUnidad == "minutos"){
            $newValor = $valor * 60;
        }
        echo "$valor horas equivale a $newValor minutos";
    
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
        if($deUnidad == "dias" & $aUnidad == "meses"){
            $newValor = $valor / 30 ;
        }
        echo "$valor días equivale a $newValor meses";
    }
    public function convert6($valor, $deUnidad, $aUnidad)
    {
        if($deUnidad == "meses" & $aUnidad == "dias"){
            $newValor = $valor * 30 ;
        }
        echo "$valor meses equivale a $newValor días";
    }
    public function convert7($valor, $deUnidad, $aUnidad)
    {
        if($deUnidad == "meses" & $aUnidad == "años"){
            $newValor = $valor / 12 ;
        }
        echo "$valor meses equivale a $newValor años";
    }
    public function convert8($valor, $deUnidad, $aUnidad)
    {
        if($deUnidad == "años" & $aUnidad == "meses"){
            $newValor = $valor * 12 ;
        }
        echo "$valor años equivale a $newValor meses";
    }
    public function convert9($valor, $deUnidad, $aUnidad)
    {
        if($deUnidad == "segundos" & $aUnidad == "milisegundos"){
            $newValor = $valor * 1000;
        }
        echo "$valor segundos equivale a $newValor milisegundos";
    }
    public function convert10($valor, $deUnidad, $aUnidad)
    {
        if($deUnidad == "milisegundos" & $aUnidad == "segundos"){
            $newValor = $valor / 1000;
        }
        echo "$valor milisegundos equivale a $newValor segundos";
    }

}
?>