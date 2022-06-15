<?php 

include __DIR__ . "/Prodotto.php";

class Alimentazione extends Prodotto{
    public $peso;
    public $tipologia;

    function __construct($_nome_prodotto, $_marca, $_prezzo, $_peso, $_tipologia){
        parent::__construct($_nome_prodotto, $_marca, $_prezzo);
        $this->peso = $_peso;
        $this->tipologia = $_tipologia;   
    }

    public function printInfo(){
       return "$this->nome_prodotto della marca $this->marca, prezzo $this->prezzo €. $this->tipologia / $this->peso gr";     
    }
}