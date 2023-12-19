<?php
class ConvertidorDeMoneda extends Convertidor{
    

    
    public function consumoApi(){
        $qty = $this->valor;
        $base = $this->deUnidad;
        $latest = $this->aUnidad;
        $api_url = "https://v6.exchangerate-api.com/v6/a3535fe1c4b94b8b813eb258/$latest/$base";
        
        $ch = curl_init($api_url);
        
    }
    
    public function convert1()
    {
        
    }
    public function convert2()
    {
        
    }
    public function convert3()
    {
        
    }
    public function convert4()
    {
        
    }
    public function convert5()
    {
        
    }
    public function convert6()
    {
        
    }
    public function convert7()
    {
        
    }
    public function convert8()
    {
        
    }
    public function convert9()
    {
        
    }
    public function convert10()
    {
        
    }
}
?>