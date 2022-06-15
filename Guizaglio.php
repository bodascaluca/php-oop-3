<?php 
include_once __DIR__ . "/Prodotto.php";

class Guinzaglio extends Prodotto{
    public $brandizzato;
    public $taglia;
    public $gps;

    function __construct($_nome_prodotto, $_marca, $_prezzo, $_brandizzato, $_gps, $_taglia){
        parent::__construct($_nome_prodotto, $_marca, $_prezzo);
        $this->brandizzato = $_brandizzato;
        $this->gps = $_gps;
        $this->taglia = $_taglia;
    }

    public function printInfo(){
       return "$this->nome_prodotto della marca $this->marca, prezzo $this->prezzo €.  Con $this->gps / $this->bramdizzato / $this->taglia";     
    }
}